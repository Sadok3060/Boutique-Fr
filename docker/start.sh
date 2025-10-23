#!/bin/sh
set -e

# Default port if not provided by Render
: ${PORT:=8000}

# Replace placeholder port in nginx config
if [ -f /etc/nginx/nginx.conf ]; then
    sed -i "s/__PORT__/${PORT}/g" /etc/nginx/nginx.conf || true
fi

# Ensure php-fpm listens on 127.0.0.1:9000
PHP_FPM_CONF="/usr/local/etc/php-fpm.d/www.conf"
if [ -f "$PHP_FPM_CONF" ]; then
    sed -i "s/^listen\s*=.*$/listen = 127.0.0.1:9000/" "$PHP_FPM_CONF" || true
fi

# Create required directories and set permissions
mkdir -p /app/var /app/public/uploads
chown -R www-data:www-data /app/var /app/public/uploads
chmod -R 755 /app/public/uploads /app/var

# Control whether to run DB initialization tasks during startup (safety for platforms with DNS issues)
: ${RUN_DB_INIT:=false}

# If DATABASE_URL appears to contain a short host (no dot), try to auto-complete it
# with the common Render Postgres domain for the region. This helps when the
# provided URL lacks the full FQDN. We only try a best-effort replacement.
if [ -n "${DATABASE_URL}" ]; then
    # extract host (between @ and : or /)
    DB_HOST=$(echo "${DATABASE_URL}" | sed -n 's#.*@\([^:/]*\).*#\1#p' || true)
    if [ -n "${DB_HOST}" ]; then
        echo "Detected DB host: ${DB_HOST}"
        # only attempt if host contains no dot (likely short name)
        if ! echo "${DB_HOST}" | grep -q '\.'; then
            CANDIDATE_HOST="${DB_HOST}.oregon-postgres.render.com"
            echo "Host looks short; testing resolution for ${DB_HOST} and ${CANDIDATE_HOST}"
            # try to resolve original host
            if getent hosts "${DB_HOST}" > /dev/null 2>&1 || ping -c 1 -W 2 "${DB_HOST}" > /dev/null 2>&1; then
                echo "Original host ${DB_HOST} resolves." 
            else
                # try candidate
                if getent hosts "${CANDIDATE_HOST}" > /dev/null 2>&1 || ping -c 1 -W 2 "${CANDIDATE_HOST}" > /dev/null 2>&1; then
                    echo "Candidate host ${CANDIDATE_HOST} resolves — updating DATABASE_URL to use it."
                    # replace only the host part in DATABASE_URL
                    DATABASE_URL="$(echo "${DATABASE_URL}" | sed "s#@${DB_HOST}#@${CANDIDATE_HOST}#")"
                    export DATABASE_URL
                else
                    echo "Neither ${DB_HOST} nor ${CANDIDATE_HOST} resolve; leaving DATABASE_URL unchanged." 
                fi
            fi
        else
            echo "DB host appears fully-qualified: ${DB_HOST}"
        fi
    fi
fi


# Wait for PostgreSQL to be ready
echo "Waiting for PostgreSQL..."
until php /app/check_postgresql.php > /dev/null 2>&1; do
    echo "PostgreSQL is unavailable - sleeping 2s"
    sleep 2
done
echo "PostgreSQL is up!"
# If RUN_DB_INIT is true, run DB initialization/fixes. Otherwise skip to let the app start and
# allow manual database initialization from a Render shell or job.
if [ "${RUN_DB_INIT}" = "true" ]; then
    # Correction automatique du schéma (ajout colonnes manquantes, safe)
    echo "Running DB schema fix script (bin/fix_db_all.php)..."
    php /app/bin/fix_db_all.php || true
    echo "DB schema fix done."
else
    echo "RUN_DB_INIT != true -> Skipping automatic DB schema fixes at startup."
fi

# Ensure critical tables/columns exist and fix NULL firstname/lastname for admin using psql (if available)
if [ "${RUN_DB_INIT}" = "true" ] && [ -n "${DATABASE_URL}" ] && command -v psql > /dev/null 2>&1; then
    echo "RUN_DB_INIT=true -> Running quick DB fixes via psql..."
    psql "${DATABASE_URL}" -v ON_ERROR_STOP=1 <<'PSQL' || true
BEGIN;
-- Create minimal order table if missing (safe, id and fk to user)
CREATE TABLE IF NOT EXISTS "order" (
    id SERIAL PRIMARY KEY,
    user_id INTEGER NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT 'new',
    total NUMERIC(10,2) NOT NULL DEFAULT 0,
    order_number VARCHAR(255) NOT NULL DEFAULT '',
    created_at TIMESTAMP WITHOUT TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP WITHOUT TIME ZONE DEFAULT CURRENT_TIMESTAMP
);
-- Try to add FK to user if both tables exist
DO $$
BEGIN
    IF EXISTS (SELECT 1 FROM information_schema.tables WHERE table_name='"user"' OR table_name='user') THEN
        BEGIN
            ALTER TABLE "order" ADD CONSTRAINT IF NOT EXISTS fk_order_user FOREIGN KEY (user_id) REFERENCES "user"(id);
        EXCEPTION WHEN undefined_table THEN
            -- user table doesn't exist yet, ignore
            NULL;
        END;
    END IF;
END$$;

-- Ensure order_number column exists (defensive)
ALTER TABLE "order" ADD COLUMN IF NOT EXISTS order_number VARCHAR(255) NOT NULL DEFAULT '';

-- Fix admin firstname/lastname NULLs to avoid NOT NULL constraint violations
UPDATE "user"
SET first_name = COALESCE(first_name, 'Admin'),
        last_name  = COALESCE(last_name, 'System')
WHERE email ILIKE 'admin%';

COMMIT;
PSQL
        echo "Quick DB fixes applied (psql)."
else
        echo "Skipping psql DB fixes: DATABASE_URL not set or psql not available."
fi

# Run database migrations and setup admin in production (only if RUN_DB_INIT=true)
if [ "${RUN_DB_INIT}" = "true" ] && [ "${APP_ENV}" = "prod" ]; then
    # Create database schema first
    echo "Creating database schema..."
    php /app/bin/console doctrine:schema:create --no-interaction || true
    
    # Then update any missing columns
    echo "Updating database schema..."
    php /app/bin/console doctrine:schema:update --force || true
    
    # Run migrations after schema is ready
    echo "Running database migrations..."
    php /app/bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration || true
    
    # Clear and warm up cache
    php /app/bin/console cache:clear --env=prod --no-debug
    php /app/bin/console cache:warmup --env=prod --no-debug
    
    # Create admin user if not exists
    echo "Ensuring admin user exists..."
    php /app/bin/console app:create-admin --no-interaction || true
fi

# Start php-fpm in background
php-fpm &

# Start nginx in foreground
nginx -g 'daemon off;'

