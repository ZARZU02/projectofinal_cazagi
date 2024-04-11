<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240410145847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrenadores_programas_deportes DROP FOREIGN KEY FK_A0D897D8F716ACED');
        $this->addSql('ALTER TABLE entrenadores_programas_deportes DROP FOREIGN KEY FK_A0D897D8284865EB');
        $this->addSql('ALTER TABLE user_horario_clases DROP FOREIGN KEY FK_7D3139D9435CFD59');
        $this->addSql('ALTER TABLE user_horario_clases DROP FOREIGN KEY FK_7D3139D9A76ED395');
        $this->addSql('ALTER TABLE user_programas_deportes DROP FOREIGN KEY FK_4D5A94BEA76ED395');
        $this->addSql('ALTER TABLE user_programas_deportes DROP FOREIGN KEY FK_4D5A94BEF716ACED');
        $this->addSql('ALTER TABLE ejercicios_user DROP FOREIGN KEY FK_8B7F1045A76ED395');
        $this->addSql('ALTER TABLE ejercicios_user DROP FOREIGN KEY FK_8B7F1045C9F539AE');
        $this->addSql('DROP TABLE entrenadores_programas_deportes');
        $this->addSql('DROP TABLE user_horario_clases');
        $this->addSql('DROP TABLE user_programas_deportes');
        $this->addSql('DROP TABLE ejercicios_user');
        $this->addSql('ALTER TABLE comunidad DROP fecha_publicacion');
        $this->addSql('ALTER TABLE entrenadores DROP FOREIGN KEY FK_E15FDEE2C9F539AE');
        $this->addSql('ALTER TABLE entrenadores DROP FOREIGN KEY FK_E15FDEE2435CFD59');
        $this->addSql('ALTER TABLE entrenadores DROP FOREIGN KEY FK_E15FDEE24959F1BA');
        $this->addSql('DROP INDEX IDX_E15FDEE24959F1BA ON entrenadores');
        $this->addSql('DROP INDEX IDX_E15FDEE2435CFD59 ON entrenadores');
        $this->addSql('DROP INDEX IDX_E15FDEE2C9F539AE ON entrenadores');
        $this->addSql('ALTER TABLE entrenadores DROP horario_clases_id, DROP ejercicios_id, DROP horario_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493DD05344');
        $this->addSql('DROP INDEX IDX_8D93D6493DD05344 ON user');
        $this->addSql('ALTER TABLE user DROP precios_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entrenadores_programas_deportes (entrenadores_id INT NOT NULL, programas_deportes_id INT NOT NULL, INDEX IDX_A0D897D8284865EB (entrenadores_id), INDEX IDX_A0D897D8F716ACED (programas_deportes_id), PRIMARY KEY(entrenadores_id, programas_deportes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_horario_clases (user_id INT NOT NULL, horario_clases_id INT NOT NULL, INDEX IDX_7D3139D9A76ED395 (user_id), INDEX IDX_7D3139D9435CFD59 (horario_clases_id), PRIMARY KEY(user_id, horario_clases_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_programas_deportes (user_id INT NOT NULL, programas_deportes_id INT NOT NULL, INDEX IDX_4D5A94BEF716ACED (programas_deportes_id), INDEX IDX_4D5A94BEA76ED395 (user_id), PRIMARY KEY(user_id, programas_deportes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ejercicios_user (ejercicios_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_8B7F1045A76ED395 (user_id), INDEX IDX_8B7F1045C9F539AE (ejercicios_id), PRIMARY KEY(ejercicios_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE entrenadores_programas_deportes ADD CONSTRAINT FK_A0D897D8F716ACED FOREIGN KEY (programas_deportes_id) REFERENCES programas_deportes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entrenadores_programas_deportes ADD CONSTRAINT FK_A0D897D8284865EB FOREIGN KEY (entrenadores_id) REFERENCES entrenadores (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_horario_clases ADD CONSTRAINT FK_7D3139D9435CFD59 FOREIGN KEY (horario_clases_id) REFERENCES horario_clases (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_horario_clases ADD CONSTRAINT FK_7D3139D9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_programas_deportes ADD CONSTRAINT FK_4D5A94BEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_programas_deportes ADD CONSTRAINT FK_4D5A94BEF716ACED FOREIGN KEY (programas_deportes_id) REFERENCES programas_deportes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ejercicios_user ADD CONSTRAINT FK_8B7F1045A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ejercicios_user ADD CONSTRAINT FK_8B7F1045C9F539AE FOREIGN KEY (ejercicios_id) REFERENCES ejercicios (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comunidad ADD fecha_publicacion DATE NOT NULL');
        $this->addSql('ALTER TABLE entrenadores ADD horario_clases_id INT DEFAULT NULL, ADD ejercicios_id INT DEFAULT NULL, ADD horario_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE entrenadores ADD CONSTRAINT FK_E15FDEE2C9F539AE FOREIGN KEY (ejercicios_id) REFERENCES ejercicios (id)');
        $this->addSql('ALTER TABLE entrenadores ADD CONSTRAINT FK_E15FDEE2435CFD59 FOREIGN KEY (horario_clases_id) REFERENCES horario_clases (id)');
        $this->addSql('ALTER TABLE entrenadores ADD CONSTRAINT FK_E15FDEE24959F1BA FOREIGN KEY (horario_id) REFERENCES horario_clases (id)');
        $this->addSql('CREATE INDEX IDX_E15FDEE24959F1BA ON entrenadores (horario_id)');
        $this->addSql('CREATE INDEX IDX_E15FDEE2435CFD59 ON entrenadores (horario_clases_id)');
        $this->addSql('CREATE INDEX IDX_E15FDEE2C9F539AE ON entrenadores (ejercicios_id)');
        $this->addSql('ALTER TABLE user ADD precios_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493DD05344 FOREIGN KEY (precios_id) REFERENCES precios (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493DD05344 ON user (precios_id)');
    }
}
