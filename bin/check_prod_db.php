<?php
require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Load .env files
$dotenv = new Dotenv();
$dotenv->loadEnv(dirname(__DIR__).'/.env');

echo "Testing Production Database Connection:\n";
echo "DATABASE_URL: " . ($_ENV['DATABASE_URL'] ?? 'not set') . "\n";

try {
    $params = parse_url($_ENV['DATABASE_URL']);
    $pdo = new PDO(
        sprintf(
            "mysql:host=%s;port=%s;dbname=%s",
            $params['host'],
            $params['port'] ?? 3306,
            ltrim($params['path'], '/')
        ),
        $params['user'],
        $params['pass'] ?? ''
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ MySQL connection successful\n";
    
    $stmt = $pdo->query('SELECT VERSION()');
    $version = $stmt->fetchColumn();
    echo "MySQL Version: $version\n";
    
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";
    echo "Error code: " . $e->getCode() . "\n";
    
    // Debug connection parameters
    echo "\nConnection Parameters:\n";
    echo "Host: " . ($params['host'] ?? 'not set') . "\n";
    echo "Port: " . ($params['port'] ?? '3306') . "\n";
    echo "Database: " . (ltrim($params['path'] ?? '', '/')) . "\n";
    echo "User: " . ($params['user'] ?? 'not set') . "\n";
}