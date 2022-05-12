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

/* livraison/show.html.twig */
class __TwigTemplate_a7947eed2f70d90439532c47263f51a51b05e4c31a377c851827bccb4ba00155 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/show.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <!-- Site Metas -->
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />

    <title>Yeah Kids</title>



    <!-- bootstrap core css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../css/bootstrap.css\" />
    <!-- progress barstle -->
    <link rel=\"stylesheet\" href=\"../../css/css-circular-prog-bar.css\">
    <!-- fonts style -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\" rel=\"stylesheet\">
    <!-- font wesome stylesheet -->
    <link rel=\"stylesheet\" href=\"../https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
    <!-- Custom styles for this template -->
    <link href=\"../../css/style.css\" rel=\"stylesheet\" />
    <!-- responsive style -->
    <link href=\"../../css/responsive.css\" rel=\"stylesheet\" />




    <link rel=\"stylesheet\" href=\"../../css/css-circular-prog-bar.css\">


</head>

<body>
<div class=\"top_container sub_pages\">
    <!-- header section strats -->
    <header class=\"header_section\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                <a class=\"navbar-brand\" href=\"index.html\">

                    <span>
              Yeah Kids
            </span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <div class=\"d-flex ml-auto flex-column flex-lg-row align-items-center\">
                        <ul class=\"navbar-nav  \">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"index.html\"> Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"about.html\"> About </a>
                            </li>

                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"teacher.html\"> Teacher </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"vehicle.html\"> Shop </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.html\">Contact Us</a>
                            </li>

                        </ul>
                        <form class=\"form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0\">
                            <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\"></button>
                        </form>
                    </div>
            </nav>
        </div>
    </header>
</div>
<!-- end header section -->


<!-- vehicle section -->




";
        // line 98
        $this->displayBlock('title', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "






<!-- vehicle section -->


<!-- footer section -->
<section class=\"container-fluid footer_section\">
    <p>
        Yeah Kids &copy; 2022
    </p>
</section>
<!-- footer section -->

<script type=\"text/javascript\" src=\"../../js/jquery-3.4.1.min.js\"></script>
<script type=\"text/javascript\" src=\"../../js/bootstrap.js\"></script>
<!-- progreesbar script -->

</script>
<script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
            lat: 40.645037,
            lng: -73.880224
        },
    });

    var image = 'images/maps-and-flags.png';
    var beachMarker = new google.maps.Marker({
        position: {
            lat: 40.645037,
            lng: -73.880224
        },
        map: map,
        icon: image
    });
}
</script>
<!-- google map js -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap\">
</script>
<!-- end google map js -->
</body>

</html>






";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Livraison";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 101
        echo "

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 111, $this->source); })()), "prix", [], "any", false, false, false, 111), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 115, $this->source); })()), "adresse", [], "any", false, false, false, 115), "html", null, true);
        echo "</td>
        </tr>


        <tr>
            <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_imp", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\">Imprimer</a>
        </tr>


        </tbody>
    </table>

    <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 131
        echo twig_include($this->env, $context, "livraison/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livraison/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  299 => 131,  294 => 129,  289 => 127,  279 => 120,  271 => 115,  264 => 111,  257 => 107,  249 => 101,  239 => 100,  220 => 98,  151 => 133,  149 => 100,  146 => 99,  144 => 98,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <!-- Site Metas -->
    <meta name=\"keywords\" content=\"\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />

    <title>Yeah Kids</title>



    <!-- bootstrap core css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../css/bootstrap.css\" />
    <!-- progress barstle -->
    <link rel=\"stylesheet\" href=\"../../css/css-circular-prog-bar.css\">
    <!-- fonts style -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\" rel=\"stylesheet\">
    <!-- font wesome stylesheet -->
    <link rel=\"stylesheet\" href=\"../https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
    <!-- Custom styles for this template -->
    <link href=\"../../css/style.css\" rel=\"stylesheet\" />
    <!-- responsive style -->
    <link href=\"../../css/responsive.css\" rel=\"stylesheet\" />




    <link rel=\"stylesheet\" href=\"../../css/css-circular-prog-bar.css\">


</head>

<body>
<div class=\"top_container sub_pages\">
    <!-- header section strats -->
    <header class=\"header_section\">
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-lg custom_nav-container \">
                <a class=\"navbar-brand\" href=\"index.html\">

                    <span>
              Yeah Kids
            </span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <div class=\"d-flex ml-auto flex-column flex-lg-row align-items-center\">
                        <ul class=\"navbar-nav  \">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"index.html\"> Home <span class=\"sr-only\">(current)</span></a>
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"about.html\"> About </a>
                            </li>

                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=\"teacher.html\"> Teacher </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"vehicle.html\"> Shop </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"contact.html\">Contact Us</a>
                            </li>

                        </ul>
                        <form class=\"form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0\">
                            <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\"></button>
                        </form>
                    </div>
            </nav>
        </div>
    </header>
</div>
<!-- end header section -->


<!-- vehicle section -->




{% block title %}Livraison{% endblock %}

{% block body %}


    <table class=\"table\">
        <tbody>
        <tr>
            <th>Id</th>
            <td>{{ livraison.id }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ livraison.prix }}</td>
        </tr>
        <tr>
            <th>Adresse</th>
            <td>{{ livraison.adresse }}</td>
        </tr>


        <tr>
            <a href=\"{{ path('livraison_imp' , {'id' : livraison.id}) }}\">Imprimer</a>
        </tr>


        </tbody>
    </table>

    <a href=\"{{ path('app_livraison_index') }}\">back to list</a>

    <a href=\"{{ path('app_livraison_edit', {'id': livraison.id}) }}\">edit</a>

    {{ include('livraison/_delete_form.html.twig') }}
{% endblock %}







<!-- vehicle section -->


<!-- footer section -->
<section class=\"container-fluid footer_section\">
    <p>
        Yeah Kids &copy; 2022
    </p>
</section>
<!-- footer section -->

<script type=\"text/javascript\" src=\"../../js/jquery-3.4.1.min.js\"></script>
<script type=\"text/javascript\" src=\"../../js/bootstrap.js\"></script>
<!-- progreesbar script -->

</script>
<script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
            lat: 40.645037,
            lng: -73.880224
        },
    });

    var image = 'images/maps-and-flags.png';
    var beachMarker = new google.maps.Marker({
        position: {
            lat: 40.645037,
            lng: -73.880224
        },
        map: map,
        icon: image
    });
}
</script>
<!-- google map js -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap\">
</script>
<!-- end google map js -->
</body>

</html>






", "livraison/show.html.twig", "C:\\Users\\fedi\\fadi\\templates\\livraison\\show.html.twig");
    }
}
