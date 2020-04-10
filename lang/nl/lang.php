<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'VDLP Maintenance Plugin',
        'description' => 'Plugin voor de onderhoudspagina',
    ],
    'responses' => [
        'ajax' => [
            'message' => 'Sorry, we zijn momenteel niet bereikbaar wegens onderhoud. We verwachten snel weer terug te zijn. Bedankt voor uw geduld.',
        ],
        'view' => [
            'title' => 'Sorry, we zijn momenteel niet bereikbaar wegens onderhoud.',
            'message' => 'We verwachten snel weer terug te zijn. Bedankt voor uw geduld.',
        ],
    ],
];
