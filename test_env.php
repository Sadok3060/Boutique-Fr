<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Load .env files
$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__.'/.env');

// Print loaded environment variables
echo "Environment variables:\n";
echo "APP_ENV: " . $_ENV['APP_ENV'] . "\n";
echo "DATABASE_URL: " . $_ENV['DATABASE_URL'] . "\n";

// Test database connection
try {
    $dbUrl = parse_url($_ENV['DATABASE_URL']);
    $dbName = ltrim($dbUrl['path'], '/');
    $dbUser = $dbUrl['user'];
    $dbPass = $dbUrl['pass'] ?? '';
    $dbHost = $dbUrl['host'];
    $dbPort = $dbUrl['port'];

    $dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbName}";
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "\nDatabase connection successful!\n";
    echo "Connected to: {$dbName}\n";
} catch (Exception $e) {
    echo "\nError connecting to database:\n";
    echo $e->getMessage() . "\n";
}