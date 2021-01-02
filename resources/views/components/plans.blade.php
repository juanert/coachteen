<style>
.vl-white {
border-left: 4px solid rgb(255 255 255);
height: auto;
}
.title-prices-before {
    color: #ff0;
    margin-right: 10px;
    font-size: 14px;
}
.prices-before {
    font-size: 32px;
    line-height: 1;
    margin: 0;
    padding: 0;
    text-decoration-line: line-through;
    text-decoration-color: #ff0;
    color: #fff;
}
.btn-plans-basic {
    background: rgb(255 255 255/.5);
    font-size: 3em;
    border-radius: 15px;
    color: #fff;
    text-decoration: none;
    font-weight: 900;
}
.prices-before-container {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem;
    align-items: center;
}
.btn-plans-academic {
    background: rgb(255 255 255/.5);
    font-size: 3em;
    border-radius: 15px;
    color: #fff;
    text-decoration: none;
    font-weight: 900;
}
.btn-plans-basic:hover {
    background: rgb(255 255 255/.3);
    font-size: 3em;
    border-radius: 15px;
    color: #fff;
    text-decoration: none;
    transition: all .2s;
    font-weight: 900;
}
.btn-plans-academic:hover {
    background: rgb(255 255 255/.3);
    font-size: 3em;
    border-radius: 15px;
    color: #fff;
    text-decoration: none;
    transition: all .2s;
    font-weight: 900;
}

</style>

<section style="background: url('{{ asset('images/webpage/3.jpg') }}') center/cover no-repeat;
    background-attachment: fixed;" class="payments-plans mt-5">
    <!-- Desktop mode -->
    <div class=" text-light">
    <div id="plans" class="plans">
        <div class="container-fluid">
        <h1 style="font-size: 40px;" class="text-center font-weight-bold  py-5">Choose the right <span style="color:#FFFF00;">plan for you</span></h1>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-5">
                    <h2 class="text-center font-weight-bold">Basic Plan</h2>
                    <div class="font-weight-bold text-justify px-3">
                        <h4 class="my-4"><i class="far fa-check-square"></i> Access to our primary components: Innovative Minds and Campus Life.</h4>
                        <h4 class="my-4"><i class="far fa-check-square"></i> Personalized attention from our Route Coaches and Counselors.</h4>
                    </div>
                    <div class="mb-5 d-flex justify-content-center col-sm-0 col-md-0 col-lg-0">
                        <div class="btn-plans-container">
                        <div class="prices-before-container">
                            <span class="d-block title-prices-before">Before</span>
                            <span class="d-block prices-before mb-2">80$</span>
                        </div>
                        <a class="btn-plans-basic font-xs py-3" href="https://coachteen.com/get-started/step-1/">$50/M USD</a>
                        </div>
                    </div>
                </div>
                <div class="vl-white"></div>
                <div class="col-sm-5">
                    <h2 style="color: #FFFF00;" class="title-academy text-center font-weight-bold">Academic Plan</h2>
                    <div class="font-weight-bold text-justify px-3">
                        <h4 class="my-4"><i style="color:#FFFF00" class="far fa-check-square"></i> Access to all our components.</h4>
                        <h4 class="my-4"><i style="color:#FFFF00" class="far fa-check-square"></i> Personalized attention from all our coaches: Route Coaches, Academic Coaches, and Counselors.</h4>
                        <h4 class="my-4"><i style="color:#FFFF00" class="far fa-check-square"></i> Preparation to take the SAT.</h4>
                        <h4 class="my-4"><i style="color:#FFFF00" class="far fa-check-square"></i> Final test.</h4>
                    </div>
                    <div class="mb-5 d-flex justify-content-center col-sm-0 col-md-0 col-lg-0">
                        <div class="btn-plans-container">
                        <div class="prices-before-container">
                            <span class="d-block title-prices-before">Before</span>
                            <span class="d-block prices-before mb-2">150$</span>
                        </div>
                        <a class="btn-plans-basic font-xs py-3" href="https://coachteen.com/get-started/step-1/">$100/M USD</a>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row justify-content-center py-4 col-xs-0">
                <div class="col-sm-5 text-center">
                    <div class="btn-plans-container">
                    <div class="prices-before-container">
                        <span class="d-block title-prices-before">Before</span>
                        <span class="d-block prices-before">80$</span>
                    </div>
                    <a class="btn-plans-basic font-xs py-3" href="https://coachteen.com/get-started/step-1/">$50/M USD</a>
                    <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly</p>
                    </div>
                </div>
                <div class="col-sm-5 text-center">
                    <div class="btn-plans-container">
                    <div class="prices-before-container">
                        <span class="d-block title-prices-before">Before</span>
                        <span class="d-block prices-before">150$</span>
                    </div>
                    <a style="word-break: keep-all;" class="btn-plans-academic font-xs py-3" href="https://coachteen.com/get-started/step-1/">110$/M USD</a>
                    <p class="my-0 mt-3 text-white" style="font-size:14px;">Monthly</p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center py-5 pb-5">
                <a class="btn btn-lg btn-outline-light w-75" href="/sign-up"><strong><i class="fas fa-sign-in-alt mr-2"></i>Sign Up Now!</strong></a>
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End desktop mode -->
</section>