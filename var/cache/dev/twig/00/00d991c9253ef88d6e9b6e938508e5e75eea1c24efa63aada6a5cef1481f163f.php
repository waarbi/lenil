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

/* account/login.html.twig */
class __TwigTemplate_d51c2cc39ceeaf449da02f686380771ced1d159b0d83b0b0e19ae20708aa1b74 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/login.html.twig", 5);
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
        echo "
";
        
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
    <div class=\"container mt-5\">

        <div class=\"row justify-content-center\">

            <div class=\"col-lg-5 col-md-7\">

                <h2 class=\"text-center\">Login</h2>

                <div class=\"box-login mt-4\">

                    <h2 class=\"text-center mb-3 mt-3\"><i class=\"fa fa-unlock-alt\"></i></h2>
                    ";
        // line 20
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                        <div class=\"alert alert-danger\">Une erreur est survenue, le nom d'utilisateur ou le mot de passe est invalide</div>
                    ";
        }
        // line 23
        echo "
                    <form action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" method=\"post\">

                        <div class=\"form-group\">

                            <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Adresse email...\" type=\"text\" required value=";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo ">
                        </div>

                        <div class=\"form-group\">

                            <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe ...\" type=\"password\" required>

                        </div>

                        <div class=\"form-group\">

                            <input type=\"submit\" name=\"access\" class=\"btn btn-success btn-block\" value=\"Connexion\" required=\"\">

                        </div>

                    </form>


                    <div class=\"clearfix\"></div>


                    <div class=\"text-center mt-3\">

                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
        echo "\">

                            <i class=\"fa fa-user-plus\"></i> S'inscrire?
                        </a>

                        &nbsp; &nbsp; | &nbsp; &nbsp;

                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#forgot-modal\">

                            <i class=\"fa fa-meh-o\"></i>\tMot de pass oublié?
                        </a>

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
        return "account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  120 => 28,  113 => 24,  110 => 23,  106 => 21,  104 => 20,  90 => 8,  80 => 7,  69 => 2,  59 => 1,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}

{% endblock %}

{% extends \"base.html.twig\" %}

{% block body %}
    <!-- start main -->
    <div class=\"container mt-5\">

        <div class=\"row justify-content-center\">

            <div class=\"col-lg-5 col-md-7\">

                <h2 class=\"text-center\">Login</h2>

                <div class=\"box-login mt-4\">

                    <h2 class=\"text-center mb-3 mt-3\"><i class=\"fa fa-unlock-alt\"></i></h2>
                    {% if hasError %}
                        <div class=\"alert alert-danger\">Une erreur est survenue, le nom d'utilisateur ou le mot de passe est invalide</div>
                    {% endif %}

                    <form action=\"{{ path('account_login') }}\" method=\"post\">

                        <div class=\"form-group\">

                            <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Adresse email...\" type=\"text\" required value={{username}}>
                        </div>

                        <div class=\"form-group\">

                            <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe ...\" type=\"password\" required>

                        </div>

                        <div class=\"form-group\">

                            <input type=\"submit\" name=\"access\" class=\"btn btn-success btn-block\" value=\"Connexion\" required=\"\">

                        </div>

                    </form>


                    <div class=\"clearfix\"></div>


                    <div class=\"text-center mt-3\">

                        <a href=\"{{ path('account_register') }}\">

                            <i class=\"fa fa-user-plus\"></i> S'inscrire?
                        </a>

                        &nbsp; &nbsp; | &nbsp; &nbsp;

                        <a href=\"#\" data-toggle=\"modal\" data-target=\"#forgot-modal\">

                            <i class=\"fa fa-meh-o\"></i>\tMot de pass oublié?
                        </a>

                    </div>

                </div>


            </div>

        </div>

    </div>
{% endblock %}
", "account/login.html.twig", "/home/vagrant/code/lenil/templates/account/login.html.twig");
    }
}
