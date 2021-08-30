<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210828205455 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avocat (id INT AUTO_INCREMENT NOT NULL, nom_fr VARCHAR(67) NOT NULL, nom_ar VARCHAR(255) NOT NULL, adresse_fr VARCHAR(255) NOT NULL, adresse_ar VARCHAR(255) NOT NULL, gouvernorat_ar VARCHAR(255) NOT NULL, gouvernorat_fr VARCHAR(255) NOT NULL, telephone INT NOT NULL, mobile INT NOT NULL, fax INT NOT NULL, email VARCHAR(255) NOT NULL, subed TINYINT(1) NOT NULL, img_url VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, specialite VARCHAR(255) NOT NULL, commentaire VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialty (id INT AUTO_INCREMENT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sub_categorie (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, libelle_ar VARCHAR(255) NOT NULL, libelle_fr VARCHAR(255) NOT NULL, INDEX IDX_5B70908ABCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, password VARCHAR(255) NOT NULL, email_token VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sub_categorie ADD CONSTRAINT FK_5B70908ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('DROP TABLE avocat_accounts');
        $this->addSql('DROP TABLE avocats');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE admin CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE blog ADD alternative_header VARCHAR(255) NOT NULL, DROP categorie, DROP subcategorie, DROP url_slug, DROP alternativeHeader, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE body body VARCHAR(1000) NOT NULL, CHANGE language language VARCHAR(255) NOT NULL, CHANGE keywords keywords VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE qr_reponse ADD question VARCHAR(1000) NOT NULL, ADD keywords VARCHAR(1000) NOT NULL, ADD meta_tag VARCHAR(500) NOT NULL, DROP avocat_id, DROP qr_id, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE reponse reponse VARCHAR(4000) NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE qr_user ADD avocat_id_id INT DEFAULT NULL, ADD user_id INT NOT NULL, DROP User_email, DROP avocat_id, DROP repondu, DROP User_Tel, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE Reponse reponse VARCHAR(1000) DEFAULT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE INDEX IDX_870DF964DB6F1B51 ON qr_user (avocat_id_id)');
        $this->addSql('CREATE INDEX IDX_870DF964A76ED395 ON qr_user (user_id)');
        $this->addSql('ALTER TABLE rendez_vous DROP avocat_id, DROP user_id, DROP date, DROP heure, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE tribunaux ADD type_id INT NOT NULL, DROP type_fr, DROP type_ar, DROP Telephone, DROP Fax, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('CREATE INDEX IDX_51698DD8C54C8C93 ON tribunaux (type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964DB6F1B51');
        $this->addSql('ALTER TABLE sub_categorie DROP FOREIGN KEY FK_5B70908ABCF5E72D');
        $this->addSql('ALTER TABLE tribunaux DROP FOREIGN KEY FK_51698DD8C54C8C93');
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964A76ED395');
        $this->addSql('CREATE TABLE avocat_accounts (id INT NOT NULL, email VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, nom_fr VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, nom_ar VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, tel INT NOT NULL, sms_token VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, email_token VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, status INT DEFAULT 0 NOT NULL, profile_id INT DEFAULT NULL, UNIQUE INDEX email (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE avocats (id INT NOT NULL, Nom_fr VARCHAR(67) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Nom_ar VARCHAR(53) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Adresse_fr VARCHAR(104) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Adresse_ar VARCHAR(98) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Gouvernorat_ar VARCHAR(11) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Gouvernorat_fr VARCHAR(12) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Telephone VARCHAR(17) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Mobile VARCHAR(29) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Fax VARCHAR(17) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Email VARCHAR(38) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, subed VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, img_url VARCHAR(255) CHARACTER SET latin1 DEFAULT \'avatar.png\' NOT NULL COLLATE `latin1_swedish_ci`, Lng VARCHAR(18) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, Lat VARCHAR(18) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, prenom VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, tel INT DEFAULT NULL, password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, email_token VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, sms_token INT DEFAULT NULL, email_validation INT DEFAULT 0 NOT NULL, sms_validation INT DEFAULT 0 NOT NULL) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE avocat');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE specialty');
        $this->addSql('DROP TABLE sub_categorie');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE admin CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE blog ADD subcategorie VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD url_slug TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD alternativeHeader VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE id id INT NOT NULL, CHANGE body body LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE language language VARCHAR(200) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE keywords keywords VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE alternative_header categorie VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE qr_reponse MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE qr_reponse DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE qr_reponse ADD avocat_id INT NOT NULL, ADD qr_id INT NOT NULL, DROP question, DROP keywords, DROP meta_tag, CHANGE id id INT NOT NULL, CHANGE reponse reponse TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE qr_user MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX IDX_870DF964DB6F1B51 ON qr_user');
        $this->addSql('DROP INDEX IDX_870DF964A76ED395 ON qr_user');
        $this->addSql('ALTER TABLE qr_user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE qr_user ADD User_email VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD repondu VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD User_Tel INT NOT NULL, DROP avocat_id_id, CHANGE id id INT NOT NULL, CHANGE reponse Reponse VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE user_id avocat_id INT NOT NULL');
        $this->addSql('ALTER TABLE rendez_vous MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE rendez_vous DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE rendez_vous ADD avocat_id INT NOT NULL, ADD user_id INT NOT NULL, ADD date DATE NOT NULL, ADD heure TIME NOT NULL, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE tribunaux MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX IDX_51698DD8C54C8C93 ON tribunaux');
        $this->addSql('ALTER TABLE tribunaux DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE tribunaux ADD type_fr VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD type_ar VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD Telephone VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD Fax VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, DROP type_id, CHANGE id id INT NOT NULL');
    }
}
