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

/* jardinenfant/index.html.twig */
class __TwigTemplate_df7d98f4a6b2f29907c18dc791b479b6bf76d98976e07c1c562f1ad2d2b1c954 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardinenfant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jardinenfant/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "jardinenfant/index.html.twig", 1);
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

        echo "Jardinenfant index";
        
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
                <h1>Jardinenfant index</h1>


                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "
                    <div class=\"alert alert-success\">

                       ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "
                    <div class=\"alert alert-warning\">

                        ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "
                    <div class=\"alert alert-success\">

                        ";
            // line 38
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "

                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                <br>
                <nav id=\"navigation\" class=\"style_one\">
                    <ul id=\"responsive\">
                        <li><a href=\"#\">Trier Par</a>
                            <ul>
                                <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trinom");
        echo "\">Nom</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trinbEmployes");
        echo "\">NbEmployes</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triprix");
        echo "\">prix</a></li>

                            </ul>

                        </li>
                    </ul>
                </nav>
                <br>
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listJardinEnf");
        echo "\"   class=\"btn-danger\"> PDF</a>

                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_excel");
        echo "\"    class=\"btn-success\"> Export Excel</a>
                <br>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Idj</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Logo</th>
                        <th>NbEmployes</th>
                        <th>Adresse</th>
                        <th>DateCreation</th>
                        <th>Prix</th>
                        <th>Telephone</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jardinenfants"]) || array_key_exists("jardinenfants", $context) ? $context["jardinenfants"] : (function () { throw new RuntimeError('Variable "jardinenfants" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jardinenfant"]) {
            // line 85
            echo "                        <tr>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "idj", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "nom", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "description", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                            <td><img alt=\"\" class=\"\" src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "logo", [], "any", false, false, false, 89), "html", null, true);
            echo "\" width=\"110\" height=\"80\"></td>

                            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "nbEmployes", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "adresse", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                            <td>";
            // line 93
            ((twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "dateCreation", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "dateCreation", [], "any", false, false, false, 93), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "prix", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                            <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "telephone", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_show", ["idj" => twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "idj", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn-info\">show</a>
                                <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_edit", ["idj" => twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "idj", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" class=\"btn-warning\">edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jardinenfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    </tbody>
                </table>

                <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_new");
        echo "\" class=\"btn-success\">Create new</a>
                <div class=\"utf_pagination_container_part margin-bottom-70\">
                    <nav class=\"pagination\">
                        <ul>
                            <li>";
        // line 113
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["jardinenfants"]) || array_key_exists("jardinenfants", $context) ? $context["jardinenfants"] : (function () { throw new RuntimeError('Variable "jardinenfants" does not exist.', 113, $this->source); })()));
        echo "</li>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jardinenfant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 113,  294 => 109,  289 => 106,  280 => 102,  271 => 98,  267 => 97,  262 => 95,  258 => 94,  254 => 93,  250 => 92,  246 => 91,  240 => 89,  236 => 88,  232 => 87,  228 => 86,  225 => 85,  220 => 84,  199 => 66,  194 => 64,  183 => 56,  176 => 52,  169 => 48,  162 => 43,  151 => 38,  146 => 35,  141 => 34,  130 => 29,  125 => 26,  120 => 25,  109 => 20,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Jardinenfant index{% endblock %}

{% block body %}



    <div style =\"display:flex;align-items: center;justify-content: center; margin-top: 150px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h1>Jardinenfant index</h1>


                {% for message in app.flashes('info') %}

                    <div class=\"alert alert-success\">

                       {{ message }}

                    </div>

                {% endfor%}
                {% for message in app.flashes('info') %}

                    <div class=\"alert alert-warning\">

                        {{ message }}

                    </div>

                {% endfor %}
                {% for message in app.flashes('info') %}

                    <div class=\"alert alert-success\">

                        {{ message }}

                    </div>

                {% endfor %}
                <br>
                <nav id=\"navigation\" class=\"style_one\">
                    <ul id=\"responsive\">
                        <li><a href=\"#\">Trier Par</a>
                            <ul>
                                <li><a href=\"{{ path('trinom') }}\">Nom</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"{{ path('trinbEmployes') }}\">NbEmployes</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"{{ path('triprix') }}\">prix</a></li>

                            </ul>

                        </li>
                    </ul>
                </nav>
                <br>
                <a href=\"{{ path('listJardinEnf')}}\"   class=\"btn-danger\"> PDF</a>

                <a href=\"{{ path('app_jardinenfant_excel')}}\"    class=\"btn-success\"> Export Excel</a>
                <br>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Idj</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Logo</th>
                        <th>NbEmployes</th>
                        <th>Adresse</th>
                        <th>DateCreation</th>
                        <th>Prix</th>
                        <th>Telephone</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for jardinenfant in jardinenfants %}
                        <tr>
                            <td>{{ jardinenfant.idj }}</td>
                            <td>{{ jardinenfant.nom }}</td>
                            <td>{{ jardinenfant.description }}</td>
                            <td><img alt=\"\" class=\"\" src=\"{{asset('uploads/images/')}}{{ jardinenfant.logo}}\" width=\"110\" height=\"80\"></td>

                            <td>{{ jardinenfant.nbEmployes }}</td>
                            <td>{{ jardinenfant.adresse }}</td>
                            <td>{{ jardinenfant.dateCreation ? jardinenfant.dateCreation|date('Y-m-d') : '' }}</td>
                            <td>{{ jardinenfant.prix }}</td>
                            <td>{{ jardinenfant.telephone }}</td>
                            <td>
                                <a href=\"{{ path('app_jardinenfant_show', {'idj': jardinenfant.idj}) }}\" class=\"btn-info\">show</a>
                                <a href=\"{{ path('app_jardinenfant_edit', {'idj': jardinenfant.idj}) }}\" class=\"btn-warning\">edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <a href=\"{{ path('app_jardinenfant_new') }}\" class=\"btn-success\">Create new</a>
                <div class=\"utf_pagination_container_part margin-bottom-70\">
                    <nav class=\"pagination\">
                        <ul>
                            <li>{{ knp_pagination_render(jardinenfants) }}</li>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>

    </div>

{% endblock %}
", "jardinenfant/index.html.twig", "C:\\Users\\fedi\\fadi\\templates\\jardinenfant\\index.html.twig");
    }
}
