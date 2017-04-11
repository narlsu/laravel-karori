@extends('master')

@section('title', 'Contact')
@section('content')

<div class="background-image">

	<h1>Contact</h1>

		<div>
			<p>Want to help us with buying, packing or just have some 
			general questions about the whole process>? drop us an email at 
				<a href="mailto:fruitondemand@gmail.com">
					<span class="bold">
						fruitondemand@gmail.com
					</span>
				</a>
			</p>
		</div>

	<h1>Location</h1>

	<div>
		<p>Here is where the crates are picked up from</p>
		<!-- Google Maps -->
		<div class="gmap">This is a gmap</div>
	</div>
</div>

@endsection