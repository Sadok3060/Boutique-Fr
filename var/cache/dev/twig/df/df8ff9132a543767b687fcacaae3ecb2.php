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

/* user/dashboard.html.twig */
class __TwigTemplate_c63340849a0cd1890b768ce7528ed738 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

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

        yield "Mon Espace - La Boutique Française";
        
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
                <i class=\"fas fa-user me-2\"></i>Mon espace personnel
            </h1>
        </div>
    </div>

    <!-- User Info -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-user-circle me-2\"></i>Informations personnelles
                    </h5>
                </div>
                <div class=\"card-body\">
                    <p><strong>Nom :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                    <p><strong>Email :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                    ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                        <p><strong>Téléphone :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                    ";
        }
        // line 30
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "address", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                        <p><strong>Adresse :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "address", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                    ";
        }
        // line 33
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "city", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                        <p><strong>Ville :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "city", [], "any", false, false, false, 34), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "postalCode", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    ";
        }
        // line 36
        yield "                    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Modifier mon profil
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-shopping-bag me-2\"></i>Mes commandes
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 50
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 50, $this->source); })())) > 0)) {
            // line 51
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>N° Commande</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 63, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 64
                yield "                                        <tr>
                                            <td>#";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 65), "html", null, true);
                yield "</td>
                                            <td>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 66), "d/m/Y H:i"), "html", null, true);
                yield "</td>
                                            <td>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 67), 2, ",", " "), "html", null, true);
                yield " €</td>
                                            <td>
                                                <span class=\"badge bg-primary\">";
                // line 69
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", true, true, false, 69) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 69)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 69), "html", null, true)) : ("En attente"));
                yield "</span>
                                            </td>
                                            <td>
                                                <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 82
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-shopping-bag text-muted\" style=\"font-size: 3rem;\"></i>
                            <h5 class=\"mt-3\">Aucune commande</h5>
                            <p class=\"text-muted\">Vous n'avez pas encore passé de commande.</p>
                            <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-store me-2\"></i>Découvrir nos produits
                            </a>
                        </div>
                    ";
        }
        // line 91
        yield "                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class=\"row\">
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
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-store me-2\"></i>Voir la boutique
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-shopping-cart me-2\"></i>Mon panier
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        yield "\" class=\"btn btn-info w-100\">
                                <i class=\"fas fa-user-edit me-2\"></i>Modifier profil
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-home me-2\"></i>Accueil
                            </a>
                        </div>
                    </div>
                </div>
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
        return "user/dashboard.html.twig";
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
        return array (  291 => 123,  283 => 118,  275 => 113,  267 => 108,  248 => 91,  240 => 86,  234 => 82,  228 => 78,  213 => 69,  208 => 67,  204 => 66,  200 => 65,  197 => 64,  193 => 63,  179 => 51,  177 => 50,  159 => 36,  151 => 34,  148 => 33,  142 => 31,  139 => 30,  133 => 28,  131 => 27,  127 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Espace - La Boutique Française{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <h1 class=\"h2 mb-3\">
                <i class=\"fas fa-user me-2\"></i>Mon espace personnel
            </h1>
        </div>
    </div>

    <!-- User Info -->
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-user-circle me-2\"></i>Informations personnelles
                    </h5>
                </div>
                <div class=\"card-body\">
                    <p><strong>Nom :</strong> {{ user.firstName }} {{ user.lastName }}</p>
                    <p><strong>Email :</strong> {{ user.email }}</p>
                    {% if user.phone %}
                        <p><strong>Téléphone :</strong> {{ user.phone }}</p>
                    {% endif %}
                    {% if user.address %}
                        <p><strong>Adresse :</strong> {{ user.address }}</p>
                    {% endif %}
                    {% if user.city %}
                        <p><strong>Ville :</strong> {{ user.city }} {{ user.postalCode }}</p>
                    {% endif %}
                    <a href=\"{{ path('user_profile') }}\" class=\"btn btn-primary\">
                        <i class=\"fas fa-edit me-2\"></i>Modifier mon profil
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-shopping-bag me-2\"></i>Mes commandes
                    </h5>
                </div>
                <div class=\"card-body\">
                    {% if orders|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>N° Commande</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for order in orders %}
                                        <tr>
                                            <td>#{{ order.id }}</td>
                                            <td>{{ order.createdAt|date('d/m/Y H:i') }}</td>
                                            <td>{{ order.total|number_format(2, ',', ' ') }} €</td>
                                            <td>
                                                <span class=\"badge bg-primary\">{{ order.status ?? 'En attente' }}</span>
                                            </td>
                                            <td>
                                                <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"text-center py-4\">
                            <i class=\"fas fa-shopping-bag text-muted\" style=\"font-size: 3rem;\"></i>
                            <h5 class=\"mt-3\">Aucune commande</h5>
                            <p class=\"text-muted\">Vous n'avez pas encore passé de commande.</p>
                            <a href=\"{{ path('app_products') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-store me-2\"></i>Découvrir nos produits
                            </a>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class=\"row\">
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
                            <a href=\"{{ path('app_products') }}\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-store me-2\"></i>Voir la boutique
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('app_cart') }}\" class=\"btn btn-success w-100\">
                                <i class=\"fas fa-shopping-cart me-2\"></i>Mon panier
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('user_profile') }}\" class=\"btn btn-info w-100\">
                                <i class=\"fas fa-user-edit me-2\"></i>Modifier profil
                            </a>
                        </div>
                        <div class=\"col-md-3 mb-2\">
                            <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary w-100\">
                                <i class=\"fas fa-home me-2\"></i>Accueil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "user/dashboard.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\user\\dashboard.html.twig");
    }
}
