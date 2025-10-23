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

/* admin/category/index.html.twig */
class __TwigTemplate_c3c00ff0513121bfb92859a9d4372196 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/category/index.html.twig"));

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

        yield "Admin - Catégories";
        
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
        <h1 class=\"h3\">Catégories</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_new");
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
                        <th>Actif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            yield "                    <tr>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 29
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 30), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30), "html", null, true);
                yield "\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                            ";
            } else {
                // line 32
                yield "                                <span class=\"text-muted\">Aucune image</span>
                            ";
            }
            // line 34
            yield "                        </td>
                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 37
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "isIsActive", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "                                <span class=\"badge bg-success\">Oui</span>
                            ";
            } else {
                // line 40
                yield "                                <span class=\"badge bg-secondary\">Non</span>
                            ";
            }
            // line 42
            yield "                        </td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"Modifier\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ? Cette action est irréversible.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_category_" . CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 49))), "html", null, true);
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
        // line 57
        if (!$context['_iterated']) {
            // line 58
            yield "                    <tr><td colspan=\"4\" class=\"text-center text-muted\">Aucune catégorie</td></tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return "admin/category/index.html.twig";
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
        return array (  206 => 60,  199 => 58,  197 => 57,  184 => 49,  180 => 48,  174 => 45,  169 => 42,  165 => 40,  161 => 38,  159 => 37,  154 => 35,  151 => 34,  147 => 32,  139 => 30,  137 => 29,  132 => 27,  129 => 26,  124 => 25,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Catégories{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"h3\">Catégories</h1>
        <a href=\"{{ path('admin_category_new') }}\" class=\"btn btn-primary\">Nouveau</a>
    </div>

    <div class=\"card\">
        <div class=\"card-body table-responsive\">
            <table class=\"table align-middle\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Actif</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for category in categories %}
                    <tr>
                        <td>{{ category.id }}</td>
                        <td>
                            {% if category.image %}
                                <img src=\"{{ category.image }}\" alt=\"{{ category.name }}\" class=\"img-thumbnail\" style=\"max-width: 50px; max-height: 50px;\">
                            {% else %}
                                <span class=\"text-muted\">Aucune image</span>
                            {% endif %}
                        </td>
                        <td>{{ category.name }}</td>
                        <td>
                            {% if category.isIsActive %}
                                <span class=\"badge bg-success\">Oui</span>
                            {% else %}
                                <span class=\"badge bg-secondary\">Non</span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"{{ path('admin_categories_edit', {id: category.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Modifier\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('admin_categories_delete', {id: category.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ? Cette action est irréversible.')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_category_' ~ category.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                {% else %}
                    <tr><td colspan=\"4\" class=\"text-center text-muted\">Aucune catégorie</td></tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}


", "admin/category/index.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\admin\\category\\index.html.twig");
    }
}
