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

/* seller/seller_nav.html.twig */
class __TwigTemplate_cd5fe370fcace052e66999c8a47a2a37178eddc02df32ab7874626efab5f64f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/seller_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "seller/seller_nav.html.twig"));

        // line 1
        echo "    <li class=\"logged-in-link\">
        <a class=\"menuItem\" href=\"#freelancers\">
    <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
      <img width=\"135\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/images/big-users.png"), "html", null, true);
        echo "\" style=\"width: 35px;height: 35px;top: -10px;\">
    </span>
        </a>
    </li>
    <li class=\"logged-in-link\">
        <a class=\"bell menuItem\" data-toggle=\"dropdown\" title=\"Notifications\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 229.238 229.238\" style=\"enable-background:new 0 0 229.238 229.238;\" xml:space=\"preserve\">
<path d=\"M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928
\tc-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937
\tc0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175
\tc4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222
\tH135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845
\tc31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928
\tc0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z\"></path>

</svg>
</span>
            <span class=\"total-user-count count c-notifications-header\"></span>
        </a>
        <div class=\"dropdown-menu notifications-dropdown\"><h3 class=\"dropdown-header\"> Notifications (0) <a class=\"float-right make-black\" href=\"#notifications\" style=\"color:black;\">View Notifications</a></h3><h6 class=\"text-center mt-3\">No Notifications Are Available</h6></div>
    </li>
    <li class=\"logged-in-link\">
        <a class=\"message menuItem\" data-toggle=\"dropdown\" title=\"Inbox\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\"><!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\tL338.213,256L482,112.212V399.787z\"></path>
\t</g>
\t</g>

</svg>
</span>
            <span class=\"total-user-count count c-messages-header\"></span>
        </a>
        <div class=\"dropdown-menu messages-dropdown\"><h3 class=\"dropdown-header\"> Inbox (0) <a class=\"float-right make-black\" href=\"#conversations/inbox\" style=\"color:black;\">View Inbox</a></h3><h6 class=\"text-center mt-3\"> No Messages Are Available </h6></div>
    </li>
    <li class=\"logged-in-link\">
        <a href=\"#favorites\" class=\"heart menuItem\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
\t\t\tc-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
\t\t\tc-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
\t\t\tc31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
\t\t\tc2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
\t\t\tc53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
\t\t\tC512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
\t\t\tc-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
\t\t\tC79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
\t\t\tc2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
\t\t\tc15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
\t\t\tC482,254.358,413.255,312.939,309.193,401.614z\"></path>
\t</g>
</g>
</svg>
 </span>
            <span>
  <span class=\"total-user-count count c-favorites\"></span>
  </span>
        </a>
    </li>
    <li class=\"logged-in-link\">
        <a class=\"menuItem\" href=\"#cart\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 33 33\" style=\"enable-background:new 0 0 33 33;\" xml:space=\"preserve\">
<g xmlns=\"http://www.w3.org/2000/svg\">
\t<g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M27.049,30.134H5.951c-0.99,0-1.81-0.743-1.908-1.728L2.659,14.537c-0.014-0.141,0.032-0.281,0.127-0.385    c0.095-0.105,0.229-0.165,0.371-0.165h26.688c0.141,0,0.276,0.06,0.371,0.165c0.095,0.104,0.141,0.245,0.127,0.385l-1.383,13.869    C28.86,29.391,28.039,30.134,27.049,30.134z M3.708,14.988l1.329,13.319c0.047,0.472,0.439,0.827,0.913,0.827h21.099    c0.474,0,0.867-0.355,0.914-0.827l1.329-13.319H3.708z\"></path>
\t\t<g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M7.604,9.106c-0.143,0-0.285-0.061-0.383-0.179C7.042,8.716,7.07,8.4,7.282,8.223l6.246-5.24      c0.213-0.177,0.528-0.15,0.704,0.062c0.178,0.211,0.15,0.527-0.062,0.704l-6.246,5.24C7.831,9.067,7.717,9.106,7.604,9.106z\"></path>
\t\t\t</g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M25.397,9.106c-0.113,0-0.227-0.039-0.321-0.117l-6.247-5.24c-0.211-0.178-0.239-0.493-0.062-0.705      c0.179-0.211,0.493-0.239,0.705-0.062l6.247,5.24c0.211,0.178,0.239,0.493,0.062,0.705C25.682,9.045,25.54,9.106,25.397,9.106z\"></path>
\t\t\t</g>
\t\t</g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M31.275,14.988H1.725C0.774,14.988,0,14.214,0,13.263v-3.198c0-0.951,0.774-1.725,1.725-1.725h29.55    c0.951,0,1.725,0.774,1.725,1.725v3.198C33,14.214,32.227,14.988,31.275,14.988z M1.725,9.339C1.325,9.339,1,9.664,1,10.064v3.198    c0,0.4,0.325,0.725,0.725,0.725h29.55c0.399,0,0.725-0.325,0.725-0.725v-3.198c0-0.4-0.325-0.725-0.725-0.725H1.725z\"></path>
\t</g>
\t<g>
\t\t<path d=\"M9.255,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C9.755,25.825,9.532,26.048,9.255,26.048z\"></path>
\t\t<path d=\"M14.085,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C14.585,25.825,14.362,26.048,14.085,26.048z\"></path>
\t\t<path d=\"M18.915,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C19.415,25.825,19.191,26.048,18.915,26.048z\"></path>
\t\t<path d=\"M23.745,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C24.245,25.825,24.021,26.048,23.745,26.048z\"></path>
\t</g>
</g>
</svg>
</span>
        </a>
    </li>
    <li class=\"logged-in-link\">
        <div class=\"dropdown user-menu\">
            <a href=\"#\" id=\"usermenu\" class=\"user dropdown-toggle menuItem\" style=\"margin-top: 17px;\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "picture", [], "any", false, false, false, 103))), "html", null, true);
        echo "\" height=\"27\" width=\"27\" class=\"rounded-circle\" alt=\"Avatar de  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "fullName", [], "any", false, false, false, 103), "html", null, true);
        echo "\"/>
                <span class=\"name\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "fullName", [], "any", false, false, false, 104), "html", null, true);
        echo "</span>
            </a>
            <div class=\"dropdown-menu\" style=\"min-width: 200px; z-index: 2000; width: auto !important; position: absolute; transform: translate3d(0px, 62px, 0px); top: 0px; left: 0px; will-change: transform;\" x-placement=\"bottom-start\">
                <a class=\"dropdown-item\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_seller");
        echo "\">
                    Dashboard   </a>
";
        // line 153
        echo "                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#requests\">
                    Demandes   </a>
                <div id=\"requests\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_new");
        echo "\">
                        Faites une demande      </a>
                    <a class=\"dropdown-item\" href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("demande_index");
        echo "\">
                        Gérer vos demandes      </a>
                </div>
                <a class=\"dropdown-item\" href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_profile");
        echo "\">
                    Mes Paramètres   </a>

                <a class=\"dropdown-item\" href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_proposal");
        echo "\">
                    Mes Services   </a>

                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" id=\"logout-link\" href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
        echo "\">
                    Déconnexion   </a>
            </div>
        </div></li>
    <li class=\"logged-in-link mr-lg-0 mr-2\">
        <a class=\"menuItem btn btn-success text-white\">0€</a>
    </li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "seller/seller_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 168,  189 => 164,  183 => 161,  177 => 158,  172 => 156,  167 => 153,  162 => 107,  156 => 104,  150 => 103,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <li class=\"logged-in-link\">
        <a class=\"menuItem\" href=\"#freelancers\">
    <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
      <img width=\"135\" src=\"{{ asset('/uploads/images/big-users.png') }}\" style=\"width: 35px;height: 35px;top: -10px;\">
    </span>
        </a>
    </li>
    <li class=\"logged-in-link\">
        <a class=\"bell menuItem\" data-toggle=\"dropdown\" title=\"Notifications\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 229.238 229.238\" style=\"enable-background:new 0 0 229.238 229.238;\" xml:space=\"preserve\">
<path d=\"M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928
\tc-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937
\tc0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175
\tc4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222
\tH135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845
\tc31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928
\tc0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z\"></path>

</svg>
</span>
            <span class=\"total-user-count count c-notifications-header\"></span>
        </a>
        <div class=\"dropdown-menu notifications-dropdown\"><h3 class=\"dropdown-header\"> Notifications (0) <a class=\"float-right make-black\" href=\"#notifications\" style=\"color:black;\">View Notifications</a></h3><h6 class=\"text-center mt-3\">No Notifications Are Available</h6></div>
    </li>
    <li class=\"logged-in-link\">
        <a class=\"message menuItem\" data-toggle=\"dropdown\" title=\"Inbox\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\"><!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\tL338.213,256L482,112.212V399.787z\"></path>
\t</g>
\t</g>

</svg>
</span>
            <span class=\"total-user-count count c-messages-header\"></span>
        </a>
        <div class=\"dropdown-menu messages-dropdown\"><h3 class=\"dropdown-header\"> Inbox (0) <a class=\"float-right make-black\" href=\"#conversations/inbox\" style=\"color:black;\">View Inbox</a></h3><h6 class=\"text-center mt-3\"> No Messages Are Available </h6></div>
    </li>
    <li class=\"logged-in-link\">
        <a href=\"#favorites\" class=\"heart menuItem\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M474.644,74.27C449.391,45.616,414.358,29.836,376,29.836c-53.948,0-88.103,32.22-107.255,59.25
\t\t\tc-4.969,7.014-9.196,14.047-12.745,20.665c-3.549-6.618-7.775-13.651-12.745-20.665c-19.152-27.03-53.307-59.25-107.255-59.25
\t\t\tc-38.358,0-73.391,15.781-98.645,44.435C13.267,101.605,0,138.213,0,177.351c0,42.603,16.633,82.228,52.345,124.7
\t\t\tc31.917,37.96,77.834,77.088,131.005,122.397c19.813,16.884,40.302,34.344,62.115,53.429l0.655,0.574
\t\t\tc2.828,2.476,6.354,3.713,9.88,3.713s7.052-1.238,9.88-3.713l0.655-0.574c21.813-19.085,42.302-36.544,62.118-53.431
\t\t\tc53.168-45.306,99.085-84.434,131.002-122.395C495.367,259.578,512,219.954,512,177.351
\t\t\tC512,138.213,498.733,101.605,474.644,74.27z M309.193,401.614c-17.08,14.554-34.658,29.533-53.193,45.646
\t\t\tc-18.534-16.111-36.113-31.091-53.196-45.648C98.745,312.939,30,254.358,30,177.351c0-31.83,10.605-61.394,29.862-83.245
\t\t\tC79.34,72.007,106.379,59.836,136,59.836c41.129,0,67.716,25.338,82.776,46.594c13.509,19.064,20.558,38.282,22.962,45.659
\t\t\tc2.011,6.175,7.768,10.354,14.262,10.354c6.494,0,12.251-4.179,14.262-10.354c2.404-7.377,9.453-26.595,22.962-45.66
\t\t\tc15.06-21.255,41.647-46.593,82.776-46.593c29.621,0,56.66,12.171,76.137,34.27C471.395,115.957,482,145.521,482,177.351
\t\t\tC482,254.358,413.255,312.939,309.193,401.614z\"></path>
\t</g>
</g>
</svg>
 </span>
            <span>
  <span class=\"total-user-count count c-favorites\"></span>
  </span>
        </a>
    </li>
    <li class=\"logged-in-link\">
        <a class=\"menuItem\" href=\"#cart\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 33 33\" style=\"enable-background:new 0 0 33 33;\" xml:space=\"preserve\">
<g xmlns=\"http://www.w3.org/2000/svg\">
\t<g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M27.049,30.134H5.951c-0.99,0-1.81-0.743-1.908-1.728L2.659,14.537c-0.014-0.141,0.032-0.281,0.127-0.385    c0.095-0.105,0.229-0.165,0.371-0.165h26.688c0.141,0,0.276,0.06,0.371,0.165c0.095,0.104,0.141,0.245,0.127,0.385l-1.383,13.869    C28.86,29.391,28.039,30.134,27.049,30.134z M3.708,14.988l1.329,13.319c0.047,0.472,0.439,0.827,0.913,0.827h21.099    c0.474,0,0.867-0.355,0.914-0.827l1.329-13.319H3.708z\"></path>
\t\t<g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M7.604,9.106c-0.143,0-0.285-0.061-0.383-0.179C7.042,8.716,7.07,8.4,7.282,8.223l6.246-5.24      c0.213-0.177,0.528-0.15,0.704,0.062c0.178,0.211,0.15,0.527-0.062,0.704l-6.246,5.24C7.831,9.067,7.717,9.106,7.604,9.106z\"></path>
\t\t\t</g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M25.397,9.106c-0.113,0-0.227-0.039-0.321-0.117l-6.247-5.24c-0.211-0.178-0.239-0.493-0.062-0.705      c0.179-0.211,0.493-0.239,0.705-0.062l6.247,5.24c0.211,0.178,0.239,0.493,0.062,0.705C25.682,9.045,25.54,9.106,25.397,9.106z\"></path>
\t\t\t</g>
\t\t</g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M31.275,14.988H1.725C0.774,14.988,0,14.214,0,13.263v-3.198c0-0.951,0.774-1.725,1.725-1.725h29.55    c0.951,0,1.725,0.774,1.725,1.725v3.198C33,14.214,32.227,14.988,31.275,14.988z M1.725,9.339C1.325,9.339,1,9.664,1,10.064v3.198    c0,0.4,0.325,0.725,0.725,0.725h29.55c0.399,0,0.725-0.325,0.725-0.725v-3.198c0-0.4-0.325-0.725-0.725-0.725H1.725z\"></path>
\t</g>
\t<g>
\t\t<path d=\"M9.255,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C9.755,25.825,9.532,26.048,9.255,26.048z\"></path>
\t\t<path d=\"M14.085,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C14.585,25.825,14.362,26.048,14.085,26.048z\"></path>
\t\t<path d=\"M18.915,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C19.415,25.825,19.191,26.048,18.915,26.048z\"></path>
\t\t<path d=\"M23.745,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C24.245,25.825,24.021,26.048,23.745,26.048z\"></path>
\t</g>
</g>
</svg>
</span>
        </a>
    </li>
    <li class=\"logged-in-link\">
        <div class=\"dropdown user-menu\">
            <a href=\"#\" id=\"usermenu\" class=\"user dropdown-toggle menuItem\" style=\"margin-top: 17px;\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                <img src=\"{{ asset('/uploads/images/'~app.user.picture) }}\" height=\"27\" width=\"27\" class=\"rounded-circle\" alt=\"Avatar de  {{ app.user.fullName }}\"/>
                <span class=\"name\">{{ app.user.fullName }}</span>
            </a>
            <div class=\"dropdown-menu\" style=\"min-width: 200px; z-index: 2000; width: auto !important; position: absolute; transform: translate3d(0px, 62px, 0px); top: 0px; left: 0px; will-change: transform;\" x-placement=\"bottom-start\">
                <a class=\"dropdown-item\" href=\"{{ path('dashboard_seller') }}\">
                    Dashboard   </a>
{#                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#selling\">
                    Selling   </a>
                <div id=\"selling\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"#proposals/view_proposals\">
                        My Proposals      </a>
                </div>
                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#buying\">
                    Buying   </a>
                <div id=\"buying\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"#buying_orders\">
                        Orders      </a>
                    <a class=\"dropdown-item\" href=\"#purchases\">
                        Purchases      </a>
                    <a class=\"dropdown-item\" href=\"#favorites\">
                        Favorites      </a>
                </div>
                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#requests\">
                    Requests   </a>
                <div id=\"requests\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"#requests/post_request\">
                        Post A Request      </a>
                    <a class=\"dropdown-item\" href=\"#requests/manage_requests\">
                        Manage Requests      </a>
                </div>
                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#contacts\">
                    Contacts   </a>
                <div id=\"contacts\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"#manage_contacts?my_buyers\">
                        My Buyers      </a>
                    <a class=\"dropdown-item\" href=\"#manage_contacts?my_sellers\">
                        My Sellers      </a>
                </div>
                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#referrals\">
                    My Referrals   </a>
                <div id=\"referrals\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"#my_referrals\" data-target=\"#referrals\">
                        User Referrals      </a>
                    <a class=\"dropdown-item\" href=\"#proposal_referrals\" data-target=\"#referrals\">
                        Proposal Referrals      </a>
                </div>
                <a class=\"dropdown-item\" href=\"#conversations/inbox\">
                    Inbox Messages   </a>
                <a class=\"dropdown-item\" href=\"{{ path('account_index') }}\">
                    Mon Profil   </a>#}
                <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#requests\">
                    Demandes   </a>
                <div id=\"requests\" class=\"dropdown-submenu collapse\">
                    <a class=\"dropdown-item\" href=\"{{ path('demande_new') }}\">
                        Faites une demande      </a>
                    <a class=\"dropdown-item\" href=\"{{ path('demande_index') }}\">
                        Gérer vos demandes      </a>
                </div>
                <a class=\"dropdown-item\" href=\"{{ path('account_profile') }}\">
                    Mes Paramètres   </a>

                <a class=\"dropdown-item\" href=\"{{ path('create_proposal') }}\">
                    Mes Services   </a>

                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" id=\"logout-link\" href=\"{{ path('account_logout') }}\">
                    Déconnexion   </a>
            </div>
        </div></li>
    <li class=\"logged-in-link mr-lg-0 mr-2\">
        <a class=\"menuItem btn btn-success text-white\">0€</a>
    </li>", "seller/seller_nav.html.twig", "/home/vagrant/code/lenil/templates/seller/seller_nav.html.twig");
    }
}
