<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/public/css/app.css">
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>\
			<li><a href="#">Recipes</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Login</a></li>
			<!-- Logged in / admin only features -->
			<!-- <li><a href="#">Logout</a></li>
			<li><a href="#">Recipes Editor</a></li>
			<li><a href="#">Your Crate</a></li> -->


		</ul>
	</nav>

	<div class="carousel">
	    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
	    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
	    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
	    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
	    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
	</div>


	@yield('content')
	
</body>

<footer>
		<a href="www.facebook.com"><img src="#" alt="facebook page link"></a>
		<a href="/contact"><img src="#" alt="Message us icon"></a>
</footer>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <!-- Javascript may not be linked up yet -->
<script type="text/javascript" src="public/js/materialize.min.js"></script>
</html>