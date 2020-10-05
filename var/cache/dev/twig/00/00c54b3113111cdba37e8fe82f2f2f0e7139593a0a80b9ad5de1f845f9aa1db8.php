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

/* panier/index2.html.twig */
class __TwigTemplate_0a2c0ed3d6dc71b949c73b72c57e8767b9e2bb52e7e6bd1c8f26062b57b5158a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index2.html.twig", 1);
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
        echo "  

<section class=\"cart_area section_padding\">
    <div class=\"container\">
      <div class=\"cart_inner\">
        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Total</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/"), "html", null, true);
                    echo "\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 29), "description", [], "any", false, false, false, 29), "html", null, true);
                    echo "</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 34), "prix", [], "any", false, false, false, 34), "html", null, true);
                    echo "</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    
                    <span class=\"input-number-decrement\"> <i class=\"ti-minus\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-plus\"></i></span>
                  </div>
                </td>
               <td>
                <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_subtract", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 49
$context["item"], "produits", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]), "html", null, true);
                    // line 52
                    echo "\"
                  class=\"btn\">
                  Enlever un article
                </a>
              </td>
              </tr>
              
              <tr class=\"bottom_button\">
                <td>
                  <a class=\"btn_1\" href=\"#\">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class=\"cupon_text float-right\">
                    <a class=\"btn_1\" href=\"#\">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>";
                }
                // line 73
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td></td>
                <td>
                  <h5>";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "</h5>
                </td>
                
              </tr>
              <tr class=\"shipping_area\">
                <td></td>
                <td></td>
                <td>
              
                    
          <div class=\"checkout_btn_inner float-right\">
            <a class=\"btn_1\" href=\"#\">Continue Shopping</a>
            <a class=\"btn_1 checkout_btn_1\" href=\"#\">Proceed to checkout</a>
          </div>
        </div>
        ";
        } else {
            // line 92
            echo "          <h1> Votre panier est vide </h1>
      </div>
  </section>
  ";
        }
        // line 96
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 96,  185 => 92,  166 => 76,  156 => 73,  133 => 52,  131 => 49,  130 => 45,  116 => 34,  108 => 29,  102 => 26,  96 => 22,  93 => 21,  88 => 20,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block main %}
  

<section class=\"cart_area section_padding\">
    <div class=\"container\">
      <div class=\"cart_inner\">
        <div class=\"table-responsive\">
          <table class=\"table\">
            <thead>
              <tr>
                <th scope=\"col\">Produit</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Total</th>
              </tr>
            </thead>
            <tbody>
            {% if (items|length) > 0 %}
            {% for item in items %}
            {% if item.produits is not null %}
              <tr>
                <td>
                  <div class=\"media\">
                    <div class=\"d-flex\">
                      <img src=\"{{ asset ('img/')}}\" alt=\"\" />
                    </div>
                    <div class=\"media-body\">
                      <p>{{ item.produits.description }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>{{ item.produits.prix }}</h5>
                </td>
                <td>
                  <div class=\"product_count\">
                    
                    <span class=\"input-number-decrement\"> <i class=\"ti-minus\"></i></span>
                    <input class=\"input-number\" type=\"text\" value=\"1\" min=\"0\" max=\"10\">
                    <span class=\"input-number-increment\"> <i class=\"ti-plus\"></i></span>
                  </div>
                </td>
               <td>
                <a href=\"{{
                  path(
                    'panier_subtract',
                    {
                      id: item.produits.id
                    }
                  )
                  }}\"
                  class=\"btn\">
                  Enlever un article
                </a>
              </td>
              </tr>
              
              <tr class=\"bottom_button\">
                <td>
                  <a class=\"btn_1\" href=\"#\">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class=\"cupon_text float-right\">
                    <a class=\"btn_1\" href=\"#\">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>{% endif %}
        {% endfor %}</td>
                <td></td>
                <td>
                  <h5>{{ totalPrice }}</h5>
                </td>
                
              </tr>
              <tr class=\"shipping_area\">
                <td></td>
                <td></td>
                <td>
              
                    
          <div class=\"checkout_btn_inner float-right\">
            <a class=\"btn_1\" href=\"#\">Continue Shopping</a>
            <a class=\"btn_1 checkout_btn_1\" href=\"#\">Proceed to checkout</a>
          </div>
        </div>
        {% else %}
          <h1> Votre panier est vide </h1>
      </div>
  </section>
  {% endif %}
  {% endblock %}", "panier/index2.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\panier\\index2.html.twig");
    }
}
