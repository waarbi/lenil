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

/* emails/forgotten_password.html.twig */
class __TwigTemplate_cd7caaf8c7b44790973fd0871d1b99210e0d43135e3883f8337153e88b06675d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/forgotten_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/forgotten_password.html.twig"));

        // line 1
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"format-detection\" content=\"telephone=no\" /> <!-- disable auto telephone linking in iOS -->
    <title>Respmail is a response HTML email designed to work on all major email platforms and smartphones</title>
    <style type=\"text/css\">
        /* RESET STYLES */
        html { background-color:#E1E1E1; margin:0; padding:0; }
        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, \"Lucida Grande\", sans-serif;}
        table{border-collapse:collapse;}
        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
        a {text-decoration:none !important;border-bottom: 1px solid;}
        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}

        /* CLIENT-SPECIFIC STYLES */
        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a \"view in browser\" message. */
        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
        .ExternalClass td[class=\"ecxflexibleContainerBox\"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */

        /* /\\/\\/\\/\\/\\/\\/\\/\\/ TEMPLATE STYLES /\\/\\/\\/\\/\\/\\/\\/\\/ */

        /* ========== Page Styles ========== */
        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
        .flexibleImage{height:auto;}
        .linkRemoveBorder{border-bottom:0 !important;}
        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}

        body, #bodyTable{background-color:#E1E1E1;}
        #emailHeader{background-color:#E1E1E1;}
        #emailBody{background-color:#FFFFFF;}
        #emailFooter{background-color:#E1E1E1;}
        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
        .emailButton{background-color:#205478; border-collapse:separate;}
        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
        .imageContentText {margin-top: 10px;line-height:0;}
        .imageContentText a {line-height:0;}
        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */

        /*FRAMEWORK HACKS & OVERRIDES */
        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}
        /* A nice and clean way to target phone numbers you want clickable and avoid a mobile phone from linking other numbers that look like, but are not phone numbers.  Use these two blocks of code to \"unstyle\" any numbers that may be linked.  The second block gives you a class to apply with a span tag to the numbers you would like linked and styled.
        Inspired by Campaign Monitor's article on using phone numbers in email: http://www.campaignmonitor.com/blog/post/3571/using-phone-numbers-in-html-email/.
        */
        .a[href^=\"tel\"], a[href^=\"sms\"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
        .mobile_link a[href^=\"tel\"], .mobile_link a[href^=\"sms\"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}


        /* MOBILE STYLES */
        @media only screen and (max-width: 480px){
            /*////// CLIENT-SPECIFIC STYLES //////*/
            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
            table[id=\"emailHeader\"],
            table[id=\"emailBody\"],
            table[id=\"emailFooter\"],
            table[class=\"flexibleContainer\"],
            td[class=\"flexibleContainerCell\"] {width:100% !important;}
            td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}
            td[class=\"imageContent\"] img {height:auto !important; width:100% !important; max-width:100% !important; }
            img[class=\"flexibleImage\"]{height:auto !important; width:100% !important;max-width:100% !important;}
            img[class=\"flexibleImageSmall\"]{height:auto !important; width:auto !important;}


            /*
            Create top space for every second element in a block
            */
            table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}

            /*
            Make buttons in the email span the
            full width of their container, allowing
            for left- or right-handed ease of use.
            */
            table[class=\"emailButton\"]{width:100% !important;}
            td[class=\"buttonContent\"]{padding:0 !important;}
            td[class=\"buttonContent\"] a{padding:15px !important;}

        }

        /*  CONDITIONS FOR ANDROID DEVICES ONLY
        *   http://developer.android.com/guide/webapps/targeting.html
        *   http://pugetworks.com/2011/04/css-media-queries-for-targeting-different-mobile-devices/ ;
        =====================================================*/

        @media only screen and (-webkit-device-pixel-ratio:.75){
            /* Put CSS for low density (ldpi) Android layouts in here */
        }

        @media only screen and (-webkit-device-pixel-ratio:1){
            /* Put CSS for medium density (mdpi) Android layouts in here */
        }

        @media only screen and (-webkit-device-pixel-ratio:1.5){
            /* Put CSS for high density (hdpi) Android layouts in here */
        }
        /* end Android targeting */

        /* CONDITIONS FOR IOS DEVICES ONLY
        =====================================================*/
        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {

        }
        /* end IOS targeting */
    </style>
    <!--[if mso 12]>
    <style type=\"text/css\">
        .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
    <!--[if mso 14]>
    <style type=\"text/css\">
        .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
</head>
<body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
<center style=\"background-color:#E1E1E1;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">
        <tr>
            <td align=\"center\" valign=\"top\" id=\"bodyCell\">
                <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" id=\"emailBody\">
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">
                                <tr>
                                    <td align=\"center\" valign=\"top\">
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">

                                                    <!-- CONTENT TABLE // -->
                                                    <!--
                                                    The content table is the first element
                                                        that's entirely separate from the structural
                                                        framework of the email.
                                                    -->
                                                    <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">
                                                        <tr>
                                                            <td align=\"center\" valign=\"top\" class=\"textContent\">
                                                                <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">Lenil</h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- // CONTENT TABLE -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->

                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- CENTERING TABLE // -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr>
                                    <td align=\"center\" valign=\"top\">
                                        <!-- FLEXIBLE CONTAINER // -->
                                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">

                                                    <!-- CONTENT TABLE // -->
                                                    <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                        <tr>
                                                          Pour réinitialiser votre mot de pass, cliquez sur ce lien :
                                                        </tr>
                                                    </table>
                                                    <!-- // CONTENT TABLE -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- CENTERING TABLE // -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr style=\"padding-top:0;\">
                                    <td align=\"center\" valign=\"top\">
                                        <!-- FLEXIBLE CONTAINER // -->
                                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td style=\"padding-top:0;\" align=\"center\" valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">

                                                    <!-- CONTENT TABLE // -->
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"50%\" class=\"emailButton\" style=\"background-color: #3498DB;\">
                                                        <tr>
                                                            <td align=\"center\" valign=\"middle\" class=\"buttonContent\" style=\"padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;\">
                                                                <a style=\"color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;\" href=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["urlConfirm"]) || array_key_exists("urlConfirm", $context) ? $context["urlConfirm"] : (function () { throw new RuntimeError('Variable "urlConfirm" does not exist.', 222, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">Réinitialiser mon mot de pass</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- // CONTENT TABLE -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>


                    <!-- // MODULE ROW -->

                </table>

                <table bgcolor=\"#E1E1E1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" id=\"emailFooter\">
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- CENTERING TABLE // -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr>
                                    <td align=\"center\" valign=\"top\">
                                        <!-- FLEXIBLE CONTAINER // -->
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">
                                                    <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">
                                                        <tr>
                                                            <td valign=\"top\" bgcolor=\"#E1E1E1\">

                                                                <div style=\"font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;\">
                                                                    <div>Copyright &#169; 2020 <a href=\"#\" target=\"_blank\" style=\"text-decoration:none;color:#828282;\"><span style=\"color:#828282;\">LENIL.TECH</span></a>. All&nbsp;rights&nbsp;reserved.</div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>

                </table>
                <!-- // END -->

            </td>
        </tr>
    </table>
</center>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/forgotten_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 222,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"format-detection\" content=\"telephone=no\" /> <!-- disable auto telephone linking in iOS -->
    <title>Respmail is a response HTML email designed to work on all major email platforms and smartphones</title>
    <style type=\"text/css\">
        /* RESET STYLES */
        html { background-color:#E1E1E1; margin:0; padding:0; }
        body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, \"Lucida Grande\", sans-serif;}
        table{border-collapse:collapse;}
        table[id=bodyTable] {width:100%!important;margin:auto;max-width:500px!important;color:#7A7A7A;font-weight:normal;}
        img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
        a {text-decoration:none !important;border-bottom: 1px solid;}
        h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}

        /* CLIENT-SPECIFIC STYLES */
        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
        table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
        #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a \"view in browser\" message. */
        img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
        body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
        .ExternalClass td[class=\"ecxflexibleContainerBox\"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */

        /* /\\/\\/\\/\\/\\/\\/\\/\\/ TEMPLATE STYLES /\\/\\/\\/\\/\\/\\/\\/\\/ */

        /* ========== Page Styles ========== */
        h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
        h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
        h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
        h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
        .flexibleImage{height:auto;}
        .linkRemoveBorder{border-bottom:0 !important;}
        table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}

        body, #bodyTable{background-color:#E1E1E1;}
        #emailHeader{background-color:#E1E1E1;}
        #emailBody{background-color:#FFFFFF;}
        #emailFooter{background-color:#E1E1E1;}
        .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
        .emailButton{background-color:#205478; border-collapse:separate;}
        .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center;}
        .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;}
        .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
        .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
        .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
        .imageContentText {margin-top: 10px;line-height:0;}
        .imageContentText a {line-height:0;}
        #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */

        /*FRAMEWORK HACKS & OVERRIDES */
        span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
        span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
        span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}
        /* A nice and clean way to target phone numbers you want clickable and avoid a mobile phone from linking other numbers that look like, but are not phone numbers.  Use these two blocks of code to \"unstyle\" any numbers that may be linked.  The second block gives you a class to apply with a span tag to the numbers you would like linked and styled.
        Inspired by Campaign Monitor's article on using phone numbers in email: http://www.campaignmonitor.com/blog/post/3571/using-phone-numbers-in-html-email/.
        */
        .a[href^=\"tel\"], a[href^=\"sms\"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
        .mobile_link a[href^=\"tel\"], .mobile_link a[href^=\"sms\"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}


        /* MOBILE STYLES */
        @media only screen and (max-width: 480px){
            /*////// CLIENT-SPECIFIC STYLES //////*/
            body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
            table[id=\"emailHeader\"],
            table[id=\"emailBody\"],
            table[id=\"emailFooter\"],
            table[class=\"flexibleContainer\"],
            td[class=\"flexibleContainerCell\"] {width:100% !important;}
            td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}
            td[class=\"imageContent\"] img {height:auto !important; width:100% !important; max-width:100% !important; }
            img[class=\"flexibleImage\"]{height:auto !important; width:100% !important;max-width:100% !important;}
            img[class=\"flexibleImageSmall\"]{height:auto !important; width:auto !important;}


            /*
            Create top space for every second element in a block
            */
            table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}

            /*
            Make buttons in the email span the
            full width of their container, allowing
            for left- or right-handed ease of use.
            */
            table[class=\"emailButton\"]{width:100% !important;}
            td[class=\"buttonContent\"]{padding:0 !important;}
            td[class=\"buttonContent\"] a{padding:15px !important;}

        }

        /*  CONDITIONS FOR ANDROID DEVICES ONLY
        *   http://developer.android.com/guide/webapps/targeting.html
        *   http://pugetworks.com/2011/04/css-media-queries-for-targeting-different-mobile-devices/ ;
        =====================================================*/

        @media only screen and (-webkit-device-pixel-ratio:.75){
            /* Put CSS for low density (ldpi) Android layouts in here */
        }

        @media only screen and (-webkit-device-pixel-ratio:1){
            /* Put CSS for medium density (mdpi) Android layouts in here */
        }

        @media only screen and (-webkit-device-pixel-ratio:1.5){
            /* Put CSS for high density (hdpi) Android layouts in here */
        }
        /* end Android targeting */

        /* CONDITIONS FOR IOS DEVICES ONLY
        =====================================================*/
        @media only screen and (min-device-width : 320px) and (max-device-width:568px) {

        }
        /* end IOS targeting */
    </style>
    <!--[if mso 12]>
    <style type=\"text/css\">
        .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
    <!--[if mso 14]>
    <style type=\"text/css\">
        .flexibleContainer{display:block !important; width:100% !important;}
    </style>
    <![endif]-->
</head>
<body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
<center style=\"background-color:#E1E1E1;\">
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">
        <tr>
            <td align=\"center\" valign=\"top\" id=\"bodyCell\">
                <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" id=\"emailBody\">
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">
                                <tr>
                                    <td align=\"center\" valign=\"top\">
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">

                                                    <!-- CONTENT TABLE // -->
                                                    <!--
                                                    The content table is the first element
                                                        that's entirely separate from the structural
                                                        framework of the email.
                                                    -->
                                                    <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">
                                                        <tr>
                                                            <td align=\"center\" valign=\"top\" class=\"textContent\">
                                                                <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">Lenil</h1>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- // CONTENT TABLE -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>
                    <!-- // MODULE ROW -->


                    <!-- MODULE ROW // -->

                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- CENTERING TABLE // -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr>
                                    <td align=\"center\" valign=\"top\">
                                        <!-- FLEXIBLE CONTAINER // -->
                                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">

                                                    <!-- CONTENT TABLE // -->
                                                    <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                                        <tr>
                                                          Pour réinitialiser votre mot de pass, cliquez sur ce lien :
                                                        </tr>
                                                    </table>
                                                    <!-- // CONTENT TABLE -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- CENTERING TABLE // -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr style=\"padding-top:0;\">
                                    <td align=\"center\" valign=\"top\">
                                        <!-- FLEXIBLE CONTAINER // -->
                                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td style=\"padding-top:0;\" align=\"center\" valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">

                                                    <!-- CONTENT TABLE // -->
                                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"50%\" class=\"emailButton\" style=\"background-color: #3498DB;\">
                                                        <tr>
                                                            <td align=\"center\" valign=\"middle\" class=\"buttonContent\" style=\"padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;\">
                                                                <a style=\"color:#FFFFFF;text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:20px;line-height:135%;\" href=\"{{ urlConfirm }}\" target=\"_blank\">Réinitialiser mon mot de pass</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- // CONTENT TABLE -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>


                    <!-- // MODULE ROW -->

                </table>

                <table bgcolor=\"#E1E1E1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" id=\"emailFooter\">
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- CENTERING TABLE // -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                                <tr>
                                    <td align=\"center\" valign=\"top\">
                                        <!-- FLEXIBLE CONTAINER // -->
                                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"500\" class=\"flexibleContainer\">
                                            <tr>
                                                <td align=\"center\" valign=\"top\" width=\"500\" class=\"flexibleContainerCell\">
                                                    <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">
                                                        <tr>
                                                            <td valign=\"top\" bgcolor=\"#E1E1E1\">

                                                                <div style=\"font-family:Helvetica,Arial,sans-serif;font-size:13px;color:#828282;text-align:center;line-height:120%;\">
                                                                    <div>Copyright &#169; 2020 <a href=\"#\" target=\"_blank\" style=\"text-decoration:none;color:#828282;\"><span style=\"color:#828282;\">LENIL.TECH</span></a>. All&nbsp;rights&nbsp;reserved.</div>
                                                                </div>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // FLEXIBLE CONTAINER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // CENTERING TABLE -->
                        </td>
                    </tr>

                </table>
                <!-- // END -->

            </td>
        </tr>
    </table>
</center>
</body>
</html>
", "emails/forgotten_password.html.twig", "/home/vagrant/code/lenil/templates/emails/forgotten_password.html.twig");
    }
}
