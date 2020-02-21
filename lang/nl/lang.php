<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'VDLP Maintenance Plugin',
        'description' => 'Plugin voor de onderhoudspagina',
    ],
    'responses' => [
        'ajax' => [
            'message' => 'Er wordt momenteel onderhoud gepleegd aan deze website, probeer straks nogmaals.',
        ],
        'view' => [
            'title' => 'Er wordt momenteel onderhoud gepleegd aan deze website',
            'message' => 'Er wordt momenteel onderhoud gepleegd aan deze website, probeer straks nogmaals.',
        ],
    ],
];
