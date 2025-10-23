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

/* product/index.html.twig */
class __TwigTemplate_ce9e58ba4684fefc5cf8107601daa482 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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

        yield "Boutique - La Boutique Française";
        
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
        yield "    <!-- Page Header -->
    <section class=\"py-5 bg-light\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center\">
                    <h1 class=\"display-5 fw-bold\">Notre Boutique</h1>
                    <p class=\"lead text-muted\">
                        ";
        // line 13
        if (array_key_exists("current_category", $context)) {
            // line 14
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_category"]) || array_key_exists("current_category", $context) ? $context["current_category"] : (function () { throw new RuntimeError('Variable "current_category" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
            yield "
                        ";
        } else {
            // line 16
            yield "                            Découvrez notre sélection de sacs et bijoux d'exception
                        ";
        }
        // line 18
        yield "                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters and Search -->
    <section class=\"py-4 section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 sticky-lg\">
                    <!-- Search -->
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <i class=\"fas fa-search me-2\"></i>Rechercher
                            </h5>
                            <form method=\"get\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\">
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Nom du produit...\" value=\"";
        // line 37
        yield (((array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["search"], "html", null, true)) : (""));
        yield "\">
                                    <button class=\"btn btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-search\"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Categories Filter -->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <i class=\"fas fa-tags me-2\"></i>Catégories
                            </h5>
                            <div class=\"list-group list-group-flush\">
                                <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"list-group-item list-group-item-action ";
        if ((($tmp =  !(isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield "\">
                                    <i class=\"fas fa-th-large me-2\"></i>Toutes les catégories
                                </a>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 57
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" 
                                       class=\"list-group-item list-group-item-action ";
            // line 58
            if (((isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 58, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 58))) {
                yield "active";
            }
            yield "\">
                                        <i class=\"fas fa-tag me-2\"></i>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "
                                    </a>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class=\"col-lg-9\">
                    ";
        // line 69
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 69, $this->source); })())) > 0)) {
            // line 70
            yield "                        <div class=\"row\">
                            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 72
                yield "                                <div class=\"col-lg-4 col-md-6 mb-4\">
                                    ";
                // line 73
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73) == "Bijoux")) {
                    // line 74
                    yield "                                        <div class=\"card bijoux-card h-100 hover-lift animate-fadeInUp\">
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 75
$context["product"], "category", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75) == "Sacs")) {
                    // line 76
                    yield "                                        <div class=\"card sacs-card h-100 hover-lift animate-fadeInUp\">
                                    ";
                } else {
                    // line 78
                    yield "                                        <div class=\"card h-100 hover-lift animate-fadeInUp\">
                                    ";
                }
                // line 80
                yield "                                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImage", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImageUrl", [], "any", false, false, false, 81), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81), "html", null, true);
                    yield "\" loading=\"lazy\" width=\"600\" height=\"400\">
                                        ";
                } else {
                    // line 83
                    yield "                                            <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                            </div>
                                        ";
                }
                // line 87
                yield "                                        
                                        ";
                // line 88
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isFeatured", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 89
                    yield "                                            <div class=\"position-absolute top-0 start-0 m-2\">
                                                <span class=\"badge bg-warning\">
                                                    <i class=\"fas fa-star me-1\"></i>Mis en avant
                                                </span>
                                            </div>
                                        ";
                }
                // line 95
                yield "                                        
                                        <div class=\"card-body d-flex flex-column\">
                                            <h5 class=\"card-title\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 97), "html", null, true);
                yield "</h5>
                                            <p class=\"card-text text-muted\">
                                                ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 99), 0, 100), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 99)) > 100)) {
                    yield "...";
                }
                // line 100
                yield "                                            </p>
                                            
                                            <div class=\"mt-auto\">
                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                    <div class=\"price\">
                                                        ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "priceWithTva", [], "any", false, false, false, 105), 2, ",", " "), "html", null, true);
                yield " €
                                                    </div>
                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-box me-1\"></i>";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 108), "html", null, true);
                yield " en stock
                                                    </small>
                                                </div>
                                                
                                                <div class=\"d-flex gap-2\">
                                                    <a href=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary flex-fill\">
                                                        <i class=\"fas fa-eye me-1\"></i>Voir
                                                    </a>
                                                    <form method=\"post\" action=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield "\" class=\"flex-fill\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 117))), "html", null, true);
                yield "\">
                                                        <button type=\"submit\" class=\"btn btn-primary w-100\" ";
                // line 118
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isInStock", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled";
                }
                yield ">
                                                            <i class=\"fas fa-cart-plus me-1\"></i>
                                                            ";
                // line 120
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isInStock", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Ajouter";
                } else {
                    yield "Rupture";
                }
                // line 121
                yield "                                                        </button>
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
            // line 129
            yield "                        </div>
                    ";
        } else {
            // line 131
            yield "                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-search text-muted\" style=\"font-size: 4rem;\"></i>
                            <h3 class=\"mt-3\">Aucun produit trouvé</h3>
                            <p class=\"text-muted\">
                                ";
            // line 135
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 136
                yield "                                    Aucun produit ne correspond à votre recherche \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 136, $this->source); })()), "html", null, true);
                yield "\".
                                ";
            } else {
                // line 138
                yield "                                    Aucun produit disponible dans cette catégorie pour le moment.
                                ";
            }
            // line 140
            yield "                            </p>
                            <a href=\"";
            // line 141
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la boutique
                            </a>
                        </div>
                    ";
        }
        // line 146
        yield "                </div>
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
        return "product/index.html.twig";
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
        return array (  372 => 146,  364 => 141,  361 => 140,  357 => 138,  351 => 136,  349 => 135,  343 => 131,  339 => 129,  326 => 121,  320 => 120,  313 => 118,  309 => 117,  305 => 116,  299 => 113,  291 => 108,  285 => 105,  278 => 100,  273 => 99,  268 => 97,  264 => 95,  256 => 89,  254 => 88,  251 => 87,  245 => 83,  237 => 81,  234 => 80,  230 => 78,  226 => 76,  224 => 75,  221 => 74,  219 => 73,  216 => 72,  212 => 71,  209 => 70,  207 => 69,  198 => 62,  189 => 59,  183 => 58,  178 => 57,  174 => 56,  164 => 53,  145 => 37,  140 => 35,  121 => 18,  117 => 16,  111 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Boutique - La Boutique Française{% endblock %}

{% block body %}
    <!-- Page Header -->
    <section class=\"py-5 bg-light\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 text-center\">
                    <h1 class=\"display-5 fw-bold\">Notre Boutique</h1>
                    <p class=\"lead text-muted\">
                        {% if current_category is defined %}
                            {{ current_category.name }}
                        {% else %}
                            Découvrez notre sélection de sacs et bijoux d'exception
                        {% endif %}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters and Search -->
    <section class=\"py-4 section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 sticky-lg\">
                    <!-- Search -->
                    <div class=\"card mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <i class=\"fas fa-search me-2\"></i>Rechercher
                            </h5>
                            <form method=\"get\" action=\"{{ path('app_products') }}\">
                                <div class=\"input-group\">
                                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Nom du produit...\" value=\"{{ search ?? '' }}\">
                                    <button class=\"btn btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-search\"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Categories Filter -->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">
                                <i class=\"fas fa-tags me-2\"></i>Catégories
                            </h5>
                            <div class=\"list-group list-group-flush\">
                                <a href=\"{{ path('app_products') }}\" class=\"list-group-item list-group-item-action {% if not selected_category %}active{% endif %}\">
                                    <i class=\"fas fa-th-large me-2\"></i>Toutes les catégories
                                </a>
                                {% for category in categories %}
                                    <a href=\"{{ path('app_products_by_category', {'id': category.id}) }}\" 
                                       class=\"list-group-item list-group-item-action {% if selected_category == category.id %}active{% endif %}\">
                                        <i class=\"fas fa-tag me-2\"></i>{{ category.name }}
                                    </a>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class=\"col-lg-9\">
                    {% if products|length > 0 %}
                        <div class=\"row\">
                            {% for product in products %}
                                <div class=\"col-lg-4 col-md-6 mb-4\">
                                    {% if product.category.name == 'Bijoux' %}
                                        <div class=\"card bijoux-card h-100 hover-lift animate-fadeInUp\">
                                    {% elseif product.category.name == 'Sacs' %}
                                        <div class=\"card sacs-card h-100 hover-lift animate-fadeInUp\">
                                    {% else %}
                                        <div class=\"card h-100 hover-lift animate-fadeInUp\">
                                    {% endif %}
                                        {% if product.mainImage %}
                                            <img src=\"{{ product.mainImageUrl }}\" class=\"card-img-top\" alt=\"{{ product.name }}\" loading=\"lazy\" width=\"600\" height=\"400\">
                                        {% else %}
                                            <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                                <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                            </div>
                                        {% endif %}
                                        
                                        {% if product.isFeatured %}
                                            <div class=\"position-absolute top-0 start-0 m-2\">
                                                <span class=\"badge bg-warning\">
                                                    <i class=\"fas fa-star me-1\"></i>Mis en avant
                                                </span>
                                            </div>
                                        {% endif %}
                                        
                                        <div class=\"card-body d-flex flex-column\">
                                            <h5 class=\"card-title\">{{ product.name }}</h5>
                                            <p class=\"card-text text-muted\">
                                                {{ product.description|slice(0, 100) }}{% if product.description|length > 100 %}...{% endif %}
                                            </p>
                                            
                                            <div class=\"mt-auto\">
                                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                                    <div class=\"price\">
                                                        {{ product.priceWithTva|number_format(2, ',', ' ') }} €
                                                    </div>
                                                    <small class=\"text-muted\">
                                                        <i class=\"fas fa-box me-1\"></i>{{ product.stock }} en stock
                                                    </small>
                                                </div>
                                                
                                                <div class=\"d-flex gap-2\">
                                                    <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"btn btn-outline-primary flex-fill\">
                                                        <i class=\"fas fa-eye me-1\"></i>Voir
                                                    </a>
                                                    <form method=\"post\" action=\"{{ path('app_cart_add', {'id': product.id}) }}\" class=\"flex-fill\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ product.id) }}\">
                                                        <button type=\"submit\" class=\"btn btn-primary w-100\" {% if not product.isInStock %}disabled{% endif %}>
                                                            <i class=\"fas fa-cart-plus me-1\"></i>
                                                            {% if product.isInStock %}Ajouter{% else %}Rupture{% endif %}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <div class=\"text-center py-5\">
                            <i class=\"fas fa-search text-muted\" style=\"font-size: 4rem;\"></i>
                            <h3 class=\"mt-3\">Aucun produit trouvé</h3>
                            <p class=\"text-muted\">
                                {% if search %}
                                    Aucun produit ne correspond à votre recherche \"{{ search }}\".
                                {% else %}
                                    Aucun produit disponible dans cette catégorie pour le moment.
                                {% endif %}
                            </p>
                            <a href=\"{{ path('app_products') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la boutique
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </section>
{% endblock %} ", "product/index.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\product\\index.html.twig");
    }
}
