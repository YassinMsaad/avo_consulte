<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210904162250 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avocat (id INT AUTO_INCREMENT NOT NULL, nom_fr VARCHAR(67) NOT NULL, nom_ar VARCHAR(255) NOT NULL, adresse_fr VARCHAR(255) NOT NULL, adresse_ar VARCHAR(255) NOT NULL, gouvernorat_ar VARCHAR(255) NOT NULL, gouvernorat_fr VARCHAR(255) NOT NULL, telephone INT NOT NULL, mobile INT NOT NULL, fax INT NOT NULL, email VARCHAR(255) NOT NULL, subed TINYINT(1) NOT NULL, img_url VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, specialite VARCHAR(255) NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, body VARCHAR(1000) NOT NULL, meta_tag VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, keywords VARCHAR(1000) NOT NULL, image VARCHAR(255) NOT NULL, temps DATE NOT NULL, alternative_header VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qr_reponse (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(1000) NOT NULL, reponse VARCHAR(4000) NOT NULL, keywords VARCHAR(1000) NOT NULL, meta_tag VARCHAR(500) NOT NULL, language VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qr_user (id INT AUTO_INCREMENT NOT NULL, avocat_id_id INT DEFAULT NULL, user_id INT NOT NULL, qtitle VARCHAR(255) NOT NULL, question VARCHAR(255) NOT NULL, reponse VARCHAR(1000) DEFAULT NULL, INDEX IDX_870DF964DB6F1B51 (avocat_id_id), INDEX IDX_870DF964A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialty (id INT AUTO_INCREMENT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_categorie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, INDEX IDX_5B70908ABCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tribunaux (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, nom_fr VARCHAR(255) NOT NULL, nom_ar VARCHAR(255) NOT NULL, adresse_fr VARCHAR(255) NOT NULL, adresse_ar VARCHAR(255) NOT NULL, gouvernorat_fr VARCHAR(255) NOT NULL, gouvernorat_ar VARCHAR(255) NOT NULL, INDEX IDX_51698DD8C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, password VARCHAR(255) NOT NULL, email_token VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE qr_user ADD CONSTRAINT FK_870DF964DB6F1B51 FOREIGN KEY (avocat_id_id) REFERENCES avocat (id)');
        $this->addSql('ALTER TABLE qr_user ADD CONSTRAINT FK_870DF964A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE sub_categorie ADD CONSTRAINT FK_5B70908ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE tribunaux ADD CONSTRAINT FK_51698DD8C54C8C93 FOREIGN KEY (type_id) REFERENCES specialty (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964DB6F1B51');
        $this->addSql('ALTER TABLE sub_categorie DROP FOREIGN KEY FK_5B70908ABCF5E72D');
        $this->addSql('ALTER TABLE tribunaux DROP FOREIGN KEY FK_51698DD8C54C8C93');
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964A76ED395');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE avocat');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE qr_reponse');
        $this->addSql('DROP TABLE qr_user');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE specialty');
        $this->addSql('DROP TABLE sub_categorie');
        $this->addSql('DROP TABLE tribunaux');
        $this->addSql('DROP TABLE user');
    }
}
