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

/* partials/header.html.twig */
class __TwigTemplate_9205cac495d6ea2278c826f27e15d4aeb58e024874ea975ef39c6b930cc65be6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header.html.twig"));

        // line 1
        echo "<div id=\"gnav-header\" class=\"gnav-header global-nav clear gnav-3\">
    <header id=\"gnav-header-inner\" class=\"gnav-header-inner clear apply-nav-height col-group has-svg-icons body-max-width\"><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <div class=\"col-xs-12\">
            <div id=\"gigtodo-logo\" class=\"apply-nav-height gigtodo-logo-svg gigtodo-logo-svg-logged-in \">
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                    <img id=\"logo-nil\" class=\"desktop\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" width=\"150\">
                </a>
            </div>
            <button id=\"mobilemenu\" class=\"unstyled-button mobile-catnav-trigger apply-nav-height icon-b-1 tablet-catnav-enabled left\">
                <span class=\"screen-reader-only\"></span>
                <div class=\"text-gray-lighter text-body-larger\">
          <span class=\"gigtodo-icon hamburger-icon nav-icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
              <path d=\"M20,6H4A1,1,0,1,1,4,4H20A1,1,0,0,1,20,6Z\"></path>
              <path d=\"M20,13H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,13Z\"></path>
              <path d=\"M20,20H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,20Z\"></path>
            </svg>
          </span>
                </div>
            </button>
            <div class=\"catnav-search-bar search-browse-wrapper with-catnav\">
                <div class=\"search-browse-inner\">
                    <form id=\"gnav-search\" class=\"search-nav expanded-search apply-nav-height\" method=\"post\">
                        <div class=\"gnav-search-inner clearable\">
                            <label for=\"search-query\" class=\"screen-reader-only\"></label>
                            <div class=\"search-input-wrapper text-field-wrapper\">
                                <input id=\"search-query\" class=\"rounded\" name=\"search_query\" placeholder=\"Find Services\" value=\"\" autocomplete=\"off\">
                            </div>
                            <div class=\"search-button-wrapper hide\">
                                <button class=\"btn btn-primary\" name=\"search\" type=\"submit\" value=\"Search\">
                                    Rechercher                </button>
                            </div>
                        </div>
                        <ul class=\"search-bar-panel d-none\"></ul>
                    </form>
                </div>
            </div>
            <ul class=\"account-nav apply-nav-height\">
                ";
        // line 39
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39))) {
            // line 40
            echo "                    <li class=\"register-link\">
                        <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_freelancers");
            echo "\">Freelancers</a>
                    </li>
                    <li class=\"sell-on-gigtodo-link d-none d-lg-block\">
                        <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\">
              <span class=\"sell-copy\">
              Devenir vendeur          </span>
                        </a>
                    </li>
                    <li class=\"register-link\">
                        <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\">Se connecter</a>
                    </li>
                    <li class=\"sign-in-link mr-lg-0 mr-3\">
                        <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\" class=\"btn btn_join\" style=\"color: white;\" >
                            S'inscrire          </a>
                    </li>
                ";
        } else {
            // line 57
            echo "                    ";
            echo twig_include($this->env, $context, "seller/seller_nav.html.twig");
            echo "
                ";
        }
        // line 59
        echo "            </ul>
        </div>
    </header>
</div>
";
        // line 63
        echo twig_include($this->env, $context, "partials/categories_nav_test.html.twig");
        echo "

";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 66
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " clearfix activate-email-class mb-0 text-center\">
        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 68
                echo "            <p>";
                echo $context["message"];
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 70,  152 => 68,  148 => 67,  143 => 66,  139 => 65,  134 => 63,  128 => 59,  122 => 57,  115 => 53,  109 => 50,  100 => 44,  94 => 41,  91 => 40,  89 => 39,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"gnav-header\" class=\"gnav-header global-nav clear gnav-3\">
    <header id=\"gnav-header-inner\" class=\"gnav-header-inner clear apply-nav-height col-group has-svg-icons body-max-width\"><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <div class=\"col-xs-12\">
            <div id=\"gigtodo-logo\" class=\"apply-nav-height gigtodo-logo-svg gigtodo-logo-svg-logged-in \">
                <a href=\"{{ path('homepage') }}\">
                    <img id=\"logo-nil\" class=\"desktop\" src=\"{{asset('build/images/logo.png')}}\" width=\"150\">
                </a>
            </div>
            <button id=\"mobilemenu\" class=\"unstyled-button mobile-catnav-trigger apply-nav-height icon-b-1 tablet-catnav-enabled left\">
                <span class=\"screen-reader-only\"></span>
                <div class=\"text-gray-lighter text-body-larger\">
          <span class=\"gigtodo-icon hamburger-icon nav-icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
              <path d=\"M20,6H4A1,1,0,1,1,4,4H20A1,1,0,0,1,20,6Z\"></path>
              <path d=\"M20,13H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,13Z\"></path>
              <path d=\"M20,20H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,20Z\"></path>
            </svg>
          </span>
                </div>
            </button>
            <div class=\"catnav-search-bar search-browse-wrapper with-catnav\">
                <div class=\"search-browse-inner\">
                    <form id=\"gnav-search\" class=\"search-nav expanded-search apply-nav-height\" method=\"post\">
                        <div class=\"gnav-search-inner clearable\">
                            <label for=\"search-query\" class=\"screen-reader-only\"></label>
                            <div class=\"search-input-wrapper text-field-wrapper\">
                                <input id=\"search-query\" class=\"rounded\" name=\"search_query\" placeholder=\"Find Services\" value=\"\" autocomplete=\"off\">
                            </div>
                            <div class=\"search-button-wrapper hide\">
                                <button class=\"btn btn-primary\" name=\"search\" type=\"submit\" value=\"Search\">
                                    Rechercher                </button>
                            </div>
                        </div>
                        <ul class=\"search-bar-panel d-none\"></ul>
                    </form>
                </div>
            </div>
            <ul class=\"account-nav apply-nav-height\">
                {% if app.user is null %}
                    <li class=\"register-link\">
                        <a href=\"{{ path('index_freelancers') }}\">Freelancers</a>
                    </li>
                    <li class=\"sell-on-gigtodo-link d-none d-lg-block\">
                        <a href=\"{{ path('account_register') }}\">
              <span class=\"sell-copy\">
              Devenir vendeur          </span>
                        </a>
                    </li>
                    <li class=\"register-link\">
                        <a href=\"{{ path('account_login') }}\">Se connecter</a>
                    </li>
                    <li class=\"sign-in-link mr-lg-0 mr-3\">
                        <a href=\"{{ path('account_register') }}\" class=\"btn btn_join\" style=\"color: white;\" >
                            S'inscrire          </a>
                    </li>
                {% else %}
                    {{ include('seller/seller_nav.html.twig') }}
                {% endif %}
            </ul>
        </div>
    </header>
</div>
{{ include('partials/categories_nav_test.html.twig') }}

{% for label, messages in app.flashes %}
    <div class=\"alert alert-{{ label }} clearfix activate-email-class mb-0 text-center\">
        {% for message in messages %}
            <p>{{ message | raw }}</p>
        {% endfor %}
    </div>

{% endfor %}", "partials/header.html.twig", "/home/vagrant/code/lenil/templates/partials/header.html.twig");
    }
}
