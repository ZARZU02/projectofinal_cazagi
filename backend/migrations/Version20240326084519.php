<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240326084519 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD consejos_id INT DEFAULT NULL, ADD comunidad_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649BF2A6EDF FOREIGN KEY (consejos_id) REFERENCES consejos (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B824C74B FOREIGN KEY (comunidad_id) REFERENCES comunidad (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649BF2A6EDF ON user (consejos_id)');
        $this->addSql('CREATE INDEX IDX_8D93D649B824C74B ON user (comunidad_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649BF2A6EDF');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B824C74B');
        $this->addSql('DROP INDEX IDX_8D93D649BF2A6EDF ON user');
        $this->addSql('DROP INDEX IDX_8D93D649B824C74B ON user');
        $this->addSql('ALTER TABLE user DROP consejos_id, DROP comunidad_id');
    }
}
