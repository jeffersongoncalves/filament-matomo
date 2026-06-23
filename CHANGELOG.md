# Changelog

All notable changes to this project will be documented in this file.

## 2.2.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v2.1.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^4.8`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^4.8`

## v2.1.0 - 2026-02-22

### What's New

- **MatomoPlugin class**: Register the plugin in your PanelProvider with `MatomoPlugin::make()`
- **Settings Page**: Manage Matomo tracking configuration directly from your Filament panel
- **Translations**: English and Brazilian Portuguese (pt_BR) support
- **spatie/laravel-settings**: Database-backed settings via `filament/spatie-laravel-settings-plugin`
- **Toggle settings page**: Use `->settingsPage(false)` to disable the settings page

#### Requirements

- Filament 4.x
- laravel-matomo ^2.0

## v2.0.0 - 2025-07-17

### What's Changed

* build(deps): bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/1
* build(deps): bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/2
* chore: Configure Renovate by @renovate[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/3
* Delete .github/FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/5
* Delete renovate.json by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/6

### New Contributors

* @dependabot[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-matomo/pull/1
* @renovate[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-matomo/pull/3
* @jeffersongoncalves made their first contribution in https://github.com/jeffersongoncalves/filament-matomo/pull/5

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/v1.0.0...v2.0.0

## v1.0.4 - 2025-03-03

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/v1.0.3...v1.0.4

## v1.0.3 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/v1.0.2...v1.0.3

## v1.0.2 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/v1.0.1...v1.0.2

## v1.0.1 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/v1.0.0...v1.0.1

## v1.0.0 - 2025-03-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/commits/v1.0.0
