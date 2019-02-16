<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Deicorp-Highline-A1</title>
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
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_Aerial_markup.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_Hero_5K.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_Pool_FINAL_2000.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/5Westmead_PoolArea.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Hero_Cameo_15k_edit_sky.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_2BEDA1_502_6K.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_Oval_ORIG_edit.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/BathroomLandscape-Dark-edit.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/BathroomLandscape-Light-edit.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_1BEDA1_506_6K.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/KitchenPerspective_edit.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/highlineA1/Highline_RoofGarden_15k_HR.jpg') }} style="width:100%">

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
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(12)"></span>
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
<h1>Highline<br>Westmead, NSW</h1>
<h2>Devloper: Deicorp</h2>
<br>
<img src={{ URL::asset('/img/deicorp/highlineA1/develperInfor.png') }} style="width: 1000px;" >
<br><br>
<h3>DEICORP</h3>
<p class="text-justify">Founded in 1999, Deicorp has been operating as a privately- owned property development and construction group for residential, commercial and retail real estate.<br>
Deicorp first entered the Sydney development scene in the trendy suburb of Newtown with a 3 storey residential development.<br>
Today, Deicorp has developed and worked on over 6,000 apartments, 110,000sqm of retail/commercial suites and has over $1.5 billion of work in the pipeline.<br>
Serving as testament to Deicorp’s experience is an incredibly diligent management team, dedicated employees and united partnerships. A clear and shared vision of Ambition, Quality, Efficiency and Professionalism is the driving force behind the company’s success.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/deicorp/highlineA1/GROUNDS.png') }}>
<div class="float-right" style="width: 360px; height: 540px; padding-left: 30px;">
<h3>WELCOME TO YOUR GROUNDS</h3>
<p class="text-justify">
Your Highline residence will be nestled within a beautifully landscaped fig tree and native eucalypt- surrounded sanctuary. The sense of botanical splendour will be composed of plantings providing year- round colour and ambiance, creating a series of lush intimate spaces for relaxation and socialising. The landscape will be enhanced by both the large existing trees and new tree plantings which will provide shade and amenity, whilst low shrubs and ground covers will act as points of interest and discovery throughout the captivating landscape. The central luxury pool, sundeck, cabanas and outdoor lounge area will beckon, as will the outdoor BBQ and dining area. Further enhancing your grounds will be a feature grove with seating, a passive green space, winding pathways with mass “jungle” style plantings and a communal landscape podium.
ARTIST’S IMPRESSION
</p>
</div>
</div>
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/deicorp/highlineA1/YOUREXCLUSIVERESORT.png') }}>
<div class="float-left" style="width: 360px; height: 460px; padding-right: 30px;">
<h3>YOUR EXCLUSIVE RESORT</h3>
<p class="text-justify">
Highline’s pristine lap and lounge pool provide for year round rest and recreation. Surrounded by lush landscaping, warm timber sun deck, BBQ and outdoor dining area, this space acts as the development’s outdoor centrepiece and oasis. Bespoke canopies and cabanas provide shade and protection, and an adjacent community room offers a space for residents to host functions and events or gather and meet friends and family. Highline’s landscaping is abundant and numerous secluded areas are positioned within the exquisite gardens creating plenty of places to enjoy privately for relaxation and contemplation.
</p>
</div>
</div>
</div>

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<img src={{ URL::asset('/img/deicorp/highlineA1/MAKEASPLASH.png') }}>
<br><br>
<h3>MAKE A SPLASH</h3>
<p class="text-justify">Highline’s resort-style facilities will be the envy of all your friends and provide
you with fantastic places to relax and unwind or get social. Part of the Highline vision is that its common areas become a cultural and social hub for residents, embracing the local heritage through the use of celebratory materiality and bespoke public art that complement the site’s history and provide a sense of place and belonging. Oakes Lane will offer you a shared space and public meeting place, anchored by the amazing backdrop of the heritage university campus and feature public art entrance. Or wander down to Bayley’s Grove - the perfect chilled out place where you can sit under the Ornamental Pear Tree Grove or on the raised lawn whilst enjoying the afternoon sun.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container" style="padding-top: 5px;">
<img src={{ URL::asset('/img/deicorp/highlineA1/Highline_RoofGarden_15k_HR.jpg') }}>
<br><br>
<h3>ON HIGHER GROUND</h3>
<p class="text-justify">Literally topping it all off is your rooftop garden and terrace, with panoramic views spanning 360° across Sydney. Enjoy the raised outdoor lounge area, BBQ and outdoor dining spaces where relaxing will be a breeze and meeting new friends a given. Experience your higher self under shade canopies, amid lush
and fragrant plantings while taking in one of the best views in Sydney. You’ll be everyone’s best friend on New Year’s Eve when the firework display will be an explosive extravaganza, and stargazers will be
in heaven, with the unobstructed sky opening above you like never before.</p>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/highlineA1/p1.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/highlineA1/DREAMSCANCOMETRUE.png') }} width="1000px;">
<h3>DREAMS CAN COME TRUE</h3>
<p class="text-justify">
Architects extraordinaire, Turner Studio, have designed this
selection of one bedroom apartments to be as functional as they are attractive. With a wide range
of floorplans and orientations to choose from, you will be sure to find your ideal first home or outstanding investment. Spacious living and dining areas open out to large balconies, creating flowing spaces to enjoy every day. Every outlook
will be a joy to behold, ranging from the lushly landscaped garden outlook of ground level apartments to the panoramic views from higher up. Just take your pick. Designer kitchens are well-equipped with quality appliances and good cupboard space. Bedrooms are generously proportioned with built-
in wardrobes and, in most cases, have direct access to the balcony. Chic bathrooms provide decadent walk-in showers, floor-to-ceiling tiling and ample cabinet space. Additional features include internal laundries with dryer and tub, storage cupboard, reverse cycle air conditioning, audio intercom and a secure undercover car space.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/highlineA1/DOUBLEYOURPLEASURE.png') }} style="width: 1000px;">
<h3>DOUBLE YOUR PLEASURE</h3>
<p class="text-justify">
Highline’s two bedroom apartments are a testament to intelligent and refined design. Explore the fantastic range of floorplans and select one that’s perfect for you. Double storey loft apartments have soaring voids to accentuate the sense of light and space and many apartments feature cross-flow ventilation, creating
a natural flow of air. Living and dining areas are spacious and flow
to the sizeable balconies, perfect for entertaining and everyday life. Gourmet kitchens are beautifully finished and equipped, featuring Smeg appliances. Master bedrooms are spacious with built-in wardrobes, designer ensuite bathrooms and, in many cases, balcony access. Second bedrooms are also sizeable with built-ins and the main bathrooms generally feature a bath. Additional features include internal laundry with dryer and tub, storage cupboard, reverse cycle air conditioning, audio intercom and secure undercover car space.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/deicorp/highlineA1/Highline_Penthouse1407_8K.jpg') }}>
<div class="float-right" style="width:470px; padding-left: 20px; padding-top: 10px;">
<h3>ON TOP OF THE WORLD</h3>
<p class="text-justify">
Impeccably designed by multi award-winning architects, Turner Studio, Highline’s one, two and
three bedroom penthouses could be your home among the clouds. Fusing quality of life and elegance of style with design of the highest calibre, these exemplary apartments are a cut above the rest. Entertain in the finest style, with expansive open
plan living and dining areas that flow seamlessly to spacious balconies, taking in the panoramic, elevated views. A selection of penthouses are double storey and feature extra high ceiling voids, amplifying the already lofty sense of space and light. Many penthouses offer cross-flow ventilation, creating a natural circulation of air. Chef’s dream kitchens feature decadent polished stone benchtops and stainless steel Smeg appliances. Master bedrooms are expansive with generous built-in wardrobes and luxurious ensuite bathrooms. Additional features include internal laundries with dryer, tubs
and cupboards, reverse cycle air conditioning, audio intercom and secure undercover car spaces.
</p>
</div>
</div>
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/highlineA1/THEFINESTFINISH.png') }}>
<br><br>
<h3>THE FINEST FINISH</h3>
<p class="text-justify">
Interior designers have sourced superior finishes and fittings to ensure these apartments are not only beautiful, but built to last. Quality timber floors line the living areas and elegant ceramic tiling paves the wet areas and balconies, while sumptuous carpet insulates the bedrooms. Kitchens feature stainless steel Smeg appliances including gas cooktop, multi-function oven, range hood, dishwasher and microwave, stone splashbacks, polished
stone benchtops, sleek joinery and double sinks. Bathrooms offer floor to ceiling ceramic tiles, mirrored wall-mounted cabinets and integrated toilet. So create the mood with your choice of designer finish – the lighter ‘Soho’ or the striking ‘Manhattan’ scheme - and the backdrop will be set to complement your own furniture or artwork and harmoniously integrate your favourite colours and textures.
</p>
<hr class="new1">
</div>



<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/deicorp/highlineA1/BuildingA_L01-08.pdf') }}" target="_blank">Building A Level01-08.pdf</a>
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
  <a href="{{ asset('documents/deicorp/highlineA1/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/highlineA1/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a href="{{ asset('documents/deicorp/highlineA1/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
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
