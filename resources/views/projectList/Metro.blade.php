<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Metro</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="w3-circle" />
<meta name="author" content="w3-circle" />



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
<img class="mySlides" src="{{ URL::asset('/img/develop-logo/metro.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/silkTerracesSchofields/154043896697811407-rsc.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/sierraResidencesKellyville/1.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/edenCatherineField/1.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/theCCJordanSprings/p1.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/theNinesNaremburn/n-vHSwkE.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/LEfiMf_8.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/theGables/T1.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/leppington/B51aVV6.jpg') }}" style="width:100%">




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
    dots[i].className = dots[i].className.replace(" w3-white", "w3-circle");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}

</script>


<h1 style="padding-left:30%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Developer-Metro</h1>

<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49;">
							<div class="col-md-12">
								<div class="about-logo">
									<h2 style="color: #1e3e49;"><span class="coloured">Developer:</span>Metro</h2>
                  <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"> <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Metro's</span> rapid ascendancy owes much to the collective expertise of its Directors -<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Luke Hartman, David Devine and Ken Woodley</span>.
                    Prior to establishing Metro, the trio were responsible for growing Devine Limited - a little known house and land company - to an ASX Listed, <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Top 500 organisation </span>and builder of homes for<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">  more than 25,000 </span>Australians.</p>
                    <!-- <img src="{{ URL::asset('/img/develop-logo/metroInfor.png') }}" style="width:100%" > -->
                  </div>

							</div>
						</div>

	</div>
  </section>

<div class="row" style="width:100%; padding-top: 50px;  padding-left: 100px">
          <div class="col-lg-4">
          <a href="{{ route('silkTerraces') }}"> <img class="w3-circle" src="{{ URL::asset('/img/metro/silkTerracesSchofields/154043896697811407-rsc.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('silkTerraces') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Silk Terraces, Schofields</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Well-know as both an Investment Hot Spot and A Desirable Lifestyle Address.</p> <br>
          <p><a class="btn btn-secondary" href="{{ route('silkTerraces') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('sierraResidence') }}"><img class="w3-circle" src="{{ URL::asset('/img/metro/sierraResidencesKellyville/2.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('sierraResidence') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Sierra Residences Kellyville</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Sierra Residences delivers a limited collection of boutique house and land packages in one of the North-West’s booming centres of growth.</p>
            <p><a class="btn btn-secondary" href="{{ route('sierraResidence') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('eden') }}"> <img class="w3-circle" src="{{ URL::asset('/img/metro/edenCatherineField/1.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('eden') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Eden,Catherine Field</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">stylish interiors offering three preselected colour schemes<br>
                20mm reconstituted stone kitchen bench with waterfall edges</p>
            <p><a class="btn btn-secondary" href="{{ route('eden') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theCCJordan') }}"> <img class="w3-circle" src="{{ URL::asset('/img/metro/theCCJordanSprings/p1.png') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('theCCJordan') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">The Creation Collection, Jordan Spring</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Positioned just 1km east of the established Jordan Springs Community</p>
            <p><a class="btn btn-secondary" href="{{ route('theCCJordan') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theCCClaymore') }}"> <img class="w3-circle" src="{{ URL::asset('/img/metro/theCCClaymore/J-ywgh6A.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('theCCClaymore') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">The Creation Collection,Claymore</h2></a>
            <p  style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">The Creation Collection" is a limited selection of well-appointed double story, terrace residences, located centrally within the Claymore Community.</p>
            <p><a class="btn btn-secondary" href="{{ route('theCCClaymore') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theNinesNaremburn') }}">  <img class="w3-circle" src="{{ URL::asset('/img/metro/theNinesNaremburn/n-vHSwkE.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('theNinesNaremburn') }}">  <h2 style=" font-family: Times New Roman; color: #1e3e49;">The Nines,Naremburn</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Curated to the very last detail with space for the family to gather — this is where meals become memories.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('theNinesNaremburn') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
             <div class="col-lg-4" style="padding-top:50px;">
             <a href="{{ route('fairway') }}">  <img class="w3-circle" src="{{ URL::asset('/img/metro/fairwayResidence/LEfiMf_8.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
             <a href="{{ route('fairway') }}">   <h2 style=" font-family: Times New Roman; color: #1e3e49;">Fairway Residences Starthfield</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Established community aspects are within easy reach, perfect for young professionals, growing families, down-sizing retirees or astute investors.</p>
            <p><a class="btn btn-secondary" href="{{ route('fairway') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('theGables') }}"><img class="w3-circle" src="{{ URL::asset('/img/metro/theGables/T1.png') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('theGables') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Gables-Precinct H, BoxHill</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">True value in construction is a result of outstanding quality, at an affordable price.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('theGables') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('orchard') }}"> <img class="w3-circle" src="{{ URL::asset('/img/metro/orchard/mGGcJ9Pq.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('orchard') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Orchard Heights, Spring </h2></a>
          <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Within a welcoming community and recreational paradise, Orchard Heights offers the perfect fusion of rural tranquillity and urban vibrancy.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('orchard') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('leppington') }}"> <img class="w3-circle" src="{{ URL::asset('/img/metro/leppington/B51aVV6.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('leppington') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Leppington living,Leppington </h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">connected community in the south-east corner of leppington.</p>
            <p><a class="btn btn-secondary" href="{{ route('leppington') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
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
