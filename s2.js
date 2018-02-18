function initMap() {

	var vashi = {
		info: '<strong>Akhil Medical</strong><br>\
					Sector-17<br> Vashi, Navi Mumbai<br>\
					<a href="https://goo.gl/maps/UJN9xB1CDAq">Get Directions</a>',
		lat: 19.448, 
		long: 73.3878
	};

	var nerul = {
		info: '<strong>Terna Medical college</strong><br>\
					Nerul<br> Navi Mumbai<br>\
					<a href="https://goo.gl/maps/dxYCdHHB6Hw">Get Directions</a>',
		lat: 21.056,
		long: 79.000
	};

	var thane = {
		info: '<strong>Lions medical</strong><br>\r\
					<br> Thane<br>\
					<a href="https://goo.gl/maps/dbLf7trriGp">Get Directions</a>',
		lat: 19.108507,
		long: 73.005257
	};

	var locations = [
      [vashi.info, vashi.lat, vashi.long, 0],
      [nerul.info, nerul.lat, nerul.long, 1],
      [thane.info, thane.lat, thane.long, 2],
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: new google.maps.LatLng(19.033049, 73.029662),
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
