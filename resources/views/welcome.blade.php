<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>One Group Home</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<div class="top">
<ul>
  <li><a href="##">Language</a></li>
  <li><a href="##">FAQ</a></li>
   <li><a href="##">Contact</a></li>
<li><a href="{{ route('login') }}">Login/Register</a></li>
   <li style="float: left; color: aliceblue; font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black,' sans-serif'; font-size: 30px;" >OneGroup</li>

</ul>
</div>

<nav class="site-header sticky-top py-1">

      <div class="container-fluid d-flex flex-row justify-content-between align-items-center">
        <a class="py-2 d-flex" href="{{ route('welcome') }}"><img src="{{ URL::asset('/img/home/logo-2.png') }}" style="width: 250px; height:130px;"/></a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('welcome') }}">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('list') }}">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('company') }}">Our Company</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('staff') }}">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('social') }}">Social Service</a>
      </div>
    </nav>

<div class="imgRoll" style="padding-top:20px; width: 100%">
  <img class="mySlides" src="{{ URL::asset('/img/home/view1.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/home/view3.jpg') }}" style="width:100%">


  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
</div>
<script>
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
	</div>

 <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a><img src="{{ URL::asset('/img/home/BuildingEWestSide.jpg') }}" style=" width: 100%" height="250"></a><rect width="100%" height="100%" fill="#55595c"/><text x="30%" y="50%" fill="#eceeef" dy=".3em" ><h4>Deicorp Sourthvillage</h4></text>
            <div class="card-body">
              <p class="card-text">At South Village, your doorstep stretches from the precinct’s new shopping centre to the National Park to the endless blues of beaches and bays; an urban lifestyle amidst Australia’s natural wonders.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{ route('southVillage') }}" class="btn btn-sm btn-outline-secondary">View</a>
                 </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a> <img src="{{ URL::asset('/img/home/n-vHSwkE.jpg') }}" style= "width:100%" height="250"></a>
            <rect width="100%" height="100%" fill="#55595c"/><text x="30%" y="50%" fill="#eceeef" dy=".3em"><h4>Metro TheNinesNaremburn</h4></text>
            <div class="card-body">
              <p class="card-text"> Where the ordinary becomes extraordinary, and everyday life is richer than ever. A boutique collection of nine 3-storey residences.<br><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="{{ route('theNinesNaremburn') }}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a> <img src="{{ URL::asset('/img/home/T6.jpg') }}" style= "width:100%" height="250"></a>
              <rect width="100%" height="100%" fill="#55595c"/><text x="30%" y="50%" fill="#eceeef" dy=".3em"><h4>Greenland Omnia</h4></text>
            <div class="card-body">
              <p class="card-text">Omnia's distinctive podium draws in the heritage streetscape and delivers its rhythm around the peninsula end of its expansive site. <br><br><br> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ route('omnia') }}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>


    </div>
          </div>
<div id="btn">
       <a href="{{ route('list') }}" class="btn btn-outline-dark">Find out more</a>
</div>
        </div>


        <div class="section-title text-center">
                <p style="color: crimson; font-family:Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'; font-size: 24px;" >  WE GUARANTEE : THE BEST Purchase Price in the Market.</p>
        </div>

        <div class="w3-content w3-display-container">

	<section class="section-padding gray-bg" style="padding-top: 25px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 style="font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif"> SOCIAL CONTRIBUTION </h2>
						<p style="color: crimson; font-family:Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial,' sans-serif'; font-size: 24px;">We contribute 1% of our Time to local Charities and Communities
						   <br>We contribute 1% of our Profit to local Charities and Communities
									<br>We contribute 1% of our Product to local Charities and Communities
</p>
					<hr class="new1">
					</div>
				</div>

			</div>
			<div class="row">

				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="{{ URL::asset('/img/home/logo.png') }}" alt="About Images">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
					<h2 >ONE GROUP  ONE VISION    </h2>
					<br>
					<h5>WHO WE ARE  TRUST 	HONESTY    EXCELLENCE     DELICATION     COLLABORATION </h5>
						<p>ONE GROUP GLOBAL INVESTMENT PTY LTD is a premium, Professional, Prestigious Property Investment Consulting Company based in Sydney CBD. We ONLY work with the BEST Developers, the BEST Projects with the Best Price in the BEST Location. </p>
                          <h5>WHAT WE DO</h5>
                           <p>To build your WEALTH fast through Secure, Effective and Efficient Property Investment activities in order to achieve Financial Freedom . </p>

                   </div>
				</div>
			</div>
		</div>
	</section>


	</div>
	<div class="w3-content w3-display-container">
<div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
     <h3>HOW WE DO </h3>
      <p>ONE GROUP of Professionals work and assist with each client providing ONE STOP 360 SERVICE to secure each Investment Property Purchase and Sell.  </p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Customise Individual Property Investment<cite title="Source Title"> Analyses and Solutions</cite>
        </small>
           </footer>
          <footer class="blockquote-footer">
        <small class="text-muted">
          Assist Financial<cite title="Source Title"> Advise Services</cite>
        </small>
        </footer>
        <footer class="blockquote-footer">
        <small class="text-muted">
          Provide Legal<cite title="Source Title"> Services and Support</cite>
        </small>
		</footer>
           <footer class="blockquote-footer">
            <small class="text-muted">
          Property  <cite title="Source Title"> Management</cite>
        </small>
        </footer>


    </blockquote>
  </div>
    </div>

</body>
</html>
