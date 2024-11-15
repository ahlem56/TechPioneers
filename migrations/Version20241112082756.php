<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241112082756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chatbot (id INT AUTO_INCREMENT NOT NULL, id_chatbot INT DEFAULT NULL, datecreation_chatbot DATE DEFAULT NULL, contenu_chatbot VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forum (id INT AUTO_INCREMENT NOT NULL, id_forum INT DEFAULT NULL, titre_forum VARCHAR(255) DEFAULT NULL, description_forum VARCHAR(255) DEFAULT NULL, createur_forum INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message_forum (id INT AUTO_INCREMENT NOT NULL, id_message_forum INT DEFAULT NULL, createur_message_forum INT DEFAULT NULL, id_forum INT DEFAULT NULL, contenu_message_forum VARCHAR(255) DEFAULT NULL, date_creation_message_forum DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE chatbot');
        $this->addSql('DROP TABLE forum');
        $this->addSql('DROP TABLE message_forum');
    }
}
