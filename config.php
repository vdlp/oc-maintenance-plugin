<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Use preferred locale from request
    |--------------------------------------------------------------------------
    |
    | Use the preferred locale which is sent by the client.
    |
    */

    'use_preferred_locale' => false,

    /*
    |--------------------------------------------------------------------------
    | HTTP status code
    |--------------------------------------------------------------------------
    |
    | Configure a HTTP status code to use for maintenance page HTTP responses.
    |
    */

    'http_status_code' => 503,

    /*
    |--------------------------------------------------------------------------
    | HTTP status code for AJAX requests
    |--------------------------------------------------------------------------
    |
    | Configure a HTTP status code to use for maintenance page HTTP responses
    | via AJAX requests.
    |
    */

    'http_status_code_ajax' => 503,

    /*
    |--------------------------------------------------------------------------
    | Whitelisted IP addresses during maintenance mode
    |--------------------------------------------------------------------------
    |
    | Configure a list of IP addresses that are allowed to access the site
    | during maintenance mode. Separate multiple IP addresses with a comma.
    |
    */

    'whitelisted_ips' => env('MAINTENANCE_WHITELIST_IPS', ''),

];
