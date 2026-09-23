<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Parametrlər',
    'title' => 'Matomo Analytics parametrləri',
    'sections' => [
        'tracking' => [
            'heading' => 'İzləmə konfiqurasiyası',
            'description' => 'Matomo Analytics izləmə parametrlərini konfiqurasiya edin.',
        ],
        'advanced' => [
            'heading' => 'Qabaqcıl parametrlər',
            'description' => 'İzləmə skripti fayl adlarını fərdiləşdirin.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domenlər',
            'helper' => 'İzləniləcək domen(lər) (məs. example.com).',
        ],
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Matomo sayt ID-niz.',
        ],
        'host_analytics' => [
            'label' => 'Matomo host',
            'helper' => 'Protokolsuz Matomo server URL-iniz (məs. analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP izləmə faylı',
            'helper' => 'PHP izləmə endpoint faylının adı.',
        ],
        'script' => [
            'label' => 'JS izləmə faylı',
            'helper' => 'JavaScript izləmə faylının adı.',
        ],
    ],
];
