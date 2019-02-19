<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MelroseParkTWO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="top">
<ul>
  <li><a href="##">Language</a></li>
  <li><a href="##">FAQ</a></li>
   <li><a href="##">Contact</a></li>
   <li><a href="{{ route('login') }}">Login/Resgister</a></li>
   <li style="float: left; color: aliceblue; font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black,' sans-serif'; font-size: 30px;" >OneGroup</li>

</ul>
</div>
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('welcome') }}">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('list') }}">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('company') }}">Our Company</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('staff') }}">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('social') }}">Social Service</a>
      </div>
    </nav>

    <div class="imgRoll" style="padding-top:20px; width: 100%">
            <img class="mySlides" src={{ URL::asset('/img/Bm/melroseParkTwo/BOM01004_MelroseParkStage2_S010_EXT_Hero-Final2000.jpg') }} style="width:100%">

            <img class="mySlides" src={{ URL::asset('/img/Bm/melroseParkTwo/BOM0871_MelrosePark_S110_INT_LookingIn2N_LUX_2000.jpg') }} style="width:100%">

            <img class="mySlides" src={{ URL::asset('/img/Bm/melroseParkTwo/BOM0871_MelrosePark_S080_INT_Kitchen1B_Styling02_Final2000.jpg') }} style="width:100%">

            <img class="mySlides" src={{ URL::asset('/img/Bm/melroseParkTwo/BOM0871_MelrosePark_S080_INT_Kitchen1A_final_2000.jpg') }} style="width:100%">

            <img class="mySlides" src={{ URL::asset('/img/Bm/melroseParkTwo/BOM0871_MelrosePark_S090_INT_LookingIn1_2000.jpg') }} style="width:100%">


        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
 			  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>

  </div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<h1>Sydeny-MelrosePark</h1>
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p1.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p2.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p3.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p4.png') }}>
<p>Melrose Park has been imagined for
        the Modern Australian, people who are
        citizens of the world. Wherever they’re
        from or wherever they’ve been, Modern
        Australians appreciate change and
        adventure, seeking new experiences
        every day. A development of impressive
        scale, the masterplan has been
        thoughtfully envisioned for a robust
        social fabric, harmonious living and the
        long-term future.
</p>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p5.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p6.png') }}>
<br>
<p>The pulse of your new neighbourhood,
        Melrose Park will have everything you
        could need for the life you want to live.
        A vibrant destination for residents and
        visitors alike, it will deliver a full-line
        supermarket, specialty grocers, cafés,
        restaurants, delis, bakery, gym, dry
        cleaner, newsagent, pharmacy, a variety
        of entertainment and personal services.
        At Melrose Park, employment
        opportunities need not be far from
        home, with 15,000m2
         of new commercial
        space bringing in over 1,500 full-time
        jobs. Young families with children will also
        have access to several childcare centres
        within Melrose Park.</p>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p7.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p8.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p9.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p10.png') }}>
<br>
<p>Inspired by the best parks around the world, abundant open
        spaces combine sweeping lawns and terraced gardens.
        Bask in the expanses of green at the sprawling Central Park,
        while The Common delivers lush landscapes along the
        boulevard. Floral and community gardens also add a sense
        of neighbourhood throughout Melrose Park.</p>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p11.png') }}>
<br>
<p>With the future in mind, Melrose Park takes an
        astute approach to sustainable urban design
        with Smart City technology. It will be Sydney’s
        leading development that incorporates Smart City
        initiatives from day one. They include advanced
        technologies to monitor environmental conditions,
        clever rainwater collection to sustain the precinct’s
        parklands, new generation street lighting, smart
        wayfinding poles and electric car charging stations.
        At home, you will benefit from NBN node-to-home
        rapid connectivity, while proposed WiFi throughout
        the neighbourhood offers connectivity on the move
        via hotspots and device charging stations. Many
        of these technologies will be powered by renewable
        energy sources, enriching the environment you live
        in. As technologies continue to evolve, Melrose Park
        will continue to improve and implement the latest
        initiatives as they become available.</p>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p12.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p13.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p14.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p15.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p16.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p17.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p18.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p19.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p20.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p21.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p22.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p22.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p24.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/Bm/melroseParkTwo/p25.png') }}>
</div>


<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/bm/melroseParkTwo/FloorPlates.pdf') }}" target="_blank">Building Map.pdf</a>
</div>

<hr class="new1">
<h1>Additional Informatiion</h1>
<div class="w3-content w3-display-container" >
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="FAQ-tab" data-toggle="tab" href="#FAQ" role="tab" aria-controls="home" aria-selected="true">FAQ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Depreciation-tab" data-toggle="tab" href="#Depreciation" role="tab" aria-controls="profile" aria-selected="false">Depreciation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Schedule-tab" data-toggle="tab" href="#Schedule" role="tab" aria-controls="contact" aria-selected="false">Schedule Finishes</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="Strate-tab" data-toggle="tab" href="#Strate" role="tab" aria-controls="contact" aria-selected="false">Strata Levy</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="FAQ" role="tabpanel" aria-labelledby="FAQ-tab">FAQ...</div>
  <div class="tab-pane fade" id="Depreciation" role="tabpanel" aria-labelledby="Depreciation-tab">
  <a>               </a>
  <br>
  <a>            </a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a>           </a>
  </div>
</div>
</div>
<div class="down" style="background-color: #000000 ">
        <p style="color: aliceblue ; width: 900px; padding-left: 500px;">One Group Global Investment Pty Ltd&copy;
                <br>Address: Level 6, 201 Kent Street, Sydney, 2000
                <br>Email: info@onegroupglobal.com.au
                Tel: 0413 384 119 </p>
                </div>

                <a href="{{ route('SEND_EMAIL') }}" class="float">
                <i class="fa fa-plus my-float">
                <img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
                </i>
                </a>

</body>
</html>
