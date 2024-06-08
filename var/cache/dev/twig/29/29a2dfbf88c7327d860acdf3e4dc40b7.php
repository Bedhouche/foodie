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

/* categorie/edit.html.twig */
class __TwigTemplate_67fbb95fcfc7999455e92d6aae48e7a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/edit.html.twig", 1);
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

        yield "Modifier Catégorie";
        
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
        <title>Modifier Catégorie</title>
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
        <style>
            .custom-file-input {
                color: transparent;
            }
            .custom-file-input::-webkit-file-upload-button {
                visibility: hidden;
            }
            .custom-file-input::before {
                content: 'Sélectionner une image ';
                color: #000000;
                background-color: #f5f5f5;
                display: inline-block;
                padding: 12px 100px;
                border-radius: 5px;
                cursor: pointer;
            }

            .color-picker-container {
                display: flex;
                align-items: center;
                margin-top: 10px;
            }
            .color-picker {
                width: 30px;
                height: 30px;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                margin-right: 10px;
                cursor: pointer;
            }

            .color-text {
                margin-left: 10px;
            }

            .custom-file-input:hover::before {
                background-color: rgb(208, 207, 207);
            }
            .custom-file-input:active::before {
                background-color: #d9dcd9;
            }

            .form-container {
                max-width: 600px; /* Taille maximale du rectangle */
                margin: 0 auto; /* Centrer le rectangle */
            }
        </style>
    </head>
    <main id=\"main\" class=\"main-signup\">
        <!-- ======= Our login ======= -->
        <section class=\"section d-flex justify-content-center\">
            <div class=\"form-container shadow p-3 mb-5 justify-content-center bg-white\" style=\"margin-top: 5rem\">
                <div class=\"form form-content\">
                    ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                    <h1 class=\"login-title\" style=\"color: #f26430\">Modifier Catégorie</h1>

                    <div class=\"field input-field\">
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "nom", [], "any", false, false, false, 70), 'widget', ["attr" => ["placeholder" => "Nom de la catégorie", "class" => "input"]]);
        // line 72
        yield "
                    </div>

                    <div class=\"field input-field\">
                        <div class=\"custom-file-container\">
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        yield "
                            <label class=\"custom-file-label\" for=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "image", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78), "html", null, true);
        yield "\"></label>
                        </div>
                    </div>

                    <div class=\"field input-field\">
                        <div class=\"\" style=\"margin-left: 20px;\"></div>
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "couleur", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "input", "type" => "hidden"]]);
        yield "
                    </div>

                    <div class=\"field button-field\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                    </div>

                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "

                    <div class=\"form-link\">
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" class=\"link signup-link\">Retour à la liste</a>
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

            // Color Picker
            const colorPicker = document.querySelector('.color-picker');
            const couleurInput = document.querySelector('input[name=\"categorie[couleur]\"]');

            colorPicker.addEventListener('click', () => {
                const couleur = prompt(\"Entrez une couleur (par exemple: #FF0000 pour rouge)\");

                if (couleur) {
                    couleurInput.value = couleur;
                    colorPicker.style.backgroundColor = couleur;
                }
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
        return "categorie/edit.html.twig";
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
        return array (  206 => 94,  200 => 91,  190 => 84,  181 => 78,  177 => 77,  170 => 72,  168 => 70,  161 => 66,  104 => 12,  99 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Catégorie{% endblock %}

{% block body %}
    <head>
        <meta charset=\"UTF-8\">
        <title>Modifier Catégorie</title>
        <link href=\"{{ asset('js/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('js/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\" />
        <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        <style>
            .custom-file-input {
                color: transparent;
            }
            .custom-file-input::-webkit-file-upload-button {
                visibility: hidden;
            }
            .custom-file-input::before {
                content: 'Sélectionner une image ';
                color: #000000;
                background-color: #f5f5f5;
                display: inline-block;
                padding: 12px 100px;
                border-radius: 5px;
                cursor: pointer;
            }

            .color-picker-container {
                display: flex;
                align-items: center;
                margin-top: 10px;
            }
            .color-picker {
                width: 30px;
                height: 30px;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                margin-right: 10px;
                cursor: pointer;
            }

            .color-text {
                margin-left: 10px;
            }

            .custom-file-input:hover::before {
                background-color: rgb(208, 207, 207);
            }
            .custom-file-input:active::before {
                background-color: #d9dcd9;
            }

            .form-container {
                max-width: 600px; /* Taille maximale du rectangle */
                margin: 0 auto; /* Centrer le rectangle */
            }
        </style>
    </head>
    <main id=\"main\" class=\"main-signup\">
        <!-- ======= Our login ======= -->
        <section class=\"section d-flex justify-content-center\">
            <div class=\"form-container shadow p-3 mb-5 justify-content-center bg-white\" style=\"margin-top: 5rem\">
                <div class=\"form form-content\">
                    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
                    <h1 class=\"login-title\" style=\"color: #f26430\">Modifier Catégorie</h1>

                    <div class=\"field input-field\">
                        {{ form_widget(form.nom, {
                            'attr': {'placeholder': 'Nom de la catégorie', 'class': 'input'}
                        }) }}
                    </div>

                    <div class=\"field input-field\">
                        <div class=\"custom-file-container\">
                            {{ form_widget(form.image, {'attr': {'class': 'custom-file-input'}}) }}
                            <label class=\"custom-file-label\" for=\"{{ form.image.vars.id }}\"></label>
                        </div>
                    </div>

                    <div class=\"field input-field\">
                        <div class=\"\" style=\"margin-left: 20px;\"></div>
                        {{ form_widget(form.couleur, {'attr': {'class': 'input', 'type': 'hidden'}}) }}
                    </div>

                    <div class=\"field button-field\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                    </div>

                    {{ form_end(form) }}

                    <div class=\"form-link\">
                        <a href=\"{{ path('app_categorie_index') }}\" class=\"link signup-link\">Retour à la liste</a>
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

            // Color Picker
            const colorPicker = document.querySelector('.color-picker');
            const couleurInput = document.querySelector('input[name=\"categorie[couleur]\"]');

            colorPicker.addEventListener('click', () => {
                const couleur = prompt(\"Entrez une couleur (par exemple: #FF0000 pour rouge)\");

                if (couleur) {
                    couleurInput.value = couleur;
                    colorPicker.style.backgroundColor = couleur;
                }
            });
        });
    </script>
{% endblock %}
", "categorie/edit.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\categorie\\edit.html.twig");
    }
}
