<?php

use SMSkin\IdentityServiceClient\Models\User;

return [
    'debug' => env('IDENTITY_SERVICE_CLIENT_DEBUG', false),
    'parser' => [
        'cookies' => [
            'decrypt' => env('IDENTITY_SERVICE_CLIENT_PARSER_COOKIES_DECRYPT', false)
        ]
    ],
    'classes' => [
        'models' => [
            'user' => User::class
        ]
    ],
    'guards' => [
        'jwt' => [
            'name' => 'identity-service-client-jwt-guard',
            'driver' => [
                'name' => 'identity-service-client-jwt'
            ]
        ],
        'session' => [
            'name' => 'identity-service-client-session-guard',
            'driver' => [
                'name' => 'identity-service-client-session'
            ]
        ]
    ],
    'host' => [
        'host' => env('IDENTITY_SERVICE_CLIENT_HOST')
    ]
];
