# Multi-Regional Laravel Project

## The overview of the project - The project is a multi-regional project created with laravel which allows users to see all the Russian cities, and select one of them, after he is able to see about and the news pages of the city. Also the project includes of creating and deleting the cities using api requests.

## Requirements 

PHP >= 8.0
COMPOSER
MYSQL
LARAVEL 10

## Installation

git clone https://github.com/yourusername/multiregional-laravel.git

composer install
 
copy the .env.example to the .env and adjust the settings and mysql connection.

php artisan:migrate

php artisan parse:cities - which will download the cities to your db.

php artisan serve
