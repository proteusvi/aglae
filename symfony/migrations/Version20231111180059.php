<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231111180059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE address_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE association_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE member_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE address (
            id INT NOT NULL, 
            road VARCHAR(100) DEFAULT NULL, 
            number VARCHAR(10) DEFAULT NULL, 
            town VARCHAR(100) NOT NULL, 
            region_canton VARCHAR(100) DEFAULT NULL, 
            land VARCHAR(100) NOT NULL, PRIMARY KEY(id)
            )'
        );
        $this->addSql('CREATE TABLE association (
            id INT NOT NULL, 
            name VARCHAR(100) NOT NULL, 
            creation_date DATE NOT NULL, 
            academic_date DATE NOT NULL, status VARCHAR(255) DEFAULT NULL, 
            president INT NOT NULL, 
            PRIMARY KEY(id)
            )'
        );
        $this->addSql('CREATE TABLE member (
            id INT NOT NULL, name VARCHAR(50) NOT NULL, 
            fist_name VARCHAR(50) DEFAULT NULL, 
            address INT NOT NULL, 
            PRIMARY KEY(id)
            )'
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE address_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE association_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE member_id_seq CASCADE');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE association');
        $this->addSql('DROP TABLE member');
    }
}
