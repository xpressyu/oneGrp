<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>North</title>
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
<img class="mySlides" src="{{ URL::asset('/img/sydney/north/escada,Oriordan.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/north/lighthouse.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/north/lucent.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/north/nbh.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/north/northRyde.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/north/omnia.jpg') }}" style="width:100%">

<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">


    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
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

<h1 style="padding-left:40%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Sydney-North</h1>
<div class="row" style="width:100%; padding-top: 50px; padding-left: 30px">

          <div class="col-lg-4">
          <a href="{{ route('theAlbanyOne') }}"> <img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/escada,Oriordan.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('theAlbanyOne') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Crows Nest</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Luxury in the marking, Find yourself at Home in The Village - The Albany One </p>
            <p><a class="btn btn-secondary" href="{{ route('theAlbanyOne') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('nbh') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/nbh.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('nbh') }}"> <h2 style="font-family: Times New Roman; color: #1e3e49; ">Macquarie</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">NBH is much more than an address <br> NBH is where you belong.<br> </p>
            <p><a class="btn btn-secondary" href="{{ route('nbh') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('lucent') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/lucent.png') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('lucent') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">North Sydney</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> Just Minutes by Train or Taxiform Sydney's Vibrant CBD, Norh Sydeny offers The best all worlds.</p>
            <p><a class="btn btn-secondary" href="{{ route('lucent')}}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('sierraResidence') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/sierraResidents.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('sierraResidence') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Kellyville</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Sierra Residences delivers a limited collection of boutique house and land packages in one of the North-West’s booming centres of growth.</p>
            <p><a class="btn btn-secondary" href="{{ route('sierraResidence')}}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theGables') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/theGablesPrecict.png') }}" width="240" height="240"></a>
          <a href="{{ route('theGables') }}"> <h2  style=" font-family: Times New Roman; color: #1e3e49;">Box Hill</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">True value in construction is a result of outstanding quality, at an affordable price.</p><br/>
            <p><a class="btn btn-secondary" href="{{ route('theGables')}}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theGables') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/omnia.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('theGables') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Potts Point</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">With the beautifully wrapped edges, this remarkable buiding can be admired from any angle.</p><br/>
            <p><a class="btn btn-secondary" href="{{ route('omnia')}}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('theNinesNaremburn') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/theNines.jpg')}}" width="240" height="240"></a>
           <a href="{{ route('theNinesNaremburn') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Naremburn</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Curated to the very last detail with space for the family to gather — this is where meals become memories.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('theNinesNaremburn')}}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('escada') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/escada,Oriordan.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('escada') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Mascot</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">CBD and the domestic and international airports, Mascot is a vibrant lifestyle hub where the culinary and retail scene is one of Sydney’s most visited hotspots.</p>
            <p><a class="btn btn-secondary" href="{{ route('escada') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('northRyde') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/northRyde.png') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('northRyde') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">North Ryde</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Enjoy great Shopping, Dining, Leisure and Entertainment.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('northRyde') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('putneyHill') }}"><img class="w3-circle"  src="{{ URL::asset('/img/sydney/north/putneyHill.png') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('putneyHill') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Putney Hill</h2></a>
          <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Inner city lifestyle meets local village charm in this central location. </p><br>
            <p><a class="btn btn-secondary" href="{{ route('putneyHill') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
    </div>



<!-- float button =contact us -->
<a href="{{ route('SEND_EMAIL') }}" class="float">
<i class=" my-float">
<img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
</i>
</a>
    <footer>
	<div class="container">
		<div class="row">

            <div class="down" style="background-color: #000000 ">
                <br>
                <p style="color: aliceblue ; width: 900px; padding-left:3%; "> <span style="font-size: 17px; font-family: Times New Roman; color: #F1C108;">One Group Global Investment Pty Ltd </span>&copy;
                <br>Ground Floor Level 6, &nbsp201 Kent Street Sydney NSW 2000
                <br> <span style="font-size: 17px; font-family: Times New Roman; color: #F1C108;">D:</span> (+61) &nbsp 2 &nbsp9019 1889  &nbsp &nbsp    <span style="font-size: 17px; font-family: Times New Roman; color: #F1C108;">M:</span> (+61) &nbsp 0413 &nbsp384 &nbsp119
                <br> <span style="font-size: 17px; font-family: Times New Roman; color: #F1C108;">E: </span> info@onegroupglobal.com.au
                </p>
                <br>
                </div>
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
