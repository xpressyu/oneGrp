<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dahlia</title>
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
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_Bathroom.jpg') }}  style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_Bedroom.jpg') }}  style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_Exterior2.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_ExteriorHero.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_KitchenBeige.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_Living.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_RoofGarden.jpg') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_Terrace.jpg') }} style="width:100%"  >


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
<h1 style="padding-left:20%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">Meriton: </span>Dahlia-Pagewood NSW</h1>

<div class="w3-content w3-display-container" style="padding-top: 10px;">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page1.png') }}>
<br><br>
<P class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Redefining the traditional approach to property development, this new development  by  Meriton  will  have  tree-lined  boulevards  and  feature  10,000sqm of landscaped parklands and a full line supermarket.
  Rising to the eighth floor, a superb selection of 167 luxury apartments with  generous  floor-to-ceiling  picture  windows,  and  open  corner  balconies  that  showcase  uninterrupted  views  of  the  surrounding  landscape,
   out to the eastern coast line.Dahlia  at  Pagewood  Green  has  been  exceptionally  designed  to satisfy market demand, providing secure parking for all apartments and the largest layouts in the area with sizes up to 186m2  of  internal  and external living combined.Pagewood Green is an island development neighbouring championship golf courses and Westfield Eastgardens shopping centre.
   Located 8km from  the  CBD  and  under  5km  to  Sydney's  iconic  eastern  beaches,  Australia's top performing universities and Sydney Airport's domestic and international terminals. </P>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page2.png') }}>
<br><br>
<p  class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Inside and out, seamless living is the star of these impressive boutique homes.
  The  intelligent  architecture  by  award  winning  Nettleton  Tribe  creates  an environment where everything is effortless.
  Dahlia is crowned by top floor, two and three bedroom split level penthouse apartments,  with  enormous  rooftop  terraces  up  to  50m2.
   This  stunning  collection of premium apartments have been skilfully designed to the highest standards for a lifetime of quality and comfort.
   Expertly designed with attention to every detail, Dahlia will offer finishes that echo the natural textures of the area. The stone feature façade with timber accents  and  a  grand  entry  arbor  to  the  internal  courtyard  gardens  reflect  the character of this groundbreaking community.</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page3.png') }}>
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Over 60% of apartments feature a study room the same size  as a bedroom, complete with a window and air-conditioning<br>
  Many apartments boast north and east aspects through  floor-to-ceiling glazed windows§Large format limestone look tiles deliver low maintenance  style throughout the open plan living, bathroom and kitchen  areas that accentuate the enormous, flowing floorplans
  <br>Provisions for super-fast broadband and pay TV  with fibre optic cabling in the living area and bedrooms§Internal laundry with dryer and cabinetry
  <br>Comprehensive security including intercom and CCTV cameras<br>Sustainable features such as LED downlights and water  saving fixtures</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page4.png') }}>
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Dahlia’s spacious gourmet kitchens are made for easy entertaining and daily life.
   Their quality finishes, fittings and appliances have been chosen for both their timeless style and performance.
  <br>High-end stainless steel appliances including a ducted  rangehood, gas cooktop, oven, microwave with black glass  and semi-integrated dishwasher.
  <br>Smoked mirror splashback and barback.
   <br>40mm polished pencil-edge Caesarstone benchtops  with under-bench sink §Polished chrome tapware and fittings§Full-height satin finish polyurethane cabinetry  with soft-closing drawers</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page5.png') }}>
<h4  style="font-family: Times New Roman; color: #1e3e49;">The chic colour palettes used throughout the bathrooms create a zen-like calm. </h4>
 <p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> These are beautiful and relaxing places to refresh or unwind at the start or end of a busy day.
   <br>Frameless glass showers with polished chrome fixtures.
   <br>Contemporary herringbone wall tiles and marble inspired floor tiles deliver timeless modern appeal.
   <br>Generous mirrored wall-hung cabinetry with Caesarstone vanity  shelf top for added storage.
   <br>Wall-mounted floating basin and toilet suites with concealed cistern.</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page6.png') }}>
<br><br>
<h4  style="font-family: Times New Roman; color: #1e3e49;">Two  luxurious  colour  schemes  –  neutral  and  contrast  –  create  a  wonderful  blank  canvas  ready  to  add  your  own  personal  touches. The neutral scheme is expressed in warm beige notes, while the contrast scheme is a warm grey colour palette.</h4>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Shown here in the peaceful bedrooms, Dahlia’s sophisticated natural palettes deliver a timeless contemporary feel.
  <br>Generous mirrored built-in wardrobes offer plentiful storage.
  <br>Feel the luxurious wool-blend carpet under your feet.
  <br>Enjoy direct access to the balcony spaces from the bedrooms.</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page7.png') }}>
<br><br>
<h4 style="font-family: Times New Roman; color: #1e3e49;">Designed  to  connect  with  nature,  an  exceptional,  landscaped  rooftop  garden  and  yoga  lawn  on  level  six  envelopes  your  new  home  –  a  calming  retreat  and  place  to  gather  with  family  and friends.</h4>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Custom outdoor dining furniture, leafy planting, extensive turfed space, gleaming barbeque facilities, a community-run organic vegetable patch and timber lounge seating create multiple areas to relax or entertain while in the comfort of your own home.
  These  inviting  gardens  are  uplifting  whether  enjoyed  from  within  or viewed from your luxury apartment.</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page8.png') }}>
<br><br>
<h4 style="font-family: Times New Roman; color: #1e3e49;">The grand 8,000sqm communal park at the heart of Pagewood Green comes complete with: </h4>
  <p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Play equipment for children including swing set  and climbing structure.
  <br>Multi-purpose sports lawn and outdoor exercise equipment.
  <br>Table tennis facilities§Barbeque and picnic area.
  <br>Large lawns with shady groves§Pedestrian and cycle pathways that weave around  the park and buildings.
  <br>This enviable location comes to life with a thriving café and dining culture, retail and leisure experiences</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page9.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Page10.png') }}>

<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/UNSW.png') }}>
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/beaches.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood4Dahlia/Fingertips.png') }}>
	</div>




<div class="w3-content w3-display-container" style="padding-top:30px;">
<h1 style="font-family: Times New Roman; color: #1e3e49;">Additional Informatiion</h1>
<div class="w3-content w3-display-container" >
<div class="w3-row">
<a href="javascript:void(0)" onclick="openCity(event, 'Floor Plan');" style="font-family: Times New Roman; color: #1e3e49;">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">FloorPlan</div>
</a>
  </div>
<div class="tab-content" id="myTabContent">
<div id="Floor Plan" class="w3-container city" style="display:none">
<a href="{{ asset('documents/meriton/pagewood4Dahlia/FloorPlan.pdf') }}" target="_blank">Building Map.pdf</a>
  <br>
  <a href="{{ asset('documents/meriton/pagewood4Dahlia/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/meriton/pagewood4Dahlia/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
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
