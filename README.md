sfbaseprj
=========

Base project based on Symfony 2

Install

// Install framework
php composer.phar create-project techgardeners/sfbaseprj path/to/install master

// create database and run:
app/console doctrine:migrations:diff
app/console doctrine:migrations:migrate