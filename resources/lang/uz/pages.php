<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Matomo Analytics sozlamalari',
    'sections' => [
        'tracking' => [
            'heading' => 'Kuzatuv konfiguratsiyasi',
            'description' => 'Matomo Analytics kuzatuv sozlamalarini sozlang.',
        ],
        'advanced' => [
            'heading' => 'Kengaytirilgan sozlamalar',
            'description' => 'Kuzatuv skripti fayl nomlarini moslashtiring.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domenlar',
            'helper' => 'Kuzatiladigan domen(lar) (masalan, example.com).',
        ],
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Matomo sayt ID raqamingiz.',
        ],
        'host_analytics' => [
            'label' => 'Matomo xosti',
            'helper' => 'Protokolsiz Matomo server URL manzili (masalan, analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP kuzatuv fayli',
            'helper' => 'PHP kuzatuv endpoint fayli nomi.',
        ],
        'script' => [
            'label' => 'JS kuzatuv fayli',
            'helper' => 'JavaScript kuzatuv fayli nomi.',
        ],
    ],
];
