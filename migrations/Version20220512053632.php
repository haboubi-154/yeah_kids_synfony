<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220512053632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog_like (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE offensiveword');
        $this->addSql('ALTER TABLE event CHANGE date_debut_event date_debut_event DATETIME NOT NULL, CHANGE date_fin_event date_fin_event DATETIME DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE livraison MODIFY id_livraison INT NOT NULL');
        $this->addSql('ALTER TABLE livraison DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE livraison DROP id_produit, DROP id_parent, CHANGE quantite quantite INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE id_livraison id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE livraison ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE produit MODIFY id_produit INT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE produit ADD id_livraison_id INT DEFAULT NULL, ADD image VARCHAR(255) DEFAULT NULL, DROP img, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE quantite quantite INT DEFAULT NULL, CHANGE id_produit id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE INDEX IDX_29A5EC27AD958E57 ON produit (id_livraison_id)');
        $this->addSql('ALTER TABLE produit ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C67796B3CA4B');
        $this->addSql('DROP INDEX IDX_AF3C67796B3CA4B ON publication');
        $this->addSql('ALTER TABLE publication CHANGE id_user id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C677979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AF3C677979F37AE5 ON publication (id_user_id)');
        $this->addSql('ALTER TABLE user CHANGE salt salt VARCHAR(50) NOT NULL, CHANGE question question VARCHAR(30) NOT NULL, CHANGE block block INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offensiveword (id INT AUTO_INCREMENT NOT NULL, word VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE blog_like');
        $this->addSql('ALTER TABLE event CHANGE date_debut_event date_debut_event VARCHAR(255) NOT NULL, CHANGE date_fin_event date_fin_event VARCHAR(255) DEFAULT NULL, CHANGE logo logo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE livraison MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE livraison DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE livraison ADD id_produit INT NOT NULL, ADD id_parent INT NOT NULL, CHANGE prix prix INT NOT NULL, CHANGE adresse adresse VARCHAR(30) NOT NULL, CHANGE quantite quantite INT NOT NULL, CHANGE id id_livraison INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE livraison ADD PRIMARY KEY (id_livraison)');
        $this->addSql('ALTER TABLE produit MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27AD958E57');
        $this->addSql('DROP INDEX IDX_29A5EC27AD958E57 ON produit');
        $this->addSql('ALTER TABLE produit DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE produit ADD img VARCHAR(50) NOT NULL, DROP id_livraison_id, DROP image, CHANGE nom nom VARCHAR(15) NOT NULL, CHANGE prix prix INT NOT NULL, CHANGE quantite quantite INT NOT NULL, CHANGE id id_produit INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD PRIMARY KEY (id_produit)');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C677979F37AE5');
        $this->addSql('DROP INDEX IDX_AF3C677979F37AE5 ON publication');
        $this->addSql('ALTER TABLE publication CHANGE id_user_id id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C67796B3CA4B FOREIGN KEY (id_user) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AF3C67796B3CA4B ON publication (id_user)');
        $this->addSql('ALTER TABLE user CHANGE salt salt VARCHAR(50) DEFAULT NULL, CHANGE question question VARCHAR(80) NOT NULL, CHANGE block block INT DEFAULT 0');
    }
}
