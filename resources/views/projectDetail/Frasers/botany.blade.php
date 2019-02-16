<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Frasers-Botany</title>
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
<img class="mySlides" src={{ URL::asset('/img/frasers/botany/B20132000x1125bedroom.jpg') }} style="width:100%">
<img class="mySlides" src={{ URL::asset('/img/frasers/botany/D1004display4.jpg') }}  style="width:100%">
			
  
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  
<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>

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
<h1>Bonty</h1>
<h2>TailorsWalk</h2>
<img src={{ URL::asset('/img/frasers/botany/14688_AUSL_TailorsWalk_HeroBrochure_TEXT_FA_04_FINAL.png') }}>
<p class="text-justify">If you’re after an idyllic lifestyle, where the city is close, and the famous Eastern Suburb’s beaches are even closer, then look no further
– you’ve just found your new address in the heart of Botany.
Introducing Tailor’s Walk, crafted living spaces in the heart
of Botany. With a brand new collection of terrace homes and apartments, each dwelling is filled with character and charm. Intelligent design and striking, well-considered features in each home offer little touches that are tailor made for contemporary living. Just moments from the beach, and enveloped by expansive landscaped parkland, if you want to be part of a community that has a certain refinement and elegance in every detail, then look no further.</p>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/botany/14688_AUSL_TailorsWalk_HeroBrochure_TEXT_FA_04_FINAL24.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/botany/14688_AUSL_TailorsWalk_HeroBrochure_TEXT_FA_04_FINAL3.png') }}>

</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/frasers/botany/14688_AUSL_TailorsWalk_HeroBrochure_TEXT_FA_04_FINAL2.png') }} style="width: 1000px">
<br><br>
<h3>Take Some Time Out</h3>
<p class="text-justify">	
There’s no space quite like the expanse of parkland that encircles Tailor’s Walk – and the beautiful beaches and coastal retreats that lie just beyond it.
This, combined with the area’s proximity to the city
makes for an unprecedented Eastern Suburb’s lifestyle.
<br><br>
Café or coast, city or suburb, Botany is alive with recreational activities. With the sun, sand and surf never far away, Tailor’s Walk is a place for nature-lovers, beach-goers, and sporting enthusiasts alike. An abundance of natural parkland and walking trails give way to a multitude of coastal connections.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/frasers/botany/14688_AUSL_TailorsWalk_HeroBrochure_TEXT_FA_04_FINAL44.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/frasers/botany/p1.png') }}>
<hr class="new1">
</div>



<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/frasers/botany/flower.png') }}>
<hr class="new1">
<h3>A GREEN SANCTUARY RIGHT ON YOUR DOORSTEP</h3>
<p> The lush green environment running through the heart of Tailor’s Walk is designed to complement the architecture and provide a direct link to Botany Village.
<br><br>Paths criss-cross between the sites, shaded in dappled light, and each bottom-level dwelling has its own private front garden – a place to relax and unwind, or socialise with friends. Large communal gathering areas and a dedicated 3,000sqm neighbourhood public park deliver an activated space for people to wander, run or simply chill out for the afternoon.</p>

<img src={{ URL::asset('/img/frasers/botany/flowerList.png') }}>	
<hr class="new1">
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/frasers/botany/education.png') }}>
<hr class="new1">
<h3>SCHOOLING FOR ALL STAGES</h3>
<p class="text-justify"> Tailor’s Walk is ideally situated, with learning options for all stages of life close and convenient.
From pre-school all the way through to graduation,
there are highly regarded kindergartens, primary schools, secondary schools, and universities only moments away. 
<br><br>
St Bernard’s primary is just one example of the quality
of learning in the area, with the school achieving strong Naplan results across the board for 2014, bettering the nation’s average in almost every discipline.</p>
</div>
<div class="w3-content w3-display-container">

<img src={{ URL::asset('/img/frasers/botany/view.png') }}>
<p class="text-justify">Botany’s distinctive surroundings have a rich history that all began
on the northern shore of Botany Bay where Captain Cook first made his landing in 1770.
A vital part in our history, the area has gone through many changes, recently transitioning into the lively Eastern Suburb’s community that we know today.
<br>
First referred to as Sting Ray’s Harbour by Cook himself,
then Botanist Bay after the exploits of the resident Botanist Joseph Banks, the area was soon given the moniker Botany Bay – a name which still lives on more than two centuries later.
Tailor’s Walk is so-named because its many paths were formerly the mills from which only the finest wool was spun and sent back to the British. Now, it weaves its own story as we look to the future.
<br>
There are many contrasting facets to the area of Botany.
The suburb is now home to a diverse and charming community that’s rich with character. With such a well-documented past,
it seems that this first landing point on Australian soil was indeed a great place to start a community.</p>

<hr class="new1">
<img src={{ URL::asset('/img/frasers/botany/wirte.png') }} style="width: 1000px">

</div>	


<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/frasers/botany/FloorPlan.pdf') }}" target="_blank">Building Map.pdf</a>
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
  <a href="{{ asset('documents/frasers/botany/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/frasers/botany/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
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
