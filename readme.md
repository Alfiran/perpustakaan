# CRUD Laravel 5.3 dengan Repository Pattern

An example of a basic implementation of the Repository Pattern in Laravel 5.3

# Quick Start Guide

## Instalation

**1. Clone this repo:**

```sh
git clone https://github.com/cyberid41/crud-using-repository-laravel-5-3.git
```

**2. Install the dependencies:**

```sh
composer install
```

**3. Setup database config `.env` **

```sh
...

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact
DB_USERNAME=your-mysql-username
DB_PASSWORD=your-mysql-password

...
```

**4. Running Database Migration**

```sh
php artisan migrate
```

**5. Running Database Seeder**

```sh
php artisan db:migrate
```

**6. Running Development Server**

```sh
php serve
```

> Please open the following url `localhost:8000`


**7. See the api documentation**

```sh
// install deps using npm

npm install -g apidoc http-server

...

// run generate api documentation
apidoc -i app/Http/Controllers/ -o apidoc/

...

cd apidoc

http-server

```

> Please open the following url `localhost:8080`


