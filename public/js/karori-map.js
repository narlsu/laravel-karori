function initMap(){
	// google maps is ready to be used
	var theDiv = document.querySelector('#karori-map');
	// data on Te Papa
	var karoriData = {
		lat: -41.2837551,
		lng: 174.7408745
	};
	var mapOptions = {
		zoom: 15,
		center: karoriData
	};
	// create the map
	var theMap = new google.maps.Map(theDiv,mapOptions);

	//
	var karoriMarkerOptions = {
		position: karoriData,
		map: theMap,
		icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
	};
	// now we can create markers
	var karoriMarker = new google.maps.Marker(karoriMarkerOptions);

	// find out where the user is
	// make sure the device has Geolocation capabilities
	if(navigator.geolocation){
		// Yes, the device has geolocation capabilities
		// ASK the user for the location
		 navigator.geolocation.getCurrentPosition(function(position){
		 	console.log(position);
		 	var userData = {
		 		lat: position.coords.latitude,
		 		lng: position.coords.longitude
		 	};
		 	// prepare the user marker options
		 	var userMarkerOptions = {
		 		position: userData,
		 		map: theMap
		 	};
		 	// create a marker to represent the user
		 	var userMarker = new google.maps.Marker(userMarkerOptions);
		 	userMarker.setAnimation(google.maps.Animation.DROP);
		 	// focus on the users location
		 	// pan over nicely if the two points are close enough
		 	// instantly transition if points are distant
		 	theMap.panTo(userData);
		 	// prepare the nerd (good at calculating routes)
		 	var directionsService = new google.maps.DirectionsService();
		 	// prepare the artist (to draw directions on the map)
		 	var directionsDisplay = new google.maps.DirectionsRenderer();
		 	// tell the artist which map to paint on
		 	directionsDisplay.setMap(theMap);
		 	// direction settings
		 	var directionSettings = {
		 		origin: userData,
		 		destination: karoriData,
		 		travelMode: google.maps.TravelMode['DRIVING'] // WALKING, BICYCLING, TRANSIT
		 	};
		 	// do the calculations (this actually gets sent to google)
		 	directionsService.route(directionSettings, function(response, status){
		 		// once the math is complete
		 		if (status == 'OK') {
		 			// tell the artist to draw on the map
		 			directionsDisplay.setDirections(response);
		 		}
		 	});
		 });
	} else {
		// No !!!
	}
}