<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'Configuration du suivi',
            'description' => 'Configurez vos paramètres de suivi Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'Paramètres avancés',
            'description' => 'Personnalisez les noms de fichiers du script de suivi.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'Domaines',
            'helper' => 'Le ou les domaines à suivre (par ex. example.com).',
        ],
        'site_id' => [
            'label' => 'ID du site',
            'helper' => 'Votre ID de site Matomo.',
        ],
        'host_analytics' => [
            'label' => 'Hôte Matomo',
            'helper' => 'L\'URL de votre serveur Matomo sans protocole (par ex. analytics.example.com).',
        ],
        'file' => [
            'label' => 'Fichier de suivi PHP',
            'helper' => 'Le nom du fichier du point de terminaison de suivi PHP.',
        ],
        'script' => [
            'label' => 'Fichier de suivi JS',
            'helper' => 'Le nom du fichier de suivi JavaScript.',
        ],
    ],
];
