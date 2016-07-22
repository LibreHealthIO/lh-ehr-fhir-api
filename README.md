# fhir

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This is a Laravel package for talking to a LibreEHR database via FHIR API

## Installation

Via Composer

Get composer

getcomposer.com

Create a Laravel project
``` bash
$ composer create-project laravel/laravel libre-ehr-laravel --prefer-dist
```

Require the fhir package which includes LibreEHR/core for as an interface to the LibreEHR database, for now it is in development and should be grabbed by developers via github.

Add the following to the root libre-ehr-laravel/composer.json after the "type"
``` json
...

"repositories": [
      {
        "type": "vcs",
        "url": "https://github.com/LibreEHR/fhir.git"
      },
      {
        "type": "vcs",
        "url": "https://github.com/LibreEHR/core.git"
      }
    ],
    
...
```

Then add the following to the "require" section of the libre-ehr-laravel/composer.json file which will specify the requirement of the development version of libre-ehr/fhir.
``` json
...

"libre-ehr/fhir": "dev-master"

...
```

Then add the following to the bottom of the libre-ehr-laravel/composer.json file, which will allow you to pull the development version.
``` json
    ...,
    "minimum-stability": "dev",
    "prefer-stable": true
...
```

Then from the root of libre-ehr-laravel, run the following to pull in the LibreEHR packages

``` bash
$ composer update
```

Place your database credentials in the file libre-ehr-laravel/config/database.php in the mysql section

Point a vhost to libre-ehr-laravel/public. 

Make sure to enable mod_rewrite on Apache.

## Usage

To integrate with Laravel, there is a service provider you can make use of to automatically prepare the bindings and such.

Add the following to the end of the "providers" array in libre-ehr-laravel/config/app.php

```php

// config/app.php

'providers' => [
    '...',
    LibreEHR\FHIR\Utilities\Providers\FHIRServiceProvider::class
];
```

You will then be able to browse to the FHIR endpoint like so:

```pre
http://[my vhost]/fhir/Patients
````

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ken@mi-squared.com instead of using the issue tracker.

## Credits

- [Ken Chapple][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/LibreEHR/fhir.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/LibreEHR/fhir/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/LibreEHR/fhir.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/LibreEHR/fhir.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/LibreEHR/fhir.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/LibreEHR/fhir
[link-travis]: https://travis-ci.org/LibreEHR/fhir
[link-scrutinizer]: https://scrutinizer-ci.com/g/LibreEHR/fhir/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/LibreEHR/fhir
[link-downloads]: https://packagist.org/packages/LibreEHR/fhir
[link-author]: https://github.com/kchapple
[link-contributors]: ../../contributors
