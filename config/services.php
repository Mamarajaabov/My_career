<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '4168281936630100',
        'client_secret' => '6e45b21633b6515cec32c5ecf348fcb4',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '987105600430-aq00rapsjj4n6l261s01copfln4r45se.apps.googleusercontent.com',
        'client_secret' => 'sxY8KyUM0tr8U1l42ofHfZEy',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => '1c0e22028de0c9759386',
        'client_secret' => 'faaf60e74f11668f4da2c3a5d2b3badaf066221c',
        'redirect' => 'http://127.0.0.1:8000/login/github/callback',
    ],

];
