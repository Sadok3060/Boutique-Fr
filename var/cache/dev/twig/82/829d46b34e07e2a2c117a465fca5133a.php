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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_e8f000ad4fa8fb6a9cc2c0b146a5a59a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

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

        yield "Admin Dashboard - La Boutique Française";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <h1 class=\"h2 mb-3\">
                <i class=\"fas fa-tachometer-alt me-2\"></i>Tableau de bord administrateur
            </h1>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"card bg-primary text-white\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <h5 class=\"card-title\">Produits</h5>
                            <h2 class=\"mb-0\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "total_products", [], "any", false, false, false, 23), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"align-self-center\">
                            <i class=\"fas fa-box fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"card bg-success text-white\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <h5 class=\"card-title\">Utilisateurs</h5>
                            <h2 class=\"mb-0\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 38, $this->source); })()), "total_users", [], "any", false, false, false, 38), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"align-self-center\">
                            <i class=\"fas fa-users fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"card bg-info text-white\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <h5 class=\"card-title\">Commandes</h5>
                            <h2 class=\"mb-0\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 53, $this->source); })()), "total_orders", [], "any", false, false, false, 53), "html", null, true);
        yield "</h2>
                        </div>
                        <div class=\"align-self-center\">
                            <i class=\"fas fa-shopping-cart fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i>Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        yield "\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-plus me-2\"></i>Nouveau produit
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_new");
        yield "\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-tag me-2\"></i>Nouvelle catégorie
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_index");
        yield "\" class=\"btn btn-info w-100\">
                                <i class=\"fas fa-list me-2\"></i>Gérer les produits
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        yield "\" class=\"btn btn-warning w-100\">
                                <i class=\"fas fa-tags me-2\"></i>Gérer les catégories
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        yield "\" class=\"btn btn-dark w-100\">
                                <i class=\"fas fa-user-shield me-2\"></i>Nouvel administrateur
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class=\"row\">
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-clock me-2\"></i>Produits récents
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 116
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 116, $this->source); })()), "recent_products", [], "any", false, false, false, 116)) > 0)) {
            // line 117
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "recent_products", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 119
                yield "                                <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"mb-1\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121), "html", null, true);
                yield "</h6>
                                        <small class=\"text-muted\">";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 122), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                    </div>
                                    <span class=\"badge bg-primary rounded-pill\">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 124), 2, ",", " "), "html", null, true);
                yield " €</span>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "                        </div>
                    ";
        } else {
            // line 129
            yield "                        <p class=\"text-muted\">Aucun produit récent</p>
                    ";
        }
        // line 131
        yield "                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-shopping-bag me-2\"></i>Commandes récentes
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 142
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 142, $this->source); })()), "recent_orders", [], "any", false, false, false, 142)) > 0)) {
            // line 143
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 144, $this->source); })()), "recent_orders", [], "any", false, false, false, 144));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 145
                yield "                                <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"mb-1\">Commande #";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 147), "html", null, true);
                yield "</h6>
                                        <small class=\"text-muted\">";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 148), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                    </div>
                                    <span class=\"badge bg-success rounded-pill\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 150), 2, ",", " "), "html", null, true);
                yield " €</span>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "                        </div>
                    ";
        } else {
            // line 155
            yield "                        <p class=\"text-muted\">Aucune commande récente</p>
                    ";
        }
        // line 157
        yield "                </div>
            </div>
        </div>
    </div>
</div>
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
        return "admin/dashboard/index.html.twig";
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
        return array (  327 => 157,  323 => 155,  319 => 153,  310 => 150,  305 => 148,  301 => 147,  297 => 145,  293 => 144,  290 => 143,  288 => 142,  275 => 131,  271 => 129,  267 => 127,  258 => 124,  253 => 122,  249 => 121,  245 => 119,  241 => 118,  238 => 117,  236 => 116,  213 => 96,  205 => 91,  197 => 86,  189 => 81,  181 => 76,  155 => 53,  137 => 38,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard - La Boutique Française{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <h1 class=\"h2 mb-3\">
                <i class=\"fas fa-tachometer-alt me-2\"></i>Tableau de bord administrateur
            </h1>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"card bg-primary text-white\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <h5 class=\"card-title\">Produits</h5>
                            <h2 class=\"mb-0\">{{ stats.total_products }}</h2>
                        </div>
                        <div class=\"align-self-center\">
                            <i class=\"fas fa-box fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"card bg-success text-white\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <h5 class=\"card-title\">Utilisateurs</h5>
                            <h2 class=\"mb-0\">{{ stats.total_users }}</h2>
                        </div>
                        <div class=\"align-self-center\">
                            <i class=\"fas fa-users fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"card bg-info text-white\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between\">
                        <div>
                            <h5 class=\"card-title\">Commandes</h5>
                            <h2 class=\"mb-0\">{{ stats.total_orders }}</h2>
                        </div>
                        <div class=\"align-self-center\">
                            <i class=\"fas fa-shopping-cart fa-2x\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i>Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('admin_product_new') }}\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-plus me-2\"></i>Nouveau produit
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('admin_category_new') }}\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-tag me-2\"></i>Nouvelle catégorie
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('admin_product_index') }}\" class=\"btn btn-info w-100\">
                                <i class=\"fas fa-list me-2\"></i>Gérer les produits
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('admin_category_index') }}\" class=\"btn btn-warning w-100\">
                                <i class=\"fas fa-tags me-2\"></i>Gérer les catégories
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('admin_user_new') }}\" class=\"btn btn-dark w-100\">
                                <i class=\"fas fa-user-shield me-2\"></i>Nouvel administrateur
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class=\"row\">
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-clock me-2\"></i>Produits récents
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if stats.recent_products|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for product in stats.recent_products %}
                                <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"mb-1\">{{ product.name }}</h6>
                                        <small class=\"text-muted\">{{ product.createdAt|date('d/m/Y H:i') }}</small>
                                    </div>
                                    <span class=\"badge bg-primary rounded-pill\">{{ product.price|number_format(2, ',', ' ') }} €</span>
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <p class=\"text-muted\">Aucun produit récent</p>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-shopping-bag me-2\"></i>Commandes récentes
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if stats.recent_orders|length > 0 %}
                        <div class=\"list-group list-group-flush\">
                            {% for order in stats.recent_orders %}
                                <div class=\"list-group-item d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"mb-1\">Commande #{{ order.id }}</h6>
                                        <small class=\"text-muted\">{{ order.createdAt|date('d/m/Y H:i') }}</small>
                                    </div>
                                    <span class=\"badge bg-success rounded-pill\">{{ order.total|number_format(2, ',', ' ') }} €</span>
                                </div>
                            {% endfor %}
                        </div>
                    {% else %}
                        <p class=\"text-muted\">Aucune commande récente</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard/index.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\admin\\dashboard\\index.html.twig");
    }
}
