<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Allium</title>
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
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Terraceentrance.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/POOL.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/PodiumGardens.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Penthouseliving.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Penthouserooftop.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Penthousebedroom.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/LivingLookingIn.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/LivingInsidetoView.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Cutaway.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Bedroom.jpg') }}style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Bathroom.jpg') }}style="width:100%">

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
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(11)"></span>
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
<h1 style="padding-left:20%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">Meriton: </span>Allium-Pagewood NSW</h1>

<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49; padding-left:25%">
							<div class="col-md-12">
								<div class="about-logo">
                  <h2 style="color: #1e3e49;">an iconic new neighbourhood</h2>
                </div>
							</div>
						</div>

	</div>
  </section>


<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/PagewoodExterior.jpg') }} style="width: 550px;">
</div>
<div class="right" style="width: 430px; padding-left: 20px;padding-top: 50px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;"> AN ICONIC NEW NEIGHBOURHOOD</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Pagewood Green is poised to offer a unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs.
The master planned park-like community will be home to grand residences offering optimum sizes up to 197sqm with superior finishes in a premium location.
</p>
<br><br>
<h4 style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">AN ARCHITECTURAL MASTERPIECE</h4>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">The first stage at Pagewood Green, Allium,
will rise to new heights of up to 20 storeys showcasing uninterrupted views of the city, championship golf courses and surrounding parklands from exceptionally large apartments up to 197sqm.</p>

</div>
<img src={{ URL::asset('/img/meriton/pagewood5Allium/map.png') }} style="width: 1000px;">
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Allium-pagewoodGreen.png') }} style="width: 1000px;">
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">It would be hard to imagine a better setting. Pagewood Green will evolve on 16.5 hectares of prime land laced with lush green spaces, including 10,000sqm of parkland.
Neighbouring two golf courses, the Westfield Eastgardens shopping centre and Bunnerong Road which provides excellent transport links to some of Sydney’s premier destinations.
</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/view.png') }} style="width: 980px;">
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Designed by award-winning landscape architects, Arcadia, these private sanctuaries are designed exclusively for use by residents and their guests. Completed with a state-of-the-art barbecue, dining area, extensive turfed area, ample shade and a cinema screen, this perfect space is created for relaxation in a beautiful garden setting.
Throughout the seasons, these expansive landscaped gardens will be wonderful spaces to entertain friends and family or simply soak up the sky-high atmosphere.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/BEPARPT.png') }} style="980px;">
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Pagewood Green’s first stage, Allium, brings a unique offering of 487 grand residences in four designer towers soaring to 20 storeys and with views from every angle of the city, championship golf courses, surrounding parklands and the east coast.
Neighbouring Westfield Eastgardens and The Lakes Golf Course, this stunning collection of apartments is only moments from world-class beaches and entertainment amenities.
By virtue of its impeccable location, near top schools, universities and an array of parks and sporting facilities by the bus interchange and the future South East Lightrail, Allium will emerge as the new investment hotspot of Sydney’s East delivering greater rental returns for future investors.
</p>
<hr class="new1">
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/map1.png') }}>
<br><br>
<h3 style="font-family: Times New Roman; color: #1e3e49;">A RELAXED, GREEN MASTER-PLANNED COMMUNITY</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Pagewood Green is poised to offer an enticing and unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs. The park-like community’s designer towers will be home to grand residences with superior finishes, in a premium location.
Developed in multiple stages with a design competition run for each stage, an esteem panel of experts within the property industry will judge each design submitted by various award-winning architects. The winning design will create this iconic new neighbourhood which will be among the best in the world to live, relax and thrive in, and will be designed to satisfy market demand, providing exceptionally large apartment layouts of house like proportions.
<br><br>
Redefining the traditional approach to property development, this new community by Meriton, will feature 10,000sqm of landscaped parklands and a retail civic plaza overlooking the park. At the heart of this exciting new community will be the expansive Central Park. With an abundance of plants and turfed areas, this versatile space will allow residents to reconnect with nature with multiple zones for both solitude and engagement.
Pagewood Green, just 8km from the CBD, is a flagship venture for Australia’s largest apartment developer, Meriton, an award-winning and passionate company renowned for building large, luxurious apartments of the highest quality.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Lobby.jpg') }} style="width: 550px;">
</div>
<div class="right" style="width: 430px; padding-right: 50px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;"> BUILT FOR MODERN LIFE</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Residents will step straight into luxury as they walk through extravagant lobbies and ascend to their exceptionally large one, two, three and four bedroom grand residences – apartments of house like proportions with large balconies or terraces that serve as outdoor rooms with sensational vistas.<br><br>
Functional, uncomplicated floorplans provide uncluttered expanse for easy living and entertaining. A selection of apartments come with the addition of a full study room to maximise the use of space for your growing family. Choose one of the lower level loft apartments, providing you with the flexibility to orchestrate where and how the elements of your home can complement your living options.<br><br>
The building’s beautiful, clean lines are executed in only the highest quality materials, enhanced by ultra-modern design and technological details in every interior. The development showcases Meriton’s consistently uncompromising vision of perfection.
</p>
</div>
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/modelife.png') }} style="width: 980px;">
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/ReplenishAndRenew.png') }} style="width: 980px">
<h3 style="font-family: Times New Roman; color: #1e3e49;">Peplenish And Renew</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Every apartment features a designer kitchen, fully equipped with world-class Miele
kitchen appliances, stone splashbacks
and Caesarstone benchtops.
<br>Frameless, smoky mirrored built-in wardrobes
in all bedrooms provide ample storage for bedroom necessities while elegant ensuites with
a freestanding bath create stylish havens in which to unwind with ample concealed and open storage for your bathing essentials.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/LivingInsidetoView.jpg') }} style="width: 980px">

<h3 style="font-family: Times New Roman; color: #1e3e49;"> DESIGNER LIVING</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Every room of these expansive apartments sees the outdoors drawn inside while effortlessly maintaining its own sense of privacy. Oversized balconies serve as outdoor rooms with sensational vistas amplifying the sense of space.
Floor-to-ceiling glass windows sculpts the interiors with an abundance of natural light while creating seamless transitions for fluid indoor-outdoor living all year round.
Artist impression
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 Two beautiful colour schemes create the perfect backdrop – Neutral and Contrast</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
  Timber-finished tiles flow throughout the living, dining and kitchen areas
</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 Integrated reverse-cycle air conditioning keeps the apartment cool in summer and provides warmth in the winter months</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
  A media hub features in most apartments</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
	LED downlights shimmer throughout the entire apartment </li>
	<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Provisions are provided for broadband internet and pay TV</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 An enclosed internal laundry with dryer comes with cabinetry for extra storage needs</li></p>
 <hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Kitchen.jpg') }} style="width: 550px;">
</div>
<div class="right" style="width: 430px; padding-left: 50px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">SCULPTURED KITCHENS</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
The intuitive design of the kitchens at Allium puts everything at your fingertips. These inspiring spaces are the heart of the apartments and your place to gather and share a meal with friends and family. Kitchens are fully equipped with:
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 MIELE stainless appliances include an integrated dishwasher, four burner cooktop, microwave and oven with black glass and ducted rangehood</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Glass splashbacks and Caesarstone benchtops</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Polyurethane cabinetry, soft-closing drawers and polished chrome fittings complete the design for a premium feel</li>
</p>
</div>
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Bathroom.jpg') }} style="width: 550px;"></div>
<div class="right" style="width: 440px; padding-right: 50px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">RELAXING BATHROOMS</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Take time to pamper and step into your relaxing bathroom that allows you to replenish and renew.
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
 A luxurious free-standing bath serves as a centerpiece in most ensuites</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Frameless glass showers with polished chrome fixtures</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Floor-to-ceiling tile feature wall</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Wall-mounted floating basin and toilet suites with concealed cistern</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Mirrored wall-hung cabinetry provides ample storage</li>
</p>
</div>
<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/POOL.jpg') }} style="width: 980px">
<h3 style="font-family: Times New Roman; color: #1e3e49;"> RESORT-STYLE FACILITIES</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
With easy access to Allium’s ultimate resort facilities, you can ensure your family and friends will be entertained with a variety of leisure activities all year round. On-site facilities include:
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Secure building access and a warm welcoming lobby in each tower</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Lush landscaped parklands and a podium rooftop retreat</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Podium level cinema and BBQ facilities bordered by luscious green gardens</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Indoor aquatic centre including heated lap pool, spa and sauna</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Fully equipped gymnasium</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> A superior level of service with a dedicated on-site building manager</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Secure undercover resident and visitor parking with lift access</li>
<li style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">  Future shopping and dining precinct</li>
</p>
</div>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/map2.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/UNSW.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/beaches.png') }}>
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Future stages of the Pagewood Green master planned design will provide an accessible retail precinct in the center of the development offering alfresco dining options and specialty stores. This precinct will hum with the sound of espresso machines, on-trend providores and essential daily services overlooking the 8,000sqm Central Park.
Nowhere in the eastern suburbs will buyers be able to acquire brand new apartments of grand proportions in a tranquil and green environment, apartments that are affordable for growing families and close to the city. Just compare Pagewood Green to the competition!</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/art.png') }}>
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
<a href="{{ asset('documents/meriton/pagewood5Allium/FloorPlanLevel12-14.pdf') }}" target="_blank">Building Map.pdf</a>
<br>
<a href="{{ asset('documents/meriton/pagewood5Allium/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/meriton/pagewood5Allium/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>

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
