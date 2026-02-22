<?php

namespace JeffersonGoncalves\Filament\Matomo;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MatomoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-matomo')
            ->hasTranslations();
    }
}
