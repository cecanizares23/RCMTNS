<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602214804 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidata DROP FOREIGN KEY FK_CFDF4A5DAD8C4ED6');
        $this->addSql('DROP INDEX IDX_CFDF4A5DAD8C4ED6 ON candidata');
        $this->addSql('ALTER TABLE candidata DROP tipo_candidata_id, CHANGE cual_tipo_doc cual_tipo_doc VARCHAR(100) DEFAULT NULL, CHANGE nombres nombres VARCHAR(100) DEFAULT NULL, CHANGE apellidos apellidos VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE candidata ADD tipo_candidata_id INT DEFAULT NULL, CHANGE cual_tipo_doc cual_tipo_doc VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE nombres nombres VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE apellidos apellidos VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE candidata ADD CONSTRAINT FK_CFDF4A5DAD8C4ED6 FOREIGN KEY (tipo_candidata_id) REFERENCES tipo_candidata (id)');
        $this->addSql('CREATE INDEX IDX_CFDF4A5DAD8C4ED6 ON candidata (tipo_candidata_id)');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
