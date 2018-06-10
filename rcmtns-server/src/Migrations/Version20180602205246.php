<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602205246 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE socio_tipo_aporte (socio_id INT NOT NULL, tipo_aporte_id INT NOT NULL, INDEX IDX_68F3B33BDA04E6A9 (socio_id), INDEX IDX_68F3B33B4191624D (tipo_aporte_id), PRIMARY KEY(socio_id, tipo_aporte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE socio_tipo_aporte ADD CONSTRAINT FK_68F3B33BDA04E6A9 FOREIGN KEY (socio_id) REFERENCES socio (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE socio_tipo_aporte ADD CONSTRAINT FK_68F3B33B4191624D FOREIGN KEY (tipo_aporte_id) REFERENCES tipo_aporte (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE socio ADD tipo_socio_id INT NOT NULL');
        $this->addSql('ALTER TABLE socio ADD CONSTRAINT FK_38B65309CC1BC60 FOREIGN KEY (tipo_socio_id) REFERENCES tipo_socio (id)');
        $this->addSql('CREATE INDEX IDX_38B65309CC1BC60 ON socio (tipo_socio_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE socio_tipo_aporte');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE socio DROP FOREIGN KEY FK_38B65309CC1BC60');
        $this->addSql('DROP INDEX IDX_38B65309CC1BC60 ON socio');
        $this->addSql('ALTER TABLE socio DROP tipo_socio_id');
    }
}
