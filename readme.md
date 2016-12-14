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

### Step 3: Run command
Then you will need to run these commands in the terminal

```bash
php artisan sql:generate
```

This Will Generate "database.sql" in database/sql directory
