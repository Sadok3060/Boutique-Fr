<?php

putenv('APP_ENV=dev');
putenv('DATABASE_URL=mysql://root:@127.0.0.1:3306/boutique_francaise?serverVersion=8.0&charset=utf8mb4');

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
try {docker-compose up -ddocker-compose up -d
    // Load .env file
    if (file_exists(__DIR__.'/.env')) {
        echo "Loading .env file...\n";
        $dotenv->load(__DIR__.'/.env');
        echo "Environment after .env:\n";
        echo "DATABASE_URL=" . getenv('DATABASE_URL') . "\n";
    }

    // Load .env.local file
    if (file_exists(__DIR__.'/.env.local')) {
        echo "\nLoading .env.local file...\n";
        $dotenv->load(__DIR__.'/.env.local');
        echo "Environment after .env.local:\n";
        echo "DATABASE_URL=" . getenv('DATABASE_URL') . "\n";
    }

    echo "\nFinal environment state:\n";
    echo "APP_ENV=" . getenv('APP_ENV') . "\n";
    echo "DATABASE_URL=" . getenv('DATABASE_URL') . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}