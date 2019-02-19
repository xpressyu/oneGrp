
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Developer-Meriton</title>
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
  <img class="mySlides" src="{{ URL::asset('/img/meriton/altitudeParramatta/AltitudeRiverbankRender.jpeg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/pagewood5Allium/PagewoodExterior.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/aquaRhodes/Aqua_Full_1920X800_Sunset-1920x800.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/botaniaOlympicP/BuildingAandB.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/escadaORiordan/TerraceLOWRES.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/thegalleryRosebery/HeroExterior.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/spectrumMascot/Exterior1.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/lighthouseDeeW/Sales_Hero-image_1920x800_Lighthouse_6-1920x800.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ URL::asset('/img/meriton/kiaraMascot/1920px_JJG_2080.jpg') }}" style="width:100%">





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
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/pagewood5Allium/PagewoodExterior.jpg') }}" width="140" height="140">
            <h2>Allium,Pagewood Green</h2>
            <p>Pagewood Green is poised to offer a unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs.</p>
            <p><a class="btn btn-secondary" href="{{ route('pagewood5') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/altitudeParramatta/AltitudeRiverbankRender.jpeg') }}" width="140" height="140">
            <h2>Altitude,Parramatta</h2>
            <p>A new height in luxury begins at the perfect Altitude.</p>
            <p><a class="btn btn-secondary" href="{{ route('altitudeParramatta') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/aquaRhodes/Aqua_Watrerside_5_1920X803-1920x800.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>AquaRhodes</h2>
            <p>Reaching out to the waterfront, Aqua’s remarkable setting is inspirational whatever the time of year. Flowing indoor–outdoor designs let you enjoy the breathtaking vistas from the comfort of your beautifully–appointed home.</p>
            <p><a class="btn btn-secondary" href="{{ route('aquaRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/botaniaOlympicP/BuildingAandB.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Botania,Sydney Olympic Park</h2>
            <p>Just 15kms West of Sydney CBD and minutes from world-class sporting and entertaining facilities, BOTANIA will complement Sydney Olympic Park’s reputation as an emerging neighbourhood and investment hotspot.</p>
            <p><a class="btn btn-secondary" href="{{ route('botania') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_ExteriorHero.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Dahlia Pagewood New Numbers</h2>
            <p>Introducing Dahlia - a place where luxurious and oversized interiors exist in harmony among cool green spaces.</p>
            <p><a class="btn btn-secondary" href="{{ route('pagewood4') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/escadaORiordan/HeroExteriorDuskLOWRES.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Escada, O'Riordan</h2>
            <p>CBD and the domestic and international airports, Mascot is a vibrant lifestyle hub where the culinary and retail scene is one of Sydney’s most visited hotspots.</p>
            <p><a class="btn btn-secondary" href="{{ route('escada') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/kiaraMascot/1920px_JJG_1999.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Kiara, Mascot</h2>
            <p>KIARA presents 233 apartments in three boutique residential towers rising 13 levels, with views over the inner city skyline.</p>
            <p><a class="btn btn-secondary" href="{{ route('kiaraMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/lighthouseDeeW/Lighthouse-Cutaway_1920x800.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Lighthouse, DeeWhy</h2>
            <p>Right in the heart of Dee Why’s town centre transformation and only 800m from Dee Why Beach, Lighthouse is a new architectural landmark soaring high above the surrounding streetscape.</p>
            <p><a class="btn btn-secondary" href="{{ route('lighthouse') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/riverviewRhodes/ThePeninsula-externals-07.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Riverview, Rhodes</h2>
            <p>In a premium location opposite Mill Park, Riverview is the only north facing waterfront residence on the Rhodes Peninsula.</p>
            <p><a class="btn btn-secondary" href="{{ route('riverviewRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/spectrumMascot/Podium.jpg') }}" width="140" height="140">
            <h2>Spectrum, Mascot</h2>
            <p>Arrive home to a grand, north facing 1,200 sqm central park lined with trees, native plants, and leafy walkways linking each of the buildings.</p>
            <p><a class="btn btn-secondary" href="{{ route('spectrumMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/thegalleryRosebery/HeroExterior.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gallery, Coco Rosebery</h2>
            <p>Introducing Coco Collection, luxury resort-style living within the stylish heart of Roseberry, paces from Green Sqaure's Gunyama Park and Aquatic Centre.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryRosebery') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/thegalleryMintRosebery/MERITON_ROSEBERY_VIEW2_04.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gallery, Mint Rosebery</h2>
            <p>Introducing Mint Collection, the first release within 'The Gallery'. Created by SJB, two masterpiece buildings with lush green space on the ground and in the skies.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryMint') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/thegalleryPoloRosebery/DexusPhase3-TheGallery-Exterior-Edited.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gallery,Polo,Rosebery</h2>
            <p>Introducing Polo Collection, luxury resort-style living in Roseberry's vibrant heart.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryPolo') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/theRetreatOlympicP/Cut-away.jpg') }}" width="140" height="140">
            <h2>The Retreat,Sydney Olympic Park</h2>
            <p>Soaring 22 storeys alongside idyllic landscaped parklands,  The Retreat will be home to an unrivalled collection  of 278 oversized apartments crowned by split-level luxury penthouses and superbly crafted townhouses below.</p>
            <p><a class="btn btn-secondary" href="{{ route('theRetreat') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/vidaMascot/VIDA-EXT-HIGH-RES_MEG006-V01A-A-683x1024.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Vida,Mascot</h2>
            <p>VIDA, the first release of luxury apartments in Meriton’s Platinum Collection, will showcase carefully planned and designed boutique buildings with the highest quality of finishes and fixtures.</p>
            <p><a class="btn btn-secondary" href="{{ route('vidaMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

	</div>

</body>
</html>
