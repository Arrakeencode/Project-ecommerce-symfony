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
class __TwigTemplate_5d4b5cd6fb0fa4ad513be977b889531d90fd84b9331aebd27b5f07c07430d618 extends \Twig\Template
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
        // line 106
        echo " ";
        $this->displayBlock('main', $context, $blocks);
        // line 333
        echo " ";
        $this->displayBlock('footer', $context, $blocks);
        // line 366
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
        // line 73
        echo "                    
        ";
        // line 74
        $this->displayBlock('flash', $context, $blocks);
        // line 96
        echo "
        <div class=\"container bck1 padded\">
            ";
        // line 98
        $this->displayBlock('body', $context, $blocks);
        // line 100
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
                                <li class=\"nav-item \">
                                    <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Produits </a>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\" id=\"navbarDropdown_3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown_2\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">
                                        ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 49
            echo "                                        <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                                        ";
        } else {
            // line 51
            echo "                                        <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Inscription</a>
                                        <a class=\"dropdown-item\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                                        ";
        }
        // line 54
        echo "                                        <a class=\"dropdown-item\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
        echo "\">Mon panier</a>
                                        ";
        // line 55
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 56
            echo "                                        <a class=\"dropdown-item ";
            if ((isset($context["mainNavCommand"]) || array_key_exists("mainNavCommand", $context))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("command");
            echo "\">Confirmation</a>
                                        ";
        }
        // line 58
        echo "                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire");
        echo "\">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"hearer_icon d-flex align-items-center\">
                            
                            <a href=\"";
        // line 67
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

    // line 74
    public function block_flash($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flash"));

        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "session", [], "any", false, false, false, 75), "flashbag", [], "any", false, false, false, 75), "get", [0 => "success"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 76
            echo "                <div class=\"container alert alert-success\" role=\"alert\">
                    ";
            // line 77
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "session", [], "any", false, false, false, 80), "flashbag", [], "any", false, false, false, 80), "get", [0 => "info"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 81
            echo "                <div class=\"container alert alert-info\" role=\"alert\">
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "flashbag", [], "any", false, false, false, 85), "get", [0 => "warning"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 86
            echo "                <div class=\"container alert alert-warning\" role=\"alert\">
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "session", [], "any", false, false, false, 90), "flashbag", [], "any", false, false, false, 90), "get", [0 => "danger"], "method", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 91
            echo "                <div class=\"container alert alert-danger\" role=\"alert\">
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
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 99
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 107
            echo "    <div class=\"alert alert-success\" role=\"alert\">
        ";
            // line 108
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 112
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    <section class=\"banner_part\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-5\">
                    <div class=\"banner_text\">
                        <div class=\"banner_text_iner\">
                            <h1>Les saveurs de l'orient</h1>
                            <p>Elegantes et puissantes, vos sens en redemanderont</p>
                            <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\" class=\"btn_1\">découvrir nos produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"banner_img\">
            <img src=\"";
        // line 130
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
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-2.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product_overlay.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">Issue des quatre coins de la planète de l'ouest
                                            à l'est, du nord au sud en passant par nos boutiques</a>
                                    </h2>
                                    <a href=\"";
        // line 151
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
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-3.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product_overlay.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">A coeur ouvert de vous satisfaire</a>
                                    </h2>
                                    <a href=\"";
        // line 169
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
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/gal-4.jpeg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"#\">
                                    <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product_overlay.png"), "html", null, true);
        echo "\" alt=\"#\" class=\"product_overlay img-fluid\">
                                </div>
                            </div>
                            <div class=\"col-lg-5 col-sm-6\">
                                <div class=\"single_product_content\">
                                    <h2>
                                        <a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pirate");
        echo "\">Favorisant l'agriculture responsable de nos
                                            terroirs</a>
                                    </h2>
                                    <a href=\"";
        // line 188
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
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-1.jpeg"), "html", null, true);
        echo "\" alt=\"lemon-oil\" class=\"img-fluid\">
                        </div>
                        <h3>
                            <a href=\"";
        // line 213
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Citronitron d'Italie</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-2.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Arbre à thé</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-3.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 229
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Lavande vraie</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-4.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Diffuse respi</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-5.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 245
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits");
        echo "\">Gel antibactérien</a>
                        </h3>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6\">
                    <div class=\"single_product_item\">
                        <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/oil-6.jpeg"), "html", null, true);
        echo "\" alt=\"#\" class=\"img-fluid\">
                        <h3>
                            <a href=\"";
        // line 253
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
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client.png"), "html", null, true);
        echo "\" alt=\"#\">
                            </div>
                            <p>Boutique très bien située et charmante, aux éffluves de l'orient, toujours un plaisir de s'y rendre!</p>
                            <h5>- Dounia -</h5>
                        </div>
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/client_1.png"), "html", null, true);
        echo "\" alt=\"#\">
                            </div>
                            <p>SAV, réactif et éfficace</p>
                            <h5>- Bryan -</h5>
                        </div>
                        <div class=\"single_client_review\">
                            <div class=\"client_img\">
                                <img src=\"";
        // line 281
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
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_1.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>Support carte</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_2.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>Commande en ligne</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/feature_icon_3.svg"), "html", null, true);
        echo "\" alt=\"#\">
                        <h4>Frais de port offerts</h4>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_part\">
                        <img src=\"";
        // line 326
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

    // line 333
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 334
        echo " <div class=\"bootstrap-footer\">   
<footer class=\"page-footer font-small cyan darken-3\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 py-5\">
        <div class=\"mb-5 flex-center text-justify\">
          
          <a class=\"tw-ic\" href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"gplus-ic\" href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.google.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"li-ic\" href=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"ins-ic\" href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com/"), "html", null, true);
        echo "\">
            <i class=\"fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x\"> </i>
          </a>
          <a class=\"pin-ic\" href=\"";
        // line 353
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

    // line 366
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 367
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptform.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scriptcommand.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.0/build/ol.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 385
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
        return array (  934 => 385,  930 => 384,  926 => 383,  922 => 382,  918 => 381,  914 => 380,  910 => 379,  906 => 378,  902 => 377,  898 => 376,  894 => 375,  890 => 374,  886 => 373,  882 => 372,  878 => 371,  874 => 370,  870 => 369,  866 => 368,  861 => 367,  851 => 366,  828 => 353,  822 => 350,  816 => 347,  810 => 344,  804 => 341,  795 => 334,  785 => 333,  767 => 326,  758 => 320,  749 => 314,  740 => 308,  710 => 281,  700 => 274,  690 => 267,  673 => 253,  668 => 251,  659 => 245,  654 => 243,  645 => 237,  640 => 235,  631 => 229,  626 => 227,  617 => 221,  612 => 219,  603 => 213,  597 => 210,  572 => 188,  566 => 185,  557 => 179,  553 => 178,  541 => 169,  536 => 167,  527 => 161,  523 => 160,  511 => 151,  505 => 148,  496 => 142,  492 => 141,  478 => 130,  468 => 123,  458 => 115,  449 => 112,  446 => 111,  441 => 110,  432 => 108,  429 => 107,  415 => 106,  405 => 99,  395 => 98,  385 => 95,  376 => 92,  373 => 91,  368 => 90,  359 => 87,  356 => 86,  351 => 85,  342 => 82,  339 => 81,  334 => 80,  325 => 77,  322 => 76,  317 => 75,  307 => 74,  291 => 67,  282 => 61,  277 => 58,  267 => 56,  265 => 55,  260 => 54,  255 => 52,  250 => 51,  244 => 49,  242 => 48,  238 => 47,  231 => 43,  225 => 40,  214 => 36,  200 => 27,  192 => 21,  182 => 20,  166 => 100,  164 => 98,  160 => 96,  158 => 74,  155 => 73,  153 => 20,  143 => 19,  130 => 17,  126 => 16,  122 => 15,  118 => 14,  114 => 13,  110 => 12,  106 => 11,  102 => 10,  98 => 9,  94 => 8,  90 => 7,  83 => 2,  73 => 1,  62 => 366,  59 => 333,  56 => 106,  53 => 19,  51 => 1,);
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
