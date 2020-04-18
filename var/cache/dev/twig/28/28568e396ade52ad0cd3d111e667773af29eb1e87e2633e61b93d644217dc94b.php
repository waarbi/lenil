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

/* proposals/test.html.twig */
class __TwigTemplate_e034b5bc7297efe2e0cc24b6b2aa50b043f47cf29272c75004f9d15b608029f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proposals/test.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\" class=\"ui-toolkit\">
<head>
    <title>GigToDo - Edit Proposal</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Purchase the GigToDo script and be equipped with the best freelance marketplace script in the world.\">
    <meta name=\"keywords\" content=\"gigtodo,freelancer, agents, services, online marketplace, professional services, fiverr, people per hour, upwork,\">
    <meta name=\"author\" content=\"Pixinal Studio\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100\" rel=\"stylesheet\">
    <link href=\"../styles/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
    <link href=\"../styles/styles.css\" rel=\"stylesheet\">
    <link href=\"../plugins/paymentGateway/proposals/styles/styles.css\" rel=\"stylesheet\">
    <link href=\"../styles/user_nav_styles.css\" rel=\"stylesheet\">
    <link href=\"../font_awesome/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"../styles/owl.carousel.css\" rel=\"stylesheet\">
    <link href=\"../styles/owl.theme.default.css\" rel=\"stylesheet\">
    <link href=\"../styles/tagsinput.css\" rel=\"stylesheet\" >
    <link href=\"../styles/sweat_alert.css\" rel=\"stylesheet\">
    <link href=\"../styles/animate.css\" rel=\"stylesheet\">
    <link href=\"../styles/croppie.css\" rel=\"stylesheet\">
    <link href=\"../styles/create-proposal.css\" rel=\"stylesheet\">
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src=\"../js/ie.js\"></script>
    <script type=\"text/javascript\" src=\"../js/sweat_alert.js\"></script>
    <script type=\"text/javascript\" src=\"../js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"../js/croppie.js\"></script>
    <script src=\"https://checkout.stripe.com/checkout.js\"></script>
    <script src=\"../plugins/paymentGateway/proposals/javascript/javascript.js\"></script>
    <link rel=\"shortcut icon\" href=\"../images/gigtodoFav.ico\" type=\"image/x-icon\">
    <script>var videoOrNotVideo;</script>
</head>
<body class=\"is-responsive\">



<link href=\"https://www.gigtodo.com/styles/scoped_responsive_and_nav.css\" rel=\"stylesheet\">
<link href=\"https://www.gigtodo.com/styles/vesta_homepage.css\" rel=\"stylesheet\">

<div id=\"gnav-header\" class=\"gnav-header global-nav clear gnav-3\">
    <header id=\"gnav-header-inner\" class=\"gnav-header-inner clear apply-nav-height col-group has-svg-icons body-max-width\">
        <div class=\"col-xs-12\">
            <div id=\"gigtodo-logo\" class=\"apply-nav-height gigtodo-logo-svg gigtodo-logo-svg-logged-in loggedInLogo\">
                <a href=\"https://www.gigtodo.com\">
                    <img class=\"desktop\" src=\"https://www.gigtodo.com/images/sample.png\" width=\"150\">
                </a>
            </div>
            <button id=\"mobilemenu\" class=\"unstyled-button mobile-catnav-trigger apply-nav-height icon-b-1 tablet-catnav-enabled \">
                <span class=\"screen-reader-only\"></span>
                <div class=\"text-gray-lighter text-body-larger\">
          <span class=\"gigtodo-icon hamburger-icon nav-icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
              <path d=\"M20,6H4A1,1,0,1,1,4,4H20A1,1,0,0,1,20,6Z\" />
              <path d=\"M20,13H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,13Z\" />
              <path d=\"M20,20H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,20Z\" />
            </svg>
          </span>
                </div>
            </button>
            <div class=\"catnav-search-bar search-browse-wrapper with-catnav\">
                <div class=\"search-browse-inner\">
                    <form id=\"gnav-search\" class=\"search-nav expanded-search apply-nav-height\" method=\"post\">
                        <div class=\"gnav-search-inner clearable\">
                            <label for=\"search-query\" class=\"screen-reader-only\">Search for items</label>
                            <div class=\"search-input-wrapper text-field-wrapper\">
                                <input id=\"search-query\" class=\"rounded\" name=\"search_query\"
                                       placeholder=\"Find Services\" value=\"\"  autocomplete=\"off\">
                            </div>
                            <div class=\"search-button-wrapper hide\">
                                <button class=\"btn btn-primary\" name=\"search\" type=\"submit\" value=\"Search\">
                                    Search                </button>
                            </div>
                        </div>
                        <ul class=\"search-bar-panel d-none\"></ul>
                    </form>
                </div>
            </div>
            <ul class=\"account-nav apply-nav-height\">
                <li class=\"logged-in-link\">
                    <a class=\"menuItem\" href=\"https://www.gigtodo.com/freelancers\">
    <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
      <img width=\"135\" src=\"https://www.gigtodo.com/images/big-users.png\" style=\"width: 35px;height: 35px;top: -10px;\">
    </span>
                    </a>
                </li>
                <li class=\"logged-in-link\">
                    <a class=\"bell menuItem\" data-toggle=\"dropdown\" title=\"Notifications\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\"><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 229.238 229.238\" style=\"enable-background:new 0 0 229.238 229.238;\" xml:space=\"preserve\">
<path d=\"M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928
\tc-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937
\tc0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175
\tc4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222
\tH135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845
\tc31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928
\tc0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z\"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</span>
                        <span class=\"total-user-count count c-notifications-header\"></span>
                    </a>
                    <div class=\"dropdown-menu notifications-dropdown\">
                    </div>
                </li>
                <li class=\"logged-in-link\">
                    <a class=\"message menuItem\" data-toggle=\"dropdown\" title=\"Inbox\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\"><!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\tL338.213,256L482,112.212V399.787z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</span>
                        <span class=\"total-user-count count c-messages-header\"></span>
                    </a>
                    <div class=\"dropdown-menu messages-dropdown\">
                    </div>
                </li>
                <li class=\"logged-in-link\">
                    <a href=\"https://www.gigtodo.com/favorites\" class=\"heart menuItem\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
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
\t\t\tC482,254.358,413.255,312.939,309.193,401.614z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
 </span>
                        <span>
  <span class=\"total-user-count count c-favorites\"></span>
  </span>
                    </a>
                </li>
                <li class=\"logged-in-link\">
                    <a class=\"menuItem\" href=\"https://www.gigtodo.com/cart\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 33 33\" style=\"enable-background:new 0 0 33 33;\" xml:space=\"preserve\">
<g xmlns=\"http://www.w3.org/2000/svg\">
\t<g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M27.049,30.134H5.951c-0.99,0-1.81-0.743-1.908-1.728L2.659,14.537c-0.014-0.141,0.032-0.281,0.127-0.385    c0.095-0.105,0.229-0.165,0.371-0.165h26.688c0.141,0,0.276,0.06,0.371,0.165c0.095,0.104,0.141,0.245,0.127,0.385l-1.383,13.869    C28.86,29.391,28.039,30.134,27.049,30.134z M3.708,14.988l1.329,13.319c0.047,0.472,0.439,0.827,0.913,0.827h21.099    c0.474,0,0.867-0.355,0.914-0.827l1.329-13.319H3.708z\"/>
\t\t<g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M7.604,9.106c-0.143,0-0.285-0.061-0.383-0.179C7.042,8.716,7.07,8.4,7.282,8.223l6.246-5.24      c0.213-0.177,0.528-0.15,0.704,0.062c0.178,0.211,0.15,0.527-0.062,0.704l-6.246,5.24C7.831,9.067,7.717,9.106,7.604,9.106z\"/>
\t\t\t</g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M25.397,9.106c-0.113,0-0.227-0.039-0.321-0.117l-6.247-5.24c-0.211-0.178-0.239-0.493-0.062-0.705      c0.179-0.211,0.493-0.239,0.705-0.062l6.247,5.24c0.211,0.178,0.239,0.493,0.062,0.705C25.682,9.045,25.54,9.106,25.397,9.106z\"/>
\t\t\t</g>
\t\t</g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M31.275,14.988H1.725C0.774,14.988,0,14.214,0,13.263v-3.198c0-0.951,0.774-1.725,1.725-1.725h29.55    c0.951,0,1.725,0.774,1.725,1.725v3.198C33,14.214,32.227,14.988,31.275,14.988z M1.725,9.339C1.325,9.339,1,9.664,1,10.064v3.198    c0,0.4,0.325,0.725,0.725,0.725h29.55c0.399,0,0.725-0.325,0.725-0.725v-3.198c0-0.4-0.325-0.725-0.725-0.725H1.725z\"/>
\t</g>
\t<g>
\t\t<path d=\"M9.255,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C9.755,25.825,9.532,26.048,9.255,26.048z\"/>
\t\t<path d=\"M14.085,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C14.585,25.825,14.362,26.048,14.085,26.048z\"/>
\t\t<path d=\"M18.915,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C19.415,25.825,19.191,26.048,18.915,26.048z\"/>
\t\t<path d=\"M23.745,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C24.245,25.825,24.021,26.048,23.745,26.048z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</span>
                    </a>
                </li>
                <li class=\"logged-in-link\">
                    <div class=\"dropdown user-menu\">
                        <a href=\"#\" id=\"usermenu\" class=\"user dropdown-toggle menuItem\" style=\"margin-top: 17px;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"https://www.gigtodo.com/user_images/ty_1574032240.png\" width=\"27\" height=\"27\" class=\"rounded-circle\">
                            <span class=\"name\">tyrone</span>
                        </a>
                        <div class=\"dropdown-menu \" style=\"min-width:200px; width:auto!important;z-index:2000;\">
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/dashboard\">
                                Dashboard   </a>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#selling\">
                                Selling   </a>
                            <div id=\"selling\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/selling_orders\">
                                    Orders      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/proposals/view_proposals\">
                                    My Proposals      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/proposals/create_coupon\">
                                    Create A Coupon      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/requests/buyer_requests\">
                                    Buyer Requests      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/revenue\">
                                    Revenues      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/withdrawal_requests\">
                                    Withdrawal Requests      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#buying\">
                                Buying   </a>
                            <div id=\"buying\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/buying_orders\">
                                    Orders      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/purchases\">
                                    Purchases      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/favorites\">
                                    Favorites      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#requests\">
                                Requests   </a>
                            <div id=\"requests\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/requests/post_request\">
                                    Post A Request      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/requests/manage_requests\">
                                    Manage Requests      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#contacts\">
                                Contacts   </a>
                            <div id=\"contacts\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/manage_contacts?my_buyers\">
                                    My Buyers      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/manage_contacts?my_sellers\">
                                    My Sellers      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#referrals\">
                                My Referrals   </a>
                            <div id=\"referrals\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/my_referrals\" data-target=\"#referrals\">
                                    User Referrals      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/proposal_referrals\" data-target=\"#referrals\">
                                    Proposal Referrals      </a>
                            </div>
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/conversations/inbox\">
                                Inbox Messages   </a>
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/tyrone\">
                                My Profile   </a>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#settings\">
                                Settings   </a>
                            <div id=\"settings\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/settings?profile_settings\">
                                    Profile Settings      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/settings?account_settings\">
                                    Account Settings      </a>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/logout\">
                                Logout   </a>
                        </div>
                    </div></li>
                <li class=\"logged-in-link mr-lg-0 mr-2\">
                    <a class=\"menuItem btn btn-success text-white\">&#036;0</a>
                </li>      </ul>
        </div>
    </header>
</div>

<div class=\"clearfix\"></div>
<div class=\"mp-box mp-box-white notop d-lg-block d-none\">

    <div class=\"container\">

        <div class=\"box-row\">

            <ul class=\"main-cat-list active\">

                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/dashboard\">Dashboard</a>

                </li>

                <li class=\"\">

                    <a href=\"#\">Selling <i class=\"fa fa-fw fa-caret-down\"></i></a>

                    <div class=\"menu-cont\">

                        <ul>


                            <li>

                                <a href=\"https://www.gigtodo.com/selling_orders\">Orders</a>

                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/proposals/view_proposals\">My Proposals</a>


                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/proposals/create_coupon\">Create A Coupon</a>


                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/requests/buyer_requests\">Buyer Requests</a>

                            </li>

                            <li>
                                <a href=\"https://www.gigtodo.com/revenue\">Revenues</a>
                            </li>

                            <li>
                                <a href=\"https://www.gigtodo.com/withdrawal_requests\">Withdrawal Requests</a>
                            </li>


                        </ul>

                    </div>

                </li>

                <li class=\"\">

                    <a href=\"#\">

                        Buying <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/buying_orders\">

                                    Orders
                                </a>

                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/purchases\">

                                    Purchases
                                </a>

                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/favorites\">

                                    Favorites
                                </a>

                            </li>

                        </ul>

                    </div>

                </li>





                <li class=\"\">

                    <a href=\"#\">

                        Requests <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/requests/manage_requests\">

                                    Manage Requests

                                </a>


                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/requests/post_request\">

                                    Post A Request
                                </a>


                            </li>

                        </ul>

                    </div>

                </li>


                <li class=\"\">

                    <a href=\"#\">

                        Contacts <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/manage_contacts?my_buyers\">

                                    My Buyers
                                </a>

                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/manage_contacts?my_sellers\">

                                    My Sellers
                                </a>

                            </li>

                        </ul>

                    </div>

                </li>



                <li class=\"\">

                    <a href=\"#\">My Referrals <i class=\"fa fa-fw fa-caret-down\"></i></a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/my_referrals\">User Referrals</a>

                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/proposal_referrals\">Proposal Referrals</a>

                            </li>

                        </ul>

                    </div>

                </li>



                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/conversations/inbox\">Inbox Messages</a>

                </li>

                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/notifications\">Notifications</a>

                </li>


                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/tyrone\">

                        My Profile
                    </a>


                </li>


                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/settings\">

                        Settings <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/settings?profile_settings\">Profile Settings</a>


                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/settings?account_settings\">Account Settings</a>

                            </li>

                        </ul>

                    </div>

                </li>



            </ul>


        </div>

    </div>


</div><div class=\"clearfix\"></div>
<div class=\"cat-mobile\" id=\"gigtodo-modal-container\" style=\"display:none;\"><!--- cat-mobile Starts --->
    <div data-overlay-mask=\"\" class=\"overlay-mask mobile-catnav-overlay-mask\" data-aria-hidden=\"true\"></div>
    <div data-overlay-content-wrapper=\"\" class=\"overlay-mask overlay-content-wrapper mobile-catnav-overlay-mask\">
        <div class=\"mobile-catnav-wrapper overlay-region position-relative p-xs-0\" id=\"mobile-catnav-overlay\" aria-hidden=\"false\" data-overlay-has-trigger=\"true\" style=\"top: 0px;\">
            <div data-ui=\"mobile-cat-nav\" class=\"mobile-cat-nav bg-gray-lighter pb-xs-4 width-full position-fixed animated\" style=\"height: 100vh;\">

                <div class=\"bg-white display-flex-md show-md pt-md-3 pl-md-2 pb-md-3\">
                    <div class=\"flex-md-5 pl-md-0\">
                        <a role=\"button\" href=\"https://www.gigtodo.com\">
                            <img src=\"https://www.gigtodo.com/images/sample.png\" width=\"158\">
                        </a>
                    </div>
                    <div class=\"flex-md-1 pr-md-2\">
                        <button class=\"btn-link text-right overlay-close flex-xs-1 justify-self-flex-end border-0 p-md-0\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-header\" class=\"mobile-catnav-header bb-xs-1 align-items-center bg-white display-flex-xs flex-nowrap position-relative height-50px\">
                    <button class=\"mobile-catnav-back-btn btn-link overlay-back p-xs-2 text-left display-none flex-xs-1 align-self-flex-start z-index-1 position-absolute\" data-subnav-id=\"0\" data-ternav-id=\"0\" data-topnav-name=\"\" data-subnav-name=\"\">
                        <span class=\"screen-reader-only\">Go Back</span>
                        <span class=\"gigtodo-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                <path d=\"M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z\"></path>
              </svg>
            </span>
                    </button>
                    <div class=\"flex-xs-4 width-full pt-md-4 pb-md-4 pl-xs-2\">
                        <h6 id=\"mobile-catnav-header-title\" class=\"text-left position-absolute vertical-center\"><!--  <a href=\"https://www.gigtodo.com\"><img src=\"images/gigtodoFav.ico\" class=\"rounded\" title='Home' alt='Home'/></a> --> Browse Categories</h6>
                        <h6 id=\"mobile-sub-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8\"></h6>
                        <h6 id=\"mobile-tertiary-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8 display-none\"></h6>
                    </div>
                    <div class=\"flex-xs-1 width-full\">
                        <button class=\"show-xs show-sm btn-link p-xs-2 overlay-close border-0 float-right\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-scroll-wrapper\" class=\"height-full overflow-y-scroll\">

                    <div class=\"mobile-topnav bg-white animated\">
                        <ul data-ui=\"mobile-top-catnav-container\" class=\"mobile-top-catnav-container list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"11\" data-name=\"Graphics &amp; Design\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Graphics &amp; Design</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"12\" data-name=\"Digital Marketing\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Digital Marketing</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"13\" data-name=\"Writing & Translation\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Writing & Translation</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"14\" data-name=\"Video & Animation
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Video & Animation
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"16\" data-name=\"Programming & Tech
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Programming & Tech
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"17\" data-name=\"Business
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Business
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"18\" data-name=\"Fun & Lifestyle
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Fun & Lifestyle
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"19\" data-name=\"Music &amp; Audio\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Music &amp; Audio</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-11\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/graphics-design\">
                                    View All Graphics &amp; Design                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/logo-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Logo Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/business-cards-amp-stationery\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Cards &amp; Stationery</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/illustration\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Illustration</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/cartoons-caricatures\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Cartoons Caricatures</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/flyers-posters\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Flyers Posters</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/book-covers-packaging\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Book Covers & Packaging</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/web-amp-mobile-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web &amp; Mobile Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/social-media-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Social Media Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/banner-ads\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Banner Ads</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/photoshop-editing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Photoshop Editing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/3d-2d-models\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">3D & 2D Models</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/t-shirts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">T-Shirts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/presentation-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Presentation Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/dsdsds\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-12\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/digital-marketing\">
                                    View All Digital Marketing                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/social-media-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Social Media Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/seo\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">SEO</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/web-traffic\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web Traffic</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/content-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Content Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/video-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Video Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/email-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Email Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/search-display-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Search & Display Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/marketing-strategy\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Marketing Strategy</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/web-analytics\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web Analytics</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/influencer-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Influencer Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/local-listings\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Local Listings</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/domain-research\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Domain Research</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/e-commerce-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">E-Commerce Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/mobile-advertising\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Mobile Advertising</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-13\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/writing-translation\">
                                    View All Writing & Translation                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/resumes-cover-letters\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Resumes & Cover Letters</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/proofreading-editing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Proofreading & Editing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/translation\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Translation</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/creative-writing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Creative Writing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/business-copywriting\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Copywriting</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/research-summaries\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Research & Summaries</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/articles-blog-posts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Articles & Blog Posts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/press-releases\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Press Releases</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/transcription\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Transcription</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/legal-writing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Legal Writing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-14\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/video-animation\">
                                    View All Video & Animation
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/whiteboard-explainer-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Whiteboard & Explainer Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/intros-animated-logos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Intros & Animated Logos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/promotional-brand-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Promotional & Brand Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/editing-post-production\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Editing & Post Production</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/lyric-music-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Lyric & Music Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/spokespersons-testimonials\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Spokespersons & Testimonials</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-16\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/programming-tech\">
                                    View All Programming & Tech
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/wordpress\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">WordPress</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/web-programming\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web Programming</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/website-builders-cms\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Website Builders & CMS</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/ecommerce\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Ecommerce</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/mobile-apps-web\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Mobile Apps & Web</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/desktop-applications\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Desktop applications</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/support-it\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Support & IT</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/chatbots\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Chatbots</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/data-analysis-reports\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Data Analysis & Reports</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/convert-files\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Convert Files</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/databases\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Databases</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/user-testing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">User Testing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-17\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/business\">
                                    View All Business
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/virtual-assistant\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Virtual Assistant</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/market-research\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Market Research</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/business-plans\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Plans</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/branding-services\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Branding Services</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/legal-consulting\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Legal Consulting</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/financial-consulting\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Financial Consulting</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/business-tips\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Tips</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/presentations\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Presentations</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/career-advice\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Career Advice</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/flyer-distribution\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Flyer Distribution</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-18\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/fun-lifestyle\">
                                    View All Fun & Lifestyle
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/online-lessons\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Online Lessons</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/arts-crafts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Arts & Crafts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/relationship-advice\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Relationship Advice</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/health-nutrition-fitness\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Health, Nutrition & Fitness</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/astrology-readings\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Astrology & Readings</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/spiritual-healing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Spiritual & Healing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/family-genealogy\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Family & Genealogy</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/collectibles\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Collectibles</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/greeting-cards-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Greeting Cards & Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/viral-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Viral Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/pranks-stunts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Pranks & Stunts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/celebrity-impersonators\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Celebrity Impersonators</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-19\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/music-audio\">
                                    View All Music &amp; Audio                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/voice-over\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Voice Over</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/mixing-mastering\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Mixing & Mastering</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/producers-composers\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Producers & Composers</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/singer-songwriters\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Singer-Songwriters</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/session-musicians-singers\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Session Musicians & Singers</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/jingles-drops\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Jingles & Drops</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/sound-effects\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Sound Effects</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- cat-mobile Ends --->
<div class=\"user-mobile\" id=\"gigtodo-modal-container\" style=\"display: none;\">
    <!--- user-mobile Starts --->
    <div data-overlay-mask=\"\" class=\"overlay-mask mobile-catnav-overlay-mask\" data-aria-hidden=\"true\"></div>
    <div data-overlay-content-wrapper=\"\" class=\"overlay-mask overlay-content-wrapper mobile-catnav-overlay-mask\">
        <div class=\"mobile-catnav-wrapper overlay-region position-relative p-xs-0\" id=\"mobile-catnav-overlay\" aria-hidden=\"false\" data-overlay-has-trigger=\"true\" style=\"top: 0px;\">
            <div data-ui=\"mobile-cat-nav\" class=\"mobile-cat-nav bg-gray-lighter pb-xs-4 width-full position-fixed animated\" style=\"height: 100vh;\">
                <div class=\"bg-white display-flex-md show-md pt-md-3 pl-md-2 pb-md-3\">
                    <div class=\"flex-md-5 pl-md-0\">
                        <a role=\"button\" href=\"/?ref=catnav-logo\">
                            <img src=\"https://www.gigtodo.com/images/sample.png\" width=\"158\">
                        </a>
                    </div>
                    <div class=\"flex-md-1 pr-md-2\">
                        <button class=\"btn-link text-right overlay-close flex-xs-1 justify-self-flex-end border-0 p-md-0\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>
                <div data-ui=\"mobile-catnav-header\" class=\"mobile-catnav-header bb-xs-1 align-items-center bg-white display-flex-xs flex-nowrap position-relative height-50px\">
                    <button class=\"mobile-catnav-back-btn btn-link overlay-back p-xs-2 text-left display-none flex-xs-1 align-self-flex-start z-index-1 position-absolute\" data-subnav-id=\"0\" data-ternav-id=\"0\" data-topnav-name=\"\" data-subnav-name=\"\">
            <span class=\"gigtodo-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" focusable=\"false\">
                <path d=\"M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z\"></path>
              </svg>
            </span>
                    </button>
                    <div class=\"flex-xs-4 width-full pt-md-4 pb-md-4 pl-xs-2\">
                        <h6 id=\"mobile-catnav-header-title\" class=\"text-left position-absolute vertical-center\">User Menu</h6>
                        <h6 id=\"mobile-sub-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8\"></h6>
                        <h6 id=\"mobile-tertiary-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8 display-none\"></h6>
                    </div>
                    <div class=\"flex-xs-1 width-full\">
                        <button class=\"show-xs show-sm btn-link p-xs-2 overlay-close border-0 float-right\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>
                <div data-ui=\"mobile-catnav-scroll-wrapper\" class=\"height-full overflow-y-scroll\">
                    <div class=\"mobile-topnav bg-white animated\">
                        <ul class=\"mobile-top-catnav-container list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\" data-uid=\"d-1\" data-name=\"Dashboard\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g transform=\"translate(1 1)\">
\t<g>
\t\t<g>
\t\t\t<path stroke=\"black\" stroke-width=\"10\" d=\"M336.067,208.92l-40.96,24.747c-14.507,8.533-29.867,16.213-44.373,23.04c-4.267,1.707-9.387,4.267-14.507,6.827
\t\t\t\tc-17.92,9.387-27.307,29.013-23.04,48.64c3.413,15.36,16.213,28.16,31.573,31.573c3.413,0.853,6.827,0.853,10.24,0.853
\t\t\t\tc16.213,0,30.72-9.387,38.4-23.893c1.707-4.267,4.267-9.387,6.827-14.507c7.68-14.507,14.507-29.867,23.04-44.373l24.747-40.96
\t\t\t\tc1.707-3.413,0.853-6.827-1.707-10.24C343.747,207.213,339.48,207.213,336.067,208.92z M308.76,252.44
\t\t\t\tc-9.387,15.36-17.067,30.72-23.893,46.08c-1.707,5.12-4.267,9.387-6.827,14.507c-5.12,11.093-17.067,16.213-29.013,13.653
\t\t\t\tc-9.387-1.707-17.067-9.387-18.773-18.773c-2.56-11.947,2.56-23.893,13.653-29.013c4.267-2.56,9.387-4.267,14.507-6.827
\t\t\t\tc15.36-7.68,31.573-15.36,46.08-23.893l11.093-6.827L308.76,252.44z\"/>
\t\t\t<path stroke=\"black\" stroke-width=\"13\" d=\"M492.719,207.208c-0.108-0.575-0.27-1.146-0.492-1.702c-0.223-0.558-0.507-1.069-0.837-1.537
\t\t\t\tc-12.787-30.616-31.365-58.265-54.348-81.565c-0.324-0.482-0.701-0.944-1.135-1.378s-0.896-0.811-1.378-1.135
\t\t\t\tC388.233,74.226,324.764,45.933,255,45.933c-33.418,0-65.389,6.5-94.725,18.281c-0.575,0.108-1.146,0.27-1.701,0.492
\t\t\t\tc-0.557,0.223-1.069,0.507-1.537,0.837c-30.616,12.787-58.265,31.365-81.565,54.348c-0.482,0.324-0.944,0.701-1.378,1.135
\t\t\t\ts-0.812,0.896-1.135,1.378C27.293,168.7-1,232.169-1,301.933c0,58.027,18.773,113.493,55.467,158.72
\t\t\t\tc1.707,2.56,4.267,3.413,6.827,3.413h387.413c2.56,0,5.12-0.853,6.827-3.413C492.227,415.427,511,359.96,511,301.933
\t\t\t\tC511,268.515,504.5,236.544,492.719,207.208z M445.293,447H65.56c-11.539-14.88-21.122-30.844-28.695-47.616l23.575-9.557
\t\t\t\tc4.267-1.707,5.973-6.827,4.267-11.093c-1.707-4.267-6.827-5.973-11.093-4.267l-23.11,9.369
\t\t\t\tc-8.574-23.342-13.394-48.021-14.278-73.369H75.8c5.12,0,8.533-3.413,8.533-8.533S80.92,293.4,75.8,293.4H16.237
\t\t\t\tc0.957-26.907,6.416-52.715,15.648-76.694L55.32,226.84c0.853,0.853,2.56,0.853,3.413,0.853c3.413,0,5.973-1.707,7.68-5.12
\t\t\t\tc1.707-4.267,0-9.387-4.267-11.093l-23.672-10.237c10.699-22.831,24.906-43.721,41.922-61.967l17.59,17.59
\t\t\t\tc1.707,1.707,3.413,2.56,5.973,2.56s4.267-0.853,5.973-2.56c3.413-3.413,3.413-8.533,0-11.947l-17.59-17.59
\t\t\t\tc19.117-17.828,41.131-32.581,65.244-43.438l9.52,23.482c0.853,3.413,4.267,5.12,7.68,5.12c0.853,0,1.707,0,3.413-0.853
\t\t\t\tc4.267-1.707,5.973-6.827,4.267-11.093l-9.329-23.012c23.021-8.463,47.679-13.452,73.329-14.364v59.563
\t\t\t\tc0,5.12,3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533V63.17c26.907,0.957,52.715,6.416,76.694,15.648l-10.134,23.436
\t\t\t\tc-1.707,4.267,0,9.387,4.267,11.093c0.853,0.853,2.56,0.853,3.413,0.853c3.413,0,6.827-2.56,7.68-5.12l10.237-23.672
\t\t\t\tc22.831,10.699,43.721,24.906,61.967,41.922l-17.59,17.59c-3.413,3.413-3.413,8.533,0,11.947c1.707,1.707,3.413,2.56,5.973,2.56
\t\t\t\tc1.707,0,4.267-0.853,5.973-2.56l17.59-17.59c17.828,19.117,32.581,41.131,43.438,65.244l-23.482,9.52
\t\t\t\tc-4.267,1.707-5.973,6.827-4.267,11.093c0.853,3.413,4.267,5.12,7.68,5.12c0.853,0,1.707-0.853,3.413-0.853l23.013-9.329
\t\t\t\tc8.463,23.021,13.452,47.679,14.364,73.329H434.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h59.575
\t\t\t\tc-0.927,26.593-6.172,52.45-15.418,76.799l-23.677-10.239c-4.267-1.707-9.387,0-11.093,4.267c-1.707,4.267,0,9.387,4.267,11.093
\t\t\t\tl23.981,10.37C464.644,418.298,455.773,433.121,445.293,447z\"/>
\t\t</g>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Dashboard
                                        </div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/notifications\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">
                    <!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 229.238 229.238\" style=\"enable-background:new 0 0 229.238 229.238;\" xml:space=\"preserve\">
<path d=\"M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928
\tc-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937
\tc0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175
\tc4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222
\tH135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845
\tc31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928
\tc0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z\"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Notifications
                                            <span class=\"badge badge-pill badge-danger\"> 9 New</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/conversations/inbox\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\tL338.213,256L482,112.212V399.787z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Messages
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/favorites\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
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
\t\t\tC482,254.358,413.255,312.939,309.193,401.614z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Favorites
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/cart\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 33 33\" style=\"enable-background:new 0 0 33 33;\" xml:space=\"preserve\">
<g xmlns=\"http://www.w3.org/2000/svg\">
\t<g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M27.049,30.134H5.951c-0.99,0-1.81-0.743-1.908-1.728L2.659,14.537c-0.014-0.141,0.032-0.281,0.127-0.385    c0.095-0.105,0.229-0.165,0.371-0.165h26.688c0.141,0,0.276,0.06,0.371,0.165c0.095,0.104,0.141,0.245,0.127,0.385l-1.383,13.869    C28.86,29.391,28.039,30.134,27.049,30.134z M3.708,14.988l1.329,13.319c0.047,0.472,0.439,0.827,0.913,0.827h21.099    c0.474,0,0.867-0.355,0.914-0.827l1.329-13.319H3.708z\"/>
\t\t<g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M7.604,9.106c-0.143,0-0.285-0.061-0.383-0.179C7.042,8.716,7.07,8.4,7.282,8.223l6.246-5.24      c0.213-0.177,0.528-0.15,0.704,0.062c0.178,0.211,0.15,0.527-0.062,0.704l-6.246,5.24C7.831,9.067,7.717,9.106,7.604,9.106z\"/>
\t\t\t</g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M25.397,9.106c-0.113,0-0.227-0.039-0.321-0.117l-6.247-5.24c-0.211-0.178-0.239-0.493-0.062-0.705      c0.179-0.211,0.493-0.239,0.705-0.062l6.247,5.24c0.211,0.178,0.239,0.493,0.062,0.705C25.682,9.045,25.54,9.106,25.397,9.106z\"/>
\t\t\t</g>
\t\t</g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M31.275,14.988H1.725C0.774,14.988,0,14.214,0,13.263v-3.198c0-0.951,0.774-1.725,1.725-1.725h29.55    c0.951,0,1.725,0.774,1.725,1.725v3.198C33,14.214,32.227,14.988,31.275,14.988z M1.725,9.339C1.325,9.339,1,9.664,1,10.064v3.198    c0,0.4,0.325,0.725,0.725,0.725h29.55c0.399,0,0.725-0.325,0.725-0.725v-3.198c0-0.4-0.325-0.725-0.725-0.725H1.725z\"/>
\t</g>
\t<g>
\t\t<path d=\"M9.255,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C9.755,25.825,9.532,26.048,9.255,26.048z\"/>
\t\t<path d=\"M14.085,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C14.585,25.825,14.362,26.048,14.085,26.048z\"/>
\t\t<path d=\"M18.915,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C19.415,25.825,19.191,26.048,18.915,26.048z\"/>
\t\t<path d=\"M23.745,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C24.245,25.825,24.021,26.048,23.745,26.048z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Cart
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/logout\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 490.3 490.3\" style=\"enable-background:new 0 0 490.3 490.3;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path  stroke=\"black\" stroke-width=\"10\" d=\"M0,121.05v248.2c0,34.2,27.9,62.1,62.1,62.1h200.6c34.2,0,62.1-27.9,62.1-62.1v-40.2c0-6.8-5.5-12.3-12.3-12.3
\t\t\ts-12.3,5.5-12.3,12.3v40.2c0,20.7-16.9,37.6-37.6,37.6H62.1c-20.7,0-37.6-16.9-37.6-37.6v-248.2c0-20.7,16.9-37.6,37.6-37.6h200.6
\t\t\tc20.7,0,37.6,16.9,37.6,37.6v40.2c0,6.8,5.5,12.3,12.3,12.3s12.3-5.5,12.3-12.3v-40.2c0-34.2-27.9-62.1-62.1-62.1H62.1
\t\t\tC27.9,58.95,0,86.75,0,121.05z\"/>
\t\t<path  stroke=\"black\" stroke-width=\"10\" d=\"M385.4,337.65c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l83.9-83.9c4.8-4.8,4.8-12.5,0-17.3l-83.9-83.9
\t\t\tc-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l63,63H218.6c-6.8,0-12.3,5.5-12.3,12.3c0,6.8,5.5,12.3,12.3,12.3h229.8l-63,63
\t\t\tC380.6,325.15,380.6,332.95,385.4,337.65z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Logout
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-d-1\">
                        <!--- mobile-subnav bg-white animated Starts --->
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 display-inline-block text-underline\" href=\"https://www.gigtodo.com/dashboard\">
                                    View Dashboard Home
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"s-1\" data-name=\"Selling\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Selling</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"b\" data-name=\"Buying\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Buying</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"r\" data-name=\"Requests\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Requests</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"contacts\" data-name=\"Contacts\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Contacts</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"referrals\" data-name=\"My Referrals\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">My Referrals</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\">
                                <a href=\"https://www.gigtodo.com/tyrone\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">My Profile</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"settings\" data-name=\"Settings\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Settings</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\">
                                <a href=\"https://www.gigtodo.com/customer_support\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Contact Support</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-subnav bg-white animated Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-s-1\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/selling_orders\">
                                    Orders                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/proposals/view_proposals\">
                                    My Proposals                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/requests/buyer_requests\">
                                    Buyer Requests                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/revenue\">
                                    Revenues                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong\">
                                <a class=\"p-xs-1 display-inline-block text-underline\" href=\"https://www.gigtodo.com/proposals/create_proposal\">
                                    Create A New Proposal
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-b\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/buying_orders\">
                                    Orders                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/purchases\">
                                    Purchases                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/favorites\">
                                    Favorites                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-r\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/requests/post_request\">
                                    Post A Request                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/requests/manage_requests\">
                                    Manage Requests                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-contacts\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/manage_contacts?my_buyers\">
                                    My Buyers                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/manage_contacts?my_sellers\">
                                    My Sellers                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-referrals\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/my_referrals\">
                                    User Referrals                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/proposal_referrals\">
                                    Proposal Referrals                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-settings\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/settings?profile_settings\">
                                    Profile Settings                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/settings?account_settings\">
                                    Account Settings                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                </div>
            </div>
        </div>
    </div>
</div>
<!--- user-mobile Ends --->



<button data-toggle=\"modal\" data-target=\".purchase-options\"  id=\"un-button\" class=\"un-left css3\" style=\"background-color:#28a745; color:white; margin-top: 30.0035px; left: -6px; pointer: cursor; \">

    <i style=\"cursor:pointer;\" class=\"fa fa-credit-card\"></i> <span style=\"cursor:pointer;\"> Purchase This Script </span>

</button>

<div class=\"modal fade purchase-options\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title pb-3\" id=\"exampleModalLongTitle\">Purchase Options</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span style=\"cursor:pointer;\" aria-hidden=\"true\">&times;</span>

                </button>

            </div>

            <div class=\"modal-body\">

                <span style=\"position: relative; top: -40px;\" class=\"title\">The only legit places you can purchase this script from. </span>
                <div class=\"row\">
                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://codecanyon.net/item/gigtodo-freelance-marketplace-script/23855397\"><img width=\"210px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/codecanyon-logo.png\"></a>
                    </div>

                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://www.codester.com/items/7515/gigtodo-freelance-service-marketplace\"> <img style=\"position: relative; top: 9px;\" width=\"210px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/c-logo.jpg\"></a>
                    </div>

                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://www.pixinal.com/store/product/gigtodo-script/\"><img style=\"position: relative; top: -4px;\" width=\"210px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/image_109.png\"></a>
                    </div>

                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://alkanyx.com/item/232/GigToDoScript---Freelance-Service-Marketplace\"><img class=\"mt-4 mb-4\" width=\"220px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/alkanyx-logo.png\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav id=\"tabs\">

    <div class=\"container\">

        <div class=\"breadcrumb flat mb-0 nav\" role=\"tablist\">
            <a class=\"nav-link active\" href=\"#overview\">Overview</a>

            <a class=\"nav-link d-none \" href=\"#video\">Video Settings</a>

            <a class=\"nav-link active \" href=\"#pricing\">Pricing</a>

            <a class=\"nav-link \" href=\"#description\">Description & FAQ</a>
            <a class=\"nav-link \" href=\"#requirements\">Requirements</a>
            <a class=\"nav-link \" href=\"#gallery\">Gallery</a>
            <a class=\"nav-link \" href=\"#publish\">Submit For Approval</a>
        </div>

    </div>

</nav><div class=\"container mt-5 mb-5\"><!--- container mt-5 Starts --->
    <div class=\"row\"><!--- row Starts --->
        <div class=\"col-md-8\"><!--- col-md-8 Starts --->
            <div class=\"tab-content card card-body\"><!--- tab-content Starts --->
                <div class=\"tab-pane fade \" id=\"overview\">
                    <form action=\"#\" method=\"post\" class=\"proposal-form\"><!--- form Starts -->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Proposal Title</div>
                            <div class=\"col-md-9\"><textarea name=\"proposal_title\" rows=\"2\" placeholder=\"I Will\" required=\"\" class=\"form-control\">Raba</textarea></div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\"> Category </div>
                            <div class=\"col-md-9\">
                                <select name=\"proposal_cat_id\" id=\"category\" class=\"form-control mb-3\" required>
                                    <option value=\"1\" selected> Graphics &amp; Design </option>
                                    <option value=\"2\"> Digital Marketing </option>
                                    <option value=\"3\"> Writing & Translation </option>
                                    <option value=\"4\"> Video & Animation
                                    </option>
                                    <option value=\"6\"> Programming & Tech
                                    </option>
                                    <option value=\"7\"> Business
                                    </option>
                                    <option value=\"8\"> Fun & Lifestyle
                                    </option>
                                    <option value=\"9\"> Music &amp; Audio </option>
                                </select>
                                <small class=\"form-text text-danger\"></small>
                                <select name=\"proposal_child_id\" id=\"sub-category\" class=\"form-control\" required>
                                    <option value=\"1\" selected> Logo Design </option>
                                    <option value='2'> Business Cards &amp; Stationery </option><option value='3'> Illustration </option><option value='4'> Cartoons Caricatures </option><option value='5'> Flyers Posters </option><option value='6'> Book Covers & Packaging </option><option value='7'> Web &amp; Mobile Design </option><option value='8'> Social Media Design </option><option value='9'> Banner Ads </option><option value='12'> Photoshop Editing </option><option value='13'> 3D & 2D Models </option><option value='14'> T-Shirts </option><option value='15'> Presentation Design </option><option value='16'> Other </option><option value='102'>  </option>\t</select>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Delivery Time</div>
                            <div class=\"col-md-9\">
                                <select name=\"delivery_id\" class=\"form-control\" required=\"\">
                                    <option value=\"1\">  1 Day </option>
                                    <option value='2'>2 Days</option><option value='3'>3 Days</option><option value='4'>4 Days</option><option value='5'>5 Days</option><option value='6'>6 Days</option><option value='7'>7 Days</option><option value='8'>5 minutes</option>\t</select>
                            </div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <label class=\"col-md-3 control-label\"> Enable Referrals : </label>
                            <div class=\"col-md-9\">
                                <select name=\"proposal_enable_referrals\" class=\"proposal_enable_referrals form-control\" required=\"\">
                                    <option value=\"no\"> No </option>
                                    <option value=\"yes\"> Yes </option>
                                </select>
                                <small>If enabled, other users can promote your proposal by sharing it on different platforms.</small>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row proposal_referral_money\"><!--- form-group row Starts --->
                            <label class=\"col-md-3 control-label\"> Promotion Commission: </label>
                            <div class=\"col-md-9\">
                                <input type=\"number\" name=\"proposal_referral_money\" class=\"form-control\" min=\"1\" max=\"100\" value=\"0\">
                                <small>Figure should be in percentage. E.g 20 is the same as 20% from the sale of this proposal.</small>
                                <br>
                                <small>
                                    When another user promotes your proposal, how much would you like that user to get from the sale? (in dollars)
                                </small>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Tags</div>
                            <div class=\"col-md-9\"><input type=\"text\" name=\"proposal_tags\" class=\"form-control\" data-role=\"tagsinput\" value=\"test\"></div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group mb-0\"><!--- form-group Starts --->
                            <a href=\"view_proposals\" class=\"float-left btn btn-secondary\">Cancel</a>
                            <input class=\"btn btn-success float-right\" type=\"submit\" value=\"Save & Continue\">
                        </div><!--- form-group Starts --->

                    </form><!--- form Ends -->        </div>
                <div class=\"tab-pane fade show active\" id=\"pricing\">
                    <h5 class=\"font-weight-normal float-left\">Pricing</h5>
                    <div class=\"float-right switch-box\">
                        <span class=\"text\">Fixed Price :</span>
                        <label class=\"switch\">
                            <input type=\"checkbox\" class=\"pricing\">
                            <span class=\"slider\"></span>
                        </label>
                    </div>

                    <div class=\"clearfix\"></div>

                    <hr class=\"mt-0\">

                    <div class=\"form-group row proposal-price justify-content-center\">
                        <div class=\"col-md-7\">
                            <div class=\"input-group\">
<span class=\"input-group-addon font-weight-bold\">
&#036;</span>
                                <input type=\"number\" class=\"form-control\" form=\"pricing-form\" name=\"proposal_price\" min=\"0\" value=\"0\">
                            </div>
                            <small>If you want to use packages, you need to set this field value to 0. </small>
                        </div>
                    </div>

                    <div class=\"packages\"><table class=\"table table-bordered packages\">

                            <thead>

                            <tr>

                                <th></th>
                                <th>Basic</th>
                                <th>Standard</th>
                                <th>Advance</th>

                            </tr>

                            </thead>

                            <tbody>

                            <form action=\"#\" method=\"post\" class=\"pricing-form\" id=\"pricing-form\">

                                <input type=\"hidden\" name=\"proposal_packages[1][package_id]\" form=\"pricing-form\" value=\"1765\">
                                <input type=\"hidden\" name=\"proposal_packages[2][package_id]\" form=\"pricing-form\" value=\"1766\">
                                <input type=\"hidden\" name=\"proposal_packages[3][package_id]\" form=\"pricing-form\" value=\"1767\">

                                <tr>

                                    <td>Description</td>

                                    <td class=\"p-0\"><textarea maxlength=\"35\" name=\"proposal_packages[1][description]\" class=\"form-control\" placeholder=\"Description\"></textarea></td>
                                    <td class=\"p-0\"><textarea maxlength=\"35\" name=\"proposal_packages[2][description]\" class=\"form-control\" placeholder=\"Description\"></textarea></td>
                                    <td class=\"p-0\"><textarea maxlength=\"35\" name=\"proposal_packages[3][description]\" class=\"form-control\" placeholder=\"Description\"></textarea></td>

                                </tr>


                                <tr class=\"delivery-time\">

                                    <td>Delivery Time</td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[1][delivery_time]\" class=\"form-control\">

                                            <option value='1' selected>1 Day</option><option value='2' >2 Days</option><option value='3' >3 Days</option><option value='4' >4 Days</option><option value='5' >5 Days</option><option value='6' >6 Days</option><option value='7' >7 Days</option><option value='5' >5 minutes</option>
                                        </select>

                                    </td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[2][delivery_time]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='1' selected>1 Day</option><option value='2' >2 Days</option><option value='3' >3 Days</option><option value='4' >4 Days</option><option value='5' >5 Days</option><option value='6' >6 Days</option><option value='7' >7 Days</option><option value='5' >5 minutes</option>
                                        </select></td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[3][delivery_time]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='1' selected>1 Day</option><option value='2' >2 Days</option><option value='3' >3 Days</option><option value='4' >4 Days</option><option value='5' >5 Days</option><option value='6' >6 Days</option><option value='7' >7 Days</option><option value='5' >5 minutes</option>
                                        </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>Revisions</td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[1][revisions]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='0'selected>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                                        </select>

                                    </td><td class=\"p-0\">

                                        <select name=\"proposal_packages[2][revisions]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='0'selected>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                                        </select>

                                    </td><td class=\"p-0\">

                                        <select name=\"proposal_packages[3][revisions]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='0'selected>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                                        </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>Price</td>

                                    <td class=\"p-0\">

                                        <!-- <select name=\"\" class=\"form-control\">
                                        <option value='5'selected>&#036;5</option><option value='10'>&#036;10</option><option value='15'>&#036;15</option><option value='20'>&#036;20</option><option value='25'>&#036;25</option><option value='50'>&#036;50</option><option value='60'>&#036;60</option><option value='70'>&#036;70</option><option value='80'>&#036;80</option><option value='90'>&#036;90</option><option value='100'>&#036;100</option></select> -->

                                        <input type=\"number\" min='5' required name=\"proposal_packages[1][price]\" form=\"pricing-form\" value=\"5\" class=\"form-control\">

                                    </td><td class=\"p-0\">

                                        <!-- <select name=\"proposal_packages[2][price]\" class=\"form-control\">
                                            <option value='5'>&#036;5</option><option value='10'selected>&#036;10</option><option value='15'>&#036;15</option><option value='20'>&#036;20</option><option value='25'>&#036;25</option><option value='50'>&#036;50</option><option value='60'>&#036;60</option><option value='70'>&#036;70</option><option value='80'>&#036;80</option><option value='90'>&#036;90</option><option value='100'>&#036;100</option></select> -->

                                        <input type=\"number\" min='5' required name=\"proposal_packages[2][price]\" form=\"pricing-form\" value=\"10\" class=\"form-control\">

                                    </td><td class=\"p-0\">

                                        <!-- <select name=\"proposal_packages[3][price]\" class=\"form-control\">
                                        <option value='5'>&#036;5</option><option value='10'>&#036;10</option><option value='15'selected>&#036;15</option><option value='20'>&#036;20</option><option value='25'>&#036;25</option><option value='50'>&#036;50</option><option value='60'>&#036;60</option><option value='70'>&#036;70</option><option value='80'>&#036;80</option><option value='90'>&#036;90</option><option value='100'>&#036;100</option>
                                        </select> -->

                                        <input type=\"number\" min='5' required name=\"proposal_packages[3][price]\" form=\"pricing-form\" value=\"15\" class=\"form-control\">

                                    </td>

                                </tr>

                            </form>

                            </tbody>

                        </table></div>

                    <div class=\"form-group row add-attribute justify-content-center\">
                        <div class=\"col-md-7\">
                            <div class=\"input-group\">
                                <input class=\"form-control form-control-sm attribute-name\" placeholder=\"Add New Attribute\" name=\"\">
                                <button class=\"btn btn btn-success input-group-addon insert-attribute\" >
                                    <i class=\"fa fa-cloud-upload\"></i> &nbsp;Insert
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded-0\">
                        <div class=\"card-body bg-light pt-3 pb-0\">
                            <h6 class=\"font-weight-normal\">My Proposal Extras</h6>
                            <a data-toggle=\"collapse\" href=\"#insert-extra\" class=\"small text-success\">+ Add Extra</a>
                            <div class=\"tabs accordion mt-2\" id=\"allTabs\"><!--- All Tabs Starts --->
                                <div class=\"tab\">
                                    <!-- tab rounded Starts -->
                                    <div class=\"tab-body rounded border-1 p-3 pb-0 collapse \" id=\"insert-extra\" data-parent=\"#allTabs\">
                                        <form action=\"#\" method=\"post\" class=\"add-extra\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" name=\"name\" placeholder=\"Extra Name\" class=\"form-control form-control-sm\" required=\"\">
                                                <small class=\"form-text text-danger\"></small>
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"input-group input-group-sm\">
                                                    <!--- input-group Starts --->
                                                    <span class=\"input-group-addon\">&#036;</span>
                                                    <input type=\"number\" name=\"price\" placeholder=\"Extra Price\" class=\"form-control form-control-sm\" required=\"\">
                                                </div>
                                                <small class=\"form-text text-danger\"></small>
                                                <!--- input-group Ends --->
                                            </div>
                                            <div class=\"form-group mb-0\">
                                                <button type=\"submit\" class=\"btn btn-success btn-sm float-right\">Insert</button>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- tab rounded Ends -->

                                <script>

                                    \$(document).ready(function(){


                                        \$(\".add-extra\").on('submit', function(event){

                                            event.preventDefault();

                                            var form_data = new FormData(this);

                                            form_data.append('proposal_id',591);

                                            \$('#wait').addClass(\"loader\");

                                            \$.ajax({

                                                method: \"POST\",

                                                url: \"ajax/insert_extra\",

                                                data: form_data,

                                                async: false,cache: false,contentType: false,processData: false

                                            }).done(function(data){

                                                \$('#wait').removeClass(\"loader\");

                                                if(data == \"error\"){

                                                    swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                                }else{

                                                    \$(\".add-extra\").trigger(\"reset\");

                                                    \$(\"#allTabs\").load(\"sections/edit/extras\",{proposal_id : 591});

                                                }

                                            });

                                        });


                                        \$(\".edit-extra\").on('submit', function(event){

                                            event.preventDefault();

                                            var form_data = new FormData(this);

                                            form_data.append('proposal_id',591);

                                            \$('#wait').addClass(\"loader\");

                                            \$.ajax({

                                                method: \"POST\",

                                                url: \"ajax/edit_extra\",

                                                data: form_data,

                                                async: false,cache: false,contentType: false,processData: false

                                            }).done(function(data){

                                                \$('#wait').removeClass(\"loader\");

                                                if(data == \"error\"){

                                                    swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                                }else{

                                                    swal({type: 'success',text: 'Changes Saved.'});

                                                }

                                            });

                                        });


                                        \$(\".delete-extra\").on('click',function(){

                                            event.preventDefault();

                                            var id = \$(this).parent().parent().find(\"input[name='id']\").val();

                                            var main = \$(this).parent().parent().parent().parent();

                                            \$.ajax({

                                                method: \"POST\",

                                                url: \"ajax/delete_extra\",

                                                data: {proposal_id : 591, id : id},

                                                success : function(data){

                                                    main.remove();

                                                }

                                            });

                                        });


                                    });

                                </script>    </div><!--- All Tabs Ends --->
                        </div>
                    </div>

                    <div class=\"form-group mt-4 mb-0\"><!--- form-group Starts --->
                        <a href=\"#\" class=\"btn btn-secondary float-left back-to-overview\">Back</a>
                        <input class=\"btn btn-success float-right\" type=\"submit\" form=\"pricing-form\" value=\"Save & Continue\">
                    </div><!--- form-group Starts --->

                    <script>
                        \$(document).ready(function(){

                            \$('.proposal-price').hide();

                            \$('.back-to-overview').click(function(){
                                \$(\"input[type='hidden'][name='section']\").val(\"overview\");
                                \$('#pricing').removeClass('show active');
                                \$('#overview').addClass('show active');
                                \$('#tabs a[href=\"#pricing\"]').removeClass('active');
                            });

                            \$(\"table\").on('click','.delete-attribute',function(event){
                                \$('#wait').addClass(\"loader\");
                                event.preventDefault();
                                var attribute_name = \$(this).data(\"attribute\");
                                var proposal_id = 591;
                                \$(this).parent().parent().remove();
                                \$.ajax({
                                    method: \"POST\",
                                    url: \"ajax/delete_attribute\",
                                    data: { proposal_id : proposal_id, attribute_name: attribute_name },
                                    success:function(data){
                                        \$('#wait').removeClass(\"loader\");
                                    }
                                });
                            });

                            \$(\".insert-attribute\").on('click', function(event){
                                \$('#wait').addClass(\"loader\");
                                event.preventDefault();
                                var attribute_name = \$('.attribute-name').val();
                                \$.ajax({
                                    method: \"POST\",
                                    url: \"ajax/insert_attribute\",
                                    data: { attribute_name : attribute_name, proposal_id: 591 },
                                    success:function(data){
                                        if(data == \"error\"){
                                            \$('#wait').removeClass(\"loader\");
                                            swal({type: 'warning',text: 'You Must Need To Give A Name To Attribute Before Inserting It.'});
                                        }else{
                                            \$('#wait').removeClass(\"loader\");
                                            \$('.attribute-name').val(\"\");
                                            result = \$.parseJSON(data);
                                            var form_data = new FormData(document.querySelector(\".pricing-form\"));
                                            form_data.append('proposal_id',591);
                                            \$.ajax({
                                                method: \"POST\",
                                                url: \"ajax/save_pricing\",
                                                data: form_data,
                                                async: false,cache: false,contentType: false,processData: false
                                            }).done(function(data){
                                                // this code makes problem
                                                \$.ajax({
                                                    method: \"POST\",
                                                    url: \"sections/edit/pricing\",
                                                    data: { proposal_id: 591,fixedPriceOff:1 },
                                                    success:function(show_data){
                                                        \$(\"#pricing\").html(show_data);
                                                    }
                                                });
                                            });
                                        }
                                    }
                                });

                            });

                            \$(\".pricing-form\").submit(function(event){
                                event.preventDefault();
                                var form_data = new FormData(this);
                                form_data.append('proposal_id',591);
                                \$('#wait').addClass(\"loader\");
                                \$.ajax({
                                    method: \"POST\",
                                    url: \"ajax/save_pricing\",
                                    data: form_data,
                                    async: false,cache: false,contentType: false,processData: false
                                }).done(function(data){
                                    \$('#wait').removeClass(\"loader\");
                                    if(data == \"error\"){
                                        swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});
                                    }else{
                                        swal({
                                            type: 'success',
                                            text: 'Details Saved.',
                                            timer: 1000,
                                            onOpen: function(){
                                                swal.showLoading()
                                            }
                                        }).then(function(){
                                            \$(\"input[type='hidden'][name='section']\").val(\"description\");
                                            \$('#pricing').removeClass('show active');
                                            \$('#description').addClass('show active');
                                            \$('#tabs a[href=\"#description\"]').addClass('active');
                                        });
                                    }
                                });
                            });

                        });
                    </script>        </div>
                <div class=\"tab-pane fade\" id=\"description\">
                    <h5 class=\"font-weight-normal\">Description</h5>
                    <hr>
                    <p class=\"small mb-2\"> Project Details </p>

                    <form action=\"#\" method=\"post\" class=\"proposal-form\" id=\"form1\"><!--- form Starts -->
                        <div class=\"form-group\">
\t<textarea rows=\"7\" name=\"proposal_desc\" placeholder=\"Enter Your Proposal's Description\" class=\"form-control proposal-desc\">
<p>testtttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</p>
</textarea>
                            <small class=\"form-text text-danger\"></small>
                        </div>
                    </form><!--- form Ends -->

                    <hr class=\"mt-0\">
                    <h5 class=\"font-weight-normal\"> Frequently Asked Questions  <small class=\"float-right\"><a data-toggle=\"collapse\" href=\"#insert-faq\" class=\"text-success\">+ Add Faq</a></small></h5>
                    <hr>
                    <div class=\"tabs accordion mt-2\" id=\"faqTabs\"><!--- All Tabs Starts --->

                        <div class=\"tab\"><!-- tab rounded Starts -->

                            <div class=\"tab-body rounded border-1 p-3 pb-0 collapse\" id=\"insert-faq\" data-parent=\"#faqTabs\">

                                <form action=\"\" method=\"post\" class=\"add-faq\">

                                    <div class=\"form-group mb-2\">

                                        <input type=\"text\" name=\"title\" placeholder=\"Faq Title\" class=\"form-control form-control-sm\" required>

                                    </div>

                                    <div class=\"form-group mb-2\">

                                        <textarea name=\"content\" rows=\"3\" placeholder=\"Faq Content\" class=\"form-control form-control-sm\"></textarea>

                                    </div>

                                    <div class=\"form-group mb-0\">

                                        <button type=\"submit\" class=\"btn btn-success btn-sm float-right\">Insert</button>

                                        <div class=\"clearfix\"></div>

                                    </div>

                                </form>

                            </div>

                        </div><!-- tab rounded Ends -->

                        <script>

                            \$(document).ready(function(){


                                \$(\".add-faq\").on('submit', function(event){

                                    event.preventDefault();

                                    var form_data = new FormData(this);

                                    form_data.append('proposal_id',591);

                                    \$('#wait').addClass(\"loader\");

                                    \$.ajax({

                                        method: \"POST\",

                                        url: \"ajax/insert_faq\",

                                        data: form_data,

                                        async: false,cache: false,contentType: false,processData: false

                                    }).done(function(data){

                                        \$('#wait').removeClass(\"loader\");

                                        if(data == \"error\"){

                                            swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                        }else{

                                            \$(\".add-faq\").trigger(\"reset\");

                                            \$(\"#faqTabs\").load(\"sections/edit/faqs\",{proposal_id : 591});

                                        }

                                    });

                                });


                                \$(\".edit-faq\").on('submit', function(event){

                                    event.preventDefault();

                                    var form_data = new FormData(this);

                                    form_data.append('proposal_id',591);

                                    \$('#wait').addClass(\"loader\");

                                    \$.ajax({

                                        method: \"POST\",

                                        url: \"ajax/edit_faq\",

                                        data: form_data,

                                        async: false,cache: false,contentType: false,processData: false

                                    }).done(function(data){

                                        \$('#wait').removeClass(\"loader\");

                                        if(data == \"error\"){

                                            swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                        }else{

                                            swal({type: 'success',text: 'Changes Saved.'});

                                        }

                                    });

                                });


                                \$(\".delete-faq\").on('click',function(){

                                    event.preventDefault();

                                    var id = \$(this).parent().parent().find(\"input[name='id']\").val();

                                    var main = \$(this).parent().parent().parent().parent();

                                    \$.ajax({

                                        method: \"POST\",

                                        url: \"ajax/delete_faq\",

                                        data: {proposal_id : 591, id : id},

                                        success : function(data){

                                            main.remove();

                                        }

                                    });

                                });


                            });

                        </script></div><!--- All Tabs Ends --->

                    <div class=\"form-group mb-0\"><!--- form-group Starts --->
                        <a href=\"#\" class=\"btn btn-secondary float-left back-to-pricing\">Back</a>
                        <input class=\"btn btn-success float-right\" type=\"submit\" form=\"form1\" value=\"Save & Continue\">
                    </div><!--- form-group Starts --->

                    <script>
                        \$(document).ready(function(){
                            \$('.back-to-pricing').click(function(){
                                \$(\"input[type='hidden'][name='section']\").val(\"pricing\");
                                \$('#description').removeClass('show active');
                                \$('#pricing').addClass('show active');
                                \$('#tabs a[href=\"#description\"]').removeClass('active');
                            });
                        });
                    </script>        </div>
                <div class=\"tab-pane fade\" id=\"requirements\">
                    <form action=\"#\" method=\"post\" class=\"proposal-form\"><!--- form Starts -->

                        <h5 class=\"font-weight-normal\">

                            <span class=\"float-left mr-2\"><i class=\"fa fa-file text-info fa-1x\"></i> </span>

                            <span class=\"float-left\">

Tell your buyer what you need to get started (Optional) <br>

<small class=\"text-muted\">Structure your Buyer Instructions as free text.</small>

</span>

                            <div class=\"clearfix\"></div>

                        </h5>

                        <hr>

                        <div class=\"form-group requirements\">
                            <p class=\"mb-1\">Requirements</p>
                            <textarea name=\"buyer_instruction\" placeholder=\"If you need to obtain information, files or other items from the buyer prior to starting your work, please add your instructions here. For example: Please send me your company name or Please send me the photo you need me to edit.\" rows=\"4\" class=\"form-control\"></textarea>

                        </div>


                        <div class=\"form-group mb-0\"><!--- form-group Starts --->

                            <a href=\"#\" class=\"btn btn-secondary float-left back-to-desc\">Back</a>

                            <input class=\"btn btn-success float-right\" type=\"submit\" value=\"Save & Continue\">

                        </div><!--- form-group Starts --->

                    </form><!--- form Ends -->

                    <script>

                        \$(document).ready(function(){

                            \$('.back-to-desc').click(function(){


                                \$(\"input[type='hidden'][name='section']\").val(\"description\");

                                \$('#requirements').removeClass('show active');

                                \$('#description').addClass('show active');

                                \$('#tabs a[href=\"#requirements\"]').removeClass('active');


                            });

                        });

                    </script>        </div>
                <div class=\"tab-pane fade\" id=\"gallery\">
                    <h5 class=\"font-weight-normal\">Build Your Proposal Gallery</h5>
                    <h6 class=\"font-weight-normal\">Add memorable content to your gallery to set yourself apart from competitors.</h6>

                    <hr>

                    <p class=\"text-right mb-0\">
                        <span class=\"float-left\">Proposal Photos </span>
                        <small class=\"text-muted\" style=\"font-size: 78%;\">Upload Photos that describe or related to your proposal.your image size must be 700 x 390 pixels.</small>
                    </p>

                    <form action=\"\" class=\"proposal-form\" id=\"gallery_form\"><!--- form Starts --->
                        <div class=\"row gallery\"><!--- row gallery Starts --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic add-pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img1\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img2\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img3\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img4\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                        </div><!--- row gallery Ends --->
                        <hr>
                        <p class=\"text-right mb-0\">
                            <span class=\"float-left\">Add Videoadd_proposal_video</span>
                            <small class=\"text-muted\" style=\"font-size: 78%;\">(Optional) Supported Video Extensions Include : 'mp4','mov','avi','flv','wmv'.</small>
                        </p>
                        <div class=\"row gallery\"><!--- row gallery Starts --->
                            <div class=\"col-md-12\"><!--- col-md-3 Starts --->
                                <div class=\"pic add-video\">
                                    <span class=\"chose\"><i class=\"fa fa-video-camera fa-2x mb-2\"></i><br>Add Video</span>
                                    <input type='hidden' name='proposal_video' value='' id='v_file'>
                                </div>
                            </div><!--- col-md-3 Ends --->
                        </div><!--- row gallery Ends --->
                    </form><!--- form Ends --->

                    <div class=\"mb-5\"></div>

                    <div class=\"form-group mb-0\"><!--- form-group Starts --->

                        <a href=\"#\" class=\"btn btn-secondary float-left back-to-req\">Back</a>

                        <input class=\"btn btn-success float-right\" type=\"submit\" form=\"gallery_form\" value=\"Save & Continue\">
                        <a href=\"tyrone/raba\" id=\"previewProposal\" class=\"btn btn-success float-right mr-3 d-none\">Preview Proposal</a>

                    </div><!--- form-group Starts --->

                    <script>
                        \$(document).ready(function(){
                            var browsers = [\"Opera\", \"Edge\", \"Chrome\", \"Safari\", \"Firefox\", \"MSIE\", \"Trident\"];
                            var userbrowser, useragent = navigator.userAgent;
                            for(var i = 0; i < browsers.length; i++) {
                                if( useragent.indexOf(browsers[i]) > -1 ) {
                                    userbrowser = browsers[i];
                                    break;
                                }
                            };


                            \$('.back-to-req').click(function(){
                                \$(\"input[type='hidden'][name='section']\").val(\"requirements\");
                                \$('#gallery').removeClass('show active');
                                \$('#requirements').addClass('show active');
                                \$('#tabs a[href=\"#gallery\"]').removeClass('active');
                            });

                            \$image_crop = \$('#image_demo').croppie({
                                enableExif: true,
                                viewport: {
                                    width:700,
                                    height:390,
                                    type:'square' //circle
                                },
                                boundary:{
                                    width:100,
                                    height:400
                                }
                            });

                            function crop(data){
                                var reader = new FileReader();
                                reader.onload = function (event) {
                                    \$image_crop.croppie('bind',{
                                        url: event.target.result
                                    }).then(function(){
                                        console.log('jQuery bind complete');
                                    });
                                }
                                reader.readAsDataURL(data.files[0]);
                                \$('#insertimageModal').modal('show');
                                \$('input[type=hidden][name=img_type]').val(\$(data).attr('name'));
                                \$('input[type=hidden][name=img_name]').val(data.files[0].name);
                            }

                            \$('.crop_image').click(function(event){
                                \$('#wait').addClass(\"loader\");
                                var name = \$('input[type=hidden][name=img_type]').val();
                                \$image_crop.croppie('result', {
                                    type: 'canvas', size: 'viewport'
                                }).then(function(response){
                                    \$.ajax({
                                        url:\"crop_upload\", type: \"POST\",
                                        data:{image: response, name: \$('input[type=hidden][name=img_name]').val() },
                                        success:function(data){
                                            \$('#wait').removeClass(\"loader\");
                                            \$('#insertimageModal').modal('hide');
                                            \$('input[type=hidden][name='+ name +']').val(data);
                                            main = \$('input[type=hidden][name='+ name +']').parent();
                                            main.children(\"i,br,span\").remove();
                                            main.addClass(\"img\").removeClass(\"pic\");
                                            main.prepend(\"<img src='proposal_files/\"+data+\"' class='img-fluid'> <span>Remove</span>\");
                                        }
                                    });
                                });
                            });

                            var gallery = \$('.gallery');
                            gallery.on('click', '.img', function () {
                                \$(this).children(\"img,span\").remove();
                                \$(this).children(\"input[type=hidden]\").val(\"\");
                                \$(this).addClass(\"pic\").removeClass(\"img\");
                                \$(this).prepend(\"<i class='fa fa-picture-o fa-2x mb-2'></i><br> <span>Browse Image</span>\");
                            });


                            gallery.on('click', '.pic:not(.add-video,.video-added,.disable)',function(){
                                var name = \$(this).children(\"input[type=hidden]\").attr(\"name\");
                                if(userbrowser == \"Edge\" || userbrowser == \"Safari\"){
                                    \$(\"input[type=file]\").click();
                                    \$(\"input[type=file]\").attr('name',name);
                                    \$(\"input[type=file]\").attr('accept','image/*');
                                    \$(\"input[type=file]\").removeAttr('multiple');
                                    \$(\"input[type=file]\").on('change',function(){ crop(this); });
                                }else{
                                    var uploader = \$('<input type=\"file\" name=\"'+name+'\" accept=\"image/*\" />');
                                    uploader.click();
                                    uploader.on('input', function(){ crop(this); });
                                }
                            });

                            \$(document).on('click','.add-video',function(){
                                \$(\"#video-modal\").modal(\"show\");
                            });

                            gallery.on('click', '.delete-video', function () {
                                \$(\"#v_file\").val(\"\");
                                \$(this).parent().parent().prepend(\"<span class='chose'><i class='fa fa-video-camera fa-2x mb-2'></i><br> Add Video</span>\");
                                \$(this).parent().remove();
                                \$(\".video-added\").addClass(\"add-video\").removeClass(\"video-added\");
                            });

                        });
                    </script>        </div>
                <div class=\"tab-pane fade \" id=\"publish\">

                    <h1><img style=\"position:relative; top:-5px;\" src=\"../images/comp/winner.png\">  Yay! You are almost done!</h1>
                    <h6 class=\"font-weight-normal line-height-normal\">
                        Congrats! you're almost done submitting this proposal. <br>
                        You can go back and check if you entered all the details for this proposal correctly. If all looks good and you agree with <a href=\"https://www.gigtodo.com/terms_and_conditions\" target=\"_black\" class=\"text-primary\">all our policies</a>, please click on the “Save & Submit For Approval” button.<br><br>
                        <span class=\"text-muted\">
If you do not wish to submit this proposal for approval at this time, please exit this page. You can easily retrieve this proposal by clicking on \"Selling => My Proposals => Drafts\". Cheers!
</span>
                    </h6>

                    <form action=\"\" method=\"post\">
                        <h1 class=\"h3\">Make Proposal Featured (Optional)</h1>
                        <h6 class=\"font-weight-normal line-height-normal\">
                            Let your proposal appear on several places on GigToDo<br>
                            Proposal will always be at the top section of search results <br>
                            WIth GigToDo feature, your proposal already has a 50% chance of getting ordered by potential buyers
                            <p class=\"ml-4 mt-3\">
                                <label for=\"checkid\" style=\"word-wrap:break-word\">
                                    <input type=\"checkbox\" name=\"proposal_featured\" value=\"1\" style=\"vertical-align:middle;margin-left: -1.25rem;\"> Make Proposal Featured
                                </label>
                            </p>
                        </h6>
                        <div class=\"form-group mb-0 mt-3\"><!--- form-group Starts --->
                            <a href=\"#\" class=\"btn btn-secondary back-to-gallery\">Back</a>
                            <input class=\"btn btn-success\" type=\"submit\" name=\"submit_proposal\" value=\"Save & Submit For Approval\">
                            <a href=\"#\" class=\"btn btn-success d-none\" id=\"featured-button\">Make Proposal Featured</a>
                        </div><!--- form-group Starts --->
                    </form>

                    <script>
                        \$('.back-to-gallery').click(function(){
                            \$(\"input[type='hidden'][name='section']\").val(\"gallery\");
                            \$('#publish').removeClass('show active');
                            \$('#gallery').addClass('show active');
                            \$('#tabs a[href=\"#publish\"]').removeClass('active');
                        });

                        \$(\"input[name='proposal_featured']\").change(function(){
                            if (this.checked) {
                                \$(\"#featured-button\").removeClass(\"d-none\");
                                \$(\"input[name='submit_proposal'\").addClass(\"d-none\");
                            }else{
                                \$(\"#featured-button\").addClass(\"d-none\");
                                \$(\"input[name='submit_proposal'\").removeClass(\"d-none\");
                            }
                        });

                        \$(\"#featured-button\").click(function(){
                            proposal_id = \"591\";
                            \$.ajax({
                                method: \"POST\",
                                url: \"pay_featured_listing\",
                                data: {proposal_id: proposal_id, createProposal:1}
                            }).done(function(data){
                                \$(\"#featured-proposal-modal\").html(data);
                            });
                        });
                    </script>
                </div>
                <input type=\"hidden\" name=\"section\" value=\"pricing\">
            </div><!--- tab-content Ends --->
        </div><!--- col-md-8 Ends --->
    </div><!--- row Ends --->
</div><!--- container mt-5 Ends --->

<div id=\"insertimageModal\" class=\"modal\" role=\"dialog\">

    <div class=\"modal-dialog modal-lg\">

        <div class=\"modal-content\">

            <div class=\"modal-header\">

                Crop & Insert Image <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

            </div>

            <div class=\"modal-body\">

                <div id=\"image_demo\" style=\"width:100% !important;\"></div>

            </div>

            <div class=\"modal-footer\">

                <input type=\"hidden\" name=\"img_name\" value=\"\">

                <input type=\"hidden\" name=\"img_type\" value=\"\">

                <button class=\"btn btn-success crop_image\">Crop Image</button>

                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

            </div>

        </div>

    </div>

</div>

<div id=\"wait\"></div><div id=\"featured-proposal-modal\"></div>


<script>
    \$(document).ready(function(){

        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
            var e = \"\"+e.target+\"\";
            var e = e.replace('https://www.gigtodo.com/proposals/edit_proposal?proposal_id=591#', '');
            var e = e.replace('https://www.gigtodo.com/proposals/edit_proposal?proposal_id=591&pricing#', '');
            \$(\"input[type='hidden'][name='section']\").val(e);
        });

        \$(\".proposal-form\").on('submit', function(event){
            event.preventDefault();
            var form_data = new FormData(this);
            form_data.append('proposal_id',591);
            \$('#wait').addClass(\"loader\");
            \$.ajax({
                method: \"POST\",
                url: \"ajax/save_proposal\",
                data: form_data,
                async: false,cache: false,contentType: false,processData: false
            }).done(function(data){
                console.log(data);
                videoOrNotVideo = data;
                \$('#wait').removeClass(\"loader\");
                if(data == \"error\"){
                    swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});
                }else if(data == \"error_img\"){
                    swal({type: 'warning',text: 'You Must Need To Add At Least 1 Image In Proposal To Continue.'});
                }else if(data != \"error\" || data != \"error_img\"){
                    swal({
                        type: 'success',
                        text: 'Details Saved.',
                        timer: 1000,
                        onOpen: function(){
                            swal.showLoading();
                        }
                    }).then(function(){
                        var section = \$(\"input[type='hidden'][name='section']\");
                        var current_section = \$(\"input[type='hidden'][name='section']\").val();

                        if(data == \"video\"){
                            \$('#tabs a[href=\"#pricing\"]').addClass('d-none');
                            \$('#tabs a[href=\"#video\"]').removeClass('d-none');
                        }else if(data == \"not-video\"){
                            \$('#tabs a[href=\"#pricing\"]').removeClass('d-none');
                            \$('#tabs a[href=\"#video\"]').addClass('d-none');
                        }

                        if(current_section == \"overview\"){
                            \$('#overview').removeClass('show active');
                            if(data == \"video\"){
                                section.val(\"video\");
                                \$('#video').addClass('show active');
                                \$('#tabs a[href=\"#video\"]').addClass('active');
                            }else{
                                section.val(\"pricing\");
                                \$('#pricing').addClass('show active');
                                \$('#tabs a[href=\"#pricing\"]').addClass('active');
                            }
                        }else if(current_section == \"description\"){
                            section.val(\"requirements\");
                            \$('#description').removeClass('show active');
                            \$('#requirements').addClass('show active');
                            \$('#tabs a[href=\"#requirements\"]').addClass('active');
                        }else if(current_section == \"requirements\"){
                            section.val(\"gallery\");
                            \$('#requirements').removeClass('show active');
                            \$('#gallery').addClass('show active');
                            \$('#tabs a[href=\"#gallery\"]').addClass('active');
                        }else if(current_section == \"gallery\"){
                            \$('#gallery').removeClass('show active');
                            \$('#publish').addClass('show active');
                            \$('#tabs a[href=\"#publish\"]').addClass('active');
                        }

                    });
                }
            });
        });


        \$(\".proposal_referral_money input\").attr(\"min\",\"0\");
        \$('.proposal_referral_money').hide();

        \$(\".proposal_enable_referrals\").change(function(){
            var value = \$(this).val();
            if(value == \"yes\"){
                \$(\".proposal_referral_money input\").attr(\"min\",\"1\");
                \$('.proposal_referral_money').show();
            }else if(value == \"no\"){
                \$('.proposal_referral_money').hide();
                \$(\".proposal_referral_money input\").attr(\"min\",\"0\");
            }
        });


        \$(document).on(\"click\",\".pricing\", function(event){
            var value = \$(this).val();
            if(this.checked){
                \$('.packages').hide();
                \$('.add-attribute').hide();
                \$('.proposal-price').show();
            }else{
                \$('.packages').show();
                \$('.add-attribute').show();
                \$('.proposal-price').hide();
            }
        });

        \$(\"#category\").change(function(){
            \$(\"#sub-category\").show();
            var category_id = \$(this).val();
            \$.ajax({
                url:\"fetch_subcategory\",
                method:\"POST\",
                data:{category_id:category_id},
                success:function(data){
                    \$(\"#sub-category\").html(data);
                }
            });
        });

        \$('textarea[name=\"proposal_desc\"]').summernote({
            placeholder: 'Write Your Description Here.',
            height: 200,
        });

    });
</script>
<!-- start footer -->



<section class=\"messagePopup animated slideInRight\"></section>
<link rel=\"stylesheet\" href=\"https://www.gigtodo.com/styles/msdropdown.css\"/>


<script src=\"https://www.gigtodo.com/js/msdropdown.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/jquery.sticky.js\"></script>
<script type=\"text/javascript\" id=\"custom-js\" src=\"https://www.gigtodo.com/js/customjs.js\" data-logged-id=\"26\" data-base-url=\"https://www.gigtodo.com\" data-enable-sound=\"yes\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/categoriesProposal.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/owl.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/bootstrap.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/summernote.js\"></script>

<script>
    \$(document).ready(function(){
        \$(\"#languageSelect\").change(function(){
            var url = \$(\"#languageSelect option:selected\").data(\"url\");
            window.location.href = url;
        });

        \$(\"#languageSelect\").msDropdown({visibleRows:4});
        var seller_id = \"26\";
        var base_url = \"https://www.gigtodo.com\";

        \$(\".cookies_footer .btn\").click(function(){
            \$.ajax({
                method: \"POST\",
                url: \"https://www.gigtodo.com/includes/close_cookies_footer\",
                data: {close : 'close'}
            }).done(function(data){
                \$(\".cookies_footer\").fadeOut();
            });
        });
    });
</script><script src=\"../js/tagsinput.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "proposals/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\" class=\"ui-toolkit\">
<head>
    <title>GigToDo - Edit Proposal</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Purchase the GigToDo script and be equipped with the best freelance marketplace script in the world.\">
    <meta name=\"keywords\" content=\"gigtodo,freelancer, agents, services, online marketplace, professional services, fiverr, people per hour, upwork,\">
    <meta name=\"author\" content=\"Pixinal Studio\">
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100\" rel=\"stylesheet\">
    <link href=\"../styles/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
    <link href=\"../styles/styles.css\" rel=\"stylesheet\">
    <link href=\"../plugins/paymentGateway/proposals/styles/styles.css\" rel=\"stylesheet\">
    <link href=\"../styles/user_nav_styles.css\" rel=\"stylesheet\">
    <link href=\"../font_awesome/css/font-awesome.css\" rel=\"stylesheet\">
    <link href=\"../styles/owl.carousel.css\" rel=\"stylesheet\">
    <link href=\"../styles/owl.theme.default.css\" rel=\"stylesheet\">
    <link href=\"../styles/tagsinput.css\" rel=\"stylesheet\" >
    <link href=\"../styles/sweat_alert.css\" rel=\"stylesheet\">
    <link href=\"../styles/animate.css\" rel=\"stylesheet\">
    <link href=\"../styles/croppie.css\" rel=\"stylesheet\">
    <link href=\"../styles/create-proposal.css\" rel=\"stylesheet\">
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src=\"../js/ie.js\"></script>
    <script type=\"text/javascript\" src=\"../js/sweat_alert.js\"></script>
    <script type=\"text/javascript\" src=\"../js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"../js/croppie.js\"></script>
    <script src=\"https://checkout.stripe.com/checkout.js\"></script>
    <script src=\"../plugins/paymentGateway/proposals/javascript/javascript.js\"></script>
    <link rel=\"shortcut icon\" href=\"../images/gigtodoFav.ico\" type=\"image/x-icon\">
    <script>var videoOrNotVideo;</script>
</head>
<body class=\"is-responsive\">



<link href=\"https://www.gigtodo.com/styles/scoped_responsive_and_nav.css\" rel=\"stylesheet\">
<link href=\"https://www.gigtodo.com/styles/vesta_homepage.css\" rel=\"stylesheet\">

<div id=\"gnav-header\" class=\"gnav-header global-nav clear gnav-3\">
    <header id=\"gnav-header-inner\" class=\"gnav-header-inner clear apply-nav-height col-group has-svg-icons body-max-width\">
        <div class=\"col-xs-12\">
            <div id=\"gigtodo-logo\" class=\"apply-nav-height gigtodo-logo-svg gigtodo-logo-svg-logged-in loggedInLogo\">
                <a href=\"https://www.gigtodo.com\">
                    <img class=\"desktop\" src=\"https://www.gigtodo.com/images/sample.png\" width=\"150\">
                </a>
            </div>
            <button id=\"mobilemenu\" class=\"unstyled-button mobile-catnav-trigger apply-nav-height icon-b-1 tablet-catnav-enabled \">
                <span class=\"screen-reader-only\"></span>
                <div class=\"text-gray-lighter text-body-larger\">
          <span class=\"gigtodo-icon hamburger-icon nav-icon\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
              <path d=\"M20,6H4A1,1,0,1,1,4,4H20A1,1,0,0,1,20,6Z\" />
              <path d=\"M20,13H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,13Z\" />
              <path d=\"M20,20H4a1,1,0,0,1,0-2H20A1,1,0,0,1,20,20Z\" />
            </svg>
          </span>
                </div>
            </button>
            <div class=\"catnav-search-bar search-browse-wrapper with-catnav\">
                <div class=\"search-browse-inner\">
                    <form id=\"gnav-search\" class=\"search-nav expanded-search apply-nav-height\" method=\"post\">
                        <div class=\"gnav-search-inner clearable\">
                            <label for=\"search-query\" class=\"screen-reader-only\">Search for items</label>
                            <div class=\"search-input-wrapper text-field-wrapper\">
                                <input id=\"search-query\" class=\"rounded\" name=\"search_query\"
                                       placeholder=\"Find Services\" value=\"\"  autocomplete=\"off\">
                            </div>
                            <div class=\"search-button-wrapper hide\">
                                <button class=\"btn btn-primary\" name=\"search\" type=\"submit\" value=\"Search\">
                                    Search                </button>
                            </div>
                        </div>
                        <ul class=\"search-bar-panel d-none\"></ul>
                    </form>
                </div>
            </div>
            <ul class=\"account-nav apply-nav-height\">
                <li class=\"logged-in-link\">
                    <a class=\"menuItem\" href=\"https://www.gigtodo.com/freelancers\">
    <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
      <img width=\"135\" src=\"https://www.gigtodo.com/images/big-users.png\" style=\"width: 35px;height: 35px;top: -10px;\">
    </span>
                    </a>
                </li>
                <li class=\"logged-in-link\">
                    <a class=\"bell menuItem\" data-toggle=\"dropdown\" title=\"Notifications\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\"><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 229.238 229.238\" style=\"enable-background:new 0 0 229.238 229.238;\" xml:space=\"preserve\">
<path d=\"M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928
\tc-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937
\tc0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175
\tc4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222
\tH135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845
\tc31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928
\tc0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z\"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</span>
                        <span class=\"total-user-count count c-notifications-header\"></span>
                    </a>
                    <div class=\"dropdown-menu notifications-dropdown\">
                    </div>
                </li>
                <li class=\"logged-in-link\">
                    <a class=\"message menuItem\" data-toggle=\"dropdown\" title=\"Inbox\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\"><!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\tL338.213,256L482,112.212V399.787z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</span>
                        <span class=\"total-user-count count c-messages-header\"></span>
                    </a>
                    <div class=\"dropdown-menu messages-dropdown\">
                    </div>
                </li>
                <li class=\"logged-in-link\">
                    <a href=\"https://www.gigtodo.com/favorites\" class=\"heart menuItem\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
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
\t\t\tC482,254.358,413.255,312.939,309.193,401.614z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
 </span>
                        <span>
  <span class=\"total-user-count count c-favorites\"></span>
  </span>
                    </a>
                </li>
                <li class=\"logged-in-link\">
                    <a class=\"menuItem\" href=\"https://www.gigtodo.com/cart\">
  <span class=\"gigtodo-icon nav-icon gigtodo-icon-relative\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 33 33\" style=\"enable-background:new 0 0 33 33;\" xml:space=\"preserve\">
<g xmlns=\"http://www.w3.org/2000/svg\">
\t<g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M27.049,30.134H5.951c-0.99,0-1.81-0.743-1.908-1.728L2.659,14.537c-0.014-0.141,0.032-0.281,0.127-0.385    c0.095-0.105,0.229-0.165,0.371-0.165h26.688c0.141,0,0.276,0.06,0.371,0.165c0.095,0.104,0.141,0.245,0.127,0.385l-1.383,13.869    C28.86,29.391,28.039,30.134,27.049,30.134z M3.708,14.988l1.329,13.319c0.047,0.472,0.439,0.827,0.913,0.827h21.099    c0.474,0,0.867-0.355,0.914-0.827l1.329-13.319H3.708z\"/>
\t\t<g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M7.604,9.106c-0.143,0-0.285-0.061-0.383-0.179C7.042,8.716,7.07,8.4,7.282,8.223l6.246-5.24      c0.213-0.177,0.528-0.15,0.704,0.062c0.178,0.211,0.15,0.527-0.062,0.704l-6.246,5.24C7.831,9.067,7.717,9.106,7.604,9.106z\"/>
\t\t\t</g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M25.397,9.106c-0.113,0-0.227-0.039-0.321-0.117l-6.247-5.24c-0.211-0.178-0.239-0.493-0.062-0.705      c0.179-0.211,0.493-0.239,0.705-0.062l6.247,5.24c0.211,0.178,0.239,0.493,0.062,0.705C25.682,9.045,25.54,9.106,25.397,9.106z\"/>
\t\t\t</g>
\t\t</g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M31.275,14.988H1.725C0.774,14.988,0,14.214,0,13.263v-3.198c0-0.951,0.774-1.725,1.725-1.725h29.55    c0.951,0,1.725,0.774,1.725,1.725v3.198C33,14.214,32.227,14.988,31.275,14.988z M1.725,9.339C1.325,9.339,1,9.664,1,10.064v3.198    c0,0.4,0.325,0.725,0.725,0.725h29.55c0.399,0,0.725-0.325,0.725-0.725v-3.198c0-0.4-0.325-0.725-0.725-0.725H1.725z\"/>
\t</g>
\t<g>
\t\t<path d=\"M9.255,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C9.755,25.825,9.532,26.048,9.255,26.048z\"/>
\t\t<path d=\"M14.085,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C14.585,25.825,14.362,26.048,14.085,26.048z\"/>
\t\t<path d=\"M18.915,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C19.415,25.825,19.191,26.048,18.915,26.048z\"/>
\t\t<path d=\"M23.745,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C24.245,25.825,24.021,26.048,23.745,26.048z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</span>
                    </a>
                </li>
                <li class=\"logged-in-link\">
                    <div class=\"dropdown user-menu\">
                        <a href=\"#\" id=\"usermenu\" class=\"user dropdown-toggle menuItem\" style=\"margin-top: 17px;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"https://www.gigtodo.com/user_images/ty_1574032240.png\" width=\"27\" height=\"27\" class=\"rounded-circle\">
                            <span class=\"name\">tyrone</span>
                        </a>
                        <div class=\"dropdown-menu \" style=\"min-width:200px; width:auto!important;z-index:2000;\">
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/dashboard\">
                                Dashboard   </a>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#selling\">
                                Selling   </a>
                            <div id=\"selling\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/selling_orders\">
                                    Orders      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/proposals/view_proposals\">
                                    My Proposals      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/proposals/create_coupon\">
                                    Create A Coupon      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/requests/buyer_requests\">
                                    Buyer Requests      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/revenue\">
                                    Revenues      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/withdrawal_requests\">
                                    Withdrawal Requests      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#buying\">
                                Buying   </a>
                            <div id=\"buying\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/buying_orders\">
                                    Orders      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/purchases\">
                                    Purchases      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/favorites\">
                                    Favorites      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#requests\">
                                Requests   </a>
                            <div id=\"requests\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/requests/post_request\">
                                    Post A Request      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/requests/manage_requests\">
                                    Manage Requests      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#contacts\">
                                Contacts   </a>
                            <div id=\"contacts\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/manage_contacts?my_buyers\">
                                    My Buyers      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/manage_contacts?my_sellers\">
                                    My Sellers      </a>
                            </div>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#referrals\">
                                My Referrals   </a>
                            <div id=\"referrals\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/my_referrals\" data-target=\"#referrals\">
                                    User Referrals      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/proposal_referrals\" data-target=\"#referrals\">
                                    Proposal Referrals      </a>
                            </div>
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/conversations/inbox\">
                                Inbox Messages   </a>
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/tyrone\">
                                My Profile   </a>
                            <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-toggle=\"collapse\" data-target=\"#settings\">
                                Settings   </a>
                            <div id=\"settings\" class=\"dropdown-submenu collapse\">
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/settings?profile_settings\">
                                    Profile Settings      </a>
                                <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/settings?account_settings\">
                                    Account Settings      </a>
                            </div>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"https://www.gigtodo.com/logout\">
                                Logout   </a>
                        </div>
                    </div></li>
                <li class=\"logged-in-link mr-lg-0 mr-2\">
                    <a class=\"menuItem btn btn-success text-white\">&#036;0</a>
                </li>      </ul>
        </div>
    </header>
</div>

<div class=\"clearfix\"></div>
<div class=\"mp-box mp-box-white notop d-lg-block d-none\">

    <div class=\"container\">

        <div class=\"box-row\">

            <ul class=\"main-cat-list active\">

                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/dashboard\">Dashboard</a>

                </li>

                <li class=\"\">

                    <a href=\"#\">Selling <i class=\"fa fa-fw fa-caret-down\"></i></a>

                    <div class=\"menu-cont\">

                        <ul>


                            <li>

                                <a href=\"https://www.gigtodo.com/selling_orders\">Orders</a>

                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/proposals/view_proposals\">My Proposals</a>


                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/proposals/create_coupon\">Create A Coupon</a>


                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/requests/buyer_requests\">Buyer Requests</a>

                            </li>

                            <li>
                                <a href=\"https://www.gigtodo.com/revenue\">Revenues</a>
                            </li>

                            <li>
                                <a href=\"https://www.gigtodo.com/withdrawal_requests\">Withdrawal Requests</a>
                            </li>


                        </ul>

                    </div>

                </li>

                <li class=\"\">

                    <a href=\"#\">

                        Buying <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/buying_orders\">

                                    Orders
                                </a>

                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/purchases\">

                                    Purchases
                                </a>

                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/favorites\">

                                    Favorites
                                </a>

                            </li>

                        </ul>

                    </div>

                </li>





                <li class=\"\">

                    <a href=\"#\">

                        Requests <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/requests/manage_requests\">

                                    Manage Requests

                                </a>


                            </li>


                            <li>

                                <a href=\"https://www.gigtodo.com/requests/post_request\">

                                    Post A Request
                                </a>


                            </li>

                        </ul>

                    </div>

                </li>


                <li class=\"\">

                    <a href=\"#\">

                        Contacts <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/manage_contacts?my_buyers\">

                                    My Buyers
                                </a>

                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/manage_contacts?my_sellers\">

                                    My Sellers
                                </a>

                            </li>

                        </ul>

                    </div>

                </li>



                <li class=\"\">

                    <a href=\"#\">My Referrals <i class=\"fa fa-fw fa-caret-down\"></i></a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/my_referrals\">User Referrals</a>

                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/proposal_referrals\">Proposal Referrals</a>

                            </li>

                        </ul>

                    </div>

                </li>



                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/conversations/inbox\">Inbox Messages</a>

                </li>

                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/notifications\">Notifications</a>

                </li>


                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/tyrone\">

                        My Profile
                    </a>


                </li>


                <li class=\"\">

                    <a href=\"https://www.gigtodo.com/settings\">

                        Settings <i class=\"fa fa-fw fa-caret-down\"></i>

                    </a>

                    <div class=\"menu-cont\">

                        <ul>

                            <li>

                                <a href=\"https://www.gigtodo.com/settings?profile_settings\">Profile Settings</a>


                            </li>

                            <li>

                                <a href=\"https://www.gigtodo.com/settings?account_settings\">Account Settings</a>

                            </li>

                        </ul>

                    </div>

                </li>



            </ul>


        </div>

    </div>


</div><div class=\"clearfix\"></div>
<div class=\"cat-mobile\" id=\"gigtodo-modal-container\" style=\"display:none;\"><!--- cat-mobile Starts --->
    <div data-overlay-mask=\"\" class=\"overlay-mask mobile-catnav-overlay-mask\" data-aria-hidden=\"true\"></div>
    <div data-overlay-content-wrapper=\"\" class=\"overlay-mask overlay-content-wrapper mobile-catnav-overlay-mask\">
        <div class=\"mobile-catnav-wrapper overlay-region position-relative p-xs-0\" id=\"mobile-catnav-overlay\" aria-hidden=\"false\" data-overlay-has-trigger=\"true\" style=\"top: 0px;\">
            <div data-ui=\"mobile-cat-nav\" class=\"mobile-cat-nav bg-gray-lighter pb-xs-4 width-full position-fixed animated\" style=\"height: 100vh;\">

                <div class=\"bg-white display-flex-md show-md pt-md-3 pl-md-2 pb-md-3\">
                    <div class=\"flex-md-5 pl-md-0\">
                        <a role=\"button\" href=\"https://www.gigtodo.com\">
                            <img src=\"https://www.gigtodo.com/images/sample.png\" width=\"158\">
                        </a>
                    </div>
                    <div class=\"flex-md-1 pr-md-2\">
                        <button class=\"btn-link text-right overlay-close flex-xs-1 justify-self-flex-end border-0 p-md-0\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-header\" class=\"mobile-catnav-header bb-xs-1 align-items-center bg-white display-flex-xs flex-nowrap position-relative height-50px\">
                    <button class=\"mobile-catnav-back-btn btn-link overlay-back p-xs-2 text-left display-none flex-xs-1 align-self-flex-start z-index-1 position-absolute\" data-subnav-id=\"0\" data-ternav-id=\"0\" data-topnav-name=\"\" data-subnav-name=\"\">
                        <span class=\"screen-reader-only\">Go Back</span>
                        <span class=\"gigtodo-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                <path d=\"M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z\"></path>
              </svg>
            </span>
                    </button>
                    <div class=\"flex-xs-4 width-full pt-md-4 pb-md-4 pl-xs-2\">
                        <h6 id=\"mobile-catnav-header-title\" class=\"text-left position-absolute vertical-center\"><!--  <a href=\"https://www.gigtodo.com\"><img src=\"images/gigtodoFav.ico\" class=\"rounded\" title='Home' alt='Home'/></a> --> Browse Categories</h6>
                        <h6 id=\"mobile-sub-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8\"></h6>
                        <h6 id=\"mobile-tertiary-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8 display-none\"></h6>
                    </div>
                    <div class=\"flex-xs-1 width-full\">
                        <button class=\"show-xs show-sm btn-link p-xs-2 overlay-close border-0 float-right\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>

                <div data-ui=\"mobile-catnav-scroll-wrapper\" class=\"height-full overflow-y-scroll\">

                    <div class=\"mobile-topnav bg-white animated\">
                        <ul data-ui=\"mobile-top-catnav-container\" class=\"mobile-top-catnav-container list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"11\" data-name=\"Graphics &amp; Design\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Graphics &amp; Design</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"12\" data-name=\"Digital Marketing\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Digital Marketing</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"13\" data-name=\"Writing & Translation\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Writing & Translation</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"14\" data-name=\"Video & Animation
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Video & Animation
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"16\" data-name=\"Programming & Tech
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Programming & Tech
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"17\" data-name=\"Business
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Business
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"18\" data-name=\"Fun & Lifestyle
\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Fun & Lifestyle
                                    </div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item\" data-uid=\"19\" data-name=\"Music &amp; Audio\">
                                <div class=\"flag\">
                                    <div class=\"flag-body\">Music &amp; Audio</div>

                                    <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-11\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/graphics-design\">
                                    View All Graphics &amp; Design                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/logo-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Logo Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/business-cards-amp-stationery\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Cards &amp; Stationery</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/illustration\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Illustration</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/cartoons-caricatures\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Cartoons Caricatures</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/flyers-posters\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Flyers Posters</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/book-covers-packaging\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Book Covers & Packaging</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/web-amp-mobile-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web &amp; Mobile Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/social-media-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Social Media Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/banner-ads\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Banner Ads</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/photoshop-editing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Photoshop Editing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/3d-2d-models\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">3D & 2D Models</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/t-shirts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">T-Shirts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/presentation-design\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Presentation Design</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/graphics-design/dsdsds\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-12\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/digital-marketing\">
                                    View All Digital Marketing                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/social-media-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Social Media Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/seo\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">SEO</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/web-traffic\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web Traffic</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/content-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Content Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/video-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Video Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/email-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Email Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/search-display-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Search & Display Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/marketing-strategy\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Marketing Strategy</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/web-analytics\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web Analytics</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/influencer-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Influencer Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/local-listings\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Local Listings</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/domain-research\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Domain Research</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/e-commerce-marketing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">E-Commerce Marketing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/digital-marketing/mobile-advertising\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Mobile Advertising</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-13\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/writing-translation\">
                                    View All Writing & Translation                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/resumes-cover-letters\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Resumes & Cover Letters</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/proofreading-editing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Proofreading & Editing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/translation\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Translation</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/creative-writing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Creative Writing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/business-copywriting\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Copywriting</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/research-summaries\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Research & Summaries</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/articles-blog-posts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Articles & Blog Posts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/press-releases\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Press Releases</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/transcription\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Transcription</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/legal-writing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Legal Writing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/writing-translation/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-14\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/video-animation\">
                                    View All Video & Animation
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/whiteboard-explainer-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Whiteboard & Explainer Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/intros-animated-logos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Intros & Animated Logos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/promotional-brand-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Promotional & Brand Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/editing-post-production\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Editing & Post Production</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/lyric-music-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Lyric & Music Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/spokespersons-testimonials\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Spokespersons & Testimonials</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/video-animation/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-16\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/programming-tech\">
                                    View All Programming & Tech
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/wordpress\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">WordPress</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/web-programming\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Web Programming</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/website-builders-cms\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Website Builders & CMS</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/ecommerce\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Ecommerce</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/mobile-apps-web\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Mobile Apps & Web</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/desktop-applications\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Desktop applications</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/support-it\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Support & IT</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/chatbots\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Chatbots</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/data-analysis-reports\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Data Analysis & Reports</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/convert-files\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Convert Files</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/databases\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Databases</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/user-testing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">User Testing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/programming-tech/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-17\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/business\">
                                    View All Business
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/virtual-assistant\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Virtual Assistant</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/market-research\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Market Research</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/business-plans\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Plans</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/branding-services\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Branding Services</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/legal-consulting\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Legal Consulting</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/financial-consulting\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Financial Consulting</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/business-tips\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Business Tips</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/presentations\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Presentations</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/career-advice\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Career Advice</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/flyer-distribution\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Flyer Distribution</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/business/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-18\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/fun-lifestyle\">
                                    View All Fun & Lifestyle
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/online-lessons\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Online Lessons</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/arts-crafts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Arts & Crafts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/relationship-advice\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Relationship Advice</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/health-nutrition-fitness\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Health, Nutrition & Fitness</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/astrology-readings\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Astrology & Readings</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/spiritual-healing\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Spiritual & Healing</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/family-genealogy\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Family & Genealogy</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/collectibles\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Collectibles</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/greeting-cards-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Greeting Cards & Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/viral-videos\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Viral Videos</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/pranks-stunts\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Pranks & Stunts</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/celebrity-impersonators\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Celebrity Impersonators</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/fun-lifestyle/other\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Other</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-19\">
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin display-none\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 text-gray display-inline-block width-full text-underline\" href=\"https://www.gigtodo.com/categories/music-audio\">
                                    View All Music &amp; Audio                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/voice-over\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Voice Over</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/mixing-mastering\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Mixing & Mastering</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/producers-composers\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Producers & Composers</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/singer-songwriters\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Singer-Songwriters</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/session-musicians-singers\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Session Musicians & Singers</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/jingles-drops\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Jingles & Drops</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/categories/music-audio/sound-effects\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Sound Effects</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- cat-mobile Ends --->
<div class=\"user-mobile\" id=\"gigtodo-modal-container\" style=\"display: none;\">
    <!--- user-mobile Starts --->
    <div data-overlay-mask=\"\" class=\"overlay-mask mobile-catnav-overlay-mask\" data-aria-hidden=\"true\"></div>
    <div data-overlay-content-wrapper=\"\" class=\"overlay-mask overlay-content-wrapper mobile-catnav-overlay-mask\">
        <div class=\"mobile-catnav-wrapper overlay-region position-relative p-xs-0\" id=\"mobile-catnav-overlay\" aria-hidden=\"false\" data-overlay-has-trigger=\"true\" style=\"top: 0px;\">
            <div data-ui=\"mobile-cat-nav\" class=\"mobile-cat-nav bg-gray-lighter pb-xs-4 width-full position-fixed animated\" style=\"height: 100vh;\">
                <div class=\"bg-white display-flex-md show-md pt-md-3 pl-md-2 pb-md-3\">
                    <div class=\"flex-md-5 pl-md-0\">
                        <a role=\"button\" href=\"/?ref=catnav-logo\">
                            <img src=\"https://www.gigtodo.com/images/sample.png\" width=\"158\">
                        </a>
                    </div>
                    <div class=\"flex-md-1 pr-md-2\">
                        <button class=\"btn-link text-right overlay-close flex-xs-1 justify-self-flex-end border-0 p-md-0\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>
                <div data-ui=\"mobile-catnav-header\" class=\"mobile-catnav-header bb-xs-1 align-items-center bg-white display-flex-xs flex-nowrap position-relative height-50px\">
                    <button class=\"mobile-catnav-back-btn btn-link overlay-back p-xs-2 text-left display-none flex-xs-1 align-self-flex-start z-index-1 position-absolute\" data-subnav-id=\"0\" data-ternav-id=\"0\" data-topnav-name=\"\" data-subnav-name=\"\">
            <span class=\"gigtodo-icon\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" focusable=\"false\">
                <path d=\"M16,21a0.994,0.994,0,0,1-.664-0.253L5.5,12l9.841-8.747a1,1,0,0,1,1.328,1.494L8.5,12l8.159,7.253A1,1,0,0,1,16,21Z\"></path>
              </svg>
            </span>
                    </button>
                    <div class=\"flex-xs-4 width-full pt-md-4 pb-md-4 pl-xs-2\">
                        <h6 id=\"mobile-catnav-header-title\" class=\"text-left position-absolute vertical-center\">User Menu</h6>
                        <h6 id=\"mobile-sub-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8\"></h6>
                        <h6 id=\"mobile-tertiary-catnav-header-title\" class=\"text-center position-absolute position-left position-right vertical-center pl-md-8 pr-md-8 display-none\"></h6>
                    </div>
                    <div class=\"flex-xs-1 width-full\">
                        <button class=\"show-xs show-sm btn-link p-xs-2 overlay-close border-0 float-right\" data-overlay-close=\"\">
                            <span class=\"screen-reader-only\">Close Menu</span>
                            <span class=\"gigtodo-icon\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                  <path d=\"M13.414,12l6.293-6.293a1,1,0,0,0-1.414-1.414L12,10.586,5.707,4.293A1,1,0,0,0,4.293,5.707L10.586,12,4.293,18.293a1,1,0,1,0,1.414,1.414L12,13.414l6.293,6.293a1,1,0,0,0,1.414-1.414Z\"></path>
                </svg>
              </span>
                        </button>
                    </div>
                </div>
                <div data-ui=\"mobile-catnav-scroll-wrapper\" class=\"height-full overflow-y-scroll\">
                    <div class=\"mobile-topnav bg-white animated\">
                        <ul class=\"mobile-top-catnav-container list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\" data-uid=\"d-1\" data-name=\"Dashboard\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g transform=\"translate(1 1)\">
\t<g>
\t\t<g>
\t\t\t<path stroke=\"black\" stroke-width=\"10\" d=\"M336.067,208.92l-40.96,24.747c-14.507,8.533-29.867,16.213-44.373,23.04c-4.267,1.707-9.387,4.267-14.507,6.827
\t\t\t\tc-17.92,9.387-27.307,29.013-23.04,48.64c3.413,15.36,16.213,28.16,31.573,31.573c3.413,0.853,6.827,0.853,10.24,0.853
\t\t\t\tc16.213,0,30.72-9.387,38.4-23.893c1.707-4.267,4.267-9.387,6.827-14.507c7.68-14.507,14.507-29.867,23.04-44.373l24.747-40.96
\t\t\t\tc1.707-3.413,0.853-6.827-1.707-10.24C343.747,207.213,339.48,207.213,336.067,208.92z M308.76,252.44
\t\t\t\tc-9.387,15.36-17.067,30.72-23.893,46.08c-1.707,5.12-4.267,9.387-6.827,14.507c-5.12,11.093-17.067,16.213-29.013,13.653
\t\t\t\tc-9.387-1.707-17.067-9.387-18.773-18.773c-2.56-11.947,2.56-23.893,13.653-29.013c4.267-2.56,9.387-4.267,14.507-6.827
\t\t\t\tc15.36-7.68,31.573-15.36,46.08-23.893l11.093-6.827L308.76,252.44z\"/>
\t\t\t<path stroke=\"black\" stroke-width=\"13\" d=\"M492.719,207.208c-0.108-0.575-0.27-1.146-0.492-1.702c-0.223-0.558-0.507-1.069-0.837-1.537
\t\t\t\tc-12.787-30.616-31.365-58.265-54.348-81.565c-0.324-0.482-0.701-0.944-1.135-1.378s-0.896-0.811-1.378-1.135
\t\t\t\tC388.233,74.226,324.764,45.933,255,45.933c-33.418,0-65.389,6.5-94.725,18.281c-0.575,0.108-1.146,0.27-1.701,0.492
\t\t\t\tc-0.557,0.223-1.069,0.507-1.537,0.837c-30.616,12.787-58.265,31.365-81.565,54.348c-0.482,0.324-0.944,0.701-1.378,1.135
\t\t\t\ts-0.812,0.896-1.135,1.378C27.293,168.7-1,232.169-1,301.933c0,58.027,18.773,113.493,55.467,158.72
\t\t\t\tc1.707,2.56,4.267,3.413,6.827,3.413h387.413c2.56,0,5.12-0.853,6.827-3.413C492.227,415.427,511,359.96,511,301.933
\t\t\t\tC511,268.515,504.5,236.544,492.719,207.208z M445.293,447H65.56c-11.539-14.88-21.122-30.844-28.695-47.616l23.575-9.557
\t\t\t\tc4.267-1.707,5.973-6.827,4.267-11.093c-1.707-4.267-6.827-5.973-11.093-4.267l-23.11,9.369
\t\t\t\tc-8.574-23.342-13.394-48.021-14.278-73.369H75.8c5.12,0,8.533-3.413,8.533-8.533S80.92,293.4,75.8,293.4H16.237
\t\t\t\tc0.957-26.907,6.416-52.715,15.648-76.694L55.32,226.84c0.853,0.853,2.56,0.853,3.413,0.853c3.413,0,5.973-1.707,7.68-5.12
\t\t\t\tc1.707-4.267,0-9.387-4.267-11.093l-23.672-10.237c10.699-22.831,24.906-43.721,41.922-61.967l17.59,17.59
\t\t\t\tc1.707,1.707,3.413,2.56,5.973,2.56s4.267-0.853,5.973-2.56c3.413-3.413,3.413-8.533,0-11.947l-17.59-17.59
\t\t\t\tc19.117-17.828,41.131-32.581,65.244-43.438l9.52,23.482c0.853,3.413,4.267,5.12,7.68,5.12c0.853,0,1.707,0,3.413-0.853
\t\t\t\tc4.267-1.707,5.973-6.827,4.267-11.093l-9.329-23.012c23.021-8.463,47.679-13.452,73.329-14.364v59.563
\t\t\t\tc0,5.12,3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533V63.17c26.907,0.957,52.715,6.416,76.694,15.648l-10.134,23.436
\t\t\t\tc-1.707,4.267,0,9.387,4.267,11.093c0.853,0.853,2.56,0.853,3.413,0.853c3.413,0,6.827-2.56,7.68-5.12l10.237-23.672
\t\t\t\tc22.831,10.699,43.721,24.906,61.967,41.922l-17.59,17.59c-3.413,3.413-3.413,8.533,0,11.947c1.707,1.707,3.413,2.56,5.973,2.56
\t\t\t\tc1.707,0,4.267-0.853,5.973-2.56l17.59-17.59c17.828,19.117,32.581,41.131,43.438,65.244l-23.482,9.52
\t\t\t\tc-4.267,1.707-5.973,6.827-4.267,11.093c0.853,3.413,4.267,5.12,7.68,5.12c0.853,0,1.707-0.853,3.413-0.853l23.013-9.329
\t\t\t\tc8.463,23.021,13.452,47.679,14.364,73.329H434.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h59.575
\t\t\t\tc-0.927,26.593-6.172,52.45-15.418,76.799l-23.677-10.239c-4.267-1.707-9.387,0-11.093,4.267c-1.707,4.267,0,9.387,4.267,11.093
\t\t\t\tl23.981,10.37C464.644,418.298,455.773,433.121,445.293,447z\"/>
\t\t</g>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Dashboard
                                        </div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/notifications\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">
                    <!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\">
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 229.238 229.238\" style=\"enable-background:new 0 0 229.238 229.238;\" xml:space=\"preserve\">
<path d=\"M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928
\tc-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937
\tc0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175
\tc4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222
\tH135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845
\tc31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928
\tc0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z\"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Notifications
                                            <span class=\"badge badge-pill badge-danger\"> 9 New</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/conversations/inbox\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">
                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path d=\"M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106
\t\t\tC512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z
\t\t\t M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787
\t\t\tL338.213,256L482,112.212V399.787z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Messages
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/favorites\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 512 512\" style=\"enable-background:new 0 0 512 512;\" xml:space=\"preserve\">
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
\t\t\tC482,254.358,413.255,312.939,309.193,401.614z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Favorites
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/cart\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 33 33\" style=\"enable-background:new 0 0 33 33;\" xml:space=\"preserve\">
<g xmlns=\"http://www.w3.org/2000/svg\">
\t<g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M27.049,30.134H5.951c-0.99,0-1.81-0.743-1.908-1.728L2.659,14.537c-0.014-0.141,0.032-0.281,0.127-0.385    c0.095-0.105,0.229-0.165,0.371-0.165h26.688c0.141,0,0.276,0.06,0.371,0.165c0.095,0.104,0.141,0.245,0.127,0.385l-1.383,13.869    C28.86,29.391,28.039,30.134,27.049,30.134z M3.708,14.988l1.329,13.319c0.047,0.472,0.439,0.827,0.913,0.827h21.099    c0.474,0,0.867-0.355,0.914-0.827l1.329-13.319H3.708z\"/>
\t\t<g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M7.604,9.106c-0.143,0-0.285-0.061-0.383-0.179C7.042,8.716,7.07,8.4,7.282,8.223l6.246-5.24      c0.213-0.177,0.528-0.15,0.704,0.062c0.178,0.211,0.15,0.527-0.062,0.704l-6.246,5.24C7.831,9.067,7.717,9.106,7.604,9.106z\"/>
\t\t\t</g>
\t\t\t<g>
\t\t\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"1\" d=\"M25.397,9.106c-0.113,0-0.227-0.039-0.321-0.117l-6.247-5.24c-0.211-0.178-0.239-0.493-0.062-0.705      c0.179-0.211,0.493-0.239,0.705-0.062l6.247,5.24c0.211,0.178,0.239,0.493,0.062,0.705C25.682,9.045,25.54,9.106,25.397,9.106z\"/>
\t\t\t</g>
\t\t</g>
\t\t<path xmlns=\"http://www.w3.org/2000/svg\" stroke=\"black\" stroke-width=\"0.8\" d=\"M31.275,14.988H1.725C0.774,14.988,0,14.214,0,13.263v-3.198c0-0.951,0.774-1.725,1.725-1.725h29.55    c0.951,0,1.725,0.774,1.725,1.725v3.198C33,14.214,32.227,14.988,31.275,14.988z M1.725,9.339C1.325,9.339,1,9.664,1,10.064v3.198    c0,0.4,0.325,0.725,0.725,0.725h29.55c0.399,0,0.725-0.325,0.725-0.725v-3.198c0-0.4-0.325-0.725-0.725-0.725H1.725z\"/>
\t</g>
\t<g>
\t\t<path d=\"M9.255,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C9.755,25.825,9.532,26.048,9.255,26.048z\"/>
\t\t<path d=\"M14.085,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C14.585,25.825,14.362,26.048,14.085,26.048z\"/>
\t\t<path d=\"M18.915,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C19.415,25.825,19.191,26.048,18.915,26.048z\"/>
\t\t<path d=\"M23.745,26.048c-0.276,0-0.5-0.224-0.5-0.5v-7.25c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v7.25    C24.245,25.825,24.021,26.048,23.745,26.048z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Cart
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger top-nav-item a11y-focus-only\">
                                <a href=\"https://www.gigtodo.com/logout\">
                                    <div class=\"flag\">
                    <span class=\"gigtodo-icon icon-smaller mr-2\">

<svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
     viewBox=\"0 0 490.3 490.3\" style=\"enable-background:new 0 0 490.3 490.3;\" xml:space=\"preserve\">
<g>
\t<g>
\t\t<path  stroke=\"black\" stroke-width=\"10\" d=\"M0,121.05v248.2c0,34.2,27.9,62.1,62.1,62.1h200.6c34.2,0,62.1-27.9,62.1-62.1v-40.2c0-6.8-5.5-12.3-12.3-12.3
\t\t\ts-12.3,5.5-12.3,12.3v40.2c0,20.7-16.9,37.6-37.6,37.6H62.1c-20.7,0-37.6-16.9-37.6-37.6v-248.2c0-20.7,16.9-37.6,37.6-37.6h200.6
\t\t\tc20.7,0,37.6,16.9,37.6,37.6v40.2c0,6.8,5.5,12.3,12.3,12.3s12.3-5.5,12.3-12.3v-40.2c0-34.2-27.9-62.1-62.1-62.1H62.1
\t\t\tC27.9,58.95,0,86.75,0,121.05z\"/>
\t\t<path  stroke=\"black\" stroke-width=\"10\" d=\"M385.4,337.65c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l83.9-83.9c4.8-4.8,4.8-12.5,0-17.3l-83.9-83.9
\t\t\tc-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l63,63H218.6c-6.8,0-12.3,5.5-12.3,12.3c0,6.8,5.5,12.3,12.3,12.3h229.8l-63,63
\t\t\tC380.6,325.15,380.6,332.95,385.4,337.65z\"/>
\t</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    </span>
                                        <div class=\"flag-body\">
                                            Logout
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"mobile-subnav bg-white animated\" id=\"mobile-sub-catnav-content-d-1\">
                        <!--- mobile-subnav bg-white animated Starts --->
                        <ul class=\"mobile-sub-catnav-container list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong subnav-item a11y-focus-only\">
                                <a class=\"p-xs-1 display-inline-block text-underline\" href=\"https://www.gigtodo.com/dashboard\">
                                    View Dashboard Home
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"s-1\" data-name=\"Selling\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Selling</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"b\" data-name=\"Buying\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Buying</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"r\" data-name=\"Requests\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Requests</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"contacts\" data-name=\"Contacts\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Contacts</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"referrals\" data-name=\"My Referrals\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">My Referrals</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\">
                                <a href=\"https://www.gigtodo.com/tyrone\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">My Profile</div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\" data-uid=\"settings\" data-name=\"Settings\">
                                <a href=\"#\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Settings</div>

                                        <div class='flag-img flag-img-right'>
  <span class='gigtodo-icon float-right'>
  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden='true' focusable='false'>
  <path d='M10,17a1,1,0,0,1-.707-1.707L12.586,12,9.293,8.707a1,1,0,0,1,1.414-1.414L15.414,12l-4.707,4.707A1,1,0,0,1,10,17Z'></path>
  </svg>
  </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"p-xs-2 bb-xs-1 text-body-larger subnav-item\">
                                <a href=\"https://www.gigtodo.com/customer_support\">
                                    <div class=\"flag\">
                                        <div class=\"flag-body\">Contact Support</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-subnav bg-white animated Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-s-1\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/selling_orders\">
                                    Orders                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/proposals/view_proposals\">
                                    My Proposals                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/requests/buyer_requests\">
                                    Buyer Requests                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/revenue\">
                                    Revenues                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger strong\">
                                <a class=\"p-xs-1 display-inline-block text-underline\" href=\"https://www.gigtodo.com/proposals/create_proposal\">
                                    Create A New Proposal
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-b\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/buying_orders\">
                                    Orders                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/purchases\">
                                    Purchases                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/favorites\">
                                    Favorites                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-r\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/requests/post_request\">
                                    Post A Request                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/requests/manage_requests\">
                                    Manage Requests                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-contacts\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/manage_contacts?my_buyers\">
                                    My Buyers                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/manage_contacts?my_sellers\">
                                    My Sellers                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-referrals\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/my_referrals\">
                                    User Referrals                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/proposal_referrals\">
                                    Proposal Referrals                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                    <div class=\"mobile-tertiarynav bg-white animated display-none\" id=\"mobile-tertiary-nav-settings\">
                        <!--- mobile-tertiarynav Starts --->
                        <ul class=\"list-unstyled mobile-catnav-margin\">
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/settings?profile_settings\">
                                    Profile Settings                </a>
                            </li>
                            <li class=\"p-xs-1 bb-xs-1 text-body-larger\">
                                <a class=\"p-xs-1 display-inline-block\" href=\"https://www.gigtodo.com/settings?account_settings\">
                                    Account Settings                </a>
                            </li>
                        </ul>
                    </div>
                    <!--- mobile-tertiarynav Ends --->
                </div>
            </div>
        </div>
    </div>
</div>
<!--- user-mobile Ends --->



<button data-toggle=\"modal\" data-target=\".purchase-options\"  id=\"un-button\" class=\"un-left css3\" style=\"background-color:#28a745; color:white; margin-top: 30.0035px; left: -6px; pointer: cursor; \">

    <i style=\"cursor:pointer;\" class=\"fa fa-credit-card\"></i> <span style=\"cursor:pointer;\"> Purchase This Script </span>

</button>

<div class=\"modal fade purchase-options\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title pb-3\" id=\"exampleModalLongTitle\">Purchase Options</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span style=\"cursor:pointer;\" aria-hidden=\"true\">&times;</span>

                </button>

            </div>

            <div class=\"modal-body\">

                <span style=\"position: relative; top: -40px;\" class=\"title\">The only legit places you can purchase this script from. </span>
                <div class=\"row\">
                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://codecanyon.net/item/gigtodo-freelance-marketplace-script/23855397\"><img width=\"210px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/codecanyon-logo.png\"></a>
                    </div>

                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://www.codester.com/items/7515/gigtodo-freelance-service-marketplace\"> <img style=\"position: relative; top: 9px;\" width=\"210px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/c-logo.jpg\"></a>
                    </div>

                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://www.pixinal.com/store/product/gigtodo-script/\"><img style=\"position: relative; top: -4px;\" width=\"210px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/image_109.png\"></a>
                    </div>

                    <div class=\"col\">
                        <a target=\"_blank\" href=\"https://alkanyx.com/item/232/GigToDoScript---Freelance-Service-Marketplace\"><img class=\"mt-4 mb-4\" width=\"220px\" src=\"https://www.pixinal.com/wp-content/uploads/2019/11/alkanyx-logo.png\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav id=\"tabs\">

    <div class=\"container\">

        <div class=\"breadcrumb flat mb-0 nav\" role=\"tablist\">
            <a class=\"nav-link active\" href=\"#overview\">Overview</a>

            <a class=\"nav-link d-none \" href=\"#video\">Video Settings</a>

            <a class=\"nav-link active \" href=\"#pricing\">Pricing</a>

            <a class=\"nav-link \" href=\"#description\">Description & FAQ</a>
            <a class=\"nav-link \" href=\"#requirements\">Requirements</a>
            <a class=\"nav-link \" href=\"#gallery\">Gallery</a>
            <a class=\"nav-link \" href=\"#publish\">Submit For Approval</a>
        </div>

    </div>

</nav><div class=\"container mt-5 mb-5\"><!--- container mt-5 Starts --->
    <div class=\"row\"><!--- row Starts --->
        <div class=\"col-md-8\"><!--- col-md-8 Starts --->
            <div class=\"tab-content card card-body\"><!--- tab-content Starts --->
                <div class=\"tab-pane fade \" id=\"overview\">
                    <form action=\"#\" method=\"post\" class=\"proposal-form\"><!--- form Starts -->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Proposal Title</div>
                            <div class=\"col-md-9\"><textarea name=\"proposal_title\" rows=\"2\" placeholder=\"I Will\" required=\"\" class=\"form-control\">Raba</textarea></div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\"> Category </div>
                            <div class=\"col-md-9\">
                                <select name=\"proposal_cat_id\" id=\"category\" class=\"form-control mb-3\" required>
                                    <option value=\"1\" selected> Graphics &amp; Design </option>
                                    <option value=\"2\"> Digital Marketing </option>
                                    <option value=\"3\"> Writing & Translation </option>
                                    <option value=\"4\"> Video & Animation
                                    </option>
                                    <option value=\"6\"> Programming & Tech
                                    </option>
                                    <option value=\"7\"> Business
                                    </option>
                                    <option value=\"8\"> Fun & Lifestyle
                                    </option>
                                    <option value=\"9\"> Music &amp; Audio </option>
                                </select>
                                <small class=\"form-text text-danger\"></small>
                                <select name=\"proposal_child_id\" id=\"sub-category\" class=\"form-control\" required>
                                    <option value=\"1\" selected> Logo Design </option>
                                    <option value='2'> Business Cards &amp; Stationery </option><option value='3'> Illustration </option><option value='4'> Cartoons Caricatures </option><option value='5'> Flyers Posters </option><option value='6'> Book Covers & Packaging </option><option value='7'> Web &amp; Mobile Design </option><option value='8'> Social Media Design </option><option value='9'> Banner Ads </option><option value='12'> Photoshop Editing </option><option value='13'> 3D & 2D Models </option><option value='14'> T-Shirts </option><option value='15'> Presentation Design </option><option value='16'> Other </option><option value='102'>  </option>\t</select>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Delivery Time</div>
                            <div class=\"col-md-9\">
                                <select name=\"delivery_id\" class=\"form-control\" required=\"\">
                                    <option value=\"1\">  1 Day </option>
                                    <option value='2'>2 Days</option><option value='3'>3 Days</option><option value='4'>4 Days</option><option value='5'>5 Days</option><option value='6'>6 Days</option><option value='7'>7 Days</option><option value='8'>5 minutes</option>\t</select>
                            </div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <label class=\"col-md-3 control-label\"> Enable Referrals : </label>
                            <div class=\"col-md-9\">
                                <select name=\"proposal_enable_referrals\" class=\"proposal_enable_referrals form-control\" required=\"\">
                                    <option value=\"no\"> No </option>
                                    <option value=\"yes\"> Yes </option>
                                </select>
                                <small>If enabled, other users can promote your proposal by sharing it on different platforms.</small>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row proposal_referral_money\"><!--- form-group row Starts --->
                            <label class=\"col-md-3 control-label\"> Promotion Commission: </label>
                            <div class=\"col-md-9\">
                                <input type=\"number\" name=\"proposal_referral_money\" class=\"form-control\" min=\"1\" max=\"100\" value=\"0\">
                                <small>Figure should be in percentage. E.g 20 is the same as 20% from the sale of this proposal.</small>
                                <br>
                                <small>
                                    When another user promotes your proposal, how much would you like that user to get from the sale? (in dollars)
                                </small>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group row\"><!--- form-group row Starts --->
                            <div class=\"col-md-3\">Tags</div>
                            <div class=\"col-md-9\"><input type=\"text\" name=\"proposal_tags\" class=\"form-control\" data-role=\"tagsinput\" value=\"test\"></div>
                            <small class=\"form-text text-danger\"></small>
                        </div><!--- form-group row Ends --->

                        <div class=\"form-group mb-0\"><!--- form-group Starts --->
                            <a href=\"view_proposals\" class=\"float-left btn btn-secondary\">Cancel</a>
                            <input class=\"btn btn-success float-right\" type=\"submit\" value=\"Save & Continue\">
                        </div><!--- form-group Starts --->

                    </form><!--- form Ends -->        </div>
                <div class=\"tab-pane fade show active\" id=\"pricing\">
                    <h5 class=\"font-weight-normal float-left\">Pricing</h5>
                    <div class=\"float-right switch-box\">
                        <span class=\"text\">Fixed Price :</span>
                        <label class=\"switch\">
                            <input type=\"checkbox\" class=\"pricing\">
                            <span class=\"slider\"></span>
                        </label>
                    </div>

                    <div class=\"clearfix\"></div>

                    <hr class=\"mt-0\">

                    <div class=\"form-group row proposal-price justify-content-center\">
                        <div class=\"col-md-7\">
                            <div class=\"input-group\">
<span class=\"input-group-addon font-weight-bold\">
&#036;</span>
                                <input type=\"number\" class=\"form-control\" form=\"pricing-form\" name=\"proposal_price\" min=\"0\" value=\"0\">
                            </div>
                            <small>If you want to use packages, you need to set this field value to 0. </small>
                        </div>
                    </div>

                    <div class=\"packages\"><table class=\"table table-bordered packages\">

                            <thead>

                            <tr>

                                <th></th>
                                <th>Basic</th>
                                <th>Standard</th>
                                <th>Advance</th>

                            </tr>

                            </thead>

                            <tbody>

                            <form action=\"#\" method=\"post\" class=\"pricing-form\" id=\"pricing-form\">

                                <input type=\"hidden\" name=\"proposal_packages[1][package_id]\" form=\"pricing-form\" value=\"1765\">
                                <input type=\"hidden\" name=\"proposal_packages[2][package_id]\" form=\"pricing-form\" value=\"1766\">
                                <input type=\"hidden\" name=\"proposal_packages[3][package_id]\" form=\"pricing-form\" value=\"1767\">

                                <tr>

                                    <td>Description</td>

                                    <td class=\"p-0\"><textarea maxlength=\"35\" name=\"proposal_packages[1][description]\" class=\"form-control\" placeholder=\"Description\"></textarea></td>
                                    <td class=\"p-0\"><textarea maxlength=\"35\" name=\"proposal_packages[2][description]\" class=\"form-control\" placeholder=\"Description\"></textarea></td>
                                    <td class=\"p-0\"><textarea maxlength=\"35\" name=\"proposal_packages[3][description]\" class=\"form-control\" placeholder=\"Description\"></textarea></td>

                                </tr>


                                <tr class=\"delivery-time\">

                                    <td>Delivery Time</td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[1][delivery_time]\" class=\"form-control\">

                                            <option value='1' selected>1 Day</option><option value='2' >2 Days</option><option value='3' >3 Days</option><option value='4' >4 Days</option><option value='5' >5 Days</option><option value='6' >6 Days</option><option value='7' >7 Days</option><option value='5' >5 minutes</option>
                                        </select>

                                    </td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[2][delivery_time]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='1' selected>1 Day</option><option value='2' >2 Days</option><option value='3' >3 Days</option><option value='4' >4 Days</option><option value='5' >5 Days</option><option value='6' >6 Days</option><option value='7' >7 Days</option><option value='5' >5 minutes</option>
                                        </select></td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[3][delivery_time]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='1' selected>1 Day</option><option value='2' >2 Days</option><option value='3' >3 Days</option><option value='4' >4 Days</option><option value='5' >5 Days</option><option value='6' >6 Days</option><option value='7' >7 Days</option><option value='5' >5 minutes</option>
                                        </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>Revisions</td>

                                    <td class=\"p-0\">

                                        <select name=\"proposal_packages[1][revisions]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='0'selected>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                                        </select>

                                    </td><td class=\"p-0\">

                                        <select name=\"proposal_packages[2][revisions]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='0'selected>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                                        </select>

                                    </td><td class=\"p-0\">

                                        <select name=\"proposal_packages[3][revisions]\" form=\"pricing-form\" class=\"form-control\">

                                            <option value='0'selected>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option>
                                        </select>

                                    </td>

                                </tr>

                                <tr>

                                    <td>Price</td>

                                    <td class=\"p-0\">

                                        <!-- <select name=\"\" class=\"form-control\">
                                        <option value='5'selected>&#036;5</option><option value='10'>&#036;10</option><option value='15'>&#036;15</option><option value='20'>&#036;20</option><option value='25'>&#036;25</option><option value='50'>&#036;50</option><option value='60'>&#036;60</option><option value='70'>&#036;70</option><option value='80'>&#036;80</option><option value='90'>&#036;90</option><option value='100'>&#036;100</option></select> -->

                                        <input type=\"number\" min='5' required name=\"proposal_packages[1][price]\" form=\"pricing-form\" value=\"5\" class=\"form-control\">

                                    </td><td class=\"p-0\">

                                        <!-- <select name=\"proposal_packages[2][price]\" class=\"form-control\">
                                            <option value='5'>&#036;5</option><option value='10'selected>&#036;10</option><option value='15'>&#036;15</option><option value='20'>&#036;20</option><option value='25'>&#036;25</option><option value='50'>&#036;50</option><option value='60'>&#036;60</option><option value='70'>&#036;70</option><option value='80'>&#036;80</option><option value='90'>&#036;90</option><option value='100'>&#036;100</option></select> -->

                                        <input type=\"number\" min='5' required name=\"proposal_packages[2][price]\" form=\"pricing-form\" value=\"10\" class=\"form-control\">

                                    </td><td class=\"p-0\">

                                        <!-- <select name=\"proposal_packages[3][price]\" class=\"form-control\">
                                        <option value='5'>&#036;5</option><option value='10'>&#036;10</option><option value='15'selected>&#036;15</option><option value='20'>&#036;20</option><option value='25'>&#036;25</option><option value='50'>&#036;50</option><option value='60'>&#036;60</option><option value='70'>&#036;70</option><option value='80'>&#036;80</option><option value='90'>&#036;90</option><option value='100'>&#036;100</option>
                                        </select> -->

                                        <input type=\"number\" min='5' required name=\"proposal_packages[3][price]\" form=\"pricing-form\" value=\"15\" class=\"form-control\">

                                    </td>

                                </tr>

                            </form>

                            </tbody>

                        </table></div>

                    <div class=\"form-group row add-attribute justify-content-center\">
                        <div class=\"col-md-7\">
                            <div class=\"input-group\">
                                <input class=\"form-control form-control-sm attribute-name\" placeholder=\"Add New Attribute\" name=\"\">
                                <button class=\"btn btn btn-success input-group-addon insert-attribute\" >
                                    <i class=\"fa fa-cloud-upload\"></i> &nbsp;Insert
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=\"card rounded-0\">
                        <div class=\"card-body bg-light pt-3 pb-0\">
                            <h6 class=\"font-weight-normal\">My Proposal Extras</h6>
                            <a data-toggle=\"collapse\" href=\"#insert-extra\" class=\"small text-success\">+ Add Extra</a>
                            <div class=\"tabs accordion mt-2\" id=\"allTabs\"><!--- All Tabs Starts --->
                                <div class=\"tab\">
                                    <!-- tab rounded Starts -->
                                    <div class=\"tab-body rounded border-1 p-3 pb-0 collapse \" id=\"insert-extra\" data-parent=\"#allTabs\">
                                        <form action=\"#\" method=\"post\" class=\"add-extra\">
                                            <div class=\"form-group\">
                                                <input type=\"text\" name=\"name\" placeholder=\"Extra Name\" class=\"form-control form-control-sm\" required=\"\">
                                                <small class=\"form-text text-danger\"></small>
                                            </div>
                                            <div class=\"form-group\">
                                                <div class=\"input-group input-group-sm\">
                                                    <!--- input-group Starts --->
                                                    <span class=\"input-group-addon\">&#036;</span>
                                                    <input type=\"number\" name=\"price\" placeholder=\"Extra Price\" class=\"form-control form-control-sm\" required=\"\">
                                                </div>
                                                <small class=\"form-text text-danger\"></small>
                                                <!--- input-group Ends --->
                                            </div>
                                            <div class=\"form-group mb-0\">
                                                <button type=\"submit\" class=\"btn btn-success btn-sm float-right\">Insert</button>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- tab rounded Ends -->

                                <script>

                                    \$(document).ready(function(){


                                        \$(\".add-extra\").on('submit', function(event){

                                            event.preventDefault();

                                            var form_data = new FormData(this);

                                            form_data.append('proposal_id',591);

                                            \$('#wait').addClass(\"loader\");

                                            \$.ajax({

                                                method: \"POST\",

                                                url: \"ajax/insert_extra\",

                                                data: form_data,

                                                async: false,cache: false,contentType: false,processData: false

                                            }).done(function(data){

                                                \$('#wait').removeClass(\"loader\");

                                                if(data == \"error\"){

                                                    swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                                }else{

                                                    \$(\".add-extra\").trigger(\"reset\");

                                                    \$(\"#allTabs\").load(\"sections/edit/extras\",{proposal_id : 591});

                                                }

                                            });

                                        });


                                        \$(\".edit-extra\").on('submit', function(event){

                                            event.preventDefault();

                                            var form_data = new FormData(this);

                                            form_data.append('proposal_id',591);

                                            \$('#wait').addClass(\"loader\");

                                            \$.ajax({

                                                method: \"POST\",

                                                url: \"ajax/edit_extra\",

                                                data: form_data,

                                                async: false,cache: false,contentType: false,processData: false

                                            }).done(function(data){

                                                \$('#wait').removeClass(\"loader\");

                                                if(data == \"error\"){

                                                    swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                                }else{

                                                    swal({type: 'success',text: 'Changes Saved.'});

                                                }

                                            });

                                        });


                                        \$(\".delete-extra\").on('click',function(){

                                            event.preventDefault();

                                            var id = \$(this).parent().parent().find(\"input[name='id']\").val();

                                            var main = \$(this).parent().parent().parent().parent();

                                            \$.ajax({

                                                method: \"POST\",

                                                url: \"ajax/delete_extra\",

                                                data: {proposal_id : 591, id : id},

                                                success : function(data){

                                                    main.remove();

                                                }

                                            });

                                        });


                                    });

                                </script>    </div><!--- All Tabs Ends --->
                        </div>
                    </div>

                    <div class=\"form-group mt-4 mb-0\"><!--- form-group Starts --->
                        <a href=\"#\" class=\"btn btn-secondary float-left back-to-overview\">Back</a>
                        <input class=\"btn btn-success float-right\" type=\"submit\" form=\"pricing-form\" value=\"Save & Continue\">
                    </div><!--- form-group Starts --->

                    <script>
                        \$(document).ready(function(){

                            \$('.proposal-price').hide();

                            \$('.back-to-overview').click(function(){
                                \$(\"input[type='hidden'][name='section']\").val(\"overview\");
                                \$('#pricing').removeClass('show active');
                                \$('#overview').addClass('show active');
                                \$('#tabs a[href=\"#pricing\"]').removeClass('active');
                            });

                            \$(\"table\").on('click','.delete-attribute',function(event){
                                \$('#wait').addClass(\"loader\");
                                event.preventDefault();
                                var attribute_name = \$(this).data(\"attribute\");
                                var proposal_id = 591;
                                \$(this).parent().parent().remove();
                                \$.ajax({
                                    method: \"POST\",
                                    url: \"ajax/delete_attribute\",
                                    data: { proposal_id : proposal_id, attribute_name: attribute_name },
                                    success:function(data){
                                        \$('#wait').removeClass(\"loader\");
                                    }
                                });
                            });

                            \$(\".insert-attribute\").on('click', function(event){
                                \$('#wait').addClass(\"loader\");
                                event.preventDefault();
                                var attribute_name = \$('.attribute-name').val();
                                \$.ajax({
                                    method: \"POST\",
                                    url: \"ajax/insert_attribute\",
                                    data: { attribute_name : attribute_name, proposal_id: 591 },
                                    success:function(data){
                                        if(data == \"error\"){
                                            \$('#wait').removeClass(\"loader\");
                                            swal({type: 'warning',text: 'You Must Need To Give A Name To Attribute Before Inserting It.'});
                                        }else{
                                            \$('#wait').removeClass(\"loader\");
                                            \$('.attribute-name').val(\"\");
                                            result = \$.parseJSON(data);
                                            var form_data = new FormData(document.querySelector(\".pricing-form\"));
                                            form_data.append('proposal_id',591);
                                            \$.ajax({
                                                method: \"POST\",
                                                url: \"ajax/save_pricing\",
                                                data: form_data,
                                                async: false,cache: false,contentType: false,processData: false
                                            }).done(function(data){
                                                // this code makes problem
                                                \$.ajax({
                                                    method: \"POST\",
                                                    url: \"sections/edit/pricing\",
                                                    data: { proposal_id: 591,fixedPriceOff:1 },
                                                    success:function(show_data){
                                                        \$(\"#pricing\").html(show_data);
                                                    }
                                                });
                                            });
                                        }
                                    }
                                });

                            });

                            \$(\".pricing-form\").submit(function(event){
                                event.preventDefault();
                                var form_data = new FormData(this);
                                form_data.append('proposal_id',591);
                                \$('#wait').addClass(\"loader\");
                                \$.ajax({
                                    method: \"POST\",
                                    url: \"ajax/save_pricing\",
                                    data: form_data,
                                    async: false,cache: false,contentType: false,processData: false
                                }).done(function(data){
                                    \$('#wait').removeClass(\"loader\");
                                    if(data == \"error\"){
                                        swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});
                                    }else{
                                        swal({
                                            type: 'success',
                                            text: 'Details Saved.',
                                            timer: 1000,
                                            onOpen: function(){
                                                swal.showLoading()
                                            }
                                        }).then(function(){
                                            \$(\"input[type='hidden'][name='section']\").val(\"description\");
                                            \$('#pricing').removeClass('show active');
                                            \$('#description').addClass('show active');
                                            \$('#tabs a[href=\"#description\"]').addClass('active');
                                        });
                                    }
                                });
                            });

                        });
                    </script>        </div>
                <div class=\"tab-pane fade\" id=\"description\">
                    <h5 class=\"font-weight-normal\">Description</h5>
                    <hr>
                    <p class=\"small mb-2\"> Project Details </p>

                    <form action=\"#\" method=\"post\" class=\"proposal-form\" id=\"form1\"><!--- form Starts -->
                        <div class=\"form-group\">
\t<textarea rows=\"7\" name=\"proposal_desc\" placeholder=\"Enter Your Proposal's Description\" class=\"form-control proposal-desc\">
<p>testtttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</p>
</textarea>
                            <small class=\"form-text text-danger\"></small>
                        </div>
                    </form><!--- form Ends -->

                    <hr class=\"mt-0\">
                    <h5 class=\"font-weight-normal\"> Frequently Asked Questions  <small class=\"float-right\"><a data-toggle=\"collapse\" href=\"#insert-faq\" class=\"text-success\">+ Add Faq</a></small></h5>
                    <hr>
                    <div class=\"tabs accordion mt-2\" id=\"faqTabs\"><!--- All Tabs Starts --->

                        <div class=\"tab\"><!-- tab rounded Starts -->

                            <div class=\"tab-body rounded border-1 p-3 pb-0 collapse\" id=\"insert-faq\" data-parent=\"#faqTabs\">

                                <form action=\"\" method=\"post\" class=\"add-faq\">

                                    <div class=\"form-group mb-2\">

                                        <input type=\"text\" name=\"title\" placeholder=\"Faq Title\" class=\"form-control form-control-sm\" required>

                                    </div>

                                    <div class=\"form-group mb-2\">

                                        <textarea name=\"content\" rows=\"3\" placeholder=\"Faq Content\" class=\"form-control form-control-sm\"></textarea>

                                    </div>

                                    <div class=\"form-group mb-0\">

                                        <button type=\"submit\" class=\"btn btn-success btn-sm float-right\">Insert</button>

                                        <div class=\"clearfix\"></div>

                                    </div>

                                </form>

                            </div>

                        </div><!-- tab rounded Ends -->

                        <script>

                            \$(document).ready(function(){


                                \$(\".add-faq\").on('submit', function(event){

                                    event.preventDefault();

                                    var form_data = new FormData(this);

                                    form_data.append('proposal_id',591);

                                    \$('#wait').addClass(\"loader\");

                                    \$.ajax({

                                        method: \"POST\",

                                        url: \"ajax/insert_faq\",

                                        data: form_data,

                                        async: false,cache: false,contentType: false,processData: false

                                    }).done(function(data){

                                        \$('#wait').removeClass(\"loader\");

                                        if(data == \"error\"){

                                            swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                        }else{

                                            \$(\".add-faq\").trigger(\"reset\");

                                            \$(\"#faqTabs\").load(\"sections/edit/faqs\",{proposal_id : 591});

                                        }

                                    });

                                });


                                \$(\".edit-faq\").on('submit', function(event){

                                    event.preventDefault();

                                    var form_data = new FormData(this);

                                    form_data.append('proposal_id',591);

                                    \$('#wait').addClass(\"loader\");

                                    \$.ajax({

                                        method: \"POST\",

                                        url: \"ajax/edit_faq\",

                                        data: form_data,

                                        async: false,cache: false,contentType: false,processData: false

                                    }).done(function(data){

                                        \$('#wait').removeClass(\"loader\");

                                        if(data == \"error\"){

                                            swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});

                                        }else{

                                            swal({type: 'success',text: 'Changes Saved.'});

                                        }

                                    });

                                });


                                \$(\".delete-faq\").on('click',function(){

                                    event.preventDefault();

                                    var id = \$(this).parent().parent().find(\"input[name='id']\").val();

                                    var main = \$(this).parent().parent().parent().parent();

                                    \$.ajax({

                                        method: \"POST\",

                                        url: \"ajax/delete_faq\",

                                        data: {proposal_id : 591, id : id},

                                        success : function(data){

                                            main.remove();

                                        }

                                    });

                                });


                            });

                        </script></div><!--- All Tabs Ends --->

                    <div class=\"form-group mb-0\"><!--- form-group Starts --->
                        <a href=\"#\" class=\"btn btn-secondary float-left back-to-pricing\">Back</a>
                        <input class=\"btn btn-success float-right\" type=\"submit\" form=\"form1\" value=\"Save & Continue\">
                    </div><!--- form-group Starts --->

                    <script>
                        \$(document).ready(function(){
                            \$('.back-to-pricing').click(function(){
                                \$(\"input[type='hidden'][name='section']\").val(\"pricing\");
                                \$('#description').removeClass('show active');
                                \$('#pricing').addClass('show active');
                                \$('#tabs a[href=\"#description\"]').removeClass('active');
                            });
                        });
                    </script>        </div>
                <div class=\"tab-pane fade\" id=\"requirements\">
                    <form action=\"#\" method=\"post\" class=\"proposal-form\"><!--- form Starts -->

                        <h5 class=\"font-weight-normal\">

                            <span class=\"float-left mr-2\"><i class=\"fa fa-file text-info fa-1x\"></i> </span>

                            <span class=\"float-left\">

Tell your buyer what you need to get started (Optional) <br>

<small class=\"text-muted\">Structure your Buyer Instructions as free text.</small>

</span>

                            <div class=\"clearfix\"></div>

                        </h5>

                        <hr>

                        <div class=\"form-group requirements\">
                            <p class=\"mb-1\">Requirements</p>
                            <textarea name=\"buyer_instruction\" placeholder=\"If you need to obtain information, files or other items from the buyer prior to starting your work, please add your instructions here. For example: Please send me your company name or Please send me the photo you need me to edit.\" rows=\"4\" class=\"form-control\"></textarea>

                        </div>


                        <div class=\"form-group mb-0\"><!--- form-group Starts --->

                            <a href=\"#\" class=\"btn btn-secondary float-left back-to-desc\">Back</a>

                            <input class=\"btn btn-success float-right\" type=\"submit\" value=\"Save & Continue\">

                        </div><!--- form-group Starts --->

                    </form><!--- form Ends -->

                    <script>

                        \$(document).ready(function(){

                            \$('.back-to-desc').click(function(){


                                \$(\"input[type='hidden'][name='section']\").val(\"description\");

                                \$('#requirements').removeClass('show active');

                                \$('#description').addClass('show active');

                                \$('#tabs a[href=\"#requirements\"]').removeClass('active');


                            });

                        });

                    </script>        </div>
                <div class=\"tab-pane fade\" id=\"gallery\">
                    <h5 class=\"font-weight-normal\">Build Your Proposal Gallery</h5>
                    <h6 class=\"font-weight-normal\">Add memorable content to your gallery to set yourself apart from competitors.</h6>

                    <hr>

                    <p class=\"text-right mb-0\">
                        <span class=\"float-left\">Proposal Photos </span>
                        <small class=\"text-muted\" style=\"font-size: 78%;\">Upload Photos that describe or related to your proposal.your image size must be 700 x 390 pixels.</small>
                    </p>

                    <form action=\"\" class=\"proposal-form\" id=\"gallery_form\"><!--- form Starts --->
                        <div class=\"row gallery\"><!--- row gallery Starts --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic add-pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img1\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img2\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img3\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                            <div class=\"col-md-3\"><!--- col-md-3 Starts --->
                                <div class=\"pic\">
                                    <i class=\"fa fa-picture-o fa-2x mb-2\"></i><br> <span>Browse Image</span>
                                    <input type=\"hidden\" name=\"proposal_img4\" value=\"\">
                                </div>
                            </div><!--- col-md-3 Ends --->
                        </div><!--- row gallery Ends --->
                        <hr>
                        <p class=\"text-right mb-0\">
                            <span class=\"float-left\">Add Videoadd_proposal_video</span>
                            <small class=\"text-muted\" style=\"font-size: 78%;\">(Optional) Supported Video Extensions Include : 'mp4','mov','avi','flv','wmv'.</small>
                        </p>
                        <div class=\"row gallery\"><!--- row gallery Starts --->
                            <div class=\"col-md-12\"><!--- col-md-3 Starts --->
                                <div class=\"pic add-video\">
                                    <span class=\"chose\"><i class=\"fa fa-video-camera fa-2x mb-2\"></i><br>Add Video</span>
                                    <input type='hidden' name='proposal_video' value='' id='v_file'>
                                </div>
                            </div><!--- col-md-3 Ends --->
                        </div><!--- row gallery Ends --->
                    </form><!--- form Ends --->

                    <div class=\"mb-5\"></div>

                    <div class=\"form-group mb-0\"><!--- form-group Starts --->

                        <a href=\"#\" class=\"btn btn-secondary float-left back-to-req\">Back</a>

                        <input class=\"btn btn-success float-right\" type=\"submit\" form=\"gallery_form\" value=\"Save & Continue\">
                        <a href=\"tyrone/raba\" id=\"previewProposal\" class=\"btn btn-success float-right mr-3 d-none\">Preview Proposal</a>

                    </div><!--- form-group Starts --->

                    <script>
                        \$(document).ready(function(){
                            var browsers = [\"Opera\", \"Edge\", \"Chrome\", \"Safari\", \"Firefox\", \"MSIE\", \"Trident\"];
                            var userbrowser, useragent = navigator.userAgent;
                            for(var i = 0; i < browsers.length; i++) {
                                if( useragent.indexOf(browsers[i]) > -1 ) {
                                    userbrowser = browsers[i];
                                    break;
                                }
                            };


                            \$('.back-to-req').click(function(){
                                \$(\"input[type='hidden'][name='section']\").val(\"requirements\");
                                \$('#gallery').removeClass('show active');
                                \$('#requirements').addClass('show active');
                                \$('#tabs a[href=\"#gallery\"]').removeClass('active');
                            });

                            \$image_crop = \$('#image_demo').croppie({
                                enableExif: true,
                                viewport: {
                                    width:700,
                                    height:390,
                                    type:'square' //circle
                                },
                                boundary:{
                                    width:100,
                                    height:400
                                }
                            });

                            function crop(data){
                                var reader = new FileReader();
                                reader.onload = function (event) {
                                    \$image_crop.croppie('bind',{
                                        url: event.target.result
                                    }).then(function(){
                                        console.log('jQuery bind complete');
                                    });
                                }
                                reader.readAsDataURL(data.files[0]);
                                \$('#insertimageModal').modal('show');
                                \$('input[type=hidden][name=img_type]').val(\$(data).attr('name'));
                                \$('input[type=hidden][name=img_name]').val(data.files[0].name);
                            }

                            \$('.crop_image').click(function(event){
                                \$('#wait').addClass(\"loader\");
                                var name = \$('input[type=hidden][name=img_type]').val();
                                \$image_crop.croppie('result', {
                                    type: 'canvas', size: 'viewport'
                                }).then(function(response){
                                    \$.ajax({
                                        url:\"crop_upload\", type: \"POST\",
                                        data:{image: response, name: \$('input[type=hidden][name=img_name]').val() },
                                        success:function(data){
                                            \$('#wait').removeClass(\"loader\");
                                            \$('#insertimageModal').modal('hide');
                                            \$('input[type=hidden][name='+ name +']').val(data);
                                            main = \$('input[type=hidden][name='+ name +']').parent();
                                            main.children(\"i,br,span\").remove();
                                            main.addClass(\"img\").removeClass(\"pic\");
                                            main.prepend(\"<img src='proposal_files/\"+data+\"' class='img-fluid'> <span>Remove</span>\");
                                        }
                                    });
                                });
                            });

                            var gallery = \$('.gallery');
                            gallery.on('click', '.img', function () {
                                \$(this).children(\"img,span\").remove();
                                \$(this).children(\"input[type=hidden]\").val(\"\");
                                \$(this).addClass(\"pic\").removeClass(\"img\");
                                \$(this).prepend(\"<i class='fa fa-picture-o fa-2x mb-2'></i><br> <span>Browse Image</span>\");
                            });


                            gallery.on('click', '.pic:not(.add-video,.video-added,.disable)',function(){
                                var name = \$(this).children(\"input[type=hidden]\").attr(\"name\");
                                if(userbrowser == \"Edge\" || userbrowser == \"Safari\"){
                                    \$(\"input[type=file]\").click();
                                    \$(\"input[type=file]\").attr('name',name);
                                    \$(\"input[type=file]\").attr('accept','image/*');
                                    \$(\"input[type=file]\").removeAttr('multiple');
                                    \$(\"input[type=file]\").on('change',function(){ crop(this); });
                                }else{
                                    var uploader = \$('<input type=\"file\" name=\"'+name+'\" accept=\"image/*\" />');
                                    uploader.click();
                                    uploader.on('input', function(){ crop(this); });
                                }
                            });

                            \$(document).on('click','.add-video',function(){
                                \$(\"#video-modal\").modal(\"show\");
                            });

                            gallery.on('click', '.delete-video', function () {
                                \$(\"#v_file\").val(\"\");
                                \$(this).parent().parent().prepend(\"<span class='chose'><i class='fa fa-video-camera fa-2x mb-2'></i><br> Add Video</span>\");
                                \$(this).parent().remove();
                                \$(\".video-added\").addClass(\"add-video\").removeClass(\"video-added\");
                            });

                        });
                    </script>        </div>
                <div class=\"tab-pane fade \" id=\"publish\">

                    <h1><img style=\"position:relative; top:-5px;\" src=\"../images/comp/winner.png\">  Yay! You are almost done!</h1>
                    <h6 class=\"font-weight-normal line-height-normal\">
                        Congrats! you're almost done submitting this proposal. <br>
                        You can go back and check if you entered all the details for this proposal correctly. If all looks good and you agree with <a href=\"https://www.gigtodo.com/terms_and_conditions\" target=\"_black\" class=\"text-primary\">all our policies</a>, please click on the “Save & Submit For Approval” button.<br><br>
                        <span class=\"text-muted\">
If you do not wish to submit this proposal for approval at this time, please exit this page. You can easily retrieve this proposal by clicking on \"Selling => My Proposals => Drafts\". Cheers!
</span>
                    </h6>

                    <form action=\"\" method=\"post\">
                        <h1 class=\"h3\">Make Proposal Featured (Optional)</h1>
                        <h6 class=\"font-weight-normal line-height-normal\">
                            Let your proposal appear on several places on GigToDo<br>
                            Proposal will always be at the top section of search results <br>
                            WIth GigToDo feature, your proposal already has a 50% chance of getting ordered by potential buyers
                            <p class=\"ml-4 mt-3\">
                                <label for=\"checkid\" style=\"word-wrap:break-word\">
                                    <input type=\"checkbox\" name=\"proposal_featured\" value=\"1\" style=\"vertical-align:middle;margin-left: -1.25rem;\"> Make Proposal Featured
                                </label>
                            </p>
                        </h6>
                        <div class=\"form-group mb-0 mt-3\"><!--- form-group Starts --->
                            <a href=\"#\" class=\"btn btn-secondary back-to-gallery\">Back</a>
                            <input class=\"btn btn-success\" type=\"submit\" name=\"submit_proposal\" value=\"Save & Submit For Approval\">
                            <a href=\"#\" class=\"btn btn-success d-none\" id=\"featured-button\">Make Proposal Featured</a>
                        </div><!--- form-group Starts --->
                    </form>

                    <script>
                        \$('.back-to-gallery').click(function(){
                            \$(\"input[type='hidden'][name='section']\").val(\"gallery\");
                            \$('#publish').removeClass('show active');
                            \$('#gallery').addClass('show active');
                            \$('#tabs a[href=\"#publish\"]').removeClass('active');
                        });

                        \$(\"input[name='proposal_featured']\").change(function(){
                            if (this.checked) {
                                \$(\"#featured-button\").removeClass(\"d-none\");
                                \$(\"input[name='submit_proposal'\").addClass(\"d-none\");
                            }else{
                                \$(\"#featured-button\").addClass(\"d-none\");
                                \$(\"input[name='submit_proposal'\").removeClass(\"d-none\");
                            }
                        });

                        \$(\"#featured-button\").click(function(){
                            proposal_id = \"591\";
                            \$.ajax({
                                method: \"POST\",
                                url: \"pay_featured_listing\",
                                data: {proposal_id: proposal_id, createProposal:1}
                            }).done(function(data){
                                \$(\"#featured-proposal-modal\").html(data);
                            });
                        });
                    </script>
                </div>
                <input type=\"hidden\" name=\"section\" value=\"pricing\">
            </div><!--- tab-content Ends --->
        </div><!--- col-md-8 Ends --->
    </div><!--- row Ends --->
</div><!--- container mt-5 Ends --->

<div id=\"insertimageModal\" class=\"modal\" role=\"dialog\">

    <div class=\"modal-dialog modal-lg\">

        <div class=\"modal-content\">

            <div class=\"modal-header\">

                Crop & Insert Image <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>

            </div>

            <div class=\"modal-body\">

                <div id=\"image_demo\" style=\"width:100% !important;\"></div>

            </div>

            <div class=\"modal-footer\">

                <input type=\"hidden\" name=\"img_name\" value=\"\">

                <input type=\"hidden\" name=\"img_type\" value=\"\">

                <button class=\"btn btn-success crop_image\">Crop Image</button>

                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

            </div>

        </div>

    </div>

</div>

<div id=\"wait\"></div><div id=\"featured-proposal-modal\"></div>


<script>
    \$(document).ready(function(){

        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
            var e = \"\"+e.target+\"\";
            var e = e.replace('https://www.gigtodo.com/proposals/edit_proposal?proposal_id=591#', '');
            var e = e.replace('https://www.gigtodo.com/proposals/edit_proposal?proposal_id=591&pricing#', '');
            \$(\"input[type='hidden'][name='section']\").val(e);
        });

        \$(\".proposal-form\").on('submit', function(event){
            event.preventDefault();
            var form_data = new FormData(this);
            form_data.append('proposal_id',591);
            \$('#wait').addClass(\"loader\");
            \$.ajax({
                method: \"POST\",
                url: \"ajax/save_proposal\",
                data: form_data,
                async: false,cache: false,contentType: false,processData: false
            }).done(function(data){
                console.log(data);
                videoOrNotVideo = data;
                \$('#wait').removeClass(\"loader\");
                if(data == \"error\"){
                    swal({type: 'warning',text: 'You Must Need To Fill Out All Fields Before Updating The Details.'});
                }else if(data == \"error_img\"){
                    swal({type: 'warning',text: 'You Must Need To Add At Least 1 Image In Proposal To Continue.'});
                }else if(data != \"error\" || data != \"error_img\"){
                    swal({
                        type: 'success',
                        text: 'Details Saved.',
                        timer: 1000,
                        onOpen: function(){
                            swal.showLoading();
                        }
                    }).then(function(){
                        var section = \$(\"input[type='hidden'][name='section']\");
                        var current_section = \$(\"input[type='hidden'][name='section']\").val();

                        if(data == \"video\"){
                            \$('#tabs a[href=\"#pricing\"]').addClass('d-none');
                            \$('#tabs a[href=\"#video\"]').removeClass('d-none');
                        }else if(data == \"not-video\"){
                            \$('#tabs a[href=\"#pricing\"]').removeClass('d-none');
                            \$('#tabs a[href=\"#video\"]').addClass('d-none');
                        }

                        if(current_section == \"overview\"){
                            \$('#overview').removeClass('show active');
                            if(data == \"video\"){
                                section.val(\"video\");
                                \$('#video').addClass('show active');
                                \$('#tabs a[href=\"#video\"]').addClass('active');
                            }else{
                                section.val(\"pricing\");
                                \$('#pricing').addClass('show active');
                                \$('#tabs a[href=\"#pricing\"]').addClass('active');
                            }
                        }else if(current_section == \"description\"){
                            section.val(\"requirements\");
                            \$('#description').removeClass('show active');
                            \$('#requirements').addClass('show active');
                            \$('#tabs a[href=\"#requirements\"]').addClass('active');
                        }else if(current_section == \"requirements\"){
                            section.val(\"gallery\");
                            \$('#requirements').removeClass('show active');
                            \$('#gallery').addClass('show active');
                            \$('#tabs a[href=\"#gallery\"]').addClass('active');
                        }else if(current_section == \"gallery\"){
                            \$('#gallery').removeClass('show active');
                            \$('#publish').addClass('show active');
                            \$('#tabs a[href=\"#publish\"]').addClass('active');
                        }

                    });
                }
            });
        });


        \$(\".proposal_referral_money input\").attr(\"min\",\"0\");
        \$('.proposal_referral_money').hide();

        \$(\".proposal_enable_referrals\").change(function(){
            var value = \$(this).val();
            if(value == \"yes\"){
                \$(\".proposal_referral_money input\").attr(\"min\",\"1\");
                \$('.proposal_referral_money').show();
            }else if(value == \"no\"){
                \$('.proposal_referral_money').hide();
                \$(\".proposal_referral_money input\").attr(\"min\",\"0\");
            }
        });


        \$(document).on(\"click\",\".pricing\", function(event){
            var value = \$(this).val();
            if(this.checked){
                \$('.packages').hide();
                \$('.add-attribute').hide();
                \$('.proposal-price').show();
            }else{
                \$('.packages').show();
                \$('.add-attribute').show();
                \$('.proposal-price').hide();
            }
        });

        \$(\"#category\").change(function(){
            \$(\"#sub-category\").show();
            var category_id = \$(this).val();
            \$.ajax({
                url:\"fetch_subcategory\",
                method:\"POST\",
                data:{category_id:category_id},
                success:function(data){
                    \$(\"#sub-category\").html(data);
                }
            });
        });

        \$('textarea[name=\"proposal_desc\"]').summernote({
            placeholder: 'Write Your Description Here.',
            height: 200,
        });

    });
</script>
<!-- start footer -->



<section class=\"messagePopup animated slideInRight\"></section>
<link rel=\"stylesheet\" href=\"https://www.gigtodo.com/styles/msdropdown.css\"/>


<script src=\"https://www.gigtodo.com/js/msdropdown.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/jquery.sticky.js\"></script>
<script type=\"text/javascript\" id=\"custom-js\" src=\"https://www.gigtodo.com/js/customjs.js\" data-logged-id=\"26\" data-base-url=\"https://www.gigtodo.com\" data-enable-sound=\"yes\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/categoriesProposal.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/owl.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/bootstrap.js\"></script>
<script type=\"text/javascript\" src=\"https://www.gigtodo.com/js/summernote.js\"></script>

<script>
    \$(document).ready(function(){
        \$(\"#languageSelect\").change(function(){
            var url = \$(\"#languageSelect option:selected\").data(\"url\");
            window.location.href = url;
        });

        \$(\"#languageSelect\").msDropdown({visibleRows:4});
        var seller_id = \"26\";
        var base_url = \"https://www.gigtodo.com\";

        \$(\".cookies_footer .btn\").click(function(){
            \$.ajax({
                method: \"POST\",
                url: \"https://www.gigtodo.com/includes/close_cookies_footer\",
                data: {close : 'close'}
            }).done(function(data){
                \$(\".cookies_footer\").fadeOut();
            });
        });
    });
</script><script src=\"../js/tagsinput.js\"></script>
</body>
</html>", "proposals/test.html.twig", "/home/vagrant/code/lenil/templates/proposals/test.html.twig");
    }
}
