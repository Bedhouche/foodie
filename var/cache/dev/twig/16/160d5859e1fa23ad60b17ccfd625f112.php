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

/* produit/index.html.twig */
class __TwigTemplate_d976171f7f97a6882ebbbc4840aaa480 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield "    <link href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/general.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ProduitCart.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/queries.css"), "html", null, true);
        yield "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js\"></script>
    <script nomodule src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js\"></script>
    <script defer src=\"https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js\"></script>
    <script defer src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        yield "    <main>
        <section class=\"section-meals\" id=\"Menu\">
            <div class=\"container center-text\">
                <span class=\"subheading\">Produits</span>
                <div class=\"shop\">
                    <h2 class=\"heading-secondary\">Produits de la catégorie</h2>
                    <div class=\"shopping-cart-container\">
                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        yield "\">
                            <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/shopping.svg"), "html", null, true);
        yield "\" class=\"shopping-cart\" alt=\"Shopping Cart\" />
                            <span class=\"quantity\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"container grid grid--3-cols margin-bottom-md\" style=\"margin-top: 7rem\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 37
            yield "                    <div class=\"meal1\" >
                        <img src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 38))), "html", null, true);
            yield "\" class=\"meal-img1\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 38), "html", null, true);
            yield "\" />
                        <div class=\"meal-content1\">
                            <p class=\"meal-title1\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                            <div class=\"meal-ingredients1\">
                                ";
            // line 42
            yield CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "ingredients", [], "any", false, false, false, 42);
            yield "
                            </div>
                            ";
            // line 44
            $context["prixDivise"] = (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 44) / 100);
            // line 45
            yield "                            <p class=\"meal-price1\">€";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prixDivise"]) || array_key_exists("prixDivise", $context) ? $context["prixDivise"] : (function () { throw new RuntimeError('Variable "prixDivise" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn cart\">Ajouter au panier</a>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            yield "                    <p>Aucun produit trouvé.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
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
        return "produit/index.html.twig";
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
        return array (  209 => 52,  202 => 50,  193 => 46,  188 => 45,  186 => 44,  181 => 42,  176 => 40,  169 => 38,  166 => 37,  161 => 36,  151 => 29,  147 => 28,  143 => 27,  134 => 20,  124 => 19,  111 => 16,  106 => 13,  96 => 12,  83 => 9,  79 => 8,  75 => 7,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block stylesheets %}
    <link href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\" rel=\"stylesheet\" />
    <link href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/general.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/ProduitCart.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/queries.css') }}\" />
{% endblock %}

{% block javascripts %}
    <script type=\"module\" src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js\"></script>
    <script nomodule src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js\"></script>
    <script defer src=\"https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js\"></script>
    <script defer src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}

{% block body %}
    <main>
        <section class=\"section-meals\" id=\"Menu\">
            <div class=\"container center-text\">
                <span class=\"subheading\">Produits</span>
                <div class=\"shop\">
                    <h2 class=\"heading-secondary\">Produits de la catégorie</h2>
                    <div class=\"shopping-cart-container\">
                        <a href=\"{{ path('panier_index') }}\">
                            <img src=\"{{ asset('img/shopping.svg') }}\" class=\"shopping-cart\" alt=\"Shopping Cart\" />
                            <span class=\"quantity\">{{ totalQuantity }}</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class=\"container grid grid--3-cols margin-bottom-md\" style=\"margin-top: 7rem\">
                {% for produit in produits %}
                    <div class=\"meal1\" >
                        <img src=\"{{ asset('uploads/' ~ produit.image) }}\" class=\"meal-img1\" alt=\"{{ produit.nom }}\" />
                        <div class=\"meal-content1\">
                            <p class=\"meal-title1\">{{ produit.nom }}</p>
                            <div class=\"meal-ingredients1\">
                                {{ produit.ingredients | raw }}
                            </div>
                            {% set prixDivise = produit.prix / 100 %}
                            <p class=\"meal-price1\">€{{ prixDivise }}</p>
                            <a href=\"{{ path('panier_add', {id: produit.id}) }}\" class=\"btn cart\">Ajouter au panier</a>
                        </div>
                    </div>
                {% else %}
                    <p>Aucun produit trouvé.</p>
                {% endfor %}

            </div>
        </section>
    </main>
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\produit\\index.html.twig");
    }
}
