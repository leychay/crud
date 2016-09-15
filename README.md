# CRUD
A simple CRUD Operation using Slim Framework using Creative Tim Paper Dashboard Theme

## Requirement
PHP 5.5.x and above
Composer

## Installation
    $ git clone https://github.com/leychay/crud.git
    $ composer install

## Permissions
Before running the application, you need to give permissions for apache to write to some of the files:
```
    - logs/
    - cache/
```
    ex: $ sudo chown www-data:www-data logs/ cache/
        $ sudo chmod ug+w logs/ cache/

## Links
* [Slim Framework](http://www.slimframework.com/)
* [Monolog](https://github.com/seldaek/monolog)
