<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Instellingen',
    'title' => 'Matomo Analytics-instellingen',
    'sections' => [
        'tracking' => [
            'heading' => 'Trackingconfiguratie',
            'description' => 'Configureer je Matomo Analytics-trackinginstellingen.',
        ],
        'advanced' => [
            'heading' => 'Geavanceerde instellingen',
            'description' => 'Pas de bestandsnamen van het trackingscript aan.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domeinen',
            'helper' => 'Het domein of de domeinen om te volgen (bijv. example.com).',
        ],
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Je Matomo-site-ID.',
        ],
        'host_analytics' => [
            'label' => 'Matomo-host',
            'helper' => 'De URL van je Matomo-server zonder protocol (bijv. analytics.example.com).',
        ],
        'file' => [
            'label' => 'PHP-trackingbestand',
            'helper' => 'De bestandsnaam van het PHP-tracking-endpoint.',
        ],
        'script' => [
            'label' => 'JS-trackingbestand',
            'helper' => 'De bestandsnaam van de JavaScript-tracking.',
        ],
    ],
];
