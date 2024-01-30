<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231222105157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actor ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE actor ADD CONSTRAINT FK_447556F93DA5256D FOREIGN KEY (image_id) REFERENCES media_object (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_447556F93DA5256D ON actor (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actor DROP FOREIGN KEY FK_447556F93DA5256D');
        $this->addSql('DROP INDEX UNIQ_447556F93DA5256D ON actor');
        $this->addSql('ALTER TABLE actor DROP image_id');
    }
}
