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

Require the fhir package which includes LibreEHR/core for as an interface to the LibreEHR database
``` bash
$ composer require LibreEHR/fhir
```

## Usage

If you are a Laravel user, there is a service provider you can make use of to automatically prepare the bindings and such.

```php

// config/app.php

'providers' => [
    '...',
    LibreEHR\FHIR\Utilities\Providers\FHIRServiceProvider::class
];
```

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
