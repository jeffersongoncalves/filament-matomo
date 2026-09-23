<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'إعدادات التتبع',
            'description' => 'اضبط إعدادات تتبع Matomo Analytics.',
        ],
        'advanced' => [
            'heading' => 'إعدادات متقدمة',
            'description' => 'خصص أسماء ملفات سكربت التتبع.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'النطاقات',
            'helper' => 'النطاق أو النطاقات المراد تتبعها (مثل example.com).',
        ],
        'site_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'معرّف موقعك في Matomo.',
        ],
        'host_analytics' => [
            'label' => 'مضيف Matomo',
            'helper' => 'رابط خادم Matomo بدون البروتوكول (مثل analytics.example.com).',
        ],
        'file' => [
            'label' => 'ملف تتبع PHP',
            'helper' => 'اسم ملف نقطة تتبع PHP.',
        ],
        'script' => [
            'label' => 'ملف تتبع JS',
            'helper' => 'اسم ملف تتبع JavaScript.',
        ],
    ],
];
