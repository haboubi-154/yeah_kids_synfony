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

/* jardinenfant/show.html.twig */
class __TwigTemplate_1bf03e5c41a5a5d3f6d3f24fef711cd789c1c1eb771ea7c158cd4337ae6edf92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardinenfant/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardinenfant/show.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "jardinenfant/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Jardinenfant";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "



    <div style =\"display:flex;align-items: center;justify-content: center; margin-top: 150px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h1>Jardinenfant</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Idj</th>
                        <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 20, $this->source); })()), "idj", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 32, $this->source); })()), "logo", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>NbEmployes</th>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 36, $this->source); })()), "nbEmployes", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>DateCreation</th>
                        <td>";
        // line 44
        ((twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 44, $this->source); })()), "dateCreation", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 44, $this->source); })()), "dateCreation", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 48, $this->source); })()), "prix", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 52, $this->source); })()), "telephone", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_index");
        echo "\">back to list</a>

                <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_edit", ["idj" => twig_get_attribute($this->env, $this->source, (isset($context["jardinenfant"]) || array_key_exists("jardinenfant", $context) ? $context["jardinenfant"] : (function () { throw new RuntimeError('Variable "jardinenfant" does not exist.', 59, $this->source); })()), "idj", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">edit</a>

                ";
        // line 61
        echo twig_include($this->env, $context, "jardinenfant/_delete_form.html.twig");
        echo "

            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jardinenfant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 61,  173 => 59,  168 => 57,  160 => 52,  153 => 48,  146 => 44,  139 => 40,  132 => 36,  125 => 32,  118 => 28,  111 => 24,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Jardinenfant{% endblock %}

{% block body %}




    <div style =\"display:flex;align-items: center;justify-content: center; margin-top: 150px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h1>Jardinenfant</h1>

                <table class=\"table\">
                    <tbody>
                    <tr>
                        <th>Idj</th>
                        <td>{{ jardinenfant.idj }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ jardinenfant.nom }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ jardinenfant.description }}</td>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <td>{{ jardinenfant.logo }}</td>
                    </tr>
                    <tr>
                        <th>NbEmployes</th>
                        <td>{{ jardinenfant.nbEmployes }}</td>
                    </tr>
                    <tr>
                        <th>Adresse</th>
                        <td>{{ jardinenfant.adresse }}</td>
                    </tr>
                    <tr>
                        <th>DateCreation</th>
                        <td>{{ jardinenfant.dateCreation ? jardinenfant.dateCreation|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Prix</th>
                        <td>{{ jardinenfant.prix }}</td>
                    </tr>
                    <tr>
                        <th>Telephone</th>
                        <td>{{ jardinenfant.telephone }}</td>
                    </tr>
                    </tbody>
                </table>

                <a href=\"{{ path('app_jardinenfant_index') }}\">back to list</a>

                <a href=\"{{ path('app_jardinenfant_edit', {'idj': jardinenfant.idj}) }}\">edit</a>

                {{ include('jardinenfant/_delete_form.html.twig') }}

            </div>
        </div>

    </div>
{% endblock %}
", "jardinenfant/show.html.twig", "C:\\Users\\fedi\\fadi\\templates\\jardinenfant\\show.html.twig");
    }
}
