<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Staff</title>
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
.w3-left, .w3-right, .w3-badge {
    cursor:pointer
}
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


<div class="w3-content w3-display-container"  style="padding-top:150px; height:750px;">
 <div class="left">
 <img src="{{ URL::asset('/img/staff/Fiona-1.jpeg') }}" style="width:350px; height:500px;">
 </div>
 <div class="w3-right" style="width: 450px; " >
 <h2 style="font-family: Times New Roman; color:  #F1C108;">About me</h2>
 <p  class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;font-size:18px; ;">
 I aspire to excel in the real estate industry by working as a professioanl property consultant and contribute my honest efforts and expertise in property investment and customer service to enhance your wealth and achieve your financial freedom.
<ul>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> 6 years Senior Consultant experiences in Property Investment </li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> Professional Property Investment Trainer </li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> Working with all Well Known Developers (e.g. Lend lease, Mirvac, Frasers, Meriton, Crown etc...)</li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> Serviced more than 100 Clients each year </li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> 100% Satisfaction Rate from our clients</li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> 10 years professional HR experiences </li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> HR Manager in Big 4 Accounting Firm Ernest & Young </li>
  <li style="font-family: Times New Roman; color: #1e3e49; font-size:15px;"> Professional Member of AHRI (NO.:318945)</li>
</ul>

</p>
</div>
<div>
</div>


</div>


<div class="down" style="background-color: #000000 ">

<p style="color: aliceblue ; width: 900px; padding-left:27%;">One Group Global Investment Pty Ltd&copy;
<br>Ground Floor Level 6,201 Kent Street Sydney NSW 2000
<br> D: + 61 29019 1889  &nbsp &nbsp    M: 0413384119
<br> E: fiona@onegroupglbal.com.au  &nbsp info@onegroupglobal.com.au
</p>
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
