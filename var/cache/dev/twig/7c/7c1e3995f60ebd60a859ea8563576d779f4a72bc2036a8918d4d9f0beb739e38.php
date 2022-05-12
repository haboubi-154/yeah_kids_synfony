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

/* home/events.html.twig */
class __TwigTemplate_4fd61210bf1e2d497d5624dd1d7be3f15f4a8e26c13dd6a7cae8118f9e184d91 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/events.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/events.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "home/events.html.twig", 1);
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
    <section id=\"events_header\" class=\"events_header\" data-parallax=\"scroll\" data-bleed=\"200\" data-z-index=\"-100\" data-speed=\"0.1\" data-image-src=\"img/events/events_bg.jpg\" data-over-scroll-fix=\"true\">
        <div class=\"overlay_opacity\"></div>
        <div class=\"events_wave\"></div>
        <div class=\"container front_index\">
            <div class=\"row\">
                <div class=\"col-md-12 t_white\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Home</a></li>
                        <li class=\"active\">Events</li>
                    </ol>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10\">
                    <h2 class=\"section-title\">Events</h2>
                </div>
                <div class=\"col-md-1\"></div>
            </div>
        </div>
    </section>

    <section id=\"events_grids\" class=\"events_grids\">
        <div class=\"container\">
            <div class=\"double_grids mb_50\">
                <div class=\"row\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 32
            echo "                    <div class=\"col-md-6 wow fadeInUp\">
                        <div class=\"grids_block\">
                            <div class=\"grids_block_top\">
                                <img src=";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["participation"], "logo", [], "any", false, false, false, 35))), "html", null, true);
            echo " alt=\"\">
                            </div>
                            <div class=\"grids_block_center\">
                                <div class=\"date_events_left b_red\">
                                    <div class=\"date_middle\">
                                        <br><br>
                                        <p >";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "dateDebutEvent", [], "any", false, false, false, 41), "Y-m-d "), "html", null, true);
            echo "</p>
                                        <br>
                                        <p>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "dateFinEvent", [], "any", false, false, false, 43), "Y-m-d "), "html", null, true);
            echo "</p>

                                    </div>
                                </div>
                                <div class=\"date_events_right b_red_dark\">
                                    <p class=\"block_time pb_10\"><i class=\"fa fa-clock-o\"><span></span></i>8:00 am - 5:00 pm</p>
                                    <p class=\"block_time normal\"><i class=\"fa fa-map-marker\"><span></span></i>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "lieuEvent", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                            <div class=\"grids_brief\">
                                <h4 class=\"grids_title t_red\"><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "nomEvent", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></h4>
                                <p class=\"grids_description t_grey\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "descriptionEvent", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
                                <a class=\"btn btn-info\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdflivraison");
            echo "\">détails d'evenement</a>

                            </div>
                        </div>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
            </div>

            <div class=\" blog_nav \">
                ";
        // line 66
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 66, $this->source); })()));
        echo "
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 66,  159 => 62,  146 => 55,  142 => 54,  136 => 53,  129 => 49,  120 => 43,  115 => 41,  106 => 35,  101 => 32,  97 => 31,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}

    <section id=\"events_header\" class=\"events_header\" data-parallax=\"scroll\" data-bleed=\"200\" data-z-index=\"-100\" data-speed=\"0.1\" data-image-src=\"img/events/events_bg.jpg\" data-over-scroll-fix=\"true\">
        <div class=\"overlay_opacity\"></div>
        <div class=\"events_wave\"></div>
        <div class=\"container front_index\">
            <div class=\"row\">
                <div class=\"col-md-12 t_white\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Home</a></li>
                        <li class=\"active\">Events</li>
                    </ol>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10\">
                    <h2 class=\"section-title\">Events</h2>
                </div>
                <div class=\"col-md-1\"></div>
            </div>
        </div>
    </section>

    <section id=\"events_grids\" class=\"events_grids\">
        <div class=\"container\">
            <div class=\"double_grids mb_50\">
                <div class=\"row\">
                    {% for participation in events %}
                    <div class=\"col-md-6 wow fadeInUp\">
                        <div class=\"grids_block\">
                            <div class=\"grids_block_top\">
                                <img src={{ asset('uploads/'~ participation.logo) }} alt=\"\">
                            </div>
                            <div class=\"grids_block_center\">
                                <div class=\"date_events_left b_red\">
                                    <div class=\"date_middle\">
                                        <br><br>
                                        <p >{{ participation.dateDebutEvent  |date('Y-m-d ')}}</p>
                                        <br>
                                        <p>{{ participation.dateFinEvent |date('Y-m-d ')}}</p>

                                    </div>
                                </div>
                                <div class=\"date_events_right b_red_dark\">
                                    <p class=\"block_time pb_10\"><i class=\"fa fa-clock-o\"><span></span></i>8:00 am - 5:00 pm</p>
                                    <p class=\"block_time normal\"><i class=\"fa fa-map-marker\"><span></span></i>{{ participation.lieuEvent }}</p>
                                </div>
                            </div>
                            <div class=\"grids_brief\">
                                <h4 class=\"grids_title t_red\"><a href=\"{{ path('event', { id: participation.id}) }}\">{{ participation.nomEvent }}</a></h4>
                                <p class=\"grids_description t_grey\">{{ participation.descriptionEvent }}</p>
                                <a class=\"btn btn-info\" href=\"{{ path('pdflivraison') }}\">détails d'evenement</a>

                            </div>
                        </div>
                    </div>

                    {% endfor %}
                </div>
            </div>

            <div class=\" blog_nav \">
                {{ knp_pagination_render(events) }}
            </div>
        </div>
    </section>

{% endblock %}", "home/events.html.twig", "C:\\Users\\fedi\\fadi\\templates\\home\\events.html.twig");
    }
}
