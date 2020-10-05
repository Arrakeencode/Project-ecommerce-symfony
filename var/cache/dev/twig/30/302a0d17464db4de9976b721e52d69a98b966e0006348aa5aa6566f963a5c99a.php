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

/* formulaire/index.html.twig */
class __TwigTemplate_cc255950b0692ef28d93071d8dcdccbf017b5d60436b225094dd646beb78a4cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FormulaireController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "<form class=\"formu\" action=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send");
        echo " method=\"post\">
<div class=\"container\">
<div class=\"col-md-4 form-group\">
                   <label for=\"nom\">Entrez votre nom</label>
                   <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Rouve\" required>
                 </div>
                 <div class=\"col-md-4 form-group\">
                   <label for=\"prenom\">Entrez votre prenom</label>
                   <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"nom\" placeholder=\"Jean-Paul\"  required>
                 </div>
  <div class=\"col-md-4 form-group\">
    <label for=\"exampleInputEmail1\">Email</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Ici rentrez votre adresse mail\" required>
    <small id=\"emailHelp\" class=\"form-text text-muted\"></small>
  </div>

  <div class=\"col-md-7 form-group\">
    <label for=\"exampleFormControlTextarea1\"></label>
    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" name=\"commentaire\" rows=\"3\" placeholder=\"Votre message\" required></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
  </div>
</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Hello FormulaireController!{% endblock %}

{% block main %}
<form class=\"formu\" action={{ path('send')}} method=\"post\">
<div class=\"container\">
<div class=\"col-md-4 form-group\">
                   <label for=\"nom\">Entrez votre nom</label>
                   <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Rouve\" required>
                 </div>
                 <div class=\"col-md-4 form-group\">
                   <label for=\"prenom\">Entrez votre prenom</label>
                   <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"nom\" placeholder=\"Jean-Paul\"  required>
                 </div>
  <div class=\"col-md-4 form-group\">
    <label for=\"exampleInputEmail1\">Email</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Ici rentrez votre adresse mail\" required>
    <small id=\"emailHelp\" class=\"form-text text-muted\"></small>
  </div>

  <div class=\"col-md-7 form-group\">
    <label for=\"exampleFormControlTextarea1\"></label>
    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" name=\"commentaire\" rows=\"3\" placeholder=\"Votre message\" required></textarea>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
  </div>
</form>

{% endblock %}", "formulaire/index.html.twig", "C:\\xampp\\htdocs\\pirate\\templates\\formulaire\\index.html.twig");
    }
}
