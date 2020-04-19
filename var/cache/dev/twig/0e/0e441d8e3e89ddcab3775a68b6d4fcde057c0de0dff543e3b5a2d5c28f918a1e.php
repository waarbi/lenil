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

/* partials/mobile_menu.html.twig */
class __TwigTemplate_05909b84a71c3c2b5e03dd4f7d97a616399ce75c69733313ca721a1ad9ab8e05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/mobile_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/mobile_menu.html.twig"));

        // line 1
        echo "<div class=\"cat-mobile\" id=\"gigtodo-modal-container\" style=\"display: none\"><!--- cat-mobile Starts --->
    <div data-overlay-mask=\"\" class=\"overlay-mask mobile-catnav-overlay-mask\" data-aria-hidden=\"true\"></div>
    <div data-overlay-content-wrapper=\"\" class=\"overlay-mask overlay-content-wrapper mobile-catnav-overlay-mask\">
        <div class=\"mobile-catnav-wrapper overlay-region position-relative p-xs-0\" id=\"mobile-catnav-overlay\"
             aria-hidden=\"false\" data-overlay-has-trigger=\"true\" style=\"top: 44px;\">
            <div data-ui=\"mobile-cat-nav\"
                 class=\"mobile-cat-nav bg-gray-lighter pb-xs-4 width-full position-fixed animated slideInUp slower\"
                 style=\"height: 100vh;\">

                <div class=\"bg-white display-flex-md show-md pt-md-3 pl-md-2 pb-md-3\">
                    <div class=\"flex-md-5 pl-md-0\">
                        <a role=\"button\" href=\"#\">
                            <img src=\"#images/sample.png\" width=\"158\">
                        </a>
                    </div>
                    <div class=\"flex-md-1 pr-md-2\">
                        <button class=\"btn-link text-right overlay-close flex-xs-1 justify-self-flex-end border-0 p-md-0\"
                                data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-header\"
                     class=\"mobile-catnav-header bb-xs-1 align-items-center bg-white display-flex-xs flex-nowrap position-relative height-50px\">
                    <button class=\"mobile-catnav-back-btn btn-link overlay-back p-xs-2 text-left display-none flex-xs-1 align-self-flex-start z-index-1 position-absolute\"
                            data-subnav-id=\"0\" data-ternav-id=\"0\" data-topnav-name=\"\" data-subnav-name=\"\">
                        <span class=\"screen-reader-only\">Go Back</span>
                        <span class=\"gigtodo-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                <path d=\"M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z\"></path>
              </svg>
            </span>
                    </button>
                    <div class=\"flex-xs-4 width-full pt-md-4 pb-md-4 pl-xs-2\">
                        <h6 id=\"mobile-catnav-header-title\" class=\"text-left position-absolute vertical-center\">
                            <!--  <a href=\"#\"><img src=\"images/gigtodoFav.ico\" class=\"rounded\" title='Home' alt='Home'/></a> -->
                            Parcourir les catégories</h6>
                        <h6 id=\"mobile-sub-catnav-header-title\"
                            class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8\"></h6>
                        <h6 id=\"mobile-tertiary-catnav-header-title\"
                            class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8 display-none\"></h6>
                    </div>
                    <div class=\"flex-xs-1 width-full\">
                        <button class=\"show-xs show-sm btn-link p-xs-2 overlay-close border-0 float-right\"
                                data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-scroll-wrapper\" class=\"height-full overflow-y-scroll\">

                    <div class=\"mobile-topnav bg-white animated slideInUp slower\">
                        <ul data-ui=\"mobile-top-catnav-container\"
                            class=\"mobile-top-catnav-container list-unstyled mobile-catnav-margin\">
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            echo "                                <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\"
                                    data-name=\"Graphics &amp; Design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 71), "html", null, true);
            echo "</div>

                                        <div class=\"flag-img flag-img-right\">
  <span class=\"gigtodo-icon float-right\">
  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
  <path d=\"M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z\"></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </ul>
                    </div>
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 86
            echo "                        ";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getSousCategories", [], "any", false, false, false, 86)), 0)) {
                // line 87
                echo "                            <div class=\"mobile-subnav bg-white animated display-none\"
                                 id=\"mobile-sub-catnav-content-";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\">
                                <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                                    ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "getSousCategories", [], "any", false, false, false, 90));
                foreach ($context['_seq'] as $context["_key"] => $context["sousCategory"]) {
                    // line 91
                    echo "                                        <li class=\"p-xs-1 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                            <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\"
                                               href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["sousCategory"], "slug", [], "any", false, false, false, 93)]), "html", null, true);
                    echo "\">
                                                ";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sousCategory"], "title", [], "any", false, false, false, 94), "html", null, true);
                    echo " </a>
                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                                </ul>
                            </div>
                        ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 106
        echo twig_include($this->env, $context, "partials/nav_user.html.twig");
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/mobile_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 106,  191 => 101,  185 => 100,  180 => 97,  171 => 94,  167 => 93,  163 => 91,  159 => 90,  154 => 88,  151 => 87,  148 => 86,  144 => 85,  140 => 83,  122 => 71,  115 => 68,  111 => 67,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"cat-mobile\" id=\"gigtodo-modal-container\" style=\"display: none\"><!--- cat-mobile Starts --->
    <div data-overlay-mask=\"\" class=\"overlay-mask mobile-catnav-overlay-mask\" data-aria-hidden=\"true\"></div>
    <div data-overlay-content-wrapper=\"\" class=\"overlay-mask overlay-content-wrapper mobile-catnav-overlay-mask\">
        <div class=\"mobile-catnav-wrapper overlay-region position-relative p-xs-0\" id=\"mobile-catnav-overlay\"
             aria-hidden=\"false\" data-overlay-has-trigger=\"true\" style=\"top: 44px;\">
            <div data-ui=\"mobile-cat-nav\"
                 class=\"mobile-cat-nav bg-gray-lighter pb-xs-4 width-full position-fixed animated slideInUp slower\"
                 style=\"height: 100vh;\">

                <div class=\"bg-white display-flex-md show-md pt-md-3 pl-md-2 pb-md-3\">
                    <div class=\"flex-md-5 pl-md-0\">
                        <a role=\"button\" href=\"#\">
                            <img src=\"#images/sample.png\" width=\"158\">
                        </a>
                    </div>
                    <div class=\"flex-md-1 pr-md-2\">
                        <button class=\"btn-link text-right overlay-close flex-xs-1 justify-self-flex-end border-0 p-md-0\"
                                data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-header\"
                     class=\"mobile-catnav-header bb-xs-1 align-items-center bg-white display-flex-xs flex-nowrap position-relative height-50px\">
                    <button class=\"mobile-catnav-back-btn btn-link overlay-back p-xs-2 text-left display-none flex-xs-1 align-self-flex-start z-index-1 position-absolute\"
                            data-subnav-id=\"0\" data-ternav-id=\"0\" data-topnav-name=\"\" data-subnav-name=\"\">
                        <span class=\"screen-reader-only\">Go Back</span>
                        <span class=\"gigtodo-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                <path d=\"M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z\"></path>
              </svg>
            </span>
                    </button>
                    <div class=\"flex-xs-4 width-full pt-md-4 pb-md-4 pl-xs-2\">
                        <h6 id=\"mobile-catnav-header-title\" class=\"text-left position-absolute vertical-center\">
                            <!--  <a href=\"#\"><img src=\"images/gigtodoFav.ico\" class=\"rounded\" title='Home' alt='Home'/></a> -->
                            Parcourir les catégories</h6>
                        <h6 id=\"mobile-sub-catnav-header-title\"
                            class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8\"></h6>
                        <h6 id=\"mobile-tertiary-catnav-header-title\"
                            class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8 display-none\"></h6>
                    </div>
                    <div class=\"flex-xs-1 width-full\">
                        <button class=\"show-xs show-sm btn-link p-xs-2 overlay-close border-0 float-right\"
                                data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-scroll-wrapper\" class=\"height-full overflow-y-scroll\">

                    <div class=\"mobile-topnav bg-white animated slideInUp slower\">
                        <ul data-ui=\"mobile-top-catnav-container\"
                            class=\"mobile-top-catnav-container list-unstyled mobile-catnav-margin\">
                            {% for category in categories_yes %}
                                <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"{{ category.id }}\"
                                    data-name=\"Graphics &amp; Design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">{{ category.title }}</div>

                                        <div class=\"flag-img flag-img-right\">
  <span class=\"gigtodo-icon float-right\">
  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
  <path d=\"M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z\"></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {% for category in categories_yes %}
                        {% if category.getSousCategories | length > 0 %}
                            <div class=\"mobile-subnav bg-white animated display-none\"
                                 id=\"mobile-sub-catnav-content-{{ category.id }}\">
                                <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                                    {% for sousCategory in category.getSousCategories %}
                                        <li class=\"p-xs-1 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                            <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\"
                                               href=\"{{ path('category_services',{slug: sousCategory.slug}) }}\">
                                                {{ sousCategory.title }} </a>
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
{{ include('partials/nav_user.html.twig') }}", "partials/mobile_menu.html.twig", "/home/vagrant/code/lenil/templates/partials/mobile_menu.html.twig");
    }
}
