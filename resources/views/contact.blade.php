@extends('master')

@section('title', 'Contact')
@section('content')

	<div class="background-image container">

		<h1 class="center-align">Contact</h1>
			<div class="row">
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
			</div>
		<h1 class="center-align">Location</h1>

		<div class="card-panel col s10 offset-s1 m8 offset-m2 l8 offset-l2 map-cont">
			<p class="center-align">Here is where the sorting warehouse and crate pickup is located.</p>
			<div id="karori-map" class="col s4 m8 l8">
				<p>Here is where the crates are picked up from</p>
				<!-- Google Maps -->
			<div >
		</div>	
		</div>

		



	    <script src="/js/karori-map.js" type="text/javascript"></script>
	    
	   	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC8MEcqwg8-qEG60a6VxxccXAy2Iglq7w&callback=initMap"
	  type="text/javascript"></script>
		</div>
	</div>

@endsection

@section('scripts')

@endsection