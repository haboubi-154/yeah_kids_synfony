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

/* Dashboard/EventAdd.html.twig */
class __TwigTemplate_e6a70ca18db8326c94eecc02eafab80a8be05a73a1d54772becdc9fadc40aa34 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/EventAdd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/EventAdd.html.twig"));

        $this->parent = $this->loadTemplate("dashbase.html.twig", "Dashboard/EventAdd.html.twig", 1);
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
            <h6 class=\"m-0 font-weight-bold text-primary\">Event edit</h6>
        </div>
        <div class=\"card-body\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
            <span>Nom de l'évènement:</span>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "nomEvent", [], "any", false, false, false, 13), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "Nom Event"]]);
        echo "

            <br>

            <span>DateDebut de l'évènement:</span>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "dateDebutEvent", [], "any", false, false, false, 18), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "dateDebutEvent"]]);
        echo "
            <br>
            <span>DateFin de l'évènement:</span>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateFinEvent", [], "any", false, false, false, 21), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "dateFinEvent"]]);
        echo "
            <br>
            <span>Lieu de l'évènement:</span>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "lieuEvent", [], "any", false, false, false, 24), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "Lieu"]]);
        echo "
            <br>
            <span>Capacité de l'évènement:</span>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "capaciteEvent", [], "any", false, false, false, 27), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "capacite"]]);
        echo "
            <br>
            <span>Description de l'évènement:</span>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "descriptionEvent", [], "any", false, false, false, 30), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "description"]]);
        echo "
            <br>
            <span>Prix de l'évènement:</span>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "prixEvent", [], "any", false, false, false, 33), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "prix"]]);
        echo "


            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/EventAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  120 => 33,  114 => 30,  108 => 27,  102 => 24,  96 => 21,  90 => 18,  82 => 13,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashbase.html.twig' %}

{% block content %}


    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">
            <h6 class=\"m-0 font-weight-bold text-primary\">Event edit</h6>
        </div>
        <div class=\"card-body\">
            {{ form_start(form) }}
            <span>Nom de l'évènement:</span>
            {{ form_widget(form.nomEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'Nom Event'}}) }}

            <br>

            <span>DateDebut de l'évènement:</span>
            {{ form_widget(form.dateDebutEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'dateDebutEvent'}}) }}
            <br>
            <span>DateFin de l'évènement:</span>
            {{ form_widget(form.dateFinEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'dateFinEvent'}}) }}
            <br>
            <span>Lieu de l'évènement:</span>
            {{ form_widget(form.lieuEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'Lieu'}}) }}
            <br>
            <span>Capacité de l'évènement:</span>
            {{ form_widget(form.capaciteEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'capacite'}}) }}
            <br>
            <span>Description de l'évènement:</span>
            {{ form_widget(form.descriptionEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'description'}}) }}
            <br>
            <span>Prix de l'évènement:</span>
            {{ form_widget(form.prixEvent,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'prix'}}) }}


            {{ form_end(form) }}
        </div>
    </div>

{% endblock %}", "Dashboard/EventAdd.html.twig", "C:\\Users\\fedi\\fadi\\templates\\Dashboard\\EventAdd.html.twig");
    }
}
