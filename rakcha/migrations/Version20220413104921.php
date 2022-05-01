<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413104921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chaises CHANGE id_cinema id_cinema INT DEFAULT NULL, CHANGE id_film id_film INT DEFAULT NULL');
        $this->addSql('ALTER TABLE programme CHANGE ID_E ID_E INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rating CHANGE ID_F ID_F INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ratingcinema CHANGE ID_CIN ID_CIN INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ratingoffre CHANGE ID_O ID_O INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE ID_C ID_C INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE ID_C ID_C INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chaises CHANGE id_cinema id_cinema INT NOT NULL, CHANGE id_film id_film INT NOT NULL');
        $this->addSql('ALTER TABLE programme CHANGE ID_E ID_E INT NOT NULL');
        $this->addSql('ALTER TABLE rating CHANGE ID_F ID_F INT NOT NULL');
        $this->addSql('ALTER TABLE ratingcinema CHANGE ID_CIN ID_CIN INT NOT NULL');
        $this->addSql('ALTER TABLE ratingoffre CHANGE ID_O ID_O INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE ID_C ID_C INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE ID_C ID_C INT NOT NULL');
    }
}
