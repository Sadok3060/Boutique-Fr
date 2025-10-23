<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251020195000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create order table if not exists and add required columns';
    }

    public function up(Schema $schema): void
    {
        // Create order table first if it doesn't exist
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF NOT EXISTS (SELECT 1 FROM pg_tables WHERE schemaname = 'public' AND tablename = 'order') THEN
        CREATE TABLE "order" (
            id SERIAL PRIMARY KEY,
            order_number VARCHAR(255) NOT NULL,
            status VARCHAR(255) NOT NULL DEFAULT 'pending',
            subtotal NUMERIC(10,2) NOT NULL DEFAULT 0,
            tva NUMERIC(10,2) NOT NULL DEFAULT 0,
            total NUMERIC(10,2) NOT NULL DEFAULT 0,
            shipping_address VARCHAR(255) NOT NULL,
            shipping_postal_code VARCHAR(10) NOT NULL,
            shipping_city VARCHAR(255) NOT NULL,
            shipping_country VARCHAR(255) NOT NULL,
            shipping_phone VARCHAR(255) DEFAULT NULL,
            notes VARCHAR(255) DEFAULT NULL,
            created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP,
            user_id INT DEFAULT NULL
        );

        -- Add indices
        CREATE UNIQUE INDEX order_number_idx ON "order" (order_number);
        CREATE INDEX order_user_idx ON "order" (user_id);
        CREATE INDEX order_status_idx ON "order" (status);
        CREATE INDEX order_created_idx ON "order" (created_at);
    END IF;
END$$;
SQL
        );

        // Add foreign key constraints if user table exists
        $this->addSql(<<<'SQL'
DO $$
BEGIN
    IF EXISTS (
        SELECT 1 FROM pg_tables WHERE schemaname = 'public' AND tablename = 'order'
    ) AND EXISTS (
        SELECT 1 FROM pg_tables WHERE schemaname = 'public' AND tablename = 'user'
    ) AND NOT EXISTS (
        SELECT 1 FROM pg_constraint WHERE conname = 'fk_order_user'
    ) THEN
        ALTER TABLE "order"
        ADD CONSTRAINT fk_order_user
        FOREIGN KEY (user_id)
        REFERENCES "user" (id)
        ON DELETE SET NULL;
    END IF;
END$$;
SQL
        );
    }

    public function down(Schema $schema): void
    {
        // Down migration - only if you really need to remove the table
        $this->addSql('DROP TABLE IF EXISTS "order" CASCADE');
    }
}