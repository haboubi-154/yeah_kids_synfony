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

/* eleve/new.html.twig */
class __TwigTemplate_959d24659e6f7625b46d46eb550476feecda004d4be3eda289097ff5f68a18db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/new.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "eleve/new.html.twig", 1);
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

        echo "New Eleve";
        
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
<div style =\"display:flex;align-items: center;justify-content: right; margin-top: 150px;\">

    <div class=\"card\">
        <div class=\"card-body\">
            <h5 class=\"card-title\">Create new Eleve</h5>

            <!-- General Form Elements -->
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                    </div>
                </div>
            <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prenom</label>
                <div class=\"col-sm-10\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Age</label>
                <div class=\"col-sm-10\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "age", [], "any", false, false, false, 32), 'widget', ["att" => ["class" => "form-control"]]);
        echo "

                </div>
            </div>
            <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idp</label>
                <div class=\"col-sm-10\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "idp", [], "any", false, false, false, 39), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "idp", [], "any", false, false, false, 40), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>
            <div class=\"row mb-3\">
                <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idj</label>
                <div class=\"col-sm-10\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "idj", [], "any", false, false, false, 46), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "idj", [], "any", false, false, false, 47), 'errors', ["att" => ["class" => "text-danger"]]);
        echo "
                </div>
            </div>




            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "<!-- End General Form Elements -->

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eleve/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  158 => 47,  154 => 46,  145 => 40,  141 => 39,  131 => 32,  122 => 26,  118 => 25,  109 => 19,  105 => 18,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}New Eleve{% endblock %}

{% block body %}

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

{% endblock %}
", "eleve/new.html.twig", "C:\\Users\\fedi\\fadi\\templates\\eleve\\new.html.twig");
    }
}
