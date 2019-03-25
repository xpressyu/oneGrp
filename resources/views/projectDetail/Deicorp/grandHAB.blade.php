<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GrandH</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />



<!-- css -->
<link href="{{ asset('css/newCSS/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/newCSS/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ asset('css/newCSS/flexslider.css') }}" rel="stylesheet" />
<link href="{{ asset('css/newCSS/style.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style>
 .mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Monday - Sunday &nbsp 24  / 7 Services</span> </p>
        <p class="pull-right"><i class="fa fa-phone"></i>(+61) 413 384 119</p>
      </div>
    </div>
  </div>
</div>

	<!-- start header -->
	<header class="navbar-fixed-top" style="padding-top: 30px;">
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('welcome')}}"><img src="{{ URL::asset('/img/newHome/slides/logo.png') }}" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('welcome') }}">Home</a></li>
							 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Property <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('sydney')}}">Sydney</a></li>
                            <li><a href="{{ route('list') }}">Developers</a></li>

                        </ul>
                    </li>
						<li><a href="{{ route('company') }}">Our Company</a></li>
                        <li><a href="{{ route('staff') }}">Staff</a></li>
                        <li><a href="{{ route('social') }}">Event</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

<div class="w3-content w3-display-container" style="max-width:100%">
<div class="imgRoll" style="padding-top:20px; width: 100%">
 <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Close_Up_View.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Rooftop.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Living_R4.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Bedroom.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Balcony.jpg') }} style="width:100%">

  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>

   </div>
</div>

	</div>
<script>
    var myIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 2 seconds
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
<h1 style="padding-left:20%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">Deicorp: </span>GrandH-Hurstville NSW</h1>

<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49; padding-left:25%">
							<div class="col-md-12">
								<div class="about-logo">
                  <h2 style="color: #1e3e49;">A GRAND LIFE AWAITS YOU AT GRANDH</h2>
                </div>
							</div>
						</div>

	</div>
  </section>

<div class="w3-content w3-display-container" style="padding-top: 25px;">


</div>

<div class="w3-content w3-display-container">

 <div class="left">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_GrandH_Hero.jpg') }}  >
 </div>
 <div class="right" style="width: 400px;" >
	<h3 style="font-family: Times New Roman; color: #1e3e49;">A Grand Fortune</h3>
	<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> In Hurstvtille’s coveted city centre stands a new residential showpiece worthy of Sydney’s Southern Capital. This prestigious precinct captures the strong community spirit of Hurstville, while introducing an unrivalled standard of cosmopolitan convenience to the neighbourhood.
   A grand life awaits you at GrandH.</p>
</div>
</div>


<div class="w3-content w3-display-container" style="height:980px;">
 <div class="left">
 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/worldsMeet-HustvilleH.png') }}>
 </div>
 <div class="right" style="width: 400px;" >
 <h3 style="font-family: Times New Roman; color: #1e3e49;">Where Worlds Meet</h3>
 <p  class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">GrandH is located in prime position within Hurstville, one of Sydney’s most sought-after addresses.
Hurstville offers both a bustling multicultural metropolis and an enviably easy-going lifestyle.
It’s surrounded by key amenities from every angle: schools, hospitals, entertainment, parks, and the sunny shores of Brighton-le-Sands. Sydney Airport is a short drive away, linking you and your family to jet setting adventures.
Food reigns here in Hurstville, with a distinct global flavour. The area is well-known for its gastronomic pleasures, especially authentic Chinese cuisine. Join the hordes of hungry locals in the morning for yum cha, then at night for fresh seafood or sizzling plates
of Sichuan fare. In between restaurant banquets, take your pick from any of Hurstville’s street food options – it’s all delicious.</p>
</div>
</div>

<div class="w3-content w3-dislay-container" >
 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Living_R4.jpg') }} style="width: 1000px;">
 <br>
 <h3 style="font-family: Times New Roman; color: #1e3e49;">Live At New Heights</h3>
 <p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 	Your new life of luxury starts here: with a view that has to be seen to be believed, rising high above the Hurstville cityscape. From the privacy of your sunkissed balcony, enjoy panoramic sights of Botany Bay, Sydney CBD and Greater Sydney every morning and night.
 </p>
 <hr class="new1">
</div>

<div class="w3-content w3-display-container">

 <div class="left">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/AtTheCentreOfItAll.png') }}>
 </div>
 <div class="right" style="width: 400px;" >
	<h3  style="font-family: Times New Roman; color: #1e3e49;">At The Centre Of It All</h3>
	<p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Make no mistake: Hurstville is the central business district
of South Sydney, attracting visitors from all over. Less than twenty
minutes from the city by rail, the local train station is a minute’s walk from GrandH. This transport interchange is also frequented by a network of buses travelling to Ashfield, Bankstown, Macquarie Park, Miranda, and other suburbs.
Transport has been optimised to serve the daily commuters flocking to the vibrant Hurstville hub – so you’ll never need to worry about when your next train or bus is coming.
Need to pick up some groceries, or something more special?
Westfield Hurstville is tantalisingly close by – only four minutes on foot, in fact. This impressive shopping centre has recently been redeveloped to accommodate 232 stores, plus al fresco dining and never-ending entertainment. If Westfield isn’t enough, even more shops can be found closer to home: Coles, Woolworths, Aldi, Target, and Kmart are right on GrandH’s doorstep.</p>
</div>
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/food.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container" style="padding-top:30px;">
 <div class="left">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/room.png') }}>
 </div>
 <div class="right" style="width: 400px;" >
	<h3  style="font-family: Times New Roman; color: #1e3e49;">The Definition Of Style</h3>
	<p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> The designs of GrandH make a statement with simplicity and sophistication. Every corner of the generously-sized apartments has been conscientiously crafted.
  The kitchens are fitted with stainless steel Smeg appliances and stone benchtops and splashbacks, elevating the preparation of every home-cooked meal. High quality stone is also used for the bathroom’s benchtops, complementing the semi-frameless shower panel, and lush carpeting throughout the living spaces give the unit a luxurious finishing touch.
 </p>
</div>
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/TheHurstvilleLifestyle.png') }}>
<hr class="new1">
<img src={{ URL::asset('img/deicorp/grandHHurstvlAB/EverythingInArmsReach.png') }} >
<hr class="new1">
</div>

<div class="w3-content w3-dislay-container">

 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Rooftop.jpg') }} style="width: 1000px;">
 <br>
 <h3 style="font-family: Times New Roman; color: #1e3e49;">Find Home in An Oasis</h3>
 <p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 Exclusivity exudes from every feature of GrandH. From the central courtyard connecting the quartet of buildings to a secure car space for every resident – and a rooftop garden that invites you to take in the sunset.
 </p>
 <hr class="new1">
</div>

<div class="w3-content w3-display-container">
 <div class="left">
	 <img src={{ URL::asset('img/deicorp/grandHHurstvlAB/TheDefinitionOfStyle.png') }}>
 </div>

 <div class="right" style="width: 460px;" >
	<h3 style="font-family: Times New Roman; color: #1e3e49;">At The Centre Of It All</h3>
	<p  > The designs of GrandH make a statement with simplicity and sophistication. Every corner of the generously-sized apartments has been conscientiously crafted.
The kitchens are fitted with stainless steel Smeg appliances and stone benchtops and splashbacks, elevating the preparation of every home-cooked meal. High quality stone is also used for the bathroom’s benchtops, complementing the semi-frameless shower panel, and lush carpeting throughout the living spaces give the unit a luxurious finishing touch.</p>

</div>
</div>


<div class="w3-content w3-display-container" style="padding-top:30px;">
<h1 style="font-family: Times New Roman; color: #1e3e49;">Additional Informatiion</h1>
<div class="w3-content w3-display-container" >
<div class="w3-row">
<a href="javascript:void(0)" onclick="openCity(event, 'Floor Plan');" style="font-family: Times New Roman; color: #1e3e49;">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">FloorPlan</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'FAQ');" style="font-family: Times New Roman; color: #1e3e49;">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">FAQ</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Sreate Levy');" style="font-family: Times New Roman; color: #1e3e49;">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Strata Levy</div>
    </a>

  </div>
<div class="tab-content" id="myTabContent">
<div id="Floor Plan" class="w3-container city" style="display:none">
<a href="{{ asset('documents/deicorp/grandHHurstvlAB/BuildingA-Level2.pdf') }}" target="_blank">Building A Level 2.pdf</a><br>
<a href="{{ asset('documents/deicorp/grandHHurstvlAB/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
<br>
<a href="{{ asset('documents/deicorp/grandHHurstvlAB/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
   </div>
  <div id="FAQ" class="w3-container city" style="display:none">
  <a href="{{ asset('documents/deicorp/grandHHurstvlAB/FAQ.pdf') }}" target="_blank">FAQ.pdf</a>
   </div>

  <div id="Sreate Levy" class="w3-container city" style="display:none">
    <a href="{{ asset('documents/deicorp/grandHHurstvlAB/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
  </div>
</div>
</div>
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-yellow", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-yellow";
}
</script>
<div class="down" style="background-color: #000000 ">

<p style="color: aliceblue ; width: 900px; padding-left:27%;">One Group Global Investment Pty Ltd&copy;
<br>Ground Floor Level 6,201 Kent Street Sydney NSW 2000
<br> D: + 61 29019 1889  &nbsp &nbsp    M: 0413384119
<br> E: fiona@onegroupglbal.com.au  &nbsp info@onegroupglobal.com.au
</p>
</div>
<!-- float button =contact us -->
<a href="{{ route('SEND_EMAIL') }}" class="float">
<i class=" my-float">
<img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
</i>
</a>

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('js/newJS/jquery.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('js/newJS/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.fancybox-media.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.flexslider.js') }}"></script>
<script src="{{ URL::asset('js/newJS/animate.js') }}"></script>
<!-- Vendor Scripts -->
<script src="{{ URL::asset('js/newJS/modernizr.custom.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.isotope.min.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/newJS/animate.js') }}"></script>
<script src="{{ URL::asset('js/newJS/custom.js') }}"></script>
</body>
</html>
