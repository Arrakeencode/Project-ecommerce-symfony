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

/* produits/index2.html.twig */
class __TwigTemplate_9f30da3011079cfb66a714c4b6cfc5ab3365435e55e0812583ee381a1f79e49e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'message' => [$this, 'block_message'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits/index2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "    ";
        $this->displayBlock('message', $context, $blocks);
        // line 9
        echo "    
    <div class=\"bg-light p-3\">
        <h1>Les produits</h1>
    </div>

    <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produits"]) {
            // line 16
            echo "            <div class=\"col-4 mt-4\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2>
                        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "
                        -
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "prix", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        €
                    </h2>
                    <img class=\"rounded float-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "image", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                    <hr>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-success float-right\">
                        <i class=\"fas fa-shopping-cart mr-1\"></i>
                        Ajouter
                    </a>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_like", ["id" => twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-link js-like\">
                        ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) && twig_get_attribute($this->env, $this->source, $context["produits"], "isLikedByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)], "method", false, false, false, 31))) {
                // line 32
                echo "                            <i class=\"fas fa-thumbs-up\"></i>
                        ";
            } else {
                // line 34
                echo "                            <i class=\"far fa-thumbs-up\"></i>
                        ";
            }
            // line 35
            echo "                                                
                        <span class=\"js-likes\">";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produits"], "id", [], "any", false, false, false, 36)), "html", null, true);
            echo "</span>
                        <span class=\"js-label\">J'aime</span>
                    </a>
                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        // line 4
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "succes"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["succes"]) {
            // line 5
            echo "                <div class=\"danger alert alert-danger\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $context["succes"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['succes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
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
        return "produits/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 46,  194 => 45,  184 => 9,  175 => 6,  172 => 5,  167 => 4,  157 => 3,  146 => 43,  133 => 36,  130 => 35,  126 => 34,  122 => 32,  120 => 31,  116 => 30,  109 => 26,  101 => 24,  95 => 21,  90 => 19,  85 => 16,  81 => 15,  73 => 9,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
    {% block message %}
            {% for succes in app.flashes('succes') %}
                <div class=\"danger alert alert-danger\">
                    {{ succes }}
                </div>
            {% endfor %}
    {% endblock %}    
    <div class=\"bg-light p-3\">
        <h1>Les produits</h1>
    </div>

    <div class=\"row\">
        {% for produits in produit %}
            <div class=\"col-4 mt-4\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2>
                        {{ produits.nom }}
                        -
                        {{ produits.prix }}
                        €
                    </h2>
                    <img class=\"rounded float-left\" src=\"{{ asset('img/') }}{{ produits.image }}\" alt=\"Image de {{ produits.nom }}\">
                    <hr>
                    <a href=\"{{ path('panier_add', {'id': produits.id}) }}\" class=\"btn btn-success float-right\">
                        <i class=\"fas fa-shopping-cart mr-1\"></i>
                        Ajouter
                    </a>
                    <a href=\"{{ path('produits_like', {'id': produits.id}) }}\" class=\"btn btn-link js-like\">
                        {% if app.user and produits.isLikedByUser(app.user) %}
                            <i class=\"fas fa-thumbs-up\"></i>
                        {% else %}
                            <i class=\"far fa-thumbs-up\"></i>
                        {% endif %}                                                
                        <span class=\"js-likes\">{{ produits.id | length }}</span>
                        <span class=\"js-label\">J'aime</span>
                    </a>
                </div>

            </div>
        {% endfor %}
    </div>
{% endblock %}
{% block javascripts %}
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
{% endblock %}", "produits/index2.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\produits\\index2.html.twig");
    }
}
