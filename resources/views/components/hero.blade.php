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

<div style="height: 750px; background-color: #60B9E9; padding: 0px;" class="container-fluid">

  <img id="slider" src="{{ asset('images/webpage/1.jpg') }}" style="position: absolute; width: 100%; height: 750px; object-fit: cover; vertical-align: middle; object-position: center; padding: 0px;">

  <div class="mx-5">
    <x-general.header/>
  </div>
  

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