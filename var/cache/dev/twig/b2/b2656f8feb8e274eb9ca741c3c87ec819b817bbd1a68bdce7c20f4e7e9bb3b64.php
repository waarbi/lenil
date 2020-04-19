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

/* proposals/create.html.twig */
class __TwigTemplate_8ab9c1320a84c2ec5e247b6799f3603f25c73e3b95d43a933829ab0a13b874b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proposals/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/create_proposal.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Creation de service";
        
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
        echo "    <nav id=\"tabs\">
        <div class=\"container\">

            <div class=\"breadcrumb flat mb-0 nav\" role=\"tablist\">
                <a class=\"nav-link active\" href=\"#overview\">Overview</a>

                <a class=\"nav-link d-none \" href=\"#video\">Video Settings</a>

                <a class=\"nav-link  \" href=\"#pricing\">Pricing</a>

                <a class=\"nav-link \" href=\"#description\">Description &amp; FAQ</a>
                <a class=\"nav-link \" href=\"#requirements\">Requirements</a>
                <a class=\"nav-link \" href=\"#gallery\">Gallery</a>
                <a class=\"nav-link \" href=\"#publish\">Submit For Approval</a>
            </div>

        </div>

    </nav>

    <div class=\"container mt-5 mb-5\"><!--- container Starts --->
        <div class=\"row\"><!--- row Starts --->
            <div class=\"col-md-8\">
                <div class=\"tab-content card card-body\"><!--- tab-content Starts --->
                    <!--- form Starts -->
                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["class" => "proposal-form"]]);
        echo "
                    <div class=\"tab-pane show active\" id=\"overview\">
                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Proposal Title</div>
                            <div class=\"col-md-9\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre du service"]]);
        echo "
                            </div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\"> Category </div>
                            <div class=\"col-md-9\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <small class=\"form-text text-danger\"></small>
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "subcategory", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Delivery Time</div>
                            <div class=\"col-md-9\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "deliveryTime", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <button class=\"btn btn-success next float-right\" type=\"button\" >Suivant</button>
                        <!--- form-group Starts --->

                        ";
        // line 67
        echo "                    </div>
                    <div class=\"tab-pane\" id=\"pricing\">
                        <h5 class=\"font-weight-normal float-left\">Pricing</h5>
                        <div class=\"float-right switch-box\">
                            <span class=\"text\">Fixed Price :</span>
                            <label class=\"switch\">
                                <input type=\"checkbox\" class=\"pricing\" checked=\"\">
                                <span class=\"slider\"></span>
                            </label>
                        </div>

                        <div class=\"clearfix\"></div>

                        <hr class=\"mt-0\">

                        <div class=\"form-group row proposal-price justify-content-center\">
                            <div class=\"col-md-7\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon font-weight-bold\">\$</span>
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "price", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "enctype" => "multipart/form-data"]]);
        echo "
                                </div>
                                <small>If you want to use packages, you need to set this field value to 0. </small>
                            </div>
                        </div>

                        <button class=\"btn btn-secondary previous float-left \" type=\"button\" >Précédent</button>
                        <button class=\"btn btn-success next float-right\" type=\"button\" >Suivant</button>

                    </div>

                    <div class=\"tab-pane\" id=\"description\">
                        <h5 class=\"font-weight-normal\">Description</h5>
                        <hr>
                        <p class=\"small mb-2\"> Project Details </p>

                        <div class=\"form-group\">
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "description", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <small class=\"form-text text-danger\"></small>
                        </div>

                        <button class=\"btn btn-secondary previous float-left \" type=\"button\" >Précédent</button>
                        <button class=\"btn btn-success next float-right\" type=\"button\" >Suivant</button>
                    </div>
                    <div class=\"tab-pane\" id=\"gallery\">
                        <h5 class=\"font-weight-normal\">Build Your Proposal Gallery</h5>
                        <h6 class=\"font-weight-normal\">Add memorable content to your gallery to set yourself apart from competitors.</h6>

                        <hr>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label required\" for=\"\">Default Image</label>
                            <div class=\"col-sm-10\">
                                <div class=\"dropzone\"></div>
                            </div>
                        </div>
                        <button class=\"btn btn-secondary previous float-left \" type=\"button\" >Précédent</button>
                        <button class=\"btn btn-success save float-right\" type=\"submit\" id=\"submit-all\">Valider</button>
                    </div>
                    ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), 'form_end');
        echo "
                </div><!--- tab-content Ends --->

            </div>
        </div><!--- row Ends --->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "    <script type=\"application/javascript\">
        // init,configure dropzone
        function randomString(length) {
            var text = \"\";
            var possible = \"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\";
            for( var i=0; i < length; i++ ) {
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            }
            return text;
        }



        \$(document).ready(function () {
            var browsers = [\"Opera\", \"Edge\", \"Chrome\", \"Safari\", \"Firefox\", \"MSIE\", \"Trident\"];
            var userbrowser, useragent = navigator.userAgent;
            for(var i = 0; i < browsers.length; i++) {
                if( useragent.indexOf(browsers[i]) > -1 ) {
                    userbrowser = browsers[i];
                    break;
                }
            };

            \$(\"#pricing\").hide();
            \$(\"#description\").hide();
            \$(\"#gallery\").hide();
            \$(\"#appbundle_proposal_subcategory\").hide();

            \$(\"#appbundle_proposal_category\").change(function () {
                \$(\"#appbundle_proposal_subcategory\").show();
            });

            var current_fs, next_fs, previous_fs;

            function steps(e){
                if (e.parent().is(\":visible\")) {
                    current_fs = e.parent();
                    next_fs = e.parent().next();

                    \$(\"#tabs .breadcrumb a\").eq(\$(\"div\").index(next_fs)).addClass(\"active\");

                    next_fs.show();

                    current_fs.hide();

                } else if (e.parent().next().is(\":visible\")) {
                    current_fs = e.parent();
                    next_fs = e.parent().next();
                }
                next_fs.show();
                current_fs.hide();
            }

            \$(\".next\").click(function() {
                steps(\$(this));
            });

            \$(\".previous\").click(function(){

                current_fs = \$(this).parent();
                previous_fs = \$(this).parent().prev();
                \$(\"#tabs .breadcrumb a\").eq(\$(\"div\").index(next_fs)).removeClass(\"active\");

                previous_fs.show();

                current_fs.hide();
            });

        });
        Dropzone.autoDiscover = false;
        var dropzone_default = new Dropzone(\".dropzone\", {
            url: '";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uploadproposalimagehandler");
        echo "' ,
            maxFiles: 4,
            dictMaxFilesExceeded: 'Only 4 Images can be uploaded',
            acceptedFiles: 'image/*',
            maxFilesize: 3,  // in Mb
            addRemoveLinks: true,
            init: function () {
                this.on(\"maxfilesexceeded\", function(file) {
                    this.removeFile(file);
                });
                this.on(\"sending\", function(file, xhr, formData) {
                    // send additional data with the file as POST data if needed.
                    // formData.append(\"key\", \"value\");
                });
                this.on(\"success\", function(file, response) {
                    if (response.uploaded)
                        alert('File Uploaded: ' + response.fileName);
                });
            }
        });

    </script>
    <script>
        \$('#appbundle_proposal_category').change(function () {
            var categorySelector = \$(this);
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_sous_category_by_category");
        echo "\",
                type: \"GET\",
                dataType: \"JSON\",
                data: {
                    catid: categorySelector.val()
                },
                success: function (souscategories) {
                    var sousCategorySelect = \$(\"#appbundle_proposal_subcategory\");
                    // Remove current options
                    sousCategorySelect.html('');
                    // Empty value ...
                    sousCategorySelect.append('<option value> Sélectionner une sous catégorie de ' + categorySelector.find(\"option:selected\").text() + ' ...</option>');

                    \$.each(souscategories, function (key, souscategory) {
                        sousCategorySelect.append('<option value=\"' + souscategory.id + '\">' + souscategory.title + '</option>');
                    });
                },
                error: function (err) {
                    alert(\"An error ocurred while loading data ...\");
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proposals/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 231,  351 => 204,  278 => 133,  268 => 132,  251 => 124,  227 => 103,  207 => 86,  186 => 67,  175 => 58,  165 => 51,  160 => 49,  149 => 41,  141 => 36,  114 => 11,  104 => 10,  85 => 8,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link href=\"{{ asset('build/css/create_proposal.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css\">
{% endblock %}

{% block title %}Creation de service{% endblock %}

{% block body %}
    <nav id=\"tabs\">
        <div class=\"container\">

            <div class=\"breadcrumb flat mb-0 nav\" role=\"tablist\">
                <a class=\"nav-link active\" href=\"#overview\">Overview</a>

                <a class=\"nav-link d-none \" href=\"#video\">Video Settings</a>

                <a class=\"nav-link  \" href=\"#pricing\">Pricing</a>

                <a class=\"nav-link \" href=\"#description\">Description &amp; FAQ</a>
                <a class=\"nav-link \" href=\"#requirements\">Requirements</a>
                <a class=\"nav-link \" href=\"#gallery\">Gallery</a>
                <a class=\"nav-link \" href=\"#publish\">Submit For Approval</a>
            </div>

        </div>

    </nav>

    <div class=\"container mt-5 mb-5\"><!--- container Starts --->
        <div class=\"row\"><!--- row Starts --->
            <div class=\"col-md-8\">
                <div class=\"tab-content card card-body\"><!--- tab-content Starts --->
                    <!--- form Starts -->
                    {{ form_start(form, { 'attr': {'class': 'proposal-form'} }) }}
                    <div class=\"tab-pane show active\" id=\"overview\">
                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Proposal Title</div>
                            <div class=\"col-md-9\">
                                {{ form_widget(form.title, { 'attr': {'class': 'form-control','placeholder': 'Titre du service'} }) }}
                            </div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\"> Category </div>
                            <div class=\"col-md-9\">
                                {{ form_widget(form.category, { 'attr': {'class': 'form-control'} }) }}
                                <small class=\"form-text text-danger\"></small>
                                {{ form_widget(form.subcategory, { 'attr': {'class': 'form-control'} }) }}
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Delivery Time</div>
                            <div class=\"col-md-9\">
                                {{ form_widget(form.deliveryTime, { 'attr': {'class': 'form-control'} }) }}
                            </div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <button class=\"btn btn-success next float-right\" type=\"button\" >Suivant</button>
                        <!--- form-group Starts --->

                        {#                        {{ form_end(form) }}<!--- form Ends -->#}
                    </div>
                    <div class=\"tab-pane\" id=\"pricing\">
                        <h5 class=\"font-weight-normal float-left\">Pricing</h5>
                        <div class=\"float-right switch-box\">
                            <span class=\"text\">Fixed Price :</span>
                            <label class=\"switch\">
                                <input type=\"checkbox\" class=\"pricing\" checked=\"\">
                                <span class=\"slider\"></span>
                            </label>
                        </div>

                        <div class=\"clearfix\"></div>

                        <hr class=\"mt-0\">

                        <div class=\"form-group row proposal-price justify-content-center\">
                            <div class=\"col-md-7\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon font-weight-bold\">\$</span>
                                    {{ form_widget(form.price, { 'attr': {'class': 'form-control','enctype':'multipart/form-data'} }) }}
                                </div>
                                <small>If you want to use packages, you need to set this field value to 0. </small>
                            </div>
                        </div>

                        <button class=\"btn btn-secondary previous float-left \" type=\"button\" >Précédent</button>
                        <button class=\"btn btn-success next float-right\" type=\"button\" >Suivant</button>

                    </div>

                    <div class=\"tab-pane\" id=\"description\">
                        <h5 class=\"font-weight-normal\">Description</h5>
                        <hr>
                        <p class=\"small mb-2\"> Project Details </p>

                        <div class=\"form-group\">
                            {{ form_widget(form.description, { 'attr': {'class': 'form-control'} }) }}
                            <small class=\"form-text text-danger\"></small>
                        </div>

                        <button class=\"btn btn-secondary previous float-left \" type=\"button\" >Précédent</button>
                        <button class=\"btn btn-success next float-right\" type=\"button\" >Suivant</button>
                    </div>
                    <div class=\"tab-pane\" id=\"gallery\">
                        <h5 class=\"font-weight-normal\">Build Your Proposal Gallery</h5>
                        <h6 class=\"font-weight-normal\">Add memorable content to your gallery to set yourself apart from competitors.</h6>

                        <hr>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label required\" for=\"\">Default Image</label>
                            <div class=\"col-sm-10\">
                                <div class=\"dropzone\"></div>
                            </div>
                        </div>
                        <button class=\"btn btn-secondary previous float-left \" type=\"button\" >Précédent</button>
                        <button class=\"btn btn-success save float-right\" type=\"submit\" id=\"submit-all\">Valider</button>
                    </div>
                    {{ form_end(form) }}
                </div><!--- tab-content Ends --->

            </div>
        </div><!--- row Ends --->
    </div>
{% endblock %}

{% block javascripts %}
    <script type=\"application/javascript\">
        // init,configure dropzone
        function randomString(length) {
            var text = \"\";
            var possible = \"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789\";
            for( var i=0; i < length; i++ ) {
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            }
            return text;
        }



        \$(document).ready(function () {
            var browsers = [\"Opera\", \"Edge\", \"Chrome\", \"Safari\", \"Firefox\", \"MSIE\", \"Trident\"];
            var userbrowser, useragent = navigator.userAgent;
            for(var i = 0; i < browsers.length; i++) {
                if( useragent.indexOf(browsers[i]) > -1 ) {
                    userbrowser = browsers[i];
                    break;
                }
            };

            \$(\"#pricing\").hide();
            \$(\"#description\").hide();
            \$(\"#gallery\").hide();
            \$(\"#appbundle_proposal_subcategory\").hide();

            \$(\"#appbundle_proposal_category\").change(function () {
                \$(\"#appbundle_proposal_subcategory\").show();
            });

            var current_fs, next_fs, previous_fs;

            function steps(e){
                if (e.parent().is(\":visible\")) {
                    current_fs = e.parent();
                    next_fs = e.parent().next();

                    \$(\"#tabs .breadcrumb a\").eq(\$(\"div\").index(next_fs)).addClass(\"active\");

                    next_fs.show();

                    current_fs.hide();

                } else if (e.parent().next().is(\":visible\")) {
                    current_fs = e.parent();
                    next_fs = e.parent().next();
                }
                next_fs.show();
                current_fs.hide();
            }

            \$(\".next\").click(function() {
                steps(\$(this));
            });

            \$(\".previous\").click(function(){

                current_fs = \$(this).parent();
                previous_fs = \$(this).parent().prev();
                \$(\"#tabs .breadcrumb a\").eq(\$(\"div\").index(next_fs)).removeClass(\"active\");

                previous_fs.show();

                current_fs.hide();
            });

        });
        Dropzone.autoDiscover = false;
        var dropzone_default = new Dropzone(\".dropzone\", {
            url: '{{ path('uploadproposalimagehandler') }}' ,
            maxFiles: 4,
            dictMaxFilesExceeded: 'Only 4 Images can be uploaded',
            acceptedFiles: 'image/*',
            maxFilesize: 3,  // in Mb
            addRemoveLinks: true,
            init: function () {
                this.on(\"maxfilesexceeded\", function(file) {
                    this.removeFile(file);
                });
                this.on(\"sending\", function(file, xhr, formData) {
                    // send additional data with the file as POST data if needed.
                    // formData.append(\"key\", \"value\");
                });
                this.on(\"success\", function(file, response) {
                    if (response.uploaded)
                        alert('File Uploaded: ' + response.fileName);
                });
            }
        });

    </script>
    <script>
        \$('#appbundle_proposal_category').change(function () {
            var categorySelector = \$(this);
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"{{ path('get_sous_category_by_category') }}\",
                type: \"GET\",
                dataType: \"JSON\",
                data: {
                    catid: categorySelector.val()
                },
                success: function (souscategories) {
                    var sousCategorySelect = \$(\"#appbundle_proposal_subcategory\");
                    // Remove current options
                    sousCategorySelect.html('');
                    // Empty value ...
                    sousCategorySelect.append('<option value> Sélectionner une sous catégorie de ' + categorySelector.find(\"option:selected\").text() + ' ...</option>');

                    \$.each(souscategories, function (key, souscategory) {
                        sousCategorySelect.append('<option value=\"' + souscategory.id + '\">' + souscategory.title + '</option>');
                    });
                },
                error: function (err) {
                    alert(\"An error ocurred while loading data ...\");
                }
            });
        });
    </script>

{% endblock %}", "proposals/create.html.twig", "/home/vagrant/code/lenil/templates/proposals/create.html.twig");
    }
}
