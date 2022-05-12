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

/* base2.html.twig */
class __TwigTemplate_029613e1d0fd94175ceee6becc4ceafb22cb57510ef511587ad1ef12d3c16a8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <title>Yeah Kids - Children & Kindergarten HTML Template</title>
    <meta name=\"description\" content=\"\">

    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- Favicon and Apple Touch Icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon1.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-touch-icon.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-touch-icon-72x72.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-touch-icon-114x114.html"), "html", null, true);
        echo "\">

    <!-- Stylesheets -->

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style5fd0.css?114"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mediab6ae.css?037"), "html", null, true);
        echo "\">

    <!--[if lt IE 9 ]>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/html5shiv-master/html5shiv.js"), "html", null, true);
        echo "\"></script><meta content=\"no\" http-equiv=\"imagetoolbar\">
    <![endif]-->

</head>

</body>

<header id=\"home\">
    <div class=\"section_logo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"logo_block\">
                        <a href=\"index.html\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/header/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            <span>Kindergarten</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"reg_block\">
                        <ul>
                            <li><a href=\"mailto:office@yeahkids.com\">office@yeahkids.com</a></li>
                            <li class=\"reg_style\">
                                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"14px\" height=\"14px\"
                                     viewBox=\"0 0 14 14\" style=\"enable-background:new 0 0 14 14;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(96 384)\">
                                        <path class=\"svg_icons svg_phone\" d=\"M-82.1-372.8l-0.1-0.2c-0.2-0.5-0.7-1-1.2-1.1l-1.8-0.5c-0.5-0.1-1.2,0-1.6,0.4l-0.7,0.7c-2.4-0.7-4.3-2.6-5-5
\t\t\t\t\t\t\t\t\t\tl0.7-0.7c0.4-0.4,0.5-1.1,0.4-1.6l-0.5-1.8c-0.1-0.5-0.6-1-1.1-1.2l-0.2-0.1c-0.5-0.2-1.2,0-1.6,0.4l-1,1c-0.2,0.2-0.3,0.7-0.3,0.7
\t\t\t\t\t\t\t\t\t\tc0,3.2,1.2,6.2,3.4,8.4c2.2,2.2,5.3,3.5,8.4,3.4c0,0,0.5-0.1,0.7-0.3l1-1C-82.1-371.6-81.9-372.3-82.1-372.8L-82.1-372.8z\"/>
                                    </g>
\t\t\t\t\t\t\t\t</svg>
                                888-258-1669</li>
                            <li class=\"reg_style\"><a href=\"login.html\">
                                    <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"18px\" height=\"14px\"
                                         viewBox=\"0 0 18 14\" style=\"enable-background:new 0 0 18 14;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path class=\"svg_icons svg_login\" d=\"M13.9,7c0,0.2-0.1,0.4-0.2,0.5l-6.4,5.9c-0.1,0.1-0.3,0.2-0.5,0.2s-0.4-0.1-0.5-0.2S6,13.1,6,12.9V9.8H0.8
\t\t\t\t\t\t\t\t\tc-0.2,0-0.4-0.1-0.5-0.2S0,9.3,0,9.1V4.9c0-0.2,0.1-0.4,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2H6V1c0-0.2,0.1-0.4,0.2-0.5s0.3-0.2,0.5-0.2
\t\t\t\t\t\t\t\t\ts0.4,0.1,0.5,0.2l6.4,5.9C13.8,6.6,13.9,6.8,13.9,7z M18,3.2v7.7c0,0.9-0.3,1.6-1,2.2c-0.7,0.6-1.5,0.9-2.4,0.9h-3.8
\t\t\t\t\t\t\t\t\tc-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.1-0.2c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.2,0.1-0.2
\t\t\t\t\t\t\t\t\tc0.1,0,0.1-0.1,0.2-0.1h3.8c0.5,0,1-0.2,1.3-0.5c0.4-0.3,0.6-0.8,0.6-1.2V3.2c0-0.5-0.2-0.9-0.6-1.2c-0.4-0.3-0.8-0.5-1.3-0.5H11
\t\t\t\t\t\t\t\t\tl-0.1,0l-0.1,0l-0.1-0.1l-0.1-0.1l0-0.1c0,0,0-0.1,0-0.2s0-0.2,0-0.3s0-0.2,0-0.3s0.1-0.2,0.1-0.2S10.8,0,10.9,0h3.8
\t\t\t\t\t\t\t\t\tc0.9,0,1.7,0.3,2.4,0.9S18,2.3,18,3.2z\"/>
\t\t\t\t\t\t\t\t</svg>
                                    LOG IN</a></li>
                            <li class=\"reg_style\"><a href=\"reg.html\">
                                    <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"14px\" height=\"14px\"
                                         viewBox=\"0 0 14 14\" style=\"enable-background:new 0 0 14 14;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path class=\"svg_icons svg_key\" d=\"M0,11.5l0,1.8C0,13.7,0.3,14,0.7,14h1.8c0.2,0,0.4-0.1,0.5-0.2l0.5-0.5v-1.4h1.4v-1.4h1.4l1-1
\t\t\t\t\t\t\t\t\tc0.5,0.2,1.1,0.3,1.8,0.3c2.7,0,4.9-2.2,4.9-4.9S11.8,0,9.1,0S4.2,2.2,4.2,4.9c0,0.6,0.1,1.2,0.3,1.8L0.2,11C0.1,11.1,0,11.3,0,11.5
\t\t\t\t\t\t\t\t\tz M8.4,3.8c0-1,0.8-1.8,1.8-1.8s1.8,0.8,1.8,1.8s-0.8,1.8-1.8,1.8S8.4,4.8,8.4,3.8z\"/>
\t\t\t\t\t\t\t\t</svg>
                                    REGISTER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section_menu\">
        <div class=\"mnu_fixed\">
            <div class=\"mnu_wave\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"mnu mnu_mobile hidden-lg hidden-md\">
                            <div class=\"icon_shop hidden-lg hidden-md\">
                                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a>
                            </div>
                            <div class=\"input_search hidden-lg hidden-md\">
                                <input type=\"text\" placeholder=\"Search...\">
                                <a class=\"btnsearch\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <div class=\"toggle_block hidden-lg hidden-md\">
                                <a href=\"#\" class=\"toggle-mnu\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"logo_block\">
                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/header/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"icon_shop hidden-sm hidden-xs\">
                            <a href=\"shop_cart.html\"><i class=\"fa fa-shopping-cart\"></i></a>
                        </div>
                        <div class=\"search hidden-sm hidden-xs\">
                            <div class=\"icon_search hidden-sm hidden-xs\">
                                <a class=\"btnopen\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <div class=\"input_search\">
                                <input type=\"text\" placeholder=\"Search...\">
                                <a class=\"btnclose\" href=\"#\">×</a>
                                <a class=\"btnsearch\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                        <div class=\"mnu hidden-sm hidden-xs\">
                            <ul>
                                <li class=\"drop1\"><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_parent");
        echo "\">Home</a>
                                </li>
                                <li class=\"drop2\"><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\">Events</a>
                                </li>
                                <li class=\"drop3\"><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publications");
        echo "\">Publications</a>
                                </li>
                                <li class=\"drop4\"><a href=\"javascript:void(0);\">Page</a>
                                    <ul class=\"mnu_child\">
                                        <li><a href=\"events.html\">Events</a></li>
                                        <li><a href=\"event.html\">Event</a></li>
                                        <li><a href=\"price-table_a.html\">Price V1</a></li>
                                        <li><a href=\"price-table_b.html\">Price V2</a></li>
                                        <li><a href=\"gallery.html\">Gallery</a></li>
                                        <li><a href=\"reviews.html\">Reviews</a></li>
                                        <li><a href=\"FAQ.html\">FAQ</a></li>
                                        <li><a href=\"404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop5\"><a href=\"blog.html\">Blog</a>
                                    <ul class=\"mnu_child\">
                                        <li><a href=\"blog_article.html\">Post</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop6\"><a href=\"shop_grid.html\">Shop</a>
                                    <ul class=\"mnu_child\">
                                        <li><a href=\"shop_list.html\">Version 2</a></li>
                                        <li><a href=\"shop_item.html\">
                                                Item page</a></li>
                                        <li><a href=\"shop_cart.html\">Cart</a></li>
                                        <li><a href=\"shop_cart_empty.html\">Cart Empty</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop7\"><a href=\"contact.html\">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xs-12 top_mnu\">
                        <div class=\"mobile_mnu\">
                            <ul>
                                <li class=\"drop1\"><a href=\"index.html\">Home</a>
                                </li>
                                <li class=\"drop2\"><a class=\"drop2_mnu\" href=\"#\">About us</a>
                                    <ul class=\"mnu_child drop_mnu2\">
                                        <li><a href=\"about_us.html\">About us</a></li>
                                        <li><a href=\"teachers.html\">Teachers</a></li>
                                        <li><a href=\"teacher.html\">Teacher</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop3\"><a class=\"drop3_mnu\" href=\"#\">Services</a>
                                    <ul class=\"mnu_child drop_mnu3\">
                                        <li><a href=\"service_v1.html\">Version 1</a></li>
                                        <li><a href=\"service_v2.html\">Version 2</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop4\"><a class=\"drop4_mnu\" href=\"#\">Page</a>
                                    <ul class=\"mnu_child drop_mnu4\">
                                        <li><a href=\"events.html\">Events</a></li>
                                        <li><a href=\"event.html\">Event</a></li>
                                        <li><a href=\"price-table_a.html\">Price V1</a></li>
                                        <li><a href=\"price-table_b.html\">Price V2</a></li>
                                        <li><a href=\"gallery.html\">Gallery</a></li>
                                        <li><a href=\"reviews.html\">Reviews</a></li>
                                        <li><a href=\"FAQ.html\">FAQ</a></li>
                                        <li><a href=\"404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop5\"><a class=\"drop5_mnu\" href=\"#\">Blog</a>
                                    <ul class=\"mnu_child drop_mnu5\">
                                        <li><a href=\"blog.html\">Blog</a></li>
                                        <li><a href=\"blog_article.html\">Post</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop6\"><a class=\"drop6_mnu\" href=\"#\">Shop</a>
                                    <ul class=\"mnu_child drop_mnu6\">
                                        <li><a href=\"shop_grid.html\">Version 1</a></li>
                                        <li><a href=\"shop_list.html\">Version 2</a></li>
                                        <li><a href=\"shop_item.html\">
                                                Item page</a></li>
                                        <li><a href=\"shop_cart.html\">Cart</a></li>
                                        <li><a href=\"shop_cart_empty.html\">Cart Empty</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop7\"><a href=\"contact.html\">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<div id=\"content\">
    ";
        // line 217
        $this->displayBlock('content', $context, $blocks);
        // line 218
        echo "</div>

<footer>
    <div class=\"overlay_footer_land\"></div>
    <div class=\"container\">
        <div class=\"row pb_40\">
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <div class=\"footer_about\">
                    <h3>About</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                    <p class=\"footer_time\"><i class=\"fa fa-clock-o\"><span></span></i>Mon-Fri: 8.00 AM - 6.00 PM</p>
                    <div class=\"footer_social social_icon\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <h3>Tweets</h3>
                <div class=\"footer_tweets\">
                    <p><i class=\"fa fa-twitter\"></i>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><i class=\"fa fa-twitter\"></i>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><i class=\"fa fa-twitter\"></i>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <h3>Instagram</h3>
                <div class=\"footer_instagram\">
                    <ul>
                        <li><a href=\"#\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer_1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer_2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer_3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer_4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer_5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer/footer_6.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <h3>Newsletters</h3>
                <div class=\"footer_newsletters\">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                    <div class=\"footer_mail\">
                        <form method=\"post\" id=\"contact_form_footer\">
                            <div class=\"form-group\">
                                <input id=\"email_footer\" name=\"email\" type=\"text\" placeholder=\"Your email\">
                            </div>
                            <div id=\"messegeResultFooter\" class=\"messegeResult\">
                                <p>The message was successfully sent</p>
                                <button type=\"submit\">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container_fluent copywriting\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p>Copyright © 2017 Yeah Kids Template by <a href=\"http://fvdthemes.com/\" target=\"_blank\">FVD Themes</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded/imagesloaded.pkgd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/magnific-popup/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/parallax/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/page-scroll-to-id/jquery.malihu.PageScroll2id.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/object-fit-images/ofi.browser.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count/jquery.countup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/validate/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sticky-kit-master/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slider-pro-master/jquery.sliderPro.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/functionsf899.js?100"), "html", null, true);
        echo "\"></script>
<!--End JS -->


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 217
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 217,  465 => 306,  461 => 305,  457 => 304,  453 => 303,  449 => 302,  445 => 301,  441 => 300,  437 => 299,  433 => 298,  429 => 297,  425 => 296,  421 => 295,  417 => 294,  413 => 293,  409 => 292,  405 => 291,  401 => 290,  397 => 289,  393 => 288,  357 => 255,  353 => 254,  349 => 253,  345 => 252,  341 => 251,  337 => 250,  303 => 218,  301 => 217,  205 => 124,  200 => 122,  195 => 120,  175 => 103,  108 => 39,  92 => 26,  86 => 23,  81 => 21,  76 => 19,  68 => 14,  64 => 13,  60 => 12,  56 => 11,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"zxx\">
<head>
    <meta charset=\"utf-8\">
    <title>Yeah Kids - Children & Kindergarten HTML Template</title>
    <meta name=\"description\" content=\"\">

    <!-- Mobile Specific Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    <!-- Favicon and Apple Touch Icons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('img/favicon/favicon1.ico') }}\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"{{ asset('img/favicon/apple-touch-icon.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('img/favicon/apple-touch-icon-72x72.html') }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('img/favicon/apple-touch-icon-114x114.html') }}\">

    <!-- Stylesheets -->

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap/bootstrap.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/style5fd0.css?114') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/mediab6ae.css?037') }}\">

    <!--[if lt IE 9 ]>
    <script src=\"{{ asset('/js/html5shiv-master/html5shiv.js') }}\"></script><meta content=\"no\" http-equiv=\"imagetoolbar\">
    <![endif]-->

</head>

</body>

<header id=\"home\">
    <div class=\"section_logo\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-12\">
                    <div class=\"logo_block\">
                        <a href=\"index.html\"><img src=\"{{ asset('img/header/logo.png') }}\" alt=\"\">
                            <span>Kindergarten</span>
                        </a>
                    </div>
                </div>
                <div class=\"col-md-9 col-sm-9 col-xs-12\">
                    <div class=\"reg_block\">
                        <ul>
                            <li><a href=\"mailto:office@yeahkids.com\">office@yeahkids.com</a></li>
                            <li class=\"reg_style\">
                                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"14px\" height=\"14px\"
                                     viewBox=\"0 0 14 14\" style=\"enable-background:new 0 0 14 14;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<g transform=\"translate(96 384)\">
                                        <path class=\"svg_icons svg_phone\" d=\"M-82.1-372.8l-0.1-0.2c-0.2-0.5-0.7-1-1.2-1.1l-1.8-0.5c-0.5-0.1-1.2,0-1.6,0.4l-0.7,0.7c-2.4-0.7-4.3-2.6-5-5
\t\t\t\t\t\t\t\t\t\tl0.7-0.7c0.4-0.4,0.5-1.1,0.4-1.6l-0.5-1.8c-0.1-0.5-0.6-1-1.1-1.2l-0.2-0.1c-0.5-0.2-1.2,0-1.6,0.4l-1,1c-0.2,0.2-0.3,0.7-0.3,0.7
\t\t\t\t\t\t\t\t\t\tc0,3.2,1.2,6.2,3.4,8.4c2.2,2.2,5.3,3.5,8.4,3.4c0,0,0.5-0.1,0.7-0.3l1-1C-82.1-371.6-81.9-372.3-82.1-372.8L-82.1-372.8z\"/>
                                    </g>
\t\t\t\t\t\t\t\t</svg>
                                888-258-1669</li>
                            <li class=\"reg_style\"><a href=\"login.html\">
                                    <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"18px\" height=\"14px\"
                                         viewBox=\"0 0 18 14\" style=\"enable-background:new 0 0 18 14;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path class=\"svg_icons svg_login\" d=\"M13.9,7c0,0.2-0.1,0.4-0.2,0.5l-6.4,5.9c-0.1,0.1-0.3,0.2-0.5,0.2s-0.4-0.1-0.5-0.2S6,13.1,6,12.9V9.8H0.8
\t\t\t\t\t\t\t\t\tc-0.2,0-0.4-0.1-0.5-0.2S0,9.3,0,9.1V4.9c0-0.2,0.1-0.4,0.2-0.5c0.1-0.1,0.3-0.2,0.5-0.2H6V1c0-0.2,0.1-0.4,0.2-0.5s0.3-0.2,0.5-0.2
\t\t\t\t\t\t\t\t\ts0.4,0.1,0.5,0.2l6.4,5.9C13.8,6.6,13.9,6.8,13.9,7z M18,3.2v7.7c0,0.9-0.3,1.6-1,2.2c-0.7,0.6-1.5,0.9-2.4,0.9h-3.8
\t\t\t\t\t\t\t\t\tc-0.1,0-0.2,0-0.3-0.1c-0.1-0.1-0.1-0.2-0.1-0.2c0,0,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0.1-0.2,0.1-0.2
\t\t\t\t\t\t\t\t\tc0.1,0,0.1-0.1,0.2-0.1h3.8c0.5,0,1-0.2,1.3-0.5c0.4-0.3,0.6-0.8,0.6-1.2V3.2c0-0.5-0.2-0.9-0.6-1.2c-0.4-0.3-0.8-0.5-1.3-0.5H11
\t\t\t\t\t\t\t\t\tl-0.1,0l-0.1,0l-0.1-0.1l-0.1-0.1l0-0.1c0,0,0-0.1,0-0.2s0-0.2,0-0.3s0-0.2,0-0.3s0.1-0.2,0.1-0.2S10.8,0,10.9,0h3.8
\t\t\t\t\t\t\t\t\tc0.9,0,1.7,0.3,2.4,0.9S18,2.3,18,3.2z\"/>
\t\t\t\t\t\t\t\t</svg>
                                    LOG IN</a></li>
                            <li class=\"reg_style\"><a href=\"reg.html\">
                                    <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"14px\" height=\"14px\"
                                         viewBox=\"0 0 14 14\" style=\"enable-background:new 0 0 14 14;\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t\t<path class=\"svg_icons svg_key\" d=\"M0,11.5l0,1.8C0,13.7,0.3,14,0.7,14h1.8c0.2,0,0.4-0.1,0.5-0.2l0.5-0.5v-1.4h1.4v-1.4h1.4l1-1
\t\t\t\t\t\t\t\t\tc0.5,0.2,1.1,0.3,1.8,0.3c2.7,0,4.9-2.2,4.9-4.9S11.8,0,9.1,0S4.2,2.2,4.2,4.9c0,0.6,0.1,1.2,0.3,1.8L0.2,11C0.1,11.1,0,11.3,0,11.5
\t\t\t\t\t\t\t\t\tz M8.4,3.8c0-1,0.8-1.8,1.8-1.8s1.8,0.8,1.8,1.8s-0.8,1.8-1.8,1.8S8.4,4.8,8.4,3.8z\"/>
\t\t\t\t\t\t\t\t</svg>
                                    REGISTER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"section_menu\">
        <div class=\"mnu_fixed\">
            <div class=\"mnu_wave\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"mnu mnu_mobile hidden-lg hidden-md\">
                            <div class=\"icon_shop hidden-lg hidden-md\">
                                <a href=\"#\"><i class=\"fa fa-shopping-cart\"></i></a>
                            </div>
                            <div class=\"input_search hidden-lg hidden-md\">
                                <input type=\"text\" placeholder=\"Search...\">
                                <a class=\"btnsearch\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <div class=\"toggle_block hidden-lg hidden-md\">
                                <a href=\"#\" class=\"toggle-mnu\"><span></span></a>
                            </div>
                        </div>
                        <div class=\"logo_block\">
                            <img src=\"{{ asset('img/header/logo.png') }}\" alt=\"\">
                        </div>
                        <div class=\"icon_shop hidden-sm hidden-xs\">
                            <a href=\"shop_cart.html\"><i class=\"fa fa-shopping-cart\"></i></a>
                        </div>
                        <div class=\"search hidden-sm hidden-xs\">
                            <div class=\"icon_search hidden-sm hidden-xs\">
                                <a class=\"btnopen\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                            <div class=\"input_search\">
                                <input type=\"text\" placeholder=\"Search...\">
                                <a class=\"btnclose\" href=\"#\">×</a>
                                <a class=\"btnsearch\" href=\"#\"><i class=\"fa fa-search\"></i></a>
                            </div>
                        </div>
                        <div class=\"mnu hidden-sm hidden-xs\">
                            <ul>
                                <li class=\"drop1\"><a href=\"{{ path('app_home_parent') }}\">Home</a>
                                </li>
                                <li class=\"drop2\"><a href=\"{{ path('events') }}\">Events</a>
                                </li>
                                <li class=\"drop3\"><a href=\"{{ path('publications') }}\">Publications</a>
                                </li>
                                <li class=\"drop4\"><a href=\"javascript:void(0);\">Page</a>
                                    <ul class=\"mnu_child\">
                                        <li><a href=\"events.html\">Events</a></li>
                                        <li><a href=\"event.html\">Event</a></li>
                                        <li><a href=\"price-table_a.html\">Price V1</a></li>
                                        <li><a href=\"price-table_b.html\">Price V2</a></li>
                                        <li><a href=\"gallery.html\">Gallery</a></li>
                                        <li><a href=\"reviews.html\">Reviews</a></li>
                                        <li><a href=\"FAQ.html\">FAQ</a></li>
                                        <li><a href=\"404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop5\"><a href=\"blog.html\">Blog</a>
                                    <ul class=\"mnu_child\">
                                        <li><a href=\"blog_article.html\">Post</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop6\"><a href=\"shop_grid.html\">Shop</a>
                                    <ul class=\"mnu_child\">
                                        <li><a href=\"shop_list.html\">Version 2</a></li>
                                        <li><a href=\"shop_item.html\">
                                                Item page</a></li>
                                        <li><a href=\"shop_cart.html\">Cart</a></li>
                                        <li><a href=\"shop_cart_empty.html\">Cart Empty</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop7\"><a href=\"contact.html\">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-12 col-xs-12 top_mnu\">
                        <div class=\"mobile_mnu\">
                            <ul>
                                <li class=\"drop1\"><a href=\"index.html\">Home</a>
                                </li>
                                <li class=\"drop2\"><a class=\"drop2_mnu\" href=\"#\">About us</a>
                                    <ul class=\"mnu_child drop_mnu2\">
                                        <li><a href=\"about_us.html\">About us</a></li>
                                        <li><a href=\"teachers.html\">Teachers</a></li>
                                        <li><a href=\"teacher.html\">Teacher</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop3\"><a class=\"drop3_mnu\" href=\"#\">Services</a>
                                    <ul class=\"mnu_child drop_mnu3\">
                                        <li><a href=\"service_v1.html\">Version 1</a></li>
                                        <li><a href=\"service_v2.html\">Version 2</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop4\"><a class=\"drop4_mnu\" href=\"#\">Page</a>
                                    <ul class=\"mnu_child drop_mnu4\">
                                        <li><a href=\"events.html\">Events</a></li>
                                        <li><a href=\"event.html\">Event</a></li>
                                        <li><a href=\"price-table_a.html\">Price V1</a></li>
                                        <li><a href=\"price-table_b.html\">Price V2</a></li>
                                        <li><a href=\"gallery.html\">Gallery</a></li>
                                        <li><a href=\"reviews.html\">Reviews</a></li>
                                        <li><a href=\"FAQ.html\">FAQ</a></li>
                                        <li><a href=\"404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop5\"><a class=\"drop5_mnu\" href=\"#\">Blog</a>
                                    <ul class=\"mnu_child drop_mnu5\">
                                        <li><a href=\"blog.html\">Blog</a></li>
                                        <li><a href=\"blog_article.html\">Post</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop6\"><a class=\"drop6_mnu\" href=\"#\">Shop</a>
                                    <ul class=\"mnu_child drop_mnu6\">
                                        <li><a href=\"shop_grid.html\">Version 1</a></li>
                                        <li><a href=\"shop_list.html\">Version 2</a></li>
                                        <li><a href=\"shop_item.html\">
                                                Item page</a></li>
                                        <li><a href=\"shop_cart.html\">Cart</a></li>
                                        <li><a href=\"shop_cart_empty.html\">Cart Empty</a></li>
                                    </ul>
                                </li>
                                <li class=\"drop7\"><a href=\"contact.html\">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<div id=\"content\">
    {% block content %}{% endblock %}
</div>

<footer>
    <div class=\"overlay_footer_land\"></div>
    <div class=\"container\">
        <div class=\"row pb_40\">
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <div class=\"footer_about\">
                    <h3>About</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                    <p class=\"footer_time\"><i class=\"fa fa-clock-o\"><span></span></i>Mon-Fri: 8.00 AM - 6.00 PM</p>
                    <div class=\"footer_social social_icon\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <h3>Tweets</h3>
                <div class=\"footer_tweets\">
                    <p><i class=\"fa fa-twitter\"></i>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><i class=\"fa fa-twitter\"></i>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><i class=\"fa fa-twitter\"></i>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <h3>Instagram</h3>
                <div class=\"footer_instagram\">
                    <ul>
                        <li><a href=\"#\"><img src=\"{{ asset('img/footer/footer_1.jpg') }}\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"{{ asset('img/footer/footer_2.jpg') }}\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"{{ asset('img/footer/footer_3.jpg') }}\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"{{ asset('img/footer/footer_4.jpg') }}\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"{{ asset('img/footer/footer_5.jpg') }}\" alt=\"\"></a></li>
                        <li><a href=\"#\"><img src=\"{{ asset('img/footer/footer_6.jpg') }}\" alt=\"\"></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-12 col-xs-12 mb_15\">
                <h3>Newsletters</h3>
                <div class=\"footer_newsletters\">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                    <div class=\"footer_mail\">
                        <form method=\"post\" id=\"contact_form_footer\">
                            <div class=\"form-group\">
                                <input id=\"email_footer\" name=\"email\" type=\"text\" placeholder=\"Your email\">
                            </div>
                            <div id=\"messegeResultFooter\" class=\"messegeResult\">
                                <p>The message was successfully sent</p>
                                <button type=\"submit\">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container_fluent copywriting\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p>Copyright © 2017 Yeah Kids Template by <a href=\"http://fvdthemes.com/\" target=\"_blank\">FVD Themes</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src=\"{{ asset('js/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap/bootstrap.js') }}\"></script>
<script src=\"{{ asset('js/isotope/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('js/imagesloaded/imagesloaded.pkgd.js') }}\"></script>
<script src=\"{{ asset('js/magnific-popup/magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/parallax/parallax.min.js') }}\"></script>
<script src=\"{{ asset('js/page-scroll-to-id/jquery.malihu.PageScroll2id.js') }}\"></script>
<script src=\"{{ asset('js/wow/wow.min.js') }}\"></script>
<script src=\"{{ asset('js/object-fit-images/ofi.browser.js') }}\"></script>
<script src=\"{{ asset('js/count/jquery.countdown.min.js') }}\"></script>
<script src=\"{{ asset('js/count/jquery.countup.min.js') }}\"></script>
<script src=\"{{ asset('js/validate/validate.js') }}\"></script>
<script src=\"{{ asset('js/waypoints/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-ui/jquery-ui.min.js') }}\"></script>
<script src=\"{{ asset('js/slick/slick.min.js') }}\"></script>
<script src=\"{{ asset('js/sticky-kit-master/sticky-kit.min.js') }}\"></script>
<script src=\"{{ asset('js/slider-pro-master/jquery.sliderPro.min.js') }}\"></script>
<script src=\"{{ asset('js/functionsf899.js?100') }}\"></script>
<!--End JS -->


</body>
</html>", "base2.html.twig", "C:\\Users\\fedi\\fadi\\templates\\base2.html.twig");
    }
}
