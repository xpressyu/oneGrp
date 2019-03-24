<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SouthVillage</title>
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

<h1 style="padding-left:20%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">Deicorp: </span>SouthVillage-Kirrawee NSW</h1>

<section id="content">
	<div class="container">
	
						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49; padding-left:35%"> 
							<div class="col-md-12">
								<div class="about-logo">
                  <h2 style="color: #1e3e49;">Feel the village wibe </h2> 
                </div>  
							</div>
						</div> 
						
	</div>
  </section>	

<div class="w3-content w3-display-container" style="padding-top: 25px;">

</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/deicorp/southVillage/food.png') }}></div>

<div class="right" style="width: 420px; padding-left: 10px;">
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Live where the community atmosphere meets incomparable convenience. At South Village, your doorstep stretches from the precinct’s new shopping centre to the Royal National Park to the endless blues of beaches and bays; an urban lifestyle amidst Australia’s natural wonders.
These residences offer convenience like you have never seen before. Within South Village is a new 9,000sqm dedicated park providing abundant community space, a 14,000sqm retail centre and ample parking. Coles and Aldi supermarkets and 27 specialty retailers adorn the buildings alongside private gardens. Only 180m away is Kirrawee Train Station
to connect you to the CBD in 33 minutes.
<br><br>
The Sutherland Shire is bursting with possibilities and Kirrawee is taking centre stage. With new amenities and a leading shopping centre for the residents, South Village will enjoy continued capital growth.
</p>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/deicorp/southVillage/coles.png') }}>
</div>
<div class="right" style="width: 350px; padding-left:20px;">
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
“I like the idea of having two levels
of retail underneath including Coles
and Aldi. It will make living a lot easier.”
– Samuel, 22, Shire local, Stage 1 purchaser
</p>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
“It’s the Sutherland Shire, the whole area is booming and it’s actually really opening up, with Kirrawee being the biggest beneficiary of the change.”
– Gary, 50, Stage 1 purchaser
</p>
</div>
<img src={{ URL::asset('/img/deicorp/southVillage/SouthvilleMap.png') }}>
</div>

<div class="w3-content w3-display-container">
 <hr class="new1">
<div class="left">
<img src={{ URL::asset('/img/deicorp/southVillage/sea.png') }}>
</div>
<div class="right" style="width: 420px; padding-left:50px;">
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
“I’m really excited to be moving into South Village and being part of the community.”<br><br><br>
– Carley, 30, Shire local, Stage 1 purchaser
</p>
</div>
</div>

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<img src={{ URL::asset('/img/deicorp/southVillage/knowNegibourtext.png') }} style="width: 1000px;" >
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Embedded in the heart of the country’s most iconic region, living in Kirrawee means taking
in all the Shire has to offer. During sunny days, slip into one of Cronulla Beach’s rustic cafés and explore the Royal National Park with your family.
South Village is a grand residence that is changing the landscape of Kirrawee. Enjoy the convenience of contemporary apartment living above a vibrant retail centre as well as quick and easy access to Kirrawee Train Station and town centre. The shopping centre within South Village will be owned and managed by PAYCE and Mirvac, the owners of the esteemed East Village in Zetland.</p>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/southVillage/more.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/deicorp/southVillage/6_Domain_CGI_1600x1200.gif') }}>
</div>
<div class="right" style="width: 430px; padding-left:20px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">This is convenience in its highest form. Nowhere else compares to South Village.</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Within the village precinct are restaurants that beckon, with an array of cuisines that whet your appetite. Shop for groceries day or night, and be lured by the smell of fresh coffee in the morning
as your barista makes your favourite. Spend your weekends in the landscaped gardens of South Village and end the night overlooking the colourful vista of Sydney’s skyline.
A reliable network of buses and trains connect you to every corner of Sydney. From Kirrawee Train Station, you can be at the airport in half an hour with only a change in Wolli Creek, Mascot or Green Square, to Cronulla Beach in twelve minutes, and the CBD in a little over half an hour.
</p>
</div>
<hr class="new1">
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/deicorp/southVillage/SV_Balcony.jpg') }}>
<br><br>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">South Village offers residents a blend of luxury and comfort
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



<div class="w3-content w3-display-container" style="padding-top:10px;">
<h1 style="font-family: Times New Roman; color: #1e3e49;">Additional Informatiion</h1>
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
  <a href="{{ asset('documents/deicorp/southVillage/Building_Level2.pdf') }}" target="_blank">Building Level 12.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/southVillage/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/southVillage/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div id="Sreate Levy" class="w3-container city" style="display:none">
    <a href="{{ asset('documents/deicorp/southVillage/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
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
