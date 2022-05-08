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

/* base_admin.html.twig */
class __TwigTemplate_37d5020fce11ac5e6292685e8c4641759e3bedd5d8bf803e633fd49463e2d2fd extends Template
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
            'bar' => [$this, 'block_bar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        // line 1
        echo "       ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "

        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    

        ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 270
        echo "
  ";
        // line 271
        $this->displayBlock('bar', $context, $blocks);
        // line 417
        echo "        
        ";
        // line 418
        $this->displayBlock('body', $context, $blocks);
        // line 421
        echo "
        
        
        
        
        
        
        
        
        
        
        
        ";
        // line 433
        $this->displayBlock('footer', $context, $blocks);
        // line 447
        echo "    
  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo " <!-- Favicons -->
  <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com"), "html", null, true);
        echo "\" rel=\"preconnect\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"), "html", null, true);
        echo "\" rel=\"stylesheet\">


  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">       
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 41
        echo "         <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
        <span class=\"d-none d-lg-block\">ADMIN</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-exclamation-circle text-warning\"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-x-circle text-danger\"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-check-circle text-success\"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-info-circle text-primary\"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 271
    public function block_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bar"));

        // line 272
        echo "    <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"index.html\">
          <i class=\"bi bi-grid\"></i>
          <span>dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Produit</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"components-alerts.html\">
              <i class=\"bi bi-circle\"></i><span>ListeProduit</span>
            </a>
          </li>
          <li>
            <a href=\"components-accordion.html\">
              <i class=\"bi bi-circle\"></i><span>AjoutProudit</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-journal-text\"></i><span>Event</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"forms-elements.html\">
              <i class=\"bi bi-circle\"></i><span>ListeEvent</span>
            </a>
          </li>
          <li>
            <a href=\"forms-layouts.html\">
              <i class=\"bi bi-circle\"></i><span>AjoutEvent</span>
            </a>
          </li>
         
            
        </ul>
      </li><!-- End event Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables_Users</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"";
        // line 329
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["role" => "parent"]);
        echo "\">
              <i class=\"bi bi-circle\"></i><span>listeParent</span>
            </a>
          </li>
          <li>
            <a href=\"";
        // line 334
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["role" => "manager"]);
        echo "\">
              <i class=\"bi bi-circle\"></i><span>listeManager</span>
            </a>
          </li>
\t\t  <li>
            <a href=\"";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index", ["role" => "admin"]);
        echo "\">
              <i class=\"bi bi-circle\"></i><span>listeAdmin</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-bar-chart\"></i><span>jardin</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"charts-chartjs.html\">
              <i class=\"bi bi-circle\"></i><span>listejardin</span>
            </a>
          </li>
          
          
        </ul>
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-gem\"></i><span>eleve</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"icons-bootstrap.html\">
              <i class=\"bi bi-circle\"></i><span>liste_eleve</span>
            </a>
          </li>
          
        </ul>
        
      </li><!-- End Icons Nav -->

      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
          <i class=\"bi bi-question-circle\"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
          <i class=\"bi bi-envelope\"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      

     

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"";
        // line 404
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" </a>

          <i class=\"bi bi-dash-circle\"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

     

    </ul>

  </aside><!-- End Sidebar-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 418
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 419
        echo "        
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 433
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 434
        echo "        <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  692 => 434,  682 => 433,  671 => 419,  661 => 418,  638 => 404,  570 => 339,  562 => 334,  554 => 329,  495 => 272,  485 => 271,  251 => 46,  244 => 41,  234 => 40,  222 => 36,  216 => 33,  212 => 32,  208 => 31,  204 => 30,  200 => 29,  196 => 28,  192 => 27,  187 => 26,  177 => 25,  165 => 21,  159 => 18,  155 => 17,  151 => 16,  147 => 15,  143 => 14,  139 => 13,  135 => 12,  128 => 8,  124 => 7,  118 => 4,  114 => 3,  111 => 2,  101 => 1,  90 => 447,  88 => 433,  74 => 421,  72 => 418,  69 => 417,  67 => 271,  64 => 270,  62 => 40,  58 => 38,  56 => 25,  52 => 23,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("       {% block stylesheets %}
 <!-- Favicons -->
  <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset(\"assets/img/apple-touch-icon.png\")}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"{{ asset(\"https://fonts.gstatic.com\")}}\" rel=\"preconnect\">
<link href=\"{{ asset(\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\")}}\" rel=\"stylesheet\">


  <!-- Vendor CSS Files -->
  <link href=\"{{ asset(\"assets/vendor/bootstrap/css/bootstrap.min.css\")}}\" rel=\"stylesheet\">
  <link href=\"{{ asset(\"assets/vendor/bootstrap-icons/bootstrap-icons.css\")}}\" rel=\"stylesheet\">
  <link href=\"{{ asset(\"assets/vendor/boxicons/css/boxicons.min.css\")}}\" rel=\"stylesheet\">
  <link href=\"{{ asset(\"assets/vendor/quill/quill.snow.css\")}}\" rel=\"stylesheet\">
  <link href=\"{{ asset(\"assets/vendor/quill/quill.bubble.css\")}}\" rel=\"stylesheet\">
  <link href=\"{{ asset(\"assets/vendor/remixicon/remixicon.css\")}}\" rel=\"stylesheet\">
  <link href=\"{{ asset(\"assets/vendor/simple-datatables/style.css\")}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{ asset(\"assets/css/style.css\")}}\" rel=\"stylesheet\">       
  {% endblock %}


        {% block javascripts %}
        <script src=\"{{ asset(\"assets/vendor/apexcharts/apexcharts.min.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/chart.js/chart.min.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/echarts/echarts.min.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/quill/quill.min.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/simple-datatables/simple-datatables.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/tinymce/tinymce.min.js\")}}\"></script>
  <script src=\"{{ asset(\"assets/vendor/php-email-form/validate.js\")}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset(\"assets/js/main.js\")}}\"></script>
        {% endblock %}
    

        {% block header %}
         <!-- ======= Header ======= -->
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"{{ asset(\"assets/img/logo.png\")}}\" alt=\"\">
        <span class=\"d-none d-lg-block\">ADMIN</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-exclamation-circle text-warning\"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-x-circle text-danger\"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-check-circle text-success\"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-info-circle text-primary\"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-2.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-3.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"assets/img/profile-img.jpg\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  {% endblock %}

  {% block bar %}
    <!-- ======= Sidebar ======= -->
  <aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"index.html\">
          <i class=\"bi bi-grid\"></i>
          <span>dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#components-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Produit</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"components-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"components-alerts.html\">
              <i class=\"bi bi-circle\"></i><span>ListeProduit</span>
            </a>
          </li>
          <li>
            <a href=\"components-accordion.html\">
              <i class=\"bi bi-circle\"></i><span>AjoutProudit</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-journal-text\"></i><span>Event</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"forms-elements.html\">
              <i class=\"bi bi-circle\"></i><span>ListeEvent</span>
            </a>
          </li>
          <li>
            <a href=\"forms-layouts.html\">
              <i class=\"bi bi-circle\"></i><span>AjoutEvent</span>
            </a>
          </li>
         
            
        </ul>
      </li><!-- End event Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables_Users</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"{{ path('app_user_index', {'role' : \"parent\"}) }}\">
              <i class=\"bi bi-circle\"></i><span>listeParent</span>
            </a>
          </li>
          <li>
            <a href=\"{{ path('app_user_index', {'role' : \"manager\"}) }}\">
              <i class=\"bi bi-circle\"></i><span>listeManager</span>
            </a>
          </li>
\t\t  <li>
            <a href=\"{{ path('app_user_index', {'role' : \"admin\"}) }}\">
              <i class=\"bi bi-circle\"></i><span>listeAdmin</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-bar-chart\"></i><span>jardin</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"charts-chartjs.html\">
              <i class=\"bi bi-circle\"></i><span>listejardin</span>
            </a>
          </li>
          
          
        </ul>
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#icons-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-gem\"></i><span>eleve</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"icons-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"icons-bootstrap.html\">
              <i class=\"bi bi-circle\"></i><span>liste_eleve</span>
            </a>
          </li>
          
        </ul>
        
      </li><!-- End Icons Nav -->

      <li class=\"nav-heading\">Pages</li>

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-faq.html\">
          <i class=\"bi bi-question-circle\"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-contact.html\">
          <i class=\"bi bi-envelope\"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      

     

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"{{ path('app_reclamation_index') }}\" </a>

          <i class=\"bi bi-dash-circle\"></i>
          <span>Reclamation</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

     

    </ul>

  </aside><!-- End Sidebar-->
{% endblock %}
        
        {% block body %}
        
        {% endblock %}

        
        
        
        
        
        
        
        
        
        
        
        {% block footer %}
        <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->
        {% endblock %}
    
  ", "base_admin.html.twig", "C:\\Users\\fedi\\fadi\\templates\\base_admin.html.twig");
    }
}
