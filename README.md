# GermaniaKG · NullFactory


[![Packagist](https://img.shields.io/packagist/v/germania-kg/nullfactory.svg?style=flat)](https://packagist.org/packages/germania-kg/nullfactory)
[![PHP version](https://img.shields.io/packagist/php-v/germania-kg/nullfactory.svg)](https://packagist.org/packages/germania-kg/nullfactory)
[![Build Status](https://img.shields.io/travis/GermaniaKG/NullFactory.svg?label=Travis%20CI)](https://travis-ci.org/GermaniaKG/NullFactory)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GermaniaKG/NullFactory/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/NullFactory/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/GermaniaKG/NullFactory/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/NullFactory/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/GermaniaKG/NullFactory/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GermaniaKG/NullFactory/build-status/master)


## Installation with Composer

```bash
$ composer require germania-kg/nullfactory
```

## Usage

```php
<?php
use Germania\NullFactory\NullFactory;

$nf = new NullFactory;
$result = $nf( "anything" );
// null
```

To make *NullFactory* return **something else,** pass it to the constructor:

```php
<?php
use Germania\NullFactory\NullFactory;

$default_value = array("foo", "bar");

$nf = new NullFactory( $default_value );
$result = $nf( "anything" );
// array("foo", "bar")
```

The *NullFactory* also accepts a PSR3-**Logger** which defaults to **NullLogger**

```php
<?php
use Germania\NullFactory\NullFactory;
use Psr\Log\NullLogger;

$nf = new NullFactory( null, new NullLogger );
$result = $nf( "anything" );

```



## Issues

See [full issues list.][i0]

[i0]: https://github.com/GermaniaKG/NullFactory/issues

## Roadmap
Fill in planned or desired features

## Development

```bash
$ git clone https://github.com/GermaniaKG/NullFactory.git
$ cd NullFactory
$ composer install
```

## Unit tests

Either copy `phpunit.xml.dist` to `phpunit.xml` and adapt to your needs, or leave as is. Run [PhpUnit](https://phpunit.de/) test or composer scripts like this:

```bash
$ composer test
# or
$ vendor/bin/phpunit
```

