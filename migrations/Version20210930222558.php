<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210930222558 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avocat DROP lng, DROP lat, CHANGE nom_fr nom_fr VARCHAR(67) NOT NULL, CHANGE nom_ar nom_ar VARCHAR(255) NOT NULL, CHANGE adresse_fr adresse_fr VARCHAR(255) NOT NULL, CHANGE adresse_ar adresse_ar VARCHAR(255) NOT NULL, CHANGE gouvernorat_ar gouvernorat_ar VARCHAR(255) NOT NULL, CHANGE gouvernorat_fr gouvernorat_fr VARCHAR(255) NOT NULL, CHANGE telephone telephone INT NOT NULL, CHANGE mobile mobile INT NOT NULL, CHANGE fax fax INT NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE subbed subbed TINYINT(1) NOT NULL, CHANGE img_url img_url VARCHAR(255) NOT NULL, CHANGE commentaire commentaire VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE blog DROP categorie, DROP subcategorie, DROP url_slug, CHANGE body body VARCHAR(1000) NOT NULL, CHANGE language language VARCHAR(255) NOT NULL, CHANGE keywords keywords VARCHAR(1000) NOT NULL, CHANGE alternative_header alternative_header VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE qr_reponse DROP description, DROP categorie, DROP subcategorie, DROP temps, DROP url_slug, DROP status, CHANGE question question VARCHAR(1000) NOT NULL, CHANGE reponse reponse VARCHAR(4000) NOT NULL, CHANGE meta_tag meta_tag VARCHAR(500) NOT NULL, CHANGE keywords keywords VARCHAR(1000) NOT NULL');
        $this->addSql('ALTER TABLE qr_user ADD CONSTRAINT FK_870DF964DB6F1B51 FOREIGN KEY (avocat_id_id) REFERENCES avocat (id)');
        $this->addSql('ALTER TABLE qr_user ADD CONSTRAINT FK_870DF964A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD idavocat_id INT NOT NULL, ADD iduser_id INT DEFAULT NULL, ADD date VARCHAR(255) NOT NULL, ADD status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A93A48447 FOREIGN KEY (idavocat_id) REFERENCES avocat (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A93A48447 ON rendez_vous (idavocat_id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A786A81FB ON rendez_vous (iduser_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avocat ADD lng VARCHAR(18) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD lat VARCHAR(18) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE nom_fr nom_fr VARCHAR(67) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE nom_ar nom_ar VARCHAR(53) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE adresse_fr adresse_fr VARCHAR(104) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE adresse_ar adresse_ar VARCHAR(98) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE gouvernorat_ar gouvernorat_ar VARCHAR(11) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE gouvernorat_fr gouvernorat_fr VARCHAR(12) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE telephone telephone VARCHAR(17) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE mobile mobile VARCHAR(29) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE fax fax VARCHAR(17) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE email email VARCHAR(38) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE subbed subbed VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE img_url img_url VARCHAR(255) CHARACTER SET utf8 DEFAULT \'avatar.png\' NOT NULL COLLATE `utf8_general_ci`, CHANGE commentaire commentaire VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE blog ADD categorie VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD subcategorie VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD url_slug TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE body body LONGTEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE language language VARCHAR(200) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE keywords keywords VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE alternative_header alternative_header VARCHAR(250) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE qr_reponse ADD description VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD categorie VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD subcategorie VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD temps DATE NOT NULL, ADD url_slug VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD status INT DEFAULT 0 NOT NULL, CHANGE question question TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE reponse reponse TEXT CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE keywords keywords VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE meta_tag meta_tag VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964DB6F1B51');
        $this->addSql('ALTER TABLE qr_user DROP FOREIGN KEY FK_870DF964A76ED395');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A93A48447');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A786A81FB');
        $this->addSql('DROP INDEX IDX_65E8AA0A93A48447 ON rendez_vous');
        $this->addSql('DROP INDEX IDX_65E8AA0A786A81FB ON rendez_vous');
        $this->addSql('ALTER TABLE rendez_vous DROP idavocat_id, DROP iduser_id, DROP date, DROP status');
        $this->addSql('ALTER TABLE user CHANGE roles roles VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
