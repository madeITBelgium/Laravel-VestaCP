# PHP Laravel VestaCP
[![Build Status](https://travis-ci.org/madeITBelgium/Laravel-VestaCP.svg?branch=master)](https://travis-ci.org/madeITBelgium/Laravel-VestaCP)
[![Coverage Status](https://coveralls.io/repos/github/madeITBelgium/Laravel-VestaCP/badge.svg?branch=master)](https://coveralls.io/github/madeITBelgium/Laravel-VestaCP?branch=master)
[![Maintainability](https://api.codeclimate.com/v1/badges/a02d5ce31bccce094068/maintainability)](https://codeclimate.com/github/madeITBelgium/Laravel-VestaCP/maintainability)
[![Latest Stable Version](https://poser.pugx.org/madeITBelgium/Laravel-VestaCP/v/stable.svg)](https://packagist.org/packages/madeITBelgium/Laravel-VestaCP)
[![Latest Unstable Version](https://poser.pugx.org/madeITBelgium/Laravel-VestaCP/v/unstable.svg)](https://packagist.org/packages/madeITBelgium/Laravel-VestaCP)
[![Total Downloads](https://poser.pugx.org/madeITBelgium/Laravel-VestaCP/d/total.svg)](https://packagist.org/packages/madeITBelgium/Laravel-VestaCP)
[![License](https://poser.pugx.org/madeITBelgium/Laravel-VestaCP/license.svg)](https://packagist.org/packages/madeITBelgium/Laravel-VestaCP)

With this Laravel package you can connect to your vesta cp server.

# Installation
Install the package through composer
```php
composer require madeitbelgium/laravel-vestacp
```

Require this package in your `composer.json` and update composer.

```php
"madeitbelgium/laravel-vestacp": "0.*"
```

## On laravel Version < 5.5
updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
MadeITBelgium\VestaCP\VestaCPServiceProvider::class,
```

You can use the facade for shorter code. Add this to your aliases:

```php
'VestaCP' => MadeITBelgium\VestaCP\VestaCPFacade::class,
```
## On laravel version >= 5.5
The service provider is auto loaded.

# Documentation
## Usage
```php

use MadeITBelgium\VestaCP\VestaCP;

$vestacp = new VestaCP($server, $key);

```

In laravel you can use the Facade
```php

$users = VestaCP::users()->list(); // \MadeITBelgium\VestaCP\Response\User

```

## Laraval validator
```php
public function store(Request $request) {
    $this->validate($request, ['username' => 'user|useravailable']);
}
```

The complete documentation can be found at: [http://www.madeit.be/](http://www.madeit.be/)

# Support

Support github or mail: tjebbe.lievens@madeit.be

# Contributing

Please try to follow the psr-2 coding style guide. http://www.php-fig.org/psr/psr-2/
# License

This package is licensed under LGPL. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!
