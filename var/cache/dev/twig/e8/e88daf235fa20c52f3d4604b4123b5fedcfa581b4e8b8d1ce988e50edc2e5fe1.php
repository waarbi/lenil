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

/* account/registration.html.twig */
class __TwigTemplate_2e4de260882f3246c82a314b5e6c279b7402bc6bbb6fa1d3e4e5c11cf6b1b0e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-5 col-md-7\">
                <h2 class=\"text-center\">Inscription</h2>
                <div class=\"box-inscription mt-4\">
                    <h2 class=\"text-center mb-3 mt-3\"><i class=\"fa fa-user-plus\"></i></h2>
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), "firstName", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "firstName", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), "lastName", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "hash", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "hash", [], "any", false, false, false, 37), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "hash", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "passwordConfirm", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "pays", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "pays", [], "any", false, false, false, 51), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "pays", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "picture", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "picture", [], "any", false, false, false, 58), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "picture", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "form-control-label font-weight-bold"]]);
        echo "
                        <div class=\"red-color\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                        </div>
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                    <input type=\"hidden\" class=\"form-control\" name=\"referral\" value=\"\">
                    <input type=\"submit\" name=\"register\" class=\"btn btn-success btn-block\" value=\"S'inscrire\">
                    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
                    <div class=\"clearfix\"></div>
                    <div class=\"text-center mt-3 text-muted\">
                        Vous avez déjà un compte cliquez ? <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
        echo "\" class=\"text-success\">ICI.</a>
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
        return "account/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 74,  230 => 71,  223 => 67,  218 => 65,  213 => 63,  207 => 60,  202 => 58,  197 => 56,  191 => 53,  186 => 51,  181 => 49,  175 => 46,  170 => 44,  165 => 42,  159 => 39,  154 => 37,  149 => 35,  143 => 32,  138 => 30,  133 => 28,  127 => 25,  122 => 23,  117 => 21,  111 => 18,  106 => 16,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-5 col-md-7\">
                <h2 class=\"text-center\">Inscription</h2>
                <div class=\"box-inscription mt-4\">
                    <h2 class=\"text-center mb-3 mt-3\"><i class=\"fa fa-user-plus\"></i></h2>
                    {{ form_start(registrationForm) }}
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.firstName, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.firstName,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.firstName, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.lastName, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.lastName,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.lastName, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.email,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.hash, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.hash,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.hash, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.passwordConfirm, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.passwordConfirm,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.passwordConfirm, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.pays, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.pays,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.pays, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.picture, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.picture,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.picture, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_label(registrationForm.description, null, {'label_attr': {'class': 'form-control-label font-weight-bold'}}) }}
                        <div class=\"red-color\">
                            {{ form_errors(registrationForm.description,{ 'attr': {'class': 'red-color'} }) }}
                        </div>
                        {{ form_widget(registrationForm.description, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <input type=\"hidden\" class=\"form-control\" name=\"referral\" value=\"\">
                    <input type=\"submit\" name=\"register\" class=\"btn btn-success btn-block\" value=\"S'inscrire\">
                    {{ form_end(registrationForm) }}
                    <div class=\"clearfix\"></div>
                    <div class=\"text-center mt-3 text-muted\">
                        Vous avez déjà un compte cliquez ? <a href=\"{{ path('account_login') }}\" class=\"text-success\">ICI.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "account/registration.html.twig", "/home/vagrant/code/lenil/templates/account/registration.html.twig");
    }
}
