
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Company</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
 <style>
      marquee {
        width: 100%;
        padding: 10px 0;
        background-color: lightblue;
      }
    </style>
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
  <marquee direction="scroll">One Group Global Investment PTY LTD Activity </marquee>

	  <div class="w3-content w3-display-container" style="padding-top: 50px;">

	<table border="1">
    <tr>
        <td><img src="{{ URL::asset('/img/company/2018-04-06.18.13.11.jpg') }}" class="img-thumbnail"></td>
        <td><img src="{{ URL::asset('/img/company/2018-04-21.21.18.33.jpg') }}" class="img-thumbnail"></td>
    </tr>
    <tr>
        <td><img src="{{ URL::asset('/img/company/2018-04-21.18.22.38.jpg') }}" class="img-thumbnail"></td>
        <td><img src="{{ URL::asset('/img/company/2018-06-02.14.07.13.jpg') }}" class="img-thumbnail"></td>
    </tr>
      <tr>
        <td><img src="{{ URL::asset('/img/company/2018-06-02.14.04.25.jpg') }}" class="img-thumbnail"></td>
        <td><img src="{{ URL::asset('/img/company/2018-06-02.14.35.23.jpg') }}" class="img-thumbnail"></td>
    </tr>
          <tr>
        <td><img src="{{ URL::asset('/img/company/1-1.jpg') }}" class="img-thumbnail"></td>
        <td><img src="{{ URL::asset('/img/company/1-3.jpg') }}" class="img-thumbnail"></td>
    </tr>
</table>
	</div>
</body>
</html>
