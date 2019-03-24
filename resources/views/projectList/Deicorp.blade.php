
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Deicorp</title>
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
<div class="imgRoll" style="padding-top:80px; width: 100%">
<img class="mySlides" src="{{ URL::asset('/img/develop-logo/deicorp.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/J002470_Petersham_AerialMap_FA.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/deicorp/highlineA1/Highline_RoofGarden_15k_HR.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Close_Up_View.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/deicorp/tntApa/TNT-REDFERN_BALCONY-1010x570.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-04.jpg') }}" style="width:100%">	

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


<h1 style="padding-left:35%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Developer-Deicorp</h1>
<section id="content">
	<div class="container">
	
						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49;"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h2 style="color: #1e3e49;"><span class="coloured">Developer:</span>Deicorp </h2> 
                  <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Founded in 1999, Deicorp has been operating as a privately-owned property development and construction group for residential, commercial and retail real estate.<br>
                  <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> Deicorp </span>first entered the Sydney development scene in the trendy suburb of Newtown with a 3 storey residential development. 
                  Today, Deicorp has developed and working on <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">over 6,000 apartments, 110,000sqm </span>of retail/commercial suites and has <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">over $1.5 billion </span> of work in the pipeline. Serving as testament to Deicorp’s experience is an incredibly diligent management team, dedicated employees and united partnerships.
                 A clear and shared vision of Ambition, Quality, Efficiency and Professionalism is the driving force behind the company’s success. Deicorp – Built to deliver. </p>
                </div>  
                <img src="{{ URL::asset('/img/develop-logo/deicorpInfor.png') }}" style="width:100%" >
							</div>
						</div> 
						
	</div>
	</section>	
 <div class="row" style="width:100%; padding-top: 50px;  padding-left: 100px">
 <div class="col-lg-4">
      <a href="{{ route('grandH') }}"><img class="w3-circle"  src="{{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Close_Up_View.jpg') }}" width="240" height="240"></a>
      <a href="{{ route('grandH') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">GrandH</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">In Hurstvtille’s coveted city centre stands a new residential showpiece  worthy of Sydney’s Southern Capital.</p> <br>
          <p><a class="btn btn-secondary" href="{{ route('grandH') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
      <a href="{{ route('highline') }}"><img class="w3-circle" src="{{ URL::asset('/img/deicorp/highlineA1/Highline_RoofGarden_15k_HR.jpg') }}" width="240" height="240"></a>
      <a href="{{ route('highline') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Highline</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Inspired by The High Line, New York’s urban masterpiece,  Highline Westmead’s master-planned residential
                    community is unlike anything Western Sydney has ever seen. </p>
            <p><a class="btn btn-secondary" href="{{ route('highline') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
      <a href="{{ route('southVillage') }}"><img class="w3-circle" src="{{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-07.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
      <a href="{{ route('southVillage') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">South Village</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Set in the idyllic surrounds of the Sutherland Shire, South Village is poised to bring a new and unique
                community into sydney's South.
            </p> <br>
            <p><a class="btn btn-secondary" href="{{ route('southVillage') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="padding-top:50px;">
      <a href="{{ route('theSiding') }}"><img class="w3-circle" src="{{ URL::asset('img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_EXT_Cutaway.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
      <a href="{{ route('theSiding') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Silding</h2></a>
            <p style=" font-family: Times New Roman; color: #1e3e49; text-align: justify ;">The Siding stands out as Petersham’s newest precinct. Teeming with greenery and life, </p> <br>
          <p><a class="btn btn-secondary" href="{{ route('theSiding') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
  <div class="col-lg-4"  style="padding-top:50px;">
       <a href="{{ route('theSiding') }}"><img class="w3-circle"  src="{{ URL::asset('/img/deicorp/tntApa/Lawson_Living_View04Scheme04_R5_crop.jpg') }}" width="240" height="240"></a>
       <a href="{{ route('theSiding') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The TNT</h2></a>
                <p style=" font-family: Times New Roman; color: #1e3e49; text-align: justify ;">As the former headquarters of the TNT company, these two iconic
                        buildings have been a part of the city skyline since the 1970s. </p><br>
                <p><a class="btn btn-secondary" href="{{ route('tntApa') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->


            </div><!-- /.row -->



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
