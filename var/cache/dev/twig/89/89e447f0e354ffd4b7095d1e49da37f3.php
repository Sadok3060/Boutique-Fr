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

/* security/login.html.twig */
class __TwigTemplate_26b6b202a0d3b3013488b82d6776cf56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Connexion - La Boutique Française";
        
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
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"form-section\">
                    <div class=\"text-center mb-4\">
                        <h2 class=\"h3 mb-0\">
                            <i class=\"fas fa-sign-in-alt me-2\"></i>Connexion
                        </h2>
                        <p class=\"text-muted\">Connectez-vous à votre compte</p>
                    </div>

                    <form method=\"post\" class=\"needs-validation\" novalidate>
                        ";
        // line 18
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 24
        yield "
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <div class=\"mb-4\">
                            <label for=\"inputEmail\" class=\"form-label required-field\">Email</label>
                            <input type=\"email\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>

                        <div class=\"mb-4\">
                            <label for=\"inputPassword\" class=\"form-label required-field\">Mot de passe</label>
                            <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>

                        <div class=\"mb-4 form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\">
                            <label class=\"form-check-label\" for=\"remember_me\">
                                Se souvenir de moi
                            </label>
                        </div>

                        <div class=\"d-grid mb-4\">
                            <button class=\"btn btn-primary btn-lg\" type=\"submit\">
                                <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                            </button>
                        </div>

                        <hr class=\"my-4\">

                        <div class=\"text-center\">
                            <p class=\"mb-3\">Pas encore de compte ?</p>
                            <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-user-plus me-2\"></i>Créer un compte
                            </a>
                        </div>

                        <div class=\"text-center mt-4\">
                            <a href=\"#\" class=\"text-decoration-none small\">
                                <i class=\"fas fa-key me-1\"></i>Mot de passe oublié ?
                            </a>
                        </div>
                    </form>
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
        return "security/login.html.twig";
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
        return array (  164 => 54,  136 => 29,  129 => 25,  126 => 24,  120 => 21,  116 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion - La Boutique Française{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"form-section\">
                    <div class=\"text-center mb-4\">
                        <h2 class=\"h3 mb-0\">
                            <i class=\"fas fa-sign-in-alt me-2\"></i>Connexion
                        </h2>
                        <p class=\"text-muted\">Connectez-vous à votre compte</p>
                    </div>

                    <form method=\"post\" class=\"needs-validation\" novalidate>
                        {% if error %}
                            <div class=\"alert alert-danger\">
                                <i class=\"fas fa-exclamation-triangle me-2\"></i>
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <div class=\"mb-4\">
                            <label for=\"inputEmail\" class=\"form-label required-field\">Email</label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"_username\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                        </div>

                        <div class=\"mb-4\">
                            <label for=\"inputPassword\" class=\"form-label required-field\">Mot de passe</label>
                            <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>

                        <div class=\"mb-4 form-check\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\">
                            <label class=\"form-check-label\" for=\"remember_me\">
                                Se souvenir de moi
                            </label>
                        </div>

                        <div class=\"d-grid mb-4\">
                            <button class=\"btn btn-primary btn-lg\" type=\"submit\">
                                <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                            </button>
                        </div>

                        <hr class=\"my-4\">

                        <div class=\"text-center\">
                            <p class=\"mb-3\">Pas encore de compte ?</p>
                            <a href=\"{{ path('app_register') }}\" class=\"btn btn-outline-primary\">
                                <i class=\"fas fa-user-plus me-2\"></i>Créer un compte
                            </a>
                        </div>

                        <div class=\"text-center mt-4\">
                            <a href=\"#\" class=\"text-decoration-none small\">
                                <i class=\"fas fa-key me-1\"></i>Mot de passe oublié ?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "security/login.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\security\\login.html.twig");
    }
}
