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

/* admin/product/index.html.twig */
class __TwigTemplate_9287f17bc73c22d07a46a081d05815d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

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

        yield "Admin - Produits";
        
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
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">Produits</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        yield "\" class=\"btn btn-primary\">Nouveau</a>
    </div>

    <div class=\"card\">
        <div class=\"card-body table-responsive\">
            <table class=\"table align-middle\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Actif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            yield "                    <tr>
                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 31
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImage", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "mainImageUrl", [], "any", false, false, false, 32), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 32), "html", null, true);
                yield "\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                            ";
            } else {
                // line 34
                yield "                                <span class=\"text-muted\">Aucune image</span>
                            ";
            }
            // line 36
            yield "                        </td>
                        <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                        <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38), 2, ",", " "), "html", null, true);
            yield " €</td>
                        <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "isIsActive", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                                <span class=\"badge bg-success\">Oui</span>
                            ";
            } else {
                // line 44
                yield "                                <span class=\"badge bg-secondary\">Non</span>
                            ";
            }
            // line 46
            yield "                        </td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"Modifier\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ? Cette action est irréversible.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_product_" . CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 53))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "                    <tr><td colspan=\"6\" class=\"text-center text-muted\">Aucun produit</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                </tbody>
            </table>
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
        return "admin/product/index.html.twig";
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
        return array (  216 => 64,  209 => 62,  207 => 61,  194 => 53,  190 => 52,  184 => 49,  179 => 46,  175 => 44,  171 => 42,  169 => 41,  164 => 39,  160 => 38,  156 => 37,  153 => 36,  149 => 34,  141 => 32,  139 => 31,  134 => 29,  131 => 28,  126 => 27,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Produits{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">Produits</h1>
        <a href=\"{{ path('admin_product_new') }}\" class=\"btn btn-primary\">Nouveau</a>
    </div>

    <div class=\"card\">
        <div class=\"card-body table-responsive\">
            <table class=\"table align-middle\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Actif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for product in products %}
                    <tr>
                        <td>{{ product.id }}</td>
                        <td>
                            {% if product.mainImage %}
                                <img src=\"{{ product.mainImageUrl }}\" alt=\"{{ product.name }}\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                            {% else %}
                                <span class=\"text-muted\">Aucune image</span>
                            {% endif %}
                        </td>
                        <td>{{ product.name }}</td>
                        <td>{{ product.price|number_format(2, ',', ' ') }} €</td>
                        <td>{{ product.stock }}</td>
                        <td>
                            {% if product.isIsActive %}
                                <span class=\"badge bg-success\">Oui</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Non</span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"{{ path('admin_products_edit', {id: product.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Modifier\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('admin_products_delete', {id: product.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ? Cette action est irréversible.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_product_' ~ product.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr><td colspan=\"6\" class=\"text-center text-muted\">Aucun produit</td></tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}


", "admin/product/index.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\admin\\product\\index.html.twig");
    }
}
