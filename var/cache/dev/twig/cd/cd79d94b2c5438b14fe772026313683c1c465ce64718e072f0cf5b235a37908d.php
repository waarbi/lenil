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

/* base.html.twig */
class __TwigTemplate_f3a8a39a8fea94da13c2dede0590370dce1dd3d58d59051fd78f42d736509112 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" class=\"ui-toolkit\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/bootstrap_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/animate_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom css code from modified in admin panel --->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/categories_nav_styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/owl_carousel_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/owl_theme_default_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/croppie_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/sweat_alert_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/knowledge_bank_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/lenil-icon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/scoped_responsive_and_nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/vesta_homepage_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/desktop_proposals.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    ";
        // line 31
        echo "
    <style>.swal2-popup .swal2-styled.swal2-confirm {
            background-color: #3578e5;
        }</style>
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "</head>
<body class=\"is-responsive\">

";
        // line 41
        echo twig_include($this->env, $context, "partials/header.html.twig");
        echo "

";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "




";
        // line 49
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "

";
        // line 55
        echo "<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js\"></script>
<link rel=\"stylesheet\" href=\"http://www.marghoobsuleman.com/mywork/jcomponents/image-dropdown/samples/css/msdropdown/dd.css\">
<script src=\"http://www.marghoobsuleman.com/mywork/jcomponents/image-dropdown/samples/js/msdropdown/jquery.dd.min.js\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/croppie.js"), "html", null, true);
        echo "\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js\"></script>


<script type=\"application/javascript\">
    \$(document).ready(function(){
        \$(document).on('click','.dropdown-menu',function(event){
            event.stopPropagation();
        });

        \$(\".dropdown-menu .dropdown-item.dropdown-toggle\").click(function(){
            \$('.collapse.dropdown-submenu').collapse('hide');
        });
        \$(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });
        \$(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });

        //// Categories Dropdown Code
        \$(\".top-nav-item\").mouseover(function(){
            \$(\".body-sub-width\").addClass(\"display-none\");
            \$(\".top-nav-item\").removeClass(\"active\");
            var node_id = \$(this).data('node-id');
            \$(this).addClass(\"active\");
            \$(\".body-sub-width[data-node-id=\"+node_id+\"]\").removeClass(\"display-none\");
        });

        \$(\".ui-toolkit .cat-nav\").mouseleave(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            \$(\".body-sub-width\").addClass(\"display-none\");
        });

        \$('#mobilemenu').click(function(){
            \$('html body').css('overflow','hidden');
            \$('.cat-mobile').show();
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-cat-nav\").addClass(\"slideInUp slower\");
            \$(\".mobile-topnav\").removeClass(\"display-none\").addClass(\"slideInUp slower\");
            if(\$(window).width() <= 421){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"44px\"});
            }else if(\$(window).width() <= 639){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"60px\"});
            }
        });

        \$(\".cat-mobile .mobile-topnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            \$(\"#mobile-sub-catnav-header-title\").text(name);
            \$(\"#mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-content-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\"#mobile-sub-catnav-content-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$(\".cat-mobile .mobile-catnav-back-btn\").click(function(){
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").removeClass(\"slideInUp display-none\").addClass(\"slideInLeft slower\");
        });

        \$('.cat-mobile .overlay-close').click(function(){
            \$('.cat-mobile').hide();
            \$('html body').removeAttr('style');
        });

        \$(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });
        \$(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });

        //// Category Dropdown Code
        \$(\".top-nav-item\").mouseover(function(){
            \$(\".body-sub-width\").addClass(\"display-none\");
            \$(\".top-nav-item\").removeClass(\"active\");
            var node_id = \$(this).data('node-id');
            \$(this).addClass(\"active\");
            \$(\".body-sub-width[data-node-id=\"+node_id+\"]\").removeClass(\"display-none\");
        });

        \$(\".ui-toolkit .cat-nav\").mouseleave(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            \$(\".body-sub-width\").addClass(\"display-none\");
        });

        \$('#mobilemenu').click(function(){
            \$('html body').css('overflow','hidden');
            \$('.cat-mobile').show();
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-cat-nav\").addClass(\"slideInUp slower\");
            \$(\".mobile-topnav\").removeClass(\"display-none\").addClass(\"slideInUp slower\");
            if(\$(window).width() <= 421){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"44px\"});
            }else if(\$(window).width() <= 639){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"60px\"});
            }
        });

        \$(\".cat-mobile .mobile-topnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            \$(\"#mobile-sub-catnav-header-title\").text(name);
            \$(\"#mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-content-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\"#mobile-sub-catnav-content-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$(\".cat-mobile .mobile-catnav-back-btn\").click(function(){
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").removeClass(\"slideInUp display-none\").addClass(\"slideInLeft slower\");
        });

        \$('.cat-mobile .overlay-close').click(function(){
            \$('.cat-mobile').hide();
            \$('html body').removeAttr('style');
        });
        /// Mobile Category Menu Code Enye ////

        /// Mobile User Menu Code Starts ////
        \$(\"#usermenu, .bell, .message\").click(function(){
            if(\$(window).width() <= 629){
                \$('html body').css('overflow','hidden');
                \$('.user-mobile').show();
                \$('.mobile-subnav').addClass(\"display-none\");
                \$('.mobile-tertiarynav').addClass(\"display-none\");
                \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
                \$(\".user-mobile #mobile-sub-catnav-header-title\").text(\"\");
                \$(\".user-mobile #mobile-catnav-header-title\").removeClass(\"display-none\");
                \$(\".mobile-cat-nav\").addClass(\"slideInUp slower\");
                \$(\".mobile-topnav\").removeClass(\"display-none\").addClass(\"slideInUp slower\");
                if(\$(window).width() <= 421){
                    \$(\".mobile-catnav-wrapper\").css({\"top\" : \"44px\"});
                }else if(\$(window).width() <= 639){
                    \$(\".mobile-catnav-wrapper\").css({\"top\" : \"60px\"});
                }
            }
        });

        \$(\".user-mobile .mobile-topnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            \$(\".user-mobile #mobile-sub-catnav-header-title\").text(name);
            \$(\".user-mobile #mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".user-mobile .mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".user-mobile .mobile-topnav\").addClass(\"display-none\");
            \$(\".user-mobile #mobile-sub-catnav-content-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\".user-mobile #mobile-sub-catnav-content-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$(\".user-mobile .mobile-catnav-back-btn\").click(function(){\tvar subnav_id = \$(this).attr('data-subnav-id');
            if(subnav_id == \"0\"){
                \$('.user-mobile .mobile-subnav').addClass(\"display-none\");
                \$('.user-mobile .mobile-tertiarynav').addClass(\"display-none\");
                \$(\".user-mobile .mobile-catnav-back-btn\").addClass(\"display-none\");
                \$(\".user-mobile #mobile-sub-catnav-header-title\").text(\"\");
                \$(\".user-mobile #mobile-catnav-header-title\").removeClass(\"display-none\");
                \$(\".user-mobile .mobile-topnav\").removeClass(\"slideInUp display-none\").addClass(\"slideInLeft slower\");
            }else{
                \$(\".user-mobile #mobile-sub-catnav-header-title\").text(\"Dashboard\");
                \$('.user-mobile .mobile-tertiarynav').addClass(\"display-none\");
                \$(this).attr(\"data-subnav-id\",\"0\");
                \$(\".user-mobile #\"+subnav_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            }
        });

        \$(\".user-mobile .mobile-subnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            var parent_id = \$(this).parent().parent().attr('id');
            \$(\".user-mobile #mobile-sub-catnav-header-title\").text(name);
            \$(\".user-mobile #mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".user-mobile .mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".user-mobile .mobile-catnav-back-btn\").attr(\"data-subnav-id\",parent_id);
            \$(\".user-mobile .mobile-subnav\").addClass(\"display-none\");
            \$(\".user-mobile #mobile-tertiary-nav-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\".user-mobile #mobile-tertiary-nav-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$('.user-mobile .overlay-close').click(function(){
            \$('.user-mobile').hide();
            \$('html body').removeAttr('style');
        });

        /// Mobile User Menu Code Ends ////

        // Cache selectors
        var lastId,
            topMenu = \$(\"#mainNav\"),
            topMenuHeight = topMenu.outerHeight() + 1,

            // All list items
            menuItems = topMenu.find(\"a\"),

            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = \$(\$(this).attr(\"href\"));
                if (item.length) {return item;}
            });

        // Bind click handler to menu items

        // so we can get a fancy scroll animation
        menuItems.click(function (e) {
            var href = \$(this).attr(\"href\"),
                offsetTop = href === \"#\" ? 0 : \$(href).offset().top - topMenuHeight + 1;
            \$('html, body').stop().animate({scrollTop: offsetTop },850);
            // e.preventDefault();
        });

        // Bind to scroll
        \$(window).scroll(function(){
            var scrollTop = \$(window).scrollTop();
            if(scrollTop > 0){
                // Get container scroll position
                var fromTop = \$(this).scrollTop() + topMenuHeight;
                // Get id of current scroll item
                var cur = scrollItems.map(function () {
                    if (\$(this).offset().top < fromTop)
                        return this;
                });
                // Get the id of the current element
                cur = cur[cur.length - 1];
                var id = cur && cur.length ? cur[0].id : \"\";
                if(lastId !== id){
                    lastId = id;
                    // Set/remove active class
                    menuItems.parent().removeClass(\"selected\").end().filter('*[href=\"#' + id + '\"]').parent().addClass(\"selected\");
                }
            }else{
                \$('.mp-gig-top-nav li:eq(0)').addClass(\"selected\");
            }
        });

    });
</script>
";
        // line 325
        $this->displayBlock('javascripts', $context, $blocks);
        // line 327
        echo "

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 36
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 325
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 325,  506 => 43,  495 => 36,  485 => 35,  467 => 8,  449 => 5,  435 => 327,  433 => 325,  173 => 68,  158 => 55,  153 => 49,  146 => 44,  144 => 43,  139 => 41,  134 => 38,  132 => 35,  126 => 31,  120 => 26,  116 => 25,  112 => 24,  108 => 23,  104 => 22,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  82 => 15,  78 => 14,  73 => 12,  69 => 11,  65 => 10,  62 => 9,  60 => 8,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\" class=\"ui-toolkit\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block meta %}{% endblock %}
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/bootstrap_css.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/custom_css.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/animate_css.css') }}\" rel=\"stylesheet\">
    <!-- Custom css code from modified in admin panel --->
    <link href=\"{{ asset('build/css/styles.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/categories_nav_styles.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"{{ asset('build/css/owl_carousel_css.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/owl_theme_default_css.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/croppie_css.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/sweat_alert_css.css') }}\" rel=\"stylesheet\">
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/knowledge_bank_css.css') }}\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ asset('build/images/lenil-icon.png') }}\" type=\"image/x-icon\"/>
    <link href=\"{{ asset('build/css/scoped_responsive_and_nav.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/vesta_homepage_css.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('build/css/desktop_proposals.css') }}\" rel=\"stylesheet\">

    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    {#         <script type=\"text/javascript\" src=\"{{ asset('build/js/sweat_alert.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('build/js/jquery.js') }}\"></script> #}

    <style>.swal2-popup .swal2-styled.swal2-confirm {
            background-color: #3578e5;
        }</style>
    {% block stylesheets %}

    {% endblock %}
</head>
<body class=\"is-responsive\">

{{ include('partials/header.html.twig') }}

{% block body %}{% endblock %}





{{ include('partials/footer.html.twig') }}

{#     <script type=\"text/javascript\" src=\"{{ asset('build/js/msdropdown.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/sticky.js') }}\"></script>
    <script type=\"text/javascript\" id=\"custom-js\" src=\"{{ asset('build/js/customjs.js') }}\" data-logged-id=\"\" data-base-url=\"/\" data-enable-sound=\"\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('build/js/summernote.js') }}\"></script> #}
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
        integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
        crossorigin=\"anonymous\"></script>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
        integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js\"></script>
<link rel=\"stylesheet\" href=\"http://www.marghoobsuleman.com/mywork/jcomponents/image-dropdown/samples/css/msdropdown/dd.css\">
<script src=\"http://www.marghoobsuleman.com/mywork/jcomponents/image-dropdown/samples/js/msdropdown/jquery.dd.min.js\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
<script src=\"{{ asset('build/js/croppie.js') }}\" ></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js\"></script>


<script type=\"application/javascript\">
    \$(document).ready(function(){
        \$(document).on('click','.dropdown-menu',function(event){
            event.stopPropagation();
        });

        \$(\".dropdown-menu .dropdown-item.dropdown-toggle\").click(function(){
            \$('.collapse.dropdown-submenu').collapse('hide');
        });
        \$(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });
        \$(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });

        //// Categories Dropdown Code
        \$(\".top-nav-item\").mouseover(function(){
            \$(\".body-sub-width\").addClass(\"display-none\");
            \$(\".top-nav-item\").removeClass(\"active\");
            var node_id = \$(this).data('node-id');
            \$(this).addClass(\"active\");
            \$(\".body-sub-width[data-node-id=\"+node_id+\"]\").removeClass(\"display-none\");
        });

        \$(\".ui-toolkit .cat-nav\").mouseleave(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            \$(\".body-sub-width\").addClass(\"display-none\");
        });

        \$('#mobilemenu').click(function(){
            \$('html body').css('overflow','hidden');
            \$('.cat-mobile').show();
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-cat-nav\").addClass(\"slideInUp slower\");
            \$(\".mobile-topnav\").removeClass(\"display-none\").addClass(\"slideInUp slower\");
            if(\$(window).width() <= 421){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"44px\"});
            }else if(\$(window).width() <= 639){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"60px\"});
            }
        });

        \$(\".cat-mobile .mobile-topnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            \$(\"#mobile-sub-catnav-header-title\").text(name);
            \$(\"#mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-content-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\"#mobile-sub-catnav-content-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$(\".cat-mobile .mobile-catnav-back-btn\").click(function(){
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").removeClass(\"slideInUp display-none\").addClass(\"slideInLeft slower\");
        });

        \$('.cat-mobile .overlay-close').click(function(){
            \$('.cat-mobile').hide();
            \$('html body').removeAttr('style');
        });

        \$(function(){
            \$('[data-toggle=\"tooltip\"]').tooltip();
        });
        \$(function(){
            \$('[data-toggle=\"popover\"]').popover();
        });

        //// Category Dropdown Code
        \$(\".top-nav-item\").mouseover(function(){
            \$(\".body-sub-width\").addClass(\"display-none\");
            \$(\".top-nav-item\").removeClass(\"active\");
            var node_id = \$(this).data('node-id');
            \$(this).addClass(\"active\");
            \$(\".body-sub-width[data-node-id=\"+node_id+\"]\").removeClass(\"display-none\");
        });

        \$(\".ui-toolkit .cat-nav\").mouseleave(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            \$(\".body-sub-width\").addClass(\"display-none\");
        });

        \$('#mobilemenu').click(function(){
            \$('html body').css('overflow','hidden');
            \$('.cat-mobile').show();
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-cat-nav\").addClass(\"slideInUp slower\");
            \$(\".mobile-topnav\").removeClass(\"display-none\").addClass(\"slideInUp slower\");
            if(\$(window).width() <= 421){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"44px\"});
            }else if(\$(window).width() <= 639){
                \$(\".mobile-catnav-wrapper\").css({\"top\" : \"60px\"});
            }
        });

        \$(\".cat-mobile .mobile-topnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            \$(\"#mobile-sub-catnav-header-title\").text(name);
            \$(\"#mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-content-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\"#mobile-sub-catnav-content-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$(\".cat-mobile .mobile-catnav-back-btn\").click(function(){
            \$('.mobile-subnav').addClass(\"display-none\");
            \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
            \$(\"#mobile-sub-catnav-header-title\").text(\"\");
            \$(\"#mobile-catnav-header-title\").removeClass(\"display-none\");
            \$(\".mobile-topnav\").removeClass(\"slideInUp display-none\").addClass(\"slideInLeft slower\");
        });

        \$('.cat-mobile .overlay-close').click(function(){
            \$('.cat-mobile').hide();
            \$('html body').removeAttr('style');
        });
        /// Mobile Category Menu Code Enye ////

        /// Mobile User Menu Code Starts ////
        \$(\"#usermenu, .bell, .message\").click(function(){
            if(\$(window).width() <= 629){
                \$('html body').css('overflow','hidden');
                \$('.user-mobile').show();
                \$('.mobile-subnav').addClass(\"display-none\");
                \$('.mobile-tertiarynav').addClass(\"display-none\");
                \$(\".mobile-catnav-back-btn\").addClass(\"display-none\");
                \$(\".user-mobile #mobile-sub-catnav-header-title\").text(\"\");
                \$(\".user-mobile #mobile-catnav-header-title\").removeClass(\"display-none\");
                \$(\".mobile-cat-nav\").addClass(\"slideInUp slower\");
                \$(\".mobile-topnav\").removeClass(\"display-none\").addClass(\"slideInUp slower\");
                if(\$(window).width() <= 421){
                    \$(\".mobile-catnav-wrapper\").css({\"top\" : \"44px\"});
                }else if(\$(window).width() <= 639){
                    \$(\".mobile-catnav-wrapper\").css({\"top\" : \"60px\"});
                }
            }
        });

        \$(\".user-mobile .mobile-topnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            \$(\".user-mobile #mobile-sub-catnav-header-title\").text(name);
            \$(\".user-mobile #mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".user-mobile .mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".user-mobile .mobile-topnav\").addClass(\"display-none\");
            \$(\".user-mobile #mobile-sub-catnav-content-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\".user-mobile #mobile-sub-catnav-content-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$(\".user-mobile .mobile-catnav-back-btn\").click(function(){\tvar subnav_id = \$(this).attr('data-subnav-id');
            if(subnav_id == \"0\"){
                \$('.user-mobile .mobile-subnav').addClass(\"display-none\");
                \$('.user-mobile .mobile-tertiarynav').addClass(\"display-none\");
                \$(\".user-mobile .mobile-catnav-back-btn\").addClass(\"display-none\");
                \$(\".user-mobile #mobile-sub-catnav-header-title\").text(\"\");
                \$(\".user-mobile #mobile-catnav-header-title\").removeClass(\"display-none\");
                \$(\".user-mobile .mobile-topnav\").removeClass(\"slideInUp display-none\").addClass(\"slideInLeft slower\");
            }else{
                \$(\".user-mobile #mobile-sub-catnav-header-title\").text(\"Dashboard\");
                \$('.user-mobile .mobile-tertiarynav').addClass(\"display-none\");
                \$(this).attr(\"data-subnav-id\",\"0\");
                \$(\".user-mobile #\"+subnav_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            }
        });

        \$(\".user-mobile .mobile-subnav ul li\").click(function(){
            \$(\".top-nav-item\").removeClass(\"active\");
            var u_id = \$(this).data('uid');
            var name = \$(this).data('name');
            var parent_id = \$(this).parent().parent().attr('id');
            \$(\".user-mobile #mobile-sub-catnav-header-title\").text(name);
            \$(\".user-mobile #mobile-catnav-header-title\").addClass(\"display-none\");
            \$(\".user-mobile .mobile-catnav-back-btn\").removeClass(\"display-none\");
            \$(\".user-mobile .mobile-catnav-back-btn\").attr(\"data-subnav-id\",parent_id);
            \$(\".user-mobile .mobile-subnav\").addClass(\"display-none\");
            \$(\".user-mobile #mobile-tertiary-nav-\"+u_id).removeClass(\"display-none\").addClass(\"slideInRight slower\");
            \$(\".user-mobile #mobile-tertiary-nav-\"+u_id+\" ul\").removeClass(\"display-none\");
        });

        \$('.user-mobile .overlay-close').click(function(){
            \$('.user-mobile').hide();
            \$('html body').removeAttr('style');
        });

        /// Mobile User Menu Code Ends ////

        // Cache selectors
        var lastId,
            topMenu = \$(\"#mainNav\"),
            topMenuHeight = topMenu.outerHeight() + 1,

            // All list items
            menuItems = topMenu.find(\"a\"),

            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function () {
                var item = \$(\$(this).attr(\"href\"));
                if (item.length) {return item;}
            });

        // Bind click handler to menu items

        // so we can get a fancy scroll animation
        menuItems.click(function (e) {
            var href = \$(this).attr(\"href\"),
                offsetTop = href === \"#\" ? 0 : \$(href).offset().top - topMenuHeight + 1;
            \$('html, body').stop().animate({scrollTop: offsetTop },850);
            // e.preventDefault();
        });

        // Bind to scroll
        \$(window).scroll(function(){
            var scrollTop = \$(window).scrollTop();
            if(scrollTop > 0){
                // Get container scroll position
                var fromTop = \$(this).scrollTop() + topMenuHeight;
                // Get id of current scroll item
                var cur = scrollItems.map(function () {
                    if (\$(this).offset().top < fromTop)
                        return this;
                });
                // Get the id of the current element
                cur = cur[cur.length - 1];
                var id = cur && cur.length ? cur[0].id : \"\";
                if(lastId !== id){
                    lastId = id;
                    // Set/remove active class
                    menuItems.parent().removeClass(\"selected\").end().filter('*[href=\"#' + id + '\"]').parent().addClass(\"selected\");
                }
            }else{
                \$('.mp-gig-top-nav li:eq(0)').addClass(\"selected\");
            }
        });

    });
</script>
{% block javascripts %}
{% endblock %}


</body>
</html>
", "base.html.twig", "/home/vagrant/code/lenil/templates/base.html.twig");
    }
}
