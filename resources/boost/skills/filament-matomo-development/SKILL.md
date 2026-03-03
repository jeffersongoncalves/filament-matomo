---
name: filament-matomo-development
description: Build and work with Filament Matomo plugin features, including Matomo tracking script injection, settings page configuration, and spatie/laravel-settings integration.
---

# Filament Matomo Development

## When to use this skill

Use this skill when:
- Integrating Matomo Analytics tracking into a Filament panel
- Configuring the Matomo settings page in the admin panel
- Customizing tracking script injection behavior
- Working with Matomo settings fields (domains, site ID, host, tracking files)
- Troubleshooting Matomo tracking or settings page issues

## Architecture

The plugin consists of two main components:

1. **MatomoServiceProvider** - Injects the Matomo tracking script via Filament render hooks
2. **MatomoPlugin** - Registers the settings page in the Filament panel

### Namespace

```
JeffersonGoncalves\Filament\Matomo
```

### Key Classes

| Class | Namespace | Purpose |
|-------|-----------|---------|
| `MatomoPlugin` | `JeffersonGoncalves\Filament\Matomo` | Filament plugin - registers settings page |
| `MatomoServiceProvider` | `JeffersonGoncalves\Filament\Matomo` | Service provider - injects tracking script |
| `ManageMatomoSettings` | `JeffersonGoncalves\Filament\Matomo\Pages` | Settings page (extends `SettingsPage`) |
| `MatomoSettings` | `JeffersonGoncalves\Matomo\Settings` | Settings class (from `laravel-matomo` package) |

### Dependencies

- `jeffersongoncalves/laravel-matomo` ^2.0 - Core Matomo integration for Laravel
- `filament/spatie-laravel-settings-plugin` ^5.0 - Filament settings page support
- `spatie/laravel-settings` - Database-backed settings

## Installation

```bash
composer require jeffersongoncalves/filament-matomo
```

Publish and run the settings migration:

```bash
php artisan vendor:publish --tag=matomo-settings-migrations
php artisan migrate
```

### Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | ^3.0 | ^8.2 |
| 2.x | ^4.0 | ^8.2 |
| 3.x | ^5.0 | ^8.2 |

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\Filament\Matomo\MatomoPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            MatomoPlugin::make(),
        ]);
}
```

### Disable Settings Page

```php
MatomoPlugin::make()
    ->settingsPage(false),
```

### Plugin Methods

| Method | Default | Description |
|--------|---------|-------------|
| `settingsPage(bool $condition = true)` | `true` | Enable/disable the settings page |

## Settings Page

The `ManageMatomoSettings` page extends Filament's `SettingsPage` and uses `MatomoSettings` from the `laravel-matomo` package.

### Form Fields

The settings page has two sections:

**Tracking Section:**

```php
// Section: Tracking configuration
TextInput::make('domains')    // Domain(s) to track
TextInput::make('site_id')    // Matomo Site ID
TextInput::make('host_analytics') // Matomo server URL (without protocol)
```

**Advanced Section (collapsed by default):**

```php
// Section: Advanced settings
TextInput::make('file')   // PHP tracking endpoint (default: matomo.php)
TextInput::make('script') // JS tracking file (default: matomo.js)
```

### Navigation

The settings page uses translated strings for navigation:
- Group: `filament-matomo::pages.navigation_group`
- Label: `filament-matomo::pages.navigation_label`
- Icon: `heroicon-o-chart-bar-square`

## Tracking Script Injection

The `MatomoServiceProvider` injects the tracking script via a Filament render hook:

```php
FilamentView::registerRenderHook(
    PanelsRenderHook::HEAD_END,
    fn (): View => view('matomo::script')
);
```

This injection happens globally for all panels, independent of the plugin registration. The tracking script view is provided by the `laravel-matomo` base package.

## Localization

Translations are provided for English and Brazilian Portuguese (`pt_BR`):

```bash
php artisan vendor:publish --tag=filament-matomo-translations
```

## Troubleshooting

### Tracking script not appearing
**Cause**: The `MatomoServiceProvider` is not auto-discovered, or the settings have not been configured.
**Solution**: Verify the provider is listed in `bootstrap/providers.php` or auto-discovered via `composer.json`. Ensure settings have been saved via the settings page.

### Settings page not visible
**Cause**: Plugin not registered, or `settingsPage(false)` was called.
**Solution**: Ensure `MatomoPlugin::make()` is registered in the panel and `settingsPage()` is not set to `false`.

### Migration errors
**Cause**: The `spatie/laravel-settings` migrations have not been published.
**Solution**: Run `php artisan vendor:publish --tag=matomo-settings-migrations` followed by `php artisan migrate`.

### Settings not persisting
**Cause**: The `MatomoSettings` class from `laravel-matomo` requires the settings table to exist.
**Solution**: Ensure both the spatie settings table and the Matomo settings migration have been run.
