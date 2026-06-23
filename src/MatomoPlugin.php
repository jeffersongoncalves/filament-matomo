<?php

namespace JeffersonGoncalves\Filament\Matomo;

use JeffersonGoncalves\Filament\Matomo\Pages\ManageMatomoSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class MatomoPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-matomo';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageMatomoSettings::class;
    }
}
