<?php

/**
 * Script de test d'acceptation et de charge pour BoutiqueProd-Sadok
 * 
 * Ce script teste l'application en faisant des requêtes HTTP directes
 * et analyse les performances et la fonctionnalité.
 */

class ApplicationTester
{
    private $baseUrl = 'http://localhost:8000';
    private $testResults = [];
    private $loadTestResults = [];

    public function __construct($baseUrl = 'http://localhost:8000')
    {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    /**
     * Effectue une requête HTTP et mesure le temps de réponse
     */
    private function makeRequest($url, $method = 'GET', $data = null)
    {
        $fullUrl = $this->baseUrl . $url;
        $startTime = microtime(true);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, false);
        
        if ($method === 'POST' && $data) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        $endTime = microtime(true);
        $responseTime = ($endTime - $startTime) * 1000; // en millisecondes
        
        return [
            'http_code' => $httpCode,
            'response_time' => $responseTime,
            'error' => $error,
            'response' => $response
        ];
    }

    /**
     * Tests d'acceptation
     */
    public function runAcceptanceTests()
    {
        echo "\n" . str_repeat("=", 60) . "\n";
        echo "🧪 TESTS D'ACCEPTATION\n";
        echo str_repeat("=", 60) . "\n\n";

        $tests = [
            'Page d\'accueil' => '/',
            'Catalogue des produits' => '/products',
            'Page À propos' => '/about',
            'Page Contact' => '/contact',
            'Page de connexion' => '/login',
            'Page d\'inscription' => '/register',
            'Panier' => '/cart',
            'API Produits' => '/api/products'
        ];

        foreach ($tests as $testName => $url) {
            echo "🔍 Test: $testName\n";
            
            $result = $this->makeRequest($url);
            
            if ($result['error']) {
                echo "   ❌ Erreur: " . $result['error'] . "\n";
                $this->testResults[$testName] = ['status' => 'ERROR', 'error' => $result['error']];
            } else {
                $status = $this->evaluateHttpResponse($result['http_code'], $url);
                echo "   📊 Code HTTP: " . $result['http_code'] . "\n";
                echo "   ⏱️  Temps de réponse: " . round($result['response_time'], 2) . "ms\n";
                echo "   📈 Statut: $status\n";
                
                $this->testResults[$testName] = [
                    'status' => $status,
                    'http_code' => $result['http_code'],
                    'response_time' => $result['response_time']
                ];
            }
            echo "\n";
        }
    }

    /**
     * Tests de charge
     */
    public function runLoadTests()
    {
        echo "\n" . str_repeat("=", 60) . "\n";
        echo "⚡ TESTS DE CHARGE\n";
        echo str_repeat("=", 60) . "\n\n";

        // Test de charge - Page d'accueil
        $this->runLoadTest('Page d\'accueil', '/', 20);
        
        // Test de charge - Catalogue
        $this->runLoadTest('Catalogue des produits', '/products', 15);
        
        // Test de charge - Recherche
        $this->runLoadTest('Recherche de produits', '/products?search=test', 10);
        
        // Test de charge - Pages statiques
        $this->runLoadTest('Pages statiques', '/about', 10);
        
        // Test de stress
        $this->runStressTest();
    }

    /**
     * Exécute un test de charge sur une URL spécifique
     */
    private function runLoadTest($testName, $url, $requests)
    {
        echo "🔍 Test de charge: $testName\n";
        echo "   📊 Nombre de requêtes: $requests\n";
        
        $responseTimes = [];
        $errors = 0;
        $successCodes = 0;
        
        for ($i = 0; $i < $requests; $i++) {
            $result = $this->makeRequest($url);
            
            if ($result['error']) {
                $errors++;
            } else {
                $responseTimes[] = $result['response_time'];
                
                if ($this->isSuccessCode($result['http_code'], $url)) {
                    $successCodes++;
                } else {
                    $errors++;
                }
            }
            
            // Petite pause pour éviter de surcharger le serveur
            usleep(50000); // 50ms
        }
        
        $this->analyzeLoadTestResults($testName, $responseTimes, $errors, $requests, $successCodes);
    }

    /**
     * Test de stress avec charge élevée
     */
    private function runStressTest()
    {
        echo "🔍 Test de stress - Charge élevée\n";
        echo "   📊 Nombre de requêtes: 50\n";
        
        $urls = ['/', '/products', '/about', '/contact'];
        $responseTimes = [];
        $errors = 0;
        $successCodes = 0;
        
        for ($i = 0; $i < 50; $i++) {
            $url = $urls[$i % count($urls)];
            $result = $this->makeRequest($url);
            
            if ($result['error']) {
                $errors++;
            } else {
                $responseTimes[] = $result['response_time'];
                
                if ($this->isSuccessCode($result['http_code'], $url)) {
                    $successCodes++;
                } else {
                    $errors++;
                }
            }
            
            // Pas de pause pour le stress test
        }
        
        $this->analyzeLoadTestResults('Test de stress', $responseTimes, $errors, 50, $successCodes);
    }

    /**
     * Analyse les résultats d'un test de charge
     */
    private function analyzeLoadTestResults($testName, $responseTimes, $errors, $totalRequests, $successCodes)
    {
        if (empty($responseTimes)) {
            echo "   ❌ Aucune réponse valide reçue\n\n";
            return;
        }

        $avgResponseTime = array_sum($responseTimes) / count($responseTimes);
        $minResponseTime = min($responseTimes);
        $maxResponseTime = max($responseTimes);
        $successRate = ($successCodes / $totalRequests) * 100;

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
        echo "      • Erreurs: $errors/$totalRequests\n";

        // Évaluation des performances
        $this->evaluatePerformance($testName, $avgResponseTime, $p95ResponseTime, $successRate);

        // Stocker les résultats
        $this->loadTestResults[$testName] = [
            'avg_response_time' => $avgResponseTime,
            'p95_response_time' => $p95ResponseTime,
            'success_rate' => $successRate,
            'errors' => $errors,
            'total_requests' => $totalRequests
        ];

        echo "\n";
    }

    /**
     * Évalue les performances selon des critères prédéfinis
     */
    private function evaluatePerformance($testName, $avgResponseTime, $p95ResponseTime, $successRate)
    {
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
    }

    /**
     * Évalue une réponse HTTP
     */
    private function evaluateHttpResponse($httpCode, $url)
    {
        if ($httpCode >= 200 && $httpCode < 300) {
            return "✅ SUCCÈS";
        } elseif ($httpCode >= 300 && $httpCode < 400) {
            return "🔄 REDIRECTION";
        } elseif ($httpCode === 401 && strpos($url, '/api/') !== false) {
            return "🔒 AUTHENTIFICATION REQUISE";
        } elseif ($httpCode === 404) {
            return "❌ NON TROUVÉ";
        } else {
            return "❌ ERREUR";
        }
    }

    /**
     * Détermine si un code HTTP est considéré comme un succès
     */
    private function isSuccessCode($httpCode, $url)
    {
        if ($httpCode >= 200 && $httpCode < 300) {
            return true;
        }
        
        // Pour l'API, 401 est acceptable (authentification requise)
        if ($httpCode === 401 && strpos($url, '/api/') !== false) {
            return true;
        }
        
        return false;
    }

    /**
     * Génère un rapport final
     */
    public function generateReport()
    {
        echo "\n" . str_repeat("=", 60) . "\n";
        echo "📋 RAPPORT FINAL DES TESTS\n";
        echo str_repeat("=", 60) . "\n\n";

        // Rapport des tests d'acceptation
        echo "🧪 RÉSULTATS DES TESTS D'ACCEPTATION:\n";
        foreach ($this->testResults as $testName => $result) {
            if (isset($result['error'])) {
                echo "   ❌ $testName: ERREUR - " . $result['error'] . "\n";
            } else {
                echo "   " . $result['status'] . " $testName: " . 
                     $result['http_code'] . " (" . round($result['response_time'], 2) . "ms)\n";
            }
        }

        echo "\n⚡ RÉSULTATS DES TESTS DE CHARGE:\n";
        if (!empty($this->loadTestResults)) {
            $overallAvgResponseTime = 0;
            $overallSuccessRate = 0;
            $totalTests = count($this->loadTestResults);

            foreach ($this->loadTestResults as $testName => $results) {
                $overallAvgResponseTime += $results['avg_response_time'];
                $overallSuccessRate += $results['success_rate'];
                
                echo "   📊 $testName: " . round($results['avg_response_time'], 2) . 
                     "ms (succès: " . round($results['success_rate'], 1) . "%)\n";
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
            }
            if ($overallSuccessRate < 98) {
                echo "   • Investiguer les erreurs HTTP\n";
                echo "   • Vérifier la configuration du serveur\n";
            }
            if ($overallAvgResponseTime < 500) {
                echo "   • ✅ Performance excellente!\n";
            }
        }

        echo "\n" . str_repeat("=", 60) . "\n";
    }
}

// Exécution des tests
echo "🚀 DÉMARRAGE DES TESTS POUR BOUTIQUEPROD-SADOK\n";
echo "🌐 URL de base: http://localhost:8000\n";

$tester = new ApplicationTester();

try {
    // Tests d'acceptation
    $tester->runAcceptanceTests();
    
    // Tests de charge
    $tester->runLoadTests();
    
    // Rapport final
    $tester->generateReport();
    
} catch (Exception $e) {
    echo "❌ Erreur lors de l'exécution des tests: " . $e->getMessage() . "\n";
    echo "💡 Assurez-vous que le serveur Symfony est démarré sur http://localhost:8000\n";
}

echo "\n✅ Tests terminés!\n";
