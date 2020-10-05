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

/* panier/index.html.twig */
class __TwigTemplate_dcd822f812246660d5441647a14b25d756f3fe6f7cf085dd6576cfd2321c9cae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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
        echo "<section class=\"cart_area section_padding\">
  <div class=\"container\">
   <div class=\"cart_inner\">
    <div class=\"table-responsive\">
     <div>
      <h1>Votre panier</h1>
      </div>
        ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "          <table class=\"table\">
            <thead>
              <tr>
                <th>
                  Produit
                </th>
                <th>
                  Image
                </th>
                <th>
                  Description
                </th>
                <th>
                  Prix
                </th>
                <th>
                  Quantité
                </th>
                <th>
                  Total
                </th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 37
                echo "                ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 37))) {
                    // line 38
                    echo "                  <tr>
                    <td>
                      ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
                    echo "
                    </td>
                    <td>
                      <img class=\"imgpanier\" src=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 43), "image", [], "any", false, false, false, 43), "html", null, true);
                    echo "\"/>
                    </td>
                    <td>
                      ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 46), "description", [], "any", false, false, false, 46), "html", null, true);
                    echo "
                    </td>
                    <td>
                      ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 49), "prix", [], "any", false, false, false, 49), "html", null, true);
                    echo "
                    </td>
                    <td>
                      ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 52), "html", null, true);
                    echo "
                    </td>
                    <td>
                      ";
                    // line 55
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 55), "prix", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 55)), "html", null, true);
                    echo "
                    </td>
                    <td>
                      <a class=\"btn btn-info btn-lg\" href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_subtract", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 62
$context["item"], "produits", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62)]), "html", null, true);
                    // line 65
                    echo "\"
                  class=\"btn\">
                  -                </a>
                </td>
                <td>
                  <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 74
$context["item"], "produits", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74)]), "html", null, true);
                    // line 77
                    echo "\"
              class=\"btn btn-danger btn-sm\">
              <i class=\"fas fa-trash\"></i>
            </a>
          </td>

        </tr>
      ";
                }
                // line 85
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "  </tbody>
  <tfoot>
    <tr>
      <td colspan=\"5\">
        Total :
      </td>
      <td>
        ";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "
      </td>

    </tr>
  </tfoot>
</table>
<div>
  <a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("command");
            echo "\" class=\"btn btn-outline-success\">Commandez</a>
</div>
</div>
</div>
</div>
</section>
";
        } else {
            // line 107
            echo "  <p class=\"btn btn-info\">
    Votre panier est vide !
  </p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 107,  202 => 100,  192 => 93,  183 => 86,  177 => 85,  167 => 77,  165 => 74,  164 => 70,  157 => 65,  155 => 62,  154 => 58,  148 => 55,  142 => 52,  136 => 49,  130 => 46,  123 => 43,  117 => 40,  113 => 38,  110 => 37,  106 => 36,  79 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
<section class=\"cart_area section_padding\">
  <div class=\"container\">
   <div class=\"cart_inner\">
    <div class=\"table-responsive\">
     <div>
      <h1>Votre panier</h1>
      </div>
        {% if (items|length) > 0 %}
          <table class=\"table\">
            <thead>
              <tr>
                <th>
                  Produit
                </th>
                <th>
                  Image
                </th>
                <th>
                  Description
                </th>
                <th>
                  Prix
                </th>
                <th>
                  Quantité
                </th>
                <th>
                  Total
                </th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              {% for item in items %}
                {% if item.produits is not null %}
                  <tr>
                    <td>
                      {{ item.produits.nom }}
                    </td>
                    <td>
                      <img class=\"imgpanier\" src=\"{{asset('img/')}}{{item.produits.image}}\"/>
                    </td>
                    <td>
                      {{ item.produits.description }}
                    </td>
                    <td>
                      {{ item.produits.prix }}
                    </td>
                    <td>
                      {{ item.quantity }}
                    </td>
                    <td>
                      {{ item.produits.prix * item.quantity }}
                    </td>
                    <td>
                      <a class=\"btn btn-info btn-lg\" href=\"{{
                      path(
                      'panier_subtract',
                      {
                      id: item.produits.id
                    }
                    )
                  }}\"
                  class=\"btn\">
                  -                </a>
                </td>
                <td>
                  <a href=\"{{
                  path(
                  'panier_remove',
                  {
                  id: item.produits.id
                }
                )
              }}\"
              class=\"btn btn-danger btn-sm\">
              <i class=\"fas fa-trash\"></i>
            </a>
          </td>

        </tr>
      {% endif %}
    {% endfor %}
  </tbody>
  <tfoot>
    <tr>
      <td colspan=\"5\">
        Total :
      </td>
      <td>
        {{ totalPrice }}
      </td>

    </tr>
  </tfoot>
</table>
<div>
  <a href=\"{{ path('command') }}\" class=\"btn btn-outline-success\">Commandez</a>
</div>
</div>
</div>
</div>
</section>
{% else %}
  <p class=\"btn btn-info\">
    Votre panier est vide !
  </p>
{% endif %}
{% endblock %}
", "panier/index.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\panier\\index.html.twig");
    }
}
