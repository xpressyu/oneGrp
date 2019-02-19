
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Social Service</title>
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
  <div class="w3-content w3-display-container" style="padding-top: 50px;">
  <table border="1">
    <tr>
        <td><img src={{ URL::asset('/img/socialService/1.jpg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/2.jpg') }} class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src={{ URL::asset('/img/socialService/3.jpg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/4.jpg') }} class="img-thumbnail"></td>
    </tr>
      <tr>
        <td><img src={{ URL::asset('/img/socialService/5.jpg') }} class="img-thumbnail"></td>
        <td><img src={{ URL::asset('/img/socialService/6.jpg') }} class="img-thumbnail"></td>
    </tr>
</table>
	</div>
	<p>
    2019年春节 大家都在准备年货，可是有一些家庭，因为天降的种种“灾难”，与普通人的生活质量拉开了很大的差距，被政府评为了贫困家庭，为此，OneGroup公司准备了一些生活必需物资（其中包括大米、白面，食用油）跟随南孙庄乡党委一同前去慰问贫困家庭，为他们送去春节的问候！1月30日（农历腊月二十五）的上午，天气格外寒冷，公棚用两辆别克车装载好为南孙庄乡十几户贫困家庭准备的生活物资，准备出发去慰问他们！
	</p>
</body>
</html>
