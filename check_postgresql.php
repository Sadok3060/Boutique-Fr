<?php

echo "PostgreSQL Connection Test\n";
echo "========================\n\n";

$dbUrl = getenv('DATABASE_URL');
echo "DATABASE_URL: " . $dbUrl . "\n\n";

try {
    // Parse DATABASE_URL
    $dsnInfo = parse_url($dbUrl);
    
    $host = $dsnInfo['host'];
    $port = $dsnInfo['port'] ?? '5432';
    $dbname = ltrim($dsnInfo['path'], '/');
    $user = $dsnInfo['user'];
    $password = $dsnInfo['pass'];

    echo "Connecting with:\n";
    echo "Host: $host\n";
    echo "Port: $port\n";
    echo "Database: $dbname\n";
    echo "User: $user\n\n";

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Successfully connected to PostgreSQL\n\n";
    
    // Test query
    $stmt = $pdo->query('SELECT version()');
    $version = $stmt->fetchColumn();
    echo "PostgreSQL Version: $version\n";

    // Test schema
    $stmt = $pdo->query("SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    
    echo "\nAvailable tables:\n";
    foreach ($tables as $table) {
        echo "- $table\n";
    }
    
} catch (PDOException $e) {
    echo "❌ Connection failed:\n";
    echo $e->getMessage() . "\n";
    echo "Error code: " . $e->getCode() . "\n";
}