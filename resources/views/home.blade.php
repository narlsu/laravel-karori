@extends('master')

@section('title', 'Home')
@section('content')

<div class="background-image container">

	<h1 class="center-align">About Us</h1>
	<div class="row">
	<div class="card-panel col s10 offset-s1 m8 offset-m2 l8 offset-l2">
		<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae, sit doloribus quasi deleniti, quidem animi fugiat autem veniam soluta vero ipsum nemo ipsa vel, vitae culpa laborum modi similique!</p>
	</div>
	</div>
	<div class="row">
	<h2 class="block center-align">How it works</h2>
	</div>
	{{-- Infographic --}}
	<img src="http://placehold.it/350x350" alt="Infographic on Karori Food Co-Op and how it works.">
	<div class="">
	<h2 class="center-align">Special Thanks</h2>
	</div>
	<div class="card-panel col s10 offset-s1 m8 offset-m2 l8 offset-l2 margin">
		<p class="flow-text">Special thanks to Graeme for letting us use his garage for fruit sorting, etc. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo est libero mollitia aperiam. Assumenda, dolore! Corporis beatae quisquam nulla, culpa incidunt delectus illum, est, quas, in itaque nisi quo excepturi!</p>
	</div>
</div>
@endsection