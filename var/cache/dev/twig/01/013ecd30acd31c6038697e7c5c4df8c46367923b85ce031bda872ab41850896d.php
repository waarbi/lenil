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

/* home_seller.html.twig */
class __TwigTemplate_08e50231c6f5a88b1bcd653e9eada872f599ddc54317df45b05a7a41c7326842 extends Template
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
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_seller.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_seller.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_seller.html.twig", 8);
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

    // line 4
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 5
        echo "    <meta name=\"description\" content=\"Plateforme des freelancers africains\"/>
    <meta name=\"keywords\" content=\"it senegal,developpeur, web, informatique, freelance afrique, projet diaspora\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "enabled", [], "any", false, false, false, 11), false))) {
            // line 12
            echo "        <div class=\"alert alert-warning clearfix activate-email-class mb-0\">
            <div class=\"float-left mt-2\">
                <i style=\"font-size: 125%;\" class=\"fa fa-exclamation-circle\"></i>
                Veuillez activer votre compte. Un email de confirmation sera envoyé à: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true);
            echo ". Si vous avez besoin d'aide, contactez le support client <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_support");
            echo "\" style=\"color: #856404;font-weight: bold;\">Support client</a>.  </div>
            <div class=\"float-right\">
                <button id=\"send-email\" class=\"btn btn-success btn-sm float-right text-white\">Renvoyer Email</button>
            </div>
        </div>
        <br>
    ";
        }
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "seller/seller_home.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var userfullname = ";
        // line 27
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "fullName", [], "any", false, false, false, 27));
        echo ";
            if (sessionStorage.getItem('connected') !== \"ok\") {
                swal({
                    text: \"Bienvenue, \" + userfullname,
                    icon: \"success\",
                    timer: 3000,
                }).then(
                    sessionStorage.setItem('connected', 'ok')
                );

            }
            \$(\"#logout-link\").click(function () {
                swal({
                    text: \"Au Revoir !\",
                    icon: \"success\",
                    timer: 3000,
                }).then(
                    sessionStorage.setItem(\"connected\", \"ko\")
                );
            });

            \$(\"#send-email\").click(function () {
                \$.ajax({
                    method: \"GET\",
                    url: \"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_mail_for_activate_account", ["username" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\",
                    success: function (response) {
                        if (response){
                            swal({
                                text: \"Mail de confirmation envoyé. Merci de consulter vos emails.\",
                                icon: \"success\",
                                timer: 3000,
                            })
                        }
                    }
                });
            });
            // Sticky Code start //
            if (\$(window).width() < 767) {
            } else {
                \$(\".sticky-start\").sticky({
                    topSpacing: 20,
                    zIndex: 500,
                    bottomSpacing: 400,
                });
            }

// Sticky code ends //

            });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_seller.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 51,  178 => 27,  174 => 25,  164 => 24,  151 => 22,  139 => 15,  134 => 12,  131 => 11,  121 => 10,  109 => 5,  99 => 4,  80 => 3,  62 => 1,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
{% endblock %}
    {% block title %}Lenyl | Plateforme des freelancers africains!{% endblock %}
{% block meta %}
    <meta name=\"description\" content=\"Plateforme des freelancers africains\"/>
    <meta name=\"keywords\" content=\"it senegal,developpeur, web, informatique, freelance afrique, projet diaspora\"/>
{% endblock %}
{% extends \"base.html.twig\" %}

{% block body %}
    {% if app.user is not null and app.user.enabled == false %}
        <div class=\"alert alert-warning clearfix activate-email-class mb-0\">
            <div class=\"float-left mt-2\">
                <i style=\"font-size: 125%;\" class=\"fa fa-exclamation-circle\"></i>
                Veuillez activer votre compte. Un email de confirmation sera envoyé à: {{ app.user.email }}. Si vous avez besoin d'aide, contactez le support client <a href=\"{{ path('contact_support') }}\" style=\"color: #856404;font-weight: bold;\">Support client</a>.  </div>
            <div class=\"float-right\">
                <button id=\"send-email\" class=\"btn btn-success btn-sm float-right text-white\">Renvoyer Email</button>
            </div>
        </div>
        <br>
    {% endif %}
    {{ include('seller/seller_home.html.twig') }}
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var userfullname = {{ app.user.fullName|json_encode|raw }};
            if (sessionStorage.getItem('connected') !== \"ok\") {
                swal({
                    text: \"Bienvenue, \" + userfullname,
                    icon: \"success\",
                    timer: 3000,
                }).then(
                    sessionStorage.setItem('connected', 'ok')
                );

            }
            \$(\"#logout-link\").click(function () {
                swal({
                    text: \"Au Revoir !\",
                    icon: \"success\",
                    timer: 3000,
                }).then(
                    sessionStorage.setItem(\"connected\", \"ko\")
                );
            });

            \$(\"#send-email\").click(function () {
                \$.ajax({
                    method: \"GET\",
                    url: \"{{ path('send_mail_for_activate_account',{username: app.user.email }) }}\",
                    success: function (response) {
                        if (response){
                            swal({
                                text: \"Mail de confirmation envoyé. Merci de consulter vos emails.\",
                                icon: \"success\",
                                timer: 3000,
                            })
                        }
                    }
                });
            });
            // Sticky Code start //
            if (\$(window).width() < 767) {
            } else {
                \$(\".sticky-start\").sticky({
                    topSpacing: 20,
                    zIndex: 500,
                    bottomSpacing: 400,
                });
            }

// Sticky code ends //

            });
    </script>

{% endblock %}", "home_seller.html.twig", "/home/vagrant/code/lenil/templates/home_seller.html.twig");
    }
}
