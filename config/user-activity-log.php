<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Logging
    |--------------------------------------------------------------------------
    |
    | You may enable or disable activity logging completely.
    |
    */

    'enabled' => env('USER_ACTIVITY_LOG', true),

    /*
    |--------------------------------------------------------------------------
    | Routes Logging
    |--------------------------------------------------------------------------
    |
    | Only log requests from these route patterns (optional).
    | Use ['*'] to allow all.
    |
    */

    'allowed_routes' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Log Storage Driver
    |--------------------------------------------------------------------------
    |
    | Currently supports: database
    |
    */

    'driver' => 'database',

];
