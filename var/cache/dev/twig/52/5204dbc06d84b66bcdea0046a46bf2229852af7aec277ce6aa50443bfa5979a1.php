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

/* jardinenfant/pdf.html.twig */
class __TwigTemplate_c227bd19f3ffd46ef376dd7d3cdbe28d8413064a0b9ec2ece7dfb96f6497e709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardinenfant/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardinenfant/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href=";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo " media=\"all\" />
</head>
<body>
<header class=\"clearfix\">


    <br>
    <div id=\"company\" class=\"clearfix\">
        <h1 class=\"align-center\"><div>ile des enfants</div></h1>

        <br>
        <style>
            body{
                font:normal 12px/20PX \"Liberation sans\", Arial, Helvetica, sans-serif;
                color:#585858;
            }
            img{
                width:300px;
                margin:10px;
                border: solid 5px #E8E8E8;

            }
        </style>


        <img src='data:image;base64,<?= ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["img64"]) || array_key_exists("img64", $context) ? $context["img64"] : (function () { throw new RuntimeError('Variable "img64" does not exist.', 31, $this->source); })()), "html", null, true);
        echo ";?>' />
    </div>
    <br>
    <h1 class=\"align-center\"><div>Liste Jardins Enfants</div></h1>
    <br>
</header>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<main>
    <table border=\"2\" class=\"center\">
        <thead>
        <tr>
            <th><h2>Nom</h2></th>
            <th><h2>Description</h2></th>
            <th><h2>NbEmployes</h2></th>
            <th><h2>Adresse</h2></th>
            <th><h2>DateCreation</h2></th>
            <th><h2>Prix</h2></th>
            <th><h2>Telephone</h2></th>


        </tr>
        </thead>
        <tbody>

        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jardinenfants"]) || array_key_exists("jardinenfants", $context) ? $context["jardinenfants"] : (function () { throw new RuntimeError('Variable "jardinenfants" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jardinenfant"]) {
            // line 66
            echo "            <tr>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "nom", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "description", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "nbEmployes", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "adresse", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "dateCreation", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "dateCreation", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "prix", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "telephone", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>

            </tr>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jardinenfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

        </tbody>
    </table>

</main>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jardinenfant/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 79,  146 => 73,  142 => 72,  138 => 71,  134 => 70,  130 => 69,  126 => 68,  122 => 67,  119 => 66,  115 => 65,  78 => 31,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 1</title>
    <link rel=\"stylesheet\" href={{asset('style.css')}} media=\"all\" />
</head>
<body>
<header class=\"clearfix\">


    <br>
    <div id=\"company\" class=\"clearfix\">
        <h1 class=\"align-center\"><div>ile des enfants</div></h1>

        <br>
        <style>
            body{
                font:normal 12px/20PX \"Liberation sans\", Arial, Helvetica, sans-serif;
                color:#585858;
            }
            img{
                width:300px;
                margin:10px;
                border: solid 5px #E8E8E8;

            }
        </style>


        <img src='data:image;base64,<?= {{ img64 }};?>' />
    </div>
    <br>
    <h1 class=\"align-center\"><div>Liste Jardins Enfants</div></h1>
    <br>
</header>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }
</style>
<main>
    <table border=\"2\" class=\"center\">
        <thead>
        <tr>
            <th><h2>Nom</h2></th>
            <th><h2>Description</h2></th>
            <th><h2>NbEmployes</h2></th>
            <th><h2>Adresse</h2></th>
            <th><h2>DateCreation</h2></th>
            <th><h2>Prix</h2></th>
            <th><h2>Telephone</h2></th>


        </tr>
        </thead>
        <tbody>

        {% for jardinenfant in jardinenfants %}
            <tr>
                <td>{{ jardinenfant.nom }}</td>
                <td>{{ jardinenfant.description }}</td>
                <td>{{ jardinenfant.nbEmployes }}</td>
                <td>{{ jardinenfant.adresse }}</td>
                <td>{{ jardinenfant.dateCreation ? jardinenfant.dateCreation|date('Y-m-d') : '' }}</td>
                <td>{{ jardinenfant.prix }}</td>
                <td>{{ jardinenfant.telephone }}</td>

            </tr>


        {% endfor %}


        </tbody>
    </table>

</main>

</body>
</html>", "jardinenfant/pdf.html.twig", "C:\\Users\\fedi\\fadi\\templates\\jardinenfant\\pdf.html.twig");
    }
}
