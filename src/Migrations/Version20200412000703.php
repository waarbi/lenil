<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200412000703 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE proposal (id INT AUTO_INCREMENT NOT NULL, seller_id INT NOT NULL, category_id INT NOT NULL, subcategory_id INT NOT NULL, delevery_time_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, slug VARCHAR(255) NOT NULL, price NUMERIC(5, 2) NOT NULL, views VARCHAR(255) DEFAULT NULL, rating VARCHAR(255) DEFAULT NULL, INDEX IDX_BFE594728DE820D9 (seller_id), INDEX IDX_BFE5947212469DE2 (category_id), INDEX IDX_BFE594725DC6FE57 (subcategory_id), INDEX IDX_BFE59472CE4EDB1E (delevery_time_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proposal ADD CONSTRAINT FK_BFE594728DE820D9 FOREIGN KEY (seller_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE proposal ADD CONSTRAINT FK_BFE5947212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE proposal ADD CONSTRAINT FK_BFE594725DC6FE57 FOREIGN KEY (subcategory_id) REFERENCES sous_category (id)');
        $this->addSql('ALTER TABLE proposal ADD CONSTRAINT FK_BFE59472CE4EDB1E FOREIGN KEY (delevery_time_id) REFERENCES delivery_time (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE proposal');
    }
}