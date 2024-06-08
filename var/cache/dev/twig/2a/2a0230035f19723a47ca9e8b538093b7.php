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

/* security/login.html.twig */
class __TwigTemplate_6a35a34871690cd071bd43abab740adb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <main id=\"main\" class=\"main-login\">
        <section class=\"section\">
            <div class=\"row d-flex justify-content-center align-items-center\" style=\"margin-top: 50px;\">
                <div class=\"col-lg-8\">
                    <div class=\"shadow p-3 mb-5 bg-white rounded\" style=\"padding: 20px;\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-flex justify-content-center align-items-center\">
                                <div class=\"form form-content\">
                                    <form action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                                        <h1 class=\"login-title\" style=\"color: #f26430\">Connexion</h1>
                                        ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            yield "                                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            yield "</div>
                                        ";
        }
        // line 19
        yield "                                        <div class=\"field input-field\">
                                            <input type=\"email\" placeholder=\"Email\" name=\"email\" class=\"input\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\" autocomplete=\"email\" required autofocus />
                                        </div>

                                        <div class=\"field input-field\">
                                            <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" class=\"password\" autocomplete=\"current-password\" required />
                                            <i class=\"bx bx-hide eye-icon\"></i>
                                        </div>

                                        <div class=\"field button-field\">
                                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\" />
                                    </form>

                                    <div class=\"form-link\">
                                        <span>Vous n'avez pas un compte? <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"link signup-link\">S'inscrire</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mt-3\">
                                <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client01.png"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 100%; height: auto;\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  145 => 40,  137 => 35,  130 => 31,  116 => 20,  113 => 19,  107 => 17,  105 => 16,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}
    <main id=\"main\" class=\"main-login\">
        <section class=\"section\">
            <div class=\"row d-flex justify-content-center align-items-center\" style=\"margin-top: 50px;\">
                <div class=\"col-lg-8\">
                    <div class=\"shadow p-3 mb-5 bg-white rounded\" style=\"padding: 20px;\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-flex justify-content-center align-items-center\">
                                <div class=\"form form-content\">
                                    <form action=\"{{ path('app_login') }}\" method=\"post\">
                                        <h1 class=\"login-title\" style=\"color: #f26430\">Connexion</h1>
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}
                                        <div class=\"field input-field\">
                                            <input type=\"email\" placeholder=\"Email\" name=\"email\" class=\"input\" value=\"{{ last_username }}\" autocomplete=\"email\" required autofocus />
                                        </div>

                                        <div class=\"field input-field\">
                                            <input type=\"password\" name=\"password\" placeholder=\"Mot de passe\" class=\"password\" autocomplete=\"current-password\" required />
                                            <i class=\"bx bx-hide eye-icon\"></i>
                                        </div>

                                        <div class=\"field button-field\">
                                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />
                                    </form>

                                    <div class=\"form-link\">
                                        <span>Vous n'avez pas un compte? <a href=\"{{ path('app_register') }}\" class=\"link signup-link\">S'inscrire</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mt-3\">
                                <img src=\"{{ asset('img/client01.png') }}\" alt=\"\" style=\"width: 100%; height: auto;\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\security\\login.html.twig");
    }
}
