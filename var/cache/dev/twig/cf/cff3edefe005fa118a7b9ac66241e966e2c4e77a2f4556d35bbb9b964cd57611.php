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

/* front/jardinenfant.html.twig */
class __TwigTemplate_1984fa7f1a232cdffc3bcae2ece14c8888558843007cb5a9e5a6f8ed6a43e933 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jardinenfant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/jardinenfant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/jardinenfant.html.twig", 1);
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




    <!-- Class Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center pb-2\">
                <p class=\"section-title px-5\"><span class=\"px-2\">Listes</span></p>
                <h1 class=\"mb-4\">Listes Jardins enfants</h1>
            </div>
            <div class=\"row\">
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jardinenfants"]) || array_key_exists("jardinenfants", $context) ? $context["jardinenfants"] : (function () { throw new RuntimeError('Variable "jardinenfants" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jardinenfant"]) {
            // line 20
            echo "                <div class=\"col-lg-4 mb-5\">
                    <div class=\"card border-0 bg-light shadow-sm pb-2\">
                        <img class=\"card-img-top mb-2\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "logo", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"\">
                        <div class=\"card-body text-center\">
                            <h4 class=\"card-title\">Nom: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</h4>
                            <p class=\"card-text\">Description: ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "description", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"card-footer bg-transparent py-4 px-5\">
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Nb employés: </strong></div>
                                <div class=\"col-6 py-1\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "nbEmployes", [], "any", false, false, false, 30), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Adresse: </strong></div>
                                <div class=\"col-6 py-1\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "adresse", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Date Creation: </strong></div>
                                <div class=\"col-6 py-1\">";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "dateCreation", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "dateCreation", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</div>
                            </div>
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Prix :</strong></div>
                                <div class=\"col-6 py-1\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "prix", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Num Tel: </strong></div>
                                <div class=\"col-6 py-1\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jardinenfant"], "telephone", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                        <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eleve_newFront");
            echo "\" class=\"btn btn-primary px-4 mx-auto mb-4\">Réserver</a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jardinenfant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                <div class=\"col-lg-4 mb-5\">

                </div>
                <div class=\"col-lg-4 mb-5\">

                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->

    <!--Start of Tawk.to Script-->
    <script type=\"text/javascript\">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6265703db0d10b6f3e6f1d72/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Footer Start -->
    <div class=\"container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5\">

        <div class=\"container-fluid pt-5\" style=\"border-top: 1px solid rgba(23, 162, 184, .2);;\">
            <p class=\"m-0 text-center text-white\">
                &copy; <a class=\"text-primary font-weight-bold\" href=\"#\">Your Site Name</a>. All Rights Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                Designed by <a class=\"text-primary font-weight-bold\" href=\"https://htmlcodex.com\">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary p-3 back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/jardinenfant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  163 => 49,  157 => 46,  150 => 42,  143 => 38,  136 => 34,  129 => 30,  121 => 25,  117 => 24,  111 => 22,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eleve index{% endblock %}

{% block body %}





    <!-- Class Start -->
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center pb-2\">
                <p class=\"section-title px-5\"><span class=\"px-2\">Listes</span></p>
                <h1 class=\"mb-4\">Listes Jardins enfants</h1>
            </div>
            <div class=\"row\">
                {% for jardinenfant in jardinenfants %}
                <div class=\"col-lg-4 mb-5\">
                    <div class=\"card border-0 bg-light shadow-sm pb-2\">
                        <img class=\"card-img-top mb-2\" src=\"{{asset('uploads/images/')}}{{ jardinenfant.logo}}\" alt=\"\">
                        <div class=\"card-body text-center\">
                            <h4 class=\"card-title\">Nom: {{ jardinenfant.nom }}</h4>
                            <p class=\"card-text\">Description: {{ jardinenfant.description }}</p>
                        </div>
                        <div class=\"card-footer bg-transparent py-4 px-5\">
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Nb employés: </strong></div>
                                <div class=\"col-6 py-1\">{{ jardinenfant.nbEmployes }}</div>
                            </div>
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Adresse: </strong></div>
                                <div class=\"col-6 py-1\">{{ jardinenfant.adresse }}</div>
                            </div>
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Date Creation: </strong></div>
                                <div class=\"col-6 py-1\">{{ jardinenfant.dateCreation ? jardinenfant.dateCreation|date('Y-m-d') : '' }}</div>
                            </div>
                            <div class=\"row border-bottom\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Prix :</strong></div>
                                <div class=\"col-6 py-1\">{{ jardinenfant.prix }}</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-6 py-1 text-right border-right\"><strong>Num Tel: </strong></div>
                                <div class=\"col-6 py-1\">{{ jardinenfant.telephone }}</div>
                            </div>
                        </div>
                        <a href=\"{{ path('app_eleve_newFront') }}\" class=\"btn btn-primary px-4 mx-auto mb-4\">Réserver</a>
                    </div>
                </div>
                {% endfor %}

                <div class=\"col-lg-4 mb-5\">

                </div>
                <div class=\"col-lg-4 mb-5\">

                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->

    <!--Start of Tawk.to Script-->
    <script type=\"text/javascript\">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6265703db0d10b6f3e6f1d72/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Footer Start -->
    <div class=\"container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5\">

        <div class=\"container-fluid pt-5\" style=\"border-top: 1px solid rgba(23, 162, 184, .2);;\">
            <p class=\"m-0 text-center text-white\">
                &copy; <a class=\"text-primary font-weight-bold\" href=\"#\">Your Site Name</a>. All Rights Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                Designed by <a class=\"text-primary font-weight-bold\" href=\"https://htmlcodex.com\">HTML Codex</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary p-3 back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>

{% endblock %}
", "front/jardinenfant.html.twig", "C:\\Users\\fedi\\fadi\\templates\\front\\jardinenfant.html.twig");
    }
}
