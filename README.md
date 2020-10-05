# docker-laravel

Develop enviroment:
- PHP 7.4
- MariaDB 10.1
- Laravel
- Composer

Developments tool reommended:
- Visual Studio Code
- Workbench

### Init Project

```bash
composer create-project --prefer-dist laravel/laravel app
```

Change permission direcotries: `bootstrap/cache` Y `storage`

```bash
sudo chmod 777 -R bootstrap/cache
sudo chmod 777 -R storage
```

Generate Key (if it is not installed by composer)
This can set in `.env` file.
```bash
php artisan key:generate
```

Configuring Database: modify .env
BASIC in this docker:

```script
DB_CONNECTION=mysql
DB_HOST=laravel-cv-mariadb
DB_PORT=3306
DB_DATABASE=laravel-cv
DB_USERNAME=root
DB_PASSWORD=root
```

To test config you can enter in Docker laravel-php-apache
and you can use Tinker:

```bash
php artisan tinker
```

In Tinker:

```php
DB::connection()->getPdo();
```

Or create route to check th connection:

```php
Route::get('check-database', function () {
  if(DB::connection()->getPdo()) {
      echo "Successfully connected to the database => "
        . DB::connection()->getDatabaseName();
  }
});
```

### Basic Commands Laravel

##### Firsts Migration
(don't use namespace in migrations)
Check that prepare composer.json
you must enter in Docker laravel-php-apache
`docker exec -it laravel-cv-php-apache bash`)
 and execute:

```bash
php artisan clear-compiled
composer dump-autoload
```

Laravel 7 need: to work with MariaDB
```php
    public function boot()
    {
        // Lale: Add to use StringLenght for MariaDB database
        Schema::defaultStringLength(191);
    }
```

Then make Migration:
```bash
php artisan miagrate
```

#### Work with Auth scaffolding

```bash
composer require laravel/ui
composer update
```


if it needs show packages:
```bash
composer show -l
```

```bash
php artisan ui vue --auth
```

```bash
npm install && npm run dev
```

Create this:

```bash
modificado:     README.md
        modificado:     app/package.json
        modificado:     app/resources/js/app.js
        modificado:     app/resources/js/bootstrap.js
        modificado:     app/resources/sass/app.scss
        modificado:     app/routes/web.php
        modificado:     app/webpack.mix.js

Archivos sin seguimiento:
  (usa "git add <archivo>..." para incluirlo a lo que se será confirmado)

        app/app/Http/Controllers/Auth/
        app/app/Http/Controllers/HomeController.php
        app/database/migrations/2014_10_12_100000_create_password_resets_table.php
        app/public/css/
        app/public/js/
        app/public/mix-manifest.json
        app/resources/js/components/
        app/resources/sass/_variables.scss
        app/resources/views/auth/
        app/resources/views/home.blade.php
        app/resources/views/layouts/
```

(remember all migrates in docker:
`docker exec -it laravel-cv-php-apache bash`)

```bash
php artisan migrate
```

##### Create Basic Controller

```bash
php artisan make:controller NameController
```

Create a Controller with this methods:
- index
- create
- store

##### Create Full Controller

```bash
php artisan make:controller NameController --resource
```


If to route.php file add the next route
it create all routes to API: index, store, create, show, edit...
con los respectivos GET, POST, PUT...

```php
Route::resource('/route_name', 'NameController');
```

##### Create Full Controller depende Model

```bash
php artisan make:controller NameController --resource --model=Name
```

##### Create Model with migration
Generate a new migration with a basic schema that must be completed

```bash
php artisan make:model Name -m
```

##### IMPORTANT NOTE

```bash
php artisan migrate:fresh --seed
```

If use Passport, after migration or seed:

```bash
php artisan passport:install
```

##### Creating elements:
Create model + controller + migration + seed
```bash
php artisan make:model Study -mcs
```

##### Creating keys | Client Credentials Grant Tokens
```bash
php artisan passport:keys
```
Generate:
api/storage/oauth-private.key
api/storage/oauth-public.key

The passport:client Command
Write id client to asign

```bash
php artisan passport:client
php artisan passport:client --public
php artisan passport:client --password
php artisan passport:client --client
php artisan passport:client --personal
```

Client ID: 3
Client secret: lPHg8Wr9UDtDK0i5UNnOuQuVzBbjcKIosuNjAtmK

you can access to: http://curriculum.ale:8082/oauth/token for take token

##### Purge revoked and expired tokens and auth codes...
php artisan passport:purge

##### Only purge revoked tokens and auth codes...
php artisan passport:purge --revoked

##### Only purge expired tokens and auth codes...
php artisan passport:purge --expired

#### Dump database
```bash
docker exec laravel-cv-mariadb -u root -proot laravel-cv > database/dump/laravel-cv-$(date +'%m-%d-%Y').dump
```
#### Transaccion DB
```bash
mysqldump --single-transaction -u root -proot -h 127.0.0.1 --port 3308 laravel-cv | mysql -h eu-cdbr-west-03.cleardb.net -u b35e40b7f1574a -pcaa9c800 -D heroku_2c548dd4909db78
```

