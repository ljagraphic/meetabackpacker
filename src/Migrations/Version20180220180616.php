<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180220180616 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activity ADD address VARCHAR(150) NOT NULL, DROP continent, DROP country, DROP region, DROP city, CHANGE activity category VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activity ADD continent VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, ADD country VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, ADD region VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, ADD city VARCHAR(50) NOT NULL COLLATE utf8_unicode_ci, DROP address, CHANGE category activity VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci');
    }
}
