<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206082550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE empleado (id INT AUTO_INCREMENT NOT NULL, apellidos VARCHAR(255) NOT NULL, oficio VARCHAR(255) NOT NULL, jefe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pagos (id INT AUTO_INCREMENT NOT NULL, pagos_no_id INT DEFAULT NULL, pedido_fecha VARCHAR(255) DEFAULT NULL, pedido_tipo VARCHAR(255) DEFAULT NULL, fecha_envio VARCHAR(255) DEFAULT NULL, total VARCHAR(255) DEFAULT NULL, INDEX IDX_DA9B0DFF665690E4 (pagos_no_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pagos ADD CONSTRAINT FK_DA9B0DFF665690E4 FOREIGN KEY (pagos_no_id) REFERENCES empleado (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pagos DROP FOREIGN KEY FK_DA9B0DFF665690E4');
        $this->addSql('DROP TABLE empleado');
        $this->addSql('DROP TABLE pagos');
        $this->addSql('DROP TABLE user');
    }
}
