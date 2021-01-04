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

        {!! htmlScriptTagJsApi() !!}

    </head>

    <body class="bg-primary">
        <div class="container-fluid">
            <div class="mx-3">
                <x-general.header/> 
            </div>
        </div>
        <div class="mx-3 pb-5" id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="{{url('post-register')}}" method="POST" id="regForm">
                                        {{ csrf_field() }}
                                        @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">Fist Name</label>
                                                <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Enter First Name" />
                                                 @if ($errors->has('name'))
                                                  <span class="error">{{ $errors->first('name') }}</span>
                                                  @endif  
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">Last Name</label>
                                                <input class="form-control py-4" id="inputSurName" type="text" name="surname" placeholder="Enter Last Name" />
                                                 @if ($errors->has('surname'))
                                                  <span class="error">{{ $errors->first('surname') }}</span>
                                                  @endif  
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email address" />
                                                @if ($errors->has('email'))
                                                  <span class="error">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                                @if ($errors->has('password'))
                                                  <span class="error">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            {!! htmlFormSnippet() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                              <span class="error">{{ $errors->first('g-recaptcha-response') }}</span>
                                            @endif

                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{url('login')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>

