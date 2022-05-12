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

/* map/index.html.twig */
class __TwigTemplate_cd632e417e4a1fd25875698726e7cecd425848f157ba02b37e256ab9da4c5ad7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Display navigation directions</title>
    <meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\">
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js\"></script>
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
<script src=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js\"></script>
<link rel=\"stylesheet\" href=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css\" type=\"text/css\">
<div id=\"map\"></div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibG90ZmkxMjM0IiwiYSI6ImNsMmZ3dzFxdjBlb2kzYnBnNXkxemdvNnYifQ.k1S8erGchxOBYO3eXhllzA';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-79.4512, 43.6568],
        zoom: 13
    });

    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken
        }),
        'top-left'
    );
</script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "map/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>Display navigation directions</title>
    <meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\">
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js\"></script>
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
<script src=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js\"></script>
<link rel=\"stylesheet\" href=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css\" type=\"text/css\">
<div id=\"map\"></div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibG90ZmkxMjM0IiwiYSI6ImNsMmZ3dzFxdjBlb2kzYnBnNXkxemdvNnYifQ.k1S8erGchxOBYO3eXhllzA';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-79.4512, 43.6568],
        zoom: 13
    });

    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken
        }),
        'top-left'
    );
</script>

</body>
</html>", "map/index.html.twig", "C:\\Users\\fedi\\fadi\\templates\\map\\index.html.twig");
    }
}
