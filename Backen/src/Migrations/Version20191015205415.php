<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191015205415 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE racket (id INT AUTO_INCREMENT NOT NULL, id_person_id INT DEFAULT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, stringed TINYINT(1) NOT NULL, INDEX IDX_7189057FA14E0760 (id_person_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) NOT NULL, mail VARCHAR(255) DEFAULT NULL, note LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tennis_string (id INT AUTO_INCREMENT NOT NULL, id_racket_id INT DEFAULT NULL, brand VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, gauge DOUBLE PRECISION NOT NULL, long_tension INT NOT NULL, cross_tension INT NOT NULL, date DATE NOT NULL, INDEX IDX_20BAE9AD50CA99CA (id_racket_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE racket ADD CONSTRAINT FK_7189057FA14E0760 FOREIGN KEY (id_person_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE tennis_string ADD CONSTRAINT FK_20BAE9AD50CA99CA FOREIGN KEY (id_racket_id) REFERENCES racket (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tennis_string DROP FOREIGN KEY FK_20BAE9AD50CA99CA');
        $this->addSql('ALTER TABLE racket DROP FOREIGN KEY FK_7189057FA14E0760');
        $this->addSql('DROP TABLE racket');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE tennis_string');
    }
}
