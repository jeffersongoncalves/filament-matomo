<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Definições',
    'title' => 'Definições do Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Configuração de rastreamento',
            'description' => 'Configure as definições de rastreamento do Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Definições avançadas',
            'description' => 'Personalize os nomes dos ficheiros do script de rastreamento.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domínios',
            'helper' => 'O(s) domínio(s) a rastrear (por ex., example.com).',
        ],
        'site_id' => [
            'label' => 'ID do site',
            'helper' => 'O seu ID de site do Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Host do Matomo',
            'helper' => 'O URL do seu servidor Matomo sem protocolo (por ex., analytics.example.com).',
        ],
        'file' => [
            'label' => 'Ficheiro de rastreamento PHP',
            'helper' => 'O nome do ficheiro do endpoint de rastreamento PHP.',
        ],
        'script' => [
            'label' => 'Ficheiro de rastreamento JS',
            'helper' => 'O nome do ficheiro de rastreamento JavaScript.',
        ],
    ],
];
