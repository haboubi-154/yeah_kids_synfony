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

/* base.html.twig */
class __TwigTemplate_f5bff446a78eab1e6190bfa7f311298b2538d86ca81f9df5f5a61bb8beba9ebd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
           
        ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>

    <body>
        ";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 119
        echo "        
        
        
        
        
        
        ";
        // line 125
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "        
        
        
        
        
        
        ";
        // line 132
        $this->displayBlock('footer', $context, $blocks);
        // line 141
        echo "    
    
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo " <!-- bootstrap core css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
  <!-- progress barstle -->
  <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/css-circular-prog-bar.css"), "html", null, true);
        echo "\">
  <!-- fonts style -->
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- font wesome stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <!-- Custom styles for this template -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />




  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/css-circular-prog-bar.css"), "html", null, true);
        echo "\">        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        echo "<div class=\"top_container\">
    <!-- header section strats -->
    <header class=\"header_section\">
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"index.html\">
            <img src=\"images/logo.png\" alt=\"\">
            <span>
              Adward
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
                  <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_parent");
        echo "\"> Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"about.html\"> About </a>
                </li>
                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jardinenfant_affiche");
        echo "\"> Jardin </a>
                </li>


                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_front");
        echo "\"> Shopping </a>
                </li>

                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> log out </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"\"> Profile </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\"> event </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publications");
        echo "\"> publication </a>
                </li>

                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">reclamation </a>
                </li>
                

              </ul>
              <form class=\"form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0\">
                <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
    <section class=\"hero_section \">
      <div class=\"hero-container container\">
        <div class=\"hero_detail-box\">
          <h3>
            Welcome to <br>
            Best educations
          </h3>
          <h1>
            school
          </h1>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised
          </p>
          <div class=\"hero_btn-continer\">
            <a href=\"\" class=\"call_to-btn btn_white-border\">
              <span>
                Contact
              </span>
              <img src=\"images/right-arrow.png\" alt=\"\">
            </a>
          </div>
        </div>
        <div class=\"hero_img-container\">
          <div>
            <img src=\"images/hero.png\" alt=\"\" class=\"img-fluid\">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo "<!-- footer section -->
  <section class=\"container-fluid footer_section\">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href=\"https://html.design/\">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  324 => 132,  306 => 125,  252 => 75,  245 => 71,  239 => 68,  230 => 62,  223 => 58,  215 => 53,  206 => 47,  175 => 27,  165 => 23,  155 => 22,  144 => 20,  136 => 15,  131 => 13,  126 => 11,  121 => 9,  116 => 7,  111 => 5,  108 => 4,  98 => 3,  86 => 141,  84 => 132,  76 => 126,  74 => 125,  66 => 119,  64 => 27,  59 => 24,  57 => 22,  54 => 21,  52 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
           
        {% block stylesheets %}
 <!-- bootstrap core css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"css/bootstrap.css\")}}\" />
  <!-- progress barstle -->
  <link rel=\"stylesheet\" href=\"{{ asset(\"css/css-circular-prog-bar.css\")}}\">
  <!-- fonts style -->
  <link href=\"{{ asset(\"https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap\")}}\" rel=\"stylesheet\">
  <!-- font wesome stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ asset(\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\")}}\">
  <!-- Custom styles for this template -->
  <link href=\"{{ asset(\"css/style.css\")}}\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"{{ asset(\"css/responsive.css\")}}\" rel=\"stylesheet\" />




  <link rel=\"stylesheet\" href=\"{{ asset(\"css/css-circular-prog-bar.css\")}}\">        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>

    <body>
        {% block header %}<div class=\"top_container\">
    <!-- header section strats -->
    <header class=\"header_section\">
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"index.html\">
            <img src=\"images/logo.png\" alt=\"\">
            <span>
              Adward
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
                  <a class=\"nav-link\" href=\"{{ path('app_home_parent') }}\"> Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"about.html\"> About </a>
                </li>
                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"{{ path('app_jardinenfant_affiche') }}\"> Jardin </a>
                </li>


                <li class=\"nav-item \">
                  <a class=\"nav-link\" href=\"{{ path('app_produit_front') }}\"> Shopping </a>
                </li>

                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{ path('app_login') }}\"> log out </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"\"> Profile </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{ path('events') }}\"> event </a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{ path('publications') }}\"> publication </a>
                </li>

                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"{{ path('app_reclamation_new') }}\">reclamation </a>
                </li>
                

              </ul>
              <form class=\"form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0\">
                <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\"></button>
              </form>
            </div>
        </nav>
      </div>
    </header>
    <section class=\"hero_section \">
      <div class=\"hero-container container\">
        <div class=\"hero_detail-box\">
          <h3>
            Welcome to <br>
            Best educations
          </h3>
          <h1>
            school
          </h1>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised
          </p>
          <div class=\"hero_btn-continer\">
            <a href=\"\" class=\"call_to-btn btn_white-border\">
              <span>
                Contact
              </span>
              <img src=\"images/right-arrow.png\" alt=\"\">
            </a>
          </div>
        </div>
        <div class=\"hero_img-container\">
          <div>
            <img src=\"images/hero.png\" alt=\"\" class=\"img-fluid\">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end header section -->{% endblock %}
        
        
        
        
        
        
        {% block body %}{% endblock %}
        
        
        
        
        
        
        {% block footer %}<!-- footer section -->
  <section class=\"container-fluid footer_section\">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href=\"https://html.design/\">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->
  {% endblock %}
    
    
", "base.html.twig", "C:\\Users\\fedi\\fadi\\templates\\base.html.twig");
    }
}
