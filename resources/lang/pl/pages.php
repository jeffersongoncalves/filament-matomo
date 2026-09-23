<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Konfiguracja śledzenia',
            'description' => 'Skonfiguruj ustawienia śledzenia Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Ustawienia zaawansowane',
            'description' => 'Dostosuj nazwy plików skryptu śledzącego.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domeny',
            'helper' => 'Domena lub domeny do śledzenia (np. example.com).',
        ],
        'site_id' => [
            'label' => 'ID witryny',
            'helper' => 'Twój identyfikator witryny Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Host Matomo',
            'helper' => 'Adres URL serwera Matomo bez protokołu (np. analytics.example.com).',
        ],
        'file' => [
            'label' => 'Plik śledzenia PHP',
            'helper' => 'Nazwa pliku punktu końcowego śledzenia PHP.',
        ],
        'script' => [
            'label' => 'Plik śledzenia JS',
            'helper' => 'Nazwa pliku śledzenia JavaScript.',
        ],
    ],
];
