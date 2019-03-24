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
<img class="mySlides" src="{{ URL::asset('/img/sydney/east/lighthouse.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/sydney/east/omnia.jpg') }}" style="width:100%">	
<img class="mySlides" src="{{ URL::asset('/img/sydney/east/theNines.jpg') }}"  style="width:100%">	
	
 
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

<h1 style="padding-left:40%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; ">Sydney-East</h1>
<div class="row" style="width:100%; padding-top: 50px; padding-left: 30px">
<div class="col-lg-4">
<a href="{{ route('lighthouse') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/east/lighthouse.jpg') }}" width="240" height="240"></a>
<a href="{{ route('lighthouse') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Lighthouse</h2></a>
    <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Right in the heart of Dee Why’s town centre transformation and only 800m from Dee Why Beach, Lighthouse is a new architectural landmark soaring high above the surrounding streetscape.</p>
            <p><a class="btn btn-secondary" href="{{ route('lighthouse') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
 <a href="{{ route('omnia') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/east/omnia.jpg') }}" width="240" height="240"></a>
 <a href="{{ route('omnia') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">Omnia</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">With the beautifully wrapped edges, this remarkable buiding can be admired from any angle.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('omnia') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
 <a href="{{ route('theNinesNaremburn') }}"><img class="w3-circle" src="{{ URL::asset('/img/sydney/east/theNines.jpg') }}" alt="Generic placeholder image" width="240" height="240"></a>
 <a href="{{ route('theNinesNaremburn') }}"><h2 style=" font-family: Times New Roman; color: #1e3e49;">The Nines Naremburn</h2></a>
            <p style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Curated to the very last detail with space for the family to gather — this is where meals become memories.</p><br>
            <p><a class="btn btn-secondary" href="{{ route('theNinesNaremburn') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
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