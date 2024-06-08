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

/* Panier/index.html.twig */
class __TwigTemplate_fd996f96096ea9e55afb6b842bf75448 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Panier/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>Panier</h1>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 20
            yield "                        <tr>
                            <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 22), "prix", [], "any", false, false, false, 22) / 100), "html", null, true);
            yield " €</td>
                            <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                            <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 24) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 24), "prix", [], "any", false, false, false, 24)) / 100), "html", null, true);
            yield " €</td>
                            <td>
                                <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-success\">+</a>
                                <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">-</a>
                                <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "produit", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                    ";
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()))) {
            // line 33
            yield "                        <tr>
                            <td colspan=\"5\">Votre panier est vide</td>
                        </tr>
                    ";
        }
        // line 37
        yield "                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"3\">Total</td>
                        <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 41, $this->source); })()), "html", null, true);
        yield " €</td>
                        <td>
                            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_vide");
        yield "\" class=\"btn btn-danger\">Vider</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_add");
        yield "\" class=\"btn btn-primary\">Valider le panier</a>
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
        return "Panier/index.html.twig";
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
        return array (  156 => 48,  148 => 43,  143 => 41,  137 => 37,  131 => 33,  128 => 32,  118 => 28,  114 => 27,  110 => 26,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  90 => 20,  86 => 19,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>Panier</h1>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for element in data %}
                        <tr>
                            <td>{{ element.produit.nom }}</td>
                            <td>{{ element.produit.prix / 100 }} €</td>
                            <td>{{ element.quantite }}</td>
                            <td>{{ element.quantite * element.produit.prix / 100 }} €</td>
                            <td>
                                <a href=\"{{ path('panier_add', {id: element.produit.id}) }}\" class=\"btn btn-success\">+</a>
                                <a href=\"{{ path('panier_remove', {id: element.produit.id}) }}\" class=\"btn btn-warning\">-</a>
                                <a href=\"{{ path('panier_delete', {id: element.produit.id}) }}\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                    {% if data is empty %}
                        <tr>
                            <td colspan=\"5\">Votre panier est vide</td>
                        </tr>
                    {% endif %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"3\">Total</td>
                        <td>{{ total }} €</td>
                        <td>
                            <a href=\"{{ path('panier_vide') }}\" class=\"btn btn-danger\">Vider</a>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <a href=\"{{ path('commande_add') }}\" class=\"btn btn-primary\">Valider le panier</a>
            </div>
        </section>
    </main>
{% endblock %}
", "Panier/index.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\Panier\\index.html.twig");
    }
}
