<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220209192703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, created_by_id INT NOT NULL, name VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, public TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_4FBF094FB03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, size_unit_id INT NOT NULL, created_by_id INT NOT NULL, name VARCHAR(255) NOT NULL, size NUMERIC(8, 2) NOT NULL, active TINYINT(1) NOT NULL, public TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_D34A04AD1DD0A275 (size_unit_id), INDEX IDX_D34A04ADB03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_price (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, created_by_id INT NOT NULL, value NUMERIC(10, 2) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_6B9459854584665A (product_id), INDEX IDX_6B945985B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE size_unit (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE company ADD CONSTRAINT FK_4FBF094FB03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD1DD0A275 FOREIGN KEY (size_unit_id) REFERENCES size_unit (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADB03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product_price ADD CONSTRAINT FK_6B9459854584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE product_price ADD CONSTRAINT FK_6B945985B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product_price DROP FOREIGN KEY FK_6B9459854584665A');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD1DD0A275');
        $this->addSql('ALTER TABLE company DROP FOREIGN KEY FK_4FBF094FB03A8386');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADB03A8386');
        $this->addSql('ALTER TABLE product_price DROP FOREIGN KEY FK_6B945985B03A8386');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_price');
        $this->addSql('DROP TABLE size_unit');
        $this->addSql('DROP TABLE user');
    }
}
