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

/* front/resJEnfEleve.html.twig */
class __TwigTemplate_59ac4f030409738edabb00aa62662cd0a364740703f49dd324821f32c42c9988 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/resJEnfEleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/resJEnfEleve.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/resJEnfEleve.html.twig", 1);
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
    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center pb-2\">
                <p class=\"section-title px-5\"><span class=\"px-2\">#</span></p>
                <h1 class=\"mb-4\">Eleve</h1>
            </div>


            <div style =\"display:flex;align-items: center;justify-content: right; margin-top: 150px;\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Create new Eleve</h5>

                        <!-- General Form Elements -->
                        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prenom</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "prenom", [], "any", false, false, false, 34), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Age</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "age", [], "any", false, false, false, 40), 'widget', ["att" => ["class" => "form-control"]]);
        echo "

                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idp</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "idp", [], "any", false, false, false, 47), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "idp", [], "any", false, false, false, 48), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idj</label>
                            <div class=\"col-sm-10\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "idj", [], "any", false, false, false, 54), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "idj", [], "any", false, false, false, 55), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                            </div>
                        </div>




                        ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "<!-- End General Form Elements -->

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
        return "front/resJEnfEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 62,  166 => 55,  162 => 54,  153 => 48,  149 => 47,  139 => 40,  130 => 34,  126 => 33,  117 => 27,  113 => 26,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Eleve index{% endblock %}

{% block body %}

    <div class=\"container-fluid pt-5\">
        <div class=\"container\">
            <div class=\"text-center pb-2\">
                <p class=\"section-title px-5\"><span class=\"px-2\">#</span></p>
                <h1 class=\"mb-4\">Eleve</h1>
            </div>


            <div style =\"display:flex;align-items: center;justify-content: right; margin-top: 150px;\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Create new Eleve</h5>

                        <!-- General Form Elements -->
                        {{ form_start(form,{'attr': {'novalidate':'novalidate'}}) }}
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(form.nom,{'att':{'class':'form-control'}}) }}
                                {{ form_errors(form.nom,{'att':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prenom</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(form.prenom,{'att':{'class':'form-control'}}) }}
                                {{ form_errors(form.prenom,{'att':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Age</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(form.age,{'att':{'class':'form-control'}}) }}

                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idp</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(form.idp,{'att':{'class':'form-control'}}) }}
                                {{ form_errors(form.idp,{'att':{'class':'text-danger'}}) }}
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idj</label>
                            <div class=\"col-sm-10\">
                                {{ form_widget(form.idj,{'att':{'class':'form-control'}}) }}
                                {{ form_errors(form.idj,{'att':{'class':'text-danger'}}) }}
                            </div>
                        </div>




                        {{ form_end(form) }}<!-- End General Form Elements -->

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
{% endblock %}", "front/resJEnfEleve.html.twig", "C:\\Users\\fedi\\fadi\\templates\\front\\resJEnfEleve.html.twig");
    }
}
