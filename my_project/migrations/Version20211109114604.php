<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109114604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB561190A32');
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB5A76ED395');
        $this->addSql('DROP INDEX IDX_195BAFB561190A32 ON parrainage');
        $this->addSql('DROP INDEX IDX_195BAFB5A76ED395 ON parrainage');
        $this->addSql('ALTER TABLE parrainage DROP club_id, DROP user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parrainage ADD club_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB561190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_195BAFB561190A32 ON parrainage (club_id)');
        $this->addSql('CREATE INDEX IDX_195BAFB5A76ED395 ON parrainage (user_id)');
    }
}
