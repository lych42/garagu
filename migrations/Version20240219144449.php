<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219144449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehichle ADD COLUMN price VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__vehichle AS SELECT id, brand, model, year, mileage FROM vehichle');
        $this->addSql('DROP TABLE vehichle');
        $this->addSql('CREATE TABLE vehichle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL, mileage VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO vehichle (id, brand, model, year, mileage) SELECT id, brand, model, year, mileage FROM __temp__vehichle');
        $this->addSql('DROP TABLE __temp__vehichle');
    }
}
