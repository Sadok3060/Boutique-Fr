<?php
require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Charger les variables d'environnement
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

try {
    // Connexion à PostgreSQL
    $dbUrl = $_ENV['DATABASE_URL'];
    $params = parse_url($dbUrl);
    
    $dsn = sprintf(
        "pgsql:host=%s;port=%d;dbname=%s",
        $params['host'],
        $params['port'] ?? 5432,
        ltrim($params['path'], '/')
    );

    $pdo = new PDO($dsn, $params['user'], $params['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Lire et exécuter le script SQL
    $sql = file_get_contents(__DIR__ . '/add_stock_column.sql');
    $pdo->exec($sql);
    
    echo "✅ Colonne 'stock' ajoutée avec succès !\n";

} catch (Exception $e) {
    echo "❌ Erreur : " . $e->getMessage() . "\n";
    exit(1);
}