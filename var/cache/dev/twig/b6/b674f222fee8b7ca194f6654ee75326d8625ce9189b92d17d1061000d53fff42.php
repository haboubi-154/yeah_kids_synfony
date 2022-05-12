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

/* home/index1.html.twig */
class __TwigTemplate_ebf896d13583c1d77fe5db92c846d83367845219ef657832322d04766776bd77 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index1.html.twig", 1);
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
    <div id=\"breadcrumbs\" class=\"section-block-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Home</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id=\"about_page\" class=\"about_page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 dot\">
                    <h2 class=\"section-title\">Welcome Aboard</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"about_page_text\">
                        <p>Lorem ipsum dolor sit amet, consectetur <a href=\"#\">adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis <a href=\"#\">aute irure dolor</a> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                            <li>Excepteur sint occaecat cupidatat non proident, </li>
                            <li>sunt in culpa qui officia deserunt mollit anim id est laborum. </li>
                            <li>Sed ut perspiciatis unde omnis iste natus error </li>
                            <li>sit voluptatem accusantium doloremque laudantium, </li>
                        </ul>
                        <p><strong>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</strong></p>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"about_page_img wow fadeIn\">
                        <img src=\"img/about/about_img.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"know_us\" class=\"know_us\">
        <div class=\"know_us_overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"know_us_left\">
                        <h2>Get to know us better!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"know_us_right\">
                        <p><a href=\"#\">read more<i class=\"fa fa-angle-right\"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"about_teacher\" class=\"about_teacher\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"section-title\">Qualified Teachers</h2>
                    <p class=\"section-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class=\"row arrows_red\">
                <div id=\"about_teacher_owl\" class=\"owl-carousel owl-theme\">
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block grey_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_2.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">John Bishop</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon t_green_dark\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block blue_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_1.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">Helen Douglas</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block yellow_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_3.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">Bryan Barker</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block red_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_4.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">Chloe Fowler</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id=\"about_counter\" class=\"about_counter section-block-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-6 wow fadeInUp\">
                    <p><i class=\"fa fa-smile-o\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">158</span></p>
                    <p>kids</p>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6 wow fadeInUp\">
                    <p><i class=\"fa fa-graduation-cap\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">19</span></p>
                    <p>teachers</p>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp\">
                    <p><i class=\"fa fa-bell\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">40</span></p>
                    <p>hours/week</p>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp\">
                    <p><i class=\"fa fa-university\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">1632</span></p>
                    <p>graduates</p>
                </div>
            </div><!-- end row -->
        </div>
    </div>

    <section id=\"about_stories\" class=\"about_stories\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"section-title\">Stories</h2>
                </div>
            </div>
            <div class=\"row arrows_red\">
                <div id=\"stories_owl\" class=\"owl-carousel owl-theme\">
                    <div class=\"item col-md-12\">
                        <div class=\"s_green_block all_color wow fadeInUp\">
                            <h4>Activities Improve Mind</h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            <p class=\"komma\"><object type=\"image/svg+xml\" data=\"img/icons/koma_grey.svg\"> <img src=\"img/icons/koma.png\" alt=\"image format png\" /></object></p>
                            <div class=\"stories_autor\">
                                <div class=\"stories_autor_avatar\">
                                    <img src=\"img/blog/author1.jpg\" alt=\"\">
                                </div>
                                <div class=\"stories_autor_text c_green\">
                                    <p><span>Linda Harrison</span></p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item col-md-12\">
                        <div class=\"s_red_block all_color wow fadeInUp\">
                            <h4>School Days</h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            <p class=\"komma\"><object type=\"image/svg+xml\" data=\"img/icons/koma_grey.svg\"> <img src=\"img/icons/koma.png\" alt=\"image format png\" /></object></p>
                            <div class=\"stories_autor\">
                                <div class=\"stories_autor_avatar\">
                                    <img src=\"img/blog/author2.jpg\" alt=\"\">
                                </div>
                                <div class=\"stories_autor_text c_red\">
                                    <p><span>Spencer Todd</span></p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item col-md-12\">
                        <div class=\"s_margin_block all_color wow fadeInUp\">
                            <h4>Active Learning</h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            <p class=\"komma\"><object type=\"image/svg+xml\" data=\"img/icons/koma_grey.svg\"> <img src=\"img/icons/koma.png\" alt=\"image format png\" /></object></p>
                            <div class=\"stories_autor\">
                                <div class=\"stories_autor_avatar\">
                                    <img src=\"img/blog/author4.jpg\" alt=\"\">
                                </div>
                                <div class=\"stories_autor_text c_blue\">
                                    <p><span>Chloe Wilkinson</span></p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

    <div id=\"breadcrumbs\" class=\"section-block-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Home</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id=\"about_page\" class=\"about_page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 dot\">
                    <h2 class=\"section-title\">Welcome Aboard</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"about_page_text\">
                        <p>Lorem ipsum dolor sit amet, consectetur <a href=\"#\">adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis <a href=\"#\">aute irure dolor</a> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <ul>
                            <li>Excepteur sint occaecat cupidatat non proident, </li>
                            <li>sunt in culpa qui officia deserunt mollit anim id est laborum. </li>
                            <li>Sed ut perspiciatis unde omnis iste natus error </li>
                            <li>sit voluptatem accusantium doloremque laudantium, </li>
                        </ul>
                        <p><strong>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</strong></p>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"about_page_img wow fadeIn\">
                        <img src=\"img/about/about_img.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"know_us\" class=\"know_us\">
        <div class=\"know_us_overlay\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"know_us_left\">
                        <h2>Get to know us better!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"know_us_right\">
                        <p><a href=\"#\">read more<i class=\"fa fa-angle-right\"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id=\"about_teacher\" class=\"about_teacher\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"section-title\">Qualified Teachers</h2>
                    <p class=\"section-description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class=\"row arrows_red\">
                <div id=\"about_teacher_owl\" class=\"owl-carousel owl-theme\">
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block grey_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_2.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">John Bishop</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon t_green_dark\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block blue_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_1.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">Helen Douglas</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block yellow_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_3.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">Bryan Barker</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-12\">
                            <div class=\"teacher_block red_block wow fadeInUp\">
                                <div class=\"teacher_avatar\">
                                    <img src=\"img/teacher/teacher_4.jpg\" alt=\"\">
                                </div>
                                <div class=\"teacher_about\">
                                    <h3><a href=\"teacher.html\">Chloe Fowler</a></h3>
                                    <span>Teacher</span>
                                    <div class=\"teacher_link social_icon\">
                                        <ul>
                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id=\"about_counter\" class=\"about_counter section-block-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-6 wow fadeInUp\">
                    <p><i class=\"fa fa-smile-o\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">158</span></p>
                    <p>kids</p>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6 wow fadeInUp\">
                    <p><i class=\"fa fa-graduation-cap\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">19</span></p>
                    <p>teachers</p>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp\">
                    <p><i class=\"fa fa-bell\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">40</span></p>
                    <p>hours/week</p>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp\">
                    <p><i class=\"fa fa-university\"></i></p>
                    <p class=\"number_count\"><span class=\"counter\">1632</span></p>
                    <p>graduates</p>
                </div>
            </div><!-- end row -->
        </div>
    </div>

    <section id=\"about_stories\" class=\"about_stories\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"section-title\">Stories</h2>
                </div>
            </div>
            <div class=\"row arrows_red\">
                <div id=\"stories_owl\" class=\"owl-carousel owl-theme\">
                    <div class=\"item col-md-12\">
                        <div class=\"s_green_block all_color wow fadeInUp\">
                            <h4>Activities Improve Mind</h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            <p class=\"komma\"><object type=\"image/svg+xml\" data=\"img/icons/koma_grey.svg\"> <img src=\"img/icons/koma.png\" alt=\"image format png\" /></object></p>
                            <div class=\"stories_autor\">
                                <div class=\"stories_autor_avatar\">
                                    <img src=\"img/blog/author1.jpg\" alt=\"\">
                                </div>
                                <div class=\"stories_autor_text c_green\">
                                    <p><span>Linda Harrison</span></p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item col-md-12\">
                        <div class=\"s_red_block all_color wow fadeInUp\">
                            <h4>School Days</h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            <p class=\"komma\"><object type=\"image/svg+xml\" data=\"img/icons/koma_grey.svg\"> <img src=\"img/icons/koma.png\" alt=\"image format png\" /></object></p>
                            <div class=\"stories_autor\">
                                <div class=\"stories_autor_avatar\">
                                    <img src=\"img/blog/author2.jpg\" alt=\"\">
                                </div>
                                <div class=\"stories_autor_text c_red\">
                                    <p><span>Spencer Todd</span></p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item col-md-12\">
                        <div class=\"s_margin_block all_color wow fadeInUp\">
                            <h4>Active Learning</h4>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            <p class=\"komma\"><object type=\"image/svg+xml\" data=\"img/icons/koma_grey.svg\"> <img src=\"img/icons/koma.png\" alt=\"image format png\" /></object></p>
                            <div class=\"stories_autor\">
                                <div class=\"stories_autor_avatar\">
                                    <img src=\"img/blog/author4.jpg\" alt=\"\">
                                </div>
                                <div class=\"stories_autor_text c_blue\">
                                    <p><span>Chloe Wilkinson</span></p>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "home/index1.html.twig", "C:\\Users\\fedi\\fadi\\templates\\home\\index1.html.twig");
    }
}
