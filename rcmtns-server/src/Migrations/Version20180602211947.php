<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602211947 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE candidata CHANGE tipo_candidata_id tipo_candidata_id INT DEFAULT NULL, CHANGE cual_tipo_doc cual_tipo_doc VARCHAR(100) DEFAULT NULL, CHANGE nombres nombres VARCHAR(100) DEFAULT NULL, CHANGE apellidos apellidos VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE candidata CHANGE tipo_candidata_id tipo_candidata_id INT NOT NULL, CHANGE cual_tipo_doc cual_tipo_doc VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE nombres nombres VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE apellidos apellidos VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
