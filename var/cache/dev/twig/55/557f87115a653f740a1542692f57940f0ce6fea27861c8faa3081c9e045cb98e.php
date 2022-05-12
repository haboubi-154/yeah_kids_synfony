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

/* home/publications.html.twig */
class __TwigTemplate_bbefd6432ee6fd80a90c5b1e976b1b8106693c810f9a7afc9b8d28043b29dcc0 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/publications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/publications.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "home/publications.html.twig", 1);
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
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">Publications</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section id=\"blog_page\" class=\"blog_page\">
        <div class=\"container\">
            <div class=\"row pb_20\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10 dot\">
                    <h2 class=\"section-title\">Publications</h2>
                </div>
                <div class=\"col-md-1\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9\">

                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pubs"]) || array_key_exists("pubs", $context) ? $context["pubs"] : (function () { throw new RuntimeError('Variable "pubs" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participation"]) {
            // line 30
            echo "                    <div class=\"blog_block wow fadeIn\">
                        <h3 class=\"blog_title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</h3>
                        <div class=\"row blog_info\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 pr_0\">
                                <div class=\"date\">
                                    <ul>
                                        <li class=\"number\">21</li>
                                        <li class=\"date_month\">oct<br>2017</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 prpl_0\">
                                <div class=\"author\">
                                    <ul>
                                        <li class=\"title\">Posted by</li>
                                        <li class=\"description\"><a href=\"#\">Eya BenOuirane</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-7 col-sm-7 col-xs-12 pl_0\">
                                <div class=\"tag\">
                                    <ul>
                                        <li class=\"title\">Tags</li>
                                        <li class=\"description\"><a href=\"#\">Education</a>, <a href=\"#\">Event</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog_block_img\">
                            <img src=\"img/blog/blog_page_img_1.jpg\" alt=\"\">
                        </div>
                        <div class=\"blog_brief\">
                            <p>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participation"], "description", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
                            <a class=\"btn btn-info\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdflivraison");
            echo "\">détails pubs</a>
                        </div>
                        <div class=\"blog_link\">
                            <div class=\"blog_share social_icon t_white\">
                                <ul>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"plr_10 pr_10 b_comment fa fa-comment\">5</i></a></li>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"pr_10 b_comment fa fa-eye\">259</i></a></li>
                                    <li><a href=\"#\"><i class=\"b_blue_dark_social fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"b_blue_social fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"b_red_social fa fa-google-plus\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"button\">
                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication", ["id" => twig_get_attribute($this->env, $this->source, $context["participation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">read more</a>
                            </div>
                        </div>
                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
                    <div class=\"product__pagination blog__pagination\">
                        ";
        // line 84
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pubs"]) || array_key_exists("pubs", $context) ? $context["pubs"] : (function () { throw new RuntimeError('Variable "pubs" does not exist.', 84, $this->source); })()));
        echo "

                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"sidebar\">
                        <div class=\"categories b_blue_light\">
                            <h4 class=\"title\">Categories</h4>
                            <ul>
                                <li><a href=\"#\">All <span>76</span></a></li>
                                <li><a href=\"#\">Education <span>17</span></a></li>
                                <li><a href=\"#\">Events <span>6</span></a></li>
                                <li><a href=\"#\">Event <span>24</span></a></li>
                                <li><a href=\"#\">Music lesson <span>16</span></a></li>
                                <li><a href=\"#\">Healthy food <span>9</span></a></li>
                                <li><a href=\"#\">Transport <span>4</span></a></li>
                            </ul>
                        </div>
                        <div class=\"row last_news\">
                            <h4 class=\"title\">Latest Posts</h4>
                            <div class=\"col-md-12 col-sm-4 block_news wow fadeInUp\">
                                <img src=\"img/blog/last_news_1.jpg\" alt=\"last_news\">
                                <h3><a href=\"blog_article.html\">Neptune Day</a></h3>
                                <p class=\"date\">21 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news wow fadeInUp\">
                                <img src=\"img/blog/last_news_2.jpg\" alt=\"last_news\">
                                <h3><a href=\"blog_article.html\">International Watermelon Day</a></h3>
                                <p class=\"date\">25 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news wow fadeInUp\">
                                <img src=\"img/blog/last_news_3.jpg\" alt=\"last_news\">
                                <h3><a href=\"blog_article.html\">Sport competitions</a></h3>
                                <p class=\"date\">29 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </tbody>



        </div>
    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/publications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 84,  168 => 82,  156 => 76,  140 => 63,  136 => 62,  102 => 31,  99 => 30,  95 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block content %}

    <div id=\"breadcrumbs\" class=\"section-block-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li class=\"active\">Publications</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section id=\"blog_page\" class=\"blog_page\">
        <div class=\"container\">
            <div class=\"row pb_20\">
                <div class=\"col-md-1\"></div>
                <div class=\"col-md-10 dot\">
                    <h2 class=\"section-title\">Publications</h2>
                </div>
                <div class=\"col-md-1\"></div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9\">

                    {% for participation in pubs %}
                    <div class=\"blog_block wow fadeIn\">
                        <h3 class=\"blog_title\">{{ participation.titre }}</h3>
                        <div class=\"row blog_info\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 pr_0\">
                                <div class=\"date\">
                                    <ul>
                                        <li class=\"number\">21</li>
                                        <li class=\"date_month\">oct<br>2017</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 prpl_0\">
                                <div class=\"author\">
                                    <ul>
                                        <li class=\"title\">Posted by</li>
                                        <li class=\"description\"><a href=\"#\">Eya BenOuirane</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-7 col-sm-7 col-xs-12 pl_0\">
                                <div class=\"tag\">
                                    <ul>
                                        <li class=\"title\">Tags</li>
                                        <li class=\"description\"><a href=\"#\">Education</a>, <a href=\"#\">Event</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"blog_block_img\">
                            <img src=\"img/blog/blog_page_img_1.jpg\" alt=\"\">
                        </div>
                        <div class=\"blog_brief\">
                            <p>{{ participation.description}}</p>
                            <a class=\"btn btn-info\" href=\"{{ path('pdflivraison') }}\">détails pubs</a>
                        </div>
                        <div class=\"blog_link\">
                            <div class=\"blog_share social_icon t_white\">
                                <ul>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"plr_10 pr_10 b_comment fa fa-comment\">5</i></a></li>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"pr_10 b_comment fa fa-eye\">259</i></a></li>
                                    <li><a href=\"#\"><i class=\"b_blue_dark_social fa fa-facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"b_blue_social fa fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"b_red_social fa fa-google-plus\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"button\">
                                <a href=\"{{ path('publication', { 'id': participation.id } )}}\">read more</a>
                            </div>
                        </div>
                    </div>

                    {% endfor %}

                    <div class=\"product__pagination blog__pagination\">
                        {{ knp_pagination_render(pubs) }}

                    </div>
                </div>
                <div class=\"col-md-3 col-sm-12\">
                    <div class=\"sidebar\">
                        <div class=\"categories b_blue_light\">
                            <h4 class=\"title\">Categories</h4>
                            <ul>
                                <li><a href=\"#\">All <span>76</span></a></li>
                                <li><a href=\"#\">Education <span>17</span></a></li>
                                <li><a href=\"#\">Events <span>6</span></a></li>
                                <li><a href=\"#\">Event <span>24</span></a></li>
                                <li><a href=\"#\">Music lesson <span>16</span></a></li>
                                <li><a href=\"#\">Healthy food <span>9</span></a></li>
                                <li><a href=\"#\">Transport <span>4</span></a></li>
                            </ul>
                        </div>
                        <div class=\"row last_news\">
                            <h4 class=\"title\">Latest Posts</h4>
                            <div class=\"col-md-12 col-sm-4 block_news wow fadeInUp\">
                                <img src=\"img/blog/last_news_1.jpg\" alt=\"last_news\">
                                <h3><a href=\"blog_article.html\">Neptune Day</a></h3>
                                <p class=\"date\">21 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news wow fadeInUp\">
                                <img src=\"img/blog/last_news_2.jpg\" alt=\"last_news\">
                                <h3><a href=\"blog_article.html\">International Watermelon Day</a></h3>
                                <p class=\"date\">25 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news wow fadeInUp\">
                                <img src=\"img/blog/last_news_3.jpg\" alt=\"last_news\">
                                <h3><a href=\"blog_article.html\">Sport competitions</a></h3>
                                <p class=\"date\">29 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </tbody>



        </div>
    </section>


{% endblock %}", "home/publications.html.twig", "C:\\Users\\fedi\\fadi\\templates\\home\\publications.html.twig");
    }
}
