# Test Library

> A Laravel CRUD on a Library to improve my developer skills

This project runs with Laravel version 10.43.0

## Getting started

Assuming you've already installed on your machine: PHP (8.1 - 8.3), [Laravel](https://laravel.com), [Composer](https://getcomposer.org) and [Node.js](https://nodejs.org).

``` bash
# install dependencies
composer install
npm install

# create .env file and generate the application key
cp .env.example .env
php artisan key:generate

# build CSS and JS assets
npm run dev
# or, if you prefer minified files
npm run prod
```

Then launch the server:

``` bash
php artisan serve
```

The Laravel sample project is now up and running! Access it at http://localhost:8000.
