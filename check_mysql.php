<?php
echo "Testing MySQL Connection:\n";

// Test server status first
$connection = @fsockopen('127.0.0.1', 3306);
if (is_resource($connection)) {
    echo "✅ MySQL port 3306 is open and accepting connections\n";
    fclose($connection);
} else {
    echo "❌ Could not connect to MySQL port 3306\n";
}

// Now test PDO connection
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3306;dbname=boutique_francaise;charset=utf8mb4',
        'root',
        'root'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ MySQL PDO connection successful\n";
    
    $stmt = $pdo->query('SELECT VERSION()');
    $version = $stmt->fetchColumn();
    echo "MySQL Version: $version\n";
    
} catch (PDOException $e) {
    echo "❌ PDO Connection failed: " . $e->getMessage() . "\n";
    echo "Error code: " . $e->getCode() . "\n";
}

echo "\nPHP Configuration:\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Loaded php.ini: " . php_ini_loaded_file() . "\n";
echo "PDO Drivers: " . implode(', ', PDO::getAvailableDrivers()) . "\n";
echo "Extension dir: " . ini_get('extension_dir') . "\n";

echo "Testing MySQL Connection:\n";
echo "DATABASE_URL from env: " . $_ENV['DATABASE_URL'] ?? 'not set' . "\n";

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3306;dbname=boutique_francaise;charset=utf8mb4',
        'root',
        'root'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Direct MySQL connection successful\n";
    
    $stmt = $pdo->query('SELECT VERSION()');
    $version = $stmt->fetchColumn();
    echo "MySQL Version: $version\n";
    
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";
    echo "Error code: " . $e->getCode() . "\n";
}

// Test server status
$connection = @fsockopen('127.0.0.1', 3306);
if (is_resource($connection)) {
    echo "✅ MySQL port 3306 is open and accepting connections\n";
    fclose($connection);
} else {
    echo "❌ Could not connect to MySQL port 3306\n";
}

// Print PHP configuration
echo "\nPHP Configuration:\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "Loaded php.ini: " . php_ini_loaded_file() . "\n";
echo "PDO Drivers: " . implode(', ', PDO::getAvailableDrivers()) . "\n";
echo "Extension dir: " . ini_get('extension_dir') . "\n";