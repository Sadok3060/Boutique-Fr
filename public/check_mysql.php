<?php
echo "<pre>\n";
echo "MySQL Web Connection Test\n";
echo "=======================\n\n";

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

echo "\nPHP Web Server Configuration:\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "SAPI: " . php_sapi_name() . "\n";
echo "Loaded php.ini: " . php_ini_loaded_file() . "\n";
echo "PDO Drivers: " . implode(', ', PDO::getAvailableDrivers()) . "\n";
echo "Extension dir: " . ini_get('extension_dir') . "\n";
echo "</pre>";