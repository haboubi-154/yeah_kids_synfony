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

/* home/event.html.twig */
class __TwigTemplate_aaf2aef68d5ce90d0b96d92f33c8d023158484017edf04b2dc94e4b7d9a4fe53 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/event.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/event.html.twig", 1);
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
    <section id=\"single_event\" class=\"single_event\">
        <div class=\"container\">
            <div class=\"row pb_20\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10 dot\">
                    <h2 class=\"section-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "nomEvent", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"col-md-1\"></div>
            </div>

            <br>
            <br>
            <div class=\"row sideber_height\">
                <div class=\"col-md-9\">
                    <div class=\"main_block\">
                        <div class=\"grids_block_top\">
                            <img src=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "logo", [], "any", false, false, false, 21))), "html", null, true);
        echo " alt=\"\">
                        </div>
                        <div class=\"main_block_timer\">
                            <div id=\"register_timer\"></div>
                            <div class=\"timer_button\">
                                <p><a class=\"b_white register-form\" href=\"#contact_form\">Reserve Now</a></p>
                                <form method=\"post\" id=\"contact_form\" class=\"white-popup-block mfp-hide\">
                                    <div class=\"register_block\">
                                        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
                                        <div class=\"register_form_top\">
                                            <div class=\"register_wave\"></div>
                                            <h2 class=\"section-title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "nomEvent", [], "any", false, false, false, 32), "html", null, true);
        echo "</h2>
                                        </div>
                                        <div class=\"register_date\">
                                            <div class=\"register_wave\"></div>
                                            <div class=\"row\">
                                                <div class=\"col-md-3 col-sm-3\">
                                                    <ul class=\"r_date\">
                                                        <li class=\"d_number\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 39, $this->source); })()), "prixEvent", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                                                        <li class=\"d_date\">DT</li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-md-9 col-sm-9\">
                                                    <ul class=\"r_info\">
                                                        <li><i class=\"fa fa-phone\"></i>+216 55 312 456</li>
                                                        <li><i class=\"fa fa-envelope\"></i>event@yeahkids.com</li>
                                                        <li><i class=\"fa fa-map-marker\"></i>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 47, $this->source); })()), "lieuEvent", [], "any", false, false, false, 47), "html", null, true);
        echo "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"register_input\">
                                            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_start');
        echo "
                                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "Ajouter", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "button"]]);
        echo "
                                            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"main_block_description pb_10\">
                            <H4>Description </H4>
                            <p>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "descriptionEvent", [], "any", false, false, false, 63), "html", null, true);
        echo " </p>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div id=\"sidebar\" class=\"sidebar\">
                        <div class=\"info_block t_white\">
                            <div class=\"date b_blue_light\">
                                <ul>
                                    <li class=\"date_number\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 73, $this->source); })()), "capaciteEvent", [], "any", false, false, false, 73), "html", null, true);
        echo "</li>
                                    <li class=\"date_month\">places</li>

                                </ul>
                            </div>
                            <div class=\"contact b_blue\">
                                <ul>
                                    <li class=\"fz_18\"><i class=\"fa fa-clock-o\"></i>8:00 am - 5:00 pm</li>
                                    <li class=\"fz_18\"><i class=\"fa fa-phone\"></i>+216 55 312 456</li>
                                    <li class=\"fz_15 normal\"><i class=\"fa fa-envelope\"></i>event@yeahkids.com</li>
                                </ul>
                            </div>
                            <div class=\"document b_blue_dark\">
                                <h4><i class=\"fa fa-map-marker\"></i>Adresse</h4>
                                <ul>
                                    <li>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "lieuEvent", [], "any", false, false, false, 88), "html", null, true);
        echo "</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"events\">
                            <div class=\"events_box\">
                                <div class=\"brief_events\">
                                    <h4><a href=\"#\">Event A</a></h4>
                                    <a class=\"btn btn-info\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdflivraison");
        echo "\">détails d'evenement</a>                                </div>
                                <div class=\"date_events\">
                                    <p>19 dec 2017</p>
                                </div>
                            </div>
                            <div class=\"events_box\">
                                <div class=\"brief_events\">
                                    <h4><a href=\"#\">Next Event B</a></h4>
                                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                                <div class=\"date_events\">
                                    <p>27 dec 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 96,  184 => 88,  166 => 73,  153 => 63,  142 => 55,  138 => 54,  134 => 53,  125 => 47,  114 => 39,  104 => 32,  90 => 21,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <section id=\"single_event\" class=\"single_event\">
        <div class=\"container\">
            <div class=\"row pb_20\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10 dot\">
                    <h2 class=\"section-title\">{{ event.nomEvent }}</h2>
                </div>
                <div class=\"col-md-1\"></div>
            </div>

            <br>
            <br>
            <div class=\"row sideber_height\">
                <div class=\"col-md-9\">
                    <div class=\"main_block\">
                        <div class=\"grids_block_top\">
                            <img src={{ asset('uploads/'~ event.logo) }} alt=\"\">
                        </div>
                        <div class=\"main_block_timer\">
                            <div id=\"register_timer\"></div>
                            <div class=\"timer_button\">
                                <p><a class=\"b_white register-form\" href=\"#contact_form\">Reserve Now</a></p>
                                <form method=\"post\" id=\"contact_form\" class=\"white-popup-block mfp-hide\">
                                    <div class=\"register_block\">
                                        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\">×</button>
                                        <div class=\"register_form_top\">
                                            <div class=\"register_wave\"></div>
                                            <h2 class=\"section-title\">{{ event.nomEvent }}</h2>
                                        </div>
                                        <div class=\"register_date\">
                                            <div class=\"register_wave\"></div>
                                            <div class=\"row\">
                                                <div class=\"col-md-3 col-sm-3\">
                                                    <ul class=\"r_date\">
                                                        <li class=\"d_number\">{{ event.prixEvent }}</li>
                                                        <li class=\"d_date\">DT</li>
                                                    </ul>
                                                </div>
                                                <div class=\"col-md-9 col-sm-9\">
                                                    <ul class=\"r_info\">
                                                        <li><i class=\"fa fa-phone\"></i>+216 55 312 456</li>
                                                        <li><i class=\"fa fa-envelope\"></i>event@yeahkids.com</li>
                                                        <li><i class=\"fa fa-map-marker\"></i>{{ event.lieuEvent }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"register_input\">
                                            {{ form_start(form) }}
                                                {{ form_widget(form.Ajouter,{'attr': {'class' : 'button'}}) }}
                                            {{ form_end(form) }}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"main_block_description pb_10\">
                            <H4>Description </H4>
                            <p>{{ event.descriptionEvent }} </p>
                        </div>

                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div id=\"sidebar\" class=\"sidebar\">
                        <div class=\"info_block t_white\">
                            <div class=\"date b_blue_light\">
                                <ul>
                                    <li class=\"date_number\">{{ event.capaciteEvent }}</li>
                                    <li class=\"date_month\">places</li>

                                </ul>
                            </div>
                            <div class=\"contact b_blue\">
                                <ul>
                                    <li class=\"fz_18\"><i class=\"fa fa-clock-o\"></i>8:00 am - 5:00 pm</li>
                                    <li class=\"fz_18\"><i class=\"fa fa-phone\"></i>+216 55 312 456</li>
                                    <li class=\"fz_15 normal\"><i class=\"fa fa-envelope\"></i>event@yeahkids.com</li>
                                </ul>
                            </div>
                            <div class=\"document b_blue_dark\">
                                <h4><i class=\"fa fa-map-marker\"></i>Adresse</h4>
                                <ul>
                                    <li>{{ event.lieuEvent }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"events\">
                            <div class=\"events_box\">
                                <div class=\"brief_events\">
                                    <h4><a href=\"#\">Event A</a></h4>
                                    <a class=\"btn btn-info\" href=\"{{ path('pdflivraison') }}\">détails d'evenement</a>                                </div>
                                <div class=\"date_events\">
                                    <p>19 dec 2017</p>
                                </div>
                            </div>
                            <div class=\"events_box\">
                                <div class=\"brief_events\">
                                    <h4><a href=\"#\">Next Event B</a></h4>
                                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                </div>
                                <div class=\"date_events\">
                                    <p>27 dec 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "home/event.html.twig", "C:\\Users\\fedi\\fadi\\templates\\home\\event.html.twig");
    }
}
