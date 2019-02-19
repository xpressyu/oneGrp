
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Developer-Deicorp</title>
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
        <a class="py-2 d-none d-md-inline-block" href="{{ route('social') }}">Social Service</a>
      </div>
    </nav>

<div class="imgRoll" style="padding-top:20px; width: 100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/J002470_Petersham_AerialMap_FA.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Petersham_Courtyard_Exterior.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Rooftop.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_LivingKitchen.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_Vignette2.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_Vignette1.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_LIGHTSCHEME_FINAL.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Kitchen_DARKSCHEME_FINAL.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Int_Bedroom_Final.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_Exterior_Facade_Dusk_With_Flags.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_EXT_Cutaway.jpg') }}" style="width:100%">



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
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(11)"></span>
  </div>
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
 <div class="row" style="width:100%; padding-top: 50px; padding-left: 30px">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/deicorp/grandHHurstvlAB/J002551_Deicorp_Hurstville_Grandh_Close_Up_View.jpg') }}" width="140" height="140">
            <h2>GrandH</h2>
            <p>In Hurstvtille’s coveted city centre stands a new residential showpiece  worthy of Sydney’s Southern Capital.</p> <br>
          <p><a class="btn btn-secondary" href="{{ route('grandH') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/deicorp/highlineA1/Highline_RoofGarden_15k_HR.jpg') }}" width="140" height="140">
            <h2>Highline</h2>
            <p>Inspired by The High Line, New York’s urban masterpiece,  Highline Westmead’s master-planned residential
                    community is unlike anything Western Sydney has ever
                    seen. </p>
            <p><a class="btn btn-secondary" href="{{ route('highline') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/deicorp/southVillage/Domain_CGI-1600x1200-07.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>South Village</h2>
            <p>Set in the idyllic surrounds of the Sutherland Shire, South Village is poised to bring a new and unique
                community into sydney's South.
            </p><br>
            <p><a class="btn btn-secondary" href="{{ route('southVillage') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('img/deicorp/theSiding/Deicorp_Petersham_CGI_J002672_EXT_Cutaway.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Silding</h2>
            <p>The Siding stands out as Petersham’s newest
                    precinct. Teeming with greenery and life, </p> <br>
          <p><a class="btn btn-secondary" href="{{ route('theSiding') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->


        <div class="col-lg-4">
                <img class="rounded-circle" src="{{ URL::asset('/img/deicorp/tntApa/Lawson_Living_View04Scheme04_R5_crop.jpg') }}" width="140" height="140">
                <h2>The TNT</h2>
                <p>As the former headquarters of the TNT company, these two iconic
                        buildings have been a part of the city skyline since the 1970s. </p>
                <p><a class="btn btn-secondary" href="{{ route('tntApa') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
              </div><!-- /.col-lg-4 -->


            </div><!-- /.row -->




</body>
</html>
