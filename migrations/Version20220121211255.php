<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220121211255 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE faction (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE npc (id INT AUTO_INCREMENT NOT NULL, faction_id INT DEFAULT NULL, subfaction_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, description LONGTEXT NOT NULL, race VARCHAR(255) NOT NULL, INDEX IDX_468C762C4448F8DA (faction_id), INDEX IDX_468C762C1BD91F79 (subfaction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subfaction (id INT AUTO_INCREMENT NOT NULL, faction_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_C866235F4448F8DA (faction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE npc ADD CONSTRAINT FK_468C762C4448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id)');
        $this->addSql('ALTER TABLE npc ADD CONSTRAINT FK_468C762C1BD91F79 FOREIGN KEY (subfaction_id) REFERENCES subfaction (id)');
        $this->addSql('ALTER TABLE subfaction ADD CONSTRAINT FK_C866235F4448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE npc DROP FOREIGN KEY FK_468C762C4448F8DA');
        $this->addSql('ALTER TABLE subfaction DROP FOREIGN KEY FK_C866235F4448F8DA');
        $this->addSql('ALTER TABLE npc DROP FOREIGN KEY FK_468C762C1BD91F79');
        $this->addSql('DROP TABLE faction');
        $this->addSql('DROP TABLE npc');
        $this->addSql('DROP TABLE subfaction');
    }
}
