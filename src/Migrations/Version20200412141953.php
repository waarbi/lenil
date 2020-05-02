<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200412141953 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE delivery_time (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demande (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, sous_category_id INT DEFAULT NULL, delivery_time INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, budget INT DEFAULT NULL, status_id INT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_2694D7A512469DE2 (category_id), INDEX IDX_2694D7A5527FEED1 (sous_category_id), INDEX IDX_2694D7A5BE0850DF (delivery_time), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, level_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_D4DB71B55FB14BA7 (level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language_name (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE level (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offer (id INT AUTO_INCREMENT NOT NULL, delivery_time INT DEFAULT NULL, demande INT DEFAULT NULL, description LONGTEXT NOT NULL, budget INT DEFAULT NULL, INDEX IDX_29D6873EBE0850DF (delivery_time), INDEX IDX_29D6873E2694D7A5 (demande), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE request (id INT AUTO_INCREMENT NOT NULL, seller_id INT NOT NULL, category_id INT DEFAULT NULL, sub_category_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, file VARCHAR(255) DEFAULT NULL, time VARCHAR(255) DEFAULT NULL, budget DOUBLE PRECISION DEFAULT NULL, date DATE DEFAULT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_3B978F9F8DE820D9 (seller_id), INDEX IDX_3B978F9F12469DE2 (category_id), INDEX IDX_3B978F9FF7BFE87C (sub_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, level_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_5E3DE4775FB14BA7 (level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills_name (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_skill (user_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_BCFF1F2FA76ED395 (user_id), INDEX IDX_BCFF1F2F5585C142 (skill_id), PRIMARY KEY(user_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_language (user_id INT NOT NULL, language_id INT NOT NULL, INDEX IDX_345695B5A76ED395 (user_id), INDEX IDX_345695B582F1BAF4 (language_id), PRIMARY KEY(user_id, language_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A512469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5527FEED1 FOREIGN KEY (sous_category_id) REFERENCES sous_category (id)');
        $this->addSql('ALTER TABLE demande ADD CONSTRAINT FK_2694D7A5BE0850DF FOREIGN KEY (delivery_time) REFERENCES delivery_time (id)');
        $this->addSql('ALTER TABLE language ADD CONSTRAINT FK_D4DB71B55FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873EBE0850DF FOREIGN KEY (delivery_time) REFERENCES delivery_time (id)');
        $this->addSql('ALTER TABLE offer ADD CONSTRAINT FK_29D6873E2694D7A5 FOREIGN KEY (demande) REFERENCES demande (id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F8DE820D9 FOREIGN KEY (seller_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9F12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9FF7BFE87C FOREIGN KEY (sub_category_id) REFERENCES sous_category (id)');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE4775FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id)');
        $this->addSql('ALTER TABLE user_skill ADD CONSTRAINT FK_BCFF1F2FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_skill ADD CONSTRAINT FK_BCFF1F2F5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_language ADD CONSTRAINT FK_345695B5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_language ADD CONSTRAINT FK_345695B582F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD pays_id INT DEFAULT NULL, ADD confirmation_token VARCHAR(255) DEFAULT NULL, ADD token_password VARCHAR(255) DEFAULT NULL, ADD created_token_password_at DATETIME DEFAULT NULL, ADD enabled TINYINT(1) NOT NULL, ADD created_at DATETIME NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649A6E44244 ON user (pays_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE demande DROP FOREIGN KEY FK_2694D7A5BE0850DF');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873EBE0850DF');
        $this->addSql('ALTER TABLE offer DROP FOREIGN KEY FK_29D6873E2694D7A5');
        $this->addSql('ALTER TABLE user_language DROP FOREIGN KEY FK_345695B582F1BAF4');
        $this->addSql('ALTER TABLE language DROP FOREIGN KEY FK_D4DB71B55FB14BA7');
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE4775FB14BA7');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A6E44244');
        $this->addSql('ALTER TABLE user_skill DROP FOREIGN KEY FK_BCFF1F2F5585C142');
        $this->addSql('DROP TABLE delivery_time');
        $this->addSql('DROP TABLE demande');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE language_name');
        $this->addSql('DROP TABLE level');
        $this->addSql('DROP TABLE offer');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE request');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE skills_name');
        $this->addSql('DROP TABLE user_skill');
        $this->addSql('DROP TABLE user_language');
        $this->addSql('DROP INDEX IDX_8D93D649A6E44244 ON user');
        $this->addSql('ALTER TABLE user DROP pays_id, DROP confirmation_token, DROP token_password, DROP created_token_password_at, DROP enabled, DROP created_at, CHANGE description description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
