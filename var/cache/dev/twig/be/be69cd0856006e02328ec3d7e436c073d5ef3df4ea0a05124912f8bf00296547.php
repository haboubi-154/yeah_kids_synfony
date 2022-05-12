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

/* eleve/pdf.html.twig */
class __TwigTemplate_c68b52c3674ea1de3e4d97204d150acede674a84176c9a5b41da593439a83109 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/pdf.html.twig"));

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
        <style>
            table, th, td {
                border: 4px solid #696969;
                border-collapse: collapse;
            }

            tr:nth-child(even) {
                background-color: #d3d3d3;
            }

            th:nth-child(even),td:nth-child(even) {
                background-color: #d3d3d3;
            }
        </style>


    </div>
    <br>
    <h1 class=\"align-center\"><div>Liste des eleves</div></h1>
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
            <th><h2>Prenom</h2></th>
            <th><h2>Age</h2></th>
            <th><h2>Idp</h2></th>
            <th><h2>Idj</h2></th>

        </tr>
        </thead>
        <tbody>

        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 76
            echo "            <tr>

                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "nom", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "prenom", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "age", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "idp", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "idj", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>



            </tr>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        return "eleve/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 90,  146 => 82,  142 => 81,  138 => 80,  134 => 79,  130 => 78,  126 => 76,  122 => 75,  50 => 6,  43 => 1,);
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
        <style>
            table, th, td {
                border: 4px solid #696969;
                border-collapse: collapse;
            }

            tr:nth-child(even) {
                background-color: #d3d3d3;
            }

            th:nth-child(even),td:nth-child(even) {
                background-color: #d3d3d3;
            }
        </style>


    </div>
    <br>
    <h1 class=\"align-center\"><div>Liste des eleves</div></h1>
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
            <th><h2>Prenom</h2></th>
            <th><h2>Age</h2></th>
            <th><h2>Idp</h2></th>
            <th><h2>Idj</h2></th>

        </tr>
        </thead>
        <tbody>

        {% for eleve in eleves %}
            <tr>

                <td>{{ eleve.nom }}</td>
                <td>{{ eleve.prenom }}</td>
                <td>{{ eleve.age }}</td>
                <td>{{ eleve.idp }}</td>
                <td>{{ eleve.idj }}</td>



            </tr>


        {% endfor %}


        </tbody>
    </table>

</main>

</body>
</html>", "eleve/pdf.html.twig", "C:\\Users\\fedi\\fadi\\templates\\eleve\\pdf.html.twig");
    }
}
