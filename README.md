<div class="filament-hidden">

![Filament Matomo](https://raw.githubusercontent.com/jeffersongoncalves/filament-matomo/3.x/art/jeffersongoncalves-filament-matomo.png)

</div>

# Filament Matomo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-matomo)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-matomo/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-matomo/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-matomo.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-matomo)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-matomo.svg?style=flat-square)](LICENSE.md)

Filament plugin for Matomo Analytics with **Settings Page** — manage tracking configuration directly from your Filament panel via [spatie/laravel-settings](https://github.com/spatie/laravel-settings).

## Requirements

- PHP 8.2 or higher
- Laravel 11.28 or higher
- Filament 5.x
- [jeffersongoncalves/laravel-matomo](https://github.com/jeffersongoncalves/laravel-matomo) ^2.0

## Version Compatibility

| Branch | Filament | PHP   |
|--------|----------|-------|
| 1.x    | ^3.0     | ^8.2  |
| 2.x    | ^4.0     | ^8.2  |
| 3.x    | ^5.0     | ^8.2  |

## Installation

You can install the package via composer:

Install the package via Composer:

```bash
composer require jeffersongoncalves/filament-matomo
```

This package depends on [`jeffersongoncalves/laravel-matomo`](https://github.com/jeffersongoncalves/laravel-matomo) which provides the core Matomo integration for Laravel. It will be automatically installed as a dependency.

Publish and run the settings migration from `laravel-matomo`:

```bash
php artisan vendor:publish --tag=matomo-settings-migrations
php artisan migrate
```

## Usage

Register the plugin in your Filament `PanelProvider`:

```php
use JeffersonGoncalves\Filament\Matomo\MatomoPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugins([
            MatomoPlugin::make(),
        ]);
}
```

Once registered, the plugin will:

1. **Inject the Matomo tracking script** into the `<head>` of your Filament panels automatically
2. **Add a Settings Page** where you can manage all Matomo tracking configuration directly from the admin panel

### Disabling the Settings Page

If you only want the tracking script injection without the settings page:

```php
MatomoPlugin::make()
    ->settingsPage(false),
```

### Available Settings

| Setting | Description |
|---|---|
| **Domains** | Domain(s) to track |
| **Site ID** | Your Matomo Site ID |
| **Matomo Host** | Matomo server URL (without protocol) |
| **PHP Tracking File** | PHP tracking endpoint (default: `matomo.php`) |
| **JS Tracking File** | JavaScript tracking file (default: `matomo.js`) |

### Translations

The plugin includes translations for English and Brazilian Portuguese (`pt_BR`). You can publish the translations to customize them:

```bash
php artisan vendor:publish --tag=filament-matomo-translations
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
