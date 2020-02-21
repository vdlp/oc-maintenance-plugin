<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'VDLP Maintenance Plugin',
        'description' => 'Plugin for the maintenance page',
    ],
    'responses' => [
        'ajax' => [
            'message' => 'The application is down for maintenance, please try again later.',
        ],
        'view' => [
            'title' => 'This application is down for maintenance',
            'message' => 'The application is down for maintenance, please try again later.',
        ],
    ],
];
