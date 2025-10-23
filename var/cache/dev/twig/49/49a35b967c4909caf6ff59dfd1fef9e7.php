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

/* product/show.html.twig */
class __TwigTemplate_41a5169dfd4bb1a2f45c98b3a9009b05 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield " - La Boutique Française";
        
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
        yield "    <div class=\"container py-5\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\">Boutique</a></li>
                ";
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "category", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                    <li class=\"breadcrumb-item\">
                        <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\">
                            ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 18
        yield "                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
            </ol>
        </nav>

        <div class=\"row\">
            <!-- Product Images -->
            <div class=\"col-lg-6 mb-4 sticky-lg\">
                <div class=\"card hover-lift\">
                    <div class=\"card-body p-0\">
                        ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "mainImage", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "mainImageUrl", [], "any", false, false, false, 28), "html", null, true);
            yield "\" class=\"img-fluid rounded\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
            yield "\" id=\"mainImage\" loading=\"lazy\" width=\"900\" height=\"600\">
                        ";
        } else {
            // line 30
            yield "                            <div class=\"bg-light d-flex align-items-center justify-content-center\" style=\"height: 400px;\">
                                <i class=\"fas fa-image text-muted\" style=\"font-size: 4rem;\"></i>
                            </div>
                        ";
        }
        // line 34
        yield "                        
                        ";
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "images", [], "any", false, false, false, 35)) > 0)) {
            // line 36
            yield "                            <div class=\"row mt-3 g-2\">
                                <div class=\"col-3\">
                                    <img src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "mainImageUrl", [], "any", false, false, false, 38), "html", null, true);
            yield "\" class=\"img-thumbnail thumbnail-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
            yield "\" onclick=\"changeMainImage(this.src)\" loading=\"lazy\" width=\"200\" height=\"140\">
                                </div>
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "images", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                yield "                                    <div class=\"col-3\">
                                        <img src=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["image"], "html", null, true);
                yield "\" class=\"img-thumbnail thumbnail-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
                yield "\" onclick=\"changeMainImage(this.src)\" loading=\"lazy\" width=\"200\" height=\"140\">
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                            </div>
                        ";
        }
        // line 47
        yield "                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class=\"col-lg-6\">
                <div class=\"card hover-lift\">
                    <div class=\"card-body\">
                        ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "isFeatured", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "                            <span class=\"badge bg-warning mb-2\">
                                <i class=\"fas fa-star me-1\"></i>Mis en avant
                            </span>
                        ";
        }
        // line 60
        yield "
                        <h1 class=\"card-title h2 mb-3\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), "html", null, true);
        yield "</h1>
                        
                        <div class=\"mb-4\">
                            <div class=\"d-flex align-items-center mb-2\">
                                <span class=\"price h3 me-3\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "priceWithTva", [], "any", false, false, false, 65), 2, ",", " "), "html", null, true);
        yield " €</span>
                                <span class=\"text-muted\">TTC</span>
                            </div>
                            <small class=\"text-muted\">
                                Prix HT : ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "price", [], "any", false, false, false, 69), 2, ",", " "), "html", null, true);
        yield " €
                            </small>
                        </div>

                        ";
        // line 73
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "                            <div class=\"mb-4\">
                                <h5>Description</h5>
                                <p class=\"text-muted\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
                            </div>
                        ";
        }
        // line 79
        yield "
                        <div class=\"mb-4\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <span class=\"fw-bold\">Stock :</span>
                                <span class=\"";
        // line 83
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "isInStock", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "text-success";
        } else {
            yield "text-danger";
        }
        yield "\">
                                    ";
        // line 84
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "isInStock", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "                                        <i class=\"fas fa-check-circle me-1\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "stock", [], "any", false, false, false, 85), "html", null, true);
            yield " disponible(s)
                                    ";
        } else {
            // line 87
            yield "                                        <i class=\"fas fa-times-circle me-1\"></i>Rupture de stock
                                    ";
        }
        // line 89
        yield "                                </span>
                            </div>
                        </div>

                        ";
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 93, $this->source); })()), "sku", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "                            <div class=\"mb-4\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-bold\">Référence :</span>
                                    <span class=\"text-muted\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 97, $this->source); })()), "sku", [], "any", false, false, false, 97), "html", null, true);
            yield "</span>
                                </div>
                            </div>
                        ";
        }
        // line 101
        yield "
                        ";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 102, $this->source); })()), "category", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                            <div class=\"mb-4\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-bold\">Catégorie :</span>
                                    <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 106, $this->source); })()), "category", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                        ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "category", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            yield "
                                    </a>
                                </div>
                            </div>
                        ";
        }
        // line 112
        yield "
                        <!-- Add to Cart Form -->
                        ";
        // line 114
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 114, $this->source); })()), "isInStock", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 115
            yield "                            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\" class=\"mb-4\" aria-label=\"Ajouter ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 115, $this->source); })()), "name", [], "any", false, false, false, 115), "html", null, true);
            yield " au panier\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-3\">
                                        <label for=\"quantity\" class=\"form-label\">Quantité</label>
                                        <select name=\"quantity\" id=\"quantity\" class=\"form-select\">
                                            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, min(10, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 120, $this->source); })()), "stock", [], "any", false, false, false, 120))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 121
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                                        </select>
                                    </div>
                                    <div class=\"col-md-8 mb-3\">
                                        <label class=\"form-label\">&nbsp;</label>
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_add_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-cart-plus me-2\"></i>Ajouter au panier
                                        </button>
                                    </div>
                                </div>
                            </form>
                        ";
        } else {
            // line 135
            yield "                            <div class=\"alert alert-warning\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Ce produit est actuellement en rupture de stock.
                            </div>
                        ";
        }
        // line 140
        yield "
                        <!-- Product Actions -->
                        <div class=\"d-flex gap-2\">
                            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-outline-secondary flex-fill\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la boutique
                            </a>
                            <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" class=\"btn btn-outline-primary flex-fill\">
                                <i class=\"fas fa-shopping-cart me-2\"></i>Voir le panier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        ";
        // line 156
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 156, $this->source); })()), "category", [], "any", false, false, false, 156) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 156, $this->source); })()), "category", [], "any", false, false, false, 156), "products", [], "any", false, false, false, 156)) > 1))) {
            // line 157
            yield "            <section class=\"mt-5\">
                <h3 class=\"mb-4\">Produits similaires</h3>
                <div class=\"row\">
                    ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 160, $this->source); })()), "category", [], "any", false, false, false, 160), "products", [], "any", false, false, false, 160));
            foreach ($context['_seq'] as $context["_key"] => $context["relatedProduct"]) {
                // line 161
                yield "                        ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "id", [], "any", false, false, false, 161) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 161, $this->source); })()), "id", [], "any", false, false, false, 161)) && CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "isActive", [], "any", false, false, false, 161)) && CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "isInStock", [], "any", false, false, false, 161))) {
                    // line 162
                    yield "                            <div class=\"col-lg-3 col-md-6 mb-4\">
                                <div class=\"card h-100 hover-lift\">
                                    ";
                    // line 164
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "mainImage", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 165
                        yield "                                        <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "mainImage", [], "any", false, false, false, 165), "html", null, true);
                        yield "\" class=\"card-img-top\" alt=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "name", [], "any", false, false, false, 165), "html", null, true);
                        yield "\" loading=\"lazy\" width=\"600\" height=\"400\">
                                    ";
                    } else {
                        // line 167
                        yield "                                        <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                            <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                        </div>
                                    ";
                    }
                    // line 171
                    yield "                                    <div class=\"card-body d-flex flex-column\">
                                        <h5 class=\"card-title\">";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "name", [], "any", false, false, false, 172), "html", null, true);
                    yield "</h5>
                                        <p class=\"card-text text-muted\">";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "description", [], "any", false, false, false, 173), 0, 80), "html", null, true);
                    yield "...</p>
                                        <div class=\"mt-auto\">
                                            <div class=\"price mb-3\">
                                                ";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "priceWithTva", [], "any", false, false, false, 176), 2, ",", " "), "html", null, true);
                    yield " €
                                            </div>
                                            <div class=\"d-flex gap-2\">
                                                <a href=\"";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                    yield "\" class=\"btn btn-outline-primary flex-fill\">
                                                    <i class=\"fas fa-eye me-1\"></i>Voir
                                                </a>
                                                <form method=\"post\" action=\"";
                    // line 182
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["relatedProduct"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                    yield "\" class=\"flex-fill\">
                                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
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
                // line 193
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['relatedProduct'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "                </div>
            </section>
        ";
        }
        // line 197
        yield "    </div>

    <script>
        function changeMainImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>

    <style>
        .thumbnail-img {
            cursor: pointer;
            transition: opacity 0.3s ease;
        }
        
        .thumbnail-img:hover {
            opacity: 0.7;
        }
    </style>
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
        return "product/show.html.twig";
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
        return array (  483 => 197,  478 => 194,  472 => 193,  458 => 182,  452 => 179,  446 => 176,  440 => 173,  436 => 172,  433 => 171,  427 => 167,  419 => 165,  417 => 164,  413 => 162,  410 => 161,  406 => 160,  401 => 157,  399 => 156,  386 => 146,  380 => 143,  375 => 140,  368 => 135,  357 => 127,  351 => 123,  340 => 121,  336 => 120,  325 => 115,  323 => 114,  319 => 112,  311 => 107,  307 => 106,  302 => 103,  300 => 102,  297 => 101,  290 => 97,  285 => 94,  283 => 93,  277 => 89,  273 => 87,  267 => 85,  265 => 84,  257 => 83,  251 => 79,  245 => 76,  241 => 74,  239 => 73,  232 => 69,  225 => 65,  218 => 61,  215 => 60,  209 => 56,  207 => 55,  197 => 47,  193 => 45,  182 => 42,  179 => 41,  175 => 40,  168 => 38,  164 => 36,  162 => 35,  159 => 34,  153 => 30,  145 => 28,  143 => 27,  130 => 18,  123 => 14,  119 => 13,  116 => 12,  114 => 11,  110 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }} - La Boutique Française{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_products') }}\">Boutique</a></li>
                {% if product.category %}
                    <li class=\"breadcrumb-item\">
                        <a href=\"{{ path('app_products_by_category', {'id': product.category.id}) }}\">
                            {{ product.category.name }}
                        </a>
                    </li>
                {% endif %}
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ product.name }}</li>
            </ol>
        </nav>

        <div class=\"row\">
            <!-- Product Images -->
            <div class=\"col-lg-6 mb-4 sticky-lg\">
                <div class=\"card hover-lift\">
                    <div class=\"card-body p-0\">
                        {% if product.mainImage %}
                            <img src=\"{{ product.mainImageUrl }}\" class=\"img-fluid rounded\" alt=\"{{ product.name }}\" id=\"mainImage\" loading=\"lazy\" width=\"900\" height=\"600\">
                        {% else %}
                            <div class=\"bg-light d-flex align-items-center justify-content-center\" style=\"height: 400px;\">
                                <i class=\"fas fa-image text-muted\" style=\"font-size: 4rem;\"></i>
                            </div>
                        {% endif %}
                        
                        {% if product.images|length > 0 %}
                            <div class=\"row mt-3 g-2\">
                                <div class=\"col-3\">
                                    <img src=\"{{ product.mainImageUrl }}\" class=\"img-thumbnail thumbnail-img\" alt=\"{{ product.name }}\" onclick=\"changeMainImage(this.src)\" loading=\"lazy\" width=\"200\" height=\"140\">
                                </div>
                                {% for image in product.images %}
                                    <div class=\"col-3\">
                                        <img src=\"{{ image }}\" class=\"img-thumbnail thumbnail-img\" alt=\"{{ product.name }}\" onclick=\"changeMainImage(this.src)\" loading=\"lazy\" width=\"200\" height=\"140\">
                                    </div>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class=\"col-lg-6\">
                <div class=\"card hover-lift\">
                    <div class=\"card-body\">
                        {% if product.isFeatured %}
                            <span class=\"badge bg-warning mb-2\">
                                <i class=\"fas fa-star me-1\"></i>Mis en avant
                            </span>
                        {% endif %}

                        <h1 class=\"card-title h2 mb-3\">{{ product.name }}</h1>
                        
                        <div class=\"mb-4\">
                            <div class=\"d-flex align-items-center mb-2\">
                                <span class=\"price h3 me-3\">{{ product.priceWithTva|number_format(2, ',', ' ') }} €</span>
                                <span class=\"text-muted\">TTC</span>
                            </div>
                            <small class=\"text-muted\">
                                Prix HT : {{ product.price|number_format(2, ',', ' ') }} €
                            </small>
                        </div>

                        {% if product.description %}
                            <div class=\"mb-4\">
                                <h5>Description</h5>
                                <p class=\"text-muted\">{{ product.description }}</p>
                            </div>
                        {% endif %}

                        <div class=\"mb-4\">
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <span class=\"fw-bold\">Stock :</span>
                                <span class=\"{% if product.isInStock %}text-success{% else %}text-danger{% endif %}\">
                                    {% if product.isInStock %}
                                        <i class=\"fas fa-check-circle me-1\"></i>{{ product.stock }} disponible(s)
                                    {% else %}
                                        <i class=\"fas fa-times-circle me-1\"></i>Rupture de stock
                                    {% endif %}
                                </span>
                            </div>
                        </div>

                        {% if product.sku %}
                            <div class=\"mb-4\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-bold\">Référence :</span>
                                    <span class=\"text-muted\">{{ product.sku }}</span>
                                </div>
                            </div>
                        {% endif %}

                        {% if product.category %}
                            <div class=\"mb-4\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <span class=\"fw-bold\">Catégorie :</span>
                                    <a href=\"{{ path('app_products_by_category', {'id': product.category.id}) }}\" class=\"text-decoration-none\">
                                        {{ product.category.name }}
                                    </a>
                                </div>
                            </div>
                        {% endif %}

                        <!-- Add to Cart Form -->
                        {% if product.isInStock %}
                            <form method=\"post\" action=\"{{ path('app_cart_add', {'id': product.id}) }}\" class=\"mb-4\" aria-label=\"Ajouter {{ product.name }} au panier\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 mb-3\">
                                        <label for=\"quantity\" class=\"form-label\">Quantité</label>
                                        <select name=\"quantity\" id=\"quantity\" class=\"form-select\">
                                            {% for i in 1..min(10, product.stock) %}
                                                <option value=\"{{ i }}\">{{ i }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class=\"col-md-8 mb-3\">
                                        <label class=\"form-label\">&nbsp;</label>
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_add_' ~ product.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                                            <i class=\"fas fa-cart-plus me-2\"></i>Ajouter au panier
                                        </button>
                                    </div>
                                </div>
                            </form>
                        {% else %}
                            <div class=\"alert alert-warning\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                Ce produit est actuellement en rupture de stock.
                            </div>
                        {% endif %}

                        <!-- Product Actions -->
                        <div class=\"d-flex gap-2\">
                            <a href=\"{{ path('app_products') }}\" class=\"btn btn-outline-secondary flex-fill\">
                                <i class=\"fas fa-arrow-left me-2\"></i>Retour à la boutique
                            </a>
                            <a href=\"{{ path('app_cart') }}\" class=\"btn btn-outline-primary flex-fill\">
                                <i class=\"fas fa-shopping-cart me-2\"></i>Voir le panier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        {% if product.category and product.category.products|length > 1 %}
            <section class=\"mt-5\">
                <h3 class=\"mb-4\">Produits similaires</h3>
                <div class=\"row\">
                    {% for relatedProduct in product.category.products %}
                        {% if relatedProduct.id != product.id and relatedProduct.isActive and relatedProduct.isInStock %}
                            <div class=\"col-lg-3 col-md-6 mb-4\">
                                <div class=\"card h-100 hover-lift\">
                                    {% if relatedProduct.mainImage %}
                                        <img src=\"{{ relatedProduct.mainImage }}\" class=\"card-img-top\" alt=\"{{ relatedProduct.name }}\" loading=\"lazy\" width=\"600\" height=\"400\">
                                    {% else %}
                                        <div class=\"card-img-top bg-light d-flex align-items-center justify-content-center\">
                                            <i class=\"fas fa-image text-muted\" style=\"font-size: 3rem;\"></i>
                                        </div>
                                    {% endif %}
                                    <div class=\"card-body d-flex flex-column\">
                                        <h5 class=\"card-title\">{{ relatedProduct.name }}</h5>
                                        <p class=\"card-text text-muted\">{{ relatedProduct.description|slice(0, 80) }}...</p>
                                        <div class=\"mt-auto\">
                                            <div class=\"price mb-3\">
                                                {{ relatedProduct.priceWithTva|number_format(2, ',', ' ') }} €
                                            </div>
                                            <div class=\"d-flex gap-2\">
                                                <a href=\"{{ path('app_product_show', {'id': relatedProduct.id}) }}\" class=\"btn btn-outline-primary flex-fill\">
                                                    <i class=\"fas fa-eye me-1\"></i>Voir
                                                </a>
                                                <form method=\"post\" action=\"{{ path('app_cart_add', {'id': relatedProduct.id}) }}\" class=\"flex-fill\">
                                                    <button type=\"submit\" class=\"btn btn-primary w-100\">
                                                        <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </section>
        {% endif %}
    </div>

    <script>
        function changeMainImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>

    <style>
        .thumbnail-img {
            cursor: pointer;
            transition: opacity 0.3s ease;
        }
        
        .thumbnail-img:hover {
            opacity: 0.7;
        }
    </style>
{% endblock %} ", "product/show.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\product\\show.html.twig");
    }
}
