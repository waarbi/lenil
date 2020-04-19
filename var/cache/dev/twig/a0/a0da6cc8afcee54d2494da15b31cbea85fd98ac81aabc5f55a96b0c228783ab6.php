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

/* seller/landing_page_start_selling.html.twig */
class __TwigTemplate_654a951457235d2267bd04c0efdc52365536aaa2200e3441fdbda50965a80bde extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/landing_page_start_selling.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/landing_page_start_selling.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "seller/landing_page_start_selling.html.twig", 3);
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

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lenil |Devenez vendeur sur notre plateforme ";
        
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
        echo "    <header id=\"start_selling\">

        <h2 class=\"text-center text-white\">Devenez vendeur sur notre plateforme</h2>

        Vous apportez la compétence. Nous rendrons les gains aussi simples que 1,2,3
        <h3 class=\"text-center text-white\">Vous apportez la compétence. Nous rendrons les gains aussi simples que 1,2,3</h3>
        <div class=\"text-center btn_start_selling\">

            <a href=\"proposals/create_proposal\" class=\"btn btn-success btn-lg btn_start_selling\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                Vendez un service</a>
        </div>
    </header>
        <br>
        <br>
        <section id=\"start_selling_body\">

            <div class=\"container\">

                <h2 class=\"text-center pb-5 pt-5\">Comment ça marche ?</h2>

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-address-card-o pb-4\" style=\"color:#3498db;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 50px; padding: 15px;\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/create-icon.png"), "html", null, true);
        echo "\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 40px;\">Créer un service</h3>

                        <p>Une fois que vous avez créé un compte, tout ce que vous avez à faire pour devenir vendeur est de créer une proposition / un service. Assurez-vous que votre proposition est aussi captivante que possible. Les clients potentiels lisent réellement votre contenu.</p>


                    </div>

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-archive pb-4\" style=\"color:#e67e22;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 50px; padding: 15px;\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/approve-icon.png"), "html", null, true);
        echo "\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Soumettre votre service pour validation</h3>

                        <p>Après avoir créé votre proposition / service incroyable, soumettez-le afin que l'administrateur puisse s'assurer que tout a l'air bien. Les administrateurs refusent rarement les propositions, cependant, assurez-vous que tout semble bien avant de soumettre.</p>


                    </div>

                    <div class=\"col-md-4\">

                        <img style=\"position: relative; left: 50px; padding: 15px;\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/receive-icon.png"), "html", null, true);
        echo "\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Obtenez les commandes. À l'échelle mondiale.</h3>

                        <p>Votre proposition / service a donc été approuvé par l'administrateur. Maintenant, c'est la bonne partie, commencez à recevoir une tonne de commandes de clients du monde entier. Faites de votre mieux pour chaque commande.</p>

                    </div>

                </div><br><br>
                <hr>
                <br><br>

                <span style=\"padding: 200px; margin:200px;\"></span>


                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-address-card-o pb-4\" style=\"color:#3498db;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 67px; padding: 15px;\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/delivered-icon.png"), "html", null, true);
        echo "\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 40px;\">Livrer des projets</h3>

                        <p>Une fois que vous avez reçu des commandes, faites de votre mieux pour satisfaire vos clients. Ceci est très important pour les clients de retour et les commentaires incroyables. La communication est la clé, assurez-vous d'être en contact avec votre client.</p>


                    </div>

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-archive pb-4\" style=\"color:#e67e22;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 67px; padding: 15px;\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/rate-icon.png"), "html", null, true);
        echo "\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Évaluez vos clients</h3>

                        <p>De nombreux clients vérifient leurs propres notes. Il est important d'évaluer les clients en fonction de leur comportement au cours du processus de commande. Ceci est important pour les autres vendeurs et pour les administrateurs. La plupart des vendeurs donnent 5 étoiles.</p>


                    </div>

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-check-square-o pb-4\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 67px; padding: 15px;\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/comp/earn-icon.png"), "html", null, true);
        echo "\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Soyez payé. À temps.</h3>

                        <p>Soyez payé à temps, à chaque fois. Après la période de validation, le paiement vous est transféré. Notre système vous permet de transférer des fonds de notre système vers votre compte PayPal, Mobile Money.</p>


                    </div>

                </div>
            </div><br><br><br>

        </section>
        <div class=\"text-center btn_start_selling\">

            <a href=\"proposals/create_proposal\" class=\"btn btn-success btn-lg btn_start_selling\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                Vendez un service</a>

        </div>
        <div class=\"pb-5\"></div>
        <br>
        <br>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "seller/landing_page_start_selling.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 97,  200 => 85,  185 => 73,  162 => 53,  148 => 42,  133 => 30,  107 => 6,  97 => 5,  78 => 2,  60 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}{% endblock %}
{% block title %}Lenil |Devenez vendeur sur notre plateforme {% endblock %}
{% extends \"base.html.twig\" %}

{% block body %}
    <header id=\"start_selling\">

        <h2 class=\"text-center text-white\">Devenez vendeur sur notre plateforme</h2>

        Vous apportez la compétence. Nous rendrons les gains aussi simples que 1,2,3
        <h3 class=\"text-center text-white\">Vous apportez la compétence. Nous rendrons les gains aussi simples que 1,2,3</h3>
        <div class=\"text-center btn_start_selling\">

            <a href=\"proposals/create_proposal\" class=\"btn btn-success btn-lg btn_start_selling\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                Vendez un service</a>
        </div>
    </header>
        <br>
        <br>
        <section id=\"start_selling_body\">

            <div class=\"container\">

                <h2 class=\"text-center pb-5 pt-5\">Comment ça marche ?</h2>

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-address-card-o pb-4\" style=\"color:#3498db;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 50px; padding: 15px;\" src=\"{{ asset('uploads/images/comp/create-icon.png') }}\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 40px;\">Créer un service</h3>

                        <p>Une fois que vous avez créé un compte, tout ce que vous avez à faire pour devenir vendeur est de créer une proposition / un service. Assurez-vous que votre proposition est aussi captivante que possible. Les clients potentiels lisent réellement votre contenu.</p>


                    </div>

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-archive pb-4\" style=\"color:#e67e22;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 50px; padding: 15px;\" src=\"{{ asset('uploads/images/comp/approve-icon.png') }}\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Soumettre votre service pour validation</h3>

                        <p>Après avoir créé votre proposition / service incroyable, soumettez-le afin que l'administrateur puisse s'assurer que tout a l'air bien. Les administrateurs refusent rarement les propositions, cependant, assurez-vous que tout semble bien avant de soumettre.</p>


                    </div>

                    <div class=\"col-md-4\">

                        <img style=\"position: relative; left: 50px; padding: 15px;\" src=\"{{ asset('uploads/images/comp/receive-icon.png') }}\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Obtenez les commandes. À l'échelle mondiale.</h3>

                        <p>Votre proposition / service a donc été approuvé par l'administrateur. Maintenant, c'est la bonne partie, commencez à recevoir une tonne de commandes de clients du monde entier. Faites de votre mieux pour chaque commande.</p>

                    </div>

                </div><br><br>
                <hr>
                <br><br>

                <span style=\"padding: 200px; margin:200px;\"></span>


                <div class=\"row\">

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-address-card-o pb-4\" style=\"color:#3498db;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 67px; padding: 15px;\" src=\"{{ asset('uploads/images/comp/delivered-icon.png') }}\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 40px;\">Livrer des projets</h3>

                        <p>Une fois que vous avez reçu des commandes, faites de votre mieux pour satisfaire vos clients. Ceci est très important pour les clients de retour et les commentaires incroyables. La communication est la clé, assurez-vous d'être en contact avec votre client.</p>


                    </div>

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-archive pb-4\" style=\"color:#e67e22;\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 67px; padding: 15px;\" src=\"{{ asset('uploads/images/comp/rate-icon.png') }}\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Évaluez vos clients</h3>

                        <p>De nombreux clients vérifient leurs propres notes. Il est important d'évaluer les clients en fonction de leur comportement au cours du processus de commande. Ceci est important pour les autres vendeurs et pour les administrateurs. La plupart des vendeurs donnent 5 étoiles.</p>


                    </div>

                    <div class=\"col-md-4\">
                        <!--<i class=\"fa fa-check-square-o pb-4\" aria-hidden=\"true\"></i>-->

                        <img style=\"position: relative; left: 67px; padding: 15px;\" src=\"{{ asset('uploads/images/comp/earn-icon.png') }}\">

                        <h3 class=\"pb-4\" style=\"position: relative; left: 50px;\">Soyez payé. À temps.</h3>

                        <p>Soyez payé à temps, à chaque fois. Après la période de validation, le paiement vous est transféré. Notre système vous permet de transférer des fonds de notre système vers votre compte PayPal, Mobile Money.</p>


                    </div>

                </div>
            </div><br><br><br>

        </section>
        <div class=\"text-center btn_start_selling\">

            <a href=\"proposals/create_proposal\" class=\"btn btn-success btn-lg btn_start_selling\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i>
                Vendez un service</a>

        </div>
        <div class=\"pb-5\"></div>
        <br>
        <br>



{% endblock %}", "seller/landing_page_start_selling.html.twig", "/home/vagrant/code/lenil/templates/seller/landing_page_start_selling.html.twig");
    }
}
