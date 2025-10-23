<?php

namespace App\Tests\Acceptance;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Suite de tests d'acceptation pour l'application BoutiqueProd-Sadok
 * 
 * Ces tests vérifient que les fonctionnalités principales de l'application
 * fonctionnent correctement du point de vue de l'utilisateur final.
 */
class AcceptanceTestSuite extends WebTestCase
{
    private $client;
    private $crawler;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    /**
     * Test d'acceptation : Page d'accueil accessible et fonctionnelle
     */
    public function testHomePageAcceptance(): void
    {
        $this->client->request('GET', '/');
        
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Vérifier que la page contient les éléments essentiels
        $this->assertSelectorExists('h1', 'La page d\'accueil doit avoir un titre principal');
        $this->assertSelectorExists('nav', 'La page doit avoir une navigation');
        
        // Vérifier la présence de produits en vedette
        $this->assertSelectorExists('.featured-products, .product-card, .product-item', 
            'La page doit afficher des produits');
        
        // Vérifier les liens de navigation
        $this->assertSelectorExists('a[href="/products"]', 'Lien vers le catalogue des produits');
        $this->assertSelectorExists('a[href="/login"]', 'Lien vers la connexion');
    }

    /**
     * Test d'acceptation : Catalogue des produits accessible
     */
    public function testProductsCatalogAcceptance(): void
    {
        $this->client->request('GET', '/products');
        
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Vérifier la structure de la page
        $this->assertSelectorExists('h1, h2', 'La page doit avoir des titres');
        
        // Vérifier la présence d'un formulaire de recherche
        $this->assertSelectorExists('form input[name="search"], input[type="search"]', 
            'La page doit avoir un champ de recherche');
        
        // Vérifier la présence de filtres par catégorie
        $this->assertSelectorExists('select[name="category"], input[name="category"]', 
            'La page doit avoir des filtres par catégorie');
    }

    /**
     * Test d'acceptation : Affichage d'un produit individuel
     */
    public function testProductDetailAcceptance(): void
    {
        // D'abord, récupérer la liste des produits pour obtenir un ID valide
        $this->client->request('GET', '/products');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Chercher un lien vers un produit
        $productLink = $this->crawler->filter('a[href*="/products/"]')->first();
        
        if ($productLink->count() > 0) {
            $productUrl = $productLink->attr('href');
            $this->client->request('GET', $productUrl);
            
            $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
            
            $this->crawler = $this->client->getCrawler();
            
            // Vérifier les éléments essentiels d'une page produit
            $this->assertSelectorExists('h1, h2', 'La page produit doit avoir un titre');
            $this->assertSelectorExists('form', 'La page doit avoir un formulaire d\'ajout au panier');
            $this->assertSelectorExists('input[name="quantity"]', 'Champ quantité requis');
        }
    }

    /**
     * Test d'acceptation : Fonctionnalité de recherche
     */
    public function testSearchFunctionalityAcceptance(): void
    {
        $this->client->request('GET', '/products');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Chercher un formulaire de recherche
        $searchForm = $this->crawler->filter('form')->first();
        
        if ($searchForm->count() > 0) {
            // Tester une recherche avec un terme générique
            $form = $searchForm->form();
            $form['search'] = 'test';
            
            $this->client->submit($form);
            $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        }
    }

    /**
     * Test d'acceptation : Page de connexion accessible
     */
    public function testLoginPageAcceptance(): void
    {
        $this->client->request('GET', '/login');
        
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Vérifier la présence du formulaire de connexion
        $this->assertSelectorExists('form', 'La page doit avoir un formulaire de connexion');
        $this->assertSelectorExists('input[name="_username"]', 'Champ nom d\'utilisateur requis');
        $this->assertSelectorExists('input[name="_password"]', 'Champ mot de passe requis');
        $this->assertSelectorExists('button[type="submit"]', 'Bouton de soumission requis');
    }

    /**
     * Test d'acceptation : Page d'inscription accessible
     */
    public function testRegistrationPageAcceptance(): void
    {
        $this->client->request('GET', '/register');
        
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Vérifier la présence du formulaire d'inscription
        $this->assertSelectorExists('form', 'La page doit avoir un formulaire d\'inscription');
        $this->assertSelectorExists('input[name="registration_form[email]"]', 'Champ email requis');
        $this->assertSelectorExists('input[name="registration_form[plainPassword]"]', 'Champ mot de passe requis');
    }

    /**
     * Test d'acceptation : Panier accessible (même vide)
     */
    public function testCartPageAcceptance(): void
    {
        $this->client->request('GET', '/cart');
        
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Vérifier que la page du panier s'affiche correctement
        $this->assertSelectorExists('h1, h2', 'La page panier doit avoir un titre');
    }

    /**
     * Test d'acceptation : Pages statiques (About, Contact)
     */
    public function testStaticPagesAcceptance(): void
    {
        // Test page About
        $this->client->request('GET', '/about');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        // Test page Contact
        $this->client->request('GET', '/contact');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test d'acceptation : API accessible
     */
    public function testApiAccessibilityAcceptance(): void
    {
        // Test de l'endpoint API principal
        $this->client->request('GET', '/api/products');
        
        // L'API peut retourner 200 ou 401 selon la configuration
        $statusCode = $this->client->getResponse()->getStatusCode();
        $this->assertContains($statusCode, [200, 401], 
            'L\'API doit être accessible (200) ou nécessiter une authentification (401)');
    }

    /**
     * Test d'acceptation : Gestion des erreurs 404
     */
    public function test404ErrorHandlingAcceptance(): void
    {
        $this->client->request('GET', '/page-inexistante');
        
        $this->assertEquals(404, $this->client->getResponse()->getStatusCode());
    }

    /**
     * Test d'acceptation : Responsive design (vérification basique)
     */
    public function testResponsiveDesignAcceptance(): void
    {
        $this->client->request('GET', '/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        // Vérifier la présence de meta viewport (indicateur de responsive design)
        $viewportMeta = $this->crawler->filter('meta[name="viewport"]');
        if ($viewportMeta->count() > 0) {
            $this->assertStringContainsString('width=device-width', 
                $viewportMeta->attr('content'), 
                'Meta viewport doit être présent pour le responsive design');
        }
    }

    /**
     * Test d'acceptation : Sécurité CSRF
     */
    public function testCsrfProtectionAcceptance(): void
    {
        // Tester que les formulaires contiennent des tokens CSRF
        $this->client->request('GET', '/login');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        $this->crawler = $this->client->getCrawler();
        
        $csrfToken = $this->crawler->filter('input[name="_token"]');
        if ($csrfToken->count() > 0) {
            $this->assertNotEmpty($csrfToken->attr('value'), 
                'Le token CSRF doit être présent et non vide');
        }
    }

    /**
     * Test d'acceptation : Performance basique
     */
    public function testBasicPerformanceAcceptance(): void
    {
        $startTime = microtime(true);
        
        $this->client->request('GET', '/');
        
        $endTime = microtime(true);
        $responseTime = ($endTime - $startTime) * 1000; // en millisecondes
        
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        
        // La page doit se charger en moins de 2 secondes
        $this->assertLessThan(2000, $responseTime, 
            'La page d\'accueil doit se charger en moins de 2 secondes');
    }
}
