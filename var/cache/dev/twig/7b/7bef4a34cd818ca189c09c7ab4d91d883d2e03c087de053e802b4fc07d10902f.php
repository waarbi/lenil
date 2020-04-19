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

/* demande/all-others-demandes.html.twig */
class __TwigTemplate_736d2990be5e2fcf0e16a740181970c2d9d05c66b29972883c3c55961fee5da6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/all-others-demandes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/all-others-demandes.html.twig"));

        // line 1
        echo "<div class=\"row mt-2 mb-3\">
    <div class=\"col-md-12\">
        <h2 class=\"float-left\">Demandes récentes des acheteurs</h2>
        <button type=\"button\" onclick=\"location.href='requests/buyer_requests'\" class=\"float-right btn btn-success\">VOIR TOUT</button>
    </div>
</div>
<div class=\"row buyer-requests\">
    <div class=\"col-md-12\">
        <div class=\"table-responsive box-table\">
            <table class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Description de la demande</th>
                    <th>Offres</th>
                    <th>Durée</th>
                    <th>Budget</th>
                </tr>
                </thead>
                <tbody>
                <tr id=\"request_tr_106\">
                    <td>
                        <img src=\"user_images/1585034645_0byte_1586271813.png\" class=\"request-img rounded-circle\">
                        <div class=\"request-description\">
                            <h6>Pat</h6>
                            <h6 class=\"text-success\">Prubea de mexico </h6>
                            <p class=\"lead\">ESto es una prueba para publicar  </p>
                            <a href=\"requests/request_files/coin-sheet0_1566311494.png\" download=\"\">
                                <i class=\"fa fa-arrow-circle-down\"> </i> coin-sheet0_1566311494.png                      </a>
                        </div>
                    </td>
                    <td>0</td>
                    <td>4 Days</td>
                    <td class=\"text-success\">
                        \$20                                        <br>
                        <button class=\"btn btn-success\" id=\"submit-proposal\" data-toggle=\"modal\" data-id=\"1\" data-dismiss=\"modal\" data-target=\"#submit-proposal-details\" title=\"Choose an offer before clicking continue\">Proposer une offre</button>
                    </td>

                </tr>
                </tbody>
            </table>
            <center>
                <a href=\"requests/buyer_requests.php\" class=\"btn btn-success btn-lg mb-3\">
                    <i class=\"fa fa-spinner\"></i> Load More
                </a>
            </center>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "demande/all-others-demandes.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mt-2 mb-3\">
    <div class=\"col-md-12\">
        <h2 class=\"float-left\">Demandes récentes des acheteurs</h2>
        <button type=\"button\" onclick=\"location.href='requests/buyer_requests'\" class=\"float-right btn btn-success\">VOIR TOUT</button>
    </div>
</div>
<div class=\"row buyer-requests\">
    <div class=\"col-md-12\">
        <div class=\"table-responsive box-table\">
            <table class=\"table table-bordered\">
                <thead>
                <tr>
                    <th>Description de la demande</th>
                    <th>Offres</th>
                    <th>Durée</th>
                    <th>Budget</th>
                </tr>
                </thead>
                <tbody>
                <tr id=\"request_tr_106\">
                    <td>
                        <img src=\"user_images/1585034645_0byte_1586271813.png\" class=\"request-img rounded-circle\">
                        <div class=\"request-description\">
                            <h6>Pat</h6>
                            <h6 class=\"text-success\">Prubea de mexico </h6>
                            <p class=\"lead\">ESto es una prueba para publicar  </p>
                            <a href=\"requests/request_files/coin-sheet0_1566311494.png\" download=\"\">
                                <i class=\"fa fa-arrow-circle-down\"> </i> coin-sheet0_1566311494.png                      </a>
                        </div>
                    </td>
                    <td>0</td>
                    <td>4 Days</td>
                    <td class=\"text-success\">
                        \$20                                        <br>
                        <button class=\"btn btn-success\" id=\"submit-proposal\" data-toggle=\"modal\" data-id=\"1\" data-dismiss=\"modal\" data-target=\"#submit-proposal-details\" title=\"Choose an offer before clicking continue\">Proposer une offre</button>
                    </td>

                </tr>
                </tbody>
            </table>
            <center>
                <a href=\"requests/buyer_requests.php\" class=\"btn btn-success btn-lg mb-3\">
                    <i class=\"fa fa-spinner\"></i> Load More
                </a>
            </center>
        </div>
    </div>
</div>
", "demande/all-others-demandes.html.twig", "/home/vagrant/code/lenil/templates/demande/all-others-demandes.html.twig");
    }
}
