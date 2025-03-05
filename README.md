<div class="filament-hidden">

![Filament Matomo](https://raw.githubusercontent.com/jeffersongoncalves/filament-matomo/master/art/jeffersongoncalves-filament-matomo.png)

</div>

# Filament Matomo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-matomo)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-matomo/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-matomo/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-matomo)

A simple and elegant Laravel package that seamlessly integrates Matomo Analytics tracking code into your filament panel.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-matomo
```

## Usage

Publish config file.

```bash
php artisan vendor:publish --tag=matomo-config
```

Add head template.

```php
@include('matomo::script')
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
