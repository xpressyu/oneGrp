
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Developer-Metro</title>
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
<li><a href="{{ route('login') }}">Login/Resgister</a></li>
   <li style="float: left; color: aliceblue; font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black,' sans-serif'; font-size: 30px;" >OneGroup</li>

</ul>
</div>
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('welcome') }}">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('list') }}">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('company') }}">Our Company</a>
    <a class="py-2 d-none d-md-inline-block" href="{{ route('staff') }}">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('social') }}}">Social Service</a>
      </div>
    </nav>

<div class="imgRoll" style="padding-top:20px; width: 100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/silkTerracesSchofields/154043896697811407-rsc.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/sierraResidencesKellyville/1.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/edenCatherineField/1.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/theCCJordanSprings/p1.png') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/theCCClaymore/J-ywgh6A.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/theNinesNaremburn/n-vHSwkE.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/metro/fairwayResidence/LEfiMf_8.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/theGables/T1.png') }}" style="width:100%">
 <img class="mySlides" src="{{ URL::asset('/img/orchard/mGGcJ9Pq.jpg') }}" style="width:100%">
<img class="mySlides" src="{{ URL::asset('/img/leppington/B51aVV6.jpg') }}" style="width:100%">




 <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
 <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(7)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(8)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(9)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(10)"></span>

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

<div class="row" style="width:100%; padding-top: 50px; padding-left: 30px">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/silkTerracesSchofields/154043896697811407-rsc.jpg') }}" width="140" height="140">
            <h2>Silk Terraces, Schofields</h2>
            <p>Well-know as both an Investment Hot Spot and A Desirable Lifestyle Address.</p>
          <p><a class="btn btn-secondary" href="{{ route('silkTerraces') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/sierraResidencesKellyville/1.jpg') }}" width="140" height="140">
            <h2>Sierra Residences Kellyville</h2>
            <p>Sierra Residences delivers a limited collection of boutique house and land packages in one of the North-West’s booming centres of growth.</p>
            <p><a class="btn btn-secondary" href="{{ route('sierraResidence') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/edenCatherineField/1.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Eden,Catherine Field</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('eden') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/theCCJordanSprings/p1.png') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Creation Collection, Jordan Spring</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('theCCJordan') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/theCCClaymore/J-ywgh6A.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Creation Collection,Claymore</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('theCCClaymore') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/theNinesNaremburn/n-vHSwkE.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Nines,Naremburn</h2>
            <p>Curated to the very last detail with space for the family to gather — this is where meals become memories.</p>
            <p><a class="btn btn-secondary" href="{{ route('theNinesNaremburn') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/fairwayResidence/LEfiMf_8.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Fairway Residences Starthfield</h2>
            <p>Established community aspects are within easy reach, perfect for young professionals, growing families, down-sizing retirees or astute investors.</p>
            <p><a class="btn btn-secondary" href="{{ route('fairway') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/theGables/T1.png') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gables-Precinct H, BoxHill</h2>
            <p>True value in construction is a result of outstanding quality, at an affordable price.</p>
            <p><a class="btn btn-secondary" href="{{ route('theGables') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/orchard/mGGcJ9Pq.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Orchard Heights, Spring </h2>
            <p>Within a welcoming community and recreational paradise, Orchard Heights offers the perfect fusion of rural tranquillity and urban vibrancy.</p>
            <p><a class="btn btn-secondary" href="{{ route('orchard') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/metro/leppington/B51aVV6.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Leppington living,Leppington </h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('leppington') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

	</div>
</body>
</html>
