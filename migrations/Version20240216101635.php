<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216101635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE shedule ADD COLUMN tuesday_end_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN wednesday_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN wednesday_end_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN wednesday_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN wednesday_end_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN thursday_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN thursday_end_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN thursday_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN thursday_end_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN friday_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN friday_end_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN friday_end_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN saturday_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN saturday_end_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN saturday_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN saturday_end_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN sunday_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN sunday_end_am TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN sunday_pm TIME NOT NULL');
        $this->addSql('ALTER TABLE shedule ADD COLUMN sunday_end_pm TIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__shedule AS SELECT id, monday_am, monday_end_am, monday_pm, monday_end_pm, tuesday_am, tuesday_end_am, tuesday_pm FROM shedule');
        $this->addSql('DROP TABLE shedule');
        $this->addSql('CREATE TABLE shedule (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, monday_am TIME NOT NULL, monday_end_am TIME NOT NULL, monday_pm TIME NOT NULL, monday_end_pm TIME NOT NULL, tuesday_am TIME NOT NULL, tuesday_end_am TIME NOT NULL, tuesday_pm TIME NOT NULL)');
        $this->addSql('INSERT INTO shedule (id, monday_am, monday_end_am, monday_pm, monday_end_pm, tuesday_am, tuesday_end_am, tuesday_pm) SELECT id, monday_am, monday_end_am, monday_pm, monday_end_pm, tuesday_am, tuesday_end_am, tuesday_pm FROM __temp__shedule');
        $this->addSql('DROP TABLE __temp__shedule');
    }
}
