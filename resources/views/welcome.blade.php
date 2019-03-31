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

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                            <li><a href="{{ route('sydney') }}">Sydney</a></li>
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
	<section id="banner">

	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{ URL::asset('/img/newHome/new1.jpg') }}" alt="" />
                <div class="flex-caption">
                    <h3>ONE GROUP</h3>

                </div>
              </li>
              <li>
                <img src="{{ URL::asset('/img/newHome/new2.jpg') }}" alt="" />
                <div class="flex-caption">
                    <h3>ONE VISION</h3>

                </div>

              </li>
            </ul>
        </div>
	<!-- end slider -->

	</section>


	<section id="content">
	<div class="container">
			<div class="row">
		<div class="skill-home"> <div class="skill-home-solid clearfix">
		<div class="col-md-3 col-sm-6 text-center">
		<span class="icons c1"><i class="fa fa-address-card"></i></span> <div class="box-area">
		<h3>Who We Are</h3> <p style="text-align: justify">ONE GROUP GLOBAL INVESTMENT PTY LTD is a premium, Professional, Prestigious Property Investment Consulting Company based in Sydney CBD. We ONLY work with the BEST Developers, the BEST Projects with the Best Price in the BEST Location.</p></div>
		</div>
		<div class="col-md-3 col-sm-6 text-center">
		<span class="icons c2"><i class="fa fa-trophy"></i></span> <div class="box-area">
		<h3>What We Do</h3> <p style="text-align: justify">To build your WEALTH fast through Secure, Effective and Efficient Property Investment activities in order to achieve Financial Freedom. <br><br><br><br> </p></div>
		</div>
		<div class="col-md-3 col-sm-6 text-center">
		<span class="icons c3"><i class="fa fa-sticky-note-o"></i></span> <div class="box-area">
		<h3>How We Do</h3> <p style="text-align: justify">ONE GROUP of Professionals work and assist with each client providing ONE STOP 360 SERVICE to secure each Investment Property Purchase and Sell.
			</p><br><br><br></div>
		</div>
		<div class="col-md-3 col-sm-6 text-center">
		<span class="icons c4"><i class="fa fa-group"></i></span> <div class="box-area">
		<h3>Social Acitivity</h3> <p style="text-align: justify">We Contribute 1% of our Time to local Charities and Communities.<br>
 We contribute 1% of our Profit to local Charities and Communities.<br>
 We contribute 1% of our Product to local Charities and Communities.</p>
 <br>
		</div></div>
		</div></div>
		</div>

	</div>

	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
					<p> <img src="{{ URL::asset('/img/newHome/guarantee.png') }}"></p>
						<br>
						<h2 style="color: #1e3e49;" ><span class="coloured">About</span> Our Company</h2>

					</div>
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
            <p style="font-size: 18px; font-family: Times New Roman; color: #1e3e49; text-align: justify ; line-height:200%" > <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">ONE GROUP GLOBAL INVESTMENT PTY LTD </span> is a premium, Professional, Prestigious Property Investment Consulting Company based in Sydney CBD.
            We only work with the <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> BEST</span> Developers, the<span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;"> BEST</span> Projects with the
            <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">BEST</span> Price in the  <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">BEST</span> Location .</p>

						<ul class="withArrow">
							<li style=" color: #1e3e49; font-size: 15px;"><span class="fa fa-angle-right"></span> We Contribute <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">1% of our Time</span> to local Charities and Communities. </li>
              <li style=" color: #1e3e49; font-size: 15px; "><span class="fa fa-angle-right"></span> We contribute <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">1% of our Profit</span> to local Charities and Communities.</li>

              <li style=" color: #1e3e49;  font-size: 15px;"><span class="fa fa-angle-right"></span> We contribute <span style="font-size: 18px; font-family: Times New Roman; color: #F1C108;">1% of our Product</span> to local Charities and Communities.</li>
            </ul>
            <br>
						<a href="{{ route('company') }}" class="btn btn-primary" style="background-color: #F1C108
						">Learn More</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="{{ URL::asset('/img/newHome/hand.jpg') }}" >
					</div>
				</div>
			</div>
		</div>

	</section>



	<section class="section-padding noTopMrgn">
		<div class="container">
			<div class="row">
			<img src="{{ URL::asset('/img/newHome/trust.png') }} " style="padding-left: 50px;">


			</div>

			<div class="row service-v1 margin-bottom-40" style="padding-left: 50px;">
<!--           card 1-->
            <div class="col-sm-3 md-margin-bottom-40">

               <a href="{{ route('southVillage') }}"><img class="img-responsive" src="{{ URL::asset('/img/newHome/Deicorp-Southvillage.jpg') }}" alt=""> </a>
               <a href="{{ route('southVillage') }}"> <h3>SouthVillage-Deicorp</h3></a>
                <p>At South Village, your doorstep stretches from the precinct’s new shopping centre to the National Park to the endless blues of beaches and bays; an urban lifestyle amidst Australia’s natural wonders.</p>
            </div>
<!--           card 2-->
            <div class="col-sm-3 md-margin-bottom-40">
                 <a href="{{ route('omnia') }}"><img class="img-responsive" src="{{ URL::asset('/img/newHome/Greenland-Omnia.jpg') }}" alt="">   </a>
				         <a href="{{ route('omnia') }}"> <h3>Omnia-Greenland</h3></a>
                <p>where the ordinary becomes extraordinary, and everyday life is richer than ever. A boutique collection of nine 3-storey residences, The Nines is perfected living for every generation..</p>
            </div>
<!--           card 3-->
            <div class="col-sm-3 md-margin-bottom-40">
			        	<a href="{{ route('theNinesNaremburn') }}"><img class="img-responsive" src="{{ URL::asset('/img/newHome/Metro-TheNines.jpg') }}" alt="">  </a>
			        	<a href="{{ route('theNinesNaremburn') }}"><h3>TheNines-Metro</h3></a>
                <p>Omnia's distinctive podium draws in the heritage streetscape and delivers its rhythm around the peninsula end of its expansive site. </p>
            </div>
<!--           card 4-->
			    <div class="col-sm-3 md-margin-bottom-40">
						<br><br><br><br><br><br><br><br><br><br><a href="{{ route ('sydney')}}" class="btn btn-primary"  style="background-color: #F1C108
						">Learn More</a>
            </div>
        </div>
		</div>
		</section>


	</section>



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
