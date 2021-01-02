<script>
  $(function(){
    //prepare Your data array with img urls
    var dataArray=new Array();
    dataArray[0]="{{ asset('images/webpage/1.jpg') }}";
    dataArray[1]="{{ asset('images/webpage/2.jpg') }}";
    dataArray[2]="{{ asset('images/webpage/3.jpg') }}";

    //start with id=0 after 5 seconds
    var thisId=0;

    window.setInterval(function(){
        $("#slider").fadeIn("1000000");
        $('#slider').attr('src',dataArray[thisId]);
        thisId++; //increment data array id
        if (thisId==3) thisId=0; //repeat from start
    },2000);        
  });
</script>

<div style="height: 750px; background-color: #60B9E9; padding: 0px;" class="container-fluid bg-image">

  <img id="slider" src="{{ asset('images/webpage/1.jpg') }}" style="position: absolute; width: 100%; height: 750px; object-fit: cover; vertical-align: middle; object-position: center; padding: 0px;">

  <div style="position: relative; padding-bottom: 40px; padding-top:40px; ">
    <img style="width: 280px; height: auto;" class="img-responsive" src="{{ asset('images/webpage/PAGINA88.png') }}" id="welcomeImg">
  </div>

  <nav style="border-radius: 15px;" class="navbar navbar-expand-lg navbar-light bg-light mx-5 py-0 mb-5">
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
            <a style="font-size: 20px;" class="nav-link" href="#" id="navBarItem">About Us</a>
          </li>
          <li class="nav-item">
              <a style="font-size: 20px;" class="nav-link" href="#" id="navBarItem">Contact Us</a>
          </li>
          <li class="nav-item">
              <a style="font-size: 20px;" class="nav-link" href="#" id="navBarItem">Work With Us</a>
          </li>
        </ul>
        
      </div>
      <a class="d-sm-flex d-lg-flex login-item btn btn-lg align-items-center" id="navBarItem" style="font-size: 20px;" href="/sign-up">
        <i class="fas fa-user mr-3"></i>Sign Up
      </a>
      <button style="background: none; font-size: 20px;" type="button" data-toggle="modal" data-target="#modal-login" class="d-sm-flex d-lg-flex login-item btn btn-lg border align-items-center border-0" id="navBarItem">
        <i class="fas fa-sign-in-alt mr-3"></i>Log In
      </button>
    </div>
  </nav>

  <div style="position: relative;" class="container text-white my-5 px-5">
    <h2 style="font-size: 45px" class="text-center font-weight-bold mt-5 mb-2 mb-5">We are <span style="color: #FFFF00">academic and humanistic preparation</span></h2>
    <h2 style="color: #FFFF00" class="text-center font-weight-bold my-2">Get ready to Learn</h2>
    <hr style="height: 2px" class="bg-white w-75 my-5">
    <div class="d-flex justify-content-center">
      <button type="button" class="btn btn-light" style="color: #46146D; width: 200px;"><h4><b>See more</b></h4></button>
    </div>
  </div>

  <!-- <div class="row centerTitles">
                <p style="color: #FFFFFF" class="responsiveHeadlines">Get to know how to make <span style="color: yellow">your dreams come true</span></p>
            </div>
            <div class="row centerTitles">
                <p style="color: yellow" class="responsiveHeadlines">Get Ready To Learn</p>
            </div>
            <div class="row centerTitles">
                <a class="btn btn-lg" href="#" role="button" id="getStarted">Get Started</a>
            </div>
            <div class="row">
                <p class="lead"></p>
            </div> -->
  
</div>