<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220512062505 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, id_user INT DEFAULT NULL, id_pub INT DEFAULT NULL, contenu VARCHAR(255) NOT NULL, INDEX IDX_67F068BC6B3CA4B (id_user), INDEX IDX_67F068BCC4E0D4DF (id_pub), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleve (ide INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, age INT NOT NULL, idp INT NOT NULL, idj INT NOT NULL, PRIMARY KEY(ide)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, quantite INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, id_livraison_id INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, quantite INT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC27AD958E57 (id_livraison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6B3CA4B FOREIGN KEY (id_user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC4E0D4DF FOREIGN KEY (id_pub) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27AD958E57 FOREIGN KEY (id_livraison_id) REFERENCES livraison (id)');
        $this->addSql('ALTER TABLE event CHANGE date_debut_event date_debut_event DATETIME NOT NULL, CHANGE date_fin_event date_fin_event DATETIME DEFAULT NULL, CHANGE logo logo VARCHAR(255) DEFAULT NULL');
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
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27AD958E57');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE eleve');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE produit');
        $this->addSql('ALTER TABLE event CHANGE date_debut_event date_debut_event VARCHAR(255) NOT NULL, CHANGE date_fin_event date_fin_event VARCHAR(255) DEFAULT NULL, CHANGE logo logo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C677979F37AE5');
        $this->addSql('DROP INDEX IDX_AF3C677979F37AE5 ON publication');
        $this->addSql('ALTER TABLE publication CHANGE id_user_id id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C67796B3CA4B FOREIGN KEY (id_user) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AF3C67796B3CA4B ON publication (id_user)');
        $this->addSql('ALTER TABLE user CHANGE salt salt VARCHAR(50) DEFAULT NULL, CHANGE question question VARCHAR(80) NOT NULL, CHANGE block block INT DEFAULT 0');
    }
}
