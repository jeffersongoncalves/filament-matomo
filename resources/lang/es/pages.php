<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Configuración de seguimiento',
            'description' => 'Configura los ajustes de seguimiento de Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configuración avanzada',
            'description' => 'Personaliza los nombres de archivo del script de seguimiento.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Dominios',
            'helper' => 'El dominio o dominios a rastrear (p. ej., example.com).',
        ],
        'site_id' => [
            'label' => 'ID del sitio',
            'helper' => 'Tu ID de sitio de Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Host de Matomo',
            'helper' => 'La URL de tu servidor Matomo sin protocolo (p. ej., analytics.example.com).',
        ],
        'file' => [
            'label' => 'Archivo de seguimiento PHP',
            'helper' => 'El nombre del archivo del endpoint de seguimiento PHP.',
        ],
        'script' => [
            'label' => 'Archivo de seguimiento JS',
            'helper' => 'El nombre del archivo de seguimiento JavaScript.',
        ],
    ],
];
