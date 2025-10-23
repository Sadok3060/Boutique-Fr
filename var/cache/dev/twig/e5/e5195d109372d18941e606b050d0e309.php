<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_3e1650e1e77d188ed7299d7a71f76152 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "La Boutique Française - Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Hero Section -->
    <section class=\"hero-section section\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <h1 class=\"display-4 fw-bold mb-4\">
                        Découvrez l'Excellence Française
                    </h1>
                    <p class=\"lead mb-4\">
                        Des sacs et bijoux d'exception, fabriqués en France avec passion et savoir-faire. 
                        Chaque pièce raconte une histoire, celle de nos artisans talentueux.
                    </p>
                    <div class=\"d-flex gap-3\">
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-light btn-lg\" aria-label=\"Découvrir la boutique\">
                            <i class=\"fas fa-shopping-bag me-2\"></i>Découvrir
                        </a>
                        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"btn btn-outline-light btn-lg\" aria-label=\"En savoir plus sur la boutique\">
                            <i class=\"fas fa-info-circle me-2\"></i>En savoir plus
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6 text-center\">
                    <i class=\"fas fa-gem\" style=\"font-size: 8rem; opacity: 0.3;\"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    ";
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["featured_products"]) || array_key_exists("featured_products", $context) ? $context["featured_products"] : (function () { throw new RuntimeError('Variable "featured_products" does not exist.', 35, $this->source); })())) > 0)) {
            // line 36
            yield "        <section class=\"py-5 section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 text-center mb-5\">
                        <h2 class=\"display-6 fw-bold\">Produits Mis en Avant</h2>
                        <p class=\"lead text-muted\">Nos coups de cœur, sélectionnés avec soin</p>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featured_products"]) || array_key_exists("featured_products", $context) ? $context["featured_products"] : (function () { throw new RuntimeError('Variable "featured_products" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                yield "                        <div class=\"col-lg-3 col-md-6 mb-4\">
                            <div class=\"card h-100\">
                                ";
                // line 48
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImageUrl", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImageUrl", [], "any", false, false, false, 49), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 51
                    yield "                                    <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                        <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                    </div>
                                ";
                }
                // line 55
                yield "                                <div class=\"card-body d-flex flex-column\">
                                    <h5 class=\"card-title\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text text-muted\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 57), 0, 100), "html", null, true);
                yield "...</p>
                                    <div class=\"mt-auto\">
                                        <div class=\"price mb-3\">
                                            ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "priceWithTva", [], "any", false, false, false, 60), 2, ",", " "), "html", null, true);
                yield " €
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary flex-fill\" aria-label=\"Voir le produit ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-eye me-1\"></i>Voir
                                            </a>
                                            <form method=\"post\" action=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"flex-fill\">
                                                <button type=\"submit\" class=\"btn btn-primary w-100\" aria-label=\"Ajouter ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67), "html", null, true);
                yield " au panier\">
                                                    <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                </div>
            </div>
        </section>
    ";
        }
        // line 81
        yield "
    <!-- Categories -->
    ";
        // line 83
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 83, $this->source); })())) > 0)) {
            // line 84
            yield "        <section class=\"py-5 section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 text-center mb-5\">
                        <h2 class=\"display-6 fw-bold\">Nos Catégories</h2>
                        <p class=\"lead text-muted\">Explorez notre gamme complète</p>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 94
                yield "                        <div class=\"col-lg-4 col-md-6 mb-4\">
                            ";
                // line 95
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 95) == "Bijoux")) {
                    // line 96
                    yield "                                <div class=\"card bijoux-card text-center h-100 animate-slideInLeft\">
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 97
$context["category"], "name", [], "any", false, false, false, 97) == "Sacs")) {
                    // line 98
                    yield "                                <div class=\"card sacs-card text-center h-100 animate-slideInLeft\">
                            ";
                } else {
                    // line 100
                    yield "                                <div class=\"card text-center h-100 animate-slideInLeft\">
                            ";
                }
                // line 102
                yield "                                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageUrl", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 103
                    yield "                                    <div class=\"card-img-top\" style=\"height: 250px; overflow: hidden; display: flex; align-items: center; justify-content: center;\">
                                        <img src=\"";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "imageUrl", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" style=\"width: 100%; height: 100%; object-fit: cover;\">
                                    </div>
                                ";
                } else {
                    // line 107
                    yield "                                    <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 250px;\">
                                        <i class=\"fas fa-tags text-muted\" style=\"font-size: 3rem;\"></i>
                                    </div>
                                ";
                }
                // line 111
                yield "                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 112), "html", null, true);
                yield "</h5>
                                    ";
                // line 113
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "                                        <p class=\"card-text text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 114), "html", null, true);
                    yield "</p>
                                    ";
                }
                // line 116
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield "\" class=\"btn btn-primary\" aria-label=\"Découvrir la catégorie ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 116), "html", null, true);
                yield "\">
                                        <i class=\"fas fa-arrow-right me-1\"></i>Découvrir
                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                </div>
            </div>
        </section>
    ";
        }
        // line 127
        yield "
    <!-- Latest Products -->
    ";
        // line 129
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["latest_products"]) || array_key_exists("latest_products", $context) ? $context["latest_products"] : (function () { throw new RuntimeError('Variable "latest_products" does not exist.', 129, $this->source); })())) > 0)) {
            // line 130
            yield "        <section class=\"py-5 section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 text-center mb-5\">
                        <h2 class=\"display-6 fw-bold\">Nouveautés</h2>
                        <p class=\"lead text-muted\">Nos dernières créations</p>
                    </div>
                </div>
                <div class=\"row\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["latest_products"]) || array_key_exists("latest_products", $context) ? $context["latest_products"] : (function () { throw new RuntimeError('Variable "latest_products" does not exist.', 139, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 140
                yield "                        <div class=\"col-lg-3 col-md-6 mb-4\">
                            <div class=\"card h-100\">
                                ";
                // line 142
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImageUrl", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 143
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImageUrl", [], "any", false, false, false, 143), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 145
                    yield "                                    <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                        <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                    </div>
                                ";
                }
                // line 149
                yield "                                <div class=\"card-body d-flex flex-column\">
                                    <h5 class=\"card-title\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 150), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text text-muted\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 151), 0, 100), "html", null, true);
                yield "...</p>
                                    <div class=\"mt-auto\">
                                        <div class=\"price mb-3\">
                                            ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "priceWithTva", [], "any", false, false, false, 154), 2, ",", " "), "html", null, true);
                yield " €
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <a href=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary flex-fill\" aria-label=\"Voir le produit ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 157), "html", null, true);
                yield "\">
                                                <i class=\"fas fa-eye me-1\"></i>Voir
                                            </a>
                                            <form method=\"post\" action=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 160)]), "html", null, true);
                yield "\" class=\"flex-fill\">
                                                <button type=\"submit\" class=\"btn btn-primary w-100\" aria-label=\"Ajouter ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 161), "html", null, true);
                yield " au panier\">
                                                    <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "                </div>
                <div class=\"row\">
                    <div class=\"col-12 text-center\">
                        <a href=\"";
            // line 174
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            yield "\" class=\"btn btn-outline-primary btn-lg\" aria-label=\"Voir tous les produits\">
                            <i class=\"fas fa-store me-2\"></i>Voir tous nos produits
                        </a>
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 182
        yield "
    <!-- Why Choose Us -->
    <section class=\"py-5 bg-light section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center mb-5\">
                    <h2 class=\"display-6 fw-bold\">Pourquoi Nous Choisir ?</h2>
                    <p class=\"lead text-muted\">L'excellence française à votre service</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-flag text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Made in France</h5>
                    <p class=\"text-muted\">Tous nos produits sont fabriqués en France avec des matériaux de qualité.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-hands text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Artisanat</h5>
                    <p class=\"text-muted\">Un savoir-faire traditionnel transmis de génération en génération.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-shipping-fast text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Livraison Rapide</h5>
                    <p class=\"text-muted\">Livraison gratuite en France métropolitaine dès 50€ d'achat.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-heart text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Service Client</h5>
                    <p class=\"text-muted\">Une équipe dédiée pour vous accompagner dans vos choix.</p>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  427 => 182,  416 => 174,  411 => 171,  395 => 161,  391 => 160,  383 => 157,  377 => 154,  371 => 151,  367 => 150,  364 => 149,  358 => 145,  350 => 143,  348 => 142,  344 => 140,  340 => 139,  329 => 130,  327 => 129,  323 => 127,  317 => 123,  301 => 116,  295 => 114,  293 => 113,  289 => 112,  286 => 111,  280 => 107,  272 => 104,  269 => 103,  266 => 102,  262 => 100,  258 => 98,  256 => 97,  253 => 96,  251 => 95,  248 => 94,  244 => 93,  233 => 84,  231 => 83,  227 => 81,  221 => 77,  205 => 67,  201 => 66,  193 => 63,  187 => 60,  181 => 57,  177 => 56,  174 => 55,  168 => 51,  160 => 49,  158 => 48,  154 => 46,  150 => 45,  139 => 36,  137 => 35,  121 => 22,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La Boutique Française - Accueil{% endblock %}

{% block body %}
    <!-- Hero Section -->
    <section class=\"hero-section section\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <h1 class=\"display-4 fw-bold mb-4\">
                        Découvrez l'Excellence Française
                    </h1>
                    <p class=\"lead mb-4\">
                        Des sacs et bijoux d'exception, fabriqués en France avec passion et savoir-faire. 
                        Chaque pièce raconte une histoire, celle de nos artisans talentueux.
                    </p>
                    <div class=\"d-flex gap-3\">
                        <a href=\"{{ path('app_products') }}\" class=\"btn btn-light btn-lg\" aria-label=\"Découvrir la boutique\">
                            <i class=\"fas fa-shopping-bag me-2\"></i>Découvrir
                        </a>
                        <a href=\"{{ path('app_about') }}\" class=\"btn btn-outline-light btn-lg\" aria-label=\"En savoir plus sur la boutique\">
                            <i class=\"fas fa-info-circle me-2\"></i>En savoir plus
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-6 text-center\">
                    <i class=\"fas fa-gem\" style=\"font-size: 8rem; opacity: 0.3;\"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    {% if featured_products|length > 0 %}
        <section class=\"py-5 section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 text-center mb-5\">
                        <h2 class=\"display-6 fw-bold\">Produits Mis en Avant</h2>
                        <p class=\"lead text-muted\">Nos coups de cœur, sélectionnés avec soin</p>
                    </div>
                </div>
                <div class=\"row\">
                    {% for product in featured_products %}
                        <div class=\"col-lg-3 col-md-6 mb-4\">
                            <div class=\"card h-100\">
                                {% if product.mainImageUrl %}
                                    <img src=\"{{ product.mainImageUrl }}\" class=\"card-img-top\" alt=\"{{ product.name }}\">
                                {% else %}
                                    <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                        <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                    </div>
                                {% endif %}
                                <div class=\"card-body d-flex flex-column\">
                                    <h5 class=\"card-title\">{{ product.name }}</h5>
                                    <p class=\"card-text text-muted\">{{ product.description|slice(0, 100) }}...</p>
                                    <div class=\"mt-auto\">
                                        <div class=\"price mb-3\">
                                            {{ product.priceWithTva|number_format(2, ',', ' ') }} €
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-primary flex-fill\" aria-label=\"Voir le produit {{ product.name }}\">
                                                <i class=\"fas fa-eye me-1\"></i>Voir
                                            </a>
                                            <form method=\"post\" action=\"{{ path('app_cart_add', {'id': product.id}) }}\" class=\"flex-fill\">
                                                <button type=\"submit\" class=\"btn btn-primary w-100\" aria-label=\"Ajouter {{ product.name }} au panier\">
                                                    <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>
    {% endif %}

    <!-- Categories -->
    {% if categories|length > 0 %}
        <section class=\"py-5 section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 text-center mb-5\">
                        <h2 class=\"display-6 fw-bold\">Nos Catégories</h2>
                        <p class=\"lead text-muted\">Explorez notre gamme complète</p>
                    </div>
                </div>
                <div class=\"row\">
                    {% for category in categories %}
                        <div class=\"col-lg-4 col-md-6 mb-4\">
                            {% if category.name == 'Bijoux' %}
                                <div class=\"card bijoux-card text-center h-100 animate-slideInLeft\">
                            {% elseif category.name == 'Sacs' %}
                                <div class=\"card sacs-card text-center h-100 animate-slideInLeft\">
                            {% else %}
                                <div class=\"card text-center h-100 animate-slideInLeft\">
                            {% endif %}
                                {% if category.imageUrl %}
                                    <div class=\"card-img-top\" style=\"height: 250px; overflow: hidden; display: flex; align-items: center; justify-content: center;\">
                                        <img src=\"{{ category.imageUrl }}\" alt=\"{{ category.name }}\" style=\"width: 100%; height: 100%; object-fit: cover;\">
                                    </div>
                                {% else %}
                                    <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\" style=\"height: 250px;\">
                                        <i class=\"fas fa-tags text-muted\" style=\"font-size: 3rem;\"></i>
                                    </div>
                                {% endif %}
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ category.name }}</h5>
                                    {% if category.description %}
                                        <p class=\"card-text text-muted\">{{ category.description }}</p>
                                    {% endif %}
                                    <a href=\"{{ path('app_products_by_category', {'id': category.id}) }}\" class=\"btn btn-primary\" aria-label=\"Découvrir la catégorie {{ category.name }}\">
                                        <i class=\"fas fa-arrow-right me-1\"></i>Découvrir
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>
    {% endif %}

    <!-- Latest Products -->
    {% if latest_products|length > 0 %}
        <section class=\"py-5 section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-12 text-center mb-5\">
                        <h2 class=\"display-6 fw-bold\">Nouveautés</h2>
                        <p class=\"lead text-muted\">Nos dernières créations</p>
                    </div>
                </div>
                <div class=\"row\">
                    {% for product in latest_products %}
                        <div class=\"col-lg-3 col-md-6 mb-4\">
                            <div class=\"card h-100\">
                                {% if product.mainImageUrl %}
                                    <img src=\"{{ product.mainImageUrl }}\" class=\"card-img-top\" alt=\"{{ product.name }}\">
                                {% else %}
                                    <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                        <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                    </div>
                                {% endif %}
                                <div class=\"card-body d-flex flex-column\">
                                    <h5 class=\"card-title\">{{ product.name }}</h5>
                                    <p class=\"card-text text-muted\">{{ product.description|slice(0, 100) }}...</p>
                                    <div class=\"mt-auto\">
                                        <div class=\"price mb-3\">
                                            {{ product.priceWithTva|number_format(2, ',', ' ') }} €
                                        </div>
                                        <div class=\"d-flex gap-2\">
                                            <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-primary flex-fill\" aria-label=\"Voir le produit {{ product.name }}\">
                                                <i class=\"fas fa-eye me-1\"></i>Voir
                                            </a>
                                            <form method=\"post\" action=\"{{ path('app_cart_add', {'id': product.id}) }}\" class=\"flex-fill\">
                                                <button type=\"submit\" class=\"btn btn-primary w-100\" aria-label=\"Ajouter {{ product.name }} au panier\">
                                                    <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"row\">
                    <div class=\"col-12 text-center\">
                        <a href=\"{{ path('app_products') }}\" class=\"btn btn-outline-primary btn-lg\" aria-label=\"Voir tous les produits\">
                            <i class=\"fas fa-store me-2\"></i>Voir tous nos produits
                        </a>
                    </div>
                </div>
            </div>
        </section>
    {% endif %}

    <!-- Why Choose Us -->
    <section class=\"py-5 bg-light section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center mb-5\">
                    <h2 class=\"display-6 fw-bold\">Pourquoi Nous Choisir ?</h2>
                    <p class=\"lead text-muted\">L'excellence française à votre service</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-flag text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Made in France</h5>
                    <p class=\"text-muted\">Tous nos produits sont fabriqués en France avec des matériaux de qualité.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-hands text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Artisanat</h5>
                    <p class=\"text-muted\">Un savoir-faire traditionnel transmis de génération en génération.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-shipping-fast text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Livraison Rapide</h5>
                    <p class=\"text-muted\">Livraison gratuite en France métropolitaine dès 50€ d'achat.</p>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fas fa-heart text-primary\" style=\"font-size: 3rem;\"></i>
                    </div>
                    <h5>Service Client</h5>
                    <p class=\"text-muted\">Une équipe dédiée pour vous accompagner dans vos choix.</p>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "home/index.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\home\\index.html.twig");
    }
}
