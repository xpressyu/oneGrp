<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Deicorp-TNT</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="{{ asset('js/themes/6/js-image-slider.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/themes/6/mcVideoPlugin.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/themes/6/js-image-slider.js') }}" type="text/javascript"></script>
<link href="{{ asset('css/generic.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript">
        //don't copy the script below into your page.
        if (!document.domain) alert("The video will not work properly if opening the page by local path. Please test this page through HTTP on a web or localhost server");
</script>
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

<div id="sliderFrame">
        <div id="slider">
<!--
           <a>
           	<video width="600" height="500" controls>
           	<source src="Meriton-AlliumPagewood /Pagewood Green Campaign Video.mp4" type="video/mp4">
           	</video>
           </a>
-->

            <a>
             <img class="img" src={{ URL::asset('/img/deicorp/tntApa/TNT-REDFERN_EXTERIOR-300x600.jpg') }} style="width:100%">
            </a>
            <a>
            <img  class="img" src={{ URL::asset('/img/deicorp/tntApa/TNT-REDFERN_EXTERIOR-HERO-300x600.jpg') }} style="width:100%">
            </a>
            <a>
             <img class="img" src={{ URL::asset('/img/deicorp/tntApa/TNT-REDFERN_LIVING-1010x570.jpg') }} style="width:100%">
            </a>
            <a>
             <img class="img" src={{ URL::asset('/img/deicorp/tntApa/TNT-REDFERN_BALCONY-1010x570.jpg') }} style="width:100%">
            </a>

    </div>
    </div>
    <div class="w3-content w3-display-container" style="padding-top: 60px;">
<h1>Sydney-Refern </h1>
<h2>TNT</h2>
<img src={{ URL::asset('/img/deicorp/tntApa/develperInfor.png') }} style="width: 1000px;" >
<br><br>
<h2>Dercipe</h2>
	<p class="text-justify">The Siding stands out as Petersham’s newest precinct. Teeming with greenery and life, it’s home to corner cafés, pocket parks, rooftop terraces, and a lush central lawn for lounging about in the afternoon sun.<br><br>
Petersham has quietly become the Inner West’s best borough – a place where inner city thrills meet suburban serenity.</p>
<hr class="new1">
	</div>

<div class="w3-content w3-display-container" style="padding-top: 60px;">
<img src={{ URL::asset('/img/deicorp/tntApa/page1.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/tntApa/page2.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/tntApa/page3.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/tntApa/Lawson_Living_View04Scheme04_R5_crop.jpg') }}>
<hr class="new1">
<img src={{ URL::asset('/img/deicorp/tntApa/page4.jpg') }}>
	</div>







<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/deicorp/tntApa/TNT-Level3-11.pdf') }}" target="_blank">TNT-Level3-11.pdf</a>
</div>

<hr class="new1">
<h1>Additional Informatiion</h1>
<div class="w3-content w3-display-container" >
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="FAQ-tab" data-toggle="tab" href="#FAQ" role="tab" aria-controls="home" aria-selected="true">FAQ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Depreciation-tab" data-toggle="tab" href="#Depreciation" role="tab" aria-controls="profile" aria-selected="false">Depreciation</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Schedule-tab" data-toggle="tab" href="#Schedule" role="tab" aria-controls="contact" aria-selected="false">Schedule Finishes</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="Strate-tab" data-toggle="tab" href="#Strate" role="tab" aria-controls="contact" aria-selected="false">Strate Levy</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="FAQ" role="tabpanel" aria-labelledby="FAQ-tab">FAQ...</div>
  <div class="tab-pane fade" id="Depreciation" role="tabpanel" aria-labelledby="Depreciation-tab">
  <a href="{{ asset('documents/deicorp/tntApa/studio.pdf') }}" target="_blank">Studio.pdf</a>
  <br>
  <a href="{{ asset('documents/deicorp/tntApa/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a href="{{ asset('documents/deicorp/tntApa/StrataLevy.pdf') }}" target="_blank">Strata Levy Estimate Summary.pdf</a>
  </div>
</div>
</div>
<div class="down" style="background-color: #000000 ">
        <p style="color: aliceblue ; width: 900px; padding-left: 500px;">One Group Global Investment Pty Ltd&copy;
                <br>Address: Level 6, 201 Kent Street, Sydney, 2000
                <br>Email: info@onegroupglobal.com.au
                Tel: 0413 384 119 </p>
                </div>

                <a href="{{ route('SEND_EMAIL') }}" class="float">
                <i class="fa fa-plus my-float">
                <img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
                </i>
                </a>
</body>
</html>
