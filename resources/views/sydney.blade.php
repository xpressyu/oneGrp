<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sydney</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> --}}
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
        <p class="pull-right"><i class="fa fa-phone"></i>(+61) 413 384 119</p>      </div>
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
                        <li class="active"><a href="{{ route('welcome') }}" style="font-weight:bold;">Home</a></li>
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
	<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49;">
							<div class="col-md-12">
								<div class="about-logo">
									<h2 style="color: #1e3e49;"><span class="coloured">The Best</span> Projects in Sydney</h2>
									<p style="font-size: 18px; font-family: Times New Roman; color: #1e3e49; text-align: justify ; ">Sydney, is the capital city of New South Wales; is Australia's most populated city. Spectacularly draped around its glorious harbour and beaches.
                                    Recently ranked as the<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> No. 10 in Mercer’s 2018 list</span> of most liveable cities in the world. Sydney continues to grow in popularity, each year almost 20 million visitors and immigrants stay in the harbour city. And each day
                                    more than 600,000 visitors come into the city and the inner city to see the sights, shop and explore. With the population of this sprawling metropolis predicted to top 5 million this year. </p>
								</div>
							</div>
						</div>

	</div>
	</section>
			  <!-- Start Gallery 1-2 -->
    	 	<!-- <div class="container">

			<div class="editContent">
	            <ul class="filter">
					<li class="active" >
                    <a href="{{route('north')}}" style="font-size: 25px;">North</a></li>
	                <li><a href="{{route('south')}}"style="font-size: 25px;">South</a></li>
	                <li><a href="{{route('west')}}"style="font-size: 25px;" >West</a></li>
	                <li><a href="{{route('east')}}" style="font-size: 25px;">East</a></li>

	            </ul>
			</div>
		</div> -->
	</section>
            <!-- /.gallery-filter -->


<div class="w3-content w3-display-container" style="padding-left: 300px;">
            <div class="row" >
                <div id="isotope-gallery-container">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">
                    <div class="gallery-details">
                            	<div class="editContent" style="padding-left:40%;">
	                                <a href="{{route('north')}}"><h3 style="color:#F1C108; font-weight: bold;">North</h3></a>
                            	</div>
                            </div>
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/newHome/north.jpg') }}" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('north')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>

                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial gated">
                        <div class="gallery-item">
                        <div class="editContent" style="padding-left:40%;">
									<a href="{{route('south')}}"><h3 style="color:#F1C108; font-weight: bold;">South</h3></a>
                            	</div>
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/newHome/sourth.jpg') }}" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('south')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">


                            </div>
                        </div>
                    </div>

				</div>

<!-- second line-->
                    <div id="isotope-gallery-container-1">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper apartments villas">
                    <div class="gallery-details">
                            	<div class="editContent" style="padding-left:40%;">
									<a href="{{route('west')}}"> <h3 style="color:#F1C108; font-weight: bold;">West</h3></a>
                            	</div>
                            </div>
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/newHome/western.jpg') }}" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
<!--                                <a href="img/western.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>-->
                                <a href="{{route('west')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>

                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper commercial gated">

                        <div class="gallery-details">
                            	<div class="editContent"  style="padding-left:40%;">
									<a href="{{route('east')}}"><h3 style="color:#F1C108; font-weight: bold;">East</h3></a>
                            	</div>

                            </div>
                            <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ URL::asset('/img/newHome/east.jpg') }}" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{route('east')}}" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>

                        </div>
                    </div>

				</div>

            </div>

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
