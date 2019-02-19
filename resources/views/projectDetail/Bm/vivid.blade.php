<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ViVid</title>
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
    <img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_INT_Bedroom.jpg') }} style="width:100%">
    <img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_RoofTerrace.jpg') }} style="width:100%">
    <img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_LivingtoBalcony(1).jpg') }} style="width:100%">
		<img class="mySlides" src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_INT_Kitchen_Living.jpg') }} style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>

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
<h1>South Village Kirrawee</h1>
<h2>VIVID</h2>
<img src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_Exterior(1)SMALL.jpg') }} style="width: 1000px;" >
<br><br>
<p class="text-justify">Founded in 1999, Deicorp has been operating as a privately- owned property development and construction group for residential, commercial and retail real estate.<br>
Deicorp first entered the Sydney development scene in the trendy suburb of Newtown with a 3 storey residential development.<br>
Today, Deicorp has developed and worked on over 6,000 apartments, 110,000sqm of retail/commercial suites and has over $1.5 billion of work in the pipeline.<br>
Serving as testament to Deicorp’s experience is an incredibly diligent management team, dedicated employees and united partnerships. A clear and shared vision of Ambition, Quality, Efficiency and Professionalism is the driving force behind the company’s success.</p>
</div>


<div class="w3-content w3-display-container">
<p class="text-justify">
To know The Shire is more than just to love it.
You’ll never want to leave it. South Village, in the heart of Kirrawee at the epicentre of the Sutherland Shire, is an expression of this vitality. It draws on the beauty of its natural surroundings, infusing that with outstanding architectural innovation and new insights into urban living, now and well into the future. It’s a village bordered by the pristine bushland of the Royal National Park and the tranquil waterways of Port Hacking. The white sands of Cronulla Beach are minutes away and the vibrant camaraderie of the Shire is yours to enjoy. Every day.
<br><br>
It’s the Sutherland Shire, the whole area is booming and it’s actually really opening up, with Kirrawee being the biggest beneficiary of the change. GARY, 50, STAGE 1 PURCHASER
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/walk.png') }} style="width: 980px;">
<p class="text-justify">
Every aspect, South Village – your new neighbourhood – has been designed to engender a sense of community. It’s designed to draw you in and quietly encourage you to take a stroll from open spaces to secluded gardens, along broad pedestrian boulevards, past café tables spilling onto leaf dappled laneways. It’s a village in every sense where getting to know your neighbours is a natural happenstance of your daily life. Before you know it you’ll wonder why you would possibly live anywhere else.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/bm/vivid/convenient.png') }} style="width: 550px;">
<div class="float-right" style="width: 430px; padding-left: 20px;padding-top: 140px;">
<h3>CONNECTIVITY</h3>
<p class="text-justify">
Proximity. It’s the pivotal aspect of urban life, the attribute that influences one of your most precious commodities. Your time. Time to spend with your family, time to simply relax. And less time commuting, no longer wasting hours getting to and from the places you want to or need to be. From your Vivid doorstep you’re surrounded by major bus networks and only 130 metres from Kirrawee train station and that’s just 33 minutes from the Sydney CBD. By car you’re mere minutes from Sydney’s major metropolitan road and freeway networks. And with the airport nearby, the world is at your feet.
</p>
</div>
</div>
<hr class="new1">
<img src={{ URL::asset('/img/bm/vivid/SVVIVIDLOCATIONMAP.png') }}>
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/openSpace.png') }} style="width: 550px;">
<div class="float-left" style="width: 430px; padding-right: 50px; padding-top: 70px;">
<p class="text-justify">
At home at Vivid you’ve got so much more room to
spread your wings. Expanses of parkland and open spaces infuse light and colour – elements of the very definition
of vivid – into your everyday life. Whether you’re out for
a stroll or walking to work, taking your kids to one of their favourite playgrounds or taking time out in your favourite garden nook or café, you’ve all the space in the world. With 9,000sqm of landscaped gardens, plus the vast natural beauty of the Royal National Park and Cronulla Beach so close at hand, life at Vivid is crafted to make the most of the sun drenched climate the Shire is famous for.
</p>
</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/azure.png') }} style="width:480px; height: 600px; border: 5px solid #CBC6C6 ;"> </div>

<div class="float-left" style=" padding-right: 20px;">
<img src={{ URL::asset('/img/bm/vivid/acho.png') }} style="width: 480px; height: 600px; border: 5px solid #CBC6C6 ;">
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/fingertips.png') }} style="width: 550px;">
<div class="float-left" style="width: 430px; padding-right: 50px; padding-top: 70px;">
<h3>VILLAGE FACILITIES</h3>
<p class="text-justify">
It’s a carefully considered approach that delivers
a wonderfully versatile result. We called it dynamic diversity, a combination of the absolutely practical with the whimsically wonderful. While you’re just minutes from Westfield Miranda, right at your doorstep you can stock the pantry at Aldi or Coles with a daily top up
of fresh produce and just baked bread at one of your favourite neighbourhood providores, all in your village. With approximately 27 specialist stores, all part of your community, you can find perfect additions to your new home’s décor and small pockets of fashion to embellish your wardrobe. From every perspective it’s a fresh, vivid outlook on life.
</p>
</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/map.png') }} style="width:480px; height: 600px; border: 5px solid #CBC6C6 ;"> </div>
<div class="float-left" style=" padding-right: 20px;">
<img src={{ URL::asset('/img/bm/vivid/map2.png') }} style="width: 480px; height: 600px; border: 5px solid #CBC6C6 ;">
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/kitch.png') }} style="width: 980px;" >
<br><br>
<h3>THE VIVID PORTFOLIO</h3>
<p class="text-justify">Your home is as individual as you are. This begins with the physical attributes you’re looking for in choosing
the amount of space you need with the adaptability and the expanse you want. Select from a portfolio of 1, 2 and 3 bedroom apartments, each with in-built storage to keep your living spaces beautifully uncluttered. Make the investment decision that’s right for you and the lifestyle choice where you can effortlessly make the most of every day. You don’t need to be told, you know what you want. Whatever your choice, all the design elements are there for you to vividly colour your world your way</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/view1.png') }} style="width: 980px;" >
<br><br>
<h3>BUILDING ARCHITECTURE</h3>
<p class="text-justify">Vivid is an integral component of South Village yet it also stands alone as a unique architectural statement. In its premier position on the north-eastern flank of the village on one of the highest vantage points in the Sutherland Shire, Vivid capitalises on panoramic views from the Sydney CBD to Botany Bay, across the rolling waves of Cronulla Beach and the green swathes of the Royal National Park. Stark white bands frame broad balconies. Surrounded by landscaped gardens, Vivid embodies its name – picturesque and impressive.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<img src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_Exterior(1)SMALL.jpg') }} style="width: 980px;" >
<br><br>
<h3>SECURITY / PARKING FACILITIES</h3>
<p class="text-justify">Your new home at Vivid is an oasis of calm above
the energy of your village environment. Reflecting this transition, the sophisticated ground foyer entrance to your residence is discreetly placed, completely secure
yet gracefully decorated and warmly welcoming. From your protected underground parking facilities you’re whisked skyward in security controlled elevators to your apartment above. Your home is your haven, that’s why your security, peace of mind and seclusion are paramount factors in designing your ideal living environment.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/SouthVillage_CGI_LivingtoBalcony(1).jpg') }} style="width: 550px; height: 420px">
<div class="float-left" style="width: 430px; padding-right: 50px; padding-top: 70px;">
<h3>LIVING SPACES</h3>
<p class="text-justify">
Light and space. These are the elements of exceptional living environments. Natural light tumbles through thermally and acoustically treated glass, deflecting summer glare and the hubbub of urban life. Every apartment is articulated to maximise the surrounding vistas, inviting sunshine and cross breezes. This only enhances the feeling of space afforded by clean, uncluttered expanses of textured joinery and polished tile floors. And when weather conditions reach their extremes, silent and efficient climate control keeps your world absolutely perfect.
</p>
</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/clear.png') }} style="width:480px; height: 600px; border: 5px solid #CBC6C6 ;"> </div>
<div class="float-left" style=" padding-right: 20px;">
<img src={{ URL::asset('/img/bm/vivid/hearth.png') }} style="width: 480px; height: 600px; border: 5px solid #CBC6C6 ;">
</div>
<h3>KITCHENS</h3>
<p class="text-justify">
Whether it’s a quick breakfast to start your day or preparing dinner with fresh ingredients from your village providores, this is the core of your home’s life and style. Reflecting this importance, your Vivid kitchen integrates designer features and finishes. Lustrous tapware and prestige SMEG appliances are embedded alongside polished stone bench tops and richly grained cabinets that provide storage for all your culinary requirements. Unfolding to your main living areas, inviting family and friends to share in its warmth, your kitchen is the hearth of your home.
</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/bed1.png') }} style="width: 550px; height: 450px;">
<div class="float-left" style="width: 430px; padding-right: 50px; padding-top: 70px;">
<h3>BEDROOMS & BATHROOMS</h3>
<p class="text-justify">
As the absolute centre of your oasis, the plush carpeting of your Vivid bedrooms spread across generous proportions to windows that make panoramic views the living artwork of your world. Each bedroom is fully appointed with built-in wardrobes that enhance the colourways of your home. Fulfilling the architects’ resolute attention to quality, beauty and detail, every bathroom includes prestige touches and softly polished surfaces. These elements of your home embody sanctuary and serenity, reflecting
your distinctive appreciation for beauty and individuality.
</p>
</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-left">
<img src={{ URL::asset('/img/bm/vivid/bed2.png') }} style="width: 550px; height: 450px;">
<div class="float-right" style="width: 430px; padding-left: 50px; padding-top: 70px;">
<h3>INDOOR / OUTDOOR LIVING</h3>
<p class="text-justify">
The balcony of your Vivid apartment is not an adjunct
to your home, it’s a seamless, sensational and integral element of your living environment. The expanse of these balconies is enhanced by the breadth of the floor to ceiling glass doors that slide back before them. This is where natural light takes centre stage, fluently bringing the interior and exterior spaces together. It’s best measured and admired as you cross the threshold of your apartment. Momentarily pause and take it all in. From there the unique elegance of the home you’ve designed stretches out before you.
</p>
</div>
</div>
<hr class="new1">
</div>

<div class="w3-content w3-display-container"><br>
<h3>ROOFTOP / OTHER BUILDING FACILITIES</h3>
<p class="text-justify">Above it all, away from it all, this is a luxurious, exclusive and sophisticated feature of your home. A rooftop garden running the breadth of Vivid is designed with two key goals in mind. The first is to provide an even greater vista of the world around you, taking in views from the mountains to the sea, from the CBD to endless vistas of native Australian bushland. Secondly, this is a thoughtfully planned and elegantly appointed retreat that’s an added dimension of your private living space. Here you can relax with a good book. Or mingle at sophisticated barbecue and entertainment facilities to entertain friends and family for an idyllic afternoon or under the stars.</p>
<hr class="new1">
</div>

<div class="w3-content w3-display-container">
<div class="float-right">
<img src={{ URL::asset('/img/bm/vivid/w1.png') }} style="width:480px; height: 600px; border: 5px solid #CBC6C6 ;"> </div>
<div class="float-left" style=" padding-right: 20px;">
<img src={{ URL::asset('/img/bm/vivid/w2.png') }} style="width: 480px; height: 600px; border: 5px solid #CBC6C6 ;">
</div>
<hr class="new1">
<h3>3D Model</h3>
<div class="w3-content w3-display-container">
 <hr class="new1">
<iframe src="https://web.snaploader.com/3d/?tag_id=5b51b1096c6208044dac2515&model_id=5b51b16d6c6208044dac2544" style="width: 980px;height: 800px;  padding-top: 25px; ">
</iframe>
</div>




<h1>Typical Floor Plan</h1>
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
    <a class="nav-link" id="Strate-tab" data-toggle="tab" href="#Strate" role="tab" aria-controls="contact" aria-selected="false">Strata Levy</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="FAQ" role="tabpanel" aria-labelledby="FAQ-tab">FAQ...</div>
  <div class="tab-pane fade" id="Depreciation" role="tabpanel" aria-labelledby="Depreciation-tab">Depreciation...</div>
  <div class="tab-pane fade" id="Schedule" role="tabpanel" aria-labelledby="Schedule-tab">Schedule...</div>
  <div class="tab-pane fade" id="Strate" role="tabpanel" aria-labelledby="Strate-tab">Strata...</div>
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
