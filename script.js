function initMap() {

	var vashi = {
		info: '<strong>Akhil Medical</strong><br>\
					Sector-17<br> Vashi, Navi Mumbai<br>\
					<a href="https://goo.gl/maps/UJN9xB1CDAq">Get Directions</a>',
		lat: 19.074173, 
		long: 72.997894
	};

	var nerul = {
		info: '<strong>Wellness Forever</strong><br>\
					Nerul<br> Navi Mumbai<br>\
					<a href="https://goo.gl/maps/dxYCdHHB6Hw">Get Directions</a>',
		lat: 19.039924,
		long: 73.020602
	};

	var thane = {
		info: '<strong>Lions medical</strong><br>\r\
					<br> Thane<br>\
					<a href="https://goo.gl/maps/dbLf7trriGp">Get Directions</a>',
		lat: 19.043380,
		long: 73.0222396,

	};
var dines = {
		info: '<strong>dinesh Medical</strong><br>\r\
					<br> Nerul<br>\
					<a href="https://goo.gl/maps/dbLf7trriGp">Get Directions</a>',
		lat: 19.036284,
		long: 73.023396,

	};
	var soham = {
		info: '<strong>soham</strong><br>\r\
					<br> soham medicals<br>\
					<a href="https://goo.gl/maps/qqNhmZ5TR6w">Get Directions</a>',
		lat: 19.040910,
		long: 73.023501,

	};

	var locations = [
      [vashi.info, vashi.lat, vashi.long, 0],
      [nerul.info, nerul.lat, nerul.long, 1],
      [thane.info, thane.lat, thane.long, 2],
    ];

 
    var l2 = [
    	[dines.info, dines.lat, dines.long,0],
    	[soham.info, soham.lat, soham.long,1]
    ];

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 13,
		center: new google.maps.LatLng(19.033049, 73.029662),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var infowindow = new google.maps.InfoWindow({});

	var marker, i;
// icon:"http://maps.google.com/mapfiles/ms/icons/blue-dot.png",
	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({

			position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			map: map
		});

		
		google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				infowindow.setContent(locations[i][0]);
				// infowindow.setContent(l2[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}
	for (i = 0; i < l2.length; i++) {
		marker = new google.maps.Marker({
			icon:"http://maps.google.com/mapfiles/ms/icons/blue-dot.png",
			position: new google.maps.LatLng(l2[i][1], l2[i][2]),
			map: map
		});
	google.maps.event.addListener(marker, 'click', (function (marker, i) {
			return function () {
				// infowindow.setContent(locations[i][0]);
				infowindow.setContent(l2[i][0]);
				infowindow.open(map, marker);
			}
		})(marker, i));
	}

}


