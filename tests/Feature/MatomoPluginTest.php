<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\Matomo\MatomoPlugin;
use JeffersonGoncalves\Filament\Matomo\Pages\ManageMatomoSettings;
use JeffersonGoncalves\Matomo\Settings\MatomoSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageMatomoSettings::class)
        ->and(MatomoPlugin::make()->getId())->toBe('filament-matomo');
});

it('ships translated labels', function () {
    expect(ManageMatomoSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageMatomoSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageMatomoSettings::class)
        ->fillForm(['domains' => '*.example.com', 'host_analytics' => 'analytics.example.com', 'site_id' => '7'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(MatomoSettings::class)->refresh();
    expect($settings->domains)->toBe('*.example.com');
    expect($settings->host_analytics)->toBe('analytics.example.com');
    expect($settings->site_id)->toBe('7');
});

it('injects the script into the panel once configured', function () {
    $settings = app(MatomoSettings::class);
    $settings->host_analytics = 'analytics.example.com';
    $settings->site_id = '7';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('analytics.example.com');
});
