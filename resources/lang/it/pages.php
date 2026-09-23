<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Configurazione del tracciamento',
            'description' => 'Configura le impostazioni di tracciamento di Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Impostazioni avanzate',
            'description' => 'Personalizza i nomi dei file dello script di tracciamento.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domini',
            'helper' => 'Il dominio o i domini da tracciare (ad es. example.com).',
        ],
        'site_id' => [
            'label' => 'ID sito',
            'helper' => 'Il tuo ID sito Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Host Matomo',
            'helper' => 'L\'URL del tuo server Matomo senza protocollo (ad es. analytics.example.com).',
        ],
        'file' => [
            'label' => 'File di tracciamento PHP',
            'helper' => 'Il nome del file dell\'endpoint di tracciamento PHP.',
        ],
        'script' => [
            'label' => 'File di tracciamento JS',
            'helper' => 'Il nome del file di tracciamento JavaScript.',
        ],
    ],
];
