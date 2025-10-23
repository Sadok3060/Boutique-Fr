<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251020196000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Safely add columns to order table only if it exists';
    }

    public function up(Schema $schema): void
    {
        // Add columns to order table only if it exists
        $this->addSql(<<<'SQL'
DO $$
DECLARE
    table_exists boolean;
BEGIN
    -- Use to_regclass to safely check if table exists
    SELECT to_regclass('public."order"') IS NOT NULL INTO table_exists;
    
    IF table_exists THEN
        RAISE NOTICE 'Table "order" exists, checking columns...';
        
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
    ELSE
        RAISE NOTICE 'Table "order" does not exist, skipping column additions';
    END IF;
END$$;
SQL
        );
    }

    public function down(Schema $schema): void
    {
        // No down migration needed as we only add columns if table exists
    }
}