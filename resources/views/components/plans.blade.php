<section class="payments-plans">
    <div class="container">
        <h2 class="title-playments-plans"><strong>Join the <span style="color:#ffbc00;font-weight: 900;">Wit Generation now!</span></strong></h2>
        <div class="subtitle-payments-plans-content">
            <p class="py-3">Pre-entry is the first step in our program. First, you have to fill out some questionnaires with your personal information. Then you have to take some psychological tests.</p>
            <p class="py-3">When you complete the Pre-entry, you will have free access to the first four modules of all our
            components. We want to give you the chance to try our platform and get a preview of how you can
            get the essential learning your need to achieve your goals.</p>
        </div>
    </div>
    <!-- Desktop mode -->
    <div class="d-none d-md-block">
    <div id="plans" class="plans">
        <div class="container">
        <span class="title-payments">Choose the right <span class="for-your">plan for you</span></span>
            <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <h2 class="title-basic">Basic Plan</h2>
                            <div class="plans-content">
                                <p>Access to our primary components: Innovative Minds and Campus Life.</p>
                                <p>Personalized attention from our Route Coaches and Counselors.</p>
                            </div>
                    </div>
                <div class="vl-white"></div>
                <div class="col-sm-5">
                    <h2 class="title-academy">Academic Plan</h2>
                    <div class="plans-content">
                        <p>Access to all our components.</p>
                        <p>Personalized attention from all our coaches: Route Coaches, Academic Coaches, and Counselors.</p>
                        <p>Preparation to take the SAT.</p>
                        <p>Final test.</p>
                    </div>

                </div>
            </div>
            <?php// if (is_user_logged_in(  )) : ?>
            <div class="row justify-content-center py-4">
                <div class="col-sm-5 text-center">
                    <div class="btn-plans-container">
                    <div class="prices-before-container">
                        <span class="d-block title-prices-before">Before</span>
                        <span class="d-block prices-before">80$</span>
                    </div>
                    <a class="btn-plans-basic" href="https://coachteen.com/get-started/step-1/">$50/M USD</a>
                    <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly</p>
                    </div>
                </div>
                    <div class="col-sm-5 text-center">
                        <div class="btn-plans-container">
                        <div class="prices-before-container">
                            <span class="d-block title-prices-before">Before</span>
                            <span class="d-block prices-before">150$</span>
                        </div>
                        <a class="btn-plans-academic" href="https://coachteen.com/get-started/step-1/">110$/M USD</a>
                        <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php// else: ?>
                <div class="row justify-content-center py-4">
                <div class="col-sm-5 text-center">
                    <div class="btn-plans-container">
                    <div class="prices-before-container">
                        <span class="d-block title-prices-before">Before</span>
                        <span class="d-block prices-before">80$</span>
                    </div>
                    <a class="btn-plans-basic" href="/sign-up">$50/M USD</a>
                    <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly</p>
                    </div>
                </div>
                    <div class="col-sm-5 text-center">
                        <div class="btn-plans-container">
                        <div class="prices-before-container">
                            <span class="d-block title-prices-before">Before</span>
                            <span class="d-block prices-before">150$</span>
                        </div>
                        <a class="btn-plans-academic" href="/sign-up">$110/M USD</a>
                        <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                <a class="btn btn-lg btn-outline-light w-75" href="/sign-up"><strong><i class="fas fa-sign-in-alt mr-2"></i>Sign Up Now!</strong></a>
                </div>
            </div>
            <?php// endif;?>
        </div>
    </div>
    </div>
    <!-- End desktop mode -->
        <!-- Responsive mode -->
        <div class="d-sm-block d-md-none d-lg-none">
        <div id="plans-responsive" class="plans">
        <div class="container">
        <span class="title-payments">Choose the right <span class="for-your">plan for you</span></span>
            <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <h2 class="title-basic">Basic Plan</h2>
                            <div class="plans-content">
                            <p>Access to our primary components: Innovative Minds and Campus Life.</p>
                            <p>Personalized attention from our Route Coaches and Counselors.</p>
                            </div>
                            <?php// if (is_user_logged_in(  )): ?>
                            <div class="btn-plans-container">
                                <div class="prices-before-container">
                                <span class="d-block title-prices-before">Before</span>
                                <span class="d-block prices-before">80$</span>
                                </div>
                            <a class="btn-plans-basic" style="transition: none!important;" href="https://coachteen.com/get-started/step-1/">$50/M USD</a>
                            <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly</p>
                            </div>
                            <?php// else: ?>
                            <div class="btn-plans-container text-center mb-3">
                                <div class="prices-before-container">
                                <span class="d-block title-prices-before">Before</span>
                                <span class="d-block prices-before">80$</span>
                                </div>
                            <a class="btn-plans-basic" style="transition: none!important;" href="/sign-up">$50/M USD</a>
                            <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly</p>
                            </div>
                            <?php// endif;?>
                    </div>
                <div class="hl-white"></div>
                <div class="col-sm-5">
                    <h2 class="title-academy">Academic Plan</h2>
                    <div class="plans-content">
                        <p>Access to all our components.</p>
                        <p>Personalized attention from all our coaches: Route Coaches, Academic Coaches, and Counselors.</p>
                        <p>Preparation to take the SAT.</p>
                        <p>Final test.</p>
                        <?php // if (is_user_logged_in()):?>
                        <div class="btn-plans-container">
                        <div class="prices-before-container">
                            <span class="d-block title-prices-before">Before</span>
                            <span class="d-block prices-before">150$</span>
                        </div>
                        <a class="btn-plans-academic" style="transition: none!important;" href="https://coachteen.com/get-started/step-1/">$110/M USD</a>
                        <p class="my-0 mt-3 text-white" style="font-size:14px;">for 12 months.</p>
                        </div>
                        <?php// else :?>
                        <div class="btn-plans-container text-center mb-3">
                        <div class="prices-before-container">
                            <span class="d-block title-prices-before">Before</span>
                            <span class="d-block prices-before">150$</span>
                        </div>
                        <a class="btn-plans-academic" style="transition: none!important;" href="/sign-up">$110/M USD</a>
                        <p class="my-0 mt-3 text-white" style="font-size:14px;">for 12 months.</p>
                        </div>
                        <div class="row justify-content-center">
                        <a class="btn btn-lg btn-outline-light w-75 mt-3" href="/sign-up"><strong><i class="fas fa-sign-in-alt mr-2"></i>Sign Up Now!</strong></a>
                        </div>
                        <?php// endif;?>
                    </div>
                </div>
            </div>
            <!-- Responsive mode -->
        </div>
    </div>
    </div>
</section>