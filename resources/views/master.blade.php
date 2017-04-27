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
	<div class="desktop-background">	
		<div class="desktop-contain">
			@include('partials._nav')

				
			
			<div class="carousel carousel-slider valign-wrapper center" data-indicators="true">
			    <div class="carousel-fixed-item center">
			    	<h1 class="header-text white-text">Welcome to the Karori Food Co-op</h1>
			    	<a class="btn waves-effect white grey-text darken-text-2">button</a>
			    </div>
			    <div class="background-image1 carousel-item c-style" href="#one!">
			    </div>
			    <div class="background-image2 carousel-item c-style" href="#two!">
			    </div>
			    <div class="background-image3 carousel-item c-style" href="#three!">
			    </div>
			    <div class="background-image4 carousel-item c-style" href="#four!">
			    </div>
			  </div>


			@yield('content')
			
		</body>
		{{-- Flex Footer --}}
		<footer class="flex-container-foot">
				<div class="foot-child-cont">
					<a class="black-anchor footer-item-margin" href="www.facebook.com"><img class="fblogo" src="images/facebooklogo.svg" alt="facebook page link"></a>
					<p class="hide-on-small-only">Follow us on Facebook!</p>
				</div>

				<div class="foot-child-cont">
					<a class="black-anchor footer-item-margin" href="/contact">
						<i class="material-icons">email</i>
					</a>
					<p class="hide-on-small-only">Any questions? Message Us.</p>
				</div>
				
		</footer>
	</div>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <!-- Javascript Linked -->
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/called.js"></script>

@yield('scripts')

</html>















