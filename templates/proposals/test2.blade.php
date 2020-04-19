<nav id="tabs">
    <div class="container">
        <div class="breadcrumb flat mb-0 nav" role="tablist">
            <a class="nav-link active" href="#overview">Overview</a>
            <a class="nav-link d-none " href="#video">Video Settings</a>
            <a class="nav-link  " href="#pricing">Pricing</a>
            <a class="nav-link " href="#description">Description &amp; FAQ</a>
            <a class="nav-link " href="#requirements">Requirements</a>
            <a class="nav-link " href="#gallery">Gallery</a>
            <a class="nav-link " href="#publish">Submit For Approval</a>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-5"><!--- container Starts --->
    <div class="row"><!--- row Starts --->
        <div class="col-md-8">
            <div class="tab-content card card-body"><!--- tab-content Starts --->
                <!--- form Starts -->
                <form action="#" method="post" class="proposal-form"><!--- form Starts -->
                <div class="tab-pane fade " id="overview">
                        <div class="form-group row"><!--- form-group row Starts --->
                            <div class="col-md-3">Proposal Title</div>
                            <div class="col-md-9"><textarea name="proposal_title" rows="2" placeholder="I Will" required="" class="form-control">Raba</textarea></div>
                            <small class="form-text text-danger"></small>
                        </div><!--- form-group row Ends --->

                        <div class="form-group row"><!--- form-group row Starts --->
                            <div class="col-md-3"> Category </div>
                            <div class="col-md-9">
                                <select name="proposal_cat_id" id="category" class="form-control mb-3" required>
                                    <option value="1" selected> Graphics &amp; Design </option>
                                    <option value="2"> Digital Marketing </option>
                                    <option value="3"> Writing & Translation </option>
                                    <option value="4"> Video & Animation
                                    </option>
                                    <option value="6"> Programming & Tech
                                    </option>
                                    <option value="7"> Business
                                    </option>
                                    <option value="8"> Fun & Lifestyle
                                    </option>
                                    <option value="9"> Music &amp; Audio </option>
                                </select>
                                <small class="form-text text-danger"></small>
                                <select name="proposal_child_id" id="sub-category" class="form-control" required>
                                    <option value="1" selected> Logo Design </option>
                                    <option value='2'> Business Cards &amp; Stationery </option><option value='3'> Illustration </option><option value='4'> Cartoons Caricatures </option><option value='5'> Flyers Posters </option><option value='6'> Book Covers & Packaging </option><option value='7'> Web &amp; Mobile Design </option><option value='8'> Social Media Design </option><option value='9'> Banner Ads </option><option value='12'> Photoshop Editing </option><option value='13'> 3D & 2D Models </option><option value='14'> T-Shirts </option><option value='15'> Presentation Design </option><option value='16'> Other </option><option value='102'>  </option>	</select>
                            </div>
                        </div><!--- form-group row Ends --->

                        <div class="form-group row"><!--- form-group row Starts --->
                            <div class="col-md-3">Delivery Time</div>
                            <div class="col-md-9">
                                <select name="delivery_id" class="form-control" required="">
                                    <option value="1">  1 Day </option>
                                    <option value='2'>2 Days</option><option value='3'>3 Days</option><option value='4'>4 Days</option><option value='5'>5 Days</option><option value='6'>6 Days</option><option value='7'>7 Days</option><option value='8'>5 minutes</option>	</select>
                            </div>
                            <small class="form-text text-danger"></small>
                        </div><!--- form-group row Ends --->

                    <button class="btn btn-success next float-right" type="button" >Suivant</button>
                </div>
                    <div class="tab-pane " id="pricing">
                        <h5 class="font-weight-normal float-left">Pricing</h5>
                        <div class="float-right switch-box">
                            <span class="text">Fixed Price :</span>
                            <label class="switch">
                                <input type="checkbox" class="pricing" checked="">
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="clearfix"></div>

                        <hr class="mt-0">

                        <div class="form-group row proposal-price justify-content-center">
                            <div class="col-md-7">
                                <div class="input-group">
                                    <span class="input-group-addon font-weight-bold">$</span>
                                    <input type="number" class="form-control" form="pricing-form" name="proposal_price" min="0" value="">
                                </div>
                                <small>If you want to use packages, you need to set this field value to 0. </small>
                            </div>
                        </div>

                        <button class="btn btn-secondary previous float-left " type="button" >Précédent</button>
                        <button class="btn btn-success next float-right" type="button" >Suivant</button>

                    </div>
                </form><!--- form Ends -->

            </div><!--- tab-content Ends --->

        </div>
    </div><!--- row Ends --->
</div>

<script>
    $(document).ready(function () {


        var current_fs, next_fs, previous_fs; //
        function steps(e){
            if (e.parent().is(":visible")) {
                current_fs = e.parent();
                next_fs = e.parent().next();

                console.log(current_fs);
                console.log( next_fs);
                //console.log($("div").index(next_fs));
                $("#tabs a ").eq($("div").index(next_fs)).addClass("active");
                next_fs.show();
                //hide the current fieldset with style
                current_fs.hide();

            } else if (e.parent().next().is(":visible")) {
                current_fs = e.parent();
                next_fs = e.parent().next();
            }
            next_fs.show();
            current_fs.hide();
        }

        $(".next").click(function() {
            steps($(this));
        });

        $(".previous").click(function(){
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            $("#tabs a ").eq($("div").index(next_fs)).removeClass("active");
            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.hide();
        });
    });

</script>


