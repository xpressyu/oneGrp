<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ViViD</title>
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
    <div class="imgRoll" style="padding-top:20px; width: 100%">
    <img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_INT_Bedroom.jpg') }} style="width:100%">
    <img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_RoofTerrace.jpg') }} style="width:100%">
    <img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_LivingtoBalcony(1).jpg') }} style="width:100%">
		<img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_INT_Kitchen_Living.jpg') }} style="width:100%">

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
<h1 style="padding-left:25%; font-size: 48px; font-family: Times New Roman; color: #1e3e49; "> <span class="coloured">BM: </span>VIVID-Kirrawee NSW</h1>

<section id="content">
	<div class="container">

						<div class="row" style="font-size: 18px; font-family: Times New Roman;color:#1e3e49; padding-left:15%">
							<div class="col-md-12">
								<div class="about-logo">
                  <h2 style="color: #1e3e49;">Redefining the Best of Sydney urban Living Against The Backdrop of Pristine Beaches and PARKLAND</h2>
                </div>
							</div>
						</div>

	</div>
  </section>

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<img src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_Exterior(1)SMALL.jpg') }} style="width: 1000px;" >
</div>
<div class="w3-content w3-display-container">
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
To know The Shire is more than just to love it.
You’ll never want to leave it. South Village, in the heart of Kirrawee at the epicentre of the Sutherland Shire, is an expression of this vitality. It draws on the beauty of its natural surroundings, infusing that with outstanding architectural innovation and new insights into urban living, now and well into the future. It’s a village bordered by the pristine bushland of the Royal National Park and the tranquil waterways of Port Hacking. The white sands of Cronulla Beach are minutes away and the vibrant camaraderie of the Shire is yours to enjoy. Every day.
<br><br>
It’s the Sutherland Shire, the whole area is booming and it’s actually really opening up, with Kirrawee being the biggest beneficiary of the change. GARY, 50, STAGE 1 PURCHASER
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/walk.png') }} style="width: 980px;">
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Every aspect, South Village – your new neighbourhood – has been designed to engender a sense of community. It’s designed to draw you in and quietly encourage you to take a stroll from open spaces to secluded gardens, along broad pedestrian boulevards, past café tables spilling onto leaf dappled laneways. It’s a village in every sense where getting to know your neighbours is a natural happenstance of your daily life. Before you know it you’ll wonder why you would possibly live anywhere else.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/convenient.png') }} style="width: 550px;"></div>
<div class="right" style="width: 430px; padding-left: 20px;padding-top: 40px;">
<h3  style="font-family: Times New Roman; color: #1e3e49; ">CONNECTIVITY</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Proximity. It’s the pivotal aspect of urban life, the attribute that influences one of your most precious commodities. Your time. Time to spend with your family, time to simply relax. And less time commuting, no longer wasting hours getting to and from the places you want to or need to be. From your Vivid doorstep you’re surrounded by major bus networks and only 130 metres from Kirrawee train station and that’s just 33 minutes from the Sydney CBD. By car you’re mere minutes from Sydney’s major metropolitan road and freeway networks. And with the airport nearby, the world is at your feet.
</p>
</div>
<img src={{ URL::asset('/img/bm/vivid/SVVIVIDLOCATIONMAP.png') }}>
</div>

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/openSpace.png') }} style="width: 550px;">
</div>
<div class="right" style="width: 430px; padding-right: 50px; padding-top: 70px;">
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
At home at Vivid you’ve got so much more room to
spread your wings. Expanses of parkland and open spaces infuse light and colour – elements of the very definition
of vivid – into your everyday life. Whether you’re out for
a stroll or walking to work, taking your kids to one of their favourite playgrounds or taking time out in your favourite garden nook or café, you’ve all the space in the world. With 9,000sqm of landscaped gardens, plus the vast natural beauty of the Royal National Park and Cronulla Beach so close at hand, life at Vivid is crafted to make the most of the sun drenched climate the Shire is famous for.
</p>
</div>
</div>

<!-- <div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/map.png') }} style="width:480px; height: 600px; border: 5px solid #CBC6C6 ;">
 </div>
<div class="right" style=" padding-right: 20px;">
<img src={{ URL::asset('/img/bm/vivid/map2.png') }} style="width: 480px; height: 600px; border: 5px solid #CBC6C6 ;">
</div>

</div> -->

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/kitch.png') }} style="width: 980px;" >
<br><br>
<h3  style="font-family: Times New Roman; color: #1e3e49; ">THE VIVID PORTFOLIO</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Your home is as individual as you are. This begins with the physical attributes you’re looking for in choosing
the amount of space you need with the adaptability and the expanse you want. Select from a portfolio of 1, 2 and 3 bedroom apartments, each with in-built storage to keep your living spaces beautifully uncluttered. Make the investment decision that’s right for you and the lifestyle choice where you can effortlessly make the most of every day. You don’t need to be told, you know what you want. Whatever your choice, all the design elements are there for you to vividly colour your world your way</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/view1.png') }} style="width: 980px;" >
<br><br>
<h3  style="font-family: Times New Roman; color: #1e3e49;">BUILDING ARCHITECTURE</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Vivid is an integral component of South Village yet it also stands alone as a unique architectural statement. In its premier position on the north-eastern flank of the village on one of the highest vantage points in the Sutherland Shire, Vivid capitalises on panoramic views from the Sydney CBD to Botany Bay, across the rolling waves of Cronulla Beach and the green swathes of the Royal National Park. Stark white bands frame broad balconies. Surrounded by landscaped gardens, Vivid embodies its name – picturesque and impressive.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_Exterior(1)SMALL.jpg') }} style="width: 980px;" >
<br><br>
<h3 style="font-family: Times New Roman; color: #1e3e49;">SECURITY / PARKING FACILITIES</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Your new home at Vivid is an oasis of calm above
the energy of your village environment. Reflecting this transition, the sophisticated ground foyer entrance to your residence is discreetly placed, completely secure
yet gracefully decorated and warmly welcoming. From your protected underground parking facilities you’re whisked skyward in security controlled elevators to your apartment above. Your home is your haven, that’s why your security, peace of mind and seclusion are paramount factors in designing your ideal living environment.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container" style="height:480px;">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_LivingtoBalcony(1).jpg') }} style="width: 550px; height: 420px">
</div>
<div class="right" style="width: 430px; padding-right: 50px; padding-top: 40px;">
<h3  style="font-family: Times New Roman; color: #1e3e49; ">LIVING SPACES</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Light and space. These are the elements of exceptional living environments. Natural light tumbles through thermally and acoustically treated glass, deflecting summer glare and the hubbub of urban life. Every apartment is articulated to maximise the surrounding vistas, inviting sunshine and cross breezes. This only enhances the feeling of space afforded by clean, uncluttered expanses of textured joinery and polished tile floors. And when weather conditions reach their extremes, silent and efficient climate control keeps your world absolutely perfect.
</p>
</div>
</div>

<div class="w3-content w3-display-container" style="height:500px;">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/clear.png') }} style="width:480px; border: 5px solid #CBC6C6 ;">
</div>
<div class="right" style=" padding-right: 50px;">
<h3  style="font-family: Times New Roman; color: #1e3e49;">KITCHENS</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
Whether it’s a quick breakfast to start your day or preparing dinner with fresh ingredients from your village providores, this is the core of your home’s life and style. Reflecting this importance, your Vivid kitchen integrates designer features and finishes. Lustrous tapware and prestige SMEG appliances are embedded alongside polished stone bench tops and richly grained cabinets that provide storage for all your culinary requirements. Unfolding to your main living areas, inviting family and friends to share in its warmth, your kitchen is the hearth of your home.
</p>
</div>
</div>


<div class="w3-content w3-display-container" style="height:450px;">
<div class="left" style="padding-top:20px;">
<img src={{ URL::asset('/img/bm/vivid/bed1.png') }} style="width: 550px; height: 450px;">
</div>
<div class="right" style="width: 430px; padding-right: 50px;">
<h3 style="font-family: Times New Roman; color: #1e3e49;">BEDROOMS & BATHROOMS</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
As the absolute centre of your oasis, the plush carpeting of your Vivid bedrooms spread across generous proportions to windows that make panoramic views the living artwork of your world. Each bedroom is fully appointed with built-in wardrobes that enhance the colourways of your home. Fulfilling the architects’ resolute attention to quality, beauty and detail, every bathroom includes prestige touches and softly polished surfaces. These elements of your home embody sanctuary and serenity, reflecting
your distinctive appreciation for beauty and individuality.
</p>
</div>
</div>

<div class="w3-content w3-display-container" style="height:450px;">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/bed2.png') }} style="width: 550px; height: 450px;">
</div>
<div class="right" style="width: 430px; padding-left: 50px; padding-top: 20px;">
<h3  style="font-family: Times New Roman; color: #1e3e49;">INDOOR / OUTDOOR LIVING</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">
The balcony of your Vivid apartment is not an adjunct
to your home, it’s a seamless, sensational and integral element of your living environment. The expanse of these balconies is enhanced by the breadth of the floor to ceiling glass doors that slide back before them. This is where natural light takes centre stage, fluently bringing the interior and exterior spaces together. It’s best measured and admired as you cross the threshold of your apartment. Momentarily pause and take it all in. From there the unique elegance of the home you’ve designed stretches out before you.
</p>
</div>
</div>

<div class="w3-content w3-display-container"><br>
<h3 style="font-family: Times New Roman; color: #1e3e49; ">ROOFTOP / OTHER BUILDING FACILITIES</h3>
<p class="text-justify" style="font-family: Times New Roman; color: #1e3e49; text-align: justify ;">Above it all, away from it all, this is a luxurious, exclusive and sophisticated feature of your home. A rooftop garden running the breadth of Vivid is designed with two key goals in mind. The first is to provide an even greater vista of the world around you, taking in views from the mountains to the sea, from the CBD to endless vistas of native Australian bushland. Secondly, this is a thoughtfully planned and elegantly appointed retreat that’s an added dimension of your private living space. Here you can relax with a good book. Or mingle at sophisticated barbecue and entertainment facilities to entertain friends and family for an idyllic afternoon or under the stars.</p>
<hr class="new1">
</div>

<!-- <div class="w3-content w3-display-container">
<div class="left">
<img src={{ URL::asset('/img/bm/vivid/w1.png') }} style="width:480px;">
 </div>
<div class="right">
<img src={{ URL::asset('/img/bm/vivid/w2.png') }} style="width: 480px;">
</div>
</div> -->

<div class="w3-content w3-display-container">
<h3  style="font-family: Times New Roman; color: #1e3e49; ">3D Model</h3>
<iframe src="https://web.snaploader.com/3d/?tag_id=5b51b1096c6208044dac2515&model_id=5b51b16d6c6208044dac2544" style="width: 980px;height: 800px;  padding-top: 25px; ">
</iframe>
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
