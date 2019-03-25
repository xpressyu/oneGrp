
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Frasers</title>
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
<div class="imgRoll" style="padding-top:80px; width: 100%">
<img class="mySlides" src="{{ URL::asset('/img/develop-logo/frasers.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/frasers/botany/view.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/frasers/northRyde/T1.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/frasers/putneyHill/T8.png') }}" style="width:100%">

<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">


    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>

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


<h1 style="padding-left:35%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Developer-Frasers</h1>

<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49;">
							<div class="col-md-12">
								<div class="about-logo">
									<h2 style="color: #1e3e49;"><span class="coloured">Developer:</span>Frasers</h2>
                  <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Frasers Property Australia</span> is one of Australia's leading diversified property groups and is the Australian division of Frasers Property Limited (FPL).
                   We have over <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> 90 years’</span> heritage in Australia and today our activities cover the development of residential land, housing and apartments, commercial, retail and industrial properties, investment property ownership and management, and property management.<br>
                   Australand was acquired by <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> FPL in 2014</span>, adopting the global Frasers Property brand in August 2015.
                  </p>
                  <img src="{{ URL::asset('/img/develop-logo/fraserInfor.png') }}" style="width:100%" >

                </div>

							</div>
						</div>

	</div>
	</section>
	<div class="row" style="width:100%; padding-top: 50px; padding-left: 100px">
          <div class="col-lg-4">
          <a href="{{ route('botany') }}"> <img class="w3-circle"  src="{{ URL::asset('/img/frasers/botany/view.png') }}" width="240" height="240"></a>
          <a href="{{ route('botany') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Botany</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Clean, Green and Causing A Scene: This is Botany</p> <br><br>
            <p><a class="btn btn-secondary" href="{{ route('botany') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('northRyde') }}"><img class="w3-circle" src="{{ URL::asset('/img/frasers/northRyde/T1.png') }}" width="240" height="240"></a>
          <a href="{{ route('northRyde') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">NorthRyde</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Enjoy great Shopping, Dining, Leisure and Entertainment </p> <br>
            <p><a class="btn btn-secondary" href="{{ route('northRyde') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('putneyHill') }}"> <img class="w3-circle" src="{{ URL::asset('/img/frasers/putneyHill/T8.png') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('putneyHill') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">PutneyHill</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Inner city lifestyle meets local village charm in this central location.  <br><br></p>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"><a class="btn btn-secondary" href="{{ route('putneyHill') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          </div>

          <div class="down" style="background-color: #000000 ">

<p style="color: aliceblue ; width: 900px; padding-left:27%;">One Group Global Investment Pty Ltd&copy;
<br>Ground Floor Level 6,201 Kent Street Sydney NSW 2000
<br> D: + 61 29019 1889  &nbsp &nbsp    M: 0413384119
<br> E: fiona@onegroupglbal.com.au  &nbsp info@onegroupglobal.com.au
</p>
</div>

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
