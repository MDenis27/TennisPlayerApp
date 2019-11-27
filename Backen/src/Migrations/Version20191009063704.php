<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191009063704 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE racket DROP FOREIGN KEY FK_7189057F217BBB47');
        $this->addSql('DROP INDEX IDX_7189057F217BBB47 ON racket');
        $this->addSql('ALTER TABLE racket CHANGE person_id id_person_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE racket ADD CONSTRAINT FK_7189057FA14E0760 FOREIGN KEY (id_person_id) REFERENCES person (id)');
        $this->addSql('CREATE INDEX IDX_7189057FA14E0760 ON racket (id_person_id)');
        $this->addSql('ALTER TABLE person DROP id_racket');
        $this->addSql('ALTER TABLE tennis_string ADD id_racket_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tennis_string ADD CONSTRAINT FK_20BAE9AD50CA99CA FOREIGN KEY (id_racket_id) REFERENCES racket (id)');
        $this->addSql('CREATE INDEX IDX_20BAE9AD50CA99CA ON tennis_string (id_racket_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE person ADD id_racket INT DEFAULT NULL');
        $this->addSql('ALTER TABLE racket DROP FOREIGN KEY FK_7189057FA14E0760');
        $this->addSql('DROP INDEX IDX_7189057FA14E0760 ON racket');
        $this->addSql('ALTER TABLE racket CHANGE id_person_id person_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE racket ADD CONSTRAINT FK_7189057F217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_7189057F217BBB47 ON racket (person_id)');
        $this->addSql('ALTER TABLE tennis_string DROP FOREIGN KEY FK_20BAE9AD50CA99CA');
        $this->addSql('DROP INDEX IDX_20BAE9AD50CA99CA ON tennis_string');
        $this->addSql('ALTER TABLE tennis_string DROP id_racket_id');
    }
}
