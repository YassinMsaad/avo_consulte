<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210827113732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialty (id INT AUTO_INCREMENT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_categorie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, INDEX IDX_5B70908ABCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tribunaux (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, nom_fr VARCHAR(255) NOT NULL, nom_ar VARCHAR(255) NOT NULL, adresse_fr VARCHAR(255) NOT NULL, adresse_ar VARCHAR(255) NOT NULL, gouvernorat_fr VARCHAR(255) NOT NULL, gouvernorat_ar VARCHAR(255) NOT NULL, INDEX IDX_51698DD8C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sub_categorie ADD CONSTRAINT FK_5B70908ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE tribunaux ADD CONSTRAINT FK_51698DD8C54C8C93 FOREIGN KEY (type_id) REFERENCES specialty (id)');
        $this->addSql('ALTER TABLE qr_user ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE qr_user ADD CONSTRAINT FK_870DF964A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_870DF964A76ED395 ON qr_user (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sub_categorie DROP FOREIGN KEY FK_5B70908ABCF5E72D');
        $this->addSql('ALTER TABLE tribunaux DROP FOREIGN KEY FK_51698DD8C54C8C93');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE specialty');
        $this->addSql('DROP TABLE sub_categorie');
        $this->addSql('DROP TABLE tribunaux');
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964A76ED395');
        $this->addSql('DROP INDEX IDX_870DF964A76ED395 ON qr_user');
        $this->addSql('ALTER TABLE qr_user DROP user_id');
    }
}
