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

/* partials/categories_nav_test.html.twig */
class __TwigTemplate_43a73d703fa8a6ba8c619cc5b4a50f39b992898a299a4e5cb81104ae08285e95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/categories_nav_test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/categories_nav_test.html.twig"));

        // line 1
        echo "<div data-ui=\"cat-nav\" id=\"desktop-category-nav\" class=\"ui-toolkit cat-nav \">
    <div class=\"bg-white bg-transparent-homepage-experiment bb-xs-1 hide-xs hide-sm hide-md\">
        <div class=\"col-group body-max-width\">
            <ul class=\"col-xs-12 body-max-width display-flex-xs justify-content-space-between\" role=\"menubar\"
                data-ui=\"top-nav-category-list\" aria-activedescendant=\"catnav-primary-link-10855\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 6, $this->source); })()));
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
            // line 7
            echo "                    <li class=\"top-nav-item pt-xs-1 pb-xs-1 pl-xs-2 pr-xs-2 display-flex-xs align-items-center text-center\"
                        data-linkable=\"true\" data-ui=\"top-nav-category-link\" data-node-id=\"c-";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">
                            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
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
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"position-absolute col-xs-12 col-centered z-index-4\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 18, $this->source); })()));
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
            // line 19
            echo "            ";
            if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getSousCategories", [], "any", false, false, false, 19)), 0)) {
                // line 20
                echo "                <div class=\"body-sub-width vertical-align-top sub-nav-container bg-white overflow-hidden bl-xs-1 bb-xs-1 br-xs-1 catnav-mott-control display-none\"
                     data-ui=\"sub-nav\" aria-hidden=\"true\" data-node-id=\"c-";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                    <div class=\"width-full display-flex-xs\">
                        <ul class=\"list-unstyled display-inline-block col-xs-3 p-xs-3 pl-xs-5\" role=\"presentation\">
                            ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "getSousCategories", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["sousCategory"]) {
                    // line 25
                    echo "                            <li>
                                <a class=\"display-block text-gray text-body-larger pt-xs-1\"
                                   href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["sousCategory"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
                    echo "\">
                                    ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sousCategory"], "title", [], "any", false, false, false, 28), "html", null, true);
                    echo " </a>
                            </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sousCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                        </ul>
                    </div>
                </div>
            ";
            }
            // line 35
            echo "        ";
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
        // line 36
        echo "    </div>
</div>
";
        // line 38
        echo twig_include($this->env, $context, "partials/mobile_menu.html.twig");
        echo "
<div class=\"clearfix\"></div>
";
        // line 40
        echo twig_include($this->env, $context, "modals/forgot_password.html.twig");
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/categories_nav_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 40,  176 => 38,  172 => 36,  158 => 35,  152 => 31,  143 => 28,  139 => 27,  135 => 25,  131 => 24,  125 => 21,  122 => 20,  119 => 19,  102 => 18,  96 => 14,  78 => 10,  74 => 9,  70 => 8,  67 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div data-ui=\"cat-nav\" id=\"desktop-category-nav\" class=\"ui-toolkit cat-nav \">
    <div class=\"bg-white bg-transparent-homepage-experiment bb-xs-1 hide-xs hide-sm hide-md\">
        <div class=\"col-group body-max-width\">
            <ul class=\"col-xs-12 body-max-width display-flex-xs justify-content-space-between\" role=\"menubar\"
                data-ui=\"top-nav-category-list\" aria-activedescendant=\"catnav-primary-link-10855\">
                {% for category in categories_yes %}
                    <li class=\"top-nav-item pt-xs-1 pb-xs-1 pl-xs-2 pr-xs-2 display-flex-xs align-items-center text-center\"
                        data-linkable=\"true\" data-ui=\"top-nav-category-link\" data-node-id=\"c-{{ loop.index }}\">
                        <a href=\"{{ path('category_services',{slug: category.slug}) }}\">
                            {{ category.title }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
    <div class=\"position-absolute col-xs-12 col-centered z-index-4\">
        {% for category in categories_yes %}
            {% if category.getSousCategories | length > 0 %}
                <div class=\"body-sub-width vertical-align-top sub-nav-container bg-white overflow-hidden bl-xs-1 bb-xs-1 br-xs-1 catnav-mott-control display-none\"
                     data-ui=\"sub-nav\" aria-hidden=\"true\" data-node-id=\"c-{{ loop.index }}\">
                    <div class=\"width-full display-flex-xs\">
                        <ul class=\"list-unstyled display-inline-block col-xs-3 p-xs-3 pl-xs-5\" role=\"presentation\">
                            {% for sousCategory in category.getSousCategories %}
                            <li>
                                <a class=\"display-block text-gray text-body-larger pt-xs-1\"
                                   href=\"{{ path('category_services',{slug: sousCategory.slug}) }}\">
                                    {{ sousCategory.title }} </a>
                            </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    </div>
</div>
{{ include('partials/mobile_menu.html.twig') }}
<div class=\"clearfix\"></div>
{{ include('modals/forgot_password.html.twig') }}", "partials/categories_nav_test.html.twig", "/home/vagrant/code/lenil/templates/partials/categories_nav_test.html.twig");
    }
}
