<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Настройка отслеживания',
            'description' => 'Настройте параметры отслеживания Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Расширенные настройки',
            'description' => 'Настройте имена файлов скрипта отслеживания.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Домены',
            'helper' => 'Домен(ы) для отслеживания (например, example.com).',
        ],
        'site_id' => [
            'label' => 'ID сайта',
            'helper' => 'ID вашего сайта в Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Хост Matomo',
            'helper' => 'URL вашего сервера Matomo без протокола (например, analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP-файл отслеживания',
            'helper' => 'Имя файла PHP-эндпоинта отслеживания.',
        ],
        'script' => [
            'label' => 'JS-файл отслеживания',
            'helper' => 'Имя файла JavaScript-отслеживания.',
        ],
    ],
];
