<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Ayarlar',
    'title' => 'Matomo Analytics ayarları',
    'sections' => [
        'tracking' => [
            'heading' => 'İzleme yapılandırması',
            'description' => 'Matomo Analytics izleme ayarlarınızı yapılandırın.',
        ],
        'advanced' => [
            'heading' => 'Gelişmiş ayarlar',
            'description' => 'İzleme betiği dosya adlarını özelleştirin.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Alan adları',
            'helper' => 'İzlenecek alan ad(lar)ı (ör. example.com).',
        ],
        'site_id' => [
            'label' => 'Site kimliği',
            'helper' => 'Matomo site kimliğiniz.',
        ],
        'host_analytics' => [
            'label' => 'Matomo sunucusu',
            'helper' => 'Protokol olmadan Matomo sunucu URL\'niz (ör. analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP izleme dosyası',
            'helper' => 'PHP izleme uç noktası dosya adı.',
        ],
        'script' => [
            'label' => 'JS izleme dosyası',
            'helper' => 'JavaScript izleme dosyası adı.',
        ],
    ],
];
