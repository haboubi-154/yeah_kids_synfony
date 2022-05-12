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

/* eleve/edit.html.twig */
class __TwigTemplate_16ca96003ac7c957ed267348b69f619e1be84b831f230f776105ec42692be077 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/edit.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "eleve/edit.html.twig", 1);
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

        echo "Edit Eleve";
        
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
                <h5 class=\"card-title\">Edit Eleve</h5>

                <!-- General Form Elements -->
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["att" => ["class" => "form-control"]]);
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
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Age</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "age", [], "any", false, false, false, 31), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idp</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "idp", [], "any", false, false, false, 37), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idj</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "idj", [], "any", false, false, false, 43), 'widget', ["att" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>


                <div class=\"row mb-3\">
                    <label class=\"col-sm-4 col-form-label\">Update</label>
                    <div class=\"col-sm-10\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "ajouter", [], "any", false, false, false, 51), 'widget', ["att" => ["class" => "btn btn-primary"]]);
        echo "

                    </div>
                </div>

                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "<!-- End General Form Elements -->

            </div>
        </div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "eleve/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 56,  153 => 51,  142 => 43,  133 => 37,  124 => 31,  115 => 25,  106 => 19,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Edit Eleve{% endblock %}

{% block body %}


    <div style =\"display:flex;align-items: center;justify-content: center; margin-top: 150px;\">

        <div class=\"card\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">Edit Eleve</h5>

                <!-- General Form Elements -->
                {{ form_start(form) }}
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Nom</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.nom,{'att':{'class':'form-control'}}) }}
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Prenom</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.prenom,{'att':{'class':'form-control'}}) }}
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
                    </div>
                </div>
                <div class=\"row mb-3\">
                    <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Idj</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.idj,{'att':{'class':'form-control'}}) }}
                    </div>
                </div>


                <div class=\"row mb-3\">
                    <label class=\"col-sm-4 col-form-label\">Update</label>
                    <div class=\"col-sm-10\">
                        {{ form_widget(form.ajouter,{'att':{'class':'btn btn-primary'}}) }}

                    </div>
                </div>

                {{ form_end(form) }}<!-- End General Form Elements -->

            </div>
        </div>

        {% endblock %}
", "eleve/edit.html.twig", "C:\\Users\\fedi\\fadi\\templates\\eleve\\edit.html.twig");
    }
}
