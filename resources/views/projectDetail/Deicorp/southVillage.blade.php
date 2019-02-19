<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>SouthVillage</title>
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
        <a class="py-2 d-none d-md-inline-block" href="{{ route('staff') }}">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('list') }}">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('company') }}">Our Company</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('staff') }}">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('social') }}">Social Service</a>
      </div>
    </nav>

<div class="imgRoll" style="padding-top:20px; width: 100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/BuildingEWestSide.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/BuildingEHeroshot.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/Courtyard21Nov.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-01.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-02.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-04.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-05.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-06.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/KV_VIG_1_I_Park-FINAL_X_3M-HR_edit.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/southVillage/SVretailuncompressed(1).jpg') }} style="width:100%">


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
<h1>Kirrawee, NSW</h1>
<h2>Developer: Deicorp</h2>
<br>
<img src={{ URL::asset('/img/deicorp/southVillage/develperInfor.png') }} style="width: 1000px;" >
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
<img src={{ URL::asset('/img/deicorp/southVillage/food.png') }}>
<div class="float-right" style="width: 480px; padding-left: 20px;padding-top: 20px;">
<p class="text-justify">
Live where the community atmosphere meets incomparable convenience. At South Village, your doorstep stretches from the precinct’s new shopping centre to the Royal National Park to the endless blues of beaches and bays; an urban lifestyle amidst Australia’s natural wonders.
These residences offer convenience like you have never seen before. Within South Village is a new 9,000sqm dedicated park providing abundant community space, a 14,000sqm retail centre and ample parking. Coles and Aldi supermarkets and 27 specialty retailers adorn the buildings alongside private gardens. Only 180m away is Kirrawee Train Station
to connect you to the CBD in 33 minutes.
<br><br>
The Sutherland Shire is bursting with possibilities and Kirrawee is taking centre stage. With new amenities and a leading shopping centre for the residents, South Village will enjoy continued capital growth.
</p>
</div>
</div>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/southVillage/back.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/deicorp/southVillage/coles.png') }}>
<div class="float-left" style="width: 350px; padding-right:20px;padding-top: 150px;">
<p class="text-justify">
“I like the idea of having two levels
of retail underneath including Coles
and Aldi. It will make living a lot easier.”
– Samuel, 22, Shire local, Stage 1 purchaser
</p>
<br><br><br>
<p class="text-justify">
“It’s the Sutherland Shire, the whole area is booming and it’s actually really opening up, with Kirrawee being the biggest beneficiary of the change.”
– Gary, 50, Stage 1 purchaser
</p>

</div>
</div>
<img src={{ URL::asset('/img/deicorp/southVillage/SouthvilleMap.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/deicorp/southVillage/sea.png') }}>
<div class="float-right" style="width: 350px; padding-left:50px;padding-top: 250px;">
<p class="text-justify">
“I’m really excited to be moving into South Village and being part of the community.”<br>
– Carley, 30, Shire local, Stage 1 purchaser
</p>

</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<img src={{ URL::asset('/img/deicorp/southVillage/knowNegibourtext.png') }} style="width: 1000px;" >
<p class="text-justify">
Embedded in the heart of the country’s most iconic region, living in Kirrawee means taking
in all the Shire has to offer. During sunny days, slip into one of Cronulla Beach’s rustic cafés and explore the Royal National Park with your family.
South Village is a grand residence that is changing the landscape of Kirrawee. Enjoy the convenience of contemporary apartment living above a vibrant retail centre as well as quick and easy access to Kirrawee Train Station and town centre. The shopping centre within South Village will be owned and managed by PAYCE and Mirvac, the owners of the esteemed East Village in Zetland.</p>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/southVillage/more.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/deicorp/southVillage/6_Domain_CGI_1600x1200.gif') }}>
<div class="float-left" style="width: 450px; height: 450px; padding-right:50px;padding-top:20px;">
<h3>This is convenience in its highest form. Nowhere else compares to South Village.</h3>
<p class="text-justify">
Within the village precinct are restaurants that beckon, with an array of cuisines that whet your appetite. Shop for groceries day or night, and be lured by the smell of fresh coffee in the morning
as your barista makes your favourite. Spend your weekends in the landscaped gardens of South Village and end the night overlooking the colourful vista of Sydney’s skyline.
A reliable network of buses and trains connect you to every corner of Sydney. From Kirrawee Train Station, you can be at the airport in half an hour with only a change in Wolli Creek, Mascot or Green Square, to Cronulla Beach in twelve minutes, and the CBD in a little over half an hour.
</p>
</div>
</div>
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/southVillage/SV_Balcony.jpg') }}>
<br><br>
<p class="text-justify">South Village offers residents a blend of luxury and comfort
with stylish finishes. The oversized apartments offer spacious living rooms and expansive balconies that beautifully extend the open-space plan. The kitchen is appointed with quality stone and splashbacks with contemporary SMEG appliances throughout, revealing a design-rich space steeped in refined elegance.
Feel the luxury every time you step onto the timber floors of your open-plan living room. Each apartment has an abundance of built-in storage; ample space in the kitchen, bathroom, wardrobe and basement allow you to immaculately arrange everything and anything.
Take a stroll through the elevated private gardens scattered throughout the 7 buildings. Soak in panoramic views from your balcony and offer your guests the ease and convenience of visitor car parking.
Residential car parking is separate to retail parking, providing security and convenience. Each building offers enhanced security, with its own individual lobby and addresses to give you the ultimate village living experience.</p>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/southVillage/SV_Bedroom.jpg') }}>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/southVillage/SV_Kitchen.jpg') }}>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/southVillage/SV_Living.jpg') }}>
<hr class="new1">
</div>



<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/deicorp/southVillage/Building_Level2.pdf') }}" target="_blank">Building Level 12.pdf</a>
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
  <a href="{{ asset('documents/deicorp/southVillage/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/southVillage/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a href="{{ asset('documents/deicorp/southVillage/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
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
