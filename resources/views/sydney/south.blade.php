<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>South</title>
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
<img class="mySlides" src="{{ URL::asset('/img/sydney/south/vivid.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/south/botany.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/south/dahlia.jpg') }}"  style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/south/edenCathrineField.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/south/southVillage.jpg') }}"  style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/south/theGalleryCoCo.jpg') }}"  style="width:100%">

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

<h1 style="padding-left:40%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Sydney-South</h1>
<div class="row" style="width:100%; padding-top: 50px; padding-left: 30px">
    <div class="col-lg-4">
            <a href="{{ route('grandH') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/grandH.jpg') }}" width="240" height="240"></a>
            <a href="{{ route('grandH') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Hurstville</h2></a>
             <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">In Hurstvtille’s coveted city centre stands a new residential showpiece  worthy of Sydney’s Southern Capital.</p><br>
            <p> <a class="btn btn-secondary" href="{{ route('grandH') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
     </div><!-- /.col-lg-4 -->
     <div class="col-lg-4">
           <a href="{{ route('southVillage') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/southVillage.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('southVillage') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Kirrawee - SV</h2></a>
           <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Set in the idyllic surrounds of the Sutherland Shire, South Village is poised to bring a new and unique
                community into sydney's South.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('southVillage') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
     </div><!-- /.col-lg-4 -->
     <div class="col-lg-4">
            <a href="{{ route('vivid') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/vivid.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('vivid') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Kirrawee - Vivid</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Redefining the best of Sydney urban living against the backdrop of pristine beaches and parkland.
                    Welcome, to Vivid.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('vivid') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
     </div><!-- /.col-lg-4 -->
           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('pagewood5') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/allium.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('pagewood5') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Pagewood - Allium</h2></a>
            <p  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Pagewood Green is poised to offer a unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs.</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('pagewood5') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('pagewood4') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/dahlia.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('pagewood4') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Pagewood - Dahlia</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Dahlia - a place where luxurious and oversized interiors exist in harmony among cool green spaces.</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('pagewood4') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('kiaraMascot') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/kiara.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('kiaraMascot') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Mascot - Kiara</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">KIARA presents 233 apartments in three boutique residential towers rising 13 levels, with inner city skyline views.</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('kiaraMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('spectrumMascot') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/spectrum.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('spectrumMascot') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Mascot - Spectrum</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Arrive home to a grand, north facing 1,200 sqm central park lined with trees, native plants, and leafy walkways linking each of the buildings.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('spectrumMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;" >
          <a href="{{ route('thegalleryRosebery') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/theGalleryCoCo.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('thegalleryRosebery') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Roseberry - CoCo</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Coco Collection, luxury resort-style living within the stylish heart of Roseberry, paces from Green Sqaure's Gunyama Park and Aquatic Centre.</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryRosebery') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('thegalleryMint') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/theGalleryMint.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('thegalleryMint') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Roseberry - Mint</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Mint Collection, the first release within 'The Gallery'. Created by SJB, two masterpiece buildings with lush green space on the ground and in the skies.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryMint') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;" >
          <a href="{{ route('thegalleryPolo') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/theGalleryPolo.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('thegalleryPolo') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Roseberry - Polo</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; ">Introducing Polo Collection, luxury resort-style living in Roseberry's vibrant heart.</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryPolo') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4"  style="padding-top:50px;">
          <a href="{{ route('parkSydney') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/parkSydney.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('parkSydney') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Erskineville</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Make it a part of the city <br> Make it your space to read</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('parkSydney') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('eden') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/south/edenCathrineField.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('eden') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">CatherineField</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Stylish interiors offering three preselected colour schemes
            <br>20mm reconstituted stone kitchen bench with waterfall edges</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('eden') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <div class="col-lg-4" style="padding-top:50px;" >
           <a href="{{ route('botany') }}"> <img class="w3-circle" src="{{ URL::asset('/img/sydney/south/botany.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('botany') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Botany</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Clean, Green and Causing A Scene: This is Botany.</p> <br><br>
            <p><a class="btn btn-secondary" href="{{ route('botany') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

	</div>
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
