# Fancy Console for Laravel

[![Author](http://img.shields.io/badge/by-@kielabokkie-lightgrey.svg?style=flat-square)](https://twitter.com/kielabokkie)
[![Packagist Version](https://img.shields.io/packagist/v/kielabokkie/laravel-fancy-console.svg?style=flat-square)](https://packagist.org/packages/kielabokkie/laravel-fancy-console)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Fancy Console for Laravel provides a `FancyConsole` trait that gives you a few extra fancy styled console outputs to compliment the already useful default Laravel ones.

## Requirements

* PHP >= 7.2
* Laravel 5.8 and up

## Installation

Install the package via composer:

```bash
composer require kielabokkie/laravel-fancy-console
```

## Usage

Firstly you'll have to add the `FancyConsole` trait to your command:

```php
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Kielabokkie\FancyConsole\Traits\FancyConsole;

class MyCommand extends Command
{
    use FancyConsole;
}
```

You then have access to the following extra methods:

```php
$this->success('Yes, it worked!');

$this->fail('Oh no, it did not work.');

$this->successBlock('This is a great success');

$this->errorBlock('This is a serious error');
```
