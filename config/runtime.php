<?php

use Symfony\Component\Runtime\SymfonyRuntime;

return [
    'APP_ENV' => $_SERVER['APP_ENV'] ?? $_ENV['APP_ENV'] ?? 'prod',
    'APP_DEBUG' => $_SERVER['APP_DEBUG'] ?? $_ENV['APP_DEBUG'] ?? '0',
    'APP_RUNTIME' => SymfonyRuntime::class,
    'APP_RUNTIME_OPTIONS' => [
        // Prevent loading .env files in production-like environments on Render
        'disable_dotenv' => true,
        'project_dir' => dirname(__DIR__),
    ],
];


