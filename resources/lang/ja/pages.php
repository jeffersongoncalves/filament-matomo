<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => '設定',
    'title' => 'Matomo Analytics 設定',
    'sections' => [
        'tracking' => [
            'heading' => 'トラッキング設定',
            'description' => 'Matomo Analytics のトラッキング設定を行います。',
        ],
        'advanced' => [
            'heading' => '詳細設定',
            'description' => 'トラッキングスクリプトのファイル名をカスタマイズします。',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'ドメイン',
            'helper' => 'トラッキングするドメイン（例: example.com）。',
        ],
        'site_id' => [
            'label' => 'サイト ID',
            'helper' => 'Matomo のサイト ID。',
        ],
        'host_analytics' => [
            'label' => 'Matomo ホスト',
            'helper' => 'プロトコルを除いた Matomo サーバーの URL（例: analytics.example.com）。',
        ],
        'file' => [
            'label' => 'PHP トラッキングファイル',
            'helper' => 'PHP トラッキングエンドポイントのファイル名。',
        ],
        'script' => [
            'label' => 'JS トラッキングファイル',
            'helper' => 'JavaScript トラッキングファイルの名前。',
        ],
    ],
];
