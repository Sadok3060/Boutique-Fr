<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251020190000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Safely add missing columns only when their tables exist (avoid relation does not exist errors)';
    }

    public function up(Schema $schema): void
    {
        // Product
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF EXISTS (SELECT 1 FROM information_schema.tables WHERE table_name = 'product') THEN
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
SQL
        );

        // Category
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF EXISTS (SELECT 1 FROM information_schema.tables WHERE table_name = 'category') THEN
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
SQL
        );

        // User (table name: user)
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF EXISTS (SELECT 1 FROM information_schema.tables WHERE table_name = 'user') THEN
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
SQL
        );

        // Order (table may be named 'order')
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF EXISTS (SELECT 1 FROM information_schema.tables WHERE table_name = 'order') THEN
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
SQL
        );

        // OrderItem
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF EXISTS (SELECT 1 FROM information_schema.tables WHERE table_name = 'order_item') THEN
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
SQL
        );
    }

    public function down(Schema $schema): void
    {
        // No-op: leave explicit drops to maintenance. Use previous migration down() if necessary.
    }
}
