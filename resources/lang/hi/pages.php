<?php

return [
    'navigation_label' => 'Matomo Analytics',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'Matomo Analytics सेटिंग्स',
    'sections' => [
        'tracking' => [
            'heading' => 'ट्रैकिंग कॉन्फ़िगरेशन',
            'description' => 'अपनी Matomo Analytics ट्रैकिंग सेटिंग्स कॉन्फ़िगर करें।',
        ],
        'advanced' => [
            'heading' => 'उन्नत सेटिंग्स',
            'description' => 'ट्रैकिंग स्क्रिप्ट फ़ाइल नामों को अनुकूलित करें।',
        ],
    ],
    'fields' => [
        'domains' => [
            'label' => 'डोमेन',
            'helper' => 'ट्रैक करने के लिए डोमेन (जैसे example.com)।',
        ],
        'site_id' => [
            'label' => 'साइट ID',
            'helper' => 'आपकी Matomo साइट ID।',
        ],
        'host_analytics' => [
            'label' => 'Matomo होस्ट',
            'helper' => 'प्रोटोकॉल के बिना आपका Matomo सर्वर URL (जैसे analytics.example.com)।',
        ],
        'file' => [
            'label' => 'PHP ट्रैकिंग फ़ाइल',
            'helper' => 'PHP ट्रैकिंग एंडपॉइंट फ़ाइल का नाम।',
        ],
        'script' => [
            'label' => 'JS ट्रैकिंग फ़ाइल',
            'helper' => 'JavaScript ट्रैकिंग फ़ाइल का नाम।',
        ],
    ],
];
