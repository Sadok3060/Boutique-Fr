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

/* admin/product/edit.html.twig */
class __TwigTemplate_3beff2e733016be778be581d7aca1a1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/edit.html.twig"));

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

        yield "Admin - Modifier produit";
        
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
    <h1 class=\"h3 mb-4\">Modifier produit</h1>
    <div class=\"card\">
        <div class=\"card-body\">
            ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
            
            <!-- Affichage de l'image actuelle -->
            ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "mainImage", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                <div class=\"mb-3\">
                    <label class=\"form-label\">Image principale actuelle :</label>
                    <div>
                        <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "mainImageUrl", [], "any", false, false, false, 17), "html", null, true);
            yield "\" alt=\"Image principale actuelle\" class=\"image-preview\" style=\"max-width: 200px; max-height: 200px;\">
                    </div>
                </div>
            ";
        }
        // line 21
        yield "            
            ";
        // line 22
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "images", [], "any", false, false, false, 22))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                <div class=\"mb-3\">
                    <label class=\"form-label\">Images supplémentaires actuelles :</label>
                    <div class=\"image-preview-container\">
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "images", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                yield "\" alt=\"Image supplémentaire\" class=\"image-preview\" style=\"max-width: 150px; max-height: 150px;\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                    </div>
                </div>
            ";
        }
        // line 32
        yield "            
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'widget');
        yield "
            <div class=\"mt-3 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_index");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
            </div>
            ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

<script>
// Aperçu de l'image principale
function previewImage(input) {
    const preview = document.getElementById('main-image-preview');
    if (!preview) return;
    
    preview.innerHTML = '';
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px';
            img.style.maxHeight = '200px';
            img.style.borderRadius = '8px';
            img.style.marginTop = '10px';
            img.alt = 'Aperçu de la nouvelle image principale';
            preview.appendChild(img);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Aperçu des images supplémentaires
function previewMultipleImages(input) {
    const preview = document.getElementById('additional-images-preview');
    if (!preview) return;
    
    preview.innerHTML = '';
    
    if (input.files) {
        Array.from(input.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '150px';
                img.style.maxHeight = '150px';
                img.style.borderRadius = '8px';
                img.style.margin = '5px';
                img.alt = `Aperçu \${index + 1}`;
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }
}
</script>
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
        return "admin/product/edit.html.twig";
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
        return array (  168 => 38,  163 => 36,  157 => 33,  154 => 32,  149 => 29,  140 => 27,  136 => 26,  131 => 23,  129 => 22,  126 => 21,  119 => 17,  114 => 14,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Modifier produit{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <h1 class=\"h3 mb-4\">Modifier produit</h1>
    <div class=\"card\">
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
            
            <!-- Affichage de l'image actuelle -->
            {% if product.mainImage %}
                <div class=\"mb-3\">
                    <label class=\"form-label\">Image principale actuelle :</label>
                    <div>
                        <img src=\"{{ product.mainImageUrl }}\" alt=\"Image principale actuelle\" class=\"image-preview\" style=\"max-width: 200px; max-height: 200px;\">
                    </div>
                </div>
            {% endif %}
            
            {% if product.images is not empty %}
                <div class=\"mb-3\">
                    <label class=\"form-label\">Images supplémentaires actuelles :</label>
                    <div class=\"image-preview-container\">
                        {% for image in product.images %}
                            <img src=\"{{ image }}\" alt=\"Image supplémentaire\" class=\"image-preview\" style=\"max-width: 150px; max-height: 150px;\">
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            
            {{ form_widget(form) }}
            <div class=\"mt-3 d-flex gap-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                <a href=\"{{ path('admin_product_index') }}\" class=\"btn btn-outline-secondary\">Retour</a>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>

<script>
// Aperçu de l'image principale
function previewImage(input) {
    const preview = document.getElementById('main-image-preview');
    if (!preview) return;
    
    preview.innerHTML = '';
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px';
            img.style.maxHeight = '200px';
            img.style.borderRadius = '8px';
            img.style.marginTop = '10px';
            img.alt = 'Aperçu de la nouvelle image principale';
            preview.appendChild(img);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Aperçu des images supplémentaires
function previewMultipleImages(input) {
    const preview = document.getElementById('additional-images-preview');
    if (!preview) return;
    
    preview.innerHTML = '';
    
    if (input.files) {
        Array.from(input.files).forEach((file, index) => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '150px';
                img.style.maxHeight = '150px';
                img.style.borderRadius = '8px';
                img.style.margin = '5px';
                img.alt = `Aperçu \${index + 1}`;
                preview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    }
}
</script>
{% endblock %}


", "admin/product/edit.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\admin\\product\\edit.html.twig");
    }
}
