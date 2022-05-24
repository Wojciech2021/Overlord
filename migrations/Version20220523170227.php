<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220523170227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE computer_log (id INT AUTO_INCREMENT NOT NULL, time DATETIME NOT NULL, computer VARCHAR(255) NOT NULL, domain VARCHAR(255) NOT NULL, ip VARCHAR(255) NOT NULL, mac VARCHAR(255) NOT NULL, cpu INT NOT NULL, ram INT NOT NULL, freq INT NOT NULL, gpu INT NOT NULL, freq_val INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_user_department');
        $this->addSql('ALTER TABLE user ADD mac_address VARCHAR(255) NOT NULL, CHANGE department_id department_id INT NOT NULL');
        $this->addSql('DROP INDEX fk_user_department ON user');
        $this->addSql('CREATE INDEX IDX_8D93D649AE80F5DF ON user (department_id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_user_department FOREIGN KEY (department_id) REFERENCES department (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE computer_log');
        $this->addSql('ALTER TABLE `user` DROP FOREIGN KEY FK_8D93D649AE80F5DF');
        $this->addSql('ALTER TABLE `user` DROP mac_address, CHANGE department_id department_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_8d93d649ae80f5df ON `user`');
        $this->addSql('CREATE INDEX FK_user_department ON `user` (department_id)');
        $this->addSql('ALTER TABLE `user` ADD CONSTRAINT FK_8D93D649AE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
    }
}
