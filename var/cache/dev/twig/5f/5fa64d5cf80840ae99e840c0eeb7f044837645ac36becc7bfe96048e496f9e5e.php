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

/* demande/index.html.twig */
class __TwigTemplate_3af72ac45d00d2e39819188d2b527ff86c38bbd784bbb609b0bf9bda1379bd08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande/index.html.twig", 1);
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

        echo "Liste des demandes";
        
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
        echo "    <div class=\"container-fluid mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-4\">
                <h1 class=\"pull-left\"> Gestion de mes demandes </h1>
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_new");
        echo "\" class=\"btn btn-success pull-right\">
                    <i class=\"fa fa-plus-circle\"></i> Poster une nouvelle demande
                </a>
            </div>
            <div class=\"col-md-12\">
                <ul class=\"nav nav-tabs flex-column flex-sm-row  mt-4\">
                    <li class=\"nav-item\">
                        <a href=\"#active\" data-toggle=\"tab\" class=\"nav-link make-black active\">
                            Demande active <span class=\"badge badge-success\">";
        // line 18
        if ( !twig_test_empty((isset($context["demandesActives"]) || array_key_exists("demandesActives", $context) ? $context["demandesActives"] : (function () { throw new RuntimeError('Variable "demandesActives" does not exist.', 18, $this->source); })()))) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["demandesActives"]) || array_key_exists("demandesActives", $context) ? $context["demandesActives"] : (function () { throw new RuntimeError('Variable "demandesActives" does not exist.', 18, $this->source); })())), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#pause\" data-toggle=\"tab\" class=\"nav-link make-black\">
                            Demandes suspendues <span class=\"badge badge-success\">";
        // line 23
        if ( !twig_test_empty((isset($context["demandesSuspendues"]) || array_key_exists("demandesSuspendues", $context) ? $context["demandesSuspendues"] : (function () { throw new RuntimeError('Variable "demandesSuspendues" does not exist.', 23, $this->source); })()))) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["demandesSuspendues"]) || array_key_exists("demandesSuspendues", $context) ? $context["demandesSuspendues"] : (function () { throw new RuntimeError('Variable "demandesSuspendues" does not exist.', 23, $this->source); })())), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#pending\" data-toggle=\"tab\" class=\"nav-link make-black\">
                            En attente de validation <span class=\"badge badge-success\">";
        // line 28
        if ( !twig_test_empty((isset($context["demandesEncours"]) || array_key_exists("demandesEncours", $context) ? $context["demandesEncours"] : (function () { throw new RuntimeError('Variable "demandesEncours" does not exist.', 28, $this->source); })()))) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["demandesEncours"]) || array_key_exists("demandesEncours", $context) ? $context["demandesEncours"] : (function () { throw new RuntimeError('Variable "demandesEncours" does not exist.', 28, $this->source); })())), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#unapproved\" data-toggle=\"tab\" class=\"nav-link make-black\">
                            Désapprouvé <span class=\"badge badge-success\">";
        // line 33
        if ( !twig_test_empty((isset($context["demandesAnnulees"]) || array_key_exists("demandesAnnulees", $context) ? $context["demandesAnnulees"] : (function () { throw new RuntimeError('Variable "demandesAnnulees" does not exist.', 33, $this->source); })()))) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["demandesAnnulees"]) || array_key_exists("demandesAnnulees", $context) ? $context["demandesAnnulees"] : (function () { throw new RuntimeError('Variable "demandesAnnulees" does not exist.', 33, $this->source); })())), "html", null, true);
            echo " ";
        } else {
            echo " 0 ";
        }
        echo "</span>
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content mt-4\">
                    <div id=\"active\" class=\"tab-pane fade active show\">
                        <div class=\"table-responsive box-table\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offres</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandesActives"]) || array_key_exists("demandesActives", $context) ? $context["demandesActives"] : (function () { throw new RuntimeError('Variable "demandesActives" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 62
            echo "                                    <tr>
                                        <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo " </td>

                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "description", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>

                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "createdAt", [], "any", false, false, false, 67), "m/d/Y"), "html", null, true);
            echo "</td>

                                        <td>";
            // line 69
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 69))) {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 69)), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</td>
                                        <td class=\"text-success\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "budget", [], "any", false, false, false, 70), "html", null, true);
            echo " €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_suspendre", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
                                </tbody>


                            </table>



                        </div>


                    </div>


                    <div id=\"pause\" class=\"tab-pane fade\">

                        <div class=\"table-responsive box-table\">

                            <table class=\"table table-bordered\">

                                <thead>

                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offres</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>
                                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandesSuspendues"]) || array_key_exists("demandesSuspendues", $context) ? $context["demandesSuspendues"] : (function () { throw new RuntimeError('Variable "demandesSuspendues" does not exist.', 144, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 145
            echo "                                    <tr>
                                        <td> ";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "title", [], "any", false, false, false, 146), "html", null, true);
            echo " </td>

                                        <td>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "description", [], "any", false, false, false, 148), "html", null, true);
            echo "</td>

                                        <td>";
            // line 150
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "createdAt", [], "any", false, false, false, 150), "m/d/Y"), "html", null, true);
            echo "</td>

                                        <td>";
            // line 152
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 152))) {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 152)), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</td>
                                        <td class=\"text-success\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "budget", [], "any", false, false, false, 153), "html", null, true);
            echo " €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_suspendre", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 166)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 182
            echo "                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
                                </tbody>

                            </table>

                            <center><h3 class=\"pt-4 pb-4\"><i class=\"fa fa-smile-o\"></i> You currently have no requests paused.</h3></center>
                        </div>

                    </div>



                    <div id=\"pending\" class=\"tab-pane fade\">

                        <div class=\"table-responsive box-table\">

                            <table class=\"table table-bordered\">

                                <thead>

                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offers</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>

                                ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandesEncours"]) || array_key_exists("demandesEncours", $context) ? $context["demandesEncours"] : (function () { throw new RuntimeError('Variable "demandesEncours" does not exist.', 226, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 227
            echo "                                    <tr>
                                        <td> ";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "title", [], "any", false, false, false, 228), "html", null, true);
            echo " </td>

                                        <td>";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "description", [], "any", false, false, false, 230), "html", null, true);
            echo "</td>

                                        <td>";
            // line 232
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "createdAt", [], "any", false, false, false, 232), "m/d/Y"), "html", null, true);
            echo "</td>

                                        <td>";
            // line 234
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 234))) {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 234)), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</td>
                                        <td class=\"text-success\">";
            // line 235
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "budget", [], "any", false, false, false, 235), "html", null, true);
            echo " €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_suspendre", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 248)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 252)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 264
            echo "                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                                </tbody>

                            </table>

                            <center><h3 class=\"pt-4 pb-4\"><i class=\"fa fa-smile-o\"></i> You currently have no requests pending.</h3></center>
                        </div>

                    </div>



                    <div id=\"unapproved\" class=\"tab-pane fade\">

                        <div class=\"table-responsive box-table\">

                            <table class=\"table table-bordered\">

                                <thead>

                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offers</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>
                                ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandesAnnulees"]) || array_key_exists("demandesAnnulees", $context) ? $context["demandesAnnulees"] : (function () { throw new RuntimeError('Variable "demandesAnnulees" does not exist.', 306, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 307
            echo "                                    <tr>
                                        <td> ";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "title", [], "any", false, false, false, 308), "html", null, true);
            echo " </td>

                                        <td>";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "description", [], "any", false, false, false, 310), "html", null, true);
            echo "</td>

                                        <td>   <td>";
            // line 312
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "createdAt", [], "any", false, false, false, 312), "m/d/Y"), "html", null, true);
            echo "</td>


                                        <td>";
            // line 315
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 315))) {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "offers", [], "any", false, false, false, 315)), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</td>
                                        <td class=\"text-success\">";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["demande"], "budget", [], "any", false, false, false, 316), "html", null, true);
            echo " €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_suspendre", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 329)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"";
            // line 333
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 333)]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 345
            echo "                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                                </tbody>

                            </table>

                            <center><h3 class=\"pt-4 pb-4\"><i class=\"fa fa-smile-o\"></i> You currently have no unapproved requests.</h3></center>
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
        return "demande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 349,  621 => 345,  604 => 333,  597 => 329,  581 => 316,  572 => 315,  566 => 312,  561 => 310,  556 => 308,  553 => 307,  548 => 306,  508 => 268,  499 => 264,  482 => 252,  475 => 248,  459 => 235,  450 => 234,  445 => 232,  440 => 230,  435 => 228,  432 => 227,  427 => 226,  385 => 186,  376 => 182,  359 => 170,  352 => 166,  336 => 153,  327 => 152,  322 => 150,  317 => 148,  312 => 146,  309 => 145,  304 => 144,  261 => 103,  252 => 99,  235 => 87,  228 => 83,  212 => 70,  203 => 69,  198 => 67,  193 => 65,  188 => 63,  185 => 62,  180 => 61,  144 => 33,  131 => 28,  118 => 23,  105 => 18,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des demandes{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-5\">
        <div class=\"row\">
            <div class=\"col-md-12 mb-4\">
                <h1 class=\"pull-left\"> Gestion de mes demandes </h1>
                <a href=\"{{ path('demande_new') }}\" class=\"btn btn-success pull-right\">
                    <i class=\"fa fa-plus-circle\"></i> Poster une nouvelle demande
                </a>
            </div>
            <div class=\"col-md-12\">
                <ul class=\"nav nav-tabs flex-column flex-sm-row  mt-4\">
                    <li class=\"nav-item\">
                        <a href=\"#active\" data-toggle=\"tab\" class=\"nav-link make-black active\">
                            Demande active <span class=\"badge badge-success\">{% if demandesActives is not empty %}{{ demandesActives | length }} {% else %} 0 {% endif %}</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#pause\" data-toggle=\"tab\" class=\"nav-link make-black\">
                            Demandes suspendues <span class=\"badge badge-success\">{% if demandesSuspendues is not empty %}{{ demandesSuspendues | length }} {% else %} 0 {% endif %}</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#pending\" data-toggle=\"tab\" class=\"nav-link make-black\">
                            En attente de validation <span class=\"badge badge-success\">{% if demandesEncours is not empty %}{{ demandesEncours | length }} {% else %} 0 {% endif %}</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#unapproved\" data-toggle=\"tab\" class=\"nav-link make-black\">
                            Désapprouvé <span class=\"badge badge-success\">{% if demandesAnnulees is not empty %}{{ demandesAnnulees |length}} {% else %} 0 {% endif %}</span>
                        </a>
                    </li>
                </ul>
                <div class=\"tab-content mt-4\">
                    <div id=\"active\" class=\"tab-pane fade active show\">
                        <div class=\"table-responsive box-table\">
                            <table class=\"table table-bordered\">
                                <thead>
                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offres</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>
                                {% for demande in demandesActives %}
                                    <tr>
                                        <td> {{ demande.title }} </td>

                                        <td>{{ demande.description }}</td>

                                        <td>{{ demande.createdAt | date('m/d/Y') }}</td>

                                        <td>{% if demande.offers is not empty %}{{ demande.offers |length}} {% else %} 0 {% endif %}</td>
                                        <td class=\"text-success\">{{ demande.budget }} €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"{{ path('demande_suspendre', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"{{ path('demande_delete', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                {% endfor %}

                                </tbody>


                            </table>



                        </div>


                    </div>


                    <div id=\"pause\" class=\"tab-pane fade\">

                        <div class=\"table-responsive box-table\">

                            <table class=\"table table-bordered\">

                                <thead>

                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offres</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>
                                {% for demande in demandesSuspendues %}
                                    <tr>
                                        <td> {{ demande.title }} </td>

                                        <td>{{ demande.description }}</td>

                                        <td>{{ demande.createdAt | date('m/d/Y') }}</td>

                                        <td>{% if demande.offers is not empty %}{{ demande.offers |length}} {% else %} 0 {% endif %}</td>
                                        <td class=\"text-success\">{{ demande.budget }} €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"{{ path('demande_suspendre', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"{{ path('demande_delete', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                {% endfor %}

                                </tbody>

                            </table>

                            <center><h3 class=\"pt-4 pb-4\"><i class=\"fa fa-smile-o\"></i> You currently have no requests paused.</h3></center>
                        </div>

                    </div>



                    <div id=\"pending\" class=\"tab-pane fade\">

                        <div class=\"table-responsive box-table\">

                            <table class=\"table table-bordered\">

                                <thead>

                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offers</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>

                                {% for demande in demandesEncours %}
                                    <tr>
                                        <td> {{ demande.title }} </td>

                                        <td>{{ demande.description }}</td>

                                        <td>{{ demande.createdAt | date('m/d/Y') }}</td>

                                        <td>{% if demande.offers is not empty %}{{ demande.offers |length}} {% else %} 0 {% endif %}</td>
                                        <td class=\"text-success\">{{ demande.budget }} €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"{{ path('demande_suspendre', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"{{ path('demande_delete', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>

                            </table>

                            <center><h3 class=\"pt-4 pb-4\"><i class=\"fa fa-smile-o\"></i> You currently have no requests pending.</h3></center>
                        </div>

                    </div>



                    <div id=\"unapproved\" class=\"tab-pane fade\">

                        <div class=\"table-responsive box-table\">

                            <table class=\"table table-bordered\">

                                <thead>

                                <tr>

                                    <th>Title</th>

                                    <th>Description</th>

                                    <th>Date</th>

                                    <th>Offers</th>

                                    <th>Budget</th>

                                    <th>Actions</th>

                                </tr>

                                </thead>

                                <tbody>
                                {% for demande in demandesAnnulees %}
                                    <tr>
                                        <td> {{ demande.title }} </td>

                                        <td>{{ demande.description }}</td>

                                        <td>   <td>{{ demande.createdAt | date('m/d/Y') }}</td>


                                        <td>{% if demande.offers is not empty %}{{ demande.offers |length}} {% else %} 0 {% endif %}</td>
                                        <td class=\"text-success\">{{ demande.budget }} €</td>
                                        <td class=\"text-center\">

                                            <div class=\"dropdown\">

                                                <button class=\"btn btn-success dropdown-toggle\" data-toggle=\"dropdown\"></button>

                                                <div class=\"dropdown-menu\">

                                                    <a href=\"view_offers?request_id=235\" target=\"blank\" class=\"dropdown-item\">
                                                        Voires les offres
                                                    </a>

                                                    <a href=\"{{ path('demande_suspendre', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Suspendre
                                                    </a>

                                                    <a href=\"{{ path('demande_delete', {id: demande.id}) }}\" class=\"dropdown-item\">
                                                        Supprimer
                                                    </a>

                                                </div>

                                            </div>

                                        </td>

                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"7\">no records found</td>
                                    </tr>
                                {% endfor %}

                                </tbody>

                            </table>

                            <center><h3 class=\"pt-4 pb-4\"><i class=\"fa fa-smile-o\"></i> You currently have no unapproved requests.</h3></center>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "demande/index.html.twig", "/home/vagrant/code/lenil/templates/demande/index.html.twig");
    }
}
