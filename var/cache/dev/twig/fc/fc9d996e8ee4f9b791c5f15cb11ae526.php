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

/* registration/register.html.twig */
class __TwigTemplate_6ea4ff2fe4ab2f52cfb1eaa9df839d2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Inscription";
        
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
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        yield "\">
    </head>
    <main id=\"main\" class=\"main-signup\">
        <!-- ======= Our login ======= -->
        <section class=\"section\">
            <div class=\"row d-flex justify-content-center align-items-center\" style=\"margin-top: 50px;\">
                <div class=\"col-lg-8\">
                    <div class=\"shadow p-3 mb-5 bg-white rounded\" style=\"padding: 20px;\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-flex justify-content-center align-items-center\">
                                <div class=\"form form-content\">
                                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                                    <h1 class=\"login-title\" style=\"color: #f26430\">Inscription</h1>

                                    <div class=\"field input-field\">
                                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "full_name", [], "any", false, false, false, 27), 'widget', ["attr" => ["placeholder" => "Nom complet", "class" => "input"]]);
        // line 29
        yield "
                                    </div>

                                    <div class=\"field input-field\">
                                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["placeholder" => "Email", "class" => "input"]]);
        // line 35
        yield "
                                    </div>

                                    <div class=\"field input-field\">
                                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "photo_profil", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control-file"]]);
        // line 41
        yield "
                                    </div>

                                    <div class=\"field input-field\">
                                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "plainPassword", [], "any", false, false, false, 45), 'widget', ["attr" => ["placeholder" => "Mot de passe", "class" => "password"]]);
        // line 47
        yield "
                                        <i class=\"bx bx-hide eye-icon\"></i>
                                    </div>

                                    <div class=\"field input-field\">
                                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "confirmPassword", [], "any", false, false, false, 52), 'widget', ["attr" => ["placeholder" => "Confirmer mot de passe", "class" => "password"]]);
        // line 54
        yield "
                                        <i class=\"bx bx-hide eye-icon\"></i>
                                    </div>

                                    <div class=\"field button-field\">
                                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                                    </div>
                                    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'form_end');
        yield "

                                    <div class=\"form-link\">
                                        <span>Vous avez déjà un compte?
                                            <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"link signup-link\">Se connecter</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 mt-3\">
                                <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client01.png"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 100%; height: auto;\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type=\"text/javascript\">
        document.addEventListener(\"DOMContentLoaded\", function() {
            const pwShowHide = document.querySelectorAll(\".eye-icon\");

            pwShowHide.forEach((eyeIcon) => {
                eyeIcon.addEventListener(\"click\", () => {
                    let pwFields = eyeIcon.closest('.input-field').querySelectorAll(\".password\");

                    pwFields.forEach((password) => {
                        if (password.type === \"password\") {
                            password.type = \"text\";
                            eyeIcon.classList.replace(\"bx-hide\", \"bx-show\");
                        } else {
                            password.type = \"password\";
                            eyeIcon.classList.replace(\"bx-show\", \"bx-hide\");
                        }
                    });
                });
            });
        });
    </script>
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
        return "registration/register.html.twig";
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
        return array (  185 => 71,  176 => 65,  169 => 61,  160 => 54,  158 => 52,  151 => 47,  149 => 45,  143 => 41,  141 => 39,  135 => 35,  133 => 33,  127 => 29,  125 => 27,  118 => 23,  104 => 12,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <title>Inscription!</title>
        <link href=\"{{ asset('js/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('js/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\" />
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
    </head>
    <main id=\"main\" class=\"main-signup\">
        <!-- ======= Our login ======= -->
        <section class=\"section\">
            <div class=\"row d-flex justify-content-center align-items-center\" style=\"margin-top: 50px;\">
                <div class=\"col-lg-8\">
                    <div class=\"shadow p-3 mb-5 bg-white rounded\" style=\"padding: 20px;\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 d-flex justify-content-center align-items-center\">
                                <div class=\"form form-content\">
                                    {{ form_start(registrationForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
                                    <h1 class=\"login-title\" style=\"color: #f26430\">Inscription</h1>

                                    <div class=\"field input-field\">
                                        {{ form_widget(registrationForm.full_name, {
                                            'attr': {'placeholder': 'Nom complet', 'class': 'input'}
                                        }) }}
                                    </div>

                                    <div class=\"field input-field\">
                                        {{ form_widget(registrationForm.email, {
                                            'attr': {'placeholder': 'Email', 'class': 'input'}
                                        }) }}
                                    </div>

                                    <div class=\"field input-field\">
                                        {{ form_widget(registrationForm.photo_profil, {
                                            'attr': {'class': 'form-control-file'}
                                        }) }}
                                    </div>

                                    <div class=\"field input-field\">
                                        {{ form_widget(registrationForm.plainPassword, {
                                            'attr': {'placeholder': 'Mot de passe', 'class': 'password'}
                                        }) }}
                                        <i class=\"bx bx-hide eye-icon\"></i>
                                    </div>

                                    <div class=\"field input-field\">
                                        {{ form_widget(registrationForm.confirmPassword, {
                                            'attr': {'placeholder': 'Confirmer mot de passe', 'class': 'password'}
                                        }) }}
                                        <i class=\"bx bx-hide eye-icon\"></i>
                                    </div>

                                    <div class=\"field button-field\">
                                        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
                                    </div>
                                    {{ form_end(registrationForm) }}

                                    <div class=\"form-link\">
                                        <span>Vous avez déjà un compte?
                                            <a href=\"{{ path('app_login') }}\" class=\"link signup-link\">Se connecter</a>
                                        </span>
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
    <script type=\"text/javascript\">
        document.addEventListener(\"DOMContentLoaded\", function() {
            const pwShowHide = document.querySelectorAll(\".eye-icon\");

            pwShowHide.forEach((eyeIcon) => {
                eyeIcon.addEventListener(\"click\", () => {
                    let pwFields = eyeIcon.closest('.input-field').querySelectorAll(\".password\");

                    pwFields.forEach((password) => {
                        if (password.type === \"password\") {
                            password.type = \"text\";
                            eyeIcon.classList.replace(\"bx-hide\", \"bx-show\");
                        } else {
                            password.type = \"password\";
                            eyeIcon.classList.replace(\"bx-show\", \"bx-hide\");
                        }
                    });
                });
            });
        });
    </script>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\registration\\register.html.twig");
    }
}
