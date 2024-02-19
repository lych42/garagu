<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219103840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horaires ADD COLUMN heure_ouverture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE horaires ADD COLUMN heure_fermeture VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__horaires AS SELECT id, jour FROM horaires');
        $this->addSql('DROP TABLE horaires');
        $this->addSql('CREATE TABLE horaires (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, jour VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO horaires (id, jour) SELECT id, jour FROM __temp__horaires');
        $this->addSql('DROP TABLE __temp__horaires');
    }
}
