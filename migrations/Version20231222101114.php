<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231222101114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE movie_media_object (movie_id INT NOT NULL, media_object_id INT NOT NULL, INDEX IDX_3722D0018F93B6FC (movie_id), INDEX IDX_3722D00164DE5A5 (media_object_id), PRIMARY KEY(movie_id, media_object_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_media_object ADD CONSTRAINT FK_3722D0018F93B6FC FOREIGN KEY (movie_id) REFERENCES movie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE movie_media_object ADD CONSTRAINT FK_3722D00164DE5A5 FOREIGN KEY (media_object_id) REFERENCES media_object (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie_media_object DROP FOREIGN KEY FK_3722D0018F93B6FC');
        $this->addSql('ALTER TABLE movie_media_object DROP FOREIGN KEY FK_3722D00164DE5A5');
        $this->addSql('DROP TABLE movie_media_object');
    }
}
