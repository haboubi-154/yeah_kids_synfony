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

/* eleve/index.html.twig */
class __TwigTemplate_8ce88a5eb26650cb159d93731800ae9243c07b9ecf338fb721bc2d38b4afbd4c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "eleve/index.html.twig", 1);
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

        echo "Eleve index";
        
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
                <h1>Eleve index</h1>

                <br>
                <nav id=\"navigation\" class=\"style_one\">
                    <ul id=\"responsive\">
                        <li><a href=\"#\">Trier Par</a>
                            <ul>
                                <li><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trinom1");
        echo "\">Nom</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triprenom");
        echo "\">Prenom</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triage");
        echo "\">Age</a></li>

                            </ul>

                        </li>
                    </ul>
                </nav>
                <br>


                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listEleve");
        echo "\"   class=\"btn-danger\"> PDF</a>

                <table class=\"table\" >
                    <thead>
                    <tr>
                        <th>Ide</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Idp</th>
                        <th>Idj</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 52
            echo "                        <tr>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "ide", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "prenom", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "age", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "idp", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "idj", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_show", ["ide" => twig_get_attribute($this->env, $this->source, $context["eleve"], "ide", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"class=\"btn-info\">show</a>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_edit", ["ide" => twig_get_attribute($this->env, $this->source, $context["eleve"], "ide", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"class=\"btn-warning\">edit</a>





                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
                </table>

                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_new");
        echo "\"class=\"btn-success\">Create new</a>
                <div class=\"utf_pagination_container_part margin-bottom-70\">
                    <nav class=\"pagination\">
                        <ul>
                            <li>";
        // line 81
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 81, $this->source); })()));
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
        return "eleve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  212 => 77,  207 => 74,  198 => 70,  184 => 61,  180 => 60,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  159 => 54,  155 => 53,  152 => 52,  147 => 51,  129 => 36,  116 => 26,  109 => 22,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Eleve index{% endblock %}

{% block body %}

    <div style =\"display:flex;align-items: center;justify-content: center; margin-top: 150px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h1>Eleve index</h1>

                <br>
                <nav id=\"navigation\" class=\"style_one\">
                    <ul id=\"responsive\">
                        <li><a href=\"#\">Trier Par</a>
                            <ul>
                                <li><a href=\"{{ path('trinom1') }}\">Nom</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"{{ path('triprenom') }}\">Prenom</a></li>

                            </ul>
                            <ul>
                                <li><a href=\"{{ path('triage') }}\">Age</a></li>

                            </ul>

                        </li>
                    </ul>
                </nav>
                <br>


                <a href=\"{{ path('listEleve')}}\"   class=\"btn-danger\"> PDF</a>

                <table class=\"table\" >
                    <thead>
                    <tr>
                        <th>Ide</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Idp</th>
                        <th>Idj</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for eleve in eleves %}
                        <tr>
                            <td>{{ eleve.ide }}</td>
                            <td>{{ eleve.nom }}</td>
                            <td>{{ eleve.prenom }}</td>
                            <td>{{ eleve.age }}</td>
                            <td>{{ eleve.idp }}</td>
                            <td>{{ eleve.idj }}</td>
                            <td>
                                <a href=\"{{ path('app_eleve_show', {'ide': eleve.ide}) }}\"class=\"btn-info\">show</a>
                                <a href=\"{{ path('app_eleve_edit', {'ide': eleve.ide}) }}\"class=\"btn-warning\">edit</a>





                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <a href=\"{{ path('app_eleve_new') }}\"class=\"btn-success\">Create new</a>
                <div class=\"utf_pagination_container_part margin-bottom-70\">
                    <nav class=\"pagination\">
                        <ul>
                            <li>{{ knp_pagination_render(eleves) }}</li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>

    </div>

{% endblock %}
", "eleve/index.html.twig", "C:\\Users\\fedi\\fadi\\templates\\eleve\\index.html.twig");
    }
}
