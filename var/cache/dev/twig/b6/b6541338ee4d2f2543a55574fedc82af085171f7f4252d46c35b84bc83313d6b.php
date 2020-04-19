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

/* account/profile.html.twig */
class __TwigTemplate_b81d6c7e795d0b7ed7f0f2cd467d69658f877bf78725f4f632b82d908e902bf6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/profile.html.twig", 1);
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

        echo "Paramétrage du compte utilisateur";
        
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
        echo "     <div class=\"container-fluid mt-5 mb-5\">
         <div class=\"row terms-page\" style=\"\">
             <div class=\"col-md-3 mb-3\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <ul class=\"nav nav-pills flex-column mt-2\">
                             <li class=\"nav-item\">
                                 <a data-toggle=\"pill\" href=\"#profile_settings\" class=\"nav-link active\">
                                     Paramétrer mon profil\t\t\t\t</a>
                             </li>
                             <li class=\"nav-item\">
                                 <a data-toggle=\"pill\" href=\"#account_settings\" class=\"nav-link\">
                                     Paramétrer mon compte\t\t\t\t\t\t\t</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class=\"col-md-9\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <div class=\"tab-content\">
                             <div id=\"profile_settings\" class=\"tab-pane fade active show\">
                                 <h2 class=\"mb-4\">Paramétrage Profil</h2>
                                 <hr>
                                 ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                                     <div class=\"form-group row\">
                                         ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 33, $this->source); })()), "firstName", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "col-md-3 col-form-label"]]);
        echo "
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 36, $this->source); })()), "firstName", [], "any", false, false, false, 36), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                             </div>
                                             ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                         </div>
                                     </div>
                                    <div class=\"form-group row\">
                                         ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 42, $this->source); })()), "lastName", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "col-md-3 col-form-label"]]);
        echo "
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                             </div>
                                             ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                         </div>
                                     </div>

                                     <div class=\"form-group row\">
                                         ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "col-md-3 col-form-label"]]);
        echo "
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                             </div>
                                             ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                         </div>
                                     </div>

                                     <div class=\"form-group row\"><!-- form-group row Starts -->
                                         ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 62, $this->source); })()), "pays", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "col-md-3 col-form-label"]]);
        echo "
                                         <div class=\"col-md-8\">
                                             ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 64, $this->source); })()), "pays", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                         </div>
                                     </div><!-- form-group row Ends -->

                                     <div class=\"form-group row\">
                                         ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 69, $this->source); })()), "picture", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "col-md-3 col-form-label"]]);
        echo "
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 72, $this->source); })()), "picture", [], "any", false, false, false, 72), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                             </div>
                                             ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 74, $this->source); })()), "picture", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                         </div>
                                     </div>

                                     <div class=\"form-group row\">
                                         ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "col-md-3 col-form-label"]]);
        echo "
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 82, $this->source); })()), "description", [], "any", false, false, false, 82), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                             </div>
                                             ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                         </div>
                                     </div>
                                     <button type=\"submit\" name=\"submit\" class=\"btn btn-success float-right\">
                                         <i class=\"fa fa-floppy-o\"></i> Enregistrer
                                     </button>
                                 ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProfil"]) || array_key_exists("formProfil", $context) ? $context["formProfil"] : (function () { throw new RuntimeError('Variable "formProfil" does not exist.', 90, $this->source); })()), 'form_end');
        echo "
                             </div>
                             <div id=\"account_settings\" class=\"tab-pane fade\">
                                 <h2 class=\"mb-4\">Paramétrage Compte</h2>
                                 <hr>
                                 ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["class" => "clearfix mb-3"]]);
        echo "
                                 <div class=\"form-group row\">
                                     ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 97, $this->source); })()), "oldPassword", [], "any", false, false, false, 97), 'label', ["label_attr" => ["class" => "col-md-4 col-form-label"]]);
        echo "

                                     <div class=\"col-md-8\">
                                         <div class=\"red-color\">
                                             ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 101, $this->source); })()), "oldPassword", [], "any", false, false, false, 101), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                         </div>
                                         ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 103, $this->source); })()), "oldPassword", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                     </div>
                                 </div>
                                 <div class=\"form-group row\">
                                     ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 107, $this->source); })()), "newPassword", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "col-md-4 col-form-label"]]);
        echo "
                                     <div class=\"col-md-8\">
                                         <div class=\"red-color\">
                                             ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 110, $this->source); })()), "newPassword", [], "any", false, false, false, 110), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                         </div>
                                         ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 112, $this->source); })()), "newPassword", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                     </div>
                                 </div>

                                 <div class=\"form-group row\">
                                     ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 117, $this->source); })()), "confirmPassword", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "col-md-4 col-form-label"]]);
        echo "
                                     <div class=\"col-md-8\">
                                         <div class=\"red-color\">
                                             ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 120, $this->source); })()), "confirmPassword", [], "any", false, false, false, 120), 'errors', ["attr" => ["class" => "red-color"]]);
        echo "
                                         </div>
                                         ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 122, $this->source); })()), "confirmPassword", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                     </div>
                                 </div>
                                 <button type=\"submit\" name=\"change_password\" class=\"btn btn-success float-right\"><i class=\"fa fa-floppy-o\"></i>Changer Mot de Pass</button>

                                 ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formPassword"]) || array_key_exists("formPassword", $context) ? $context["formPassword"] : (function () { throw new RuntimeError('Variable "formPassword" does not exist.', 127, $this->source); })()), 'form_end');
        echo "
                             </div>
                         </div>
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
        return "account/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 127,  290 => 122,  285 => 120,  279 => 117,  271 => 112,  266 => 110,  260 => 107,  253 => 103,  248 => 101,  241 => 97,  236 => 95,  228 => 90,  219 => 84,  214 => 82,  208 => 79,  200 => 74,  195 => 72,  189 => 69,  181 => 64,  176 => 62,  168 => 57,  163 => 55,  157 => 52,  149 => 47,  144 => 45,  138 => 42,  131 => 38,  126 => 36,  120 => 33,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends \"base.html.twig\" %}  

 {% block title %}Paramétrage du compte utilisateur{% endblock %}

 {% block body %}
     <div class=\"container-fluid mt-5 mb-5\">
         <div class=\"row terms-page\" style=\"\">
             <div class=\"col-md-3 mb-3\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <ul class=\"nav nav-pills flex-column mt-2\">
                             <li class=\"nav-item\">
                                 <a data-toggle=\"pill\" href=\"#profile_settings\" class=\"nav-link active\">
                                     Paramétrer mon profil\t\t\t\t</a>
                             </li>
                             <li class=\"nav-item\">
                                 <a data-toggle=\"pill\" href=\"#account_settings\" class=\"nav-link\">
                                     Paramétrer mon compte\t\t\t\t\t\t\t</a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class=\"col-md-9\">
                 <div class=\"card\">
                     <div class=\"card-body\">
                         <div class=\"tab-content\">
                             <div id=\"profile_settings\" class=\"tab-pane fade active show\">
                                 <h2 class=\"mb-4\">Paramétrage Profil</h2>
                                 <hr>
                                 {{ form_start(formProfil) }}
                                     <div class=\"form-group row\">
                                         {{ form_label(formProfil.firstName, null, {'label_attr': {'class': 'col-md-3 col-form-label'}}) }}
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 {{ form_errors(formProfil.firstName,{ 'attr': {'class': 'red-color'} }) }}
                                             </div>
                                             {{ form_widget(formProfil.firstName, { 'attr': {'class': 'form-control'} }) }}
                                         </div>
                                     </div>
                                    <div class=\"form-group row\">
                                         {{ form_label(formProfil.lastName, null, {'label_attr': {'class': 'col-md-3 col-form-label'}}) }}
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 {{ form_errors(formProfil.lastName,{ 'attr': {'class': 'red-color'} }) }}
                                             </div>
                                             {{ form_widget(formProfil.lastName, { 'attr': {'class': 'form-control'} }) }}
                                         </div>
                                     </div>

                                     <div class=\"form-group row\">
                                         {{ form_label(formProfil.email, null, {'label_attr': {'class': 'col-md-3 col-form-label'}}) }}
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 {{ form_errors(formProfil.email,{ 'attr': {'class': 'red-color'} }) }}
                                             </div>
                                             {{ form_widget(formProfil.email, { 'attr': {'class': 'form-control'} }) }}
                                         </div>
                                     </div>

                                     <div class=\"form-group row\"><!-- form-group row Starts -->
                                         {{ form_label(formProfil.pays, null, {'label_attr': {'class': 'col-md-3 col-form-label'}}) }}
                                         <div class=\"col-md-8\">
                                             {{ form_widget(formProfil.pays, { 'attr': {'class': 'form-control'} }) }}
                                         </div>
                                     </div><!-- form-group row Ends -->

                                     <div class=\"form-group row\">
                                         {{ form_label(formProfil.picture, null, {'label_attr': {'class': 'col-md-3 col-form-label'}}) }}
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 {{ form_errors(formProfil.picture,{ 'attr': {'class': 'red-color'} }) }}
                                             </div>
                                             {{ form_widget(formProfil.picture, { 'attr': {'class': 'form-control'} }) }}
                                         </div>
                                     </div>

                                     <div class=\"form-group row\">
                                         {{ form_label(formProfil.description, null, {'label_attr': {'class': 'col-md-3 col-form-label'}}) }}
                                         <div class=\"col-md-8\">
                                             <div class=\"red-color\">
                                                 {{ form_errors(formProfil.description,{ 'attr': {'class': 'red-color'} }) }}
                                             </div>
                                             {{ form_widget(formProfil.description, { 'attr': {'class': 'form-control'} }) }}
                                         </div>
                                     </div>
                                     <button type=\"submit\" name=\"submit\" class=\"btn btn-success float-right\">
                                         <i class=\"fa fa-floppy-o\"></i> Enregistrer
                                     </button>
                                 {{ form_end(formProfil) }}
                             </div>
                             <div id=\"account_settings\" class=\"tab-pane fade\">
                                 <h2 class=\"mb-4\">Paramétrage Compte</h2>
                                 <hr>
                                 {{ form_start(formPassword,{ 'attr': {'class': 'clearfix mb-3'} }) }}
                                 <div class=\"form-group row\">
                                     {{ form_label(formPassword.oldPassword, null, {'label_attr': {'class': 'col-md-4 col-form-label'}}) }}

                                     <div class=\"col-md-8\">
                                         <div class=\"red-color\">
                                             {{ form_errors(formPassword.oldPassword,{ 'attr': {'class': 'red-color'} }) }}
                                         </div>
                                         {{ form_widget(formPassword.oldPassword, { 'attr': {'class': 'form-control'} }) }}
                                     </div>
                                 </div>
                                 <div class=\"form-group row\">
                                     {{ form_label(formPassword.newPassword, null, {'label_attr': {'class': 'col-md-4 col-form-label'}}) }}
                                     <div class=\"col-md-8\">
                                         <div class=\"red-color\">
                                             {{ form_errors(formPassword.newPassword,{ 'attr': {'class': 'red-color'} }) }}
                                         </div>
                                         {{ form_widget(formPassword.newPassword, { 'attr': {'class': 'form-control'} }) }}
                                     </div>
                                 </div>

                                 <div class=\"form-group row\">
                                     {{ form_label(formPassword.confirmPassword, null, {'label_attr': {'class': 'col-md-4 col-form-label'}}) }}
                                     <div class=\"col-md-8\">
                                         <div class=\"red-color\">
                                             {{ form_errors(formPassword.confirmPassword,{ 'attr': {'class': 'red-color'} }) }}
                                         </div>
                                         {{ form_widget(formPassword.confirmPassword, { 'attr': {'class': 'form-control'} }) }}
                                     </div>
                                 </div>
                                 <button type=\"submit\" name=\"change_password\" class=\"btn btn-success float-right\"><i class=\"fa fa-floppy-o\"></i>Changer Mot de Pass</button>

                                 {{ form_end(formPassword) }}
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 {% endblock %}", "account/profile.html.twig", "/home/vagrant/code/lenil/templates/account/profile.html.twig");
    }
}
