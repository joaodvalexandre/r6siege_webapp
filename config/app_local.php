<?php
return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    'Security' => [
        'salt' => env('SECURITY_SALT', 'yfizAOmIDV0XhLjHYgXMu3pfjCeI2P2nejLTBEkgv5DzcDpsKKFESRaVQ5suhQDY'),
    ],
    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'r6siege_app',
            'url' => env('DATABASE_URL', null),
        ],
        'test' => [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => 'r6siege_app_test',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tmp/tests.sqlite'),
        ]
    ],
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
