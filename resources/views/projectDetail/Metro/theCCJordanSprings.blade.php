<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Creation Collection</title>
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
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T2.png') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T3.png') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T4.png') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T5.png') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T6.png') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T7.png') }} style="width:100%">
 <img class="mySlides" src={{ URL::asset('/img/metro/theCCJordanSprings/T8.png') }} style="width:100%">


 <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>

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
<h1 style="padding-left:10%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">Metro: </span>The Creation Collection-Jordan Springs</h1>
<div class="w3-content w3-display-container" style="padding-top: 50px;">
<h3  style="font-family: Times New Roman; color: #1e3e49;">Lot 1 </h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p1-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p1-2.png') }}>
<hr class="new1">
<h3  style="font-family: Times New Roman; color: #1e3e49;">Lot 2 </h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p2.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p2-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p2-2.png') }}>
<hr class="new1">
<h3  style="font-family: Times New Roman; color: #1e3e49;">Lot 3</h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p3.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p3-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p3-2.png') }}>
<hr class="new1">
<h3  style="font-family: Times New Roman; color: #1e3e49;">Lot 4</h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p4.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p4-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p4-2.png') }}>
<hr class="new1">
<h3  style="font-family: Times New Roman; color: #1e3e49;">Lot 5</h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p5.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p5-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p5-2.png') }}>
<hr class="new1">
<h3>Lot 6</h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p6.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p6-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p6-2.png') }}>
<hr class="new1">
<h3 style="font-family: Times New Roman; color: #1e3e49;">Lot 7</h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p7.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p7-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p7-2.png') }}>
<hr class="new1">
<h3 style="font-family: Times New Roman; color: #1e3e49;">Lot 8</h3>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p8.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p8-1.png') }}>
<img src={{ URL::asset('/img/metro/theCCJordanSprings/p8-2.png') }}>
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
<a href="{{ asset('documents/Metro/theCCJordanSprings/LOT2.pdf') }}" target="_blank">LOT 2.pdf</a>
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
