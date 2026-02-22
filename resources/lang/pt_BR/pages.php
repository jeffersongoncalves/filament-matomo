<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do Matomo Analytics',

    'sections' => [
        'tracking' => [
            'heading' => 'Configuração de Rastreamento',
            'description' => 'Configure as opções de rastreamento do Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Configurações Avançadas',
            'description' => 'Personalize os nomes dos arquivos de rastreamento.',
        ],
    ],

    'fields' => [
        'domains' => [
            'label' => 'Domínios',
            'helper' => 'O(s) domínio(s) para rastrear (ex: exemplo.com.br).',
        ],
        'site_id' => [
            'label' => 'ID do Site',
            'helper' => 'O ID do site no Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Host do Matomo',
            'helper' => 'A URL do servidor Matomo sem protocolo (ex: analytics.exemplo.com.br).',
        ],
        'file' => [
            'label' => 'Arquivo PHP de Rastreamento',
            'helper' => 'Nome do arquivo PHP de rastreamento.',
        ],
        'script' => [
            'label' => 'Arquivo JS de Rastreamento',
            'helper' => 'Nome do arquivo JavaScript de rastreamento.',
        ],
    ],
];
