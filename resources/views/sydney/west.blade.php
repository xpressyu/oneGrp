<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>West</title>
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
<img class="mySlides" src="{{ URL::asset('/img/sydney/west/highline.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/west/theSiding.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/west/melrosePark.jpg') }}"  style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/west/altitude.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/west/aqua.jpg') }}"  style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/sydney/west/riverview.jpg') }}"  style="width:100%">

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

<h1 style="padding-left:40%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Sydney-Western</h1>
<div class="row" style="width:100%; padding-top: 50px; padding-left: 30px">
<div class="col-lg-4">
            <a href="{{ route('highline') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/highline.jpg') }}" width="240" height="240"></a>
            <a href="{{ route('highline') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Highline</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Inspired by The High Line, New York’s urban masterpiece,  Highline Westmead’s master-planned residential
             community is unlike anything Western Sydney has ever
                    seen.</p>
            <p><a class="btn btn-secondary" href="route('highline')" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" >
          <a href="{{ route('theSiding') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/theSiding.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('theSiding') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Siding</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">The Siding stands out as Petersham’s newest
                    precinct. Teeming with greenery and life.</p><br>
            <p><a class="btn btn-secondary" href="{{route('theSiding')}}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" >
          <a href="{{ route('melrosePark') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/melrosePark.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('melrosePark') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Melrose Park</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Celcbrating a multi-faceted and multi-cultural lifestyle, Melrose park will excite, inspire and connect.</p> <br>
            <p><a class="btn btn-secondary" href="{{ route('melrosePark') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('altitudeParramatta') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/altitude.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('altitudeParramatta') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Altitude</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Altitude-Parramatts. A new height in luxury begins at the perfect Altitude.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('altitudeParramatta') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('aquaRhodes') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/aqua.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('aquaRhodes') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Aqua-Rhodes</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Reaching out to the waterfront, Aqua’s remarkable setting is inspirational whatever the time of year. Flowing indoor–outdoor designs let you enjoy the breathtaking vistas from the comfort of your beautifully–appointed home.</p>
            <p><a class="btn btn-secondary" href="{{ route('aquaRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('botania') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/botania.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('botania') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Botania</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Just 15kms West of Sydney CBD and minutes from world-class sporting and entertaining facilities, BOTANIA will complement Sydney Olympic Park’s reputation as an emerging neighbourhood and investment hotspot.</p>
            <p><a class="btn btn-secondary" href="{{ route('botania') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('riverviewRhodes') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/riverview.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('riverviewRhodes') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Riverview</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">In a premium location opposite Mill Park, Riverview is the only north facing waterfront residence on the Rhodes Peninsula.</p> <br><br>
            <p><a class="btn btn-secondary" href="{{ route('riverviewRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theRetreat') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/theRetreat.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('theRetreat') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;" >The Retreat</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Soaring 22 storeys alongside idyllic landscaped parklands,  The Retreat will be home to an unrivalled collection  of 278 oversized apartments crowned by split-level luxury penthouses and superbly crafted townhouses below.</p>
            <p><a class="btn btn-secondary" href="{{ route('theRetreat') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('lg') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/lg.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('lg') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">LG</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">A choice of Stylish apartment designed for Village style living in the heart of Sydeny.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('lg') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('silkTerraces') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/silkTerraces.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('silkTerraces') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">SilkTerraces</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Well-know as both an Investment Hot Spot and A Desirable Lifestyle Address.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('silkTerraces') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('theCCJordan') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/theCreationCollectionJodanSprings.png') }}" width="240" height="240"></a>
          <a href="{{ route('theCCJordan') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Creation Collection</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Positioned just 1km east of the established Jordan Springs Community.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('theCCJordan') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4"  style="padding-top:50px;">
          <a href="{{ route('theCCClaymore') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/theCreationCollectionClaymore.jpg') }}"  width="240" height="240"></a>
          <a href="{{ route('theCCClaymore') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Creation Collection</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">The Creation Collection" is a limited selection of well-appointed double story, terrace residences, located centrally within the Claymore Community.</p>
            <p><a class="btn btn-secondary" href="#" role="{{ route('theCCClaymore') }}" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
           <div class="col-lg-4" style="padding-top:50px;">
           <a href="{{ route('fairway') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/fairwayResidence.jpg') }}" width="240" height="240"></a>
           <a href="{{ route('fairway') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Fairway Residences</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Established community aspects are within easy reach, perfect for young professionals, growing families, down-sizing retirees or astute investors.</p>
            <p><a class="btn btn-secondary" href="{{ route('fairway') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4"  style="padding-top:50px;">
          <a href="{{ route('leppington') }}"> <img class="w3-circle" src="{{ URL::asset('/img/sydney/west/leppingtonliving.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('leppington') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Leppington living</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">connected community in the south-east corner of leppington.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('leppington') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4" style="padding-top:50px;">
          <a href="{{ route('escada') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/west/escadaORiordan.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('escada') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Escada O'Riordan</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">CBD and the domestic and international airports, Mascot is a vibrant lifestyle hub where the culinary and retail scene is one of Sydney’s most visited hotspots.</p>
            <p><a class="btn btn-secondary" href="{{ route('escada') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
    </div>
    <footer>
	<div class="container">
		<div class="row">


	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="copyright">
						<p>
							Copyright &copy; 2019. ONE GROUP GLOBAL INVESTMENT PTY LTD
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
		</div>
			</div>
	</footer>

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
