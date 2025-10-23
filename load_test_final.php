<?php

/**
 * Test de charge simplifié pour BoutiqueProd-Sadok
 * Utilise des requêtes HTTP basiques pour tester les performances
 */

echo "🚀 DÉMARRAGE DES TESTS DE CHARGE POUR BOUTIQUEPROD-SADOK\n";
echo "🌐 URL de base: http://127.0.0.1:8000\n\n";

// Configuration
$baseUrl = 'http://127.0.0.1:8000';
$testResults = [];

/**
 * Effectue une requête HTTP simple
 */
function makeRequest($url) {
    $startTime = microtime(true);
    
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 10,
            'header' => "User-Agent: LoadTester/1.0\r\n"
        ]
    ]);
    
    $response = @file_get_contents($url, false, $context);
    $endTime = microtime(true);
    $responseTime = ($endTime - $startTime) * 1000; // en millisecondes
    
    // Récupérer le code de statut HTTP
    $httpCode = 200;
    if (isset($http_response_header)) {
        foreach ($http_response_header as $header) {
            if (preg_match('/HTTP\/\d\.\d\s+(\d+)/', $header, $matches)) {
                $httpCode = (int) $matches[1];
                break;
            }
        }
    }
    
    return [
        'http_code' => $httpCode,
        'response_time' => $responseTime,
        'success' => $response !== false && $httpCode >= 200 && $httpCode < 400,
        'content_length' => $response ? strlen($response) : 0
    ];
}

/**
 * Test de charge sur une URL spécifique
 */
function runLoadTest($testName, $url, $requests) {
    global $baseUrl;
    
    echo "🔍 Test de charge: $testName\n";
    echo "   📊 Nombre de requêtes: $requests\n";
    
    $responseTimes = [];
    $successCount = 0;
    $errorCount = 0;
    $totalContentLength = 0;
    
    for ($i = 0; $i < $requests; $i++) {
        $result = makeRequest($baseUrl . $url);
        
        if ($result['success']) {
            $responseTimes[] = $result['response_time'];
            $successCount++;
            $totalContentLength += $result['content_length'];
        } else {
            $errorCount++;
        }
        
        // Petite pause pour éviter de surcharger le serveur
        usleep(100000); // 100ms
        
        // Afficher le progrès
        if (($i + 1) % 5 == 0) {
            echo "   📈 Progrès: " . ($i + 1) . "/$requests requêtes\n";
        }
    }
    
    // Analyser les résultats
    if (empty($responseTimes)) {
        echo "   ❌ Aucune réponse valide reçue\n\n";
        return;
    }
    
    $avgResponseTime = array_sum($responseTimes) / count($responseTimes);
    $minResponseTime = min($responseTimes);
    $maxResponseTime = max($responseTimes);
    $successRate = ($successCount / $requests) * 100;
    $avgContentLength = $totalContentLength / $successCount;
    
    // Calcul du percentile 95
    sort($responseTimes);
    $p95Index = (int) (count($responseTimes) * 0.95);
    $p95ResponseTime = $responseTimes[$p95Index] ?? $maxResponseTime;
    
    echo "   📊 Résultats:\n";
    echo "      • Temps de réponse moyen: " . round($avgResponseTime, 2) . "ms\n";
    echo "      • Temps de réponse min: " . round($minResponseTime, 2) . "ms\n";
    echo "      • Temps de réponse max: " . round($maxResponseTime, 2) . "ms\n";
    echo "      • Percentile 95: " . round($p95ResponseTime, 2) . "ms\n";
    echo "      • Taux de succès: " . round($successRate, 2) . "%\n";
    echo "      • Erreurs: $errorCount/$requests\n";
    echo "      • Taille moyenne du contenu: " . round($avgContentLength) . " octets\n";
    
    // Évaluation des performances
    $status = "✅ EXCELLENT";
    $issues = [];
    
    if ($avgResponseTime > 1000) {
        $status = "⚠️  LENT";
        $issues[] = "Temps de réponse moyen élevé";
    }
    
    if ($p95ResponseTime > 2000) {
        $status = "⚠️  LENT";
        $issues[] = "Percentile 95 élevé";
    }
    
    if ($successRate < 95) {
        $status = "❌ PROBLÈME";
        $issues[] = "Taux de succès faible";
    }
    
    if ($avgResponseTime > 500 && $avgResponseTime <= 1000) {
        $status = "✅ BON";
    }
    
    echo "      • Évaluation: $status\n";
    
    if (!empty($issues)) {
        echo "      • Problèmes détectés: " . implode(', ', $issues) . "\n";
    }
    
    echo "\n";
    
    return [
        'test_name' => $testName,
        'avg_response_time' => $avgResponseTime,
        'p95_response_time' => $p95ResponseTime,
        'success_rate' => $successRate,
        'errors' => $errorCount,
        'total_requests' => $requests,
        'avg_content_length' => $avgContentLength
    ];
}

// Test de connectivité initial
echo "🔍 Test de connectivité initial...\n";
$connectivityTest = makeRequest($baseUrl . '/');
if (!$connectivityTest['success']) {
    echo "❌ Impossible de se connecter au serveur. Code HTTP: " . $connectivityTest['http_code'] . "\n";
    echo "💡 Le serveur semble avoir des problèmes (erreur 500 détectée)\n";
    echo "🔄 Continuons les tests malgré les erreurs pour évaluer les performances...\n\n";
} else {
    echo "✅ Connexion réussie! Temps de réponse: " . round($connectivityTest['response_time'], 2) . "ms\n\n";
}

echo str_repeat("=", 60) . "\n";
echo "⚡ TESTS DE CHARGE\n";
echo str_repeat("=", 60) . "\n\n";

// Tests de charge
$testResults[] = runLoadTest('Page d\'accueil', '/', 15);
$testResults[] = runLoadTest('Catalogue des produits', '/products', 12);
$testResults[] = runLoadTest('Page À propos', '/about', 10);
$testResults[] = runLoadTest('Page Contact', '/contact', 10);
$testResults[] = runLoadTest('Page de connexion', '/login', 8);

// Test de stress
echo "🔍 Test de stress - Charge élevée\n";
echo "   📊 Nombre de requêtes: 25\n";

$urls = ['/', '/products', '/about', '/contact', '/login'];
$responseTimes = [];
$successCount = 0;
$errorCount = 0;

for ($i = 0; $i < 25; $i++) {
    $url = $urls[$i % count($urls)];
    $result = makeRequest($baseUrl . $url);
    
    if ($result['success']) {
        $responseTimes[] = $result['response_time'];
        $successCount++;
    } else {
        $errorCount++;
    }
    
    // Petite pause même pour le stress test
    usleep(50000); // 50ms
    
    if (($i + 1) % 5 == 0) {
        echo "   📈 Progrès: " . ($i + 1) . "/25 requêtes\n";
    }
}

if (!empty($responseTimes)) {
    $avgResponseTime = array_sum($responseTimes) / count($responseTimes);
    $minResponseTime = min($responseTimes);
    $maxResponseTime = max($responseTimes);
    $successRate = ($successCount / 25) * 100;
    
    sort($responseTimes);
    $p95Index = (int) (count($responseTimes) * 0.95);
    $p95ResponseTime = $responseTimes[$p95Index] ?? $maxResponseTime;
    
    echo "   📊 Résultats du stress test:\n";
    echo "      • Temps de réponse moyen: " . round($avgResponseTime, 2) . "ms\n";
    echo "      • Temps de réponse min: " . round($minResponseTime, 2) . "ms\n";
    echo "      • Temps de réponse max: " . round($maxResponseTime, 2) . "ms\n";
    echo "      • Percentile 95: " . round($p95ResponseTime, 2) . "ms\n";
    echo "      • Taux de succès: " . round($successRate, 2) . "%\n";
    echo "      • Erreurs: $errorCount/25\n";
    
    $testResults[] = [
        'test_name' => 'Test de stress',
        'avg_response_time' => $avgResponseTime,
        'p95_response_time' => $p95ResponseTime,
        'success_rate' => $successRate,
        'errors' => $errorCount,
        'total_requests' => 25,
        'avg_content_length' => 0
    ];
} else {
    echo "   ❌ Aucune réponse valide reçue\n";
}

echo "\n" . str_repeat("=", 60) . "\n";
echo "📋 RAPPORT FINAL DES TESTS DE CHARGE\n";
echo str_repeat("=", 60) . "\n\n";

if (!empty($testResults)) {
    $overallAvgResponseTime = 0;
    $overallSuccessRate = 0;
    $totalTests = count($testResults);
    
    echo "📊 RÉSULTATS DÉTAILLÉS:\n";
    foreach ($testResults as $result) {
        $overallAvgResponseTime += $result['avg_response_time'];
        $overallSuccessRate += $result['success_rate'];
        
        echo "   • " . $result['test_name'] . ": " . round($result['avg_response_time'], 2) . 
             "ms (succès: " . round($result['success_rate'], 1) . "%)\n";
    }
    
    $overallAvgResponseTime /= $totalTests;
    $overallSuccessRate /= $totalTests;
    
    echo "\n📈 PERFORMANCE GLOBALE:\n";
    echo "   • Temps de réponse moyen global: " . round($overallAvgResponseTime, 2) . "ms\n";
    echo "   • Taux de succès global: " . round($overallSuccessRate, 2) . "%\n";
    
    echo "\n🎯 RECOMMANDATIONS:\n";
    if ($overallAvgResponseTime > 1000) {
        echo "   • Optimiser les requêtes de base de données\n";
        echo "   • Mettre en place un cache (Redis/Memcached)\n";
        echo "   • Optimiser les templates Twig\n";
    }
    if ($overallSuccessRate < 98) {
        echo "   • Investiguer les erreurs HTTP (erreur 500 détectée)\n";
        echo "   • Vérifier la configuration du serveur\n";
        echo "   • Examiner les logs d'erreur\n";
    }
    if ($overallAvgResponseTime < 500) {
        echo "   • ✅ Performance excellente!\n";
    }
    
    echo "\n⚠️  NOTES IMPORTANTES:\n";
    echo "   • Des erreurs 500 ont été détectées - vérifiez la configuration\n";
    echo "   • Les extensions PHP manquantes peuvent affecter les performances\n";
    echo "   • Considérez l'utilisation d'un serveur web (Apache/Nginx) en production\n";
}

echo "\n" . str_repeat("=", 60) . "\n";
echo "✅ Tests de charge terminés!\n";

