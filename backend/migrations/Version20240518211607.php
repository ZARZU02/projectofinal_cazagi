<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240518211607 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE clases_alumnos DROP FOREIGN KEY FK_D0360C9E158CCF68');
        $this->addSql('ALTER TABLE clases_alumnos DROP FOREIGN KEY FK_D0360C9EA03F5ABF');
        $this->addSql('DROP TABLE clases_alumnos');
        $this->addSql('ALTER TABLE alumnos ADD clase_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE alumnos ADD CONSTRAINT FK_5EC5A6AB9F720353 FOREIGN KEY (clase_id) REFERENCES clases (id)');
        $this->addSql('CREATE INDEX IDX_5EC5A6AB9F720353 ON alumnos (clase_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clases_alumnos (clases_id INT NOT NULL, alumnos_id INT NOT NULL, INDEX IDX_D0360C9E158CCF68 (clases_id), INDEX IDX_D0360C9EA03F5ABF (alumnos_id), PRIMARY KEY(clases_id, alumnos_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE clases_alumnos ADD CONSTRAINT FK_D0360C9E158CCF68 FOREIGN KEY (clases_id) REFERENCES clases (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE clases_alumnos ADD CONSTRAINT FK_D0360C9EA03F5ABF FOREIGN KEY (alumnos_id) REFERENCES alumnos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE alumnos DROP FOREIGN KEY FK_5EC5A6AB9F720353');
        $this->addSql('DROP INDEX IDX_5EC5A6AB9F720353 ON alumnos');
        $this->addSql('ALTER TABLE alumnos DROP clase_id');
    }
}
