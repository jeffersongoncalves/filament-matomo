<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Налаштування відстеження',
            'description' => 'Налаштуйте параметри відстеження Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Розширені налаштування',
            'description' => 'Налаштуйте імена файлів скрипту відстеження.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Домени',
            'helper' => 'Домен(и) для відстеження (наприклад, example.com).',
        ],
        'site_id' => [
            'label' => 'ID сайту',
            'helper' => 'ID вашого сайту в Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Хост Matomo',
            'helper' => 'URL вашого сервера Matomo без протоколу (наприклад, analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP-файл відстеження',
            'helper' => 'Ім\'я файлу PHP-ендпоінта відстеження.',
        ],
        'script' => [
            'label' => 'JS-файл відстеження',
            'helper' => 'Ім\'я файлу JavaScript-відстеження.',
        ],
    ],
];
