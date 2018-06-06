function initMap() {
	var uluru = {lat: 4.614076, lng: -74.212365};
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 16,
	  center: uluru
	});
	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map
	});
}