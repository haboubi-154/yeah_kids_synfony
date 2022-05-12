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

/* livraison/imp.html.twig */
class __TwigTemplate_71adaef5228095979f5179b19753aab7af95ce2d0d7bb61c42e74b6f95e9b4b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/imp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/imp.html.twig"));

        // line 1
        echo "<style>

    h1 {
        font-size: 4rem;
        color:#303030;
        margin-left:250px;
    }

    body {
        font-size: 2rem;
        background:#ffeeba;

        padding:60px;
    }


    }
    footer {
        bottom:0;
        width:100%;
        position:absolute;
        padding-top:50px;

        height:50px;
    }









</style>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
</head>


<body >

<h2> Livraison</h2>
    <table style=\"width: 100%;\" >

        <tbody>
        <tr>
            <td>prix</td>
            <td>Adresse</td>

        </tr>
        <tr>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 56, $this->source); })()), "prix", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 57, $this->source); })()), "adresse", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>




<footer>
    <div class=\"container\"></div>
    <span>2022 © Yeah Kids</span>
</footer>
</body>
</HTML>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "livraison/imp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 57,  100 => 56,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>

    h1 {
        font-size: 4rem;
        color:#303030;
        margin-left:250px;
    }

    body {
        font-size: 2rem;
        background:#ffeeba;

        padding:60px;
    }


    }
    footer {
        bottom:0;
        width:100%;
        position:absolute;
        padding-top:50px;

        height:50px;
    }









</style>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
</head>


<body >

<h2> Livraison</h2>
    <table style=\"width: 100%;\" >

        <tbody>
        <tr>
            <td>prix</td>
            <td>Adresse</td>

        </tr>
        <tr>
            <td>{{ livraison.prix }}</td>
            <td>{{ livraison.adresse }}</td>
        </tr>
        </tbody>
    </table>




<footer>
    <div class=\"container\"></div>
    <span>2022 © Yeah Kids</span>
</footer>
</body>
</HTML>
", "livraison/imp.html.twig", "C:\\Users\\fedi\\fadi\\templates\\livraison\\imp.html.twig");
    }
}
