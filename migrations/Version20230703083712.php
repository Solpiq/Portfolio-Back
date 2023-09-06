<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230703083712 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE competencias (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, descripción VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE datos (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, teléfono VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, foto VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE exp_laboral (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, n_empresa VARCHAR(255) NOT NULL, puesto VARCHAR(255) NOT NULL, descripción VARCHAR(255) NOT NULL, f_inicio DATETIME NOT NULL, f_fin DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE formación (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, título VARCHAR(255) NOT NULL, centro VARCHAR(255) NOT NULL, duración VARCHAR(255) NOT NULL, datetime VARCHAR(255) NOT NULL, f_fin DATETIME NOT NULL)');
        $this->addSql('CREATE TABLE hback (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, nivel VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE hfront (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, nivel VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE idiomas (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, idioma VARCHAR(255) NOT NULL, nivel VARCHAR(255) NOT NULL, titulación VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE links (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, enlace VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE logros (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, descripción VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE messenger_messages (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, body CLOB NOT NULL, headers CLOB NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , available_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        , delivered_at DATETIME DEFAULT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE competencias');
        $this->addSql('DROP TABLE datos');
        $this->addSql('DROP TABLE exp_laboral');
        $this->addSql('DROP TABLE formación');
        $this->addSql('DROP TABLE hback');
        $this->addSql('DROP TABLE hfront');
        $this->addSql('DROP TABLE idiomas');
        $this->addSql('DROP TABLE links');
        $this->addSql('DROP TABLE logros');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
