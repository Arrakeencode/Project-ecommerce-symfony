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

/* formulaire/index1.html.twig */
class __TwigTemplate_0c765fc3f666789a32b336b919d9d5bbdbf2de1d30a61a41a65df7949831ccde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/index1.html.twig", 1);
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
        echo "<div id=\"section\">

\t\t\t\t<section class=\"contact-wrap\">
\t\t\t\t  <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send");
        echo "\" class=\"contact-form\" method=\"post\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  <div class=\"input-block\">
\t\t\t\t\t\t<label for=\"\">Prénom</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  <div class=\"input-block\">
\t\t\t\t\t\t<label for=\"\">Nom</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <div class=\"input-block\">
\t\t\t\t\t\t<label for=\"\">Email</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <div class=\"input-block textarea\">
\t\t\t\t\t\t<label for=\"\">Votre message </label>
\t\t\t\t\t\t<textarea rows=\"3\" type=\"text\" class=\"form-control\"></textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <button class=\"square-button\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t  </form>
\t\t\t\t</section>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
<div id=\"section\">

\t\t\t\t<section class=\"contact-wrap\">
\t\t\t\t  <form action=\"{{ path ('send')}}\" class=\"contact-form\" method=\"post\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  <div class=\"input-block\">
\t\t\t\t\t\t<label for=\"\">Prénom</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  <div class=\"input-block\">
\t\t\t\t\t\t<label for=\"\">Nom</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <div class=\"input-block\">
\t\t\t\t\t\t<label for=\"\">Email</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <div class=\"input-block textarea\">
\t\t\t\t\t\t<label for=\"\">Votre message </label>
\t\t\t\t\t\t<textarea rows=\"3\" type=\"text\" class=\"form-control\"></textarea>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t  <button class=\"square-button\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t  </form>
\t\t\t\t</section>

</div>
{% endblock %}
", "formulaire/index1.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\formulaire\\index1.html.twig");
    }
}
