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

/* cart/index.html.twig */
class __TwigTemplate_75d00d06fe5c26da13a41384cd48103a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Mon Panier - La Boutique Française";
        
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
        yield "    <div class=\"container py-5 section\">
        <h1 class=\"mb-4\">
            <i class=\"fas fa-shopping-cart me-2\"></i>Mon Panier
        </h1>

        ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            yield "            <div class=\"row\">
                <!-- Cart Items -->
                <div class=\"col-lg-8\">
                    <div class=\"card hover-lift\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-list me-2\"></i>Articles (";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 18, $this->source); })())), "html", null, true);
            yield ")
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                yield "                                <div class=\"row align-items-center mb-4 pb-4 border-bottom\">
                                    <div class=\"col-md-2\">
                                        ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 25), "mainImage", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "mainImageUrl", [], "any", false, false, false, 26), "html", null, true);
                    yield "\" class=\"img-fluid rounded\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                    yield "\" loading=\"lazy\" width=\"160\" height=\"120\">
                                        ";
                } else {
                    // line 28
                    yield "                                            <div class=\"bg-light d-flex align-items-center justify-content-center rounded\" style=\"height: 80px;\">
                                                <i class=\"fas fa-image text-muted\"></i>
                                            </div>
                                        ";
                }
                // line 32
                yield "                                    </div>
                                    <div class=\"col-md-4\">
                                        <h6 class=\"mb-1\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
                yield "</h6>
                                        <small class=\"text-muted\">
                                            ";
                // line 36
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "category", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "category", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                    yield "
                                            ";
                }
                // line 39
                yield "                                        </small>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <span class=\"price\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "priceWithTva", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
                yield " €</span>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <form method=\"post\" action=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\" class=\"d-flex align-items-center\" aria-label=\"Modifier la quantité de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                yield "\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_update_" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46))), "html", null, true);
                yield "\">
                                            <select name=\"quantity\" class=\"form-select form-select-sm me-2\" onchange=\"this.form.submit()\">
                                                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(0, min(10, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 48), "stock", [], "any", false, false, false, 48))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 49
                    yield "                                                    <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\" ";
                    if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49))) {
                        yield "selected";
                    }
                    yield ">
                                                        ";
                    // line 50
                    if (($context["i"] == 0)) {
                        yield "Supprimer";
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    }
                    // line 51
                    yield "                                                    </option>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "                                            </select>
                                        </form>
                                    </div>
                                    <div class=\"col-md-1\">
                                        <span class=\"fw-bold\">";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "any", false, false, false, 57), 2, ",", " "), "html", null, true);
                yield " €</span>
                                    </div>
                                    <div class=\"col-md-1\">
                                        <form method=\"post\" action=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir retirer cet article ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("cart_remove_" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-outline-danger btn-sm\" aria-label=\"Retirer ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
                yield " du panier\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                        </div>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class=\"col-lg-4\">
                    <div class=\"card hover-lift sticky-lg\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-calculator me-2\"></i>Récapitulatif
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span>Sous-total HT :</span>
                                <span>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 84, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span>TVA (20%) :</span>
                                <span>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 88, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</span>
                            </div>
                            <hr>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"fw-bold\">Total TTC :</span>
                                <span class=\"fw-bold price h5\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 93, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</span>
                            </div>
                            
                            <div class=\"d-grid gap-2\">
                                ";
            // line 97
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 98
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
                yield "\" class=\"btn btn-primary\" aria-label=\"Passer la commande\">
                                        <i class=\"fas fa-credit-card me-2\"></i>Passer la commande
                                    </a>
                                ";
            } else {
                // line 102
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                yield "\" class=\"btn btn-primary\" aria-label=\"Se connecter pour commander\">
                                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter pour commander
                                    </a>
                                ";
            }
            // line 106
            yield "                                
                                <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            yield "\" class=\"btn btn-outline-primary\" aria-label=\"Continuer les achats\">
                                    <i class=\"fas fa-arrow-left me-2\"></i>Continuer les achats
                                </a>
                                
                                <form method=\"post\" action=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_clear");
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir vider votre panier ?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("cart_clear"), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-outline-danger\" aria-label=\"Vider le panier\">
                                        <i class=\"fas fa-trash me-2\"></i>Vider le panier
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Info -->
                    <div class=\"card mt-3 hover-lift\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">
                                <i class=\"fas fa-shipping-fast me-2\"></i>Livraison
                            </h6>
                            <p class=\"card-text small text-muted\">
                                Livraison gratuite en France métropolitaine dès 50€ d'achat.
                            </p>
                            ";
            // line 130
            if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 130, $this->source); })()) < 50)) {
                // line 131
                yield "                                <div class=\"alert alert-info small\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Plus que ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((50 - (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 133, $this->source); })())), 2, ",", " "), "html", null, true);
                yield " € pour la livraison gratuite !
                                </div>
                            ";
            } else {
                // line 136
                yield "                                <div class=\"alert alert-success small\">
                                    <i class=\"fas fa-check-circle me-1\"></i>
                                    Livraison gratuite !
                                </div>
                            ";
            }
            // line 141
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 146
            yield "            <div class=\"text-center py-5\">
                <i class=\"fas fa-shopping-cart text-muted\" style=\"font-size: 4rem;\"></i>
                <h3 class=\"mt-3\">Votre panier est vide</h3>
                <p class=\"text-muted\">Découvrez nos produits et commencez vos achats !</p>
                <a href=\"";
            // line 150
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
            yield "\" class=\"btn btn-primary\" aria-label=\"Découvrir nos produits\">
                    <i class=\"fas fa-store me-2\"></i>Découvrir nos produits
                </a>
            </div>
        ";
        }
        // line 155
        yield "    </div>
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
        return "cart/index.html.twig";
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
        return array (  378 => 155,  370 => 150,  364 => 146,  357 => 141,  350 => 136,  344 => 133,  340 => 131,  338 => 130,  317 => 112,  313 => 111,  306 => 107,  303 => 106,  295 => 102,  287 => 98,  285 => 97,  278 => 93,  270 => 88,  263 => 84,  246 => 69,  233 => 62,  229 => 61,  225 => 60,  219 => 57,  213 => 53,  206 => 51,  200 => 50,  191 => 49,  187 => 48,  182 => 46,  176 => 45,  170 => 42,  165 => 39,  159 => 37,  157 => 36,  152 => 34,  148 => 32,  142 => 28,  134 => 26,  132 => 25,  128 => 23,  124 => 22,  117 => 18,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Panier - La Boutique Française{% endblock %}

{% block body %}
    <div class=\"container py-5 section\">
        <h1 class=\"mb-4\">
            <i class=\"fas fa-shopping-cart me-2\"></i>Mon Panier
        </h1>

        {% if cart_items|length > 0 %}
            <div class=\"row\">
                <!-- Cart Items -->
                <div class=\"col-lg-8\">
                    <div class=\"card hover-lift\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-list me-2\"></i>Articles ({{ cart_items|length }})
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            {% for item in cart_items %}
                                <div class=\"row align-items-center mb-4 pb-4 border-bottom\">
                                    <div class=\"col-md-2\">
                                        {% if item.product.mainImage %}
                                            <img src=\"{{ item.product.mainImageUrl }}\" class=\"img-fluid rounded\" alt=\"{{ item.product.name }}\" loading=\"lazy\" width=\"160\" height=\"120\">
                                        {% else %}
                                            <div class=\"bg-light d-flex align-items-center justify-content-center rounded\" style=\"height: 80px;\">
                                                <i class=\"fas fa-image text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div class=\"col-md-4\">
                                        <h6 class=\"mb-1\">{{ item.product.name }}</h6>
                                        <small class=\"text-muted\">
                                            {% if item.product.category %}
                                                {{ item.product.category.name }}
                                            {% endif %}
                                        </small>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <span class=\"price\">{{ item.product.priceWithTva|number_format(2, ',', ' ') }} €</span>
                                    </div>
                                    <div class=\"col-md-2\">
                                        <form method=\"post\" action=\"{{ path('app_cart_update', {'id': item.product.id}) }}\" class=\"d-flex align-items-center\" aria-label=\"Modifier la quantité de {{ item.product.name }}\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_update_' ~ item.product.id) }}\">
                                            <select name=\"quantity\" class=\"form-select form-select-sm me-2\" onchange=\"this.form.submit()\">
                                                {% for i in 0..min(10, item.product.stock) %}
                                                    <option value=\"{{ i }}\" {% if i == item.quantity %}selected{% endif %}>
                                                        {% if i == 0 %}Supprimer{% else %}{{ i }}{% endif %}
                                                    </option>
                                                {% endfor %}
                                            </select>
                                        </form>
                                    </div>
                                    <div class=\"col-md-1\">
                                        <span class=\"fw-bold\">{{ item.subtotal|number_format(2, ',', ' ') }} €</span>
                                    </div>
                                    <div class=\"col-md-1\">
                                        <form method=\"post\" action=\"{{ path('app_cart_remove', {'id': item.product.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir retirer cet article ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_remove_' ~ item.product.id) }}\">
                                            <button class=\"btn btn-outline-danger btn-sm\" aria-label=\"Retirer {{ item.product.name }} du panier\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class=\"col-lg-4\">
                    <div class=\"card hover-lift sticky-lg\">
                        <div class=\"card-header\">
                            <h5 class=\"mb-0\">
                                <i class=\"fas fa-calculator me-2\"></i>Récapitulatif
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span>Sous-total HT :</span>
                                <span>{{ subtotal|number_format(2, ',', ' ') }} €</span>
                            </div>
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span>TVA (20%) :</span>
                                <span>{{ tva|number_format(2, ',', ' ') }} €</span>
                            </div>
                            <hr>
                            <div class=\"d-flex justify-content-between mb-3\">
                                <span class=\"fw-bold\">Total TTC :</span>
                                <span class=\"fw-bold price h5\">{{ total|number_format(2, ',', ' ') }} €</span>
                            </div>
                            
                            <div class=\"d-grid gap-2\">
                                {% if app.user %}
                                    <a href=\"{{ path('app_checkout') }}\" class=\"btn btn-primary\" aria-label=\"Passer la commande\">
                                        <i class=\"fas fa-credit-card me-2\"></i>Passer la commande
                                    </a>
                                {% else %}
                                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\" aria-label=\"Se connecter pour commander\">
                                        <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter pour commander
                                    </a>
                                {% endif %}
                                
                                <a href=\"{{ path('app_products') }}\" class=\"btn btn-outline-primary\" aria-label=\"Continuer les achats\">
                                    <i class=\"fas fa-arrow-left me-2\"></i>Continuer les achats
                                </a>
                                
                                <form method=\"post\" action=\"{{ path('app_cart_clear') }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir vider votre panier ?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('cart_clear') }}\">
                                    <button class=\"btn btn-outline-danger\" aria-label=\"Vider le panier\">
                                        <i class=\"fas fa-trash me-2\"></i>Vider le panier
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Info -->
                    <div class=\"card mt-3 hover-lift\">
                        <div class=\"card-body\">
                            <h6 class=\"card-title\">
                                <i class=\"fas fa-shipping-fast me-2\"></i>Livraison
                            </h6>
                            <p class=\"card-text small text-muted\">
                                Livraison gratuite en France métropolitaine dès 50€ d'achat.
                            </p>
                            {% if total < 50 %}
                                <div class=\"alert alert-info small\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Plus que {{ (50 - total)|number_format(2, ',', ' ') }} € pour la livraison gratuite !
                                </div>
                            {% else %}
                                <div class=\"alert alert-success small\">
                                    <i class=\"fas fa-check-circle me-1\"></i>
                                    Livraison gratuite !
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"text-center py-5\">
                <i class=\"fas fa-shopping-cart text-muted\" style=\"font-size: 4rem;\"></i>
                <h3 class=\"mt-3\">Votre panier est vide</h3>
                <p class=\"text-muted\">Découvrez nos produits et commencez vos achats !</p>
                <a href=\"{{ path('app_products') }}\" class=\"btn btn-primary\" aria-label=\"Découvrir nos produits\">
                    <i class=\"fas fa-store me-2\"></i>Découvrir nos produits
                </a>
            </div>
        {% endif %}
    </div>
{% endblock %}", "cart/index.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\cart\\index.html.twig");
    }
}
