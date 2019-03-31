<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Meriton</title>
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
<img class="mySlides" src="{{ URL::asset('/img/develop-logo/meriton.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/meriton/thegalleryRosebery/HeroExterior.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/meriton/altitudeParramatta/AltitudeRiverbankRender.jpeg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/meriton/aquaRhodes/Aqua_Watrerside_5_1920X803-1920x800.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/meriton/botaniaOlympicP/BuildingAandB.jpg') }}" style="width:100%">


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
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}

</script>

<h1 style="padding-left:30%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Developer-Meriton</h1>
<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49;">
							<div class="col-md-12">
								<div class="about-logo">
									<h2 style="color: #1e3e49;"><span class="coloured">Developer:</span>Meriton</h2>
                  <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;"><span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">  Meriton</span> is <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Australia's largest apartment developer</span> and also the country's biggest residential home builder founded by <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Harry Triguboff AO</span>, its managing director,<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">  in 1963</span>.
                  Meriton sells apartments and also operates serviced apartments accommodation under its Meriton Suites brand<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">  in Sydney</span>, <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Brisbane</span> and the <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Gold Coast</span>.</p>
                </div>

							</div>
						</div>

	</div>
	</section>

<div class="row" style="width:100%; padding-top: 50px;  padding-left: 100px">
          <div class="col-lg-4">
          <a href="{{ route('pagewood5') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/pagewood5Allium/PagewoodExterior.jpg') }}" width="240" height="240"></a>
          <a href="{{ route('pagewood5') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Allium,Pagewood Green</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Pagewood Green is poised to offer a unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs.</p>
            <p><a class="btn btn-secondary" href="{{ route('pagewood5') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('altitudeParramatta') }}">  <img class="w3-circle" src="{{ URL::asset('/img/meriton/altitudeParramatta/AltitudeRiverbankRender.jpeg') }}" width="240" height="240"></a>
          <a href="{{ route('altitudeParramatta') }}">  <h2 style=" font-family: Times New Roman; color: #1e3e49;">Altitude,Parramatta</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">A new height in luxury begins at the perfect Altitude.</p><br><br><br><br>
            <p><a class="btn btn-secondary" href="{{ route('altitudeParramatta') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <a href="{{ route('aquaRhodes') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/aquaRhodes/Aqua_Watrerside_5_1920X803-1920x800.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
          <a href="{{ route('aquaRhodes') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Aqua,Rhodes</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Reaching out to the waterfront, Aqua’s remarkable setting is inspirational whatever the time of year.</p><br><br><br>
            <p><a class="btn btn-secondary" href="{{ route('aquaRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('botania') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/botaniaOlympicP/BuildingAandB.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('botania') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Botania,Sydney Olympic Park</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Just 15kms West of Sydney CBD and minutes from world-class sporting and entertaining facilities, BOTANIA will complement Sydney Olympic Park’s reputation as an emerging neighbourhood and investment hotspot.</p>
            <p><a class="btn btn-secondary" href="{{ route('botania') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('pagewood4') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_ExteriorHero.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('pagewood4') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Dahlia,Pagewood New Numbers</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Dahlia - a place where luxurious and oversized interiors exist in harmony among cool green spaces.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('pagewood4') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('escada') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/escadaORiordan/HeroExteriorDuskLOWRES.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('escada') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Escada, O'Riordan</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">CBD and the domestic and international airports, Mascot is a vibrant lifestyle hub where the culinary and retail scene is one of Sydney’s most visited hotspots.</p><br><br><br><br>
            <p><a class="btn btn-secondary" href="{{ route('escada') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('kiaraMascot') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/kiaraMascot/1920px_JJG_1999.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('kiaraMascot') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Kiara, Mascot</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">KIARA presents 233 apartments in three boutique residential towers rising 13 levels, with views over the inner city skyline.</p>
            <p><a class="btn btn-secondary" href="{{ route('kiaraMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"  style="padding-top:50px;">
            <a href="{{ route('lighthouse') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/lighthouseDeeW/Lighthouse-Cutaway_1920x800.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('lighthouse') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Lighthouse, DeeWhy</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Right in the heart of Dee Why’s town centre transformation and only 800m from Dee Why Beach, Lighthouse is a new architectural landmark soaring high above the surrounding streetscape.</p>
            <p><a class="btn btn-secondary" href="{{ route('lighthouse') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"  style="padding-top:50px;">
            <a href="{{ route('riverviewRhodes') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/riverviewRhodes/ThePeninsula-externals-07.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('riverviewRhodes') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Riverview, Rhodes</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">In a premium location opposite Mill Park, Riverview is the only north facing waterfront residence on the Rhodes Peninsula.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('riverviewRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"  style="padding-top:50px;">
            <a href="{{ route('spectrumMascot') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/spectrumMascot/Podium.jpg') }}" width="240" height="240"></a>
            <a href="{{ route('spectrumMascot') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">Spectrum, Mascot</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Arrive home to a grand, north facing 1,200 sqm central park lined with trees, native plants, and leafy walkways linking each of the buildings.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('spectrumMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('thegalleryRosebery') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/thegalleryRosebery/HeroExterior.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('thegalleryRosebery') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Gallery Coco, Rosebery</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Coco Collection, luxury resort-style living within the stylish heart of Roseberry, paces from Green Sqaure's Gunyama Park and Aquatic Centre.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryRosebery') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('thegalleryMint') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/thegalleryMintRosebery/MERITON_ROSEBERY_VIEW2_04.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('thegalleryMint') }}"> <h2 style=" font-family: Times New Roman; color: #1e3e49;">The Gallery Mint, Rosebery</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Mint Collection, the first release within 'The Gallery'. Created by SJB, two masterpiece buildings with lush green space on the ground and in the skies.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryMint') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('thegalleryPolo') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/thegalleryPoloRosebery/DexusPhase3-TheGallery-Exterior-Edited.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('thegalleryPolo') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Gallery Polo,Rosebery</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Introducing Polo Collection, luxury resort-style living in Roseberry's vibrant heart.</p><br><br>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryPolo') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('theRetreat') }}"><img class="w3-circle" src="{{ URL::asset('/img/meriton/theRetreatOlympicP/Cut-away.jpg') }}" width="240" height="240"></a>
            <a href="{{ route('theRetreat') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Retreat,Sydney Olympic Park</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Soaring 22 storeys alongside idyllic landscaped parklands,  The Retreat will be home to an unrivalled collection  of 278 oversized apartments crowned by split-level luxury penthouses and superbly crafted townhouses below.</p>
            <p><a class="btn btn-secondary" href="{{ route('theRetreat') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4" style="padding-top:50px;">
            <a href="{{ route('vidaMascot') }}"> <img class="w3-circle" src="{{ URL::asset('/img/meriton/vidaMascot/VIDA-EXT-HIGH-RES_MEG006-V01A-A-683x1024.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
            <a href="{{ route('vidaMascot') }}"> <h2  style=" font-family: Times New Roman; color: #1e3e49;">Vida,Mascot</h2></a>
            <p  style=" font-family: Times New Roman; color: #1e3e49;">VIDA, the first release of luxury apartments in Meriton’s Platinum Collection, will showcase carefully planned and designed boutique buildings with the highest quality of finishes and fixtures.</p><br><br><br>
            <p><a class="btn btn-secondary" href="{{ route('vidaMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

	</div>
<!-- footer -->
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
