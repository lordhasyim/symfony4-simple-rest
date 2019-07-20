<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190719093806 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO book('name', 'isbn', 'author', 'year', 'category')
            VALUES ('Programming PHP', '0596006810', 'Rasmus Lerdorf,  Kevin Tatroe, Peter MacIntyre', 2006, 'Programming'),
            ('PHP Cookbook', '0596101015', 'Adam Trachtenberg,  David Sklar', 2006, 'Programming'),
            ('PHP Design Patterns', '0596101015', 'Aaron Saray', 2009, 'Programming')            
            ");


    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
