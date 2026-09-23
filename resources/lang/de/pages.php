<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Einstellungen',
    'title' => 'Matomo Analytics-Einstellungen',
    'sections' => [
        'tracking' => [
            'heading' => 'Tracking-Konfiguration',
            'description' => 'Konfigurieren Sie Ihre Matomo Analytics-Tracking-Einstellungen.',
        ],
        'advanced' => [
            'heading' => 'Erweiterte Einstellungen',
            'description' => 'Passen Sie die Dateinamen des Tracking-Skripts an.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domains',
            'helper' => 'Die zu erfassende(n) Domain(s) (z. B. example.com).',
        ],
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Ihre Matomo-Site-ID.',
        ],
        'host_analytics' => [
            'label' => 'Matomo-Host',
            'helper' => 'Die URL Ihres Matomo-Servers ohne Protokoll (z. B. analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP-Tracking-Datei',
            'helper' => 'Der Dateiname des PHP-Tracking-Endpunkts.',
        ],
        'script' => [
            'label' => 'JS-Tracking-Datei',
            'helper' => 'Der Dateiname des JavaScript-Trackings.',
        ],
    ],
];
