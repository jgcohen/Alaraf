<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220124152220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD content2 LONGTEXT DEFAULT NULL, ADD content3 LONGTEXT DEFAULT NULL, ADD content4 LONGTEXT DEFAULT NULL, ADD content5 LONGTEXT DEFAULT NULL, ADD content6 LONGTEXT DEFAULT NULL, ADD content7 LONGTEXT DEFAULT NULL, ADD content8 LONGTEXT DEFAULT NULL, ADD content9 LONGTEXT DEFAULT NULL, ADD content10 LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP content2, DROP content3, DROP content4, DROP content5, DROP content6, DROP content7, DROP content8, DROP content9, DROP content10');
    }
}
