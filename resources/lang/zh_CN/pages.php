<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => '设置',
    'title' => 'Matomo Analytics 设置',
    'sections' => [
        'tracking' => [
            'heading' => '跟踪配置',
            'description' => '配置你的 Matomo Analytics 跟踪设置。',
        ],
        'advanced' => [
            'heading' => '高级设置',
            'description' => '自定义跟踪脚本的文件名。',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => '域名',
            'helper' => '要跟踪的域名（例如 example.com）。',
        ],
        'site_id' => [
            'label' => '站点 ID',
            'helper' => '你的 Matomo 站点 ID。',
        ],
        'host_analytics' => [
            'label' => 'Matomo 主机',
            'helper' => '不含协议的 Matomo 服务器 URL（例如 analytics.example.com）。',
        ],
        'file' => [
            'label' => 'PHP 跟踪文件',
            'helper' => 'PHP 跟踪端点的文件名。',
        ],
        'script' => [
            'label' => 'JS 跟踪文件',
            'helper' => 'JavaScript 跟踪文件的名称。',
        ],
    ],
];
