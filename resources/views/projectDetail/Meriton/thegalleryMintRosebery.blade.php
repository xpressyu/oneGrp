<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Meriton-TheGallery,Mint,Rosebery</title>
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
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/Exterior.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/Kitchen.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/MERITON_ROSEBERY_BATHROOM_DARK_13.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/Meriton_Rosebery_courtyard_MEDRES_02.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/MERITON_ROSEBERY_VIEW2_04.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/TheGallery-Bedroomhighres.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/thegalleryMintRosebery/TheGallery-RooftopHIGHRES.jpg') }} style="width:100%">

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


    <div class="w3-content w3-display-container" style="padding-top: 60px;">
<h1>Sydney-Rosebery</h1>
<h2>Gallery,Mint</h2>
<img src={{ URL::asset('/img/meriton/thegalleryRosebery/meriton.png') }} style="width: 980px;">
<br><br>
<h2>Meriton</h2>
	<p class="text-justify">Established in 1963, Meriton has made a significant impact on the Australian landscape. We have designed, developed and built an estimated one in 10 apartments in Sydney, along with some of the tallest residential towers in Sydney, Brisbane and the Gold Coast. The private company has designed, developed and built more than 75,000 apartments across the east coast of Australia. Meriton offers sales, leasing and property management services, as well as the luxury accommodation brand Meriton Suites with more than 17 locations nationwide. Meriton has spearheaded the apartment revolution with sophisticated, high-quality apartments. Its founder and managing director, billionaire property entrepreneur Harry Triguboff, is still passionately involved in the design and construction of all projects.</p>
<hr class="new1">
	</div>
<div class="w3-content w3-display-container" style="padding-top: 30px;">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page1.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page2.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page3.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page4.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page5.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page6.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page7.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page8.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page9.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page10.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page11.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page12.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page13.png') }}>
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page14.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page15.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page16.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page17.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/thegalleryMintRosebery/page18.png') }}>

	</div>


<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/meriton/thegalleryMintRosebery/FloorPlan.pdf') }}" target="_blank">Building Map.pdf</a>
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
  <a href="{{ asset('documents/meriton/thegalleryMintRosebery/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/meriton/thegalleryMintRosebery/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a >         </a>
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
