<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109103435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club DROP FOREIGN KEY FK_B8EE387242F7E816');
        $this->addSql('DROP INDEX IDX_B8EE387242F7E816 ON club');
        $this->addSql('ALTER TABLE club DROP parrainage_id_id');
        $this->addSql('ALTER TABLE parrainage ADD user_id_id INT DEFAULT NULL, ADD club_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB59D86650F FOREIGN KEY (user_id_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE parrainage ADD CONSTRAINT FK_195BAFB5DF2AB4E5 FOREIGN KEY (club_id_id) REFERENCES club (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_195BAFB59D86650F ON parrainage (user_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_195BAFB5DF2AB4E5 ON parrainage (club_id_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64942F7E816');
        $this->addSql('DROP INDEX IDX_8D93D64942F7E816 ON user');
        $this->addSql('ALTER TABLE user DROP parrainage_id_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club ADD parrainage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE club ADD CONSTRAINT FK_B8EE387242F7E816 FOREIGN KEY (parrainage_id_id) REFERENCES parrainage (id)');
        $this->addSql('CREATE INDEX IDX_B8EE387242F7E816 ON club (parrainage_id_id)');
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB59D86650F');
        $this->addSql('ALTER TABLE parrainage DROP FOREIGN KEY FK_195BAFB5DF2AB4E5');
        $this->addSql('DROP INDEX UNIQ_195BAFB59D86650F ON parrainage');
        $this->addSql('DROP INDEX UNIQ_195BAFB5DF2AB4E5 ON parrainage');
        $this->addSql('ALTER TABLE parrainage DROP user_id_id, DROP club_id_id');
        $this->addSql('ALTER TABLE `user` ADD parrainage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D64942F7E816 FOREIGN KEY (parrainage_id_id) REFERENCES parrainage (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64942F7E816 ON `user` (parrainage_id_id)');
    }
}
