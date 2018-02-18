function initMap() {

	var panvel1 = {
		info: '<strong>Harish Medical</strong><br>\
					<br> New Panvel<br>\
					<a href="https://goo.gl/maps/gPCzyXifuBS2">Get Directions</a>',
		lat: 18.9927, 
		long: 73.1237
	};

	var panvel2 = {
		info: '<strong>Navaratna Medical</strong><br>\
					Panvel2<br> Navi Mumbai<br>\
					<a href="https://goo.gl/maps/gXXoef2McRG2">Get Directions</a>',
		lat: 19.00,
		long: 73.11
	};

	var kharghar = {
		info: '<strong>National medicals</strong><br>\r\
					<br> kharghar<br>\
					<a href="https://goo.gl/maps/LY1nWfevi752">Get Directions</a>',
		lat: 21.25,
		long: 81.57  
	};

	var locations = [
      [panvel1.info, panvel1.lat, panvel1.long, 0],
      [panvel2.info, panvel2.lat, panvel2.long, 1],
      [kharghar.info, kharghar.lat, kharghar.long, 2],
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: new google.maps.LatLng(20.593684, 78.962880),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
}
