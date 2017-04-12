@extends('master')

@section('title', 'Home')
@section('content')

<div class="background-image">

	<h1 class="center-align">About Us</h1>

	<div class="card">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae, sit doloribus quasi deleniti, quidem animi fugiat autem veniam soluta vero ipsum nemo ipsa vel, vitae culpa laborum modi similique!</p>
	</div>

	<h2 class="center-align">How it works</h2>
	{{-- Infographic --}}
	<img src="http://placehold.it/350x350" alt="Infographic on Karori Food Co-Op and how it works.">

	<h2 class="center-align">Special Thanks</h2>
	<p>Special thanks to Graeme for letting us use his garage for fruit sorting, etc. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo est libero mollitia aperiam. Assumenda, dolore! Corporis beatae quisquam nulla, culpa incidunt delectus illum, est, quas, in itaque nisi quo excepturi!</p>

</div>
@endsection