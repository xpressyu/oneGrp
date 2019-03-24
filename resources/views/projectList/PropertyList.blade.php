<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="{{ asset('/css/newCSS/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/css/newCSS/fancybox/jquery.fancybox.css') }}" rel="stylesheet"> 
<link href="{{ asset('/css/newCSS/flexslider.css') }}" rel="stylesheet" />
<!-- Vendor Styles -->
<link href="{{ URL::asset('/css/newCSS/magnific-popup.css') }}" rel="stylesheet"> 
<!-- Block Styles -->
<link href="{{ asset('css/newCSS/style.css') }}" rel="stylesheet" />
<link href="{{ asset('/css/newCSS/gallery-1.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
                            <li><a href="{{route('sydney')}}">Sydney</a></li>
                            <li><a href="{{ route('list') }}">Developers</a></li>
                            
                        </ul>
                    </li>
						<li><a href="{{ route('company')}}">Our Company</a></li> 
                        <li><a href="{{ route('staff') }}">Staff</a></li>
                        <li><a href="{{ route('social') }}">Event</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline" style="padding-top:100px; background-image: url('/img/newHome/slides/1.jpg');" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Welcome to Sydeny</h2>
			</div>
		</div>
	</div>
	</section>

<section id="gallery-1" class="content-block section-wrapper gallery-1" style="paddint-top:50px;">
    	 	<div class="container">

	
            <!-- deicorp -->
            <div class="row" style="padding-top:50px;">
                <div id="isotope-gallery-container">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/property/frasers.jpg') }}" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('frasers')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                              <a href="{{route('frasers')}}"> <h3 style="color:#F1C108; font-weight: bold;">Frasers </h3></a>
                            	</div>
                            	<div class="editContent">
                                    <br>
	                                <p style="font-family: Times New Roman;color:#1e3e49; text-align: justify; width:350px;">We're one of Australia's leading diversified property groups and operations in five states of Australia.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial gated">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/property/meriton.jpg') }}" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('meriton')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                <a href="{{route('meriton')}}">	<h3 style="color:#F1C108; font-weight: bold;">Meriton</h3></a>
                            	</div>
                            	<div class="editContent">
                                <br>
                                	<p style="font-family: Times New Roman;color:#1e3e49; text-align: justify; width:350px;">For over 50 years, Meriton Group has grown to become Australia’s largest and most successful residential developer</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper housing apartments">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/property/metro.png') }}" class="img-responsive" alt="3rd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('metro')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                <a href="{{route('metro')}}">	<h3 style="color:#F1C108; font-weight: bold;">Metro</h3></a>
                            	</div>
                            	<div class="editContent">
                                <br>
                                	<p style="font-family: Times New Roman;color:#1e3e49; text-align: justify; width:350px;">Metro Property Development is the embodiment of the quintessential Australian success story.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper villas commercial" style="padding-top:50px;">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/property/greenland.jpg') }}" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('greenland')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                <a href="{{route('greenland')}}">	<h3 style="color:#F1C108; font-weight: bold;">Greenland</h3></a>
                            	</div>
                            	<div class="editContent">
                                <br>
                                	<p style="font-family: Times New Roman;color:#1e3e49; text-align: justify ; width:350px;">Greenland Holdings Group has ranked number one on the recently published Forbes 2018 Global Growth Champions list.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial" style="padding-top:50px;">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/property/deicorp-1.jpg') }}" class="img-responsive" alt="5th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('deicorp')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                              <a href="{{route('deicorp')}}">	<h3 style="color:#F1C108; font-weight: bold;">Deicorp</h3></a>
                            	</div>
                            	<div class="editContent">
                                <br>
                                	<p style="font-family: Times New Roman;color:#1e3e49; text-align: justify; width:350px;">Deicorp is a well-known and highly respected. Builder/Developer that has been successfully operating for almost two decades.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas" style="padding-top:50px;">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/property/bm.png') }}" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('bm')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                              <a href="{{route('bm')}}">	<h3 style="color:#F1C108; font-weight: bold;">Boston Marketing</h3></a>
                            	</div>
                            	<div class="editContent">
                                <br>
                                <p style="font-family: Times New Roman;color:#1e3e49; text-align: justify; width:350px;">The team at Boston Marketing has worked with some of Australia’s leading property developers.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->  
	</div>
    <div class="down" style="background-color: #000000 ">

<p style="color: aliceblue ; width: 900px; padding-left:27%;">One Group Global Investment Pty Ltd&copy;
<br>Ground Floor Level 6,201 Kent Street Sydney NSW 2000
<br> D: + 61 29019 1889  &nbsp &nbsp    M: 0413384119
<br> E: fiona@onegroupglbal.com.au  &nbsp info@onegroupglobal.com.au
</p>
</div>
	</div>
 
   


    <a href="{{ route('SEND_EMAIL') }}" class="float">
<i class=" my-float">
<img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
</i>
</a><!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('js/newJS/jquery.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.easing.1.3.js')}}"></script>
<script src="{{ URL::asset('js/newJS/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.fancybox.pack.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.fancybox-media.js') }}"></script>  
<script src="{{ URL::asset('js/newJS/jquery.flexslider.js') }}"></script>
<!-- Vendor Scripts -->
<script src="{{ URL::asset('js/newJS/modernizr.custom.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.isotope.min.js') }}"></script>
<script src="{{ URL::asset('js/newJS/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ URL::asset('js/newJS/animate.js') }}"></script>
<script src="{{ URL::asset('js/newJS/custom.js')}}"></script>
 
</body>
</html>