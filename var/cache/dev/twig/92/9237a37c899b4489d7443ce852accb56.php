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

/* cart/checkout.html.twig */
class __TwigTemplate_6160408f1cf8b17dad05872f34a2664b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

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

        yield "Commande - La Boutique Française";
        
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
            <i class=\"fas fa-credit-card me-2\"></i>Finaliser la commande
        </h1>

        <div class=\"row\">
            <!-- Checkout Form -->
            <div class=\"col-lg-8\">
                <div class=\"card hover-lift\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-user me-2\"></i>Informations de livraison
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout_process");
        yield "\">
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"firstName\" class=\"form-label\">Prénom *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" required>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"lastName\" class=\"form-label\">Nom *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" required>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"email\" class=\"form-label\">Email *</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"address\" class=\"form-label\">Adresse *</label>
                                <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" required>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label for=\"postalCode\" class=\"form-label\">Code postal *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" required>
                                </div>
                                <div class=\"col-md-8 mb-3\">
                                    <label for=\"city\" class=\"form-label\">Ville *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" required>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"phone\" class=\"form-label\">Téléphone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\">
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"notes\" class=\"form-label\">Notes (optionnel)</label>
                                <textarea class=\"form-control\" id=\"notes\" name=\"notes\" rows=\"3\"></textarea>
                            </div>
                            
                            <hr class=\"my-4\">
                            <h5 class=\"mb-3\">
                                <i class=\"fas fa-credit-card me-2\"></i>Paiement par carte (Visa uniquement)
                            </h5>
                            <div class=\"alert alert-light border d-flex align-items-center\" role=\"alert\">
                                <i class=\"fab fa-cc-visa fa-2x text-primary me-2\"></i>
                                <div>
                                    Seules les cartes Visa sont acceptées. Aucune option d'espèces n'est disponible.
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-8 mb-3\">
                                    <label for=\"cardNumber\" class=\"form-label\">Numéro de carte (Visa) *</label>
                                    <input type=\"text\" inputmode=\"numeric\" pattern=\"[0-9\\s]*\" maxlength=\"19\" class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\" placeholder=\"4XXX XXXX XXXX XXXX\" required>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label for=\"cardHolder\" class=\"form-label\">Titulaire de la carte *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"cardHolder\" name=\"cardHolder\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-3 mb-3\">
                                    <label for=\"expiryMonth\" class=\"form-label\">Mois d'expiration</label>
                                    <input type=\"number\" min=\"1\" max=\"12\" class=\"form-control\" id=\"expiryMonth\" name=\"expiryMonth\" placeholder=\"MM\" required>
                                </div>
                                <div class=\"col-md-3 mb-3\">
                                    <label for=\"expiryYear\" class=\"form-label\">Année d'expiration</label>
                                    <input type=\"number\" min=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "\" max=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") + 15), "html", null, true);
        yield "\" class=\"form-control\" id=\"expiryYear\" name=\"expiryYear\" placeholder=\"YYYY\" required>
                                </div>
                                <div class=\"col-md-3 mb-3\">
                                    <label for=\"cvc\" class=\"form-label\">CVC</label>
                                    <input type=\"number\" min=\"0\" max=\"9999\" class=\"form-control\" id=\"cvc\" name=\"cvc\" placeholder=\"***\" required>
                                </div>
                            </div>

                            <div class=\"d-grid\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-credit-card me-2\"></i>Payer par carte (Visa)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class=\"col-lg-4\">
                <div class=\"card hover-lift sticky-lg\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-list me-2\"></i>Récapitulatif
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
            yield "                            <div class=\"d-flex justify-content-between mb-2\">
                                <span>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
            yield " x";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
                                <span>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "subtotal", [], "any", false, false, false, 122), 2, ",", " "), "html", null, true);
            yield " €</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                        
                        <hr>
                        
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Sous-total HT :</span>
                            <span>";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 130, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>TVA (20%) :</span>
                            <span>";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 134, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</span>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <span class=\"fw-bold\">Total TTC :</span>
                            <span class=\"fw-bold price h5\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 139, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</span>
                        </div>
                        
                        <div class=\"alert alert-info small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Livraison gratuite en France métropolitaine
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
        return "cart/checkout.html.twig";
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
        return array (  267 => 139,  259 => 134,  252 => 130,  245 => 125,  236 => 122,  230 => 121,  227 => 120,  223 => 119,  191 => 92,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande - La Boutique Française{% endblock %}

{% block body %}
    <div class=\"container py-5 section\">
        <h1 class=\"mb-4\">
            <i class=\"fas fa-credit-card me-2\"></i>Finaliser la commande
        </h1>

        <div class=\"row\">
            <!-- Checkout Form -->
            <div class=\"col-lg-8\">
                <div class=\"card hover-lift\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-user me-2\"></i>Informations de livraison
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"{{ path('app_checkout_process') }}\">
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"firstName\" class=\"form-label\">Prénom *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"firstName\" name=\"firstName\" required>
                                </div>
                                <div class=\"col-md-6 mb-3\">
                                    <label for=\"lastName\" class=\"form-label\">Nom *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"lastName\" name=\"lastName\" required>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"email\" class=\"form-label\">Email *</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"address\" class=\"form-label\">Adresse *</label>
                                <input type=\"text\" class=\"form-control\" id=\"address\" name=\"address\" required>
                            </div>
                            
                            <div class=\"row\">
                                <div class=\"col-md-4 mb-3\">
                                    <label for=\"postalCode\" class=\"form-label\">Code postal *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"postalCode\" name=\"postalCode\" required>
                                </div>
                                <div class=\"col-md-8 mb-3\">
                                    <label for=\"city\" class=\"form-label\">Ville *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"city\" name=\"city\" required>
                                </div>
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"phone\" class=\"form-label\">Téléphone</label>
                                <input type=\"tel\" class=\"form-control\" id=\"phone\" name=\"phone\">
                            </div>
                            
                            <div class=\"mb-3\">
                                <label for=\"notes\" class=\"form-label\">Notes (optionnel)</label>
                                <textarea class=\"form-control\" id=\"notes\" name=\"notes\" rows=\"3\"></textarea>
                            </div>
                            
                            <hr class=\"my-4\">
                            <h5 class=\"mb-3\">
                                <i class=\"fas fa-credit-card me-2\"></i>Paiement par carte (Visa uniquement)
                            </h5>
                            <div class=\"alert alert-light border d-flex align-items-center\" role=\"alert\">
                                <i class=\"fab fa-cc-visa fa-2x text-primary me-2\"></i>
                                <div>
                                    Seules les cartes Visa sont acceptées. Aucune option d'espèces n'est disponible.
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-8 mb-3\">
                                    <label for=\"cardNumber\" class=\"form-label\">Numéro de carte (Visa) *</label>
                                    <input type=\"text\" inputmode=\"numeric\" pattern=\"[0-9\\s]*\" maxlength=\"19\" class=\"form-control\" id=\"cardNumber\" name=\"cardNumber\" placeholder=\"4XXX XXXX XXXX XXXX\" required>
                                </div>
                                <div class=\"col-md-4 mb-3\">
                                    <label for=\"cardHolder\" class=\"form-label\">Titulaire de la carte *</label>
                                    <input type=\"text\" class=\"form-control\" id=\"cardHolder\" name=\"cardHolder\" required>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-3 mb-3\">
                                    <label for=\"expiryMonth\" class=\"form-label\">Mois d'expiration</label>
                                    <input type=\"number\" min=\"1\" max=\"12\" class=\"form-control\" id=\"expiryMonth\" name=\"expiryMonth\" placeholder=\"MM\" required>
                                </div>
                                <div class=\"col-md-3 mb-3\">
                                    <label for=\"expiryYear\" class=\"form-label\">Année d'expiration</label>
                                    <input type=\"number\" min=\"{{ (\"now\"|date('Y')) }}\" max=\"{{ (\"now\"|date('Y') + 15) }}\" class=\"form-control\" id=\"expiryYear\" name=\"expiryYear\" placeholder=\"YYYY\" required>
                                </div>
                                <div class=\"col-md-3 mb-3\">
                                    <label for=\"cvc\" class=\"form-label\">CVC</label>
                                    <input type=\"number\" min=\"0\" max=\"9999\" class=\"form-control\" id=\"cvc\" name=\"cvc\" placeholder=\"***\" required>
                                </div>
                            </div>

                            <div class=\"d-grid\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                    <i class=\"fas fa-credit-card me-2\"></i>Payer par carte (Visa)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class=\"col-lg-4\">
                <div class=\"card hover-lift sticky-lg\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-list me-2\"></i>Récapitulatif
                        </h5>
                    </div>
                    <div class=\"card-body\">
                        {% for item in cart_items %}
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span>{{ item.product.name }} x{{ item.quantity }}</span>
                                <span>{{ item.subtotal|number_format(2, ',', ' ') }} €</span>
                            </div>
                        {% endfor %}
                        
                        <hr>
                        
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
                        
                        <div class=\"alert alert-info small\">
                            <i class=\"fas fa-info-circle me-1\"></i>
                            Livraison gratuite en France métropolitaine
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cart/checkout.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\cart\\checkout.html.twig");
    }
}
