<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Add missing columns to product table
 */
final class Version20251020170000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add missing columns to product table (main_image, images, sku, isActive, isFeatured)';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE product ADD main_image VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD images JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD sku VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD is_active BOOLEAN NOT NULL DEFAULT true');
        $this->addSql('ALTER TABLE product ADD is_featured BOOLEAN NOT NULL DEFAULT false');
        $this->addSql('ALTER TABLE product ADD created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE product ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL DEFAULT CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE product DROP main_image');
        $this->addSql('ALTER TABLE product DROP images');
        $this->addSql('ALTER TABLE product DROP sku');
        $this->addSql('ALTER TABLE product DROP is_active');
        $this->addSql('ALTER TABLE product DROP is_featured');
        $this->addSql('ALTER TABLE product DROP created_at');
        $this->addSql('ALTER TABLE product DROP updated_at');
    }
}