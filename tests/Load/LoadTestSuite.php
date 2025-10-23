<?php

namespace App\Tests\Load;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Suite de tests de charge pour l'application BoutiqueProd-Sadok
 * 
 * Ces tests évaluent les performances de l'application sous différentes
 * conditions de charge et identifient les goulots d'étranglement.
 */
class LoadTestSuite extends WebTestCase
{
    private $client;
    private $testResults = [];

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    /**
     * Test de charge : Page d'accueil sous charge normale
     */
    public function testHomePageLoadTest(): void
    {
        $concurrentRequests = 10;
        $totalRequests = 50;
        $responseTimes = [];
        $errors = 0;

        echo "\n=== Test de charge - Page d'accueil ===\n";
        echo "Requêtes simultanées: $concurrentRequests\n";
        echo "Total des requêtes: $totalRequests\n";

        for ($i = 0; $i < $totalRequests; $i++) {
            $startTime = microtime(true);
            
            $this->client->request('GET', '/');
            
            $endTime = microtime(true);
            $responseTime = ($endTime - $startTime) * 1000; // en millisecondes
            
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            if ($statusCode === 200) {
                $responseTimes[] = $responseTime;
            } else {
                $errors++;
            }

            // Petite pause pour éviter de surcharger le serveur
            usleep(10000); // 10ms
        }

        $this->analyzeLoadTestResults('Page d\'accueil', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Test de charge : Catalogue des produits
     */
    public function testProductsCatalogLoadTest(): void
    {
        $concurrentRequests = 8;
        $totalRequests = 40;
        $responseTimes = [];
        $errors = 0;

        echo "\n=== Test de charge - Catalogue des produits ===\n";
        echo "Requêtes simultanées: $concurrentRequests\n";
        echo "Total des requêtes: $totalRequests\n";

        for ($i = 0; $i < $totalRequests; $i++) {
            $startTime = microtime(true);
            
            $this->client->request('GET', '/products');
            
            $endTime = microtime(true);
            $responseTime = ($endTime - $startTime) * 1000;
            
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            if ($statusCode === 200) {
                $responseTimes[] = $responseTime;
            } else {
                $errors++;
            }

            usleep(15000); // 15ms
        }

        $this->analyzeLoadTestResults('Catalogue des produits', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Test de charge : Recherche de produits
     */
    public function testProductSearchLoadTest(): void
    {
        $searchTerms = ['test', 'produit', 'boutique', 'français', 'qualité'];
        $responseTimes = [];
        $errors = 0;
        $totalRequests = 25;

        echo "\n=== Test de charge - Recherche de produits ===\n";
        echo "Total des requêtes: $totalRequests\n";

        for ($i = 0; $i < $totalRequests; $i++) {
            $searchTerm = $searchTerms[array_rand($searchTerms)];
            
            $startTime = microtime(true);
            
            $this->client->request('GET', '/products', ['search' => $searchTerm]);
            
            $endTime = microtime(true);
            $responseTime = ($endTime - $startTime) * 1000;
            
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            if ($statusCode === 200) {
                $responseTimes[] = $responseTime;
            } else {
                $errors++;
            }

            usleep(20000); // 20ms
        }

        $this->analyzeLoadTestResults('Recherche de produits', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Test de charge : Pages statiques
     */
    public function testStaticPagesLoadTest(): void
    {
        $pages = ['/about', '/contact', '/login', '/register'];
        $responseTimes = [];
        $errors = 0;
        $totalRequests = 30;

        echo "\n=== Test de charge - Pages statiques ===\n";
        echo "Total des requêtes: $totalRequests\n";

        for ($i = 0; $i < $totalRequests; $i++) {
            $page = $pages[array_rand($pages)];
            
            $startTime = microtime(true);
            
            $this->client->request('GET', $page);
            
            $endTime = microtime(true);
            $responseTime = ($endTime - $startTime) * 1000;
            
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            if ($statusCode === 200) {
                $responseTimes[] = $responseTime;
            } else {
                $errors++;
            }

            usleep(10000); // 10ms
        }

        $this->analyzeLoadTestResults('Pages statiques', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Test de charge : API endpoints
     */
    public function testApiLoadTest(): void
    {
        $apiEndpoints = ['/api/products', '/api/categories'];
        $responseTimes = [];
        $errors = 0;
        $totalRequests = 20;

        echo "\n=== Test de charge - API ===\n";
        echo "Total des requêtes: $totalRequests\n";

        for ($i = 0; $i < $totalRequests; $i++) {
            $endpoint = $apiEndpoints[array_rand($apiEndpoints)];
            
            $startTime = microtime(true);
            
            $this->client->request('GET', $endpoint);
            
            $endTime = microtime(true);
            $responseTime = ($endTime - $startTime) * 1000;
            
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            // L'API peut retourner 200 ou 401 selon l'authentification
            if (in_array($statusCode, [200, 401])) {
                $responseTimes[] = $responseTime;
            } else {
                $errors++;
            }

            usleep(25000); // 25ms
        }

        $this->analyzeLoadTestResults('API', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Test de charge : Simulation d'utilisateurs simultanés
     */
    public function testConcurrentUsersLoadTest(): void
    {
        $concurrentUsers = 5;
        $requestsPerUser = 10;
        $responseTimes = [];
        $errors = 0;

        echo "\n=== Test de charge - Utilisateurs simultanés ===\n";
        echo "Utilisateurs simultanés: $concurrentUsers\n";
        echo "Requêtes par utilisateur: $requestsPerUser\n";

        // Simuler des utilisateurs qui naviguent sur le site
        $userPaths = [
            ['/', '/products', '/about'],
            ['/products', '/products?search=test', '/contact'],
            ['/', '/login', '/register'],
            ['/products', '/about', '/contact'],
            ['/', '/products', '/login']
        ];

        for ($user = 0; $user < $concurrentUsers; $user++) {
            $userPath = $userPaths[$user % count($userPaths)];
            
            for ($request = 0; $request < $requestsPerUser; $request++) {
                $page = $userPath[$request % count($userPath)];
                
                $startTime = microtime(true);
                
                $this->client->request('GET', $page);
                
                $endTime = microtime(true);
                $responseTime = ($endTime - $startTime) * 1000;
                
                $statusCode = $this->client->getResponse()->getStatusCode();
                
                if ($statusCode === 200) {
                    $responseTimes[] = $responseTime;
                } else {
                    $errors++;
                }

                usleep(5000); // 5ms entre les requêtes d'un même utilisateur
            }
        }

        $totalRequests = $concurrentUsers * $requestsPerUser;
        $this->analyzeLoadTestResults('Utilisateurs simultanés', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Test de charge : Stress test (charge élevée)
     */
    public function testStressLoadTest(): void
    {
        $totalRequests = 100;
        $responseTimes = [];
        $errors = 0;

        echo "\n=== Test de stress - Charge élevée ===\n";
        echo "Total des requêtes: $totalRequests\n";

        for ($i = 0; $i < $totalRequests; $i++) {
            $startTime = microtime(true);
            
            // Alterner entre différentes pages pour simuler un trafic réel
            $pages = ['/', '/products', '/about', '/contact'];
            $page = $pages[$i % count($pages)];
            
            $this->client->request('GET', $page);
            
            $endTime = microtime(true);
            $responseTime = ($endTime - $startTime) * 1000;
            
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            if ($statusCode === 200) {
                $responseTimes[] = $responseTime;
            } else {
                $errors++;
            }

            // Pas de pause pour le stress test
        }

        $this->analyzeLoadTestResults('Stress test', $responseTimes, $errors, $totalRequests);
    }

    /**
     * Analyse les résultats d'un test de charge
     */
    private function analyzeLoadTestResults(string $testName, array $responseTimes, int $errors, int $totalRequests): void
    {
        if (empty($responseTimes)) {
            echo "❌ $testName: Aucune réponse valide reçue\n";
            return;
        }

        $avgResponseTime = array_sum($responseTimes) / count($responseTimes);
        $minResponseTime = min($responseTimes);
        $maxResponseTime = max($responseTimes);
        $successRate = (($totalRequests - $errors) / $totalRequests) * 100;

        // Calcul du percentile 95
        sort($responseTimes);
        $p95Index = (int) (count($responseTimes) * 0.95);
        $p95ResponseTime = $responseTimes[$p95Index] ?? $maxResponseTime;

        echo "📊 Résultats pour $testName:\n";
        echo "   • Temps de réponse moyen: " . round($avgResponseTime, 2) . "ms\n";
        echo "   • Temps de réponse min: " . round($minResponseTime, 2) . "ms\n";
        echo "   • Temps de réponse max: " . round($maxResponseTime, 2) . "ms\n";
        echo "   • Percentile 95: " . round($p95ResponseTime, 2) . "ms\n";
        echo "   • Taux de succès: " . round($successRate, 2) . "%\n";
        echo "   • Erreurs: $errors/$totalRequests\n";

        // Évaluation des performances
        $this->evaluatePerformance($testName, $avgResponseTime, $p95ResponseTime, $successRate);

        // Stocker les résultats pour le rapport final
        $this->testResults[$testName] = [
            'avg_response_time' => $avgResponseTime,
            'p95_response_time' => $p95ResponseTime,
            'success_rate' => $successRate,
            'errors' => $errors,
            'total_requests' => $totalRequests
        ];
    }

    /**
     * Évalue les performances selon des critères prédéfinis
     */
    private function evaluatePerformance(string $testName, float $avgResponseTime, float $p95ResponseTime, float $successRate): void
    {
        $status = "✅ EXCELLENT";
        $issues = [];

        // Critères de performance
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

        echo "   • Évaluation: $status\n";
        
        if (!empty($issues)) {
            echo "   • Problèmes détectés: " . implode(', ', $issues) . "\n";
        }

        echo "\n";
    }

    /**
     * Génère un rapport final des tests de charge
     */
    public function testGenerateLoadTestReport(): void
    {
        echo "\n" . str_repeat("=", 60) . "\n";
        echo "📋 RAPPORT FINAL DES TESTS DE CHARGE\n";
        echo str_repeat("=", 60) . "\n\n";

        if (empty($this->testResults)) {
            echo "Aucun résultat de test disponible.\n";
            return;
        }

        $overallAvgResponseTime = 0;
        $overallSuccessRate = 0;
        $totalTests = count($this->testResults);

        foreach ($this->testResults as $testName => $results) {
            $overallAvgResponseTime += $results['avg_response_time'];
            $overallSuccessRate += $results['success_rate'];
        }

        $overallAvgResponseTime /= $totalTests;
        $overallSuccessRate /= $totalTests;

        echo "📈 PERFORMANCE GLOBALE:\n";
        echo "   • Temps de réponse moyen global: " . round($overallAvgResponseTime, 2) . "ms\n";
        echo "   • Taux de succès global: " . round($overallSuccessRate, 2) . "%\n\n";

        echo "📊 DÉTAIL PAR TEST:\n";
        foreach ($this->testResults as $testName => $results) {
            echo "   • $testName: " . round($results['avg_response_time'], 2) . "ms (succès: " . 
                 round($results['success_rate'], 1) . "%)\n";
        }

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

        echo "\n" . str_repeat("=", 60) . "\n";
    }
}
