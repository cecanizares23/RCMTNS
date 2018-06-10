<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180602185456 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_rol (user_id INT NOT NULL, rol_id INT NOT NULL, INDEX IDX_E5435EBCA76ED395 (user_id), INDEX IDX_E5435EBC4BAB96C (rol_id), PRIMARY KEY(user_id, rol_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rol (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_rol ADD CONSTRAINT FK_E5435EBCA76ED395 FOREIGN KEY (user_id) REFERENCES app_users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_rol ADD CONSTRAINT FK_E5435EBC4BAB96C FOREIGN KEY (rol_id) REFERENCES rol (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_rol DROP FOREIGN KEY FK_E5435EBC4BAB96C');
        $this->addSql('DROP TABLE user_rol');
        $this->addSql('DROP TABLE rol');
        $this->addSql('ALTER TABLE app_users CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
