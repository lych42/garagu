<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240219094631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE shedule');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE shedule (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, monday_am TIME NOT NULL, monday_end_am TIME NOT NULL, monday_pm TIME NOT NULL, monday_end_pm TIME NOT NULL, tuesday_am TIME NOT NULL, tuesday_end_am TIME NOT NULL, tuesday_pm TIME NOT NULL)');
    }
}
