@extends('master')

@section('title', 'Contact')
@section('content')

<div class="background-image container row">

	<h1 class="center-align">Contact</h1>
		
		<div class="card-panel col s10 offset-s1 m8 offset-m2 l8 offset-l2">
			<div class="section">
				<p class="flow-text">Want to help us with buying, packing or just have some 
				general questions about the whole process? drop us an email at 
					<a href="mailto:fruitondemand@gmail.com">
						<span class="bold">
							fruitondemand@gmail.com
						</span>
					</a>
				</p>
			</div>
		</div>

	<h1 class="center-align">Location</h1>

	<div class="col s4 m8 l8">
		<p>Here is where the crates are picked up from</p>
		<!-- Google Maps -->
		<div class="gmap">This is a gmap</div>
	</div>
</div>

@endsection