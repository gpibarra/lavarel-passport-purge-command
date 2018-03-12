# lavarel-passport-purge-command
This command purge expired access/refresh tokens for Laravel Passport to not overload your database

## Installation
* Install the command with composer :
```
composer require "gpibarra/lavarel-passport-purge-command"
```

* Add the command to your /config/app.php in the providers array or discover package in Laravel ^5.5:
``` 
'providers' => [
    \gpibarra\LavarelPassportPurgeCommand\LavarelPassportPurgeCommandServiceProvider::class
];
```

## Usage
```
php artisan passport:purge
```

### Options
```
--days : Number of days the tokens must be expired, default 30.
```

