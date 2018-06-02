<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602214945 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidata_tipo_candidata (candidata_id INT NOT NULL, tipo_candidata_id INT NOT NULL, INDEX IDX_BC7193FA1EDF10D6 (candidata_id), INDEX IDX_BC7193FAAD8C4ED6 (tipo_candidata_id), PRIMARY KEY(candidata_id, tipo_candidata_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidata_tipo_candidata ADD CONSTRAINT FK_BC7193FA1EDF10D6 FOREIGN KEY (candidata_id) REFERENCES candidata (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidata_tipo_candidata ADD CONSTRAINT FK_BC7193FAAD8C4ED6 FOREIGN KEY (tipo_candidata_id) REFERENCES tipo_candidata (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE candidata CHANGE cual_tipo_doc cual_tipo_doc VARCHAR(100) DEFAULT NULL, CHANGE nombres nombres VARCHAR(100) DEFAULT NULL, CHANGE apellidos apellidos VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE candidata_tipo_candidata');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE candidata CHANGE cual_tipo_doc cual_tipo_doc VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE nombres nombres VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE apellidos apellidos VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
