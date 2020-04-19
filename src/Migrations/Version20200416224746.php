<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200416224746 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE proposal_image (id INT AUTO_INCREMENT NOT NULL, proposal_id INT DEFAULT NULL, file_name VARCHAR(255) NOT NULL, INDEX IDX_2CACDFEF4792058 (proposal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE proposal_image ADD CONSTRAINT FK_2CACDFEF4792058 FOREIGN KEY (proposal_id) REFERENCES proposal (id)');
        $this->addSql('ALTER TABLE proposal CHANGE category_id category_id INT DEFAULT NULL, CHANGE subcategory_id subcategory_id INT DEFAULT NULL, CHANGE delivery_time_id delivery_time_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proposal RENAME INDEX idx_bfe59472ce4edb1e TO IDX_BFE5947254F462E5');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE proposal_image');
        $this->addSql('ALTER TABLE proposal CHANGE category_id category_id INT NOT NULL, CHANGE subcategory_id subcategory_id INT NOT NULL, CHANGE delivery_time_id delivery_time_id INT NOT NULL');
        $this->addSql('ALTER TABLE proposal RENAME INDEX idx_bfe5947254f462e5 TO IDX_BFE59472CE4EDB1E');
    }
}
