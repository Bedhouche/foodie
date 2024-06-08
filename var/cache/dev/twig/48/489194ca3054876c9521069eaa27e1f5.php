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

/* categorie/index.html.twig */
class __TwigTemplate_00443adabb768529b5771c157b58fe72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
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

        yield "Categorie index";
        
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
        yield "    <h1>Categorie index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Image</th>
                <th>Couleur</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            yield "            <tr>
                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "image", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "couleur", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            yield "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\">Create new</a>

    <section class=\"section-meals\" id=\"Menu\">
        <div class=\"container center-text\">
            <span class=\"subheading\">Menu</span>
            <h2 class=\"heading-secondary\">
                Savourez Plus de 1000 Recettes Sélectionnées par R&A Cuisine
            </h2>
        </div>
        <div class=\"container grid grid--3-cols margin-bottom-md\">
            <div class=\"meal\">
                <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/meal-1.jpg"), "html", null, true);
        yield "\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">tikokkk</p>
            </div>
            <div class=\"meal\">
                <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/meal-1.jpg"), "html", null, true);
        yield "\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Dessert</p>
            </div>
            <div class=\"meal\">
                <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/meal-1.jpg"), "html", null, true);
        yield "\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Plat</p>
            </div>
            <div class=\"meal\">
                <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/meal-1.jpg"), "html", null, true);
        yield "\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Plat</p>
            </div>
            <div class=\"meal\">
                <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/meal-1.jpg"), "html", null, true);
        yield "\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Salade</p>
            </div>
        </div>
        <div class=\"container all-recipes\">
            <a href=\"#\" class=\"link\">Decouvrez tout Nos plats &rarr;</a>
        </div>
    </section>
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
        return "categorie/index.html.twig";
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
        return array (  215 => 81,  204 => 73,  193 => 65,  182 => 57,  171 => 49,  157 => 38,  152 => 35,  143 => 31,  134 => 27,  130 => 26,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  110 => 20,  105 => 19,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categorie index{% endblock %}

{% block body %}
    <h1>Categorie index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Image</th>
                <th>Couleur</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for categorie in categories %}
            <tr>
                <td>{{ categorie.id }}</td>
                <td>{{ categorie.nom }}</td>
                <td>{{ categorie.image }}</td>
                <td>{{ categorie.couleur }}</td>
                <td>
                    <a href=\"{{ path('app_categorie_show', {'id': categorie.id}) }}\">show</a>
                    <a href=\"{{ path('app_categorie_edit', {'id': categorie.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_categorie_new') }}\">Create new</a>

    <section class=\"section-meals\" id=\"Menu\">
        <div class=\"container center-text\">
            <span class=\"subheading\">Menu</span>
            <h2 class=\"heading-secondary\">
                Savourez Plus de 1000 Recettes Sélectionnées par R&A Cuisine
            </h2>
        </div>
        <div class=\"container grid grid--3-cols margin-bottom-md\">
            <div class=\"meal\">
                <img src=\"{{ asset('img/meal-1.jpg') }}\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">tikokkk</p>
            </div>
            <div class=\"meal\">
                <img src=\"{{ asset('img/meal-1.jpg') }}\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Dessert</p>
            </div>
            <div class=\"meal\">
                <img src=\"{{ asset('img/meal-1.jpg') }}\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Plat</p>
            </div>
            <div class=\"meal\">
                <img src=\"{{ asset('img/meal-1.jpg') }}\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Plat</p>
            </div>
            <div class=\"meal\">
                <img src=\"{{ asset('img/meal-1.jpg') }}\" class=\"meal-img\" alt=\"Japanese Gyozas\" />
                <div class=\"meal-content\">
                    <a href=\"#\">Decouvrir</a>
                    <a href=\"#\"><i class=\"bx bx-right-arrow-circle\"></i></a>
                </div>
                <p class=\"meal-title\">Salade</p>
            </div>
        </div>
        <div class=\"container all-recipes\">
            <a href=\"#\" class=\"link\">Decouvrez tout Nos plats &rarr;</a>
        </div>
    </section>
{% endblock %}


", "categorie/index.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\categorie\\index.html.twig");
    }
}
