<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Frasers-PutneyHill</title>
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
              <img class="mySlides" src={{ URL::asset('/img/frasers/putneyHill/T1.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T2.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T3.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T4.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T5.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T6.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T7.png') }}  style="width:100%">
             <img class="mySlides"  src={{ URL::asset('/img/frasers/putneyHill/T8.png') }}  style="width:100%">


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
<h1>Sydney-putneyHill</h1>
<h2>The Gables-Precinct H</h2>
<img src={{ URL::asset('/img/frasers/putneyHill/p1-1.png') }}>
<hr class="new1">
	</div>

<div class="w3-content w3-display-container" style="padding-top: 30px;">
<img src={{ URL::asset('/img/frasers/putneyHill/p1.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p2.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p3.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p4.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p5.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p6.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p7.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p8.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p9.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p10.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p11.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p12.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p13.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p14.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p15.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p16.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/putneyHill/p17.png') }}>
			</div>







	<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/frasers/putneyHill/GROUNDPEAKFloorplates.pdf') }}" target="_blank">BGROUND PEAK Floorplates.pdf</a>
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
  <a >          </a>
  <br>
  <a >  </a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">Strata...
    <a >    </a>
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
