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


# Wait for PostgreSQL to be ready
echo "Waiting for PostgreSQL..."
until php /app/check_postgresql.php > /dev/null 2>&1; do
    echo "PostgreSQL is unavailable - sleeping 2s"
    sleep 2
done
echo "PostgreSQL is up!"

# Correction automatique du schéma (ajout colonnes manquantes, safe)
echo "Running DB schema fix script (bin/fix_db_all.php)..."
php /app/bin/fix_db_all.php || true
echo "DB schema fix done."

# Ensure critical tables/columns exist and fix NULL firstname/lastname for admin using psql (if available)
if [ -n "${DATABASE_URL}" ] && command -v psql > /dev/null 2>&1; then
        echo "Running quick DB fixes via psql..."
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

# Run database migrations and setup admin in production
if [ "${APP_ENV}" = "prod" ]; then
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

