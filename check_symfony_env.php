<?php
require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->bootEnv(__DIR__.'/.env');

var_dump([
    'APP_ENV' => $_ENV['APP_ENV'] ?? 'not set',
    'DATABASE_URL' => $_ENV['DATABASE_URL'] ?? 'not set',
]);