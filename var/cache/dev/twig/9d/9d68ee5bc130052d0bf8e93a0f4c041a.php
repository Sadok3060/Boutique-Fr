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

/* security/register.html.twig */
class __TwigTemplate_eaaf397e7a03119d5eba38e732962c96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Inscription - La Boutique Française";
        
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
            <div class=\"col-lg-10\">
                <div class=\"form-section\">
                    <div class=\"text-center mb-5\">
                        <h2 class=\"h3 mb-0\">
                            <i class=\"fas fa-user-plus me-2\"></i>Créer un compte
                        </h2>
                        <p class=\"text-muted\">Rejoignez La Boutique Française</p>
                    </div>

                    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-4\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), 'row');
        yield "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-4\">
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "phone", [], "any", false, false, false, 32), 'row');
        yield "
                            </div>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "address", [], "any", false, false, false, 37), 'row');
        yield "
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-4 mb-4\">
                                ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "postalCode", [], "any", false, false, false, 42), 'row');
        yield "
                            </div>
                            <div class=\"col-md-4 mb-4\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "city", [], "any", false, false, false, 45), 'row');
        yield "
                            </div>
                            <div class=\"col-md-4 mb-4\">
                                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "country", [], "any", false, false, false, 48), 'row');
        yield "
                            </div>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "plainPassword", [], "any", false, false, false, 53), 'row');
        yield "
                        </div>

                        

                        <div class=\"mb-4 form-check\">
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "agreeTerms", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-check-input"], "label_attr" => ["class" => "form-check-label"]]);
        // line 62
        yield "
                        </div>

                        <div class=\"d-grid mb-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i class=\"fas fa-user-plus me-2\"></i>Créer mon compte
                            </button>
                        </div>
                    ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), 'form_end');
        yield "

                    <hr class=\"my-4\">

                    <div class=\"text-center\">
                        <p class=\"mb-3\">Déjà un compte ?</p>
                        <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                        </a>
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
        return "security/register.html.twig";
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
        return array (  206 => 76,  197 => 70,  187 => 62,  185 => 59,  176 => 53,  168 => 48,  162 => 45,  156 => 42,  148 => 37,  140 => 32,  134 => 29,  125 => 23,  119 => 20,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription - La Boutique Française{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"form-section\">
                    <div class=\"text-center mb-5\">
                        <h2 class=\"h3 mb-0\">
                            <i class=\"fas fa-user-plus me-2\"></i>Créer un compte
                        </h2>
                        <p class=\"text-muted\">Rejoignez La Boutique Française</p>
                    </div>

                    {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-4\">
                                {{ form_row(registrationForm.firstName) }}
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                {{ form_row(registrationForm.lastName) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-4\">
                                {{ form_row(registrationForm.email) }}
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                {{ form_row(registrationForm.phone) }}
                            </div>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_row(registrationForm.address) }}
                        </div>

                        <div class=\"row\">
                            <div class=\"col-md-4 mb-4\">
                                {{ form_row(registrationForm.postalCode) }}
                            </div>
                            <div class=\"col-md-4 mb-4\">
                                {{ form_row(registrationForm.city) }}
                            </div>
                            <div class=\"col-md-4 mb-4\">
                                {{ form_row(registrationForm.country) }}
                            </div>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_row(registrationForm.plainPassword) }}
                        </div>

                        

                        <div class=\"mb-4 form-check\">
                            {{ form_row(registrationForm.agreeTerms, {
                                'attr': {'class': 'form-check-input'},
                                'label_attr': {'class': 'form-check-label'}
                            }) }}
                        </div>

                        <div class=\"d-grid mb-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">
                                <i class=\"fas fa-user-plus me-2\"></i>Créer mon compte
                            </button>
                        </div>
                    {{ form_end(registrationForm) }}

                    <hr class=\"my-4\">

                    <div class=\"text-center\">
                        <p class=\"mb-3\">Déjà un compte ?</p>
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-sign-in-alt me-2\"></i>Se connecter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %} ", "security/register.html.twig", "D:\\laragon\\www\\BoutiqueProd-Sadok\\templates\\security\\register.html.twig");
    }
}
