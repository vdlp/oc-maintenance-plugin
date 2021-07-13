<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'Maintenance',
        'description' => 'Stelt een volledige aanpasbare onderhoudspagina beschikbaar.',
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
