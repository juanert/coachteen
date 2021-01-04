<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

        <title>Coachteen</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('js/bootstrap/css/bootstrap.min.css') }}" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Helvetica">

        <link rel="stylesheet" href="{{ asset('sass/app.scss') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <script src="{{ asset('js/slider.js') }}"></script>

    </head>
    <body>
        <div style="background-color: #0597D5;">
           <div class="mx-5 py-2 mb-3">
              <x-general.header/>  
            </div> 
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pb-3">
                <h4><i class="far fa-user-circle mr-2 text-primary"></i>Account details</h4>
                    <!-- Button trigger edit-account modal -->
                    <?php// include (TEMPLATEPATH . '/inc/modal-edit-account.php'); ?>
                    <a class="card py-3 px-3 dashboard-account" style="cursor: pointer;" data-toggle="modal" data-target="#modal-edit-account">
                        <div class="text-dark" style="font-size: 24px;">
                        <p class="text-muted my-0" style="font-size:14px;">First Name</p>
                        {{auth()->user()->name}}<br>
                        <hr>
                        <p class="text-muted my-0" style="font-size:14px;">Last Name</p>
                        {{auth()->user()->surname}}<br>
                        <hr>
                        <p class="text-muted my-0" style="font-size:14px;">Email</p>
                        {{auth()->user()->email}}
                        <hr>
                        <p class="text-muted my-0" style="font-size:14px;">Password</p>
                        ***********
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 pb-3">
                    <div class="py-0">
                        <h4><i class="far fa-comment-alt mr-2 text-primary"></i>Announcements</h4>
                        <div class="row py-2" style="position:relative;left:15px;">
                            <div class="col-1" style="background: #0597d5;color: white;padding: 25px 0;text-align: center;border-radius: 4px;"><i class="fas fa-chevron-right"></i>
                            </div>
                            <div class="col-11" style="align-self:center;">
                                <div class="d-flex" style="flex-direction:column;">
                                    <strong>Campus life coming soon!</strong>
                                    A new space will be up and ready for you!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2" style="position:relative;left:15px;">
                        <div class="col-1" style="background: #0597d5;color: white;padding: 25px 0;text-align: center;border-radius: 4px;"><i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="col-11" style="align-self:center;">
                            <div class="d-flex" style="flex-direction:column;">
                                <strong>Get the discount!</strong>
                                Get a 35% discount in the purchase of any of our plans.
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                       <h4><i class="far fa-credit-card mr-2 text-primary"></i>Subscriptions Plans</h4>
                        <div class="px-3 py-3 card">
                            <p class="text-center text-muted my-0">You have no active subscriptions.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>