
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
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="{{ route('pagewood5') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/altitudeParramatta/AltitudeRiverbankRender.jpeg') }}" width="140" height="140">
            <h2>Altitude,Parramatta</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="{{ route('altitudeParramatta') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/aquaRhodes/Aqua_Watrerside_5_1920X803-1920x800.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Aqua_42 Walker Str Lot 103</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('aquaRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/botaniaOlympicP/BuildingAandB.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Botania,Sydney Olympic Park</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('botania') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/pagewood4Dahlia/DAHLIA_ExteriorHero.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Dahlia_Pagewood New Numbers</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('pagewood4') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/escadaORiordan/HeroExteriorDuskLOWRES.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Escada,O'Riordan</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('escada') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/kiaraMascot/1920px_JJG_1999.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Kiara, Mascot</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('kiaraMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/lighthouseDeeW/Lighthouse-Cutaway_1920x800.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Lighthouse,DeeWhy</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('lighthouse') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/riverviewRhodes/ThePeninsula-externals-07.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Riverview, Rhodes</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('riverviewRhodes') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/spectrumMascot/Podium.jpg') }}" width="140" height="140">
            <h2>Spectrum, Mascot</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('spectrumMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/thegalleryRosebery/HeroExterior.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gallery, Coco Rosebery</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryRosebery') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/thegalleryMintRosebery/MERITON_ROSEBERY_VIEW2_04.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gallery,Mint Rosebery</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryMint') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/thegalleryPoloRosebery/DexusPhase3-TheGallery-Exterior-Edited.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>The Gallery,Polo,Rosebery</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('thegalleryPolo') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/theRetreatOlympicP/Cut-away.jpg') }}" width="140" height="140">
            <h2>The Retreat,Sydney Olympic Park</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('theRetreat') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img class="rounded-circle" src="{{ URL::asset('/img/meriton/vidaMascot/VIDA-EXT-HIGH-RES_MEG006-V01A-A-683x1024.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h2>Vida,Mascot</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="{{ route('vidaMascot') }}" role="button" style="background: #C38145">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->

	</div>

</body>
</html>
