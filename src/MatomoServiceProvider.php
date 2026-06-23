<?php

namespace JeffersonGoncalves\Filament\Matomo;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class MatomoServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-matomo';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_END => 'matomo::script',
        ];
    }
}
