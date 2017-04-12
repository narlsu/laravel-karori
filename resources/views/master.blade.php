<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="navbar-fixed">
		<nav>
			<div  class="nav-wrapper">
				<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
				<a href="#" class="brand-logo">Logo</a>
				<ul  class="right hide-on-med-and-down">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/contact">Contact</a></li>
					<li><a href="#">Recipes</a></li>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Login</a></li>
					<!-- Logged in / admin only features -->
					<!-- <li><a href="#">Logout</a></li>
					<li><a href="#">Recipes Editor</a></li>
					<li><a href="#">Your Crate</a></li> -->

				</ul>
			</div>
		</nav>
			</div>
			<ul class="side-nav" id="mobile">
				<li><a href="/">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="#">Recipes</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Login</a></li>
				<!-- Logged in / admin only features -->
				<!-- <li><a href="#">Logout</a></li>
				<li><a href="#">Recipes Editor</a></li>
				<li><a href="#">Your Crate</a></li> -->
			</ul>

		
	
	<div class="carousel carousel-slider valign-wrapper center" data-indicators="true">
	    <div class="carousel-fixed-item center">
	    	<h1 class="valign white-text">Welcome to the Karori Food Co-op</h1>
	    	<a class="btn waves-effect white grey-text darken-text-2">button</a>
	    </div>
	    <div class="carousel-item red white-text" href="#one!">
	    	<h2>First Panel</h2>
	    	<p class="white-text">This is your first panel</p>
	    </div>
	    <div class="carousel-item amber white-text" href="#two!">
	    	<h2>Second Panel</h2>
	    	<p class="white-text">This is your second panel</p>
	    </div>
	    <div class="carousel-item green white-text" href="#three!">
	    	<h2>Third Panel</h2>
	    	<p class="white-text">This is your third panel</p>
	    </div>
	    <div class="carousel-item blue white-text" href="#four!">
	    	<h2>Fourth Panel</h2>
	    	<p class="white-text">This is your fourth panel</p>
	    </div>
	  </div>


	@yield('content')
	
</body>

<footer>
		<a href="www.facebook.com"><img src="#" alt="facebook page link"></a>
		<a href="/contact"><img src="#" alt="Message us icon"></a>
</footer>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <!-- Javascript may not be linked up yet -->
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/called.js"></script>

</html>