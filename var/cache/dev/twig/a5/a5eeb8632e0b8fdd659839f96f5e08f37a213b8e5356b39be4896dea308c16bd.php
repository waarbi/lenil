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

/* partials/categories_nav.html.twig */
class __TwigTemplate_3e3c97a928df02c4e8500e48f95be6045ef2214981fdee5d3aece96ed6d9a169 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/categories_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/categories_nav.html.twig"));

        // line 1
        echo "<div data-ui=\"cat-nav\" id=\"desktop-category-nav\" class=\"ui-toolkit cat-nav \">
    <div class=\"bg-white bg-transparent-homepage-experiment bb-xs-1 hide-xs hide-sm hide-md\">
        <div class=\"col-group body-max-width\">
            <ul class=\"col-xs-12 body-max-width display-flex-xs justify-content-space-between\" role=\"menubar\" data-ui=\"top-nav-category-list\" aria-activedescendant=\"catnav-primary-link-10855\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "                 <li class=\"top-nav-item pt-xs-1 pb-xs-1 pl-xs-2 pr-xs-2 display-flex-xs align-items-center text-center\"
                    data-linkable=\"true\" data-ui=\"top-nav-category-link\" data-node-id=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "
                </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"position-absolute col-xs-12 col-centered z-index-4\">
        <div>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <div class=\"body-sub-width vertical-align-top sub-nav-container bg-white overflow-hidden bl-xs-1 bb-xs-1 br-xs-1 catnav-mott-control display-none\" data-ui=\"sub-nav\" aria-hidden=\"true\" data-node-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                <div class=\"width-full display-flex-xs\">
                    <ul class=\"list-unstyled display-inline-block col-xs-3 p-xs-3 pl-xs-5\" role=\"presentation\">
                        ";
            // line 22
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getSousCategories", [], "any", false, false, false, 22)), 1)) {
                // line 23
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "getSousCategories", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["sous_category"]) {
                    // line 24
                    echo "                        <li>
                            <a class=\"display-block text-gray text-body-larger pt-xs-1\"  href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["sous_category"], "slug", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\">
                                ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sous_category"], "title", [], "any", false, false, false, 26), "html", null, true);
                    echo "
                            </a>
                        </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sous_category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                        ";
            }
            // line 31
            echo "                    </ul>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/categories_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  119 => 31,  116 => 30,  106 => 26,  102 => 25,  99 => 24,  94 => 23,  92 => 22,  85 => 19,  81 => 18,  74 => 13,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div data-ui=\"cat-nav\" id=\"desktop-category-nav\" class=\"ui-toolkit cat-nav \">
    <div class=\"bg-white bg-transparent-homepage-experiment bb-xs-1 hide-xs hide-sm hide-md\">
        <div class=\"col-group body-max-width\">
            <ul class=\"col-xs-12 body-max-width display-flex-xs justify-content-space-between\" role=\"menubar\" data-ui=\"top-nav-category-list\" aria-activedescendant=\"catnav-primary-link-10855\">
                {% for category in categories_yes %}
                 <li class=\"top-nav-item pt-xs-1 pb-xs-1 pl-xs-2 pr-xs-2 display-flex-xs align-items-center text-center\"
                    data-linkable=\"true\" data-ui=\"top-nav-category-link\" data-node-id=\"{{ category.id }}\">
                <a href=\"{{ path('category_services',{slug: category.slug}) }}\">
                    {{ category.title }}
                </a>
                </li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"position-absolute col-xs-12 col-centered z-index-4\">
        <div>
            {% for category in categories_yes %}
            <div class=\"body-sub-width vertical-align-top sub-nav-container bg-white overflow-hidden bl-xs-1 bb-xs-1 br-xs-1 catnav-mott-control display-none\" data-ui=\"sub-nav\" aria-hidden=\"true\" data-node-id=\"{{ category.id }}\">
                <div class=\"width-full display-flex-xs\">
                    <ul class=\"list-unstyled display-inline-block col-xs-3 p-xs-3 pl-xs-5\" role=\"presentation\">
                        {% if category.getSousCategories|length > 1 %}
                            {% for sous_category in category.getSousCategories %}
                        <li>
                            <a class=\"display-block text-gray text-body-larger pt-xs-1\"  href=\"{{ path('category_services',{slug: sous_category.slug}) }}\">
                                {{ sous_category.title }}
                            </a>
                        </li>
                            {% endfor %}
                        {% endif %}
                    </ul>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>
", "partials/categories_nav.html.twig", "/home/vagrant/code/lenil/templates/partials/categories_nav.html.twig");
    }
}
