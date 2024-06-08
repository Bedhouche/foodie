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

/* base.html.twig */
class __TwigTemplate_738dc6421c6dc179a15b350e1492a3ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />

    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- CSS Files -->
    <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <!-- Template Main CSS File -->
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/general.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styleAcceuil.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ProduitCart.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/queries.css"), "html", null, true);
        yield "\" />
    <!-- Boxicons CSS -->
    <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
    <link rel=\"icon\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        yield "\" />
    <link rel=\"apple-touch-icon\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        yield "\" />
    <link rel=\"manifest\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.webmanifest"), "html", null, true);
        yield "\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" />
    <link
            href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\"
            rel=\"stylesheet\"
    />
    ";
        // line 29
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "</head>

<body>
";
        // line 33
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 55
        yield "
<main id=\"main\">
    ";
        // line 57
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 58
        yield "</main>

";
        // line 60
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 126
        yield "
<!-- Template Main JS File -->
<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
<!-- Additional JS Files -->
<script type=\"module\" src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js\"></script>
<script nomodule=\"\" src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js\"></script>
<script defer src=\"https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js\"></script>
<script defer src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
";
        // line 134
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 135
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Foodie";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 33
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 34
        yield "    <header class=\"header\">
        <a href=\"#\">
            <img class=\"\" alt=\"Foodie logo\" style=\"width: 20rem;\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/Foodie-removebg-preview.png"), "html", null, true);
        yield "\" />
        </a>

        <nav class=\"main-nav\">
            <ul class=\"main-nav-list\">
                <li><a class=\"main-nav-link\" href=\"#how\">How it works</a></li>
                <li><a class=\"main-nav-link\" href=\"#Menu\">Menu</a></li>
                <li><a class=\"main-nav-link\" href=\"#pricing\">Pricing</a></li>
                <li><a class=\"main-nav-link nav-cta\" href=\"#cta\">Connexion</a></li>
                <li><a class=\"main-nav-link1 nav-cta1\" href=\"#cta\">S'inscrire</a></li>
            </ul>
        </nav>

        <button class=\"btn-mobile-nav\">
            <ion-icon class=\"icon-mobile-nav\" name=\"menu-outline\"></ion-icon>
            <ion-icon class=\"icon-mobile-nav\" name=\"close-outline\"></ion-icon>
        </button>
    </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 60
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        yield "    <footer class=\"footer\">
        <div class=\"container grid grid--footer\">
            <div class=\"logo-col\">
                <a href=\"#\" class=\"\">
                    <img class=\"\" alt=\"Foodie logo\" style=\"width: 7rem;\" src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/Foodie-removebg-preview.png"), "html", null, true);
        yield "\" />
                </a>

                <ul class=\"social-links\">
                    <li>
                        <a class=\"footer-link\" href=\"#\"
                        ><ion-icon class=\"social-icon\" name=\"logo-instagram\"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a class=\"footer-link\" href=\"#\"
                        ><ion-icon class=\"social-icon\" name=\"logo-facebook\"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a class=\"footer-link\" href=\"#\"
                        ><ion-icon class=\"social-icon\" name=\"logo-twitter\"></ion-icon
                            ></a>
                    </li>
                </ul>

                <p class=\"copyright\">
                    Copyright &copy; <span class=\"year\">2023</span> by foodie, Inc.
                    All rights reserved.
                </p>
            </div>

            <div class=\"address-col\">
                <p class=\"footer-heading\">Contact us</p>
                <address class=\"contacts\">
                    <p class=\"address\">La rochelle</p>
                    <p>
                        <a class=\"footer-link\" href=\"tel:+213562178072\">+213562178072</a
                        ><br />
                        <a class=\"footer-link\" href=\"mailto:hello@omnifood.com\"
                        >hello@foodie.com</a
                        >
                    </p>
                </address>
            </div>

            <nav class=\"nav-col\">
                <p class=\"footer-heading\">Company</p>
                <ul class=\"footer-nav\">
                    <li><a class=\"footer-link\" href=\"#\">About Foodie</a></li>
                    <li><a class=\"footer-link\" href=\"#\">For Business</a></li>

                </ul>
            </nav>

            <nav class=\"nav-col\">
                <p class=\"footer-heading\">Resources</p>
                <ul class=\"footer-nav\">

                    <li><a class=\"footer-link\" href=\"#\">Help center</a></li>
                    <li><a class=\"footer-link\" href=\"#\">Privacy & terms</a></li>
                </ul>
            </nav>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  355 => 134,  283 => 65,  277 => 61,  267 => 60,  248 => 57,  218 => 36,  214 => 34,  204 => 33,  185 => 29,  165 => 7,  152 => 135,  150 => 134,  146 => 133,  138 => 128,  134 => 126,  132 => 60,  128 => 58,  126 => 57,  122 => 55,  120 => 33,  115 => 30,  113 => 29,  104 => 23,  100 => 22,  96 => 21,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  73 => 13,  68 => 11,  64 => 10,  58 => 7,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />

    <title>{% block title %}Foodie{% endblock %}</title>

    <!-- CSS Files -->
    <link href=\"{{ asset('js/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('js/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\" />
    <!-- Template Main CSS File -->
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" />
    <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/general.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/styleAcceuil.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/ProduitCart.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/queries.css') }}\" />
    <!-- Boxicons CSS -->
    <link href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\" rel=\"stylesheet\" />
    <link rel=\"icon\" href=\"{{ asset('img/favicon.png') }}\" />
    <link rel=\"apple-touch-icon\" href=\"{{ asset('img/apple-touch-icon.png') }}\" />
    <link rel=\"manifest\" href=\"{{ asset('manifest.webmanifest') }}\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" />
    <link
            href=\"https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap\"
            rel=\"stylesheet\"
    />
    {% block stylesheets %}{% endblock %}
</head>

<body>
{% block header %}
    <header class=\"header\">
        <a href=\"#\">
            <img class=\"\" alt=\"Foodie logo\" style=\"width: 20rem;\" src=\"{{ asset('/img/Foodie-removebg-preview.png') }}\" />
        </a>

        <nav class=\"main-nav\">
            <ul class=\"main-nav-list\">
                <li><a class=\"main-nav-link\" href=\"#how\">How it works</a></li>
                <li><a class=\"main-nav-link\" href=\"#Menu\">Menu</a></li>
                <li><a class=\"main-nav-link\" href=\"#pricing\">Pricing</a></li>
                <li><a class=\"main-nav-link nav-cta\" href=\"#cta\">Connexion</a></li>
                <li><a class=\"main-nav-link1 nav-cta1\" href=\"#cta\">S'inscrire</a></li>
            </ul>
        </nav>

        <button class=\"btn-mobile-nav\">
            <ion-icon class=\"icon-mobile-nav\" name=\"menu-outline\"></ion-icon>
            <ion-icon class=\"icon-mobile-nav\" name=\"close-outline\"></ion-icon>
        </button>
    </header>
{% endblock %}

<main id=\"main\">
    {% block body %}{% endblock %}
</main>

{% block footer %}
    <footer class=\"footer\">
        <div class=\"container grid grid--footer\">
            <div class=\"logo-col\">
                <a href=\"#\" class=\"\">
                    <img class=\"\" alt=\"Foodie logo\" style=\"width: 7rem;\" src=\"{{ asset('/img/Foodie-removebg-preview.png') }}\" />
                </a>

                <ul class=\"social-links\">
                    <li>
                        <a class=\"footer-link\" href=\"#\"
                        ><ion-icon class=\"social-icon\" name=\"logo-instagram\"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a class=\"footer-link\" href=\"#\"
                        ><ion-icon class=\"social-icon\" name=\"logo-facebook\"></ion-icon
                            ></a>
                    </li>
                    <li>
                        <a class=\"footer-link\" href=\"#\"
                        ><ion-icon class=\"social-icon\" name=\"logo-twitter\"></ion-icon
                            ></a>
                    </li>
                </ul>

                <p class=\"copyright\">
                    Copyright &copy; <span class=\"year\">2023</span> by foodie, Inc.
                    All rights reserved.
                </p>
            </div>

            <div class=\"address-col\">
                <p class=\"footer-heading\">Contact us</p>
                <address class=\"contacts\">
                    <p class=\"address\">La rochelle</p>
                    <p>
                        <a class=\"footer-link\" href=\"tel:+213562178072\">+213562178072</a
                        ><br />
                        <a class=\"footer-link\" href=\"mailto:hello@omnifood.com\"
                        >hello@foodie.com</a
                        >
                    </p>
                </address>
            </div>

            <nav class=\"nav-col\">
                <p class=\"footer-heading\">Company</p>
                <ul class=\"footer-nav\">
                    <li><a class=\"footer-link\" href=\"#\">About Foodie</a></li>
                    <li><a class=\"footer-link\" href=\"#\">For Business</a></li>

                </ul>
            </nav>

            <nav class=\"nav-col\">
                <p class=\"footer-heading\">Resources</p>
                <ul class=\"footer-nav\">

                    <li><a class=\"footer-link\" href=\"#\">Help center</a></li>
                    <li><a class=\"footer-link\" href=\"#\">Privacy & terms</a></li>
                </ul>
            </nav>
        </div>
    </footer>
{% endblock %}

<!-- Template Main JS File -->
<script src=\"{{ asset('js/main.js') }}\"></script>
<!-- Additional JS Files -->
<script type=\"module\" src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js\"></script>
<script nomodule=\"\" src=\"https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js\"></script>
<script defer src=\"https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js\"></script>
<script defer src=\"{{ asset('js/script.js') }}\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\Rania\\Downloads\\ProjetArmel\\foodie\\templates\\base.html.twig");
    }
}
