<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230909151931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sun_mi_car (id INT AUTO_INCREMENT NOT NULL, start VARCHAR(255) DEFAULT NULL, finish VARCHAR(255) DEFAULT NULL, driverplan VARCHAR(255) DEFAULT NULL, lastkm VARCHAR(255) DEFAULT NULL, nextkm VARCHAR(255) DEFAULT NULL, disel VARCHAR(255) DEFAULT NULL, fulldrivertime VARCHAR(255) DEFAULT NULL, drivergoodday VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sun_mi_car');
    }
}
