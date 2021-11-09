<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109103716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB59D86650F');
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB5DF2AB4E5');
        $this->addSql('DROP INDEX UNIQ_195BAFB59D86650F ON parrainage');
        $this->addSql('DROP INDEX UNIQ_195BAFB5DF2AB4E5 ON parrainage');
        $this->addSql('ALTER TABLE parrainage ADD club_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL, DROP user_id_id, DROP club_id_id');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB561190A32 FOREIGN KEY (club_id) REFERENCES club (id)');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB5A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_195BAFB561190A32 ON parrainage (club_id)');
        $this->addSql('CREATE INDEX IDX_195BAFB5A76ED395 ON parrainage (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB561190A32');
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB5A76ED395');
        $this->addSql('DROP INDEX IDX_195BAFB561190A32 ON parrainage');
        $this->addSql('DROP INDEX IDX_195BAFB5A76ED395 ON parrainage');
        $this->addSql('ALTER TABLE parrainage ADD user_id_id INT DEFAULT NULL, ADD club_id_id INT DEFAULT NULL, DROP club_id, DROP user_id');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB59D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB5DF2AB4E5 FOREIGN KEY (club_id_id) REFERENCES club (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_195BAFB59D86650F ON parrainage (user_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_195BAFB5DF2AB4E5 ON parrainage (club_id_id)');
    }
}
