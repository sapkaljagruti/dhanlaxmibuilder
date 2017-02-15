<?php
$show_main_sliders = 1;
$this->load->view('header');
$this->load->view('countdown_timer');
?>



<!-- About -->
<div class="about-w3laits" id="about">
    <div class="container">
        <h1>A Name You Can Trust</h1>
        <p class="about-p-1-aits">Dhanlaxmi Builder was established in 2010 by Mr. Prafulla Gosh and Mr. Sureshkumar Modi, who have been the full time owner operators of the business since that time. Dhanlaxmi Builder remains a strong leader of the industry. Having steadily grown in expertise Dhanlaxmi Builder has a reputation as the leasing local and highly skilled agent servicing Lavachha and near by region.</p>
        <p class="about-p-2-aits">We aim to be continually learning and evolving with the customer service needs of all who have contact with our company. Our office premises are modern and well equipped with Dhanlaxmi Builder embracing and utilising the latest technological advances available to our industry, however retaining our old fashioned service "core values" that keep our clients loyal and confident in referring our service to family and friends. Although Dhanlaxmi Builder is pro-active with regard to technology and innovation, this does not come at the expense of highly professional, personalised service and in-depth market knowledge.</p>
    </div>
</div>
<!-- //About -->



<!-- Details -->
<div class="details-w3lsagile" id="details">
    <div class="container">

        <h3>We're Always There For You</h3>

        <div class="details-grids-w3lsagile">
            <div class="col-md-4 col-sm-4 details-grid-w3lsagile details-grid-1-w3lsagile">
                <div class=" details-grid1-w3lsagile">
                    <div class="details-grid-image-w3lsagile">
                        <img src="<?php echo base_url('assets/images/detail-1.jpg'); ?>" alt="">
                    </div>
                    <div class="details-grid-info-w3lsagile">
                        <p>Let us know your loan amount, loan tenure and interest rate, we will help you to calculate your monthly EMI. Here is the calculator for EMI counting in more details.</p>
                    </div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_emi_calc">EMI Calculator<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 details-grid-w3lsagile details-grid-2-w3lsagile">
                <div class="details-grid2-w3lsagile">
                    <div class="details-grid-image-w3lsagile">
                        <img src="<?php echo base_url('assets/images/detail-2.jpg'); ?>" alt="">
                    </div>
                    <div class="details-grid-info-w3lsagile">
                        <p>Home loans are not headache with Dhanlaxmi! Don't look further and just go through the home loan help and check the mandatory documents.</p>
                    </div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_home_loan_help">Home Loan Help<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 details-grid-w3lsagile details-grid-3-w3lsagile">
                <div class="details-grid3-w3lsagile">
                    <div class="details-grid-image-w3lsagile">
                        <img src="<?php echo base_url('assets/images/detail-3.jpg'); ?>" alt="">
                    </div>
                    <div class="details-grid-info-w3lsagile">
                        <p>Hey buyers!! Got too many questions on quality and material maintenance? Don't worry. Here is the guide to help you out buying your dream home.</p>
                    </div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modal_buyers_guide">Buyer's Guide<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- Tooltip-Content -->
        <div class="tooltip-content">

            <div class="modal fade details-modal" id="modal_emi_calc" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">EMI Calculator</h4>
                        </div>

                        <div class="modal-body">
                            <form id="emi_calc" action="#" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="loan_amount" class="col-sm-3 control-label">Loan Amount*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="loan_amount" placeholder="Loan Amount" onkeypress="return onlyNumber(event)" maxlength="9">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loan_tenure" class="col-sm-3 control-label">Loan Tenure (In months)*</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="loan_tenure" placeholder="Loan Tenure" onkeypress="return onlyNumber(event)" maxlength="9">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="int_rate" class="col-sm-3 control-label">Interest Rate (Reducing)</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="int_rate" placeholder="Interest Rate" onkeypress="return onlyNumber(event)" maxlength="9">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-7">
                                        <button type="button" id="reset_emi_calc" class="btn btn-default">Reset</button>
                                        <button type="button" onclick="calculateEMI()" class="btn btn-success">Calculate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--<div class="modal-footer" style="display: none;">-->
                        <div class="modal-footer">
                            <form id="emi_calc_reponse" class="form-horizontal">
                                <div class="form-group">
                                    <label for="monthly_emi" class="col-sm-3 control-label">Calculated Monthly EMI</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="monthly_emi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="total_amount" class="col-sm-3 control-label">Total Amount with Interest</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="total_amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="flat_int_pa" class="col-sm-3 control-label">Flat Interest Rate PA</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="flat_int_pa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="flat_int_pm" class="col-sm-3 control-label">Flat Interest Rate PM</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="flat_int_pm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tot_int_amount" class="col-sm-3 control-label">Total Interest Amount</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="tot_int_amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="yearly_int_amount" class="col-sm-3 control-label">Yearly Interest Amount</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="yearly_int_amount">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade details-modal" id="modal_home_loan_help" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">DOCUMENTS REQUIRED FOR HOME LOAN</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="box-group" id="accordion1">
                                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="false" class="collapsed">Documents required for the Sanctioning of Home Loan</a>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Duly Completed Application Form</li>
                                                                <li>Photograph</li>
                                                                <li>Fee cheque</li>
                                                                <li>Photo Identity Proof</li>
                                                                <li>Signature Verification Proof</li>
                                                                <li>Residence Address Proof</li>
                                                                <li>Property documents as required</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" class="" aria-expanded="true">Document specific for Salaried</a>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="true">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Last 3 months' salary slips</li>
                                                                <li>Form 16</li>
                                                                <li>Bank Statement for last 6 months from salary account</li>
                                                                <li>Repayment details on any existing loans or loan closure letter</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" class="collapsed" aria-expanded="false">Document specific for Self Employed</a>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Income Tax Return / Computation of Total Income / Auditors Report / Balance Sheet / Profit &amp; Loss Account certified by Chartered Accountant for last 2 years (3 years for Home Equity) (both for business and personal of partners/directors)</li>
                                                                <li>Bank Statement for last 6 months from operating account</li>
                                                                <li>Repayment details on existing loans or loan closure letter</li>
                                                                <li>Board Resolution in case of a company</li>
                                                                <li>Proof of existence of the business entity</li>
                                                                <li>Proof of Office Address</li>
                                                                <li>Photo Identity Proof, Residence Address Proof, Signature Verification must be provided for all the main partners / directors</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade details-modal" id="modal_buyers_guide" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">BUYER'S GUIDE</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="box-group" id="accordion2">
                                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1" aria-expanded="false" class="collapsed">Consider our requirements - Dream Home</a>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Our family's expectation regarding dream Home</li>
                                                                <li>Number of bedrooms.</li>
                                                                <li>Number of bathrooms.</li>
                                                                <li>Other important features.</li>
                                                                <li>Our budget range.</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2" class="" aria-expanded="true">Choosing where to live - Location</a>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse" aria-expanded="true">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Will we be close to everything we need - shops, schools, parks, public transport, etc.?</li>
                                                                <li>Will we be able to position a home on our block so it has good access to sun, ideally with the long side or back facing north (or close to north)?</li>
                                                                <li>Will any neighbouring buildings have an effect on our block's privacy, views or access to winter sun?</li>
                                                                <li>Best block for us.</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3" class="collapsed" aria-expanded="false">Choosing our new home - Orientation</a>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Is it a functional floor plan without wasted space and with plenty of storage?</li>
                                                                <li>What would we change about this plan?</li>
                                                                <li>Will our preferred home fit well on our block with living areas facing north (or close to north)?</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4" aria-expanded="false" class="collapsed">Choosing our new home - Comfort</a>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Is there good insulation under roofs, in ceilings and in walls?</li>
                                                                <li> Do we need floor insulation?  </li>
                                                                <li>Do our windows predominantly face north?  </li>
                                                                <li>Are our north-facing windows shaded by eaves or overhangs?  </li>
                                                                <li>Are our east and west-facing windows shaded by adjustable shutters?  </li>
                                                                <li>Do we need to consider double glazing? Where?  </li>
                                                                <li>Will we use curtains with pelmets to help keep in heat? Where? </li>
                                                                <li>Comments, things we'd like to change about our home design:</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5" aria-expanded="false" class="collapsed">Working with you builder - Our living areas and kitchens</a>
                                                    </div>
                                                    <div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Can our living areas be divided up as needed, for economical heating and cooling?</li>
                                                                <li>Will our living areas get plenty of sunlight in winter?</li>
                                                                <li>Will our living areas be shaded in summer?</li>
                                                                <li>Can windows be opened on more than one side of living areas to let cooling breezes through?</li>
                                                                <li>Is our kitchen set out so there is easy reach between different activities?</li>
                                                                <li>Do our kitchen cupboards use low emission particle board and finishes?</li>
                                                                <li>Comments, things we'd like to change.</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6" aria-expanded="false" class="collapsed">Our heating and cooling</a>
                                                    </div>
                                                    <div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Do we have a north-facing roof for solar hot water?</li>
                                                                <li>Do we have a gas connection?</li>
                                                                <li>Type of hot water system we're looking for:</li>
                                                                <li>Have we locked in good design features to avoid or reduce our heating and cooling needs?</li>
                                                                <li>Can we use fans or evaporative coolers instead of air conditioning?</li>
                                                                <li>Would a solar air heater work for us?</li>
                                                                <li>Does our gas heater have a high star rating?</li>
                                                                <li>How can we save further on heating and cooling?</li>
                                                                <li>Will we use electricity from renewable sources?</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse7" aria-expanded="false" class="collapsed">Our fittings and appliances</a>
                                                    </div>
                                                    <div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Does our home design make good use of natural light?</li>
                                                                <li>Our lighting requirements:</li>
                                                                <li>The costs of running our lighting per year:</li>
                                                                <li>How we can save on lighting costs:</li>
                                                                <li>The energy star rating of our fridge:</li>
                                                                <li>The water star rating of our washing machine:</li>
                                                                <li>Our other major energy-using appliances:  </li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse8" aria-expanded="false" class="collapsed">Our colours &amp; finishes</a>
                                                    </div>
                                                    <div id="collapse8" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>The types of flooring in our home.</li>
                                                                <li>The timbers used in our home.</li>
                                                                <li>The paints and varnishes used in our home.</li>
                                                                <li>Examples of colour schemes that we like.</li>
                                                                <li>Have we specified materials that are either low emission or natural products?</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box">
                                                    <div class="box-header with-border">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse9" aria-expanded="false" class="collapsed">Our outdoor living</a>
                                                    </div>
                                                    <div id="collapse9" class="panel-collapse collapse" aria-expanded="false">
                                                        <div class="box-body">
                                                            <ol>
                                                                <li>Will our alfresco areas get sun in winter and be cool and shady in summer?</li>
                                                                <li>Will we use local native plants, drought-resistant plants and mulch in our garden, to save water?</li>
                                                                <li>Will we grow our own vegetables and herbs?</li>
                                                                <li>Comments, things we'd like to change:</li>
                                                                <li>How many liters will our rainwater tank hold?</li>
                                                                <li>What will our rainwater tank be plumbed in to? :</li>
                                                                <li>Will we reuse our wastewater? If so, where will we collect it from and where will we use it?</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- //Tooltip-Content -->

    </div>
</div>
<!-- //Details -->



<!-- Projects -->
<div class="projects-w3lsaits" id="projects">
    <div class="container">

        <h3>Your Dream Home Awaits</h3>

        <!-- Slider-2 -->
        <div class="slider-w3layouts slider2-agileits">
            <ul class="rslides-agileits" id="slider2">
                <li>
                    <img src="<?php echo base_url('assets/images/dream_home_1.jpg'); ?>" alt="">
                    <div class="projects-info">
                        <h4>Where Dreams Come Home</h4>
<!--                        <p>Dhanlaxmi Residency to individuals who desire luxury and connectivity with nuture, it's shear expense of space & peace ,all simultaneously. Your above to move from work & stress to reveal cozy comfort ends here. Dhanlaxmi Residency enables you to experience modern and debonair life style. One can discover here a system that will enhance one's vision of living style, amlgamation of architrcture, designing & aesthetics offering you, your dream living space.</p>-->
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/dream_home_2.jpg'); ?>" alt="">
                    <div class="projects-info">
                        <h4>Let us Guide You Home</h4>
<!--                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>-->
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/dream_home_3.jpg'); ?>" alt="">
                    <div class="projects-info">
                        <h4>Beautiful Places To Live</h4>
<!--                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>-->
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/dream_home_4.jpg'); ?>" alt="">
                    <div class="projects-info">
                        <h4>Your Next Chapter Starts Here</h4>
<!--                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>-->
                    </div>
                    <div class="clearfix"></div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/images/dream_home_5.jpg'); ?>" alt="">
                    <div class="projects-info">
                        <h4>Lifestyle Is Where It Begins</h4>
<!--                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>-->
                    </div>
                    <div class="clearfix"></div>
                </li>
            </ul>
        </div>
        <!-- //Slider-2 -->

    </div>
</div>
<!-- //Projects -->


<script>

    $("form#emi_calc :input").on('copy paste', function (e) {
        return false;
    });
    $("form#emi_calc_reponse :input").on('keyup keypress copy paste', function (e) {
        return false;
    });

//EMI Calcoulator's input field must be empty after model hide
    $('#modal_emi_calc').on('hidden.bs.modal', function (e) {
        $(this)
                .find("input,textarea,select")
                .val('')
                .end()
                .find("input[type=checkbox], input[type=radio]")
                .prop("checked", "")
                .end();
    });

    $('#reset_emi_calc').on('click', function (e) {
        $('form#emi_calc, form#emi_calc_reponse')
                .find("input,textarea,select")
                .val('')
                .end()
                .find("input[type=checkbox], input[type=radio]")
                .prop("checked", "")
                .end();
    });

//    Allow only numbers
    function onlyNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    function getRound(X) {
        return Math.round(X * 100) / 100
    }

    function calculateEMI() {
        var loan_amount = $('#loan_amount').val();
        var loan_tenure = $('#loan_tenure').val();
        var int_rate = $('#int_rate').val();
        if (loan_amount != '' && loan_tenure != '' && int_rate != '') {
            var final_int_rate = int_rate / 1200;
            var years = $('#loan_tenure').val() / 12;
            $('#monthly_emi').val(getRound(loan_amount * final_int_rate / (1 - (Math.pow(1 / (1 + final_int_rate), loan_tenure)))));
            $('#total_amount').val(getRound($('#monthly_emi').val() * loan_tenure));

            $('#tot_int_amount').val(getRound($('#total_amount').val() - loan_amount));
            $('#yearly_int_amount').val(getRound($('#tot_int_amount').val() / years));

            $('#flat_int_pa').val(getRound($('#yearly_int_amount').val() / loan_amount * 100));
            $('#flat_int_pm').val(getRound(($('#yearly_int_amount').val() / loan_amount * 100) / 12));
        }
    }



</script>


<?php
$this->load->view('footer');
?>