<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_c9db9e873073945cfbffb8f79531fa1f970d50ed04e09b818a4fd20db2c19e55 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'nav' => [$this, 'block_nav'],
            'flash' => [$this, 'block_flash'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo " ";
        $this->displayBlock('header', $context, $blocks);
        // line 111
        echo " ";
        $this->displayBlock('main', $context, $blocks);
        // line 338
        echo " ";
        $this->displayBlock('footer', $context, $blocks);
        // line 371
        echo "     ";
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>L'arômes des sens</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/tree.png"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/stylesbase.css"), "html", null, true);
        echo "\">  
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 20
        $this->displayBlock('nav', $context, $blocks);
        // line 78
        echo "                    
        ";
        // line 79
        $this->displayBlock('flash', $context, $blocks);
        // line 101
        echo "
        <div class=\"container bck1 padded\">
            ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "        </div>
                </div>
            </div>
        </div>
        
    </header>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 21
        echo "<body>
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"menu_icon\">
                                <i class=\"fas fa-bars\"></i>
                            </span>
                        </button>
                        <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link ";
        // line 36
        if ((isset($context["mainNavHome"]) || array_key_exists("mainNavHome", $context))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">Accueil</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "                                <li class=\"nav-item ";
            if ((isset($context["mainNavAdmin"]) || array_key_exists("mainNavAdmin", $context))) {
                echo "active";
            }
            echo "\">
                            <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
            echo "\">Espace admin</a>
                             </li>
                                ";
        }
        // line 44
        echo "                                <li class=\"nav-item \">
                                    <a class=\"nav-link\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Produits </a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\" id=\"navbarDropdown_3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">
                                        ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 54
            echo "                                        <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                                        ";
        } else {
            // line 56
            echo "                                        <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Inscription</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                                        ";
        }
        // line 59
        echo "                                        <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo "\">Mon panier</a>
                                        ";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 61
            echo "                                        <a class=\"dropdown-item ";
            if ((isset($context["mainNavCommand"]) || array_key_exists("mainNavCommand", $context))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("command");
            echo "\">Confirmation</a>
                                        ";
        }
        // line 63
        echo "                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex align-items-center\">
                            
                            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo "\">
                                <i class=\"flaticon-shopping-cart-black-shape\"></i>
                            </a>
                        </div>
                    </nav>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_flash($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        // line 80
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "get", [0 => "success"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 81
            echo "                <div class=\"container alert alert-success\" role=\"alert\">
                    ";
            // line 82
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "get", [0 => "info"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 86
            echo "                <div class=\"container alert alert-info\" role=\"alert\">
                    ";
            // line 87
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "flashbag", [], "any", false, false, false, 90), "get", [0 => "warning"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 91
            echo "                <div class=\"container alert alert-warning\" role=\"alert\">
                    ";
            // line 92
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "session", [], "any", false, false, false, 95), "flashbag", [], "any", false, false, false, 95), "get", [0 => "danger"], "method", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 96
            echo "                <div class=\"container alert alert-danger\" role=\"alert\">
                    ";
            // line 97
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 112
            echo "    <div class=\"alert alert-success\" role=\"alert\">
        ";
            // line 113
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 116
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 117
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-5\">
                    <div class=\"banner_text\">
                        <div class=\"banner_text_iner\">
                            <h1>Les saveurs de l'orient</h1>
                            <p>Elegantes et puissantes, vos sens en redemanderont</p>
                            <a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn_1\">découvrir nos produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"banner_img\">
            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-1.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
        </div>
    </section>
    <section class=\"single_product_list\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_product_iner\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <div class=\"single_product_img\">
                                    <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-2.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product_overlay.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">Issue des quatre coins de la planète de l'ouest
                                            à l'est, du nord au sud en passant par nos boutiques</a>
                                    </h2>
                                    <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn_3\">Ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_product_iner\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <div class=\"single_product_img\">
                                    <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-3.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product_overlay.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">A coeur ouvert de vous satisfaire</a>
                                    </h2>
                                    <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn_3\">Nos produits</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_product_iner\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <div class=\"single_product_img\">
                                    <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-4.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product_overlay.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">Favorisant l'agriculture responsable de nos
                                            terroirs</a>
                                    </h2>
                                    <a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn_3\">acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"trending_items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section_tittle text-center\">
                        <h2>Produits du moment</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <div class=\"single_product_item_thumb\">
                            <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-1.jpeg"), "html", null, true);
        echo "\" alt=\"lemon-oil\" class=\"img-fluid\">
                        </div>
                        <h3>
                            <a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Citronitron d'Italie</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-2.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Arbre à thé</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-3.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Lavande vraie</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-4.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Diffuse respi</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-5.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Gel antibactérien</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-6.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">aCerola vitamine C</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"client_review\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"client_review_slider owl-carousel\">
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client.png"), "html", null, true);
        echo "\" alt=\"#\">
                            </div>
                            <p>Boutique très bien située et charmante, aux éffluves de l'orient, toujours un plaisir de s'y rendre!</p>
                            <h5>- Dounia -</h5>
                        </div>
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client_1.png"), "html", null, true);
        echo "\" alt=\"#\">
                            </div>
                            <p>SAV, réactif et éfficace</p>
                            <h5>- Bryan -</h5>
                        </div>
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client_2.png"), "html", null, true);
        echo "\" alt=\"#\">
                            </div>
                            <p>Colis reçu le lendemain même, produit bien amballé, je recommande !</p>
                            <h5>- Guillaume -</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"feature_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-6\">
                    <div class=\"feature_part_tittle\">
                        <h3>D’Achillée millefeuille à Ylang-ylang, découvrez les vertus naturelles de l'aromathérapie. Pour chaque fiche sont présentées les indications et propriétés principales, les modes d'utilisation et les synergies possibles.</h3>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"feature_part_content\">
                        <p>TOUS nos extraits végétaux sont BIO, 100% naturels et de qualité exceptionnelle.</p>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_1.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>Support carte</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_2.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>Commande en ligne</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_3.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>Frais de port offerts</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_4.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>carte cadeaux</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 338
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 339
        echo " <div class=\"bootstrap-footer\">   
<footer class=\"page-footer font-small cyan darken-3\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 py-5\">
        <div class=\"mb-5 flex-center text-justify\">
          
          <a class=\"tw-ic\" href=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"gplus-ic\" href=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.google.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"li-ic\" href=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"ins-ic\" href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"pin-ic\" href=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.pinterest.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-pinterest fa-lg white-text fa-2x\"> </i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer-copyright text-center py-3\">© 2020 Copyright: Dounia, Adame, Bryan, Guillaume
    <a href=\"https://mdbootstrap.com/education/bootstrap/\"></a>
  </div>
</footer>
</footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 371
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 372
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptform.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptcommand.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.0/build/ol.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        function onClickBtnLike(event){
            event.preventDefault();
            const url = this.href;
            const spanCount = this.querySelector('span.js-likes');
            const icone = this.querySelector('i');
            axios.get(url).then(function(response){
                spanCount.textContent = response.data.likes;
                
                if(icone.classList.contains('fas')){
                     icone.classList.replace('fas', 'far');
                }
                else{
                    icone.classList.replace('far', 'fas');
                }
            }).catch(function(error){
                if(error.response.status === 403){
                    window.alert(\"Vous ne pouvez pas liker un article si vous n ete pas connecté\")
                }
                else {
                    window.alert(\"une erreur c est produite veuillez essayer plus tard\")
                }
            })
        }
        document.querySelectorAll('a.js-like').forEach(function(link){
            link.addEventListener('click', onClickBtnLike);
        })
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  951 => 390,  947 => 389,  943 => 388,  939 => 387,  935 => 386,  931 => 385,  927 => 384,  923 => 383,  919 => 382,  915 => 381,  911 => 380,  907 => 379,  903 => 378,  899 => 377,  895 => 376,  891 => 375,  887 => 374,  883 => 373,  878 => 372,  868 => 371,  845 => 358,  839 => 355,  833 => 352,  827 => 349,  821 => 346,  812 => 339,  802 => 338,  784 => 331,  775 => 325,  766 => 319,  757 => 313,  727 => 286,  717 => 279,  707 => 272,  690 => 258,  685 => 256,  676 => 250,  671 => 248,  662 => 242,  657 => 240,  648 => 234,  643 => 232,  634 => 226,  629 => 224,  620 => 218,  614 => 215,  589 => 193,  583 => 190,  574 => 184,  570 => 183,  558 => 174,  553 => 172,  544 => 166,  540 => 165,  528 => 156,  522 => 153,  513 => 147,  509 => 146,  495 => 135,  485 => 128,  475 => 120,  466 => 117,  463 => 116,  458 => 115,  449 => 113,  446 => 112,  432 => 111,  422 => 104,  412 => 103,  402 => 100,  393 => 97,  390 => 96,  385 => 95,  376 => 92,  373 => 91,  368 => 90,  359 => 87,  356 => 86,  351 => 85,  342 => 82,  339 => 81,  334 => 80,  324 => 79,  308 => 72,  299 => 66,  294 => 63,  284 => 61,  282 => 60,  277 => 59,  272 => 57,  267 => 56,  261 => 54,  259 => 53,  255 => 52,  248 => 48,  242 => 45,  239 => 44,  233 => 41,  226 => 40,  224 => 39,  214 => 36,  200 => 27,  192 => 21,  182 => 20,  166 => 105,  164 => 103,  160 => 101,  158 => 79,  155 => 78,  153 => 20,  143 => 19,  130 => 17,  126 => 16,  122 => 15,  118 => 14,  114 => 13,  110 => 12,  106 => 11,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  83 => 2,  73 => 1,  62 => 371,  59 => 338,  56 => 111,  53 => 19,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>L'arômes des sens</title>
    <link rel=\"icon\" href=\"{{ asset ('img/tree.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/all.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/stylesbase.css') }}\">  
</head>
{% endblock %} {% block header %}
{% block nav %}
<body>
    <header class=\"main_menu home_menu\">
        <div class=\"container\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-lg-12\">
                    <nav class=\"navbar navbar-expand-lg navbar-light\">
                        <a class=\"navbar-brand\" href=\"{{ path ('pirate')}}\"> <img src=\"{{ asset ('img/logo.png')}}\" alt=\"logo\"></a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"menu_icon\">
                                <i class=\"fas fa-bars\"></i>
                            </span>
                        </button>
                        <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link {% if mainNavHome is defined %}active{% endif %}\" href=\"{{ path ('pirate')}}\">Accueil</a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item {% if mainNavAdmin is defined %}active{% endif %}\">
                            <a class=\"nav-link\" href=\"{{path('pirate')}}\">Espace admin</a>
                             </li>
                                {% endif %}
                                <li class=\"nav-item \">
                                    <a class=\"nav-link\" href=\"{{ path ('produits')}}\">Produits </a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"{{ path ('pirate')}}\" id=\"navbarDropdown_3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                    <a class=\"dropdown-item\" href=\"{{ path ('pirate')}}\">
                                        {% if is_granted('ROLE_USER') %}
                                        <a class=\"dropdown-item\" href=\"{{path('fos_user_security_logout')}}\">Déconnexion</a>
                                        {% else %}
                                        <a class=\"dropdown-item\" href=\"{{path('fos_user_registration_register')}}\">Inscription</a>
                                        <a class=\"dropdown-item\" href=\"{{path('fos_user_security_login')}}\">Connexion</a>
                                        {% endif %}
                                        <a class=\"dropdown-item\" href=\"{{ path ('panier_index')}}\">Mon panier</a>
                                        {% if is_granted('ROLE_USER') %}
                                        <a class=\"dropdown-item {% if mainNavCommand is defined %}active{% endif %}\" href=\"{{ path ('command')}}\">Confirmation</a>
                                        {% endif %}
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path ('formulaire')}}\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex align-items-center\">
                            
                            <a href=\"{{ path ('panier_index')}}\">
                                <i class=\"flaticon-shopping-cart-black-shape\"></i>
                            </a>
                        </div>
                    </nav>
                    {% endblock %}
                    
        {% block flash %}
            {% for flash_message in app.session.flashbag.get('success') %}
                <div class=\"container alert alert-success\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('info') %}
                <div class=\"container alert alert-info\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('warning') %}
                <div class=\"container alert alert-warning\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('danger') %}
                <div class=\"container alert alert-danger\" role=\"alert\">
                    {{ flash_message }}
                </div>
            {% endfor %}
        {% endblock %}

        <div class=\"container bck1 padded\">
            {% block body %}
            {% endblock %}
        </div>
                </div>
            </div>
        </div>
        
    </header>
    {% endblock %} {% block main %} {% for message in app.flashes('success') %}
    <div class=\"alert alert-success\" role=\"alert\">
        {{ message }}
    </div>
    {% endfor %} {% for message in app.flashes('error') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        {{ message }}
    </div>
    {% endfor %}
    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-5\">
                    <div class=\"banner_text\">
                        <div class=\"banner_text_iner\">
                            <h1>Les saveurs de l'orient</h1>
                            <p>Elegantes et puissantes, vos sens en redemanderont</p>
                            <a href=\"{{ path ('produits') }}\" class=\"btn_1\">découvrir nos produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"banner_img\">
            <img src=\"{{ asset ('img/gal-1.jpeg') }}\" alt=\"#\" class=\"img-fluid\">
        </div>
    </section>
    <section class=\"single_product_list\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"single_product_iner\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <div class=\"single_product_img\">
                                    <img src=\"{{ asset ('img/gal-2.jpeg') }}\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"{{ asset ('img/product_overlay.png') }}\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"{{ path ('pirate') }}\">Issue des quatre coins de la planète de l'ouest
                                            à l'est, du nord au sud en passant par nos boutiques</a>
                                    </h2>
                                    <a href=\"{{ path ('produits') }}\" class=\"btn_3\">Ici</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_product_iner\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <div class=\"single_product_img\">
                                    <img src=\"{{ asset ('img/gal-3.jpeg') }}\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"{{ asset ('img/product_overlay.png') }}\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"{{ path ('pirate') }}\">A coeur ouvert de vous satisfaire</a>
                                    </h2>
                                    <a href=\"{{ path ('produits') }}\" class=\"btn_3\">Nos produits</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_product_iner\">
                        <div class=\"row align-items-center justify-content-between\">
                            <div class=\"col-lg-6 col-sm-6\">
                                <div class=\"single_product_img\">
                                    <img src=\"{{ asset ('img/gal-4.jpeg') }}\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"{{ asset ('img/product_overlay.png') }}\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"{{ path ('pirate') }}\">Favorisant l'agriculture responsable de nos
                                            terroirs</a>
                                    </h2>
                                    <a href=\"{{ path ('produits') }}\" class=\"btn_3\">acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"trending_items\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section_tittle text-center\">
                        <h2>Produits du moment</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <div class=\"single_product_item_thumb\">
                            <img src=\"{{ asset ('img/oil-1.jpeg') }}\" alt=\"lemon-oil\" class=\"img-fluid\">
                        </div>
                        <h3>
                            <a href=\"{{ path ('produits') }}\">Citronitron d'Italie</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"{{ asset ('img/oil-2.jpeg') }}\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"{{ path ('produits') }}\">Arbre à thé</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"{{ asset ('img/oil-3.jpeg') }}\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"{{ path ('produits') }}\">Lavande vraie</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"{{ asset ('img/oil-4.jpeg') }}\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"{{ path ('produits') }}\">Diffuse respi</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"{{ asset ('img/oil-5.jpeg') }}\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"{{ path ('produits') }}\">Gel antibactérien</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"{{ asset ('img/oil-6.jpeg') }}\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"{{ path ('produits') }}\">aCerola vitamine C</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"client_review\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"client_review_slider owl-carousel\">
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"{{ asset ('img/client.png') }}\" alt=\"#\">
                            </div>
                            <p>Boutique très bien située et charmante, aux éffluves de l'orient, toujours un plaisir de s'y rendre!</p>
                            <h5>- Dounia -</h5>
                        </div>
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"{{ asset ('img/client_1.png') }}\" alt=\"#\">
                            </div>
                            <p>SAV, réactif et éfficace</p>
                            <h5>- Bryan -</h5>
                        </div>
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"{{ asset ('img/client_2.png') }}\" alt=\"#\">
                            </div>
                            <p>Colis reçu le lendemain même, produit bien amballé, je recommande !</p>
                            <h5>- Guillaume -</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"feature_part section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-6\">
                    <div class=\"feature_part_tittle\">
                        <h3>D’Achillée millefeuille à Ylang-ylang, découvrez les vertus naturelles de l'aromathérapie. Pour chaque fiche sont présentées les indications et propriétés principales, les modes d'utilisation et les synergies possibles.</h3>
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"feature_part_content\">
                        <p>TOUS nos extraits végétaux sont BIO, 100% naturels et de qualité exceptionnelle.</p>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"{{ asset ('img/icon/feature_icon_1.svg') }}\" alt=\"#\">
                        <h4>Support carte</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"{{ asset ('img/icon/feature_icon_2.svg') }}\" alt=\"#\">
                        <h4>Commande en ligne</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"{{ asset ('img/icon/feature_icon_3.svg') }}\" alt=\"#\">
                        <h4>Frais de port offerts</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"{{ asset ('img/icon/feature_icon_4.svg') }}\" alt=\"#\">
                        <h4>carte cadeaux</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {% endblock %} {% block footer %}
 <div class=\"bootstrap-footer\">   
<footer class=\"page-footer font-small cyan darken-3\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 py-5\">
        <div class=\"mb-5 flex-center text-justify\">
          
          <a class=\"tw-ic\" href=\"{{ asset ('https://www.twitter.com/')}}\">
            <i class=\"fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"gplus-ic\" href=\"{{ asset ('https://www.google.com/')}}\">
            <i class=\"fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"li-ic\" href=\"{{ asset ('https://www.facebook.com/')}}\">
            <i class=\"fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"ins-ic\" href=\"{{ asset ('https://www.instagram.com/')}}\">
            <i class=\"fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"pin-ic\" href=\"{{ asset ('https://www.pinterest.com/')}}\">
            <i class=\"fab fa-pinterest fa-lg white-text fa-2x\"> </i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class=\"footer-copyright text-center py-3\">© 2020 Copyright: Dounia, Adame, Bryan, Guillaume
    <a href=\"https://mdbootstrap.com/education/bootstrap/\"></a>
  </div>
</footer>
</footer>
    {% endblock %}
     {% block javascript %}
    <script src=\"{{ asset ('js/jquery-1.12.1.min.js')}}\"></script>
    <script src=\"{{ asset ('js/scriptform.js')}}\"></script>
    <script src=\"{{ asset ('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset ('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery.magnific-popup.js') }}\"></script>
    <script src=\"{{ asset ('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery.nice-select.min.js') }}\"></script>
    <script src=\"{{ asset ('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery.counterup.min.js') }}\"></script>
    <script src=\"{{ asset ('js/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset ('js/contact.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery.ajaxchimp.min.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery.form.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset ('js/mail-script.js') }}\"></script>
    <script src=\"{{ asset ('js/custom.js') }}\"></script>
    <script src=\"{{ asset ('js/scriptcommand.js') }}\"></script>
    <script src=\"{{ asset ('https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.0/build/ol.js')}}\"></script>
    <script src=\"{{ asset ('https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList')}}\"></script>
    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        function onClickBtnLike(event){
            event.preventDefault();
            const url = this.href;
            const spanCount = this.querySelector('span.js-likes');
            const icone = this.querySelector('i');
            axios.get(url).then(function(response){
                spanCount.textContent = response.data.likes;
                
                if(icone.classList.contains('fas')){
                     icone.classList.replace('fas', 'far');
                }
                else{
                    icone.classList.replace('far', 'fas');
                }
            }).catch(function(error){
                if(error.response.status === 403){
                    window.alert(\"Vous ne pouvez pas liker un article si vous n ete pas connecté\")
                }
                else {
                    window.alert(\"une erreur c est produite veuillez essayer plus tard\")
                }
            })
        }
        document.querySelectorAll('a.js-like').forEach(function(link){
            link.addEventListener('click', onClickBtnLike);
        })
    </script>
    {% endblock %}", "base.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\base.html.twig");
    }
}
