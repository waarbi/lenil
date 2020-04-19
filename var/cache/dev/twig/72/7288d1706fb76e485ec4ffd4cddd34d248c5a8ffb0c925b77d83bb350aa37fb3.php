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

/* home.html.twig */
class __TwigTemplate_3d59573d33a293c7c6899863c82d796f0d83f2f930844dab0ab050ef78839afc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lenyl | Plateforme des freelancers africains!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- start main -->
    ";
        // line 9
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9))) {
            // line 10
            echo "    <div id=\"demo1\" class=\"main carousel slide\" data-ride=\"carousel\">
        <ul class=\"carousel-indicators\">
            <li data-target=\"#demo1\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#demo1\" data-slide-to=\"1\"></li>
            <li data-target=\"#demo1\" data-slide-to=\"2\"></li>
        </ul>
        <div class=\"carousel-inner\">
            <div class=\"carousel-caption\">
                <h1>NE RÊVEZ PAS JUSTE, REALISEZ LE.</h1>
                <h5>Avec des services indépendants. À la demande.</h5>
                <div class=\"row\">
                    <div class=\"offset-md-3 col-md-5 col-12\">
                        <form action=\"\" method=\"post\">
                            <div class=\"input-group space20\">
                                <input type=\"text\" name=\"search_query\" class=\"form-control\" value=\"\" placeholder=\"\">
                                <div class=\"input-group-append move-icon-up\">
                                    <button name=\"search\" type=\"submit\" class=\"search_button\">
                                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/srch2.png"), "html", null, true);
            echo "\" class=\"srch2\">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item active\">
                <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/home_slider/bg.jpeg"), "html", null, true);
            echo "\">
            </div>
            <div class=\"carousel-item \">
                <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/home_slider/cover-main-one.png"), "html", null, true);
            echo "\">
            </div>
            <div class=\"carousel-item \">
                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/home_slider/cover-main-two.png"), "html", null, true);
            echo "\">
            </div>
        </div>
        <a class=\"carousel-control-prev \" href=\"#demo1\" data-slide=\"prev\" style=\"width: 6%; opacity: 1;\">
            <i class=\"fa fa-arrow-circle-o-left fa-3x\"></i>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo1\" data-slide=\"next\" style=\"width: 6%; opacity: 1;\">
            <i class=\"fa fa-arrow-circle-o-right fa-3x\"></i>
        </a>
    </div>
    <!-- end main -->
    <!-- start market -->
    <div class=\"container mb-5 cards\" style=\"max-width: 1360px !important;\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"mt-5 mb-1 \">Services professionnels les plus populaires</h1>
                <p class=\"subHeading mb-4 \">Réalisez votre projet à temps par des professionnels hautement qualifiés</p>
                <div class=\"owl-carousel home-cards-carousel owl-theme owl-loaded owl-drag\">
                    <!--- owl-carousel home-cards-carousel Starts --->

                    <div class=\"owl-stage-outer\">
                        <div class=\"owl-stage\"
                             style=\"transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1611px;\">



                            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "                            <div class=\"owl-item\" style=\"width: 250.4px; margin-right: 18px;\">
                                <div class=\"card-box\">
                                    <div>
                                        <a href=\"#categories/graphics-design/photoshop-editing\"
                                           class=\"subcategory\">
                                            <h4><small>Color Your Dreams</small>Illustrations</h4>
                                            <picture>
                                                <img src=\"#card_images/four.jpg\">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
                        </div>
                    </div>
                    <div class=\"owl-nav\">
                        <button type=\"button\" role=\"presentation\" class=\"owl-prev disabled\"><span
                                    aria-label=\"Previous\"></span></button>
                        <button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\"></span>
                        </button>
                    </div>
                    <div class=\"owl-dots\">
                        <button role=\"button\" class=\"owl-dot active\"><span></span></button>
                        <button role=\"button\" class=\"owl-dot\"><span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start market -->
    <section class=\"market\">
        <div class=\"container\" style=\"max-width: 1360px !important;\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Explorez le marché</h2>
                    <h4>Inspirez-vous pour bâtir votre entreprise</h4>
                    <div class=\"row space80\">

                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 109, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 110
                echo "                            <div class=\"col-md-3 col-6\">
                                <a href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\">
                                    <div class=\"grn_box\">
                                        <img src=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/images/card/" . twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 113))), "html", null, true);
                echo "\"
                                             class=\"mx-auto d-block\">
                                        <p>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 115), "html", null, true);
                echo "</p>
                                    </div>
                                </a>
                            </div>
                            ";
                // line 119
                if (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 119), 4)) {
                    // line 120
                    echo "                                <div class=\"space80 hidden-xs\"></div>
                                <div class=\"space20 visible-xs\"></div>
                            ";
                }
                // line 123
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class=\"timer\">
        <div class=\"container\" style=\"max-width: 1335px !important;\">
            <div class=\"row\">
                <div class=\"col-md-4 pad0\">
                    <div class=\"box\">
                        <h5>Vos conditions</h5>
                        <p>Tout ce dont vous avez besoin pour simplifier votre liste de tâches, peu importe votre
                            budget.
                        </p>
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"blu_box\">
                        <img src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/box_images/time.png"), "html", null, true);
            echo "\" class=\"img-fluid mx-auto d-block\">
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"box\">
                        <h5>Votre calendrier</h5>
                        <p>Trouvez des services en fonction de vos objectifs et de vos délais, c'est aussi simple.</p>
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"blu_box1\">
                        <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/box_images/desk.png"), "html", null, true);
            echo "\" class=\"img-fluid mx-auto d-block\">
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"box\">
                        <h5>En toute sécurité</h5>
                        <p>Votre paiement est toujours sécurisé, Lenil est conçu pour protéger votre tranquillité
                            d'esprit.</p>
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"blu_box1\">
                        <img src=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/box_images/tv.png"), "html", null, true);
            echo "\" class=\"img-fluid mx-auto d-block\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start top -->
    <section class=\"top mb-0\">
        <div class=\"container\" style=\"max-width: 1360px !important;\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"text-center\">
                        Principaux services en vedette</h1>
                    <h4 class=\"text-center\">Des conseils pratiques à chaque étape</h4>
                </div>
                <span class=\"pull-right text-success\"><a href=\"featured_proposals\">Voir plus</a></span>
                <div class=\"mt-5\">
                    <!--- home-featured-carousel Starts --->
                    <div class=\"row\">
                        <!--- row Starts -->
                        <div class=\"col-xl-2dot4 col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4\">
                            <div class=\"proposal-card-base mp-proposal-card\">
                                <!--- proposal-card-base mp-proposal-card Starts --->
                                <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\">
                                    <img src=\"#proposals/proposal_files/voice-over-1.jpg\"
                                         class=\"img-fluid\">
                                </a>
                                <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                    <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                        <span class=\"fit-avatar s24\">
\t\t\t<img src=\"#user_images/shoail.jpg\" class=\"rounded-circle\" width=\"32\" height=\"32\">
\t\t</span>
                                        <div class=\"seller-info-wrapper\">
                                            <a href=\"#shoail\" class=\"seller-name\">shoail</a>
                                            <div class=\"gig-seller-tooltip\">
                                                New Seller
                                            </div>
                                        </div>
                                    </div><!--- gig-seller-info Ends --->
                                    <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\"
                                       class=\"proposal-link-main js-proposal-card-imp-data\">
                                        <h3>I Will Record Your Brazilian Portuguese Voice Over</h3>
                                    </a>
                                    <div class=\"rating-badges-container\">
\t\t<span class=\"proposal-rating\">
\t\t<svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\"
             height=\"15\"><path
                    d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path></svg>
\t\t<span>
\t\t<strong>4.2</strong>
\t\t(5)
\t\t</span>
\t\t</span>
                                    </div>
                                </div><!--- proposal-card-caption Ends --->
                                <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->
                                    <div class=\"proposal-fav\">


                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">
                                            <i class=\"fa fa-heart dil1\" data-toggle=\"tooltip\" data-placement=\"top\"
                                               title=\"\" data-original-title=\"Favorite\"></i>
                                        </a>
                                    </div>
                                    <div class=\"proposal-price\">
                                        <a><small>STARTING AT</small>\$10</a>
                                    </div>
                                </footer><!--- proposal-card-footer Ends --->
                            </div><!--- proposal-card-base mp-proposal-card Ends --->          </div>
                        <div class=\"col-xl-2dot4 col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4\">
                            <div class=\"proposal-card-base mp-proposal-card\">
                                <!--- proposal-card-base mp-proposal-card Starts --->
                                <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\">
                                    <img src=\"#proposals/proposal_files/voice-over-1.jpg\"
                                         class=\"img-fluid\">
                                </a>
                                <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                    <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                        <span class=\"fit-avatar s24\">
\t\t\t<img src=\"#user_images/shoail.jpg\" class=\"rounded-circle\" width=\"32\" height=\"32\">
\t\t</span>
                                        <div class=\"seller-info-wrapper\">
                                            <a href=\"#shoail\" class=\"seller-name\">shoail</a>
                                            <div class=\"gig-seller-tooltip\">
                                                New Seller
                                            </div>
                                        </div>
                                    </div><!--- gig-seller-info Ends --->
                                    <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\"
                                       class=\"proposal-link-main js-proposal-card-imp-data\">
                                        <h3>I Will Record Your Brazilian Portuguese Voice Over</h3>
                                    </a>
                                    <div class=\"rating-badges-container\">
\t\t<span class=\"proposal-rating\">
\t\t<svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\"
             height=\"15\"><path
                    d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path></svg>
\t\t<span>
\t\t<strong>4.2</strong>
\t\t(5)
\t\t</span>
\t\t</span>
                                    </div>
                                </div><!--- proposal-card-caption Ends --->

                                <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->
                                    <div class=\"proposal-fav\">


                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">
                                            <i class=\"fa fa-heart dil1\" data-toggle=\"tooltip\" data-placement=\"top\"
                                               title=\"\" data-original-title=\"Favorite\"></i>
                                        </a>
                                    </div>
                                    <div class=\"proposal-price\">
                                        <a><small>STARTING AT</small>\$10</a>
                                    </div>
                                </footer><!--- proposal-card-footer Ends --->
                            </div><!--- proposal-card-base mp-proposal-card Ends --->          </div>
                    </div>
                    <!--- row Ends -->
                </div>
            </div>
        </div>
    </section>
    ";
        } else {
            // line 294
            echo "        ";
            echo twig_include($this->env, $context, "seller/seller_home.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 298
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 298,  489 => 297,  475 => 294,  346 => 168,  331 => 156,  317 => 145,  294 => 124,  280 => 123,  275 => 120,  273 => 119,  266 => 115,  261 => 113,  256 => 111,  253 => 110,  236 => 109,  208 => 83,  189 => 69,  185 => 68,  156 => 42,  150 => 39,  144 => 36,  132 => 27,  113 => 10,  111 => 9,  108 => 8,  98 => 7,  79 => 3,  61 => 1,  38 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
{% endblock %}
    {% block title %}Lenyl | Plateforme des freelancers africains!{% endblock %}

{% extends \"base.html.twig\" %}

{% block body %}
    <!-- start main -->
    {% if app.user is null %}
    <div id=\"demo1\" class=\"main carousel slide\" data-ride=\"carousel\">
        <ul class=\"carousel-indicators\">
            <li data-target=\"#demo1\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#demo1\" data-slide-to=\"1\"></li>
            <li data-target=\"#demo1\" data-slide-to=\"2\"></li>
        </ul>
        <div class=\"carousel-inner\">
            <div class=\"carousel-caption\">
                <h1>NE RÊVEZ PAS JUSTE, REALISEZ LE.</h1>
                <h5>Avec des services indépendants. À la demande.</h5>
                <div class=\"row\">
                    <div class=\"offset-md-3 col-md-5 col-12\">
                        <form action=\"\" method=\"post\">
                            <div class=\"input-group space20\">
                                <input type=\"text\" name=\"search_query\" class=\"form-control\" value=\"\" placeholder=\"\">
                                <div class=\"input-group-append move-icon-up\">
                                    <button name=\"search\" type=\"submit\" class=\"search_button\">
                                        <img src=\"{{ asset('build/images/srch2.png') }}\" class=\"srch2\">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item active\">
                <img src=\"{{ asset('build/images/home_slider/bg.jpeg') }}\">
            </div>
            <div class=\"carousel-item \">
                <img src=\"{{ asset('build/images/home_slider/cover-main-one.png') }}\">
            </div>
            <div class=\"carousel-item \">
                <img src=\"{{ asset('build/images/home_slider/cover-main-two.png') }}\">
            </div>
        </div>
        <a class=\"carousel-control-prev \" href=\"#demo1\" data-slide=\"prev\" style=\"width: 6%; opacity: 1;\">
            <i class=\"fa fa-arrow-circle-o-left fa-3x\"></i>
        </a>
        <a class=\"carousel-control-next\" href=\"#demo1\" data-slide=\"next\" style=\"width: 6%; opacity: 1;\">
            <i class=\"fa fa-arrow-circle-o-right fa-3x\"></i>
        </a>
    </div>
    <!-- end main -->
    <!-- start market -->
    <div class=\"container mb-5 cards\" style=\"max-width: 1360px !important;\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"mt-5 mb-1 \">Services professionnels les plus populaires</h1>
                <p class=\"subHeading mb-4 \">Réalisez votre projet à temps par des professionnels hautement qualifiés</p>
                <div class=\"owl-carousel home-cards-carousel owl-theme owl-loaded owl-drag\">
                    <!--- owl-carousel home-cards-carousel Starts --->

                    <div class=\"owl-stage-outer\">
                        <div class=\"owl-stage\"
                             style=\"transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1611px;\">



                            {% for i in 0..5 %}
                            <div class=\"owl-item\" style=\"width: 250.4px; margin-right: 18px;\">
                                <div class=\"card-box\">
                                    <div>
                                        <a href=\"#categories/graphics-design/photoshop-editing\"
                                           class=\"subcategory\">
                                            <h4><small>Color Your Dreams</small>Illustrations</h4>
                                            <picture>
                                                <img src=\"#card_images/four.jpg\">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}

                        </div>
                    </div>
                    <div class=\"owl-nav\">
                        <button type=\"button\" role=\"presentation\" class=\"owl-prev disabled\"><span
                                    aria-label=\"Previous\"></span></button>
                        <button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\"></span>
                        </button>
                    </div>
                    <div class=\"owl-dots\">
                        <button role=\"button\" class=\"owl-dot active\"><span></span></button>
                        <button role=\"button\" class=\"owl-dot\"><span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start market -->
    <section class=\"market\">
        <div class=\"container\" style=\"max-width: 1360px !important;\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Explorez le marché</h2>
                    <h4>Inspirez-vous pour bâtir votre entreprise</h4>
                    <div class=\"row space80\">

                        {% for category in categories_yes %}
                            <div class=\"col-md-3 col-6\">
                                <a href=\"{{ path('category_services',{slug: category.slug}) }}\">
                                    <div class=\"grn_box\">
                                        <img src=\"{{ asset('build/images/card/'~category.image) }}\"
                                             class=\"mx-auto d-block\">
                                        <p>{{ category.title }}</p>
                                    </div>
                                </a>
                            </div>
                            {% if loop.index > 4 %}
                                <div class=\"space80 hidden-xs\"></div>
                                <div class=\"space20 visible-xs\"></div>
                            {% endif %}
                        {% endfor %}


                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class=\"timer\">
        <div class=\"container\" style=\"max-width: 1335px !important;\">
            <div class=\"row\">
                <div class=\"col-md-4 pad0\">
                    <div class=\"box\">
                        <h5>Vos conditions</h5>
                        <p>Tout ce dont vous avez besoin pour simplifier votre liste de tâches, peu importe votre
                            budget.
                        </p>
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"blu_box\">
                        <img src=\"{{ asset('build/images/box_images/time.png') }}\" class=\"img-fluid mx-auto d-block\">
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"box\">
                        <h5>Votre calendrier</h5>
                        <p>Trouvez des services en fonction de vos objectifs et de vos délais, c'est aussi simple.</p>
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"blu_box1\">
                        <img src=\"{{ asset('build/images/box_images/desk.png') }}\" class=\"img-fluid mx-auto d-block\">
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"box\">
                        <h5>En toute sécurité</h5>
                        <p>Votre paiement est toujours sécurisé, Lenil est conçu pour protéger votre tranquillité
                            d'esprit.</p>
                    </div>
                </div>
                <div class=\"col-md-4 pad0\">
                    <div class=\"blu_box1\">
                        <img src=\"{{ asset('build/images/box_images/tv.png') }}\" class=\"img-fluid mx-auto d-block\">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start top -->
    <section class=\"top mb-0\">
        <div class=\"container\" style=\"max-width: 1360px !important;\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"text-center\">
                        Principaux services en vedette</h1>
                    <h4 class=\"text-center\">Des conseils pratiques à chaque étape</h4>
                </div>
                <span class=\"pull-right text-success\"><a href=\"featured_proposals\">Voir plus</a></span>
                <div class=\"mt-5\">
                    <!--- home-featured-carousel Starts --->
                    <div class=\"row\">
                        <!--- row Starts -->
                        <div class=\"col-xl-2dot4 col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4\">
                            <div class=\"proposal-card-base mp-proposal-card\">
                                <!--- proposal-card-base mp-proposal-card Starts --->
                                <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\">
                                    <img src=\"#proposals/proposal_files/voice-over-1.jpg\"
                                         class=\"img-fluid\">
                                </a>
                                <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                    <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                        <span class=\"fit-avatar s24\">
\t\t\t<img src=\"#user_images/shoail.jpg\" class=\"rounded-circle\" width=\"32\" height=\"32\">
\t\t</span>
                                        <div class=\"seller-info-wrapper\">
                                            <a href=\"#shoail\" class=\"seller-name\">shoail</a>
                                            <div class=\"gig-seller-tooltip\">
                                                New Seller
                                            </div>
                                        </div>
                                    </div><!--- gig-seller-info Ends --->
                                    <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\"
                                       class=\"proposal-link-main js-proposal-card-imp-data\">
                                        <h3>I Will Record Your Brazilian Portuguese Voice Over</h3>
                                    </a>
                                    <div class=\"rating-badges-container\">
\t\t<span class=\"proposal-rating\">
\t\t<svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\"
             height=\"15\"><path
                    d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path></svg>
\t\t<span>
\t\t<strong>4.2</strong>
\t\t(5)
\t\t</span>
\t\t</span>
                                    </div>
                                </div><!--- proposal-card-caption Ends --->
                                <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->
                                    <div class=\"proposal-fav\">


                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">
                                            <i class=\"fa fa-heart dil1\" data-toggle=\"tooltip\" data-placement=\"top\"
                                               title=\"\" data-original-title=\"Favorite\"></i>
                                        </a>
                                    </div>
                                    <div class=\"proposal-price\">
                                        <a><small>STARTING AT</small>\$10</a>
                                    </div>
                                </footer><!--- proposal-card-footer Ends --->
                            </div><!--- proposal-card-base mp-proposal-card Ends --->          </div>
                        <div class=\"col-xl-2dot4 col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4\">
                            <div class=\"proposal-card-base mp-proposal-card\">
                                <!--- proposal-card-base mp-proposal-card Starts --->
                                <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\">
                                    <img src=\"#proposals/proposal_files/voice-over-1.jpg\"
                                         class=\"img-fluid\">
                                </a>
                                <div class=\"proposal-card-caption\"><!--- proposal-card-caption Starts --->
                                    <div class=\"proposal-seller-info\"><!--- gig-seller-info Starts --->
                                        <span class=\"fit-avatar s24\">
\t\t\t<img src=\"#user_images/shoail.jpg\" class=\"rounded-circle\" width=\"32\" height=\"32\">
\t\t</span>
                                        <div class=\"seller-info-wrapper\">
                                            <a href=\"#shoail\" class=\"seller-name\">shoail</a>
                                            <div class=\"gig-seller-tooltip\">
                                                New Seller
                                            </div>
                                        </div>
                                    </div><!--- gig-seller-info Ends --->
                                    <a href=\"#proposals/shoail/i-will-record-your-brazilian-portuguese-voice-over\"
                                       class=\"proposal-link-main js-proposal-card-imp-data\">
                                        <h3>I Will Record Your Brazilian Portuguese Voice Over</h3>
                                    </a>
                                    <div class=\"rating-badges-container\">
\t\t<span class=\"proposal-rating\">
\t\t<svg class=\"fit-svg-icon full_star\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\" width=\"15\"
             height=\"15\"><path
                    d=\"M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z\"></path></svg>
\t\t<span>
\t\t<strong>4.2</strong>
\t\t(5)
\t\t</span>
\t\t</span>
                                    </div>
                                </div><!--- proposal-card-caption Ends --->

                                <footer class=\"proposal-card-footer\"><!--- proposal-card-footer Starts --->
                                    <div class=\"proposal-fav\">


                                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">
                                            <i class=\"fa fa-heart dil1\" data-toggle=\"tooltip\" data-placement=\"top\"
                                               title=\"\" data-original-title=\"Favorite\"></i>
                                        </a>
                                    </div>
                                    <div class=\"proposal-price\">
                                        <a><small>STARTING AT</small>\$10</a>
                                    </div>
                                </footer><!--- proposal-card-footer Ends --->
                            </div><!--- proposal-card-base mp-proposal-card Ends --->          </div>
                    </div>
                    <!--- row Ends -->
                </div>
            </div>
        </div>
    </section>
    {% else %}
        {{ include('seller/seller_home.html.twig') }}
    {% endif %}
{% endblock %}
{% block javascripts %}

{% endblock %}", "home.html.twig", "/home/vagrant/code/lenil/templates/home.html.twig");
    }
}
