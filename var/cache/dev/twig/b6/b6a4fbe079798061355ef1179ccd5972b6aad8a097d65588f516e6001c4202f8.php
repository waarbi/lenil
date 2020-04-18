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

/* freelancer/index.html.twig */
class __TwigTemplate_f12ccb9c0fb6af55919ac4ad6771a53788e89b3f21c447dd408c8575a9230457 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancer/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "freelancer/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "freelancer/index.html.twig", 6);
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

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/freelancers_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container-fluid mt-5\"><!-- Container start -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <center>
                    <h1>Freelancers </h1>
                    <p class=\"lead\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"> Accueil </a>/ Recherche de freelancers</p>
                </center>
                <hr class=\"mt-5 pt-2\">
            </div>
        </div>
        <div class=\"row mt-3 justify-content-center\">
            <!-- <div class=\"col-lg-10 col-md-12\"> -->
            <div class=\"col-xl-10 col-lg-12 col-md-12\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-12 \">

                        <div class=\"card border-success mb-3\">
                            <div class=\"card-body pb-2 pt-3 \">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" class=\"get_online_sellers\">
                                            <span>Show Online Sellers</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"card border-success mb-3\">
                            <div class=\"card-header bg-success\">
                                <h3 class=\"float-left text-white h5\">Localisation</h3>
                                <button class=\"btn btn-secondary btn-sm float-right clear_seller_country clearlink\"
                                        onclick=\"clearCountry()\">
                                    <i class=\"fa fa-times-circle\"></i> initialiser Filtre
                                </button>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"France\" class=\"get_seller_country\">
                                            <span>Sénégal</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"China\" class=\"get_seller_country\">
                                            <span>Cote d'ivoire</span>
                                        </label>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <div class=\"card border-success mb-3\">
                            <div class=\"card-header bg-success\">
                                <h3 class=\"float-left text-white h5\">Niveau du freelancer</h3>
                                <button class=\"btn btn-secondary btn-sm float-right clear_seller_level clearlink\"
                                        onclick=\"clearLevel()\">
                                    <i class=\"fa fa-times-circle\"></i> initialiser Filtre
                                </button>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"4\" class=\"get_seller_level\">
                                            <span>Top Notation A</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"3\" class=\"get_seller_level\">
                                            <span>Niveau 2</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" class=\"get_seller_level\">
                                            <span>Débutant</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"2\" class=\"get_seller_level\">
                                            <span>Niveau 1</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card border-success mb-3\">
                            <div class=\"card-header bg-success\">
                                <h3 class=\"float-left text-white h5\">Langue du freelancer</h3>
                                <button class=\"btn btn-secondary btn-sm float-right clear_seller_language clearlink\"
                                        onclick=\"clearLanguage()\">
                                    <i class=\"fa fa-times-circle\"></i> Clear Filter
                                </button>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"45\" class=\"get_seller_language\">
                                            <span>Francais</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"51\" class=\"get_seller_language\">
                                            <span>Anglais</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-12 \">
                        <div class=\"row flex-wrap\" id=\"freelancers\">
                            <!-- Here Freelancers Gona Show -->
                            <div class=\"col-md-12\">
                                <div class=\"card card-body mb-4 freelancerBox\">
                                    <figure class=\"wt-userlistingimg\">
                                        <img src=\"#user_images/salman.jpg\" width=\"100\"
                                             class=\"rounded img-fluid\">
                                        <small class=\"text-muted mt-1\">
                                            <i class=\"fa fa-circle text-danger\"></i> Offline </small>
                                        <div class=\"wt-userdropdown wt-away template-content tipso_style wt-tipso\">
                                            <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/level_badge_2.png"), "html", null, true);
        echo "\"
                                                 class=\"level_badge\">
                                        </div>
                                        <a id=\"chatBtn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                                           href=\"conversations/message.php?seller_id=2\"
                                           class=\"btn btn-success mt-4 text-white \"
                                           data-original-title=\"Chat With Me\"><i class=\"fa fa-comments-o\"
                                                                                 aria-hidden=\"true\"></i> Chat</a>
                                    </figure>
                                    <div class=\"request-description\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-9 col-md-12\">
                                                <a href=\"mir_digimarket\">
                                                    <h6 class=\"font-weight-normal\"><i class=\"fa fa-check-circle\"
                                                                                      style=\"color:#00cc8d;\"></i>
                                                        mir_digimarket </h6>
                                                    <h5 class=\"text-success\"> Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum has been the
                                                        industry's. </h5>
                                                </a>
                                                <ul class=\"tagline mb-2\">
                                                    <li>
                                                        <i class=\"fa fa-user\"></i>
                                                        <strong>Member Since: </strong> January 1, 2018
                                                    </li>
                                                    <li>
                                                        <i class=\"fa fa-truck fa-flip-horizontal\"></i>
                                                        <strong>Recent Delivery: </strong> January 16, 2020
                                                    </li>
                                                    <li>
                                                        <i class=\"fa fa-map-marker\"></i>
                                                        <strong>Country: </strong> China
                                                    </li>
                                                    <li>
                                                        <a href=\"conversations/message.php?seller_id=2\"><i
                                                                    class=\"fa fa-comments-o\"></i>
                                                            <strong>Contact:</strong> mir_digimarket </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-lg-3 col-md-12\">
                                                <div class=\"star-rating\">
                                                    <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i
                                                            class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i
                                                            class=\"fa fa-star-o\"></i>                <h4 class=\"mb-1\">
                                                        4.8/<small class=\"text-muted font-weight-normal\">5</small></h4>
                                                    <a>(21 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"lead mb-2 mt-0\">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of letters, as opposed to using 'Content here.</p>
                                        <div class=\"skills\">
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    \$(\".showMore\").click(function () {
                                        var id = \$(this).data(\"id\");
                                        \$(\".tags-\" + id).removeClass(\"d-none\");
                                        \$(this).addClass(\"d-none\");
                                    });
                                </script>
                            </div>
                        </div>
                        <div id=\"wait\"></div>
                        <br>
                        <div class=\"row justify-content-center mb-5 mt-0\"><!-- row justify-content-center Starts -->
                            <nav><!-- nav Starts -->
                                <ul class=\"pagination\" id=\"freelancer_pagination\">
                                    <!-- Here Pagination Gona Show -->

                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"?page=1&amp;\">Première page</a>
                                    </li>
                                    <li class=\"page-item active\"><a class=\"page-link\" href=\"?page=1&amp;\">1</a></li>
                                    <li class=\"page-item\"><a href=\"?page=2&amp;\" class=\"page-link\">2</a></li>
                                    <li class=\"page-item\"><a href=\"?page=6&amp;\" class=\"page-link\">6</a></li>
                                    <li class=\"page-item\" href=\"#\"><a class=\"page-link\">...</a></li>
                                    <li class=\"page-item \"><a class=\"page-link\" href=\"?page=13&amp;\">13</a></li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"?page=13&amp;\">Dernière Page</a>
                                    </li>
                                </ul>
                            </nav><!-- nav Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        echo "    <script type=\"application/javascript\">
        \$(document).ready(function () {

            function get_freelancers() {
                var sPath = '';
                var aInputs = Array();

                var aInputs = \$('li').find('.get_online_sellers');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    var sPath = '';
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'online_sellers[]=' + aKeys[i] + '&';
                    }
                }

                var aInputs = \$('li').find('.get_seller_country');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'seller_country[]=' + aKeys[i] + '&';
                    }
                }

                var aInputs = Array();
                var aInputs = \$('li').find('.get_seller_level');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'seller_level[]=' + aKeys[i] + '&';
                    }
                }

                var aInputs = Array();
                var aInputs = \$('li').find('.get_seller_language');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'seller_language[]=' + aKeys[i] + '&';
                    }
                }

                \$('#wait').addClass(\"loader\");
                \$.ajax({
                    url: \"freelancer_load\",
                    method: \"POST\",
                    data: sPath + 'zAction=get_freelancers',
                    success: function (data) {
                        \$('#freelancers').html('');
                        \$('#freelancers').html(data);
                        \$('#wait').removeClass(\"loader\");
                    }
                });
                \$.ajax({
                    url: \"freelancer_load\",
                    method: \"POST\",
                    data: sPath + 'zAction=get_freelancer_pagination',
                    success: function (data) {
                        \$('#freelancer_pagination').html('');
                        \$('#freelancer_pagination').html(data);
                    }
                });
            }

            \$('.get_online_sellers').click(function () {
                get_freelancers();
            });
            \$('.get_seller_country').click(function () {
                get_freelancers();
            });
            \$('.get_delivery_time').click(function () {
                get_freelancers();
            });
            \$('.get_seller_level').click(function () {
                get_freelancers();
            });
            \$('.get_seller_language').click(function () {
                get_freelancers();
            });

        });

    </script>
    <script type=\"application/javascript\">

        \$(document).ready(function () {
            \$(\".get_seller_country\").click(function () {
                if (\$(\".get_seller_country:checked\").length > 0) {
                    \$(\".clear_seller_country\").show();
                } else {
                    \$(\".clear_seller_country\").hide();
                }
            });
            \$(\".get_delivery_time\").click(function () {
                if (\$(\".get_delivery_time:checked\").length > 0) {
                    \$(\".clear_delivery_time\").show();
                } else {
                    \$(\".clear_delivery_time\").hide();
                }
            });
            \$(\".get_seller_level\").click(function () {
                if (\$(\".get_seller_level:checked\").length > 0) {
                    \$(\".clear_seller_level\").show();
                } else {
                    \$(\".clear_seller_level\").hide();
                }
            });
            \$(\".get_seller_language\").click(function () {
                if (\$(\".get_seller_language:checked\").length > 0) {
                    \$(\".clear_seller_language\").show();
                } else {
                    \$(\".clear_seller_language\").hide();
                }
            });
            \$(\".clear_seller_country\").click(function () {
                \$(\".clear_seller_country\").hide();
            });
            \$(\".clear_delivery_time\").click(function () {
                \$(\".clear_delivery_time\").hide();
            });
            \$(\".clear_seller_level\").click(function () {
                \$(\".clear_seller_level\").hide();
            });
            \$(\".clear_seller_language\").click(function () {
                \$(\".clear_seller_language\").hide();
            });
        });

        function clearCountry() {
            \$('.get_seller_country').prop('checked', false);
            get_freelancers();
        }

        function clearDelivery() {
            \$('.get_delivery_time').prop('checked', false);
            get_freelancers();
        }

        function clearLevel() {
            \$('.get_seller_level').prop('checked', false);
            get_freelancers();
        }

        function clearLanguage() {
            \$('.get_seller_language').prop('checked', false);
            get_freelancers();
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "freelancer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 235,  334 => 234,  230 => 140,  101 => 14,  94 => 9,  84 => 8,  70 => 2,  60 => 1,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link href=\"{{ asset('build/css/freelancers_css.css') }}\" rel=\"stylesheet\">

{% endblock %}

{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"container-fluid mt-5\"><!-- Container start -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <center>
                    <h1>Freelancers </h1>
                    <p class=\"lead\"><a href=\"{{ path('homepage') }}\"> Accueil </a>/ Recherche de freelancers</p>
                </center>
                <hr class=\"mt-5 pt-2\">
            </div>
        </div>
        <div class=\"row mt-3 justify-content-center\">
            <!-- <div class=\"col-lg-10 col-md-12\"> -->
            <div class=\"col-xl-10 col-lg-12 col-md-12\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-4 col-sm-12 \">

                        <div class=\"card border-success mb-3\">
                            <div class=\"card-body pb-2 pt-3 \">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" class=\"get_online_sellers\">
                                            <span>Show Online Sellers</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"card border-success mb-3\">
                            <div class=\"card-header bg-success\">
                                <h3 class=\"float-left text-white h5\">Localisation</h3>
                                <button class=\"btn btn-secondary btn-sm float-right clear_seller_country clearlink\"
                                        onclick=\"clearCountry()\">
                                    <i class=\"fa fa-times-circle\"></i> initialiser Filtre
                                </button>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"France\" class=\"get_seller_country\">
                                            <span>Sénégal</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"China\" class=\"get_seller_country\">
                                            <span>Cote d'ivoire</span>
                                        </label>
                                    </li>


                                </ul>
                            </div>
                        </div>

                        <div class=\"card border-success mb-3\">
                            <div class=\"card-header bg-success\">
                                <h3 class=\"float-left text-white h5\">Niveau du freelancer</h3>
                                <button class=\"btn btn-secondary btn-sm float-right clear_seller_level clearlink\"
                                        onclick=\"clearLevel()\">
                                    <i class=\"fa fa-times-circle\"></i> initialiser Filtre
                                </button>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"4\" class=\"get_seller_level\">
                                            <span>Top Notation A</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"3\" class=\"get_seller_level\">
                                            <span>Niveau 2</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"1\" class=\"get_seller_level\">
                                            <span>Débutant</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"2\" class=\"get_seller_level\">
                                            <span>Niveau 1</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"card border-success mb-3\">
                            <div class=\"card-header bg-success\">
                                <h3 class=\"float-left text-white h5\">Langue du freelancer</h3>
                                <button class=\"btn btn-secondary btn-sm float-right clear_seller_language clearlink\"
                                        onclick=\"clearLanguage()\">
                                    <i class=\"fa fa-times-circle\"></i> Clear Filter
                                </button>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"nav flex-column\">
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"45\" class=\"get_seller_language\">
                                            <span>Francais</span>
                                        </label>
                                    </li>
                                    <li class=\"nav-item checkbox checkbox-success\">
                                        <label>
                                            <input type=\"checkbox\" value=\"51\" class=\"get_seller_language\">
                                            <span>Anglais</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-12 \">
                        <div class=\"row flex-wrap\" id=\"freelancers\">
                            <!-- Here Freelancers Gona Show -->
                            <div class=\"col-md-12\">
                                <div class=\"card card-body mb-4 freelancerBox\">
                                    <figure class=\"wt-userlistingimg\">
                                        <img src=\"#user_images/salman.jpg\" width=\"100\"
                                             class=\"rounded img-fluid\">
                                        <small class=\"text-muted mt-1\">
                                            <i class=\"fa fa-circle text-danger\"></i> Offline </small>
                                        <div class=\"wt-userdropdown wt-away template-content tipso_style wt-tipso\">
                                            <img src=\"{{ asset('build/images/level_badge_2.png') }}\"
                                                 class=\"level_badge\">
                                        </div>
                                        <a id=\"chatBtn\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                                           href=\"conversations/message.php?seller_id=2\"
                                           class=\"btn btn-success mt-4 text-white \"
                                           data-original-title=\"Chat With Me\"><i class=\"fa fa-comments-o\"
                                                                                 aria-hidden=\"true\"></i> Chat</a>
                                    </figure>
                                    <div class=\"request-description\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-9 col-md-12\">
                                                <a href=\"mir_digimarket\">
                                                    <h6 class=\"font-weight-normal\"><i class=\"fa fa-check-circle\"
                                                                                      style=\"color:#00cc8d;\"></i>
                                                        mir_digimarket </h6>
                                                    <h5 class=\"text-success\"> Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum has been the
                                                        industry's. </h5>
                                                </a>
                                                <ul class=\"tagline mb-2\">
                                                    <li>
                                                        <i class=\"fa fa-user\"></i>
                                                        <strong>Member Since: </strong> January 1, 2018
                                                    </li>
                                                    <li>
                                                        <i class=\"fa fa-truck fa-flip-horizontal\"></i>
                                                        <strong>Recent Delivery: </strong> January 16, 2020
                                                    </li>
                                                    <li>
                                                        <i class=\"fa fa-map-marker\"></i>
                                                        <strong>Country: </strong> China
                                                    </li>
                                                    <li>
                                                        <a href=\"conversations/message.php?seller_id=2\"><i
                                                                    class=\"fa fa-comments-o\"></i>
                                                            <strong>Contact:</strong> mir_digimarket </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-lg-3 col-md-12\">
                                                <div class=\"star-rating\">
                                                    <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i
                                                            class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i
                                                            class=\"fa fa-star-o\"></i>                <h4 class=\"mb-1\">
                                                        4.8/<small class=\"text-muted font-weight-normal\">5</small></h4>
                                                    <a>(21 Reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=\"lead mb-2 mt-0\">It is a long established fact that a reader will be
                                            distracted by the readable content of a page when looking at its layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of letters, as opposed to using 'Content here.</p>
                                        <div class=\"skills\">
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    \$(\".showMore\").click(function () {
                                        var id = \$(this).data(\"id\");
                                        \$(\".tags-\" + id).removeClass(\"d-none\");
                                        \$(this).addClass(\"d-none\");
                                    });
                                </script>
                            </div>
                        </div>
                        <div id=\"wait\"></div>
                        <br>
                        <div class=\"row justify-content-center mb-5 mt-0\"><!-- row justify-content-center Starts -->
                            <nav><!-- nav Starts -->
                                <ul class=\"pagination\" id=\"freelancer_pagination\">
                                    <!-- Here Pagination Gona Show -->

                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"?page=1&amp;\">Première page</a>
                                    </li>
                                    <li class=\"page-item active\"><a class=\"page-link\" href=\"?page=1&amp;\">1</a></li>
                                    <li class=\"page-item\"><a href=\"?page=2&amp;\" class=\"page-link\">2</a></li>
                                    <li class=\"page-item\"><a href=\"?page=6&amp;\" class=\"page-link\">6</a></li>
                                    <li class=\"page-item\" href=\"#\"><a class=\"page-link\">...</a></li>
                                    <li class=\"page-item \"><a class=\"page-link\" href=\"?page=13&amp;\">13</a></li>
                                    <li class=\"page-item\">
                                        <a class=\"page-link\" href=\"?page=13&amp;\">Dernière Page</a>
                                    </li>
                                </ul>
                            </nav><!-- nav Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script type=\"application/javascript\">
        \$(document).ready(function () {

            function get_freelancers() {
                var sPath = '';
                var aInputs = Array();

                var aInputs = \$('li').find('.get_online_sellers');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    var sPath = '';
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'online_sellers[]=' + aKeys[i] + '&';
                    }
                }

                var aInputs = \$('li').find('.get_seller_country');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'seller_country[]=' + aKeys[i] + '&';
                    }
                }

                var aInputs = Array();
                var aInputs = \$('li').find('.get_seller_level');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'seller_level[]=' + aKeys[i] + '&';
                    }
                }

                var aInputs = Array();
                var aInputs = \$('li').find('.get_seller_language');
                var aKeys = Array();
                var aValues = Array();
                iKey = 0;
                \$.each(aInputs, function (key, oInput) {
                    if (oInput.checked) {
                        aKeys[iKey] = oInput.value
                    }
                    ;
                    iKey++;
                });
                if (aKeys.length > 0) {
                    for (var i = 0; i < aKeys.length; i++) {
                        sPath = sPath + 'seller_language[]=' + aKeys[i] + '&';
                    }
                }

                \$('#wait').addClass(\"loader\");
                \$.ajax({
                    url: \"freelancer_load\",
                    method: \"POST\",
                    data: sPath + 'zAction=get_freelancers',
                    success: function (data) {
                        \$('#freelancers').html('');
                        \$('#freelancers').html(data);
                        \$('#wait').removeClass(\"loader\");
                    }
                });
                \$.ajax({
                    url: \"freelancer_load\",
                    method: \"POST\",
                    data: sPath + 'zAction=get_freelancer_pagination',
                    success: function (data) {
                        \$('#freelancer_pagination').html('');
                        \$('#freelancer_pagination').html(data);
                    }
                });
            }

            \$('.get_online_sellers').click(function () {
                get_freelancers();
            });
            \$('.get_seller_country').click(function () {
                get_freelancers();
            });
            \$('.get_delivery_time').click(function () {
                get_freelancers();
            });
            \$('.get_seller_level').click(function () {
                get_freelancers();
            });
            \$('.get_seller_language').click(function () {
                get_freelancers();
            });

        });

    </script>
    <script type=\"application/javascript\">

        \$(document).ready(function () {
            \$(\".get_seller_country\").click(function () {
                if (\$(\".get_seller_country:checked\").length > 0) {
                    \$(\".clear_seller_country\").show();
                } else {
                    \$(\".clear_seller_country\").hide();
                }
            });
            \$(\".get_delivery_time\").click(function () {
                if (\$(\".get_delivery_time:checked\").length > 0) {
                    \$(\".clear_delivery_time\").show();
                } else {
                    \$(\".clear_delivery_time\").hide();
                }
            });
            \$(\".get_seller_level\").click(function () {
                if (\$(\".get_seller_level:checked\").length > 0) {
                    \$(\".clear_seller_level\").show();
                } else {
                    \$(\".clear_seller_level\").hide();
                }
            });
            \$(\".get_seller_language\").click(function () {
                if (\$(\".get_seller_language:checked\").length > 0) {
                    \$(\".clear_seller_language\").show();
                } else {
                    \$(\".clear_seller_language\").hide();
                }
            });
            \$(\".clear_seller_country\").click(function () {
                \$(\".clear_seller_country\").hide();
            });
            \$(\".clear_delivery_time\").click(function () {
                \$(\".clear_delivery_time\").hide();
            });
            \$(\".clear_seller_level\").click(function () {
                \$(\".clear_seller_level\").hide();
            });
            \$(\".clear_seller_language\").click(function () {
                \$(\".clear_seller_language\").hide();
            });
        });

        function clearCountry() {
            \$('.get_seller_country').prop('checked', false);
            get_freelancers();
        }

        function clearDelivery() {
            \$('.get_delivery_time').prop('checked', false);
            get_freelancers();
        }

        function clearLevel() {
            \$('.get_seller_level').prop('checked', false);
            get_freelancers();
        }

        function clearLanguage() {
            \$('.get_seller_language').prop('checked', false);
            get_freelancers();
        }
    </script>
{% endblock %}", "freelancer/index.html.twig", "/home/vagrant/code/lenil/templates/freelancer/index.html.twig");
    }
}
