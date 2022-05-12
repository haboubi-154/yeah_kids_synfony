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

/* home/publication.html.twig */
class __TwigTemplate_a5ebe10a5e2152f40e8cf1fe4456039a0dec0917279ed4799fa251b3df1231e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/publication.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/publication.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/publication.html.twig", 1);
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
        echo "    <div id=\"breadcrumbs\" class=\"section-block-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Publications</a></li>
                        <li class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id=\"blog_page\" class=\"blog_page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"blog_block\">
                        <h3 class=\"blog_title\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3>
                        <div class=\"row blog_info\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 pr_0\">
                                <div class=\"date\">
                                    <ul>
                                        <li class=\"number\">21</li>
                                        <li class=\"date_month\">dec<br>2017</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 prpl_0\">
                                <div class=\"author\">
                                    <ul>
                                        <li class=\"title\">Posted by</li>
                                        <li class=\"description\"><a href=\"#\">Eya Benouirane</a></li>
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
                        <div class=\"blog_block_img wow fadeIn\">
                            <img src=";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/blog_page_img_1.jpg"), "html", null, true);
        echo " alt=\"\">
                        </div>
                        <div class=\"blog_brief content\">

                            <p>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                        </div>
                        <div class=\"blog_link\">
                            <div class=\"blog_share social_icon t_white\">
                                <ul>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"plr_10 pr_10 b_comment fa fa-comment\">";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 60, $this->source); })())), "html", null, true);
        echo "</i></a></li>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"pr_10 b_comment fa fa-eye\">259</i></a></li>
                                    <li class=\"plr_10\"><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likePublication", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        echo "\"><i class=\"plr_10 pr_10 b_blue_dark_social fa fa-thumbs-up\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 62, $this->source); })()), "nbLike", [], "any", false, false, false, 62), "html", null, true);
        echo " </i></a></li>
                                    <li class=\"plr_10\"><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislikePublication", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\"><i class=\"plr_10 pr_10 b_red_social fa fa-thumbs-down\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 63, $this->source); })()), "nbDislike", [], "any", false, false, false, 63), "html", null, true);
        echo "</i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"comments\">
                            <h4 class=\"title\">";
        // line 69
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 69, $this->source); })())), "html", null, true);
        echo " comments</h4>
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 71
            echo "                            <div class=\"level_one\">
                                <div class=\"comment_content\">
                                    <div class=\"avatar\">
                                        <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/author1.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                    <div class=\"block_comment\">
                                        <div class=\"head_comment\">
                                            <div class=\"comment_title\">
                                                <h5>Eya Benouirane</h5>
                                                <p class=\"date\"><i class=\"fa fa-calendar\"></i> 12 oct 2017</p>
                                            </div>
                                        </div>
                                        <div class=\"comment_describe\">
                                            <p>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 84), "html", null, true);
            echo " </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                        </div>
                        <div class=\"leave_reply b_light\">
                            <h3>Leave a Reply</h3>
                            <div class=\"contact_form_white\">
                                    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_start');
        echo "
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "contenu", [], "any", false, false, false, 95), 'widget', ["attr" => ["id" => "message", "name" => "message", "placeholder" => "Text"]]);
        echo "
                                   <div id=\"messegeResult\" class=\"messegeResult\">
                                        <p>The message was successfully sent</p>
                                       ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "Ajouter", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "button"]]);
        echo "
                                        <button class=\"button\" type=\"submit\">Send</button>
                                    </div>
                                    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "

                            </div>
                        </div>
                        <div class=\"related_posts\">
                            <div class=\"row\">
                                <h4>Related posts</h4>
                                <div class=\"col-md-4 col-sm-4\">
                                    <div class=\"block_news wow fadeInUp\">
                                        <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/related_posts_1.jpg"), "html", null, true);
        echo "\" class=\"wow fadeIn\" alt=\"last_news\">
                                        <h3><a href=\"#\">Walk to nature</a></h3>
                                        <p class=\"date\">21 oct 2017</p>
                                        <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                        <a class=\"button\" href=\"#\">read more</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-4\">
                                    <div class=\"block_news wow fadeInUp\">
                                        <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/related_posts_2.jpg"), "html", null, true);
        echo "\" class=\"wow fadeIn\" alt=\"last_news\">
                                        <h3><a href=\"#\">Holiday heroes</a></h3>
                                        <p class=\"date\">25 oct 2017</p>
                                        <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                        <a class=\"button\" href=\"#\">read more</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-4\">
                                    <div class=\"block_news wow fadeInUp\">
                                        <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/related_posts_3.jpg"), "html", null, true);
        echo "\" class=\"wow fadeIn\" alt=\"last_news\">
                                        <h3><a href=\"#\">Cozy rooms</a></h3>
                                        <p class=\"date\">29 oct 2017</p>
                                        <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                        <a class=\"button\" href=\"#\">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"sidebar sidebar_blog_padding\">

                        <div class=\"last_news\">
                            <h4 class=\"title\">Latest Posts</h4>
                            <div class=\"col-md-12 col-sm-4 block_news\">
                                <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/last_news_1.jpg"), "html", null, true);
        echo "\" class=\"wow fadeIn\" alt=\"last_news\">
                                <h3><a href=\"#\">Neptune Day</a></h3>
                                <p class=\"date\">21 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news\">
                                <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/last_news_2.jpg"), "html", null, true);
        echo "\" class=\"wow fadeIn\" alt=\"last_news\">
                                <h3><a href=\"#\">International Watermelon Day</a></h3>
                                <p class=\"date\">23 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news\">
                                <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/last_news_3.jpg"), "html", null, true);
        echo "\" class=\"wow fadeIn\" alt=\"last_news\">
                                <h3><a href=\"#\">Sport competitions</a></h3>
                                <p class=\"date\">26 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
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
        return "home/publication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 159,  286 => 152,  276 => 145,  256 => 128,  244 => 119,  232 => 110,  220 => 101,  214 => 98,  208 => 95,  204 => 94,  198 => 90,  186 => 84,  173 => 74,  168 => 71,  164 => 70,  160 => 69,  149 => 63,  143 => 62,  138 => 60,  130 => 55,  123 => 51,  92 => 23,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
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
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">Publications</a></li>
                        <li class=\"active\">{{ pub.titre}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id=\"blog_page\" class=\"blog_page\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"blog_block\">
                        <h3 class=\"blog_title\">{{ pub.titre}}</h3>
                        <div class=\"row blog_info\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 pr_0\">
                                <div class=\"date\">
                                    <ul>
                                        <li class=\"number\">21</li>
                                        <li class=\"date_month\">dec<br>2017</li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-12 prpl_0\">
                                <div class=\"author\">
                                    <ul>
                                        <li class=\"title\">Posted by</li>
                                        <li class=\"description\"><a href=\"#\">Eya Benouirane</a></li>
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
                        <div class=\"blog_block_img wow fadeIn\">
                            <img src={{ asset('img/blog/blog_page_img_1.jpg') }} alt=\"\">
                        </div>
                        <div class=\"blog_brief content\">

                            <p>{{ pub.description}}</p>
                        </div>
                        <div class=\"blog_link\">
                            <div class=\"blog_share social_icon t_white\">
                                <ul>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"plr_10 pr_10 b_comment fa fa-comment\">{{ comments|length }}</i></a></li>
                                    <li class=\"plr_10\"><a href=\"#\"><i class=\"pr_10 b_comment fa fa-eye\">259</i></a></li>
                                    <li class=\"plr_10\"><a href=\"{{ path('likePublication', { 'id': pub.id } )}}\"><i class=\"plr_10 pr_10 b_blue_dark_social fa fa-thumbs-up\">{{ pub.nbLike}} </i></a></li>
                                    <li class=\"plr_10\"><a href=\"{{ path('dislikePublication', { 'id': pub.id } )}}\"><i class=\"plr_10 pr_10 b_red_social fa fa-thumbs-down\">{{ pub.nbDislike}}</i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"comments\">
                            <h4 class=\"title\">{{ comments|length }} comments</h4>
                            {% for comment in comments %}
                            <div class=\"level_one\">
                                <div class=\"comment_content\">
                                    <div class=\"avatar\">
                                        <img src=\"{{ asset('img/blog/author1.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"block_comment\">
                                        <div class=\"head_comment\">
                                            <div class=\"comment_title\">
                                                <h5>Eya Benouirane</h5>
                                                <p class=\"date\"><i class=\"fa fa-calendar\"></i> 12 oct 2017</p>
                                            </div>
                                        </div>
                                        <div class=\"comment_describe\">
                                            <p>{{ comment.contenu}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                        <div class=\"leave_reply b_light\">
                            <h3>Leave a Reply</h3>
                            <div class=\"contact_form_white\">
                                    {{ form_start(form) }}
                                    {{ form_widget(form.contenu,{'attr': {'id' : 'message' , 'name' : 'message' , 'placeholder' : 'Text'}}) }}
                                   <div id=\"messegeResult\" class=\"messegeResult\">
                                        <p>The message was successfully sent</p>
                                       {{ form_widget(form.Ajouter,{'attr': {'class' : 'button'}}) }}
                                        <button class=\"button\" type=\"submit\">Send</button>
                                    </div>
                                    {{ form_end(form) }}

                            </div>
                        </div>
                        <div class=\"related_posts\">
                            <div class=\"row\">
                                <h4>Related posts</h4>
                                <div class=\"col-md-4 col-sm-4\">
                                    <div class=\"block_news wow fadeInUp\">
                                        <img src=\"{{ asset('img/blog/related_posts_1.jpg') }}\" class=\"wow fadeIn\" alt=\"last_news\">
                                        <h3><a href=\"#\">Walk to nature</a></h3>
                                        <p class=\"date\">21 oct 2017</p>
                                        <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                        <a class=\"button\" href=\"#\">read more</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-4\">
                                    <div class=\"block_news wow fadeInUp\">
                                        <img src=\"{{ asset('img/blog/related_posts_2.jpg') }}\" class=\"wow fadeIn\" alt=\"last_news\">
                                        <h3><a href=\"#\">Holiday heroes</a></h3>
                                        <p class=\"date\">25 oct 2017</p>
                                        <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                        <a class=\"button\" href=\"#\">read more</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4 col-sm-4\">
                                    <div class=\"block_news wow fadeInUp\">
                                        <img src=\"{{ asset('img/blog/related_posts_3.jpg') }}\" class=\"wow fadeIn\" alt=\"last_news\">
                                        <h3><a href=\"#\">Cozy rooms</a></h3>
                                        <p class=\"date\">29 oct 2017</p>
                                        <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                        <a class=\"button\" href=\"#\">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"sidebar sidebar_blog_padding\">

                        <div class=\"last_news\">
                            <h4 class=\"title\">Latest Posts</h4>
                            <div class=\"col-md-12 col-sm-4 block_news\">
                                <img src=\"{{ asset('img/blog/last_news_1.jpg') }}\" class=\"wow fadeIn\" alt=\"last_news\">
                                <h3><a href=\"#\">Neptune Day</a></h3>
                                <p class=\"date\">21 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news\">
                                <img src=\"{{ asset('img/blog/last_news_2.jpg') }}\" class=\"wow fadeIn\" alt=\"last_news\">
                                <h3><a href=\"#\">International Watermelon Day</a></h3>
                                <p class=\"date\">23 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                            <div class=\"col-md-12 col-sm-4 block_news\">
                                <img src=\"{{ asset('img/blog/last_news_3.jpg') }}\" class=\"wow fadeIn\" alt=\"last_news\">
                                <h3><a href=\"#\">Sport competitions</a></h3>
                                <p class=\"date\">26 oct 2017</p>
                                <p class=\"brief\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a class=\"button\" href=\"#\">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "home/publication.html.twig", "C:\\Users\\fedi\\fadi\\templates\\home\\publication.html.twig");
    }
}
