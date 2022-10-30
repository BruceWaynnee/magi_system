# MAGI SYSTEM Nerv (Evangelion) 

## Installation
- go to gitlab and clone this project ``` https://github.com/BruceWaynnee/magi_system.git ```
- cd into project directory, by default project name should be ``` magi_system ```
- copy the .env.example to your .env by using this command ``` cp .env.example .env ```
- run these command to generate Laravel vendor folder ``` composer install ``` and ``` composer update ```

- generate key in .env by running ``` php artisan key:generate ```
- on the .env file, replace DB_DATABASE with your database
- execute this command for database seed and migration ``` php artisan migrate:fresh --seed ```
- run development serve using ``` php artisan serve ```
- open your project and enjoy.

# Packages That This Project Used
### Working With Permission
 - Package Name (Permission Spatie)
 - Open your composer and run following command to install the package
    ->  composer require spatie/laravel-permission
    ->  php artisan optimize:clear
 - Documentation: https://spatie.be/docs/laravel-permission/v5/installation-laravel
