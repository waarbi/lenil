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

/* seller/seller_home.html.twig */
class __TwigTemplate_a630768a07b350b92e67e95b8e17ebcd31b0c5909127e3cbb556dfc4d8eb6349 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/seller_home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/seller_home.html.twig"));

        // line 1
        echo "
<div class=\"container mt-3\">
    <!-- Container starts -->
    <div class=\"row\">
        <div class=\"col-md-3 \">
            <div class=\"card rounded-0 mb-3 welcome-box\"><!-- card rounded-0 mb-3 welcome-box Starts -->
                <div class=\"card-body pb-2\"><!-- card-body Starts -->
                    <center>
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "picture", [], "any", false, false, false, 9))), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle mb-3\">
                    </center>
                    <h5>Bienvenue, <span class=\"text-success\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "</span> </h5>
                    <hr>
                    <div class=\"row m-0\"><!--- row Starts --->
                        <div class=\"col-lg-6 m-0 p-0 pr-2 pb-lg-0 pr-lg-2 pb-md-2 pr-sm-2\"><!--- col-md-6 Starts --->
                            <h5><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_seller");
        echo "\">Dashboard</a></h5>
                            <h5><a href=\"#proposals/create_proposal\">Ajouter un service</a></h5>
                            <h5 class=\"mb-0\"><a href=\"#requests/post_request\">Poster une demande</a></h5>
                        </div><!--- col-md-6 Ends --->
                        <div class=\"col-lg-6 m-0 p-0 pl-2 pt-lg-0 pl-lg-2 pl-md-0 pt-md-2 pl-sm-2\"><!--- col-md-6 Starts --->
                            <h5><a href=\"#buying_orders\">Mes achats</a></h5>
                            <h5><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_index");
        echo "\">Editer mon profil</a></h5>
                            <h5 class=\"mb-0\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
        echo "\">Paramétrer mon compte</a></h5>
                        </div><!--- col-md-6 Ends --->
                    </div><!--- row Ends --->
                    <hr>
                    <h5><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_support");
        echo "\">Contact <i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i> Lenil</a></h5>
                </div><!-- card-body Ends -->
            </div><!-- card rounded-0 mb-3 welcome-box Ends -->
            <div class=\"rounded-0 carosel_sec\">
                <h3 class=\"buy_head \">Achèter les de nouveau</h3>
                <p class=\"text-muted\"><i class=\"fa fa-frown-o\"></i> Pas encore d'achat. </p></div>

            <div class=\"rounded-0 mb-3 carosel_sec mt-3\">
                <h3 class=\"buy_head \">Vue récemment</h3>

                <div id=\"demo2\" class=\"carousel slide\" data-ride=\"carousel\"><!-- The slideshow -->

                    <div class=\"carousel-inner \" role=\"listbox\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["proposal"]) {
            // line 40
            echo "                        ";
            if (0 === twig_compare($context["key"], 0)) {
                // line 41
                echo "                        <div class=\"carousel-item active\"><!--- carousel-item Starts --->
                            ";
            } else {
                // line 43
                echo "                            <div class=\"carousel-item\">
                                ";
            }
            // line 45
            echo "                                <div class=\"proposal-card-base mp-proposal-card\"><!--- proposal-card-base mp-proposal-card Starts --->
                                    <a href=\"proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\">
                                        <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposal"], "proposalImages", [], "any", false, false, false, 47), "first", [], "method", false, false, false, 47), "getFileName", [], "method", false, false, false, 47))), "html", null, true);
            echo "\" class=\"img-fluid\">
                                    </a>
                                    <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                        <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                            <span class=\"fit-avatar s24\">
                                                                                                <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposal"], "seller", [], "any", false, false, false, 52), "picture", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                                                         </span>
                                            <div class=\"seller-info-wrapper\">
                                                <a href=\"#ashleytharma1\" class=\"seller-name\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposal"], "seller", [], "any", false, false, false, 55), "Fullname", [], "any", false, false, false, 55), "html", null, true);
            echo "</a>
                                                <div class=\"gig-seller-tooltip\">
                                                    Débutant    </div>
                                            </div>
                                        </div><!--- gig-seller-info Ends --->
                                        <a href=\"#proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\" class=\"proposal-link-main\">
                                            <h3>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "title", [], "any", false, false, false, 61), "html", null, true);
            echo "</h3>
                                        </a>
                                        <div class=\"rating-badges-container\">
                                            <span class=\"proposal-rating\">
                                                <svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\">
                                                    <path d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path>
                                                 </svg>
                                                <span>
                                                <strong>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "rating", [], "any", false, false, false, 69), "html", null, true);
            echo "</strong>
                                                ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "views", [], "any", false, false, false, 70), "html", null, true);
            echo "
                                                </span>
                                            </span>
                                        </div>
                                    </div><!--- proposal-card-caption Ends --->
                                    <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->

                                        <div class=\"proposal-fav\">
                                        </div>

                                        <div class=\"proposal-price\">
                                            <a class=\"js-proposal-card-imp-data\">
                                                <small>Starting At</small>\$";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "price", [], "any", false, false, false, 82), "html", null, true);
            echo "  </a>
                                        </div>
                                    </footer><!--- proposal-card-footer Ends --->
                                </div><!--- proposal-card-base mp-proposal-card Ends --->
                            </div><!--- carousel-item Ends --->

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['proposal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                        </div>

                        <!-- Left and right controls -->
                        <a class=\"carousel-control-prev\" href=\"#demo2\" data-slide=\"prev\">
                            <i class=\"fa fa-angle-left\"></i>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#demo2\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\"></i>
                        </a>
                    </div>

                </div>

                <div id=\"sticky-wrapper\" class=\"sticky-wrapper\" style=\"height: 275px;\"><div class=\"card rounded-0 sticky-start mb-3 card_user\">
                        <div class=\"card-body\">
                            <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/sales.png"), "html", null, true);
        echo "\" class=\"img-fluid center-block\" alt=\"none\">
                            <h4>Commençer à vendre</h4>
                            <p>Vendez vos services à des millions de personnes partout dans le monde.</p>
                            <button onclick=\"location.href='/start_selling'\" class=\"btn get_btn\">Vendre un service</button>
                        </div>
                    </div></div>
                <br></div>
            <div class=\"col-md-9 \">
                <div id=\"demo3\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ul class=\"carousel-indicators\">
                        <li data-target=\"#demo3\" data-slide-to=\"0\" class=\"\"></li>
                        <li data-target=\"#demo3\" data-slide-to=\"1\" class=\"\"></li>
                        <li data-target=\"#demo3\" data-slide-to=\"2\" class=\"\"></li>
                        <li data-target=\"#demo3\" data-slide-to=\"3\" class=\"active\"></li>
                    </ul>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <a href=\"https://www.pixinal.com/case_study/gigtodo-script/\">
                                <img src=\"https://www.gigtodo.com/slides_images/art-artist-canvas-374054.jpg\" alt=\"Los Angeles\" class=\"img-fluid\">
                                <div class=\"carousel-caption d-lg-block d-md-block d-none \">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </a>
                        </div>
                        <div class=\"carousel-item\">
                            <a href=\"#\">
                                <img src=\"https://www.gigtodo.com/slides_images/art-artist-canvas-374054.jpg\" class=\"img-fluid\">
                                <div class=\"carousel-caption d-lg-block d-md-block d-none \">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"row mt-4 mb-3\">
                    <div class=\"col-md-12\">
                        <h2 class=\"float-left\">Featured Proposals/Services</h2>
                        <button onclick=\"location.href='featured_proposals'\" class=\"float-right btn btn-success\">VOIR TOUT</button>
                    </div>
                </div>

                <div class=\"row\">
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
            // line 150
            echo "                        <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pr-lg-1\">
                            <div class=\"proposal-card-base mp-proposal-card\"><!--- proposal-card-base mp-proposal-card Starts --->
                                <a href=\"#proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\">
                                    <img src=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposal"], "proposalImages", [], "any", false, false, false, 153), "first", [], "method", false, false, false, 153), "getFileName", [], "method", false, false, false, 153))), "html", null, true);
            echo "\" class=\"img-fluid\">
                                </a>
                                <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                    <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                        <span class=\"fit-avatar s24\">
                                        <img src=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposal"], "seller", [], "any", false, false, false, 158), "picture", [], "any", false, false, false, 158))), "html", null, true);
            echo "\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                    </span>
                                        <div class=\"seller-info-wrapper\">
                                            <a href=\"#ashleytharma1\" class=\"seller-name\">";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["proposal"], "seller", [], "any", false, false, false, 161), "fullName", [], "any", false, false, false, 161), "html", null, true);
            echo "</a>
                                            <div class=\"gig-seller-tooltip\">  Débutant   </div>
                                        </div>
                                    </div><!--- gig-seller-info Ends --->
                                    <a href=\"#proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\" class=\"proposal-link-main js-proposal-card-imp-data\">
                                        <h3>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "title", [], "any", false, false, false, 166), "html", null, true);
            echo "</h3>
                                    </a>
                                    <div class=\"rating-badges-container\">
                                    <span class=\"proposal-rating\">
                                    <svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\"><path d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path></svg>
                                    <span>
                                    <strong>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "rating", [], "any", false, false, false, 172), "html", null, true);
            echo "</strong>
                                    (5)
                                    </span>
                                    </span>
                                    </div>
                                </div><!--- proposal-card-caption Ends --->
                                <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->
                                    <div class=\"proposal-fav\">
                                        <a class=\"icn-list proposal-offer\" data-id=\"3\">
                                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 497.68 497.68\" style=\"enable-background:new 0 0 497.68 497.68;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Affiliate Link\">

                                                <path style=\"fill:#F2B233;\" d=\"M464.04,404.82c0,97.6-96,92-215.2,92s-215.2,4.8-215.2-92c0-97.6,96-260,215.2-260
\t                                            C368.04,145.62,464.04,308.02,464.04,404.82z\"></path>
                                                <path style=\"fill:#DD981D;\" d=\"M248.84,145.62c119.2,0,215.2,162.4,215.2,260s-96,92-215.2,92\"></path>
                                                <path style=\"fill:#F2B233;\" d=\"M144.04,44.82c0-47.2,47.2-44.8,104.8-44.8s104.8-2.4,104.8,44.8s-47.2,126.4-104.8,126.4
\t                                            S144.04,92.02,144.04,44.82z\"></path>
                                                <path style=\"fill:#DD981D;\" d=\"M248.84,0.02c57.6,0,104.8-2.4,104.8,44.8s-47.2,126.4-104.8,126.4\"></path>
                                                <path style=\"fill:#04AF76;\" d=\"M340.84,154.42c0,8-6.4,14.4-14.4,14.4h-155.2c-8,0-14.4-6.4-14.4-14.4v-4c0-8,6.4-14.4,14.4-14.4
\t                                            h156c8,0,14.4,6.4,14.4,14.4v4H340.84z\"></path>
                                                <path style=\"fill:#008C61;\" d=\"M168.84,136.82h158.4c8,0,14.4,6.4,14.4,14.4v4c0,8-8,14.4-16,14.4\"></path>
                                                <circle style=\"fill:#04AF76;\" cx=\"248.84\" cy=\"339.22\" r=\"96\"></circle>
                                                <path style=\"fill:#008C61;\" d=\"M180.84,271.22c37.6-37.6,98.4-37.6,136,0s37.6,98.4,0,136\"></path>
                                                <path style=\"fill:#FFF6E1;\" d=\"M240.84,416.82v-20c-16-0.8-24.8-4-32-8l4.8-21.6c8,4,18.4,8,30.4,8c10.4,0,17.6-4,17.6-11.2
\t                                                s-5.6-11.2-20-16c-20-6.4-32.8-16-32.8-33.6c0-16,7.2-28.8,31.2-32.8v-16.8h16v16c16,0.8,21.6,3.2,27.2,6.4l-4.8,20.8
\t                                                c-4.8-2.4-12.8-6.4-26.4-6.4c-12,0-16,4.8-16,10.4c0,6.4,6.4,9.6,22.4,16c21.6,8,30.4,17.6,30.4,34.4s-8.8,30.4-32.8,34.4v20H240.84
\t                                            z\"></path>
                                                <g>
                                                    <path style=\"fill:#FFEEBD;\" d=\"M248.84,264.82v36.8c0,0,2.4,0,4,0c13.6,0,21.6,4,26.4,6.4l4.8-20.8c-6.4-3.2-11.2-6.4-27.2-6.4v-16
\t\t                                        H248.84z\"></path>
                                                    <path style=\"fill:#FFEEBD;\" d=\"M259.24,327.22c-4-1.6-8-3.2-10.4-4v27.2c8,4,12.8,8,12.8,13.6c0,6.4-4.8,9.6-12.8,11.2v41.6h8
\t\t                                                    v-20.8c24-4,32.8-17.6,32.8-34.4C289.64,344.82,280.84,335.22,259.24,327.22z\"></path>
                                                </g>

                                            </svg>
                                        </a>


                                        <i data-id=\"3\" href=\"#\" class=\"fa fa-heart proposal-favorite dil1\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Favorite\"></i>
                                    </div>
                                    <div class=\"proposal-price\">
                                        <a><small>STARTING AT</small>\$";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proposal"], "price", [], "any", false, false, false, 212), "html", null, true);
            echo "</a>
                                    </div>
                                </footer><!--- proposal-card-footer Ends --->
                            </div><!--- proposal-card-base mp-proposal-card Ends --->        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                </div>

                <br>
                <!-- If You have no gigs, show random gigs on homepage Ends -->
                ";
        // line 221
        echo twig_include($this->env, $context, "demande/all-others-demandes.html.twig");
        echo "
            </div>
        </div>
    </div>
    ";
        // line 225
        echo twig_include($this->env, $context, "modals/create_offer.html.twig");
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "seller/seller_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 225,  351 => 221,  345 => 217,  334 => 212,  291 => 172,  282 => 166,  274 => 161,  268 => 158,  260 => 153,  255 => 150,  251 => 149,  203 => 104,  186 => 89,  173 => 82,  158 => 70,  154 => 69,  143 => 61,  134 => 55,  128 => 52,  120 => 47,  116 => 45,  112 => 43,  108 => 41,  105 => 40,  101 => 39,  85 => 26,  78 => 22,  74 => 21,  65 => 15,  58 => 11,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container mt-3\">
    <!-- Container starts -->
    <div class=\"row\">
        <div class=\"col-md-3 \">
            <div class=\"card rounded-0 mb-3 welcome-box\"><!-- card rounded-0 mb-3 welcome-box Starts -->
                <div class=\"card-body pb-2\"><!-- card-body Starts -->
                    <center>
                        <img src=\"{{ asset('/uploads/images/'~app.user.picture) }}\" class=\"img-fluid rounded-circle mb-3\">
                    </center>
                    <h5>Bienvenue, <span class=\"text-success\">{{ app.user.fullName }}</span> </h5>
                    <hr>
                    <div class=\"row m-0\"><!--- row Starts --->
                        <div class=\"col-lg-6 m-0 p-0 pr-2 pb-lg-0 pr-lg-2 pb-md-2 pr-sm-2\"><!--- col-md-6 Starts --->
                            <h5><a href=\"{{ path('dashboard_seller') }}\">Dashboard</a></h5>
                            <h5><a href=\"#proposals/create_proposal\">Ajouter un service</a></h5>
                            <h5 class=\"mb-0\"><a href=\"#requests/post_request\">Poster une demande</a></h5>
                        </div><!--- col-md-6 Ends --->
                        <div class=\"col-lg-6 m-0 p-0 pl-2 pt-lg-0 pl-lg-2 pl-md-0 pt-md-2 pl-sm-2\"><!--- col-md-6 Starts --->
                            <h5><a href=\"#buying_orders\">Mes achats</a></h5>
                            <h5><a href=\"{{ path('account_index') }}\">Editer mon profil</a></h5>
                            <h5 class=\"mb-0\"><a href=\"{{ path('account_profile') }}\">Paramétrer mon compte</a></h5>
                        </div><!--- col-md-6 Ends --->
                    </div><!--- row Ends --->
                    <hr>
                    <h5><a href=\"{{ path('contact_support') }}\">Contact <i class=\"fa fa-life-ring\" aria-hidden=\"true\"></i> Lenil</a></h5>
                </div><!-- card-body Ends -->
            </div><!-- card rounded-0 mb-3 welcome-box Ends -->
            <div class=\"rounded-0 carosel_sec\">
                <h3 class=\"buy_head \">Achèter les de nouveau</h3>
                <p class=\"text-muted\"><i class=\"fa fa-frown-o\"></i> Pas encore d'achat. </p></div>

            <div class=\"rounded-0 mb-3 carosel_sec mt-3\">
                <h3 class=\"buy_head \">Vue récemment</h3>

                <div id=\"demo2\" class=\"carousel slide\" data-ride=\"carousel\"><!-- The slideshow -->

                    <div class=\"carousel-inner \" role=\"listbox\">
                        {% for key, proposal in proposals %}
                        {% if key == 0 %}
                        <div class=\"carousel-item active\"><!--- carousel-item Starts --->
                            {% else %}
                            <div class=\"carousel-item\">
                                {% endif %}
                                <div class=\"proposal-card-base mp-proposal-card\"><!--- proposal-card-base mp-proposal-card Starts --->
                                    <a href=\"proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\">
                                        <img src=\"{{ asset('/uploads/images/'~proposal.proposalImages.first().getFileName()) }}\" class=\"img-fluid\">
                                    </a>
                                    <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                        <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                            <span class=\"fit-avatar s24\">
                                                                                                <img src=\"{{ asset('/uploads/images/'~proposal.seller.picture) }}\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                                                                         </span>
                                            <div class=\"seller-info-wrapper\">
                                                <a href=\"#ashleytharma1\" class=\"seller-name\">{{ proposal.seller.Fullname }}</a>
                                                <div class=\"gig-seller-tooltip\">
                                                    Débutant    </div>
                                            </div>
                                        </div><!--- gig-seller-info Ends --->
                                        <a href=\"#proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\" class=\"proposal-link-main\">
                                            <h3>{{ proposal.title }}</h3>
                                        </a>
                                        <div class=\"rating-badges-container\">
                                            <span class=\"proposal-rating\">
                                                <svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\">
                                                    <path d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path>
                                                 </svg>
                                                <span>
                                                <strong>{{proposal.rating}}</strong>
                                                {{ proposal.views }}
                                                </span>
                                            </span>
                                        </div>
                                    </div><!--- proposal-card-caption Ends --->
                                    <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->

                                        <div class=\"proposal-fav\">
                                        </div>

                                        <div class=\"proposal-price\">
                                            <a class=\"js-proposal-card-imp-data\">
                                                <small>Starting At</small>\${{ proposal.price }}  </a>
                                        </div>
                                    </footer><!--- proposal-card-footer Ends --->
                                </div><!--- proposal-card-base mp-proposal-card Ends --->
                            </div><!--- carousel-item Ends --->

                            {% endfor %}
                        </div>

                        <!-- Left and right controls -->
                        <a class=\"carousel-control-prev\" href=\"#demo2\" data-slide=\"prev\">
                            <i class=\"fa fa-angle-left\"></i>
                        </a>
                        <a class=\"carousel-control-next\" href=\"#demo2\" data-slide=\"next\">
                            <i class=\"fa fa-angle-right\"></i>
                        </a>
                    </div>

                </div>

                <div id=\"sticky-wrapper\" class=\"sticky-wrapper\" style=\"height: 275px;\"><div class=\"card rounded-0 sticky-start mb-3 card_user\">
                        <div class=\"card-body\">
                            <img src=\"{{ asset('/uploads/images/sales.png')}}\" class=\"img-fluid center-block\" alt=\"none\">
                            <h4>Commençer à vendre</h4>
                            <p>Vendez vos services à des millions de personnes partout dans le monde.</p>
                            <button onclick=\"location.href='/start_selling'\" class=\"btn get_btn\">Vendre un service</button>
                        </div>
                    </div></div>
                <br></div>
            <div class=\"col-md-9 \">
                <div id=\"demo3\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ul class=\"carousel-indicators\">
                        <li data-target=\"#demo3\" data-slide-to=\"0\" class=\"\"></li>
                        <li data-target=\"#demo3\" data-slide-to=\"1\" class=\"\"></li>
                        <li data-target=\"#demo3\" data-slide-to=\"2\" class=\"\"></li>
                        <li data-target=\"#demo3\" data-slide-to=\"3\" class=\"active\"></li>
                    </ul>
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <a href=\"https://www.pixinal.com/case_study/gigtodo-script/\">
                                <img src=\"https://www.gigtodo.com/slides_images/art-artist-canvas-374054.jpg\" alt=\"Los Angeles\" class=\"img-fluid\">
                                <div class=\"carousel-caption d-lg-block d-md-block d-none \">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </a>
                        </div>
                        <div class=\"carousel-item\">
                            <a href=\"#\">
                                <img src=\"https://www.gigtodo.com/slides_images/art-artist-canvas-374054.jpg\" class=\"img-fluid\">
                                <div class=\"carousel-caption d-lg-block d-md-block d-none \">
                                    <h3></h3>
                                    <p></p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"row mt-4 mb-3\">
                    <div class=\"col-md-12\">
                        <h2 class=\"float-left\">Featured Proposals/Services</h2>
                        <button onclick=\"location.href='featured_proposals'\" class=\"float-right btn btn-success\">VOIR TOUT</button>
                    </div>
                </div>

                <div class=\"row\">
                    {% for proposal in proposals %}
                        <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-3 pr-lg-1\">
                            <div class=\"proposal-card-base mp-proposal-card\"><!--- proposal-card-base mp-proposal-card Starts --->
                                <a href=\"#proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\">
                                    <img src=\"{{ asset('/uploads/images/'~proposal.proposalImages.first().getFileName()) }}\" class=\"img-fluid\">
                                </a>
                                <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                    <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                        <span class=\"fit-avatar s24\">
                                        <img src=\"{{ asset('/uploads/images/'~proposal.seller.picture) }}\" class=\"rounded-circle\" width=\"32\" height=\"32\">
                                    </span>
                                        <div class=\"seller-info-wrapper\">
                                            <a href=\"#ashleytharma1\" class=\"seller-name\">{{ proposal.seller.fullName}}</a>
                                            <div class=\"gig-seller-tooltip\">  Débutant   </div>
                                        </div>
                                    </div><!--- gig-seller-info Ends --->
                                    <a href=\"#proposals/ashleytharma1/i-will-design-a-logo-and-brand-for-you\" class=\"proposal-link-main js-proposal-card-imp-data\">
                                        <h3>{{ proposal.title }}</h3>
                                    </a>
                                    <div class=\"rating-badges-container\">
                                    <span class=\"proposal-rating\">
                                    <svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\" height=\"15\"><path d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path></svg>
                                    <span>
                                    <strong>{{ proposal.rating}}</strong>
                                    (5)
                                    </span>
                                    </span>
                                    </div>
                                </div><!--- proposal-card-caption Ends --->
                                <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->
                                    <div class=\"proposal-fav\">
                                        <a class=\"icn-list proposal-offer\" data-id=\"3\">
                                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 497.68 497.68\" style=\"enable-background:new 0 0 497.68 497.68;\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Affiliate Link\">

                                                <path style=\"fill:#F2B233;\" d=\"M464.04,404.82c0,97.6-96,92-215.2,92s-215.2,4.8-215.2-92c0-97.6,96-260,215.2-260
\t                                            C368.04,145.62,464.04,308.02,464.04,404.82z\"></path>
                                                <path style=\"fill:#DD981D;\" d=\"M248.84,145.62c119.2,0,215.2,162.4,215.2,260s-96,92-215.2,92\"></path>
                                                <path style=\"fill:#F2B233;\" d=\"M144.04,44.82c0-47.2,47.2-44.8,104.8-44.8s104.8-2.4,104.8,44.8s-47.2,126.4-104.8,126.4
\t                                            S144.04,92.02,144.04,44.82z\"></path>
                                                <path style=\"fill:#DD981D;\" d=\"M248.84,0.02c57.6,0,104.8-2.4,104.8,44.8s-47.2,126.4-104.8,126.4\"></path>
                                                <path style=\"fill:#04AF76;\" d=\"M340.84,154.42c0,8-6.4,14.4-14.4,14.4h-155.2c-8,0-14.4-6.4-14.4-14.4v-4c0-8,6.4-14.4,14.4-14.4
\t                                            h156c8,0,14.4,6.4,14.4,14.4v4H340.84z\"></path>
                                                <path style=\"fill:#008C61;\" d=\"M168.84,136.82h158.4c8,0,14.4,6.4,14.4,14.4v4c0,8-8,14.4-16,14.4\"></path>
                                                <circle style=\"fill:#04AF76;\" cx=\"248.84\" cy=\"339.22\" r=\"96\"></circle>
                                                <path style=\"fill:#008C61;\" d=\"M180.84,271.22c37.6-37.6,98.4-37.6,136,0s37.6,98.4,0,136\"></path>
                                                <path style=\"fill:#FFF6E1;\" d=\"M240.84,416.82v-20c-16-0.8-24.8-4-32-8l4.8-21.6c8,4,18.4,8,30.4,8c10.4,0,17.6-4,17.6-11.2
\t                                                s-5.6-11.2-20-16c-20-6.4-32.8-16-32.8-33.6c0-16,7.2-28.8,31.2-32.8v-16.8h16v16c16,0.8,21.6,3.2,27.2,6.4l-4.8,20.8
\t                                                c-4.8-2.4-12.8-6.4-26.4-6.4c-12,0-16,4.8-16,10.4c0,6.4,6.4,9.6,22.4,16c21.6,8,30.4,17.6,30.4,34.4s-8.8,30.4-32.8,34.4v20H240.84
\t                                            z\"></path>
                                                <g>
                                                    <path style=\"fill:#FFEEBD;\" d=\"M248.84,264.82v36.8c0,0,2.4,0,4,0c13.6,0,21.6,4,26.4,6.4l4.8-20.8c-6.4-3.2-11.2-6.4-27.2-6.4v-16
\t\t                                        H248.84z\"></path>
                                                    <path style=\"fill:#FFEEBD;\" d=\"M259.24,327.22c-4-1.6-8-3.2-10.4-4v27.2c8,4,12.8,8,12.8,13.6c0,6.4-4.8,9.6-12.8,11.2v41.6h8
\t\t                                                    v-20.8c24-4,32.8-17.6,32.8-34.4C289.64,344.82,280.84,335.22,259.24,327.22z\"></path>
                                                </g>

                                            </svg>
                                        </a>


                                        <i data-id=\"3\" href=\"#\" class=\"fa fa-heart proposal-favorite dil1\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Favorite\"></i>
                                    </div>
                                    <div class=\"proposal-price\">
                                        <a><small>STARTING AT</small>\${{ proposal.price}}</a>
                                    </div>
                                </footer><!--- proposal-card-footer Ends --->
                            </div><!--- proposal-card-base mp-proposal-card Ends --->        </div>
                    {% endfor %}
                </div>

                <br>
                <!-- If You have no gigs, show random gigs on homepage Ends -->
                {{ include('demande/all-others-demandes.html.twig') }}
            </div>
        </div>
    </div>
    {{ include('modals/create_offer.html.twig') }}


", "seller/seller_home.html.twig", "/home/vagrant/code/lenil/templates/seller/seller_home.html.twig");
    }
}
