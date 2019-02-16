<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Meriton-Allium</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
   <li><a href="#####">Login/Resgister</a></li>
   <li style="float: left; color: aliceblue; font-family:Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black,' sans-serif'; font-size: 30px;" >OneGroup</li>

</ul>
</div>
<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Property</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Our Campany</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Staff</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Activity</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Social Service</a>
      </div>
    </nav>

<div class="imgRoll" style="padding-top:20px; width: 100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Terraceentrance.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/POOL.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/PodiumGardens.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Penthouseliving.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Penthouserooftop.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Penthousebedroom.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/LivingLookingIn.jpg') }} style="width:100%">
	<img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/LivingInsidetoView.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Cutaway.jpg') }} style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Bedroom.jpg') }}style="width:100%">
  <img class="mySlides" src={{ URL::asset('/img/meriton/pagewood5Allium/Bathroom.jpg') }}style="width:100%">

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

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
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

<div class="w3-content w3-display-container" style="padding-top: 25px;">
<h1>PageWood-Green</h1>
<h2>Allium</h2>
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Meriton.png') }} style="width: 980px;">
<br><br>
<h2>Meriton</h2>
	<p class="text-justify">Established in 1963, Meriton has made a significant impact on the Australian landscape. We have designed, developed and built an estimated one in 10 apartments in Sydney, along with some of the tallest residential towers in Sydney, Brisbane and the Gold Coast. The private company has designed, developed and built more than 75,000 apartments across the east coast of Australia. Meriton offers sales, leasing and property management services, as well as the luxury accommodation brand Meriton Suites with more than 17 locations nationwide. Meriton has spearheaded the apartment revolution with sophisticated, high-quality apartments. Its founder and managing director, billionaire property entrepreneur Harry Triguboff, is still passionately involved in the design and construction of all projects.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/PagewoodExterior.jpg') }} style="width: 550px;">
<div class="float-right" style="width: 430px; padding-left: 20px;padding-top: 50px;">
<h3> AN ICONIC NEW NEIGHBOURHOOD</h3>
<p class="text-justify" style="padding-top: 20px;">
Pagewood Green is poised to offer a unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs.
The master planned park-like community will be home to grand residences offering optimum sizes up to 197sqm with superior finishes in a premium location.
</p>
<br><br>
<h3>AN ARCHITECTURAL MASTERPIECE</h3>
<p class="text-justify" style="padding-top: 20px;">The first stage at Pagewood Green, Allium,
will rise to new heights of up to 20 storeys showcasing uninterrupted views of the city, championship golf courses and surrounding parklands from exceptionally large apartments up to 197sqm.</p>
</div>
</div>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/map.png') }} style="width: 1000px;">
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Allium-pagewoodGreen.png') }} style="width: 1000px;">
<br><br>
<p class="text-justify">It would be hard to imagine a better setting. Pagewood Green will evolve on 16.5 hectares of prime land laced with lush green spaces, including 10,000sqm of parkland.
Neighbouring two golf courses, the Westfield Eastgardens shopping centre and Bunnerong Road which provides excellent transport links to some of Sydney’s premier destinations.
</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/view.png') }} style="width: 980px;">
<br><br>
<p class="text-justify">Designed by award-winning landscape architects, Arcadia, these private sanctuaries are designed exclusively for use by residents and their guests. Completed with a state-of-the-art barbecue, dining area, extensive turfed area, ample shade and a cinema screen, this perfect space is created for relaxation in a beautiful garden setting.
Throughout the seasons, these expansive landscaped gardens will be wonderful spaces to entertain friends and family or simply soak up the sky-high atmosphere.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/BEPARPT.png') }} style="980px;">
<br><br>
<p class="text-justify">
Pagewood Green’s first stage, Allium, brings a unique offering of 487 grand residences in four designer towers soaring to 20 storeys and with views from every angle of the city, championship golf courses, surrounding parklands and the east coast.
Neighbouring Westfield Eastgardens and The Lakes Golf Course, this stunning collection of apartments is only moments from world-class beaches and entertainment amenities.
By virtue of its impeccable location, near top schools, universities and an array of parks and sporting facilities by the bus interchange and the future South East Lightrail, Allium will emerge as the new investment hotspot of Sydney’s East delivering greater rental returns for future investors.
</p>
<hr class="new1">
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/map1.png') }}>
<br><br>
<h3>A RELAXED, GREEN MASTER-PLANNED COMMUNITY</h3>
<p class="text-justify">
Pagewood Green is poised to offer an enticing and unique opportunity to step into luxury and lifestyle in Sydney’s eastern suburbs. The park-like community’s designer towers will be home to grand residences with superior finishes, in a premium location.
Developed in multiple stages with a design competition run for each stage, an esteem panel of experts within the property industry will judge each design submitted by various award-winning architects. The winning design will create this iconic new neighbourhood which will be among the best in the world to live, relax and thrive in, and will be designed to satisfy market demand, providing exceptionally large apartment layouts of house like proportions.
<br><br>
Redefining the traditional approach to property development, this new community by Meriton, will feature 10,000sqm of landscaped parklands and a retail civic plaza overlooking the park. At the heart of this exciting new community will be the expansive Central Park. With an abundance of plants and turfed areas, this versatile space will allow residents to reconnect with nature with multiple zones for both solitude and engagement.
Pagewood Green, just 8km from the CBD, is a flagship venture for Australia’s largest apartment developer, Meriton, an award-winning and passionate company renowned for building large, luxurious apartments of the highest quality.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Lobby.jpg') }} style="width: 550px;">
<div class="float-left" style="width: 430px; padding-right: 50px; padding-top: 70px;">
<h3> BUILT FOR MODERN LIFE</h3>
<p class="text-justify" style="padding-top: 50px;">
Residents will step straight into luxury as they walk through extravagant lobbies and ascend to their exceptionally large one, two, three and four bedroom grand residences – apartments of house like proportions with large balconies or terraces that serve as outdoor rooms with sensational vistas.<br><br>
Functional, uncomplicated floorplans provide uncluttered expanse for easy living and entertaining. A selection of apartments come with the addition of a full study room to maximise the use of space for your growing family. Choose one of the lower level loft apartments, providing you with the flexibility to orchestrate where and how the elements of your home can complement your living options.<br><br>
The building’s beautiful, clean lines are executed in only the highest quality materials, enhanced by ultra-modern design and technological details in every interior. The development showcases Meriton’s consistently uncompromising vision of perfection.
</p>
</div>
</div>
<hr class="new1">
</div>


<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/modelife.png') }} style="width: 980px;">
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/ReplenishAndRenew.png') }} style="width: 980px">
<h3>Peplenish And Renew</h3>
<p class="text-justify">
Every apartment features a designer kitchen, fully equipped with world-class Miele
kitchen appliances, stone splashbacks
and Caesarstone benchtops.
<br>Frameless, smoky mirrored built-in wardrobes
in all bedrooms provide ample storage for bedroom necessities while elegant ensuites with
a freestanding bath create stylish havens in which to unwind with ample concealed and open storage for your bathing essentials.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/LivingInsidetoView.jpg') }} style="width: 980px">

<p class="text-justify" style="padding-top: 20px;">
<h3> DESIGNER LIVING</h3>
Every room of these expansive apartments sees the outdoors drawn inside while effortlessly maintaining its own sense of privacy. Oversized balconies serve as outdoor rooms with sensational vistas amplifying the sense of space.
Floor-to-ceiling glass windows sculpts the interiors with an abundance of natural light while creating seamless transitions for fluid indoor-outdoor living all year round.
Artist impression
<li>
 Two beautiful colour schemes create the perfect backdrop – Neutral and Contrast</li>
<li>
  Timber-finished tiles flow throughout the living, dining and kitchen areas
</li>
<li>
 Integrated reverse-cycle air conditioning keeps the apartment cool in summer and provides warmth in the winter months</li>
<li>
  A media hub features in most apartments</li>
<li>
	LED downlights shimmer throughout the entire apartment </li>
	<li> Provisions are provided for broadband internet and pay TV</li>
<li>
 An enclosed internal laundry with dryer comes with cabinetry for extra storage needs</li></p>
 <hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Kitchen.jpg') }} style="width: 550px;">
<div class="float-right" style="width: 430px; padding-left: 50px; padding-top: 20px;">
<h3>SCULPTURED KITCHENS</h3>
<p class="text-justify">
The intuitive design of the kitchens at Allium puts everything at your fingertips. These inspiring spaces are the heart of the apartments and your place to gather and share a meal with friends and family. Kitchens are fully equipped with:
<li>
 MIELE stainless appliances include an integrated dishwasher, four burner cooktop, microwave and oven with black glass and ducted rangehood</li>
<li>Glass splashbacks and Caesarstone benchtops</li>
<li> Polyurethane cabinetry, soft-closing drawers and polished chrome fittings complete the design for a premium feel</li>
</p>
</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/Bathroom.jpg') }} style="width: 550px;">
<div class="float-left" style="width: 430px; padding-right: 50px; padding-top: 20px;">
<h3>RELAXING BATHROOMS</h3>
<p class="text-justify">
Take time to pamper and step into your relaxing bathroom that allows you to replenish and renew.
<li>
 A luxurious free-standing bath serves as a centerpiece in most ensuites</li>
<li> Frameless glass showers with polished chrome fixtures</li>
<li> Floor-to-ceiling tile feature wall</li>
<li>Wall-mounted floating basin and toilet suites with concealed cistern</li>
<li>Mirrored wall-hung cabinetry provides ample storage</li>
</p>
</div>
</div>

<div class="w3-content w3-display-container"><hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/POOL.jpg') }} style="width: 980px">
<p class="text-justify" style="padding-top: 15px;">
<h3> RESORT-STYLE FACILITIES</h3>
With easy access to Allium’s ultimate resort facilities, you can ensure your family and friends will be entertained with a variety of leisure activities all year round. On-site facilities include:
<li> Secure building access and a warm welcoming lobby in each tower</li>
<li>Lush landscaped parklands and a podium rooftop retreat</li>
<li> Podium level cinema and BBQ facilities bordered by luscious green gardens</li>
<li> Indoor aquatic centre including heated lap pool, spa and sauna</li>
<li> Fully equipped gymnasium</li>
<li> A superior level of service with a dedicated on-site building manager</li>
<li> Secure undercover resident and visitor parking with lift access</li>
<li>  Future shopping and dining precinct</li>
</p>
</div>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/map2.png') }}>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/UNSW.png') }}>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/University.png') }}>
<div class="float-left" style="width: 700px; padding-right: 70px;">
<h3>THE FINEST EDUCATIONAL INSTITUTES</h3>
<p class="text-justify">
At Pagewood Green you’re within easy reach of Sydney’s best colleges, schools and universities, as well as numerous pre-schools and primary schools for the little ones.
Take a leisurely 15 minute walk each morning to the local primary school, Pagewood Public School, or drive five minutes to Matraville Public School or St Aidan’s Catholic Primary School.
Right on your door step are numerous top performing senior schools including Marcellin College, Brigidine College, Waverley College and St Catherine’s. Travel a bit further afield through the eastern beaches to find Cranbrook, Ascham, Kambala, Moriah College, Scots College, and St Vincent’s College amongst many.
You’re also conveniently close to the University of NSW, UNSW Australian Art and Design, University of Technology Sydney, University of Notre Dame and Sydney University, making Pagewood Green a desirable address for all people no matter what stage of their educational life they are at.
</p>
</div>
</div>
<img src={{ URL::asset('/img/meriton/pagewood5Allium/beaches.png') }}>
<p class="text-justify" style="padding-top: 20px;">Future stages of the Pagewood Green master planned design will provide an accessible retail precinct in the center of the development offering alfresco dining options and specialty stores. This precinct will hum with the sound of espresso machines, on-trend providores and essential daily services overlooking the 8,000sqm Central Park.
Nowhere in the eastern suburbs will buyers be able to acquire brand new apartments of grand proportions in a tranquil and green environment, apartments that are affordable for growing families and close to the city. Just compare Pagewood Green to the competition!</p>
<hr class="new1">
<img src={{ URL::asset('/img/meriton/pagewood5Allium/art.png') }}>
<img src={{ URL::asset('/img/meriton/pagewood5Allium/living.png') }}>
</div>




<div class="pricelist" style="padding-top: 50px;">
<h1>Typical Floor Plan</h1><br>
<a href="{{ asset('documents/meriton/pagewood5Allium/FloorPlanLevel12-14.pdf') }}" target="_blank">Building Map.pdf</a>
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
  <a href="{{ asset('documents/meriton/pagewood5Allium/1Bed.pdf') }}" target="_blank">1 Bed.pdf</a>
  <br>
  <a href="{{ asset('documents/meriton/pagewood5Allium/2Bed.pdf') }}" target="_blank">2 Bed.pdf</a>
  </div>

  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>

  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">
    <a >          </a>
  </div>
</div>
</div>
<div class="down" style="background-color: #000000 ">
        <p style="color: aliceblue ; width: 900px; padding-left: 500px;">One Group Global Investment Pty Ltd&copy;
                <br>Address: Level 6, 201 Kent Street, Sydney, 2000
                <br>Email: fiona.l.xing@gmail.com
                Tel: 0413 384 119 </p>
                </div>

                <a href="{{ route('SEND_EMAIL') }}" class="float">
                <i class="fa fa-plus my-float">
                <img src={{ URL::asset('/img/others/email.png') }} style="width: 45px; height:45px;">
                </i>
                </a>

</body>
</html>
