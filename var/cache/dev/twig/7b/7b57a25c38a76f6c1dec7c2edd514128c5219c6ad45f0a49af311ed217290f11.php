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

/* modals/login.html.twig */
class __TwigTemplate_e6c5f2bd0042866cedb043dc9957f3fffec91c9d04a0a6d4a75bdb323599b88d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/login.html.twig"));

        // line 1
        echo "<div class=\"modal fade login\" id=\"login-modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <!-- Modal header start -->
                <i class=\"fa fa-sign-in fa-log\"></i>
                <h5 class=\"modal-title\">Se connecter à votre compte</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\"><span>×</span></button>
            </div>
            <!-- Modal header end -->
            <div class=\"modal-body\">
                <!-- Modal body start -->
                <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label class=\"form-group-label\"> Email:</label>
                        <input type=\"email\" class=\"form-control\" name=\"username_parameter\" placeholder=\"Entrer votre email\" value=\"\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-group-label\"> Mot de pass:</label>
                        <input type=\"password\" class=\"form-control\" name=\"seller_pass\" placeholder=\"Entrer votre mot de pass\" required=\"\">
                    </div>
                    <input type=\"submit\" name=\"login\" class=\"btn btn-success btn-block\" value=\"Connexion\">
                </form>
                <div class=\"clearfix\"></div>
                <div class=\"text-center mt-3\">
                    <a href=\"#\" class=\"text-success\" data-toggle=\"modal\" data-target=\"#register-modal\" data-dismiss=\"modal\">
                        S'inscrire ?          </a>
                    &nbsp; &nbsp; | &nbsp; &nbsp;
                    <a href=\"#\" class=\"text-success\" data-toggle=\"modal\" data-target=\"#forgot-modal\" data-dismiss=\"modal\">
                        Mot de pass oublié ?          </a>
                </div>
            </div>
            <!-- Modal body ends -->
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modals/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade login\" id=\"login-modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <!-- Modal header start -->
                <i class=\"fa fa-sign-in fa-log\"></i>
                <h5 class=\"modal-title\">Se connecter à votre compte</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\"><span>×</span></button>
            </div>
            <!-- Modal header end -->
            <div class=\"modal-body\">
                <!-- Modal body start -->
                <form action=\"{{ path('account_login') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <label class=\"form-group-label\"> Email:</label>
                        <input type=\"email\" class=\"form-control\" name=\"username_parameter\" placeholder=\"Entrer votre email\" value=\"\" required=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-group-label\"> Mot de pass:</label>
                        <input type=\"password\" class=\"form-control\" name=\"seller_pass\" placeholder=\"Entrer votre mot de pass\" required=\"\">
                    </div>
                    <input type=\"submit\" name=\"login\" class=\"btn btn-success btn-block\" value=\"Connexion\">
                </form>
                <div class=\"clearfix\"></div>
                <div class=\"text-center mt-3\">
                    <a href=\"#\" class=\"text-success\" data-toggle=\"modal\" data-target=\"#register-modal\" data-dismiss=\"modal\">
                        S'inscrire ?          </a>
                    &nbsp; &nbsp; | &nbsp; &nbsp;
                    <a href=\"#\" class=\"text-success\" data-toggle=\"modal\" data-target=\"#forgot-modal\" data-dismiss=\"modal\">
                        Mot de pass oublié ?          </a>
                </div>
            </div>
            <!-- Modal body ends -->
        </div>
    </div>
</div>", "modals/login.html.twig", "/home/vagrant/code/lenil/templates/modals/login.html.twig");
    }
}
