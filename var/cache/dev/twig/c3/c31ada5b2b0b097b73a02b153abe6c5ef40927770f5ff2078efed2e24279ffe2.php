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

/* partials/footer.html.twig */
class __TwigTemplate_9e6999386e76ee463dd16091c5c1d14841b140b8c421a283d29651d2cfb584eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-12\">
                <h3 data-toggle=\"collapse\" data-target=\"#collapsecategories\">CATEGORIES</h3>
                <ul class=\"collapse show list-unstyled\" id=\"collapsecategories\">
                    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories_yes"]) || array_key_exists("categories_yes", $context) ? $context["categories_yes"] : (function () { throw new RuntimeError('Variable "categories_yes" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                    <li class=\"list-unstyled-item\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_services", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                </ul>
            </div>
            <div class=\"col-md-2 col-12\">
                <h3 class=\"h3Border\" data-target=\"#collapseabout\">A PROPOS</h3>
                <ul class=\"collapse show list-unstyled\" id=\"collapseabout\">
                    <li class=\"list-unstyled-item\"><a href=\"/terms_and_conditions\"><i class=\"fa fa-file-text-o\"></i> Termes & Conditions</a></li>
                    <li class=\"list-unstyled-item\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_support");
        echo "\"><i class=\"fa fa-comments\"></i> Support Client</a></li>
                    <li class=\"list-unstyled-item\"><a href=\"/how-it-works\"><i class=\"fa fa-question-circle\"></i> Comment ça marche ?</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-12\">
            </div>
            <div class=\"col-md-4 col-12\">
                <h3 class=\"h3Border\" data-target=\"#collapsefindusOn\">TROUVEZ-NOUS SUR</h3>
                <div class=\"collapse show\" id=\"collapsefindusOn\">
                    <ul class=\"list-inline social_icon\">
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-google-plus-official\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"12313\"><i class=\"fa 123213\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
</footer>
<!-- end footer -->
<section class=\"post_footer\">
    ©Copyright lenil.tech 2020. All Rights Reserved. Designed & Developed By <a style=\"color: #fff; font-weight: bold;\" target=\"_blank\" href=\"https://www.waarbi.com\">WaarBi.</a>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  66 => 10,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-12\">
                <h3 data-toggle=\"collapse\" data-target=\"#collapsecategories\">CATEGORIES</h3>
                <ul class=\"collapse show list-unstyled\" id=\"collapsecategories\">
                    {% for category in categories_yes %}
                    <li class=\"list-unstyled-item\"><a href=\"{{ path('category_services',{slug: category.slug}) }}\">{{ category.title }}</a></li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"col-md-2 col-12\">
                <h3 class=\"h3Border\" data-target=\"#collapseabout\">A PROPOS</h3>
                <ul class=\"collapse show list-unstyled\" id=\"collapseabout\">
                    <li class=\"list-unstyled-item\"><a href=\"/terms_and_conditions\"><i class=\"fa fa-file-text-o\"></i> Termes & Conditions</a></li>
                    <li class=\"list-unstyled-item\"><a href=\"{{ path('contact_support') }}\"><i class=\"fa fa-comments\"></i> Support Client</a></li>
                    <li class=\"list-unstyled-item\"><a href=\"/how-it-works\"><i class=\"fa fa-question-circle\"></i> Comment ça marche ?</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-12\">
            </div>
            <div class=\"col-md-4 col-12\">
                <h3 class=\"h3Border\" data-target=\"#collapsefindusOn\">TROUVEZ-NOUS SUR</h3>
                <div class=\"collapse show\" id=\"collapsefindusOn\">
                    <ul class=\"list-inline social_icon\">
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-google-plus-official\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li class=\"list-inline-item\"><a href=\"12313\"><i class=\"fa 123213\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
</footer>
<!-- end footer -->
<section class=\"post_footer\">
    ©Copyright lenil.tech 2020. All Rights Reserved. Designed & Developed By <a style=\"color: #fff; font-weight: bold;\" target=\"_blank\" href=\"https://www.waarbi.com\">WaarBi.</a>
</section>
", "partials/footer.html.twig", "/home/vagrant/code/lenil/templates/partials/footer.html.twig");
    }
}
