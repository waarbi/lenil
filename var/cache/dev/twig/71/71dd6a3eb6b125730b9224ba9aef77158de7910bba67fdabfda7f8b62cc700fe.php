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

/* modals/forgot_password.html.twig */
class __TwigTemplate_f646add8741c3652de6b56ad99e12e5168d52a8ffe7f628a8cfa6fc307eb9be4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/forgot_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/forgot_password.html.twig"));

        // line 1
        echo "<div class=\"modal fade login\" id=\"forgot-modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <!-- Modal header starts -->
                <i class=\"fa fa-meh-o fa-log\"></i>
                <h5 class=\"modal-title\">Mot de pass oublié </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                    <span>×</span>
                </button>
            </div>
            <!-- Modal header ends -->
            <div class=\"modal-body\">
                <!-- Modal body starts -->
                <p class=\"text-muted text-center mb-2\">
                    Entrer votre email pour recevoir un lien de réinitialisation. </p>
                <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgotten_password");
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"forgot_email\" class=\"form-control\" placeholder=\"Entrer votre email\" required=\"\">
                    </div>
                    <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Valider\" name=\"forgot\">
                    <p class=\"text-muted text-center mt-4\">
                        Vous n'êtes pas encore membre ?            <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
        echo "\" class=\"text-success\">Rejoignez-nous.</a>
                    </p>
                </form>
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
        return "modals/forgot_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade login\" id=\"forgot-modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <!-- Modal header starts -->
                <i class=\"fa fa-meh-o fa-log\"></i>
                <h5 class=\"modal-title\">Mot de pass oublié </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                    <span>×</span>
                </button>
            </div>
            <!-- Modal header ends -->
            <div class=\"modal-body\">
                <!-- Modal body starts -->
                <p class=\"text-muted text-center mb-2\">
                    Entrer votre email pour recevoir un lien de réinitialisation. </p>
                <form action=\"{{ path('forgotten_password') }}\" method=\"post\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"forgot_email\" class=\"form-control\" placeholder=\"Entrer votre email\" required=\"\">
                    </div>
                    <input type=\"submit\" class=\"btn btn-success btn-block\" value=\"Valider\" name=\"forgot\">
                    <p class=\"text-muted text-center mt-4\">
                        Vous n'êtes pas encore membre ?            <a href=\"{{ path('account_register') }}\" class=\"text-success\">Rejoignez-nous.</a>
                    </p>
                </form>
            </div>
            <!-- Modal body ends -->
        </div>
    </div>
</div>", "modals/forgot_password.html.twig", "/home/vagrant/code/lenil/templates/modals/forgot_password.html.twig");
    }
}
