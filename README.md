<div class="filament-hidden">

![Filament Matomo](https://raw.githubusercontent.com/jeffersongoncalves/filament-matomo/master/art/jeffersongoncalves-filament-matomo.png)

</div>

# Filament Matomo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-matomo)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-matomo/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-matomo/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-matomo)

A simple and elegant Laravel package that seamlessly integrates Matomo Analytics tracking code into your Filament v4 panels.

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or 12.0
- Filament 4.0

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-matomo
```

This package depends on [`jeffersongoncalves/laravel-matomo`](https://github.com/jeffersongoncalves/laravel-matomo) which provides the core Matomo integration for Laravel. It will be automatically installed as a dependency.

## Usage

Once installed, the package automatically integrates Matomo tracking into all your Filament panels. No additional setup is required in your Filament code.

### Configuration

Publish the Matomo configuration file:

```bash
php artisan vendor:publish --tag=matomo-config
```

Configure your Matomo settings in the published `config/matomo.php` file:

```php
return [
    'url' => env('MATOMO_URL', 'https://your-matomo-instance.com'),
    'site_id' => env('MATOMO_SITE_ID', 1),
    'enabled' => env('MATOMO_ENABLED', true),
];
```

Add the corresponding environment variables to your `.env` file:

```env
MATOMO_URL=https://your-matomo-instance.com
MATOMO_SITE_ID=1
MATOMO_ENABLED=true
```

The tracking script will be automatically injected into the `<head>` section of all your Filament panels.

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
