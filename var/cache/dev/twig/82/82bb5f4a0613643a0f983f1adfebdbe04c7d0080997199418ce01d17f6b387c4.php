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

/* seller/dashboard.html.twig */
class __TwigTemplate_8752e94cb14afa45cafe67b12a60b6e85f2b38f2bcae9f6697e9c507daddbd33 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seller/dashboard.html.twig", 5);
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

        echo "Lenil | Page dashboard, tableau de recapitulation des activités du Freelancer";
        
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
        echo "    <div class=\"container mt-4 mb-5\" style=\"max-width: 1200px !important;\">
        <div class=\"row\">
            <div class=\"col-md-4 \">
                <div class=\"card mb-3 contacts-sidebar\">
                    <div class=\"card-header\">
                        <h5 class=\"h5\"><i class=\"fa fa-address-book \"></i> Mes contacts</h5>
                        <ul class=\"nav nav-tabs card-header-tabs\">
                            <li class=\"nav-item\">
                                <a href=\"#my_buyers\" data-toggle=\"tab\" class=\"nav-link make-black active \">Achéteurs </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#my_sellers\" data-toggle=\"tab\" class=\"nav-link make-black\">Vendeurs </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"tab-content\">
                            <div id=\"my_buyers\" class=\"tab-pane fade show active\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                        <tr>
                                            <th class=\"gray\">Nom achéteur</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id=\"my_sellers\" class=\"tab-pane fade\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                        <tr>
                                            <th class=\"gray\">Nom vendeurs</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"sticky-wrapper\" class=\"sticky-wrapper\" style=\"height: 275px;\"><div class=\"card rounded-0 sticky-start mb-3 card_user \" style=\"width: 364px;\">
                        <div class=\"card-body\">
                            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/sales.png"), "html", null, true);
        echo "\" class=\"img-fluid center-block\" alt=\"none\">
                            <h4>Commençer à vendre</h4>
                            <p>Vendez vos services à des millions de personnes partout dans le monde.</p>
                            <button onclick=\"location.href='/start_selling'\" class=\"btn get_btn\">Vendre un service</button>
                        </div>
                    </div></div>
                <br>
                <script>
                    \$(document).ready(function(){
// Sticky Code start //
                        if(\$(window).width() < 767){
                        }else{
                            \$(\".sticky-start\").sticky({
                                topSpacing:10,
                                zIndex:500,
                                bottomSpacing:400,
                            });
                        }
// Sticky code ends //
                    });
                </script>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card rounded-0\">
                    <div class=\"card-body p-0\">
                        <div class=\"row p-2\">
                            <div class=\"col-lg-3 col-sm-12 text-center pt-2\">
                                <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["seller"]) || array_key_exists("seller", $context) ? $context["seller"] : (function () { throw new RuntimeError('Variable "seller" does not exist.', 83, $this->source); })()), "picture", [], "any", false, false, false, 83))), "html", null, true);
        echo "\" width=\"130\" class=\"rounded-circle img-thumbnail\" alt=\"Avatar de  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "fullName", [], "any", false, false, false, 83), "html", null, true);
        echo "\"/>
                            </div>
                            <div class=\"col-lg-9 col-sm-12 text-lg-left text-center \">
                                <div class=\"row mb-2\">
                                    <div class=\"col-6 col-lg-4 mt-3\">
                                        <h6><i class=\"fa fa-globe pr-1\"></i> Pays</h6>
                                        <h6><i class=\"fa fa-star pr-1\"></i> Note</h6>
                                    </div>
                                    <div class=\"col-6 col-lg-8 mt-3\">
                                        <h6 class=\"text-muted\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seller"]) || array_key_exists("seller", $context) ? $context["seller"] : (function () { throw new RuntimeError('Variable "seller" does not exist.', 92, $this->source); })()), "pays", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92), "html", null, true);
        echo "</h6>
                                        <h6 class=\"text-muted\"> 100%</h6>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 col-sm-4\">
                                        <h6><i class=\"fa fa-truck pr-1\"></i> Récente livraison</h6>
                                        <h6><i class=\"fa fa-clock-o pr-1\"></i> Membre depuis le</h6>
                                    </div>
                                    <div class=\"col-6 col-lg-8\">
                                        <h6 class=\"text-muted\">none</h6>
                                        <h6 class=\"text-muted\">";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["seller"]) || array_key_exists("seller", $context) ? $context["seller"] : (function () { throw new RuntimeError('Variable "seller" does not exist.', 103, $this->source); })()), "createdAt", [], "any", false, false, false, 103), "d/m/Y"), "html", null, true);
        echo "</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=\"row pl-3 pr-3 pb-2 pt-2 mt-4\">
                            <div class=\"col-md-4 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/completed.png"), "html", null, true);
        echo "\" alt=\"completed\">
                                <h5 class=\"text-muted pt-2\">Orders Completed</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                            <div class=\"col-md-4 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/box.png"), "html", null, true);
        echo "\" alt=\"box\">
                                <h5 class=\"text-muted pt-2\">Delivered Orders</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                            <div class=\"col-md-4 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/cancellation.png"), "html", null, true);
        echo "\" alt=\"cancellation\">
                                <h5 class=\"text-muted pt-2\">Orders Cancelled</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                        </div>
                        <hr>
                        <div class=\"row pl-3 pr-3 pb-2 pt-2\">
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/debt.png"), "html", null, true);
        echo "\" alt=\"debt\">
                                <h5 class=\"text-muted pt-2\"> Sales In Queue</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/shopping-bags.png"), "html", null, true);
        echo "\" alt=\"shopping-bags\">
                                <h5 class=\"text-muted pt-2\"> Open Purchases</h5>
                                <h3 class=\"text-success\">0 </h3>
                            </div>
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/accounting.png"), "html", null, true);
        echo "\" alt=\"accounting\">
                                <h5 class=\"text-muted pt-2\"> Balance</h5>
                                <h3 class=\"text-success\">\$20</h3>
                            </div>
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/comp/financial.png"), "html", null, true);
        echo "\" alt=\"financial\">
                                <h5 class=\"text-muted pt-2\"> Earnings(Month)</h5>
                                <h3 class=\"text-success\">\$0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded-0 mt-3 bottom-tabs-dash\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\">
                            <li class=\"nav-item\">
                                <a href=\"#notifications\" data-toggle=\"tab\" class=\"nav-link make-black\">
                                    Notifications <span class=\"badge badge-success\">0 </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#inbox\" data-toggle=\"tab\" class=\"nav-link make-black active\">
                                    Messages <span class=\"badge badge-success\">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"tab-content dashboard\">
                            <div id=\"notifications\" class=\"tab-pane fade mt-3\">
                                <h5 class=\"text-center mb-3\"> No Notifications Are Available </h5>                      </div>
                            <div id=\"inbox\" class=\"tab-pane fade mt-3 active show\">
                                <h5 class=\"text-center mb-3\"> No Messages. </h5>                      </div>
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

    public function getTemplateName()
    {
        return "seller/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 144,  269 => 139,  261 => 134,  253 => 129,  242 => 121,  234 => 116,  226 => 111,  215 => 103,  201 => 92,  187 => 83,  157 => 56,  107 => 8,  97 => 7,  78 => 3,  60 => 1,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
{% endblock %}
{% block title %}Lenil | Page dashboard, tableau de recapitulation des activités du Freelancer{% endblock %}

{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"container mt-4 mb-5\" style=\"max-width: 1200px !important;\">
        <div class=\"row\">
            <div class=\"col-md-4 \">
                <div class=\"card mb-3 contacts-sidebar\">
                    <div class=\"card-header\">
                        <h5 class=\"h5\"><i class=\"fa fa-address-book \"></i> Mes contacts</h5>
                        <ul class=\"nav nav-tabs card-header-tabs\">
                            <li class=\"nav-item\">
                                <a href=\"#my_buyers\" data-toggle=\"tab\" class=\"nav-link make-black active \">Achéteurs </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#my_sellers\" data-toggle=\"tab\" class=\"nav-link make-black\">Vendeurs </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"tab-content\">
                            <div id=\"my_buyers\" class=\"tab-pane fade show active\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                        <tr>
                                            <th class=\"gray\">Nom achéteur</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id=\"my_sellers\" class=\"tab-pane fade\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                        <tr>
                                            <th class=\"gray\">Nom vendeurs</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"sticky-wrapper\" class=\"sticky-wrapper\" style=\"height: 275px;\"><div class=\"card rounded-0 sticky-start mb-3 card_user \" style=\"width: 364px;\">
                        <div class=\"card-body\">
                            <img src=\"{{ asset('/uploads/images/sales.png')}}\" class=\"img-fluid center-block\" alt=\"none\">
                            <h4>Commençer à vendre</h4>
                            <p>Vendez vos services à des millions de personnes partout dans le monde.</p>
                            <button onclick=\"location.href='/start_selling'\" class=\"btn get_btn\">Vendre un service</button>
                        </div>
                    </div></div>
                <br>
                <script>
                    \$(document).ready(function(){
// Sticky Code start //
                        if(\$(window).width() < 767){
                        }else{
                            \$(\".sticky-start\").sticky({
                                topSpacing:10,
                                zIndex:500,
                                bottomSpacing:400,
                            });
                        }
// Sticky code ends //
                    });
                </script>
            </div>
            <div class=\"col-md-8\">
                <div class=\"card rounded-0\">
                    <div class=\"card-body p-0\">
                        <div class=\"row p-2\">
                            <div class=\"col-lg-3 col-sm-12 text-center pt-2\">
                                <img src=\"{{ asset('/uploads/images/'~seller.picture) }}\" width=\"130\" class=\"rounded-circle img-thumbnail\" alt=\"Avatar de  {{ app.user.fullName }}\"/>
                            </div>
                            <div class=\"col-lg-9 col-sm-12 text-lg-left text-center \">
                                <div class=\"row mb-2\">
                                    <div class=\"col-6 col-lg-4 mt-3\">
                                        <h6><i class=\"fa fa-globe pr-1\"></i> Pays</h6>
                                        <h6><i class=\"fa fa-star pr-1\"></i> Note</h6>
                                    </div>
                                    <div class=\"col-6 col-lg-8 mt-3\">
                                        <h6 class=\"text-muted\">{{ seller.pays.name }}</h6>
                                        <h6 class=\"text-muted\"> 100%</h6>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 col-sm-4\">
                                        <h6><i class=\"fa fa-truck pr-1\"></i> Récente livraison</h6>
                                        <h6><i class=\"fa fa-clock-o pr-1\"></i> Membre depuis le</h6>
                                    </div>
                                    <div class=\"col-6 col-lg-8\">
                                        <h6 class=\"text-muted\">none</h6>
                                        <h6 class=\"text-muted\">{{ seller.createdAt | date('d/m/Y') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class=\"row pl-3 pr-3 pb-2 pt-2 mt-4\">
                            <div class=\"col-md-4 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/completed.png') }}\" alt=\"completed\">
                                <h5 class=\"text-muted pt-2\">Orders Completed</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                            <div class=\"col-md-4 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/box.png') }}\" alt=\"box\">
                                <h5 class=\"text-muted pt-2\">Delivered Orders</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                            <div class=\"col-md-4 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/cancellation.png') }}\" alt=\"cancellation\">
                                <h5 class=\"text-muted pt-2\">Orders Cancelled</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                        </div>
                        <hr>
                        <div class=\"row pl-3 pr-3 pb-2 pt-2\">
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/debt.png') }}\" alt=\"debt\">
                                <h5 class=\"text-muted pt-2\"> Sales In Queue</h5>
                                <h3 class=\"text-success\">0</h3>
                            </div>
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/shopping-bags.png') }}\" alt=\"shopping-bags\">
                                <h5 class=\"text-muted pt-2\"> Open Purchases</h5>
                                <h3 class=\"text-success\">0 </h3>
                            </div>
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/accounting.png') }}\" alt=\"accounting\">
                                <h5 class=\"text-muted pt-2\"> Balance</h5>
                                <h3 class=\"text-success\">\$20</h3>
                            </div>
                            <div class=\"col-md-3 text-center border-box\">
                                <img width=\"\" src=\"{{ asset('/uploads/images/comp/financial.png') }}\" alt=\"financial\">
                                <h5 class=\"text-muted pt-2\"> Earnings(Month)</h5>
                                <h3 class=\"text-success\">\$0</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded-0 mt-3 bottom-tabs-dash\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\">
                            <li class=\"nav-item\">
                                <a href=\"#notifications\" data-toggle=\"tab\" class=\"nav-link make-black\">
                                    Notifications <span class=\"badge badge-success\">0 </span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#inbox\" data-toggle=\"tab\" class=\"nav-link make-black active\">
                                    Messages <span class=\"badge badge-success\">0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"tab-content dashboard\">
                            <div id=\"notifications\" class=\"tab-pane fade mt-3\">
                                <h5 class=\"text-center mb-3\"> No Notifications Are Available </h5>                      </div>
                            <div id=\"inbox\" class=\"tab-pane fade mt-3 active show\">
                                <h5 class=\"text-center mb-3\"> No Messages. </h5>                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "seller/dashboard.html.twig", "/home/vagrant/code/lenil/templates/seller/dashboard.html.twig");
    }
}
