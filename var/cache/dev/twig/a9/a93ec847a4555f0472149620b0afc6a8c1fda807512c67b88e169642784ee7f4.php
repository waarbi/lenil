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

/* modals/register.html.twig */
class __TwigTemplate_abdabd3f55dbb93d788dc3f6d2638051cb848445b02aa47195dc3b35dc216c6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/register.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"register-modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <!-- modal-header Starts -->
                <i class=\"fa fa-user-plus\"></i>
                <h5 class=\"modal-title\"> Créer un compte </h5>
                <button class=\"close\" data-dismiss=\"modal\"><span>×</span></button>
            </div>
            <!-- modal-header Ends -->
            <div class=\"modal-body\">
                <!-- modal-body Starts -->
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), "firstName", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "lastName", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 20, $this->source); })()), "lastName", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'errors');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "hash", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "hash", [], "any", false, false, false, 29), 'errors');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "hash", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 34), 'errors');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "picture", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "picture", [], "any", false, false, false, 39), 'errors');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "picture", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "description", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'errors');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "description", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <input type=\"hidden\" class=\"form-control\" name=\"referral\" value=\"\">
                    <input type=\"submit\" name=\"register\" class=\"btn btn-success btn-block\" value=\"S'inscrire\">
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), 'form_end');
        echo "

                <div class=\"clearfix\"></div>
                <div class=\"text-center mt-3 text-muted\">
                    Vous avez déjà un compte cliquez ?          <a href=\"#\" class=\"text-success\" data-toggle=\"modal\" data-target=\"#login-modal\" data-dismiss=\"modal\">ICI.</a>
                </div>
            </div>
            <!-- modal-body Ends -->
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modals/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 49,  146 => 45,  142 => 44,  138 => 43,  132 => 40,  128 => 39,  124 => 38,  118 => 35,  114 => 34,  110 => 33,  104 => 30,  100 => 29,  96 => 28,  90 => 25,  86 => 24,  82 => 23,  76 => 20,  72 => 19,  66 => 16,  62 => 15,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"register-modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <!-- modal-header Starts -->
                <i class=\"fa fa-user-plus\"></i>
                <h5 class=\"modal-title\"> Créer un compte </h5>
                <button class=\"close\" data-dismiss=\"modal\"><span>×</span></button>
            </div>
            <!-- modal-header Ends -->
            <div class=\"modal-body\">
                <!-- modal-body Starts -->
                {{form_start(registrationForm)}}
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.firstName, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        {{ form_widget(registrationForm.firstName, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.lastName, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        {{ form_widget(registrationForm.lastName, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        {{ form_errors(registrationForm.email) }}
                        {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.hash, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        {{ form_errors(registrationForm.hash) }}
                        {{ form_widget(registrationForm.hash, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.passwordConfirm, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        {{ form_errors(registrationForm.passwordConfirm) }}
                        {{ form_widget(registrationForm.passwordConfirm, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                <div class=\"form-group\">
                    {{ form_label(registrationForm.picture, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                    {{ form_errors(registrationForm.picture) }}
                    {{ form_widget(registrationForm.picture, { 'attr': {'class': 'form-control'} }) }}
                </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.description, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        {{ form_errors(registrationForm.description) }}
                        {{ form_widget(registrationForm.description, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <input type=\"hidden\" class=\"form-control\" name=\"referral\" value=\"\">
                    <input type=\"submit\" name=\"register\" class=\"btn btn-success btn-block\" value=\"S'inscrire\">
                {{form_end(registrationForm)}}

                <div class=\"clearfix\"></div>
                <div class=\"text-center mt-3 text-muted\">
                    Vous avez déjà un compte cliquez ?          <a href=\"#\" class=\"text-success\" data-toggle=\"modal\" data-target=\"#login-modal\" data-dismiss=\"modal\">ICI.</a>
                </div>
            </div>
            <!-- modal-body Ends -->
        </div>
    </div>
</div>", "modals/register.html.twig", "/home/vagrant/code/lenil/templates/modals/register.html.twig");
    }
}
