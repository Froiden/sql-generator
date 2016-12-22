[![Packagist License](https://poser.pugx.org/froiden/sql-generator/license.png)]()
[![Total Downloads](https://poser.pugx.org/froiden/sql-generator/d/total.png)](https://packagist.org/packages/froiden/sql-generator)


# LARAVEL SQL GENERATOR
Convert Laravel migrations to raw SQL scripts


## Usage

### Step 1: Install Through Composer

```
composer require "froiden/sql-generator:dev-master"
```

### Step 2: Add the Service Provider
Now add the following to the providers array in your config/app.php

```php
\Froiden\SqlGenerator\SqlGeneratorServiceProvider::class,
```
### Step 3: Now publish the vendor
```bash
php artisan vendor:publish
```


### Step 4: Run command
Then you will need to run these commands in the terminal

```bash
php artisan sql:generate
```

This Will Generate "database.sql" in 'database/sql' directory
If you want change path directory go to 'config/sql_generator.php' change value 'defaultDirectory'
