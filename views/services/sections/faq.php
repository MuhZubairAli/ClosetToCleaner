<!--==========================
Frequently Asked Questions
============================-->
<section id="faq">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">

                <h1 class="faq-title">Frequently Asked Questions, Answered</h1>

                <div class="panel-group" id="faqAccordion">
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                            <h4 class="panel-title">
                                <a href="#" class="ing">How do I drop off my laundry?</a>
                            </h4>

                        </div>
                        <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>CTC has lockers located on each site at our partnering property locations. Each tenant is provided with bags for laundry and dry cleaning services. Just simply place and lock them inside one of the locker.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                            <h4 class="panel-title">
                                <a href="#" class="ing">When are my scheduled pickup and delivery days?</a>
                            </h4>

                        </div>
                        <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>Pick-up and delivery times are specific to each residence. To find out the designated times within your residence, you can:</p>
                                <ol>
                                    <li>Visit our lockers on the premises.</li>
                                    <li>Ask your Leasing Manager for pick-up and delivery times.</li>
                                    <li>Look on our website under your location on the service page. Click here to find your residence.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                            <h4 class="panel-title">
                                <a href="#" class="ing">Do you provide Welcome Kits for new customers?</a>
                            </h4>

                        </div>
                        <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>Yes, we do! Our Welcome Kit contains:

                                </p>
                                <ul style="list-style: circle">
                                    <li>Two bags for each service, one for Wash & Fold, one for Dry Cleaning</li>
                                    <li>A pamphlet that details our pick-up and delivery service</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                            <h4 class="panel-title">
                                <a href="#" class="ing">How do I receive a replacement bag needed for the service?</a>
                            </h4>

                        </div>
                        <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>
                                    Should you need a replacement bag, please:

                                </p>
                                <ul>
                                    <li>Reach out to your property managers in the leasing office</li>
                                    <li>Write to us through our Contact Us page, or,</li>
                                    <li>Call us at 888-888-8888</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                            <h4 class="panel-title">
                                <a href="#" class="ing">How do I sign up?</a>
                            </h4>

                        </div>
                        <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                <p>If you are a resident of our apartment community partners, you are already signed up and ready to use the service, and will receive our Welcome Kit when moving in. If you did not receive a Welcome Kit, please:</p>

                                <ul>
                                    <li>Reach out to your property managers in the leasing office,</li>
                                    <li>Write to us through our Contact Us page, or,</li>
                                    <li>Call us at 888-888-8888</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/panel-group-->
            </div>
        </div>
    </div>
</section>

<?php

$cjs = @"
$(document).ready(function(){
    $('a.ing').on('click',function(e){
        e.preventDefault();
    });
})";
$this->plugin->addCustomJS($cjs);
