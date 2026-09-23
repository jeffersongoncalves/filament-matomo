# Changelog

All notable changes to this project will be documented in this file.

## 1.3.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#31)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/17
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/20
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/22
* build(deps): update jeffersongoncalves/laravel-matomo requirement from ^2.0 to ^3.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/30
* build(deps): bump the actions-deps group with 4 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/27
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/31

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/1.2.0...1.3.0

## 1.2.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v1.1.0 - 2026-02-22

### What's New

- **MatomoPlugin class**: Register the plugin in your PanelProvider with `MatomoPlugin::make()`
- **Settings Page**: Manage Matomo tracking configuration directly from your Filament panel
- **Translations**: English and Brazilian Portuguese (pt_BR) support
- **spatie/laravel-settings**: Database-backed settings via `filament/spatie-laravel-settings-plugin`
- **Toggle settings page**: Use `->settingsPage(false)` to disable the settings page

#### Requirements

- Filament 3.x
- laravel-matomo ^2.0

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
