<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات Matomo Analytics',
    'sections' => [
        'tracking' => [
            'heading' => 'پیکربندی ردیابی',
            'description' => 'تنظیمات ردیابی Matomo Analytics را پیکربندی کنید.',
        ],
        'advanced' => [
            'heading' => 'تنظیمات پیشرفته',
            'description' => 'نام فایل‌های اسکریپت ردیابی را سفارشی کنید.',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'دامنه‌ها',
            'helper' => 'دامنه(هایی) که باید ردیابی شوند (مثلاً example.com).',
        ],
        'site_id' => [
            'label' => 'شناسه سایت',
            'helper' => 'شناسه سایت شما در Matomo.',
        ],
        'host_analytics' => [
            'label' => 'میزبان Matomo',
            'helper' => 'آدرس سرور Matomo بدون پروتکل (مثلاً analytics.example.com).',
        ],
        'file' => [
            'label' => 'فایل ردیابی PHP',
            'helper' => 'نام فایل نقطه پایانی ردیابی PHP.',
        ],
        'script' => [
            'label' => 'فایل ردیابی JS',
            'helper' => 'نام فایل ردیابی JavaScript.',
        ],
    ],
];
