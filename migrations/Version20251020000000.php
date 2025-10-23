<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20251020000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Initial PostgreSQL schema';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE category_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cart_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        
        // Users table
        $this->addSql('CREATE TABLE "user" (
            id INT NOT NULL DEFAULT nextval(\'user_id_seq\'::regclass),
            email VARCHAR(180) NOT NULL,
            roles JSON NOT NULL,
            password VARCHAR(255) NOT NULL,
            firstname VARCHAR(255) NOT NULL,
            lastname VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)
        )');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        
        // Categories table
        $this->addSql('CREATE TABLE category (
            id INT NOT NULL DEFAULT nextval(\'category_id_seq\'::regclass),
            name VARCHAR(255) NOT NULL,
            description TEXT DEFAULT NULL,
            PRIMARY KEY(id)
        )');
        
        // Products table
        $this->addSql('CREATE TABLE product (
            id INT NOT NULL DEFAULT nextval(\'product_id_seq\'::regclass),
            category_id INT DEFAULT NULL,
            name VARCHAR(255) NOT NULL,
            slug VARCHAR(255) NOT NULL,
            illustration VARCHAR(255) NOT NULL,
            subtitle VARCHAR(255) NOT NULL,
            description TEXT NOT NULL,
            price DOUBLE PRECISION NOT NULL,
            is_best BOOLEAN DEFAULT false,
            PRIMARY KEY(id)
        )');
        $this->addSql('CREATE INDEX IDX_D34A04AD12469DE2 ON product (category_id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        
        // Cart table
        $this->addSql('CREATE TABLE cart (
            id INT NOT NULL DEFAULT nextval(\'cart_id_seq\'::regclass),
            user_id INT DEFAULT NULL,
            created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL,
            PRIMARY KEY(id)
        )');
        $this->addSql('CREATE INDEX IDX_BA388B7A76ED395 ON cart (user_id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B7A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS cart');
        $this->addSql('DROP TABLE IF EXISTS product');
        $this->addSql('DROP TABLE IF EXISTS category');
        $this->addSql('DROP TABLE IF EXISTS "user"');
        $this->addSql('DROP SEQUENCE IF EXISTS product_id_seq');
        $this->addSql('DROP SEQUENCE IF EXISTS category_id_seq');
        $this->addSql('DROP SEQUENCE IF EXISTS cart_id_seq');
        $this->addSql('DROP SEQUENCE IF EXISTS "user_id_seq"');
    }
}