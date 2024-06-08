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

/* security/profil.html.twig */
class __TwigTemplate_5a6031e599fe5fa75e04a2ce68f3f9c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/profil.html.twig", 1);
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

        yield "Profil";
        
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
        yield "    <head>
        <meta charset=\"UTF-8\">
        <title>Inscription!</title>
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
        yield "\">
    </head>
    <main id=\"main\" class=\"main-profile\">
        <div class=\"container light-style flex-grow-1 container-p-y\">
            <h2 class=\"font-weight-bold py-4 mb-5\" style=\"font-size: 2.5rem;\">Account settings</h2>
            <div class=\"card overflow-hidden\" style=\"border: 2px solid #ddd; border-radius: 10px;\">
                <div class=\"row no-gutters row-bordered row-border-light\">
                    <div class=\"col-md-12\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade active show\" id=\"account-general\">
                                <div class=\"card-body media align-items-center\">
                                    ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "getPhotoProfil", [], "method", false, false, false, 25)) {
            // line 26
            yield "                                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getPhotoProfil", [], "method", false, false, false, 26))), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"d-block ui-w-120\" style=\"width: 120px; height: 120px; border-radius: 50%;\">
                                    ";
        } else {
            // line 28
            yield "                                        <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt class=\"d-block ui-w-120\" style=\"width: 120px; height: 120px; border-radius: 50%;\">
                                    ";
        }
        // line 30
        yield "                                    <div class=\"media-body ml-5\">
                                        <label class=\"btn btn-outline-primary\" style=\"color: #f26430; border: 1px solid #f26430; font-size: 1.25rem;\">
                                            Upload new photo
                                            <input type=\"file\" class=\"account-settings-fileinput\">
                                        </label>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-primary ml-4\" style=\"background-color: #f26430; border: 2px solid #f26430; font-size: 1.25rem;\">
                                        Déconnexion
                                    </button>
                                </div>
                                <hr class=\"border-light m-0\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <b><label class=\"form-label\" style=\"font-size: 1.5rem;\">Nom complet</label></b>
                                        <p class=\"form-control-plaintext\" style=\"font-size: 1.25rem;\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "fullName", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <b><label class=\"form-label\" style=\"font-size: 1.5rem;\">E-mail</label></b>
                                        <p class=\"form-control-plaintext\" style=\"font-size: 1.25rem;\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <b><label class=\"form-label\" style=\"font-size: 1.5rem;\">Date de création du compte :</label></b>
                                        <p class=\"form-control-plaintext\" style=\"font-size: 1.25rem;\">";
        // line 52
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "dateInscription", [], "any", false, false, false, 52)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "dateInscription", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true)) : (yield "N/A"));
        yield "</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profile");
        yield "\" class=\"btn btn-primary\" style=\"background-color: #f26430; border: 2px solid #f26430; font-size: 1.25rem;\">Modifier le profil</a>
                                        &nbsp;
                                        <button type=\"button\" class=\"btn btn-default\" style=\"font-size: 1.25rem;\">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "security/profil.html.twig";
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
        return array (  168 => 55,  162 => 52,  155 => 48,  148 => 44,  132 => 30,  128 => 28,  122 => 26,  120 => 25,  106 => 14,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil{% endblock %}

{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <title>Inscription!</title>
        <link href=\"{{ asset('js/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('js/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\" />
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/profile.css') }}\">
    </head>
    <main id=\"main\" class=\"main-profile\">
        <div class=\"container light-style flex-grow-1 container-p-y\">
            <h2 class=\"font-weight-bold py-4 mb-5\" style=\"font-size: 2.5rem;\">Account settings</h2>
            <div class=\"card overflow-hidden\" style=\"border: 2px solid #ddd; border-radius: 10px;\">
                <div class=\"row no-gutters row-bordered row-border-light\">
                    <div class=\"col-md-12\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade active show\" id=\"account-general\">
                                <div class=\"card-body media align-items-center\">
                                    {% if user.getPhotoProfil() %}
                                        <img src=\"{{ asset('uploads/' ~ user.getPhotoProfil()) }}\" alt=\"Photo de profil\" class=\"d-block ui-w-120\" style=\"width: 120px; height: 120px; border-radius: 50%;\">
                                    {% else %}
                                        <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt class=\"d-block ui-w-120\" style=\"width: 120px; height: 120px; border-radius: 50%;\">
                                    {% endif %}
                                    <div class=\"media-body ml-5\">
                                        <label class=\"btn btn-outline-primary\" style=\"color: #f26430; border: 1px solid #f26430; font-size: 1.25rem;\">
                                            Upload new photo
                                            <input type=\"file\" class=\"account-settings-fileinput\">
                                        </label>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-primary ml-4\" style=\"background-color: #f26430; border: 2px solid #f26430; font-size: 1.25rem;\">
                                        Déconnexion
                                    </button>
                                </div>
                                <hr class=\"border-light m-0\">
                                <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <b><label class=\"form-label\" style=\"font-size: 1.5rem;\">Nom complet</label></b>
                                        <p class=\"form-control-plaintext\" style=\"font-size: 1.25rem;\">{{ user.fullName }}</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <b><label class=\"form-label\" style=\"font-size: 1.5rem;\">E-mail</label></b>
                                        <p class=\"form-control-plaintext\" style=\"font-size: 1.25rem;\">{{ user.email }}</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <b><label class=\"form-label\" style=\"font-size: 1.5rem;\">Date de création du compte :</label></b>
                                        <p class=\"form-control-plaintext\" style=\"font-size: 1.25rem;\">{{ user.dateInscription ? user.dateInscription|date('d/m/Y') : 'N/A' }}</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <a href=\"{{ path('app_edit_profile') }}\" class=\"btn btn-primary\" style=\"background-color: #f26430; border: 2px solid #f26430; font-size: 1.25rem;\">Modifier le profil</a>
                                        &nbsp;
                                        <button type=\"button\" class=\"btn btn-default\" style=\"font-size: 1.25rem;\">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "security/profil.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\security\\profil.html.twig");
    }
}
