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

/* modals/create_offer.html.twig */
class __TwigTemplate_19bf4f51116ef9bfd2ac5fa92a9e79bfb1fb02cd60dd60219c80bdc1a5744b04 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/create_offer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modals/create_offer.html.twig"));

        // line 1
        echo "<div class=\"append-modal\">

    <div id=\"submit-proposal-details\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\"> <!-- Continue's Code -->

        <div class=\"modal-dialog\">

            <div class=\"modal-content\"><!--- modal-content Starts --->

                <div class=\"modal-header\"><!--- modal-header Starts --->

                    <h5 class=\"modal-title h5\"> Specify Your Proposal Details </h5>

                    <button class=\"close\" data-dismiss=\"modal\"> × </button>

                </div><!--- modal-header Ends --->

                <div class=\"modal-body p-0\"><!--- modal-body p-0 Starts --->

                    <div class=\"request-summary\"><!--- request-summary Starts --->


                        <img src=\"https://www.gigtodo.com/user_images/10157731856482910.jpg\" width=\"50\" height=\"50\" class=\"rounded-circle\">


                        <div id=\"request-description\"><!--- request-description Starts --->

                            <h6 class=\"text-success mb-1\"> 123 </h6>

                            <p> 123 </p>

                        </div><!--- request-description Ends --->

                    </div><!--- request-summary Ends --->

                    <form id=\"proposal-details-form\"><!--- proposal-details-form Starts --->

                        <div class=\"selected-proposal p-3\"><!--- selected-proposal p-3 Starts --->

                            <h5> I will make a beatiful logo. </h5>

                            <hr>

                            <input type=\"hidden\" name=\"proposal_id\" value=\"164\">

                            <input type=\"hidden\" name=\"request_id\" value=\"188\">

                            <div class=\"form-group\"><!--- form-group Starts --->

                                <label class=\"font-weight-bold\"> Description :  </label>

                                <textarea name=\"description\" class=\"form-control\" required=\"\"></textarea>

                            </div><!--- form-group Ends --->

                            <hr>

                            <div class=\"form-group\"><!--- form-group Starts --->

                                <label class=\"font-weight-bold\"> Delivery Time :  </label>

                                <select class=\"form-control float-right\" name=\"delivery_time\">

                                    <option value=\"1 Day\"> 1 Day </option><option value=\"2 Days\"> 2 Days </option><option value=\"3 Days\"> 3 Days </option><option value=\"4 Days\"> 4 Days </option><option value=\"5 Days\"> 5 Days </option><option value=\"6 Days\"> 6 Days </option><option value=\"7 Days\"> 7 Days </option><option value=\"5 minutes\"> 5 minutes </option>
                                </select>

                            </div><!--- form-group Ends --->

                            <hr>


                            <div class=\"form-group\"><!--- form-group Starts --->

                                <label class=\"font-weight-bold\"> Total Offer Amount :  </label>

                                <div class=\"input-group float-right\">

                                    <span class=\"input-group-addon font-weight-bold\"> \$ </span>

                                    <input type=\"number\" name=\"amount\" class=\"form-control\" min=\"5\" placeholder=\"5 Minimum\" required=\"\">

                                </div>

                            </div><!--- form-group Ends --->


                        </div><!--- selected-proposal p-3 Ends --->

                        <div class=\"modal-footer\"><!--- modal-footer Starts --->

                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#send-offer-modal\">Back</button>

                            <button type=\"submit\" class=\"btn btn-success\">Submit Offer</button>

                        </div><!--- modal-footer Ends --->

                    </form><!--- proposal-details-form Ends --->

                </div><!--- modal-body p-0 Ends --->

            </div><!--- modal-content Ends --->

            <div id=\"insert_offer\"></div>


            <script>

                \$(document).ready(function(){

                    \$(\"#proposal-details-form\").submit(function(event){

                        event.preventDefault();

                        description = \$(\"textarea[name='description']\").val();

                        delivery_time = \$(\"select[name='delivery_time']\").val();

                        amount = \$(\"input[name='amount']\").val();

                        if(description == \"\" | delivery_time == \"\" | amount == \"\"){

                            swal({
                                type: 'warning',
                                text: 'You Must Need To Fill Out All Fields Before Submitting Offer.'
                            });

                        }else{


                            \$.ajax({

                                method: \"POST\",
                                url: \"https://www.gigtodo.com/requests/insert_offer\",
                                data: \$('#proposal-details-form').serialize()

                            }).done(function(data){

                                \$(\"#submit-proposal-details\").modal('hide');

                                \$(\"#insert_offer\").html(data);

                            });


                        }

                    });


                });

            </script></div>

    </div> <!-- Continue end -->

    <script>

        \$(document).ready(function(){

            \$(\"#send-offer-modal\").modal(\"show\");

            \$(\"#submit-proposal\").attr(\"disabled\", \"disabled\");

            \$(\".radio-custom-label\").click(function(){

                \$(\"#submit-proposal\").removeAttr(\"disabled\");

            });


            \$(\"#submit-proposal\").click(function(){

                proposal_id = document.querySelector('input[name=\"proposal_id\"]:checked').value;

                request_id = \"188\";

                \$.ajax({

                    method: \"POST\",

                    url: \"https://www.gigtodo.com/requests/submit_proposal_details\",

                    data: { proposal_id: proposal_id, request_id: request_id }

                })

                    .done(function(data){

                        \$(\"#submit-proposal-details .modal-dialog\").html(data);

                    });


            });

        });

    </script></div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "modals/create_offer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"append-modal\">

    <div id=\"submit-proposal-details\" class=\"modal fade\" style=\"display: none;\" aria-hidden=\"true\"> <!-- Continue's Code -->

        <div class=\"modal-dialog\">

            <div class=\"modal-content\"><!--- modal-content Starts --->

                <div class=\"modal-header\"><!--- modal-header Starts --->

                    <h5 class=\"modal-title h5\"> Specify Your Proposal Details </h5>

                    <button class=\"close\" data-dismiss=\"modal\"> × </button>

                </div><!--- modal-header Ends --->

                <div class=\"modal-body p-0\"><!--- modal-body p-0 Starts --->

                    <div class=\"request-summary\"><!--- request-summary Starts --->


                        <img src=\"https://www.gigtodo.com/user_images/10157731856482910.jpg\" width=\"50\" height=\"50\" class=\"rounded-circle\">


                        <div id=\"request-description\"><!--- request-description Starts --->

                            <h6 class=\"text-success mb-1\"> 123 </h6>

                            <p> 123 </p>

                        </div><!--- request-description Ends --->

                    </div><!--- request-summary Ends --->

                    <form id=\"proposal-details-form\"><!--- proposal-details-form Starts --->

                        <div class=\"selected-proposal p-3\"><!--- selected-proposal p-3 Starts --->

                            <h5> I will make a beatiful logo. </h5>

                            <hr>

                            <input type=\"hidden\" name=\"proposal_id\" value=\"164\">

                            <input type=\"hidden\" name=\"request_id\" value=\"188\">

                            <div class=\"form-group\"><!--- form-group Starts --->

                                <label class=\"font-weight-bold\"> Description :  </label>

                                <textarea name=\"description\" class=\"form-control\" required=\"\"></textarea>

                            </div><!--- form-group Ends --->

                            <hr>

                            <div class=\"form-group\"><!--- form-group Starts --->

                                <label class=\"font-weight-bold\"> Delivery Time :  </label>

                                <select class=\"form-control float-right\" name=\"delivery_time\">

                                    <option value=\"1 Day\"> 1 Day </option><option value=\"2 Days\"> 2 Days </option><option value=\"3 Days\"> 3 Days </option><option value=\"4 Days\"> 4 Days </option><option value=\"5 Days\"> 5 Days </option><option value=\"6 Days\"> 6 Days </option><option value=\"7 Days\"> 7 Days </option><option value=\"5 minutes\"> 5 minutes </option>
                                </select>

                            </div><!--- form-group Ends --->

                            <hr>


                            <div class=\"form-group\"><!--- form-group Starts --->

                                <label class=\"font-weight-bold\"> Total Offer Amount :  </label>

                                <div class=\"input-group float-right\">

                                    <span class=\"input-group-addon font-weight-bold\"> \$ </span>

                                    <input type=\"number\" name=\"amount\" class=\"form-control\" min=\"5\" placeholder=\"5 Minimum\" required=\"\">

                                </div>

                            </div><!--- form-group Ends --->


                        </div><!--- selected-proposal p-3 Ends --->

                        <div class=\"modal-footer\"><!--- modal-footer Starts --->

                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" data-toggle=\"modal\" data-target=\"#send-offer-modal\">Back</button>

                            <button type=\"submit\" class=\"btn btn-success\">Submit Offer</button>

                        </div><!--- modal-footer Ends --->

                    </form><!--- proposal-details-form Ends --->

                </div><!--- modal-body p-0 Ends --->

            </div><!--- modal-content Ends --->

            <div id=\"insert_offer\"></div>


            <script>

                \$(document).ready(function(){

                    \$(\"#proposal-details-form\").submit(function(event){

                        event.preventDefault();

                        description = \$(\"textarea[name='description']\").val();

                        delivery_time = \$(\"select[name='delivery_time']\").val();

                        amount = \$(\"input[name='amount']\").val();

                        if(description == \"\" | delivery_time == \"\" | amount == \"\"){

                            swal({
                                type: 'warning',
                                text: 'You Must Need To Fill Out All Fields Before Submitting Offer.'
                            });

                        }else{


                            \$.ajax({

                                method: \"POST\",
                                url: \"https://www.gigtodo.com/requests/insert_offer\",
                                data: \$('#proposal-details-form').serialize()

                            }).done(function(data){

                                \$(\"#submit-proposal-details\").modal('hide');

                                \$(\"#insert_offer\").html(data);

                            });


                        }

                    });


                });

            </script></div>

    </div> <!-- Continue end -->

    <script>

        \$(document).ready(function(){

            \$(\"#send-offer-modal\").modal(\"show\");

            \$(\"#submit-proposal\").attr(\"disabled\", \"disabled\");

            \$(\".radio-custom-label\").click(function(){

                \$(\"#submit-proposal\").removeAttr(\"disabled\");

            });


            \$(\"#submit-proposal\").click(function(){

                proposal_id = document.querySelector('input[name=\"proposal_id\"]:checked').value;

                request_id = \"188\";

                \$.ajax({

                    method: \"POST\",

                    url: \"https://www.gigtodo.com/requests/submit_proposal_details\",

                    data: { proposal_id: proposal_id, request_id: request_id }

                })

                    .done(function(data){

                        \$(\"#submit-proposal-details .modal-dialog\").html(data);

                    });


            });

        });

    </script></div>", "modals/create_offer.html.twig", "/home/vagrant/code/lenil/templates/modals/create_offer.html.twig");
    }
}
