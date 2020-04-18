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

/* seller/index.html.twig */
class __TwigTemplate_8eab9614a0d424f1121fa686389a5e8d3fe18ba0f63c391a6c0df7c87817ab89 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seller/index.html.twig", 5);
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"col-md-12 user-header pl-5 pr-5 pt-5 pb-5\">
        <div class=\"profile-image float-lg-left flaot-md-left float-none mr-4\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "picture", [], "any", false, false, false, 10))), "html", null, true);
        echo "\" class=\"rounded-circle\"
                 alt=\"Avatar de  ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"content-bar mt-3\">
            <h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "fullName", [], "any", false, false, false, 14), "html", null, true);
        echo " </h1>
            <span class=\"headline\">
          </span>
            <div class=\"star-rating\">
                <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i
                        class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <span
                        class=\"text-white m-1\"><strong>0.0</strong> (0)</span>
                <span class=\"text-white\">
        <i class=\"fa fa-map-marker m-1\">

        </i>  ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "pays", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "       </span>
            </div>
        </div>
    </div>

    <div class=\"col-md-12 user-status\">
        <ul>
            <li>
                <i class=\"fa fa-user\"></i>
                <strong>Membre depuis : </strong> ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "createdAt", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
        echo "     </li>
        </ul>
    </div>
    <div class=\"container\"> <!-- Container starts -->
    <div class=\"row\">
        <div class=\"col-md-4 mt-4\">

            <div class=\"card user-sidebar rounded-0\"><!--- card user-sidebar rounded-0 Starts -->

                <div class=\"card-body\"><!-- card-body Starts -->

                    <h3>Description</h3>

                    <p>

                        ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "description", [], "any", false, false, false, 48), "html", null, true);
        echo "
                    </p>

                    <hr class=\"card-hr\">

                    <h3 class=\"float-left\">Langues</h3>

                    <ul class=\"list-unstyled\"><!-- list-unstyled Starts -->

                        <li class=\"mb-4 clearfix\">

                            <button data-toggle=\"collapse\" data-target=\"#language\" class=\"btn btn-success float-right\">
                                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                Ajouter une langue
                            </button>

                        </li>

                        <div id=\"language\" class=\"collapse form-style mb-2\">
                            <!-- language collapse form-style mb-2 Starts -->
                            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLanguage"]) || array_key_exists("formLanguage", $context) ? $context["formLanguage"] : (function () { throw new RuntimeError('Variable "formLanguage" does not exist.', 68, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLanguage"]) || array_key_exists("formLanguage", $context) ? $context["formLanguage"] : (function () { throw new RuntimeError('Variable "formLanguage" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLanguage"]) || array_key_exists("formLanguage", $context) ? $context["formLanguage"] : (function () { throw new RuntimeError('Variable "formLanguage" does not exist.', 73, $this->source); })()), "level", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                            <div class=\"text-center\"><!-- text-center Starts -->

                                <button type=\"button\" data-toggle=\"collapse\" data-target=\"#language\"
                                        class=\"btn btn-secondary\">Annuler
                                </button>

                                <button type=\"submit\" name=\"insert_language\" class=\"btn btn-success\">Ajouter
                                </button>

                            </div>
                            ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLanguage"]) || array_key_exists("formLanguage", $context) ? $context["formLanguage"] : (function () { throw new RuntimeError('Variable "formLanguage" does not exist.', 86, $this->source); })()), 'form_end');
        echo "

                        </div>
                    </ul>
                    <div class=\"clearfix\"></div>
                    <ul class=\"list-unstyled mt-3\"><!-- list-unstyled mt-3 Starts -->

                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "getLanguages", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            // line 94
            echo "                            <li class=\"card-li mb-1\">
                                ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langue"], "name", [], "any", false, false, false, 95), "html", null, true);
            echo " - <span class=\"text-muted\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["langue"], "level", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
            echo " </span>

                                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_langue", ["id" => twig_get_attribute($this->env, $this->source, $context["langue"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i>
                                </a>

                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "

                    </ul>

                    <hr class=\"card-hr\">

                    <h3 class=\"float-left\">Compétences</h3>

                    <div class=\"clearfix\"></div>

                    <ul class=\"list-unstyled\"><!-- list-unstyled Starts -->

                        <li class=\"mb-4 clearfix\">

                            <button data-toggle=\"collapse\" data-target=\"#add_skill\" class=\"btn btn-success float-right\">
                                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                Ajouter une compétence
                            </button>
                        </li>
                        <div id=\"add_skill\" class=\"collapse form-style mb-2\">
                            <!-- add_skill collapse form-style mb-2 Starts -->
                            ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSkill"]) || array_key_exists("formSkill", $context) ? $context["formSkill"] : (function () { throw new RuntimeError('Variable "formSkill" does not exist.', 124, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSkill"]) || array_key_exists("formSkill", $context) ? $context["formSkill"] : (function () { throw new RuntimeError('Variable "formSkill" does not exist.', 126, $this->source); })()), "name", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formSkill"]) || array_key_exists("formSkill", $context) ? $context["formSkill"] : (function () { throw new RuntimeError('Variable "formSkill" does not exist.', 129, $this->source); })()), "level", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                                <div class=\"text-center\"><!-- text-center Starts -->
                                    <button type=\"button\" data-toggle=\"collapse\" data-target=\"#add_skill\"
                                            class=\"btn btn-secondary\">Annuler
                                    </button>
                                    <button type=\"submit\" name=\"insert_skill\" class=\"btn btn-success\">Ajouter</button>
                                </div>
                            ";
        // line 138
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSkill"]) || array_key_exists("formSkill", $context) ? $context["formSkill"] : (function () { throw new RuntimeError('Variable "formSkill" does not exist.', 138, $this->source); })()), 'form_end');
        echo "

                        </div><!-- card-body Ends -->
                    </ul>
                    <div class=\"clearfix\"></div>
                    <ul class=\"list-unstyled mt-3\">
                        ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "getSkills", [], "any", false, false, false, 144));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 145
            echo "                        <li class=\"card-li mb-1\">
                            ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 146), "html", null, true);
            echo " - <span class=\"text-muted\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["skill"], "level", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
            echo " </span>

                            <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_skill", ["id" => twig_get_attribute($this->env, $this->source, $context["skill"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\">
                                <i class=\"fa fa-trash-o\"></i>
                            </a>

                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                    </ul>

                </div><!--- card user-sidebar rounded-0 Ends -->
            </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card mt-4 mb-4 rounded-0\">
                            <div class=\"card-body\">
                                <h2>Mes services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <h3 class=\"text-center mb-5 p-2\">
                            <i class=\"fa fa-smile-o\"></i> Vous n'avez aucun service pour le moment.
                        </h3>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "seller/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 154,  319 => 148,  312 => 146,  309 => 145,  305 => 144,  296 => 138,  284 => 129,  278 => 126,  273 => 124,  250 => 103,  238 => 97,  231 => 95,  228 => 94,  224 => 93,  214 => 86,  198 => 73,  192 => 70,  187 => 68,  164 => 48,  146 => 33,  134 => 24,  121 => 14,  115 => 11,  111 => 10,  107 => 8,  97 => 7,  78 => 3,  60 => 1,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
{% endblock %}
        {% block title %}Lenyl | Plateforme des freelancers africains!{% endblock %}

{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"col-md-12 user-header pl-5 pr-5 pt-5 pb-5\">
        <div class=\"profile-image float-lg-left flaot-md-left float-none mr-4\">
            <img src=\"{{ asset('/uploads/images/'~app.user.picture) }}\" class=\"rounded-circle\"
                 alt=\"Avatar de  {{ app.user.fullName }}\"/>
        </div>
        <div class=\"content-bar mt-3\">
            <h1>{{ app.user.fullName }} </h1>
            <span class=\"headline\">
          </span>
            <div class=\"star-rating\">
                <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <i
                        class=\"fa fa-star-o\"></i> <i class=\"fa fa-star-o\"></i> <span
                        class=\"text-white m-1\"><strong>0.0</strong> (0)</span>
                <span class=\"text-white\">
        <i class=\"fa fa-map-marker m-1\">

        </i>  {{ app.user.pays.name }}       </span>
            </div>
        </div>
    </div>

    <div class=\"col-md-12 user-status\">
        <ul>
            <li>
                <i class=\"fa fa-user\"></i>
                <strong>Membre depuis : </strong> {{ app.user.createdAt |date('d/m/Y') }}     </li>
        </ul>
    </div>
    <div class=\"container\"> <!-- Container starts -->
    <div class=\"row\">
        <div class=\"col-md-4 mt-4\">

            <div class=\"card user-sidebar rounded-0\"><!--- card user-sidebar rounded-0 Starts -->

                <div class=\"card-body\"><!-- card-body Starts -->

                    <h3>Description</h3>

                    <p>

                        {{ app.user.description }}
                    </p>

                    <hr class=\"card-hr\">

                    <h3 class=\"float-left\">Langues</h3>

                    <ul class=\"list-unstyled\"><!-- list-unstyled Starts -->

                        <li class=\"mb-4 clearfix\">

                            <button data-toggle=\"collapse\" data-target=\"#language\" class=\"btn btn-success float-right\">
                                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                Ajouter une langue
                            </button>

                        </li>

                        <div id=\"language\" class=\"collapse form-style mb-2\">
                            <!-- language collapse form-style mb-2 Starts -->
                            {{ form_start(formLanguage) }}
                            <div class=\"form-group\">
                                {{ form_widget(formLanguage.name, { 'attr': {'class': 'form-control'} }) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(formLanguage.level, { 'attr': {'class': 'form-control'} }) }}
                            </div>

                            <div class=\"text-center\"><!-- text-center Starts -->

                                <button type=\"button\" data-toggle=\"collapse\" data-target=\"#language\"
                                        class=\"btn btn-secondary\">Annuler
                                </button>

                                <button type=\"submit\" name=\"insert_language\" class=\"btn btn-success\">Ajouter
                                </button>

                            </div>
                            {{ form_end(formLanguage) }}

                        </div>
                    </ul>
                    <div class=\"clearfix\"></div>
                    <ul class=\"list-unstyled mt-3\"><!-- list-unstyled mt-3 Starts -->

                        {% for langue in user.getLanguages %}
                            <li class=\"card-li mb-1\">
                                {{ langue.name }} - <span class=\"text-muted\"> {{ langue.level.name }} </span>

                                <a href=\"{{ path('delete_langue', {id : langue.id}) }}\">
                                    <i class=\"fa fa-trash-o\"></i>
                                </a>

                            </li>
                        {% endfor %}


                    </ul>

                    <hr class=\"card-hr\">

                    <h3 class=\"float-left\">Compétences</h3>

                    <div class=\"clearfix\"></div>

                    <ul class=\"list-unstyled\"><!-- list-unstyled Starts -->

                        <li class=\"mb-4 clearfix\">

                            <button data-toggle=\"collapse\" data-target=\"#add_skill\" class=\"btn btn-success float-right\">
                                <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                                Ajouter une compétence
                            </button>
                        </li>
                        <div id=\"add_skill\" class=\"collapse form-style mb-2\">
                            <!-- add_skill collapse form-style mb-2 Starts -->
                            {{ form_start(formSkill) }}
                            <div class=\"form-group\">
                                {{ form_widget(formSkill.name, { 'attr': {'class': 'form-control'} }) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(formSkill.level, { 'attr': {'class': 'form-control'} }) }}
                            </div>

                                <div class=\"text-center\"><!-- text-center Starts -->
                                    <button type=\"button\" data-toggle=\"collapse\" data-target=\"#add_skill\"
                                            class=\"btn btn-secondary\">Annuler
                                    </button>
                                    <button type=\"submit\" name=\"insert_skill\" class=\"btn btn-success\">Ajouter</button>
                                </div>
                            {{ form_end(formSkill) }}

                        </div><!-- card-body Ends -->
                    </ul>
                    <div class=\"clearfix\"></div>
                    <ul class=\"list-unstyled mt-3\">
                        {% for skill in user.getSkills %}
                        <li class=\"card-li mb-1\">
                            {{ skill.name }} - <span class=\"text-muted\"> {{ skill.level.name }} </span>

                            <a href=\"{{ path('delete_skill', {id : skill.id}) }}\">
                                <i class=\"fa fa-trash-o\"></i>
                            </a>

                        </li>
                        {% endfor %}
                    </ul>

                </div><!--- card user-sidebar rounded-0 Ends -->
            </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card mt-4 mb-4 rounded-0\">
                            <div class=\"card-body\">
                                <h2>Mes services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">

                    <div class=\"col-md-12\">
                        <h3 class=\"text-center mb-5 p-2\">
                            <i class=\"fa fa-smile-o\"></i> Vous n'avez aucun service pour le moment.
                        </h3>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
{% endblock %}", "seller/index.html.twig", "/home/vagrant/code/lenil/templates/seller/index.html.twig");
    }
}
