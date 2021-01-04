<div class="d-flex justify-content-center">
  <a href="{{ route('home') }}"><img style="width: 280px; height: auto; position: relative;" class="my-5" src="{{ asset('images/webpage/PAGINA88.png') }}"></a>
</div>

<nav style="border-radius: 15px;flex-wrap: initial!important;" class="navbar navbar-expand-lg navbar-light bg-light py-0 mb-5">
  <div class="container" style="padding: 0px; margin: 0px 20px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a style="font-size: 20px;" class="nav-link" href="#" id="navBarItem">SAT</a>
        </li>
        <li class="nav-item">
          <a style="font-size: 20px;" class="nav-link" href="{{ route('about-us') }}" id="navBarItem">About Us</a>
        </li>
        <li class="nav-item">
            <a style="font-size: 20px;" class="nav-link" href="#" id="navBarItem">Contact Us</a>
        </li>
        <li class="nav-item">
            <a style="font-size: 20px;" class="nav-link" href="#" id="navBarItem">Work With Us</a>
        </li>
      </ul>
      
    </div>
    @if(Auth::check())
    <a class="d-sm-flex d-lg-flex login-item btn btn-lg align-items-center" id="navBarItem" style="font-size: 20px;" href="{{ route('dashboard') }}">
      <i class="fas fa-user mr-1"></i>Dashboard
    </a>
    <a class="d-sm-flex d-lg-flex login-item btn btn-lg align-items-center" id="navBarItem" style="font-size: 20px;" href="{{ route('logout') }}">
      <i class="fas fa-sign-out-alt mr-1"></i>Log Out
    </a>

    @else

    <a class="d-sm-flex d-lg-flex login-item btn btn-lg align-items-center" id="navBarItem" style="font-size: 20px;" href="{{ route('sign-up') }}">
      <i class="fas fa-user mr-1"></i>Sign Up
    </a>
    <a class="d-sm-flex d-lg-flex login-item btn btn-lg align-items-center" id="navBarItem" style="font-size: 20px;" href="{{ route('login') }}">
      <i class="fas fa-sign-in-alt mr-1"></i>Log In
    </a>
    @endif
  </div>
</nav>