<?php

namespace JeffersonGoncalves\Filament\Matomo\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Matomo\Settings\MatomoSettings;

class ManageMatomoSettings extends SettingsPage
{
    protected static string $settings = MatomoSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): string
    {
        return __('filament-matomo::pages.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-matomo::pages.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-matomo::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-matomo::pages.sections.tracking.heading'))
                    ->description(__('filament-matomo::pages.sections.tracking.description'))
                    ->schema([
                        TextInput::make('domains')
                            ->label(__('filament-matomo::pages.fields.domains.label'))
                            ->helperText(__('filament-matomo::pages.fields.domains.helper'))
                            ->required(),

                        TextInput::make('site_id')
                            ->label(__('filament-matomo::pages.fields.site_id.label'))
                            ->helperText(__('filament-matomo::pages.fields.site_id.helper'))
                            ->required(),

                        TextInput::make('host_analytics')
                            ->label(__('filament-matomo::pages.fields.host_analytics.label'))
                            ->helperText(__('filament-matomo::pages.fields.host_analytics.helper'))
                            ->required(),
                    ])->columns(2),

                Section::make(__('filament-matomo::pages.sections.advanced.heading'))
                    ->description(__('filament-matomo::pages.sections.advanced.description'))
                    ->collapsed()
                    ->schema([
                        TextInput::make('file')
                            ->label(__('filament-matomo::pages.fields.file.label'))
                            ->helperText(__('filament-matomo::pages.fields.file.helper'))
                            ->required(),

                        TextInput::make('script')
                            ->label(__('filament-matomo::pages.fields.script.label'))
                            ->helperText(__('filament-matomo::pages.fields.script.helper'))
                            ->required(),
                    ])->columns(2),
            ]);
    }
}
