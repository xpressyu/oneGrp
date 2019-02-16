<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Siding</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="{{ asset('js/themes/6/js_image_slider.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="top">
<ul>
  <li><a href="##">Language</a></li>
  <li><a href="##">FAQ</a></li>
   <li><a href="##">Contact</a></li>
   <li><a href="#####">Login/Resgister</a></li>
   <li style="float: left; color: aliceblue; font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black,' sans-serif'; font-size: 30px;" >OneGroup</li>
 
</ul>
</div>
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Our Campany</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Activity</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Social Service</a>
      </div>
    </nav>
 
<div class="imgRoll" style="padding-top:20px; width: 100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/J002470_Petersham_AerialMap_FA.jpg') }} style="width:100%">	
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Petersham_Courtyard_Exterior.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Rooftop.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_LivingKitchen.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_Vignette2.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_Vignette1.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_LIGHTSCHEME_FINAL.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_DARKSCHEME_FINAL.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Int_Bedroom_Final.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Exterior_Facade_Dusk_With_Flags.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_EXT_Cutaway.jpg') }} style="width:100%">

 
   
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(9)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(10)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(11)"></span>
  </div>
</div>
<script>
	
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
<h1>Petersham, NSW<br> The Silding</h1>
<h2>Devloper: Deicorp</h2>
<br>
<img src={{ URL::asset('/img/deicorp/theSiding/develperInfor.png') }} style="width: 1000px;" >
<br><br>
<h3>DEICORP</h3>
<p class="text-justify">Founded in 1999, Deicorp has been operating as a privately- owned property development and construction group for residential, commercial and retail real estate.<br>
Deicorp first entered the Sydney development scene in the trendy suburb of Newtown with a 3 storey residential development.<br>
Today, Deicorp has developed and worked on over 6,000 apartments, 110,000sqm of retail/commercial suites and has over $1.5 billion of work in the pipeline.<br>
Serving as testament to Deicorp’s experience is an incredibly diligent management team, dedicated employees and united partnerships. A clear and shared vision of Ambition, Quality, Efficiency and Professionalism is the driving force behind the company’s success.</p>
<hr class="new1">
</div>  

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/theSiding/view.png') }} style="width: 1000px;" >
<br><br>
<p>
The Siding stands out as Petersham’s newest precinct. Teeming with greenery and life, it’s home to corner cafés, pocket parks, rooftop terraces, and a lush central lawn for lounging about in the afternoon sun.<br><br>
Petersham has quietly become the Inner West’s best borough – a place where inner city thrills meet suburban serenity.</p>
<hr class="new1">
</div> 

<div class="w3-content w3-display-container" style="padding-top: 5px;">
<div class="left" style="width:500px; heigh:500px;">
  <img class="mySlides-home" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_Bathroom_Dark_Final.jpg') }} style="width:500px; height: 500px;">
  <img class="mySlides-home" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_Bathroom_Light_Final.jpg') }} style="width:500px; height: 500px;">
  <img class="mySlides-home" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Bathroom_Shower_Vignette.jpg') }} style="width:500px; height: 500px;">
  <img class="mySlides-home" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Bathroom_Tap_Vignette.jpg') }} style="width:500px; height: 500px;">
  <img class="mySlides-home" src={{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_Bathroom_Dark_Final-tile.jpg') }} style="width:500px; height: 500px;">
	</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides-home");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div class="right" style=" padding-left: 20px;">
<h3>A STEP ABOVE YOUR LAST DIGS</h3>
	<p class="text-justify">Minimally styled for maximum impact, these living spaces are a contemporary blank canvas for you to add your personal touch.</p>

</div>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/theSiding/decipe.png') }} style="width: 980px;">
</div>

<!--
3D dislay box
 <div class="w3-content w3-display-container">
 <hr class="new1">
<iframe src="https://web.snaploader.com/3d/?tag_id=5b51b1096c6208044dac2515&model_id=5b51b16d6c6208044dac2544" style="width: 980px;height: 800px;  padding-top: 25px; ">	
</iframe>
</div> 
-->



<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/deicorp/theSiding/BuildingC-Level1.pdf') }}" target="_blank">Building C Level 1.pdf</a>
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
    <a class="nav-link" id="Strate-tab" data-toggle="tab" href="#Strate" role="tab" aria-controls="contact" aria-selected="false">Strate Levy</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="FAQ" role="tabpanel" aria-labelledby="FAQ-tab">FAQ...</div>
  <div class="tab-pane fade" id="Depreciation" role="tabpanel" aria-labelledby="Depreciation-tab">
  <a href="{{ asset('documents/deicorp/theSiding/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/theSiding/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a href="{{ asset('documents/deicorp/theSiding/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
  </div>
</div>
</div>
<div class="down" style="background-color: #000000 ">
<p style="color: aliceblue ; width: 900px; padding-left: 500px;"> One Group Global Investment&copy;
<br>One Group Global Invest Company
Address:  23 xxxxxxxxx wryard NSW AU
Email: 12345@123.com
Tel: 0123456788 </p>
</div>

<a href="#" class="float">
<i class="fa fa-plus my-float">
<img src={{ URL::asset('phone-contact.png') }}>
</i>
</a>
</body>
</html>
