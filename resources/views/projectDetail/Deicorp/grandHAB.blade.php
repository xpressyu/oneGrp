<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Grand H</title>
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
        <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Our Campany</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Social Service</a>
      </div>
    </nav>

<div class="imgRoll" style="padding-top:20px; width: 100%">
<img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Close_Up_View.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Rooftop.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Living_R4.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Bedroom.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Balcony.jpg') }} style="width:100%">

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
<h1>Hurstville NSW
<br>Grand H</h1>
<div class="w3-content w3-display-container" style="padding-top: 25px;">
<h2>Devloper: Deicorp</h2>
<br>
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/develperInfor.png') }} >
<br><br>
<h3>DEICORP</h3>
<p class="text-justify">Founded in 1999, Deicorp has been operating as a privately- owned property development and construction group for residential, commercial and retail real estate.<br>
Deicorp first entered the Sydney development scene in the trendy suburb of Newtown with a 3 storey residential development.<br>
Today, Deicorp has developed and worked on over 6,000 apartments, 110,000sqm of retail/commercial suites and has over $1.5 billion of work in the pipeline.<br>
Serving as testament to Deicorp’s experience is an incredibly diligent management team, dedicated employees and united partnerships. A clear and shared vision of Ambition, Quality, Efficiency and Professionalism is the driving force behind the company’s success.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
 <div class="left">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_GrandH_Hero.jpg') }}>
 </div>

 <div class="right" style="width: 400px;" >
	<h3>A Grand Fortune</h3>
	<p class="text-justify"> In Hurstvtille’s coveted city centre stands a new residential showpiece worthy of Sydney’s Southern Capital. This prestigious precinct captures the strong community spirit of Hurstville, while introducing an unrivalled standard of cosmopolitan convenience to the neighbourhood.
A grand life awaits you at GrandH.</p>
</div>
<hr class="new1">
</div>


<div class="w3-content w3-display-container">
<div class="float-right" style="height: 520px;">
	<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/worldsMeet-HustvilleH.png') }}>

</div>


<div class="float-left" style="width: 480px; height: 520px; padding-right: 20px;">
 <h3>Where Worlds Meet</h3>
 <p  class="text-justify">GrandH is located in prime position within Hurstville, one of Sydney’s most sought-after addresses.
Hurstville offers both a bustling multicultural metropolis and an enviably easy-going lifestyle.
It’s surrounded by key amenities from every angle: schools, hospitals, entertainment, parks, and the sunny shores of Brighton-le-Sands. Sydney Airport is a short drive away, linking you and your family to jet setting adventures.
Food reigns here in Hurstville, with a distinct global flavour. The area is well-known for its gastronomic pleasures, especially authentic Chinese cuisine. Join the hordes of hungry locals in the morning for yum cha, then at night for fresh seafood or sizzling plates
of Sichuan fare. In between restaurant banquets, take your pick from any of Hurstville’s street food options – it’s all delicious.</p>
</div>
<hr class="new1">
</div>



<div class="w3-content w3-dislay-container">

 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Living_R4.jpg') }} style="width: 1000px;">
 <br>
 <h3>Live At New Heights</h3>
 <p class="text-justify">
 	Your new life of luxury starts here: with a view that has to be seen to be believed, rising high above the Hurstville cityscape. From the privacy of your sunkissed balcony, enjoy panoramic sights of Botany Bay, Sydney CBD and Greater Sydney every morning and night.
 </p>
 <hr class="new1">
</div>

<div class="w3-content w3-display-container">

 <div class="float-left" style="height: 550px">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/AtTheCentreOfItAll.png') }}>
 </div>

 <div class="float-right" style="width: 400px; height: 550px;" >
	<h3>At The Centre Of It All</h3>
	<p class="text-justify"> Make no mistake: Hurstville is the central business district
of South Sydney, attracting visitors from all over. Less than twenty
minutes from the city by rail, the local train station is a minute’s walk from GrandH. This transport interchange is also frequented by a network of buses travelling to Ashfield, Bankstown, Macquarie Park, Miranda, and other suburbs.
Transport has been optimised to serve the daily commuters flocking to the vibrant Hurstville hub – so you’ll never need to worry about when your next train or bus is coming.
Need to pick up some groceries, or something more special?
Westfield Hurstville is tantalisingly close by – only four minutes on foot, in fact. This impressive shopping centre has recently been redeveloped to accommodate 232 stores, plus al fresco dining and never-ending entertainment. If Westfield isn’t enough, even more shops can be found closer to home: Coles, Woolworths, Aldi, Target, and Kmart are right on GrandH’s doorstep.</p>
</div>
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/food.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
 <div class="left">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/room.png') }}>
 </div>
 <div class="right" style="width: 400px;" >
	<h3>The Definition Of Style</h3>
	<p class="text-justify"> The designs of GrandH make a statement with simplicity and sophistication. Every corner of the generously-sized apartments has been conscientiously crafted.
The kitchens are fitted with stainless steel Smeg appliances and stone benchtops and splashbacks, elevating the preparation of every home-cooked meal. High quality stone is also used for the bathroom’s benchtops, complementing the semi-frameless shower panel, and lush carpeting throughout the living spaces give the unit a luxurious finishing touch.
 </p>
</div>
<hr class="new1">
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/TheHurstvilleLifestyle.png') }}>
<hr class="new1">
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/EverythingInArmsReach.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-dislay-container">

 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Rooftop.jpg') }} style="width: 1000px;">
 <br>
 <h3>Find Home in An Oasis</h3>
 <p class="text-justify">
 Exclusivity exudes from every feature of GrandH. From the central courtyard connecting the quartet of buildings to a secure car space for every resident – and a rooftop garden that invites you to take in the sunset.
 </p>
 <hr class="new1">
</div>

<div class="w3-content w3-display-container">
 <div class="float-left" style="height: 520px">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/TheDefinitionOfStyle.png') }}>
 </div>

 <div class="float-right" style="width: 460px; height: 540px;" >
	<h3>At The Centre Of It All</h3>
	<p class="text-justify"> The designs of GrandH make a statement with simplicity and sophistication. Every corner of the generously-sized apartments has been conscientiously crafted.
The kitchens are fitted with stainless steel Smeg appliances and stone benchtops and splashbacks, elevating the preparation of every home-cooked meal. High quality stone is also used for the bathroom’s benchtops, complementing the semi-frameless shower panel, and lush carpeting throughout the living spaces give the unit a luxurious finishing touch.</p>

</div>
</div>



<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/deicorp/grandHHurstvlAB/BuildingA-Level2.pdf') }}" target="_blank">Building A Level 2.pdf</a>
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
  <a href="{{ asset('documents/deicorp/grandHHurstvlAB/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/grandHHurstvlAB/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strata" role="tabpanel" aria-labelledby="Strate-tab">
    <a href="{{ asset('documents/deicorp/grandHHurstvlAB/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
  </div>
</div>
</div>
<div class="down" style="background-color: #000000 ">
<p style="color: aliceblue ; width: 900px; padding-left: 500px;">One Group Global Investment Pty Ltd&copy;
<br>Address: Level 6, 201 Kent Street, Sydney, 2000
<br>Email: fiona.l.xing@gmail.com
Tel: 0413 384 119 </p>
</div>

<a href="{{ route('SEND_EMAIL') }}" class="float">
<i class="fa fa-plus my-float">
<img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
</i>
</a>
</body>
</html>
