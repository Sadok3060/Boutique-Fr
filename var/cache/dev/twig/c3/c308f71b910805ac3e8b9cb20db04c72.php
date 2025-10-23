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

/* base.html.twig */
class __TwigTemplate_ce4d77c33fb382449e96ac1d98934b28 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/css/custom.css\">
        
        

        ";
        // line 16
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 17
        yield "    </head>
    <body>
        <a href=\"#main-content\" class=\"visually-hidden-focusable px-3 py-2 bg-dark text-white rounded-2 ms-3 mt-2 d-inline-block\">Aller au contenu</a>
        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-dark sticky-top\" aria-label=\"Navigation principale\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                    La Boutique Française
                </a>
                
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Ouvrir le menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                                Accueil
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\">
                                Boutique
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">
                                À propos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">
                                Contact
                            </a>
                        </li>
                    </ul>
                    
                    <ul class=\"navbar-nav align-items-lg-center\">
                        <li class=\"nav-item position-relative\">
                            <a class=\"nav-link\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" aria-label=\"Voir le panier\">
                                Panier
                                ";
        // line 59
        $context["cartCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "get", ["cart", []], "method", false, false, false, 59));
        // line 60
        yield "                                ";
        if (((isset($context["cartCount"]) || array_key_exists("cartCount", $context) ? $context["cartCount"] : (function () { throw new RuntimeError('Variable "cartCount" does not exist.', 60, $this->source); })()) > 0)) {
            // line 61
            yield "                                    <span class=\"cart-badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cartCount"]) || array_key_exists("cartCount", $context) ? $context["cartCount"] : (function () { throw new RuntimeError('Variable "cartCount" does not exist.', 61, $this->source); })()), "html", null, true);
            yield "</span>
                                ";
        }
        // line 63
        yield "                            </a>
                        </li>
                        
                        ";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                                    ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "firstName", [], "any", false, false, false, 69), "html", null, true);
            yield "
                                </a>
                                <ul class=\"dropdown-menu\">
                                    ";
            // line 72
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                                        <li><a class=\"dropdown-item\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
                yield "\">
                                            Tableau de bord admin
                                        </a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 76
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_index");
                yield "\">
                                            Gérer les produits
                                        </a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 79
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
                yield "\">
                                            Gérer les catégories
                                        </a></li>
                                        <li><hr class=\"dropdown-divider\"></li>
                                    ";
            } else {
                // line 84
                yield "                                        <li><a class=\"dropdown-item\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dashboard");
                yield "\">
                                            Mon espace
                                        </a></li>
                                        <li><a class=\"dropdown-item\" href=\"";
                // line 87
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
                yield "\">
                                            Mon profil
                                        </a></li>
                                        <li><hr class=\"dropdown-divider\"></li>
                                    ";
            }
            // line 92
            yield "                                    <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                        Déconnexion
                                    </a></li>
                                </ul>
                            </li>
                        ";
        } else {
            // line 98
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" aria-label=\"Se connecter\">
                                    Connexion
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 104
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" aria-label=\"S'inscrire\">
                                    Inscription
                                </a>
                            </li>
                        ";
        }
        // line 109
        yield "                    </ul>
                </div>
            </div>
        </nav>

        <!-- Flash Messages -->
        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", [], "any", false, false, false, 115));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 116
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 117
                yield "                <div class=\"container mt-3\">
                    <div class=\"alert alert-";
                // line 118
                yield ((($context["label"] == "error")) ? ("danger") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true)));
                yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "
        <!-- Main Content -->
        <main id=\"main-content\" tabindex=\"-1\">
            ";
        // line 128
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 129
        yield "        </main>

        <!-- Footer -->
        <footer class=\"footer section\" aria-label=\"Pied de page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 mb-4\">
                        <h5>La Boutique Française</h5>
                        <p>Découvrez notre sélection de sacs et bijoux d'exception, fabriqués en France avec passion et savoir-faire.</p>
                        <div class=\"social-links\">
                            <a href=\"#\" class=\"me-3\">Facebook</a>
                            <a href=\"#\" class=\"me-3\">Instagram</a>
                            <a href=\"#\" class=\"me-3\">Twitter</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5>Liens utiles</h5>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                            <li><a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\">Boutique</a></li>
                            <li><a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">À propos</a></li>
                            <li><a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5>Informations</h5>
                        <ul class=\"list-unstyled\">
                            <li>123 Rue de la Mode, Paris</li>
                            <li>+33 1 23 45 67 89</li>
                            <li>contact@boutiquefrancaise.fr</li>
                        </ul>
                    </div>
                </div>
                <hr class=\"my-4\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>&copy; ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " La Boutique Française. Tous droits réservés.</p>
                    </div>
                    <div class=\"col-md-6 text-end\">
                        <a href=\"#\" class=\"me-3\">Mentions légales</a>
                        <a href=\"#\" class=\"me-3\">CGV</a>
                        <a href=\"#\">Politique de confidentialité</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        ";
        // line 179
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 180
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "La Boutique Française";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  428 => 179,  406 => 128,  384 => 16,  361 => 6,  348 => 180,  346 => 179,  329 => 165,  311 => 150,  307 => 149,  303 => 148,  299 => 147,  279 => 129,  277 => 128,  272 => 125,  266 => 124,  255 => 119,  251 => 118,  248 => 117,  243 => 116,  239 => 115,  231 => 109,  223 => 104,  215 => 99,  212 => 98,  202 => 92,  194 => 87,  187 => 84,  179 => 79,  173 => 76,  166 => 73,  164 => 72,  158 => 69,  154 => 67,  152 => 66,  147 => 63,  141 => 61,  138 => 60,  136 => 59,  131 => 57,  120 => 49,  112 => 44,  104 => 39,  96 => 34,  82 => 23,  74 => 17,  72 => 16,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>{% block title %}La Boutique Française{% endblock %}</title>
        
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Google Fonts -->
        <link href=\"https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/css/custom.css\">
        
        

        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <a href=\"#main-content\" class=\"visually-hidden-focusable px-3 py-2 bg-dark text-white rounded-2 ms-3 mt-2 d-inline-block\">Aller au contenu</a>
        <!-- Navigation -->
        <nav class=\"navbar navbar-expand-lg navbar-dark sticky-top\" aria-label=\"Navigation principale\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
                    La Boutique Française
                </a>
                
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Ouvrir le menu\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_home') }}\">
                                Accueil
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_products') }}\">
                                Boutique
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_about') }}\">
                                À propos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">
                                Contact
                            </a>
                        </li>
                    </ul>
                    
                    <ul class=\"navbar-nav align-items-lg-center\">
                        <li class=\"nav-item position-relative\">
                            <a class=\"nav-link\" href=\"{{ path('app_cart') }}\" aria-label=\"Voir le panier\">
                                Panier
                                {% set cartCount = app.session.get('cart', [])|length %}
                                {% if cartCount > 0 %}
                                    <span class=\"cart-badge\">{{ cartCount }}</span>
                                {% endif %}
                            </a>
                        </li>
                        
                        {% if app.user %}
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\">
                                    {{ app.user.firstName }}
                                </a>
                                <ul class=\"dropdown-menu\">
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li><a class=\"dropdown-item\" href=\"{{ path('admin_dashboard') }}\">
                                            Tableau de bord admin
                                        </a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('admin_product_index') }}\">
                                            Gérer les produits
                                        </a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('admin_category_index') }}\">
                                            Gérer les catégories
                                        </a></li>
                                        <li><hr class=\"dropdown-divider\"></li>
                                    {% else %}
                                        <li><a class=\"dropdown-item\" href=\"{{ path('user_dashboard') }}\">
                                            Mon espace
                                        </a></li>
                                        <li><a class=\"dropdown-item\" href=\"{{ path('user_profile') }}\">
                                            Mon profil
                                        </a></li>
                                        <li><hr class=\"dropdown-divider\"></li>
                                    {% endif %}
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                                        Déconnexion
                                    </a></li>
                                </ul>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_login') }}\" aria-label=\"Se connecter\">
                                    Connexion
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_register') }}\" aria-label=\"S'inscrire\">
                                    Inscription
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Flash Messages -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"container mt-3\">
                    <div class=\"alert alert-{{ label == 'error' ? 'danger' : label }} alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
                    </div>
                </div>
            {% endfor %}
        {% endfor %}

        <!-- Main Content -->
        <main id=\"main-content\" tabindex=\"-1\">
            {% block body %}{% endblock %}
        </main>

        <!-- Footer -->
        <footer class=\"footer section\" aria-label=\"Pied de page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 mb-4\">
                        <h5>La Boutique Française</h5>
                        <p>Découvrez notre sélection de sacs et bijoux d'exception, fabriqués en France avec passion et savoir-faire.</p>
                        <div class=\"social-links\">
                            <a href=\"#\" class=\"me-3\">Facebook</a>
                            <a href=\"#\" class=\"me-3\">Instagram</a>
                            <a href=\"#\" class=\"me-3\">Twitter</a>
                        </div>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5>Liens utiles</h5>
                        <ul class=\"list-unstyled\">
                            <li><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                            <li><a href=\"{{ path('app_products') }}\">Boutique</a></li>
                            <li><a href=\"{{ path('app_about') }}\">À propos</a></li>
                            <li><a href=\"{{ path('app_contact') }}\">Contact</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-4 mb-4\">
                        <h5>Informations</h5>
                        <ul class=\"list-unstyled\">
                            <li>123 Rue de la Mode, Paris</li>
                            <li>+33 1 23 45 67 89</li>
                            <li>contact@boutiquefrancaise.fr</li>
                        </ul>
                    </div>
                </div>
                <hr class=\"my-4\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>&copy; {{ \"now\"|date(\"Y\") }} La Boutique Française. Tous droits réservés.</p>
                    </div>
                    <div class=\"col-md-6 text-end\">
                        <a href=\"#\" class=\"me-3\">Mentions légales</a>
                        <a href=\"#\" class=\"me-3\">CGV</a>
                        <a href=\"#\">Politique de confidentialité</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
        
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\base.html.twig");
    }
}
