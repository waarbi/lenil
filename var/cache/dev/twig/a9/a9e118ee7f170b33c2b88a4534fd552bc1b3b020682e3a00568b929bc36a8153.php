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

/* demande/new.html.twig */
class __TwigTemplate_acc7acb72e4944517c733047cf26e2a30923f8e43ec8d0551dae644d0a4f5e0d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        input[type=radio]:checked {
            background-color: blue;
           color: #fff;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Faites une Demande";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"container-fluid mt-5 mb-5\">
        <h1 class=\"mb-5\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            Faites une nouvelle demande</h1>
        <div class=\"row\"><!--- row Starts --->
            <div class=\"col-xl-8 col-lg-8 post-request col-md-12\">
                <div class=\"card rounded-0\">
                    <div class=\"card-body\">
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row row-1\">
                                <div class=\"col-md-2 d-md-block d-none\">
                                    <!--<i class=\"fa fa-pencil-square-o fa-4x text-success\"></i>-->
                                    <img style=\"position:relative; top: -12px; left:15px;\" width=\"64\"
                                         src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/book.png"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col-md-10 col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-9 col-lg-12\">
                                            <div class=\"form-group\">
                                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control input-lg", "placeholder" => "Titre de votre demande"]]);
        echo "
                                            </div>
                                            <div class=\"form-group\">
                                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "rows" => "5", "maxlength" => "380", "placeholder" => "Description de votre demande"]]);
        echo "
                                                <div class=\"font-weight-bold pull-right\">
                                                    <span class=\"descCount\"> 0 </span> / 380 Max
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row-2\">
                                <hr class=\"card-hr\">
                                <h5 class=\"mb-5\"> Choisissez une catégorie</h5>
                                <div class=\"row mb-2 \">
                                    <div class=\"col-md-2 d-md-block d-none\">
                                        <!--<i class=\"fa fa-folder-open fa-4x text-success\"></i>-->
                                        <img style=\"position:relative; top: -12px; left:15px;\"
                                             src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/folder.png"), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"col-md-10 col-sm-12\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-4 col-md-6 mb-2\">
                                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "category", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                            <div class=\"col-xl-4 col-md-6 mb-2\">
                                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "sousCategory", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row-3\">
                                <hr class=\"card-hr\">
                                <h5 class=\"mb-4\"> Une fois votre commande passée, quand souhaitez-vous que votre service
                                    soit livré ? </h5>
                                <div class=\"row mb-4\">
                                    <div class=\"col-md-1 d-md-block d-none\">
                                        <!--<i class=\"fa fa-clock-o fa-4x text-success \"></i>-->
                                        <img style=\"position:relative; left:15px;\"
                                             src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/timetable.png"), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"col-md-11 col-sm-12 mt-3 \">
                                        <label class=\"custom-control custom-radio\">
                                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "deliveryTime", [], "any", false, false, false, 79), 'widget');
        echo "
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class=\"row-4\">
                                <hr class=\"card-hr\">
                                <h5 class=\"mb-4\"> Quel est votre budget pour ce service? (Optionnel) ?</h5>
                                <div class=\"row\">
                                    <div class=\"col-md-1 d-md-block d-none\">
                                        <!--<i class=\"fa fa-money fa-4x text-success fa-work\"></i>-->
                                        <img style=\"position:relative; left:15px;\"
                                             src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/budget.png"), "html", null, true);
        echo "\">
                                    </div>
                                    <div class=\"col-md-6 col-sm-12 offset-md-1 mt-3\">
                                        <div class=\"input-group form-curb\">
                                            <span class=\"input-group-addon font-weight-bold\"> € </span>
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "budget", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control input-lg", "placeholder" => "5 Minimum"]]);
        echo "

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class=\"card-hr\">
                            <input type=\"submit\" name=\"submit\" value=\"Valider votre demande\" style=\"cursor:pointer;\"
                                   class=\"btn btn-success btn-lg float-right\">
                        ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-4 col-md-4 request-sidebar \">
                <!--- col-xl-3 col-md-2 request-sidebar p-0 Starts --->
                <div class=\"card border-0 rounded-0 mb-5 h-1\" style=\"visibility: visible;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/light-bulb.png"), "html", null, true);
        echo "\"> Définir en détail</h5>
                        <p>Incluez tous les détails nécessaires pour compléter votre demande.</p>
                        <p style=\"background-color: #deeff0;\" class=\"breadcrumb mb-0\">
                            <b style=\"color:#0096a3\">Par exemple: </b> si vous recherchez un logo, vous pouvez spécifier
                            le nom de votre entreprise, le type d'entreprise, la couleur préférée, etc.
                        </p>
                    </div>
                </div>
                <div class=\"card border-0 rounded-0 mb-0 h-2\" style=\"visibility: hidden;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/light-bulb.png"), "html", null, true);
        echo "\">Affinez votre demande</h5>
                        <p>Choisissez la catégorie et la sous-catégorie qui correspondent le mieux à votre demande.</p>
                        <p style=\"background-color: #deeff0;\" class=\"breadcrumb mb-0\">
                            <b style=\"color:#0096a3\">Par exemple:</b> si vous cherchez un logo, vous devez choisir
                            \"Création de logo\" dans la catégorie \"Graphics & Design\".
                        </p>
                    </div>
                </div>
                <div class=\"card border-0 rounded-0 mb-0 h-3\" style=\"visibility: hidden;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/light-bulb.png"), "html", null, true);
        echo "\">Définir un délai de livraison
                        </h5>
                        <p>Il s'agit du temps dont dispose le vendeur pour traiter votre commande. Veuillez noter qu'une
                            demande de livraison plus rapide peut avoir un impact sur le prix.</p>
                    </div>
                </div>
                <div class=\"card border-0 rounded-0 mb-3 h-4\" style=\"visibility: hidden;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/light-bulb.png"), "html", null, true);
        echo "\"> Définissez votre budget</h5>
                        <p>Entrez un montant que vous êtes prêt à dépenser pour ce service.</p>
                    </div>
                </div>
            </div><!--- col-xl-3 col-md-2 request-sidebar p-0 Ends --->
        </div><!--- row Ends --->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    <script>
        \$(document).ready(function () {
            \$('.h-2').css(\"visibility\", \"hidden\");
            \$('.h-3').css(\"visibility\", \"hidden\");
            \$('.h-4').css(\"visibility\", \"hidden\");

            \$('.container-fluid').hover(function () {
                \$('.h-1').css(\"visibility\", \"visible\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-1').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"visible\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-2').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"hidden\");
                \$('.h-2').css(\"visibility\", \"visible\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-3').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"hidden\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"visible\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-4').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"hidden\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"visible\");
            });

            \$('.row-2,.row-3,.row-4').mouseout(function () {
                \$('.h-1').css(\"visibility\", \"visible\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$(\"#appbundle_demande_description\").keydown(function () {
                var textarea = \$(\"#appbundle_demande_description\").val();
                \$(\".descCount\").text(textarea.length);
            });

            \$(\"#appbundle_demande_sousCategory\").hide();

            \$(\"#appbundle_demande_category\").change(function () {
                \$(\"#appbundle_demande_sousCategory\").show();
            });

        });
    </script>
    <script>
        \$('#appbundle_demande_category').change(function () {
            var categorySelector = \$(this);
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_sous_category_by_category");
        echo "\",
                type: \"GET\",
                dataType: \"JSON\",
                data: {
                    catid: categorySelector.val()
                },
                success: function (souscategories) {
                    var sousCategorySelect = \$(\"#appbundle_demande_sousCategory\");
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
        return "demande/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 221,  324 => 155,  314 => 154,  296 => 146,  284 => 137,  270 => 126,  256 => 115,  244 => 106,  232 => 97,  224 => 92,  208 => 79,  201 => 75,  183 => 60,  176 => 56,  168 => 51,  149 => 35,  143 => 32,  134 => 26,  126 => 21,  116 => 13,  106 => 12,  87 => 10,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    <style>
        input[type=radio]:checked {
            background-color: blue;
           color: #fff;
        }
    </style>
{% endblock %}
{% block title %}Faites une Demande{% endblock %}

{% block body %}

    <div class=\"container-fluid mt-5 mb-5\">
        <h1 class=\"mb-5\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            Faites une nouvelle demande</h1>
        <div class=\"row\"><!--- row Starts --->
            <div class=\"col-xl-8 col-lg-8 post-request col-md-12\">
                <div class=\"card rounded-0\">
                    <div class=\"card-body\">
                            {{ form_start(form) }}
                            <div class=\"row row-1\">
                                <div class=\"col-md-2 d-md-block d-none\">
                                    <!--<i class=\"fa fa-pencil-square-o fa-4x text-success\"></i>-->
                                    <img style=\"position:relative; top: -12px; left:15px;\" width=\"64\"
                                         src=\"{{ asset('uploads/images/comp/book.png') }}\">
                                </div>
                                <div class=\"col-md-10 col-sm-12\">
                                    <div class=\"row\">
                                        <div class=\"col-xl-9 col-lg-12\">
                                            <div class=\"form-group\">
                                                {{ form_widget(form.title, { 'attr': {'class': 'form-control input-lg','placeholder': 'Titre de votre demande'} }) }}
                                            </div>
                                            <div class=\"form-group\">
                                                {{ form_widget(form.description, { 'attr': {'class': 'form-control','rows': '5','maxlength':\"380\",'placeholder': 'Description de votre demande'} }) }}
                                                <div class=\"font-weight-bold pull-right\">
                                                    <span class=\"descCount\"> 0 </span> / 380 Max
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row-2\">
                                <hr class=\"card-hr\">
                                <h5 class=\"mb-5\"> Choisissez une catégorie</h5>
                                <div class=\"row mb-2 \">
                                    <div class=\"col-md-2 d-md-block d-none\">
                                        <!--<i class=\"fa fa-folder-open fa-4x text-success\"></i>-->
                                        <img style=\"position:relative; top: -12px; left:15px;\"
                                             src=\"{{ asset('uploads/images/comp/folder.png') }}\">
                                    </div>
                                    <div class=\"col-md-10 col-sm-12\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-4 col-md-6 mb-2\">
                                                {{ form_widget(form.category, { 'attr': {'class': 'form-control'} }) }}

                                            </div>
                                            <div class=\"col-xl-4 col-md-6 mb-2\">
                                                {{ form_widget(form.sousCategory, { 'attr': {'class': 'form-control'} }) }}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row-3\">
                                <hr class=\"card-hr\">
                                <h5 class=\"mb-4\"> Une fois votre commande passée, quand souhaitez-vous que votre service
                                    soit livré ? </h5>
                                <div class=\"row mb-4\">
                                    <div class=\"col-md-1 d-md-block d-none\">
                                        <!--<i class=\"fa fa-clock-o fa-4x text-success \"></i>-->
                                        <img style=\"position:relative; left:15px;\"
                                             src=\"{{ asset('uploads/images/comp/timetable.png') }}\">
                                    </div>
                                    <div class=\"col-md-11 col-sm-12 mt-3 \">
                                        <label class=\"custom-control custom-radio\">
                                            {{ form_widget(form.deliveryTime) }}
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class=\"row-4\">
                                <hr class=\"card-hr\">
                                <h5 class=\"mb-4\"> Quel est votre budget pour ce service? (Optionnel) ?</h5>
                                <div class=\"row\">
                                    <div class=\"col-md-1 d-md-block d-none\">
                                        <!--<i class=\"fa fa-money fa-4x text-success fa-work\"></i>-->
                                        <img style=\"position:relative; left:15px;\"
                                             src=\"{{ asset('uploads/images/comp/budget.png') }}\">
                                    </div>
                                    <div class=\"col-md-6 col-sm-12 offset-md-1 mt-3\">
                                        <div class=\"input-group form-curb\">
                                            <span class=\"input-group-addon font-weight-bold\"> € </span>
                                            {{ form_widget(form.budget, { 'attr': {'class': 'form-control input-lg','placeholder': \"5 Minimum\"} }) }}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class=\"card-hr\">
                            <input type=\"submit\" name=\"submit\" value=\"Valider votre demande\" style=\"cursor:pointer;\"
                                   class=\"btn btn-success btn-lg float-right\">
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-lg-4 col-md-4 request-sidebar \">
                <!--- col-xl-3 col-md-2 request-sidebar p-0 Starts --->
                <div class=\"card border-0 rounded-0 mb-5 h-1\" style=\"visibility: visible;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"{{ asset('uploads/images/comp/light-bulb.png') }}\"> Définir en détail</h5>
                        <p>Incluez tous les détails nécessaires pour compléter votre demande.</p>
                        <p style=\"background-color: #deeff0;\" class=\"breadcrumb mb-0\">
                            <b style=\"color:#0096a3\">Par exemple: </b> si vous recherchez un logo, vous pouvez spécifier
                            le nom de votre entreprise, le type d'entreprise, la couleur préférée, etc.
                        </p>
                    </div>
                </div>
                <div class=\"card border-0 rounded-0 mb-0 h-2\" style=\"visibility: hidden;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"{{ asset('uploads/images/comp/light-bulb.png') }}\">Affinez votre demande</h5>
                        <p>Choisissez la catégorie et la sous-catégorie qui correspondent le mieux à votre demande.</p>
                        <p style=\"background-color: #deeff0;\" class=\"breadcrumb mb-0\">
                            <b style=\"color:#0096a3\">Par exemple:</b> si vous cherchez un logo, vous devez choisir
                            \"Création de logo\" dans la catégorie \"Graphics & Design\".
                        </p>
                    </div>
                </div>
                <div class=\"card border-0 rounded-0 mb-0 h-3\" style=\"visibility: hidden;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"{{ asset('uploads/images/comp/light-bulb.png') }}\">Définir un délai de livraison
                        </h5>
                        <p>Il s'agit du temps dont dispose le vendeur pour traiter votre commande. Veuillez noter qu'une
                            demande de livraison plus rapide peut avoir un impact sur le prix.</p>
                    </div>
                </div>
                <div class=\"card border-0 rounded-0 mb-3 h-4\" style=\"visibility: hidden;\">
                    <div class=\"card-body pt-3\">
                        <h5><img style=\"position:relative; left:-3px; top:-2px;\"
                                 src=\"{{ asset('uploads/images/comp/light-bulb.png') }}\"> Définissez votre budget</h5>
                        <p>Entrez un montant que vous êtes prêt à dépenser pour ce service.</p>
                    </div>
                </div>
            </div><!--- col-xl-3 col-md-2 request-sidebar p-0 Ends --->
        </div><!--- row Ends --->
    </div>
{% endblock %}
{% block javascripts %}
    <script>
        \$(document).ready(function () {
            \$('.h-2').css(\"visibility\", \"hidden\");
            \$('.h-3').css(\"visibility\", \"hidden\");
            \$('.h-4').css(\"visibility\", \"hidden\");

            \$('.container-fluid').hover(function () {
                \$('.h-1').css(\"visibility\", \"visible\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-1').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"visible\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-2').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"hidden\");
                \$('.h-2').css(\"visibility\", \"visible\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-3').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"hidden\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"visible\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$('.row-4').mouseover(function () {
                \$('.h-1').css(\"visibility\", \"hidden\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"visible\");
            });

            \$('.row-2,.row-3,.row-4').mouseout(function () {
                \$('.h-1').css(\"visibility\", \"visible\");
                \$('.h-2').css(\"visibility\", \"hidden\");
                \$('.h-3').css(\"visibility\", \"hidden\");
                \$('.h-4').css(\"visibility\", \"hidden\");
            });

            \$(\"#appbundle_demande_description\").keydown(function () {
                var textarea = \$(\"#appbundle_demande_description\").val();
                \$(\".descCount\").text(textarea.length);
            });

            \$(\"#appbundle_demande_sousCategory\").hide();

            \$(\"#appbundle_demande_category\").change(function () {
                \$(\"#appbundle_demande_sousCategory\").show();
            });

        });
    </script>
    <script>
        \$('#appbundle_demande_category').change(function () {
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
                    var sousCategorySelect = \$(\"#appbundle_demande_sousCategory\");
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
{% endblock %}", "demande/new.html.twig", "/home/vagrant/code/lenil/templates/demande/new.html.twig");
    }
}
