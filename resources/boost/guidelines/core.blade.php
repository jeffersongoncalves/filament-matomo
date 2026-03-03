## Filament Matomo

A Filament plugin for Matomo Analytics with a Settings Page to manage tracking configuration directly from the Filament panel via spatie/laravel-settings. Automatically injects the Matomo tracking script into panel pages.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-matomo
</code-snippet>
@endverbatim

### Publish and Run Migrations

@verbatim
<code-snippet name="Publish settings migration" lang="bash">
php artisan vendor:publish --tag=matomo-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Matomo\MatomoPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            MatomoPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Tracking script only, no settings page" lang="php">
use JeffersonGoncalves\Filament\Matomo\MatomoPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            MatomoPlugin::make()
                ->settingsPage(false),
        ]);
}
</code-snippet>
@endverbatim

### Available Settings

| Setting | Description |
|---------|-------------|
| Domains | Domain(s) to track |
| Site ID | Your Matomo Site ID |
| Matomo Host | Matomo server URL (without protocol) |
| PHP Tracking File | PHP tracking endpoint (default: `matomo.php`) |
| JS Tracking File | JavaScript tracking file (default: `matomo.js`) |

### Features
- Automatic Matomo tracking script injection into panel `<head>` via render hooks
- Settings page powered by `spatie/laravel-settings` for managing tracking configuration
- Settings page can be disabled independently while keeping script injection
- Multi-language support: English and Brazilian Portuguese (pt_BR)

### Best Practices
- Always publish and run the settings migrations from `laravel-matomo` before using the plugin
- Use `settingsPage(false)` if you prefer managing settings via config/env instead of the UI
- Publish translations to customize labels: `php artisan vendor:publish --tag=filament-matomo-translations`
