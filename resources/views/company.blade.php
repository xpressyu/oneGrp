<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MyHome</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- css -->
<link href="{{ asset('css/newCSS/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/newCSS/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ asset('css/newCSS/flexslider.css') }}" rel="stylesheet" />
<link href="{{ asset('css/newCSS/style.css') }}" rel="stylesheet" />
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
    <!-- end header -->
	<section id="inner-headline" style="padding-top:100px; background-image: url('/img/newHome/slides/1.jpg');" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12" >
				<h2 class="pageTitle">The BEST Purchase Price in the Market</h2>
			</div>
		</div>
	</div>
	</section>

	<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">
					<img src="{{ URL::asset('/img/newHome/slides/Ourcompany.png') }}" alt="showcase image">
				</div>
				<div class="col-md-6">
					<div class="about-text">
						<h2 style="color: #1e3e49; "><span class="coloured">About</span> ONE GROUP</h2>
						<p style="font-size: 18px; font-family: Times New Roman; color: #1e3e49; text-align: justify ; line-height:200%" > <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">ONE GROUP GLOBAL INVESTMENT PTY LTD </span> is a premium, Professional, Prestigious Property Investment Consulting Company based in Sydney CBD.
            We only work with the <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> BEST</span> Developers, the<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> BEST</span> Projects with the
            <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">BEST</span> Price in the  <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">BEST</span> Location .
					  To build your wealth fast through Secure, <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">Effective </span> and <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">Efficient </span> property investment activities in order to achieve Financial Freedom.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">

					<div class="about">


						<div class="row">
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3 style="color: #1e3e49;"><span>Why Choose Us?</span></h3>
								</div>
								<p style="color: #1e3e49;">We Contribute <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">1% of our Time</span> to local Communities. <br/><br/>We contribute <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">1% of our Profit</span> to local Communities.<br/><br/>We contribute <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">1% of our Product</span> to local Communities</p>
							</div>
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3 style="color: #1e3e49;"><span>One Group, One Vision</span></h3>
								</div>
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel" >
									<!-- Panel heading -->
									 <div class="panel-heading" style="color: #1e3e49;">
										<h4 class="panel-title" >
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3" style="color: #1e3e49;">
											<i class="fa fa-angle-right"></i> WHO WE ARE
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body" style="color: #1e3e49;">
										  ONE GROUP GLOBAL INVESTMENT PTY LTD is a premium, professional, prestigious property investment consulting company based in Sydney CBD. We only work with the BEST developers, the BEST projects with the Best price in the BEST location.
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading" >
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3" style="color: #1e3e49;">
											<i class="fa fa-angle-right" ></i> WHAT WE DO
										  </a>
										</h4>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body" style="color: #1e3e49;">
										 To build your wealth fast through Secure, Effective and Efficient property investment activities in order to achieve Financial Freedom
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3" style="color: #1e3e49;">
											<i class="fa fa-angle-right"></i>  HOW WE DO
										  </a>
										</h4>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body" style="color: #1e3e49;">
										ONE GROUP of Professionals work and assist with each client providing ONE STOP 360 SERVICE to secure each investment property purchase and sell.
										<br>
										<br> - Customise Individual Property Investment Analyses and Solutions
										<br> - Assist Financial Advise Services
										<br> - Provide Legal Services and Support
										<br> - Property Management
										</div>
									 </div>
								  </div>

								</div>
								<!-- Accordion ends -->

							</div>

							<div class="col-md-4">
								<div class="block-heading-two">
									<h3 style="color: #1e3e49;"><span>Our Expertise</span></h3>
								</div>
								<h6>Consaltation</h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">100% Complete (success)</span>
								  </div>
								</div>
								<h6>Financial Services</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">100% Complete (success)</span>
								  </div>
								</div>
								<h6>Legal Adivce</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">100% Complete (success)</span>
								  </div>
								</div>
								<h6>Property Management</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
									 <span class="sr-only">100% Complete (success)</span>
								  </div>
								</div>
							</div>

						</div>


						<!-- Our team ends -->


					</div>

				</div>
	</section>
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
<script src="{{ URL::asset('js/newJS/jquery.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.easing.1.3.js')}}"></script>
<script src="{{ URL::asset('js/newJS/bootstrap.min.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.fancybox.pack.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.fancybox-media.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.flexslider.js')}}"></script>
<script src="{{ URL::asset('js/newJS/animate.js')}}"></script>
<!-- Vendor Scripts -->
<script src="{{ URL::asset('js/newJS/modernizr.custom.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.isotope.min.js')}}"></script>
<script src="{{ URL::asset('js/newJS/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ URL::asset('js/newJS/animate.js') }}"></script>
<script src="{{ URL::asset('js/newJS/custom.js') }}"></script>
</body>
</html>
