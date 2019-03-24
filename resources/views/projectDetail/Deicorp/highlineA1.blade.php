<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HighlineA1</title>
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
                    <a class="navbar-brand" href="index.html"><img src="{{ URL::asset('/img/newHome/slides/logo.png') }}" alt="logo"/></a>
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

  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
  
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


<h1 style="padding-left:20%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">Deicorp: </span>Highline-Westmead NSW</h1>

<section id="content">
	<div class="container">
	
						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49; padding-left:30%"> 
							<div class="col-md-12">
								<div class="about-logo">
                  <h2 style="color: #1e3e49;">WELCOME TO YOUR FUTURE</h2> 
                </div>  
							</div>
						</div> 
						
	</div>
  </section>	

  <div class="w3-content w3-display-container" style="padding-top: 25px;">

</div>

<div class="w3-content w3-display-container">

<div class="left">
<img src={{ URL::asset('/img/deicorp/highlineA1/GROUNDS.png') }}>
</div>
<div class="right" style="width: 440px; padding-left: 20px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">WELCOME TO YOUR GROUNDS</h3>
<br>
<p class="text-justify" class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Your Highline residence will be nestled within a beautifully landscaped fig tree and native eucalypt- surrounded sanctuary. 
The sense of botanical splendour will be composed of plantings providing year- round colour and ambiance, creating a series of lush intimate spaces for relaxation and socialising.
 The landscape will be enhanced by both the large existing trees and new tree plantings which will provide shade and amenity, whilst low shrubs and ground covers will act as points of interest and discovery throughout the captivating landscape. 
 The central luxury pool, sundeck, cabanas and outdoor lounge area will beckon, as will the outdoor BBQ and dining area. Further enhancing your grounds will be a feature grove with seating, a passive green space, winding pathways with mass “jungle” style plantings and a communal landscape podium.
ARTIST’S IMPRESSION
</p>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/deicorp/highlineA1/YOUREXCLUSIVERESORT.png') }}>
</div>
<div class="right" style="width: 400px; padding-left: 20px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">YOUR EXCLUSIVE RESORT</h3>
<br>
<p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Highline’s pristine lap and lounge pool provide for year round rest and recreation. Surrounded by lush landscaping, warm timber sun deck, BBQ and outdoor dining area, 
this space acts as the development’s outdoor centrepiece and oasis. Bespoke canopies and cabanas provide shade and protection, and an adjacent community room offers a space for residents to host functions and events or gather and meet friends and family. 
Highline’s landscaping is abundant and numerous secluded areas are positioned within the exquisite gardens creating plenty of places to enjoy privately for relaxation and contemplation.
</p>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container" >
<img src={{ URL::asset('/img/deicorp/highlineA1/MAKEASPLASH.png') }}>
<h3 style="font-family: Times New Roman; color: #1e3e49;">MAKE A SPLASH</h3>
<p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Highline’s resort-style facilities will be the envy of all your friends and provide
you with fantastic places to relax and unwind or get social. Part of the Highline vision is that its common areas become a cultural and social hub for residents, embracing the local heritage through the use of celebratory materiality and bespoke public art that complement the site’s history and provide a sense of place and belonging. 
Oakes Lane will offer you a shared space and public meeting place, anchored by the amazing backdrop of the heritage university campus and feature public art entrance. Or wander down to Bayley’s Grove - the perfect chilled out place where you can sit under the Ornamental Pear Tree Grove or on the raised lawn whilst enjoying the afternoon sun.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container" style="padding-top: 5px;">
<img src={{ URL::asset('/img/deicorp/highlineA1/Highline_RoofGarden_15k_HR.jpg') }}>
<br><br>
<h3 style="font-family: Times New Roman; color: #1e3e49;">ON HIGHER GROUND</h3>
<p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Literally topping it all off is your rooftop garden and terrace, with panoramic views spanning 360° across Sydney. Enjoy the raised outdoor lounge area, BBQ and outdoor dining spaces where relaxing will be a breeze and meeting new friends a given. Experience your higher self under shade canopies, amid lush
and fragrant plantings while taking in one of the best views in Sydney. You’ll be everyone’s best friend on New Year’s Eve when the firework display will be an explosive extravaganza, and stargazers will be
in heaven, with the unobstructed sky opening above you like never before.</p>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/highlineA1/p1.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/highlineA1/DREAMSCANCOMETRUE.png') }} width="1000px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">DREAMS CAN COME TRUE</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
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
<h3 style="font-family: Times New Roman; color: #1e3e49; ">DOUBLE YOUR PLEASURE</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Highline’s two bedroom apartments are a testament to intelligent and refined design. Explore the fantastic range of floorplans and select one that’s perfect for you. Double storey loft apartments have soaring voids to accentuate the sense of light and space and many apartments feature cross-flow ventilation, creating
a natural flow of air. Living and dining areas are spacious and flow
to the sizeable balconies, perfect for entertaining and everyday life. Gourmet kitchens are beautifully finished and equipped, featuring Smeg appliances. Master bedrooms are spacious with built-in wardrobes, designer ensuite bathrooms and, in many cases, balcony access. Second bedrooms are also sizeable with built-ins and the main bathrooms generally feature a bath. Additional features include internal laundry with dryer and tub, storage cupboard, reverse cycle air conditioning, audio intercom and secure undercover car space.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/deicorp/highlineA1/Highline_Penthouse1407_8K.jpg') }}>
</div>
<div class="right" style="width:440px;">
<h3 style="font-family: Times New Roman; color: #1e3e49; ">ON TOP OF THE WORLD</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Impeccably designed by multi award-winning architects, Turner Studio, Highline’s one, two and
three bedroom penthouses could be your home among the clouds. Fusing quality of life and elegance of style with design of the highest calibre, these exemplary apartments are a cut above the rest. Entertain in the finest style, with expansive open
plan living and dining areas that flow seamlessly to spacious balconies, taking in the panoramic, elevated views. A selection of penthouses are double storey and feature extra high ceiling voids, amplifying the already lofty sense of space and light. Many penthouses offer cross-flow ventilation, creating a natural circulation of air. Chef’s dream kitchens feature decadent polished stone benchtops and stainless steel Smeg appliances. Master bedrooms are expansive with generous built-in wardrobes and luxurious ensuite bathrooms. Additional features include internal laundries with dryer, tubs
and cupboards, reverse cycle air conditioning, audio intercom and secure undercover car spaces.
</p>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/highlineA1/THEFINESTFINISH.png') }}>
<br>
<h3 style="font-family: Times New Roman; color: #1e3e49; ">THE FINEST FINISH</h3>
<p class="text-justify"  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Interior designers have sourced superior finishes and fittings to ensure these apartments are not only beautiful, but built to last. Quality timber floors line the living areas and elegant ceramic tiling paves the wet areas and balconies, while sumptuous carpet insulates the bedrooms. Kitchens feature stainless steel Smeg appliances including gas cooktop, multi-function oven, range hood, dishwasher and microwave, stone splashbacks, polished
stone benchtops, sleek joinery and double sinks. Bathrooms offer floor to ceiling ceramic tiles, mirrored wall-mounted cabinets and integrated toilet. So create the mood with your choice of designer finish – the lighter ‘Soho’ or the striking ‘Manhattan’ scheme - and the backdrop will be set to complement your own furniture or artwork and harmoniously integrate your favourite colours and textures.
</p>
</div>



<div class="w3-content w3-display-container" style="padding-top:30px;">
<h1 style="font-family: Times New Roman; color: #1e3e49; ">Additional Informatiion</h1>
<div class="w3-content w3-display-container" >
<div class="w3-row">
<a href="javascript:void(0)" onclick="openCity(event, 'Floor Plan');" style="font-family: Times New Roman; color: #1e3e49;">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Floor Plan</div>
    </a>

    <a href="javascript:void(0)" onclick="openCity(event, 'Sreate Levy');" style="font-family: Times New Roman; color: #1e3e49;">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Strata Levy</div>
    </a>
  </div>

<div class="tab-content" id="myTabContent">
  <div id="Floor Plan" class="w3-container city" style="display:none">

  <a href="{{ asset('documents/deicorp/highlineA1/BuildingA_L01-08.pdf') }}" target="_blank">Building A Level01-08.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/highlineA1/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/highlineA1/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div id="Sreate Levy" class="w3-container city" style="display:none">
    <a href="{{ asset('documents/deicorp/highlineA1/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
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
