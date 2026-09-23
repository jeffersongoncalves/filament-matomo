# Changelog

All notable changes to this project will be documented in this file.

## 3.3.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#33)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* build(deps): bump actions/checkout from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/15
* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/16
* chore: add GitHub Sponsors to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/19
* ci: standardize update-changelog workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/24
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/25
* build(deps): update jeffersongoncalves/laravel-matomo requirement from ^2.0 to ^3.0 in the composer-deps group by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/29
* feat(i18n): add translations (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/33

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/3.2.0...3.3.0

## 3.2.0 - 2026-06-23

Refactor onto filament-analytics-core base classes; drop redundant dependencies (provided transitively via the cores).

## v3.1.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^5.3`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^5.3`

## 3.0.1 - 2026-02-24

### What's Changed

- Add Laravel 13.x support (orchestra/testbench ^11.0)

## v3.1.0 - 2026-02-22

### What's New

- **MatomoPlugin class**: Register the plugin in your PanelProvider with `MatomoPlugin::make()`
- **Settings Page**: Manage Matomo tracking configuration directly from your Filament panel
- **Translations**: English and Brazilian Portuguese (pt_BR) support
- **spatie/laravel-settings**: Database-backed settings via `filament/spatie-laravel-settings-plugin`
- **Toggle settings page**: Use `->settingsPage(false)` to disable the settings page

#### Requirements

- Filament 5.x
- laravel-matomo ^2.0

## v3.0.0 - 2026-02-16

### What's Changed

* build(deps): bump aglipanci/laravel-pint-action from 2.5 to 2.6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/8
* build(deps): bump actions/checkout from 4 to 5 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/7
* build(deps): bump stefanzweifel/git-auto-commit-action from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/9
* build(deps): bump actions/checkout from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/10
* build(deps): bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-matomo/pull/11
* Update Dependabot by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-matomo/pull/12

**Full Changelog**: https://github.com/jeffersongoncalves/filament-matomo/compare/v2.0.0...v3.0.0

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
