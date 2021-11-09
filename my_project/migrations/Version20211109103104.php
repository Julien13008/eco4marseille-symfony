<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211109103104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE parrainage (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE club ADD parrainage_id_id INT DEFAULT NULL, DROP club_name');
        $this->addSql('ALTER TABLE club ADD CONSTRAINT FK_B8EE387242F7E816 FOREIGN KEY (parrainage_id_id) REFERENCES parrainage (id)');
        $this->addSql('CREATE INDEX IDX_B8EE387242F7E816 ON club (parrainage_id_id)');
        $this->addSql('ALTER TABLE user ADD parrainage_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64942F7E816 FOREIGN KEY (parrainage_id_id) REFERENCES parrainage (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64942F7E816 ON user (parrainage_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE club DROP FOREIGN KEY FK_B8EE387242F7E816');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D64942F7E816');
        $this->addSql('DROP TABLE parrainage');
        $this->addSql('DROP INDEX IDX_B8EE387242F7E816 ON club');
        $this->addSql('ALTER TABLE club ADD club_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP parrainage_id_id');
        $this->addSql('DROP INDEX IDX_8D93D64942F7E816 ON `user`');
        $this->addSql('ALTER TABLE `user` DROP parrainage_id_id');
    }
}
