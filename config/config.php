<?php

// Application configuration
return [
    'BASE_URL' => 'http://yourdomain.com',
    'APP_NAME' => 'School Auth System',
    'APP_VERSION' => '1.0.0',
    'environment' => 'development',
    'paths' => [
        'root' => __DIR__,
        'logs' => __DIR__ . '/logs',
        'cache' => __DIR__ . '/cache',
    ],
    'security' => [
        'salt' => 'your_random_salt',
        'encryption_key' => 'your_encryption_key',
    ],
    'session' => [
        'name' => 'session_name',
        'lifetime' => 3600,
        'path' => '/',
        'secure' => false,
        'httponly' => true,
    ],
    'error_handling' => [
        'display_errors' => true,
        'log_errors' => true,
        'error_log' => __DIR__ . '/logs/error.log',
    ],
    'timezone' => 'UTC',
    'autoload' => [
        'psr-4' => [
            'Namespace\' => 'src/',
        ],
    ],
];
