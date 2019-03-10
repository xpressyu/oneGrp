
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Metro-Fairway Residences, Strathfield</title>
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
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/u1W8UXYc.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/s74XEvuE.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/xQne_i.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/LEfiMf_8.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/N6eXOwqM.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/KhARLZ5g.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/jH17GNSQ.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/gKpz5YO0.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/bwbvWZNY.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/7ILIhjQd.jpg') }}" style="width:100%">


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

    </div>
    </div>
    <div class="w3-content w3-display-container" style="padding-top: 60px;">
<h1>Sydney-Strathfield </h1>
<h2>Fairway Residences</h2>
<img src="{{ URL::asset('/img/metro/silkTerracesSchofields/metro-property-development.png') }}">
<br><br>
<h2>Metro</h2>
	<p class="text-justify">Sydney Metro will revitalise communities, transform places and make the nation’s only global city more liveable and connected.

Australia’s largest city will be more productive and more attractive globally. Not only will this new mass transit system move more people safely and reliably than ever before, it will unlock the potential of Sydney as a growing global city – creating new and diverse opportunities to support changing communities.

Joining other great global mass transit development initiatives, the NSW Government has identified stations on the Sydney Metro system which can be better integrated with the areas around them, creating world-class places that will shape our city’s future.</p>
<hr class="new1">
	</div>

<div class="w3-content w3-display-container" style="padding-top: 30px;">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p1.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p2.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p3.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p4.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p5.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p6.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p7.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p8.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p9.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p10.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p11.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p12.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p13.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p14.png') }}">
<hr class="new1">
<img src="{{ URL::asset('/img/metro/fairwayResidence/p15.png') }}">



	</div>







    <h1>Typical Floor Plan</h1>
    <a href="{{ asset('documents/metro/fairwayResidence/Individualfloorplans.pdf') }}" target="_blank">Individual Floor Plan.pdf</a>
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
  <div class="tab-pane fade" id="Depreciation" role="tabpanel" aria-labelledby="Depreciation-tab">Depreciation...</div>
  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">
    <a href="{{ asset('documents/metro/fairwayResidence/FairwayResidences-scheduleoffinishes_.pdf') }}" target="_blank">Schedule.pdf</a>
  </div>
  <div class="tab-pane fade" id="Strata" role="tabpanel" aria-labelledby="Strate-tab">Strata...</div>
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


</i>
</a>
</body>
</html>
