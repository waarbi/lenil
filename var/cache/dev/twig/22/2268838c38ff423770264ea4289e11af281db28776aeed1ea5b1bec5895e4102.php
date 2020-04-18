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

/* static/contact.html.twig */
class __TwigTemplate_65e9649f58752712a8bdb7edcd82456d7648f30a4f391512e66a107a6671ebb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "static/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tContactez le support client
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "\t<meta name=\"description\" content=\"Contacter Nawali. Afin de mieux répondre à votre demande, nous vous invitons à remplir note formulaire de contact.\"/>
\t<meta name=\"keywords\" content=\"formulaire de contact, invite, message, réponse, demande\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"container pb-4\">
\t\t<!-- Container starts -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 mt-4\">
\t\t\t\t";
        // line 14
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14))) {
            // line 15
            echo "\t\t\t\t<div class=\"alert alert-warning rounded-0\">
\t\t\t\t\t<p class=\"lead mt-1 mb-1 text-center\">
\t\t\t\t\t\t<strong>Désolé ! </strong>Vous ne pouvez pas soumettre une demande d'assistance sans vous être d'abord connecté. Si vous avez une question générale, veuillez nous envoyer un e-mail à admin@lenil.tech.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 21
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row customer-support\" style=\"\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header text-center make-white\">
\t\t\t\t\t\t<h2>Soumettre une demande d'assistance
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p class=\"text-muted pt-1\">Si vous avez des questions, n'hésitez pas à nous contacter, notre centre de service client est en ligne 24h / 24 et 7j / 7..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "col-md-8 contact-form"]]);
        echo "
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "firstname", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "float-left"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "firstname", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "firstname", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "lastname", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "float-left"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "lastname", [], "any", false, false, false, 47), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "lastname", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "float-left"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "phone", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "float-left"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "message", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "float-left"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "message", [], "any", false, false, false, 73), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "message", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "rows" => "6"]]);
        echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Veuillez vérifier que vous faites partie de l'humanité.</label>
\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LcLeawUAAAAABC2pU7vox7ZY2mXmwMo0j2686jQ\"><div style=\"width: 304px; height: 78px;\"><div><iframe src=\"https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcLeawUAAAAABC2pU7vox7ZY2mXmwMo0j2686jQ&amp;co=aHR0cHM6Ly93d3cuZ2lndG9kby5jb206NDQz&amp;hl=fr&amp;v=OOKISvkNnVD_m_9dreR_1S0n&amp;size=normal&amp;cb=3pjcu5ycn27x\" width=\"304\" height=\"78\" role=\"presentation\" name=\"a-htbujvljonjk\" frameborder=\"0\" scrolling=\"no\" sandbox=\"allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox\"></iframe></div><textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\" class=\"g-recaptcha-response\" style=\"width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;\"></textarea></div><iframe style=\"display: none;\"></iframe></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t ";
        // line 83
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83))) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t <button class=\"btn btn-success btn-lg\" type=\"button\" id=\"contact-not-connected\">
\t\t\t\t\t\t\t\t\t\t\t <i class=\"fa fa-paper-plane\"> Envoyer</i>
\t\t\t\t\t\t\t\t\t\t </button>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-lg\"  name=\"submit\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paper-plane\"> Envoyer</i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "\t<script type=\"application/javascript\">
\t\t\$(document).ready(function () {
\t\t\t\$(\"#contact-not-connected\").click(function () {
\t\t\t\tswal({
\t\t\t\t\ttext: \"Opps! Vous devez être connecté pour soumettre des demandes d'assistance.\",
\t\t\t\t\ticon: \"warning\",
\t\t\t\t\ttimer: 6000
\t\t\t\t}).then(
\t\t\t\t\t\twindow.location.href = \"/login\"
\t\t\t\t);
\t\t\t});
\t\t});


\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "static/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 104,  279 => 103,  260 => 94,  256 => 92,  250 => 88,  244 => 84,  242 => 83,  231 => 75,  226 => 73,  221 => 71,  213 => 66,  208 => 64,  203 => 62,  196 => 58,  191 => 56,  186 => 54,  178 => 49,  173 => 47,  168 => 45,  161 => 41,  156 => 39,  151 => 37,  145 => 34,  130 => 21,  122 => 15,  120 => 14,  114 => 10,  104 => 9,  92 => 6,  82 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tContactez le support client
{% endblock %}
{% block meta %}
\t<meta name=\"description\" content=\"Contacter Nawali. Afin de mieux répondre à votre demande, nous vous invitons à remplir note formulaire de contact.\"/>
\t<meta name=\"keywords\" content=\"formulaire de contact, invite, message, réponse, demande\"/>
{% endblock %}
{% block body %}
\t<div class=\"container pb-4\">
\t\t<!-- Container starts -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 mt-4\">
\t\t\t\t{% if app.user is null %}
\t\t\t\t<div class=\"alert alert-warning rounded-0\">
\t\t\t\t\t<p class=\"lead mt-1 mb-1 text-center\">
\t\t\t\t\t\t<strong>Désolé ! </strong>Vous ne pouvez pas soumettre une demande d'assistance sans vous être d'abord connecté. Si vous avez une question générale, veuillez nous envoyer un e-mail à admin@lenil.tech.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t</div>
\t\t</div>
\t\t<div class=\"row customer-support\" style=\"\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header text-center make-white\">
\t\t\t\t\t\t<h2>Soumettre une demande d'assistance
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<p class=\"text-muted pt-1\">Si vous avez des questions, n'hésitez pas à nous contacter, notre centre de service client est en ligne 24h / 24 et 7j / 7..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t{{ form_start(form,{ 'attr': {'class': 'col-md-8 contact-form'} }) }}
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.firstname, null, {'label_attr': {'class': 'float-left'}}) }}
\t\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.firstname,{ 'attr': {'class': 'red-color'} }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.firstname, { 'attr': {'class': 'form-control'} }) }}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.lastname, null, {'label_attr': {'class': 'float-left'}}) }}
\t\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.lastname,{ 'attr': {'class': 'red-color'} }) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.lastname, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t{{ form_label(form.phone, null, {'label_attr': {'class': 'float-left'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.phone,{ 'attr': {'class': 'red-color'} }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.phone, { 'attr': {'class': 'form-control'} }) }}

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t{{ form_label(form.email, null, {'label_attr': {'class': 'float-left'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.email,{ 'attr': {'class': 'red-color'} }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t{{ form_label(form.message, null, {'label_attr': {'class': 'float-left'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"red-color\">
\t\t\t\t\t\t\t\t\t\t{{ form_errors(form.message,{ 'attr': {'class': 'red-color'} }) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{{ form_widget(form.message, { 'attr': {'class': 'form-control','rows': '6'} }) }}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label>Veuillez vérifier que vous faites partie de l'humanité.</label>
\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"6LcLeawUAAAAABC2pU7vox7ZY2mXmwMo0j2686jQ\"><div style=\"width: 304px; height: 78px;\"><div><iframe src=\"https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcLeawUAAAAABC2pU7vox7ZY2mXmwMo0j2686jQ&amp;co=aHR0cHM6Ly93d3cuZ2lndG9kby5jb206NDQz&amp;hl=fr&amp;v=OOKISvkNnVD_m_9dreR_1S0n&amp;size=normal&amp;cb=3pjcu5ycn27x\" width=\"304\" height=\"78\" role=\"presentation\" name=\"a-htbujvljonjk\" frameborder=\"0\" scrolling=\"no\" sandbox=\"allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox\"></iframe></div><textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\" class=\"g-recaptcha-response\" style=\"width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;\"></textarea></div><iframe style=\"display: none;\"></iframe></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t {% if app.user is null %}
\t\t\t\t\t\t\t\t\t\t <button class=\"btn btn-success btn-lg\" type=\"button\" id=\"contact-not-connected\">
\t\t\t\t\t\t\t\t\t\t\t <i class=\"fa fa-paper-plane\"> Envoyer</i>
\t\t\t\t\t\t\t\t\t\t </button>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-lg\"  name=\"submit\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paper-plane\"> Envoyer</i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</center>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
{% block javascripts %}
\t<script type=\"application/javascript\">
\t\t\$(document).ready(function () {
\t\t\t\$(\"#contact-not-connected\").click(function () {
\t\t\t\tswal({
\t\t\t\t\ttext: \"Opps! Vous devez être connecté pour soumettre des demandes d'assistance.\",
\t\t\t\t\ticon: \"warning\",
\t\t\t\t\ttimer: 6000
\t\t\t\t}).then(
\t\t\t\t\t\twindow.location.href = \"/login\"
\t\t\t\t);
\t\t\t});
\t\t});


\t</script>
{% endblock %}", "static/contact.html.twig", "/home/vagrant/code/lenil/templates/static/contact.html.twig");
    }
}
