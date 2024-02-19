<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219123639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE vehicle');
        $this->addSql('CREATE TEMPORARY TABLE __temp__vehichle AS SELECT id, brand, model, year, mileage, updated_at FROM vehichle');
        $this->addSql('DROP TABLE vehichle');
        $this->addSql('CREATE TABLE vehichle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, mileage VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        , image_name VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO vehichle (id, brand, model, year, mileage, updated_at) SELECT id, brand, model, year, mileage, updated_at FROM __temp__vehichle');
        $this->addSql('DROP TABLE __temp__vehichle');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vehicle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL COLLATE "BINARY")');
        $this->addSql('CREATE TEMPORARY TABLE __temp__vehichle AS SELECT id, brand, model, year, mileage, updated_at FROM vehichle');
        $this->addSql('DROP TABLE vehichle');
        $this->addSql('CREATE TABLE vehichle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, mileage VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL)');
        $this->addSql('INSERT INTO vehichle (id, brand, model, year, mileage, updated_at) SELECT id, brand, model, year, mileage, updated_at FROM __temp__vehichle');
        $this->addSql('DROP TABLE __temp__vehichle');
    }
}
