<?php
// Safe script to add missing columns to production DB. Run from the server shell (Render) with: php bin/fix_db_all.php

require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->bootEnv(__DIR__ . '/../.env');

$dsn = getenv('DATABASE_URL');
if (!$dsn) {
    echo "DATABASE_URL not found in environment.\n";
    exit(1);
}

// Parse DATABASE_URL (expected postgresql://user:pass@host:port/dbname...)
$components = parse_url($dsn);
if ($components === false) {
    echo "Failed to parse DATABASE_URL\n";
    exit(1);
}

$host = $components['host'] ?? '127.0.0.1';
$port = $components['port'] ?? 5432;
$user = $components['user'] ?? null;
$pass = $components['pass'] ?? null;
$dbname = ltrim($components['path'] ?? '', '/');

$pdoDsn = sprintf('pgsql:host=%s;port=%d;dbname=%s', $host, $port, $dbname);

try {
    $pdo = new PDO($pdoDsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "Connected to DB: $dbname@ $host:$port\n";

    $sqlBlocks = [];

    // Product
    $sqlBlocks[] = <<<SQL
DO $$
BEGIN
    -- use to_regclass to properly detect table existence (handles quoted/reserved names)
    IF to_regclass('public.product') IS NOT NULL THEN
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'stock') THEN
            ALTER TABLE product ADD COLUMN stock INT NOT NULL DEFAULT 0;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'main_image') THEN
            ALTER TABLE product ADD COLUMN main_image VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'images') THEN
            ALTER TABLE product ADD COLUMN images JSON DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'sku') THEN
            ALTER TABLE product ADD COLUMN sku VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'is_active') THEN
            ALTER TABLE product ADD COLUMN is_active BOOLEAN NOT NULL DEFAULT true;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'is_featured') THEN
            ALTER TABLE product ADD COLUMN is_featured BOOLEAN NOT NULL DEFAULT false;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'created_at') THEN
            ALTER TABLE product ADD COLUMN created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'product' AND column_name = 'updated_at') THEN
            ALTER TABLE product ADD COLUMN updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
    END IF;
END$$;
SQL;

    // Category
    $sqlBlocks[] = <<<SQL
DO $$
BEGIN
    IF to_regclass('public.category') IS NOT NULL THEN
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'category' AND column_name = 'image') THEN
            ALTER TABLE category ADD COLUMN image VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'category' AND column_name = 'is_active') THEN
            ALTER TABLE category ADD COLUMN is_active BOOLEAN NOT NULL DEFAULT true;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'category' AND column_name = 'created_at') THEN
            ALTER TABLE category ADD COLUMN created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'category' AND column_name = 'updated_at') THEN
            ALTER TABLE category ADD COLUMN updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
    END IF;
END$$;
SQL;

    // User
    $sqlBlocks[] = <<<SQL
DO $$
BEGIN
    -- "user" is a reserved word; check via to_regclass with quotes
    IF to_regclass('public."user"') IS NOT NULL THEN
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'roles') THEN
            ALTER TABLE "user" ADD COLUMN roles JSON DEFAULT '[]'::json;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'password') THEN
            ALTER TABLE "user" ADD COLUMN password VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'first_name') THEN
            ALTER TABLE "user" ADD COLUMN first_name VARCHAR(255) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'last_name') THEN
            ALTER TABLE "user" ADD COLUMN last_name VARCHAR(255) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'phone') THEN
            ALTER TABLE "user" ADD COLUMN phone VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'address') THEN
            ALTER TABLE "user" ADD COLUMN address VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'postal_code') THEN
            ALTER TABLE "user" ADD COLUMN postal_code VARCHAR(10) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'city') THEN
            ALTER TABLE "user" ADD COLUMN city VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'country') THEN
            ALTER TABLE "user" ADD COLUMN country VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'created_at') THEN
            ALTER TABLE "user" ADD COLUMN created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'updated_at') THEN
            ALTER TABLE "user" ADD COLUMN updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'user' AND column_name = 'is_active') THEN
            ALTER TABLE "user" ADD COLUMN is_active BOOLEAN NOT NULL DEFAULT true;
        END IF;
    END IF;
END$$;
SQL;

    // Order
    $sqlBlocks[] = <<<SQL
DO $$
BEGIN
    -- "order" is a reserved word and the entity maps to a quoted table name; use to_regclass
    IF to_regclass('public."order"') IS NOT NULL THEN
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'order_number') THEN
            ALTER TABLE "order" ADD COLUMN order_number VARCHAR(255) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'status') THEN
            ALTER TABLE "order" ADD COLUMN status VARCHAR(255) NOT NULL DEFAULT 'pending';
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'subtotal') THEN
            ALTER TABLE "order" ADD COLUMN subtotal NUMERIC(10,2) NOT NULL DEFAULT 0;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'tva') THEN
            ALTER TABLE "order" ADD COLUMN tva NUMERIC(10,2) NOT NULL DEFAULT 0;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'total') THEN
            ALTER TABLE "order" ADD COLUMN total NUMERIC(10,2) NOT NULL DEFAULT 0;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'shipping_address') THEN
            ALTER TABLE "order" ADD COLUMN shipping_address VARCHAR(255) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'shipping_postal_code') THEN
            ALTER TABLE "order" ADD COLUMN shipping_postal_code VARCHAR(10) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'shipping_city') THEN
            ALTER TABLE "order" ADD COLUMN shipping_city VARCHAR(255) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'shipping_country') THEN
            ALTER TABLE "order" ADD COLUMN shipping_country VARCHAR(255) NOT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'shipping_phone') THEN
            ALTER TABLE "order" ADD COLUMN shipping_phone VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'notes') THEN
            ALTER TABLE "order" ADD COLUMN notes VARCHAR(255) DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'created_at') THEN
            ALTER TABLE "order" ADD COLUMN created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'updated_at') THEN
            ALTER TABLE "order" ADD COLUMN updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order' AND column_name = 'user_id') THEN
            ALTER TABLE "order" ADD COLUMN user_id INT DEFAULT NULL;
        END IF;
    END IF;
END$$;
SQL;

    // OrderItem
    $sqlBlocks[] = <<<SQL
DO $$
BEGIN
    IF to_regclass('public.order_item') IS NOT NULL THEN
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order_item' AND column_name = 'quantity') THEN
            ALTER TABLE order_item ADD COLUMN quantity INT NOT NULL DEFAULT 1;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order_item' AND column_name = 'unit_price') THEN
            ALTER TABLE order_item ADD COLUMN unit_price NUMERIC(10,2) NOT NULL DEFAULT 0;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order_item' AND column_name = 'subtotal') THEN
            ALTER TABLE order_item ADD COLUMN subtotal NUMERIC(10,2) NOT NULL DEFAULT 0;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order_item' AND column_name = 'order_id') THEN
            ALTER TABLE order_item ADD COLUMN order_id INT DEFAULT NULL;
        END IF;
        IF NOT EXISTS (SELECT 1 FROM information_schema.columns WHERE table_name = 'order_item' AND column_name = 'product_id') THEN
            ALTER TABLE order_item ADD COLUMN product_id INT DEFAULT NULL;
        END IF;
    END IF;
END$$;
SQL;

    // support a dry-run mode: if called with --dry-run, just print SQL blocks
    $dryRun = in_array('--dry-run', $argv ?? []);

    foreach ($sqlBlocks as $i => $block) {
        echo "--- Block " . ($i+1) . " ---\n";
        if ($dryRun) {
            echo $block . "\n";
            continue;
        }
        echo "Executing block " . ($i+1) . "...\n";
        $pdo->exec($block);
        echo "Block " . ($i+1) . " done.\n";
    }

    echo "All blocks executed.\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}

