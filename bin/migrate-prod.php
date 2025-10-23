<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Charge les variables d'environnement
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$kernel = new \App\Kernel($_SERVER['APP_ENV'] ?? 'prod', (bool) ($_SERVER['APP_DEBUG'] ?? false));
$kernel->boot();

$container = $kernel->getContainer();
$entityManager = $container->get('doctrine')->getManager();

$connection = $entityManager->getConnection();

try {
    // Test de la connexion
    $connection->connect();
    echo "✅ Connexion à la base de données réussie.\n";

    // Exécution des migrations
    $command = $container->get('doctrine.migrations.migrate_command');
    $input = new \Symfony\Component\Console\Input\ArrayInput([
        '--allow-no-migration' => true,
        '--no-interaction' => true,
    ]);
    $output = new \Symfony\Component\Console\Output\ConsoleOutput();
    
    $command->run($input, $output);
    
    echo "✅ Migrations terminées avec succès.\n";

} catch (\Exception $e) {
    echo "❌ Erreur : " . $e->getMessage() . "\n";
    exit(1);
}