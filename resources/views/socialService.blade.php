<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Event</title>
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
                            <li><a href="">Sydney</a></li>
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
	<section id="inner-headline" style="padding-top:100px; background-image: url('/img/newHome/slides/1.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">One Group Event</h2>
			</div>
		</div>
	</div>
  </section>


  <div class="w3-content w3-display-container" >
  <marquee behavior="scroll" direction="left" scrollamount="5" style="font-family: Times New Roman; color:  #F1C108; font-weight: bold;">One Group Global Investment Event &copy; </marquee>

<table border="2" style="padding-top:20px;">
    <tr>
        <td><img src={{ URL::asset('/img/socialService/7.png') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/8.png') }} class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src={{ URL::asset('/img/socialService/9.png') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/10.png') }} class="img-thumbnail"></td>
    </tr>
      <tr>
        <td><img src={{ URL::asset('/img/socialService/11.png') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/15.png') }} class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src={{ URL::asset('/img/socialService/13.png') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/14.png') }} class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src={{ URL::asset('/img/socialService/17.jpeg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/18.jpeg') }} class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src={{ URL::asset('/img/socialService/19.jpeg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/20.png') }} class="img-thumbnail"></td>
    </tr>
</table>

<table border="1">
    <tr>
        <td><img src={{ URL::asset('/img/socialService/1.jpg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/2.jpg') }} class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src={{ URL::asset('/img/socialService/3.jpg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/4.jpg') }} class="img-thumbnail"></td>
    </tr>
      <tr>
        <td><img src={{ URL::asset('/img/socialService/5.jpg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/6.jpg') }} class="img-thumbnail"></td>
    </tr>
</table>
	</div>


<div class="down" style="background-color: #000000 ">

<p style="color: aliceblue ; width: 900px; padding-left:27%;">One Group Global Investment Pty Ltd&copy;
<br>Ground Floor Level 6,201 Kent Street Sydney NSW 2000
<br> D: + 61 29019 1889  &nbsp &nbsp    M: 0413384119
<br> E: fiona@onegroupglbal.com.au  &nbsp info@onegroupglobal.com.au
</p>
</div>

<!-- float button =contact us -->
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
