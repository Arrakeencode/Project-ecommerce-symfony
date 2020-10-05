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

/* command/index.html.twig */
class __TwigTemplate_f1eef962bf690428041cf5d50112e2e3443dc26d2fd4d4a6d76c447ccea92252 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "command/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    <div>
        <h1>Valider votre commande</h1>
    </div>
    ";
        // line 8
        $this->displayBlock('message', $context, $blocks);
        // line 15
        echo "    
    
    
    
";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 19, $this->source); })())) > 0)) {
            // line 20
            echo "        <table class=\"table\">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "                    ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "                        <tr>
                            <td>";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 35), "prix", [], "any", false, false, false, 35), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 37
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "produits", [], "any", false, false, false, 37), "prix", [], "any", false, false, false, 37) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 37)), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\">Total : </td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <form method=\"post\" action=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("paiement");
            echo "\">
            <h2>Votre adresse de livraison</h2>
            <div class=\"form-group col-5\">
                    <label for=\"prenom_user\">Veuillez entrez votre prénom</label>
                    <input type=\"text\" id=\"prenom_user\" name=\"prenom_user\" class=\"form-control\" placeholder=\"Jean\" value=\"\" required >
                </div>
                <div class=\"form-group col-5\">
                    <label for=\"nom_user\">Veuillez entrez votre Nom</label>
                    <input type=\"text\" id=\"nom_user\" name=\"nom_user\" class=\"form-control\" placeholder=\"Dupont\" value=\"\" required>
                </div>
                <div class=\"form-group col-5\">
                    <label for=\"email\">Veuillez entrez votre email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"\" value=\"\" required>
                </div>            
            <div class=\"form-row\">
                <div class=\"form-group col-4\">
                    <label for=\"adresse\">Veuillez saisir votre adresse</label>
                    <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\" placeholder=\"37 rue du projet\" value=\"\" required>
                </div>
                <div class=\"form-group col-4\">
                    <label for=\"code\">le code postal</label>
                    <input type=\"number\" id=\"code\" name=\"code\" class=\"form-control\" placeholder=\"75098\" value=\"\" required>
                </div>
                <div class=\"form-group col-4\">
                    <label for=\"ville\">La Ville</label>
                    <input type=\"text\" id=\"ville\" name=\"ville\" class=\"form-control\" placeholder=\"Paris\" value=\"\" required>
                </div>
            </div>
            <h2>Vos informations de paiement</h2>
            <div class=\"form-group col-5\">
                    <label for=\"nom_card\">Ici, nom et prénom inscrits sur votre carte de paiement</label>
                    <input type=\"text\" id=\"nom_card\" name=\"nom_card\" placeholder=\"Jean Caisse\" class=\"form-control\" value=\"\" required>
            </div>
            <div class=\"form-group col-5\">
                    <label for=\"num_card\">Numéro de carte</label>
                    <input type=\"\" id=\"num_card\" name=\"num_card\" class=\"form-control\" placeholder=\"XXXX-XXXX-XXXX-XXXX\" value=\"\" required>
            </div>
            <div class=\"form-group col-5\">
                    <label for=\"date_card\">Date d'expiration</label>
                    <input type=\"month\" id=\"date_card\" name=\"date_card\" class=\"form-control\" placeholder=\"Jour/Mois\" value=\"\" required>
            </div>
            <div class=\"form-group col-5\">
                    <label for=\"code_card\">Cryptogramme à 3 chiffres</label>
                    <input type=\"number\" id=\"code_card\" name=\"code_card\" class=\"form-control\" placeholder=\"XXX\" value=\"\" required>
            </div>
            ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)) {
                // line 96
                echo "            <div class=\"mx-auto text-center\">
                    <input type=\"submit\" value=\"Valider et Payer !\" class=\"btn btn-primary d-inline-block\">
            </div>
            ";
            } else {
                // line 100
                echo "            <div class=\"mx-auto text-center\">
                    <p><a href=\"";
                // line 101
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
                echo "\" class=\"btn btn-danger d-inline-block\">Merci de vous connecter pour passez au paiement</p>
            </div>
            ";
            }
            // line 104
            echo "        </form>
    ";
        } else {
            // line 106
            echo "        <p>Vous n'avez aucune commande</p>
    ";
        }
        // line 108
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "message"));

        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 10
            echo "                <div class=\"danger alert alert-danger\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "command/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 14,  248 => 11,  245 => 10,  240 => 9,  230 => 8,  219 => 108,  215 => 106,  211 => 104,  205 => 101,  202 => 100,  196 => 96,  194 => 95,  146 => 50,  138 => 45,  132 => 41,  126 => 40,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  105 => 33,  102 => 32,  98 => 31,  85 => 20,  83 => 19,  77 => 15,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}

    <div>
        <h1>Valider votre commande</h1>
    </div>
    {% block message %}
            {% for error in app.flashes('error') %}
                <div class=\"danger alert alert-danger\">
                    {{ error }}
                </div>
            {% endfor %}
    {% endblock %}
    
    
    
    
{% if items| length > 0 %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for item in items %}
                    {% if  item.produits is not null %}
                        <tr>
                            <td>{{ item.produits.nom }}</td>
                            <td>{{ item.produits.prix }}</td>
                            <td>{{ item.quantity }}</td>
                            <td>{{ item.produits.prix * item.quantity }}</td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"3\">Total : </td>
                    <td>{{ totalPrice }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <form method=\"post\" action=\"{{ path('paiement') }}\">
            <h2>Votre adresse de livraison</h2>
            <div class=\"form-group col-5\">
                    <label for=\"prenom_user\">Veuillez entrez votre prénom</label>
                    <input type=\"text\" id=\"prenom_user\" name=\"prenom_user\" class=\"form-control\" placeholder=\"Jean\" value=\"\" required >
                </div>
                <div class=\"form-group col-5\">
                    <label for=\"nom_user\">Veuillez entrez votre Nom</label>
                    <input type=\"text\" id=\"nom_user\" name=\"nom_user\" class=\"form-control\" placeholder=\"Dupont\" value=\"\" required>
                </div>
                <div class=\"form-group col-5\">
                    <label for=\"email\">Veuillez entrez votre email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"\" value=\"\" required>
                </div>            
            <div class=\"form-row\">
                <div class=\"form-group col-4\">
                    <label for=\"adresse\">Veuillez saisir votre adresse</label>
                    <input type=\"text\" id=\"adresse\" name=\"adresse\" class=\"form-control\" placeholder=\"37 rue du projet\" value=\"\" required>
                </div>
                <div class=\"form-group col-4\">
                    <label for=\"code\">le code postal</label>
                    <input type=\"number\" id=\"code\" name=\"code\" class=\"form-control\" placeholder=\"75098\" value=\"\" required>
                </div>
                <div class=\"form-group col-4\">
                    <label for=\"ville\">La Ville</label>
                    <input type=\"text\" id=\"ville\" name=\"ville\" class=\"form-control\" placeholder=\"Paris\" value=\"\" required>
                </div>
            </div>
            <h2>Vos informations de paiement</h2>
            <div class=\"form-group col-5\">
                    <label for=\"nom_card\">Ici, nom et prénom inscrits sur votre carte de paiement</label>
                    <input type=\"text\" id=\"nom_card\" name=\"nom_card\" placeholder=\"Jean Caisse\" class=\"form-control\" value=\"\" required>
            </div>
            <div class=\"form-group col-5\">
                    <label for=\"num_card\">Numéro de carte</label>
                    <input type=\"\" id=\"num_card\" name=\"num_card\" class=\"form-control\" placeholder=\"XXXX-XXXX-XXXX-XXXX\" value=\"\" required>
            </div>
            <div class=\"form-group col-5\">
                    <label for=\"date_card\">Date d'expiration</label>
                    <input type=\"month\" id=\"date_card\" name=\"date_card\" class=\"form-control\" placeholder=\"Jour/Mois\" value=\"\" required>
            </div>
            <div class=\"form-group col-5\">
                    <label for=\"code_card\">Cryptogramme à 3 chiffres</label>
                    <input type=\"number\" id=\"code_card\" name=\"code_card\" class=\"form-control\" placeholder=\"XXX\" value=\"\" required>
            </div>
            {% if app.user %}
            <div class=\"mx-auto text-center\">
                    <input type=\"submit\" value=\"Valider et Payer !\" class=\"btn btn-primary d-inline-block\">
            </div>
            {% else %}
            <div class=\"mx-auto text-center\">
                    <p><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-danger d-inline-block\">Merci de vous connecter pour passez au paiement</p>
            </div>
            {% endif %}
        </form>
    {% else %}
        <p>Vous n'avez aucune commande</p>
    {% endif %}

{% endblock %}


", "command/index.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\command\\index.html.twig");
    }
}
