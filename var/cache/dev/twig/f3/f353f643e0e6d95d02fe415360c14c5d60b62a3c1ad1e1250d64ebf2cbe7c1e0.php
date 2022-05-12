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

/* Dashboard/Publication.html.twig */
class __TwigTemplate_313095f8d6cf48ee1c67442fa252ace3737ce5d88172c415505a754d927e0c97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/Publication.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/Publication.html.twig"));

        $this->parent = $this->loadTemplate("dashbase.html.twig", "Dashboard/Publication.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-xl-3\"><h6 class=\"m-0 font-weight-bold text-primary\">Publication list</h6></div>
                <div class=\"offset-md-6 col-xl-3\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_Pub");
        echo "\" class=\"btn btn-google btn-block\"> Add New Publication
                    </a></div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>titre</th>
                        <th>description</th>
                        <th>nbLike</th>
                        <th>nbDislike</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>titre</th>
                        <th>description</th>
                        <th>nbLike</th>
                        <th>nbDislike</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pubs"]) || array_key_exists("pubs", $context) ? $context["pubs"] : (function () { throw new RuntimeError('Variable "pubs" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "titre", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "nbLike", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "nbDislike", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_pub", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-circle\">
                                <i class=\"fas fa-trash\"></i>
                            </a>
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_pub", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-circle\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                        </td>

                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/Publication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 53,  135 => 46,  129 => 43,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  109 => 37,  105 => 36,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashbase.html.twig' %}

{% block content %}


    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-xl-3\"><h6 class=\"m-0 font-weight-bold text-primary\">Publication list</h6></div>
                <div class=\"offset-md-6 col-xl-3\"><a href=\"{{ path('new_Pub' )}}\" class=\"btn btn-google btn-block\"> Add New Publication
                    </a></div>
            </div>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>titre</th>
                        <th>description</th>
                        <th>nbLike</th>
                        <th>nbDislike</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>titre</th>
                        <th>description</th>
                        <th>nbLike</th>
                        <th>nbDislike</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for participation in pubs %}
                    <tr>
                        <td>{{ participation.titre }}</td>
                        <td>{{ participation.description }}</td>
                        <td>{{ participation.nbLike }}</td>
                        <td>{{ participation.nbDislike}}</td>
                        <td>
                            <a href=\"{{ path('delete_pub', { 'id': participation.id } )}}\" class=\"btn btn-danger btn-circle\">
                                <i class=\"fas fa-trash\"></i>
                            </a>
                            <a href=\"{{ path('update_pub', { 'id': participation.id } )}}\" class=\"btn btn-warning btn-circle\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                        </td>

                    </tr>
                    {% endfor %}

                    </tbody>
                </table>
            </div>
        </div>
    </div>

{% endblock %}", "Dashboard/Publication.html.twig", "C:\\Users\\fedi\\fadi\\templates\\Dashboard\\Publication.html.twig");
    }
}
