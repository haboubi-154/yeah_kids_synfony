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

/* Dashboard/Event.html.twig */
class __TwigTemplate_449ffa83080ec1b73f57bf9eef1c8207c59f44e687753f50954e73aa4c71e76c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/Event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/Event.html.twig"));

        $this->parent = $this->loadTemplate("dashbase.html.twig", "Dashboard/Event.html.twig", 1);
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
                <div class=\"col-xl-3\"><h6 class=\"m-0 font-weight-bold text-primary\">Event list</h6></div>

                <div class=\"offset-md-6 col-xl-3\"><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_event");
        echo "\" class=\"btn btn-google btn-block\"> Add New Event
                </a></div>
    <div class=\"hero__search\">
    <div class=\"hero__search__form\">
<form method=\"post\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("findOneBy");
        echo "\">
    <div class=\"hero__search__categories\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>lieu</th>
                        <th>capacite</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>dateDebut</th>
                        <th>dateFin</th>
                        <th>typeEvent</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>title</th>
                        <th>lieu</th>
                        <th>capacite</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>dateDebut</th>
                        <th>dateFin</th>
                        <th>typeEvent</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 48
            echo "                    <tr>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "nomEvent", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "lieuEvent", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "capaciteEvent", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "descriptionEvent", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "prixEvent", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "dateDebutEvent", [], "any", false, false, false, 54), "Y-m-d "), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "dateFinEvent", [], "any", false, false, false, 55), "Y-m-d "), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "typeEvent", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_event", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-circle\">
                                <i class=\"fas fa-trash\"></i>
                            </a>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_event", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 61)]), "html", null, true);
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
        // line 68
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
        return "Dashboard/Event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 68,  165 => 61,  159 => 58,  154 => 56,  150 => 55,  146 => 54,  142 => 53,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  123 => 48,  119 => 47,  84 => 15,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashbase.html.twig' %}

{% block content %}


    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <div class=\"row\">
                <div class=\"col-xl-3\"><h6 class=\"m-0 font-weight-bold text-primary\">Event list</h6></div>

                <div class=\"offset-md-6 col-xl-3\"><a href=\"{{ path('new_event' )}}\" class=\"btn btn-google btn-block\"> Add New Event
                </a></div>
    <div class=\"hero__search\">
    <div class=\"hero__search__form\">
<form method=\"post\" action=\"{{ path('findOneBy') }}\">
    <div class=\"hero__search__categories\">
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>lieu</th>
                        <th>capacite</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>dateDebut</th>
                        <th>dateFin</th>
                        <th>typeEvent</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>title</th>
                        <th>lieu</th>
                        <th>capacite</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>dateDebut</th>
                        <th>dateFin</th>
                        <th>typeEvent</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    {% for participation in events %}
                    <tr>
                        <td>{{ participation.nomEvent }}</td>
                        <td>{{ participation.lieuEvent }}</td>
                        <td>{{ participation.capaciteEvent }}</td>
                        <td>{{ participation.descriptionEvent }}</td>
                        <td>{{ participation.prixEvent }}</td>
                        <td>{{ participation.dateDebutEvent |date('Y-m-d ')}}</td>
                        <td>{{ participation.dateFinEvent |date('Y-m-d ')}}</td>
                        <td>{{ participation.typeEvent }}</td>
                        <td>
                            <a href=\"{{ path('delete_event', { 'id': participation.id } )}}\" class=\"btn btn-danger btn-circle\">
                                <i class=\"fas fa-trash\"></i>
                            </a>
                            <a href=\"{{ path('update_event', { 'id': participation.id } )}}\" class=\"btn btn-warning btn-circle\">
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

{% endblock %}", "Dashboard/Event.html.twig", "C:\\Users\\fedi\\fadi\\templates\\Dashboard\\Event.html.twig");
    }
}
