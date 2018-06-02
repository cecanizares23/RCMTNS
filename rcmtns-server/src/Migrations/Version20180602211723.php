<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602211723 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidata (id INT AUTO_INCREMENT NOT NULL, tipo_candidata_id INT NOT NULL, tipo_doc VARCHAR(10) DEFAULT NULL, cual_tipo_doc VARCHAR(100) DEFAULT NULL, numero_id INT DEFAULT NULL, nombres VARCHAR(100) DEFAULT NULL, apellidos VARCHAR(100) DEFAULT NULL, fecha_nacimiento VARCHAR(100) DEFAULT NULL, email VARCHAR(100) DEFAULT NULL, telefono INT DEFAULT NULL, direccion VARCHAR(100) DEFAULT NULL, estado_civil VARCHAR(100) DEFAULT NULL, hijos VARCHAR(100) DEFAULT NULL, nivel_estudios VARCHAR(100) DEFAULT NULL, ultimo_titulo VARCHAR(100) DEFAULT NULL, nombre_titulo VARCHAR(100) DEFAULT NULL, actualmente_estudia VARCHAR(100) DEFAULT NULL, que_estudia VARCHAR(100) DEFAULT NULL, nombre_titulo_obtener VARCHAR(100) DEFAULT NULL, actualmente_trabaja VARCHAR(10) DEFAULT NULL, sector_laboral VARCHAR(100) DEFAULT NULL, cual_sector VARCHAR(100) DEFAULT NULL, negocio_propio VARCHAR(10) DEFAULT NULL, forma_trabajo VARCHAR(100) DEFAULT NULL, tipo_empresa VARCHAR(100) DEFAULT NULL, ha_trabajado VARCHAR(10) DEFAULT NULL, tiempo_desempleo VARCHAR(100) DEFAULT NULL, conoce_tic VARCHAR(10) DEFAULT NULL, usa_tic VARCHAR(10) DEFAULT NULL, entretenimiento_uso VARCHAR(100) DEFAULT NULL, redes_uso VARCHAR(100) DEFAULT NULL, correo_uso VARCHAR(100) DEFAULT NULL, compras_uso VARCHAR(100) DEFAULT NULL, ventas_uso VARCHAR(100) DEFAULT NULL, comunicaion_uso VARCHAR(100) DEFAULT NULL, educacion_uso VARCHAR(100) DEFAULT NULL, banco_uso VARCHAR(100) DEFAULT NULL, servicios_publicos_uso VARCHAR(100) DEFAULT NULL, tramites_uso VARCHAR(100) DEFAULT NULL, otro_uso VARCHAR(100) DEFAULT NULL, interes_tic VARCHAR(100) DEFAULT NULL, entretenimiento_interes VARCHAR(100) DEFAULT NULL, redes_interes VARCHAR(100) DEFAULT NULL, correo_interes VARCHAR(100) DEFAULT NULL, compras_interes VARCHAR(100) DEFAULT NULL, ventas_interes VARCHAR(100) DEFAULT NULL, comunicacion_interes VARCHAR(100) DEFAULT NULL, educacion_interes VARCHAR(100) DEFAULT NULL, banco_interes VARCHAR(100) DEFAULT NULL, servicios_publicos_interes VARCHAR(100) DEFAULT NULL, tramites_interes VARCHAR(100) DEFAULT NULL, desinteres_tic VARCHAR(100) DEFAULT NULL, cual_desinteres VARCHAR(100) DEFAULT NULL, cual_interes VARCHAR(100) DEFAULT NULL, fecha_ingreso DATE NOT NULL, INDEX IDX_CFDF4A5DAD8C4ED6 (tipo_candidata_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipo_candidata (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidata ADD CONSTRAINT FK_CFDF4A5DAD8C4ED6 FOREIGN KEY (tipo_candidata_id) REFERENCES tipo_candidata (id)');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidata DROP FOREIGN KEY FK_CFDF4A5DAD8C4ED6');
        $this->addSql('DROP TABLE candidata');
        $this->addSql('DROP TABLE tipo_candidata');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE rol CHANGE nombre nombre VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
