<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Settings',
    'title' => 'Matomo Analytics Settings',

    'sections' => [
        'tracking' => [
            'heading' => 'Tracking Configuration',
            'description' => 'Configure your Matomo Analytics tracking settings.',
        ],
        'advanced' => [
            'heading' => 'Advanced Settings',
            'description' => 'Customize the tracking script file names.',
        ],
    ],

    'fields' => [
        'domains' => [
            'label' => 'Domains',
            'helper' => 'The domain(s) to track (e.g. example.com).',
        ],
        'site_id' => [
            'label' => 'Site ID',
            'helper' => 'Your Matomo Site ID.',
        ],
        'host_analytics' => [
            'label' => 'Matomo Host',
            'helper' => 'Your Matomo server URL without protocol (e.g. analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP Tracking File',
            'helper' => 'The PHP tracking endpoint file name.',
        ],
        'script' => [
            'label' => 'JS Tracking File',
            'helper' => 'The JavaScript tracking file name.',
        ],
    ],
];
