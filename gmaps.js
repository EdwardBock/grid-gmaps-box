(function($, w, d, u){

	$(function(){
		$(".grid-box-gmaps .the-map").each(function(index, element){
			console.log(google);
			var lat = element.getAttribute("data-lat");
			var longi = element.getAttribute("data-long");
			var id = element.getAttribute("id");

			var position = new google.maps.LatLng(lat, longi);

			var mapOptions = {
			    zoom: 15,
			    center: position,
			 };
		  	var map = new google.maps.Map(element,
		      mapOptions);

		  	var marker = new google.maps.Marker({
		      position: position,
		      map: map,
		      title: 'Andreas Hänsel Steuerberater'
		  });

		  	var infowindow = new google.maps.InfoWindow({
		        content: '<div class="grid-box-gmaps-infowidow"><p>'+
		        			'<strong>Andreas Hänsel Steuerberater</strong><br />'+
		        			'Leiblstraße 101<br />'+
		        			'33615 Bielefeld'+
		        		'</p></div>',
		    });

		    infowindow.open(map,marker);

		  	google.maps.event.addListener(marker, 'click', function() {
			    infowindow.open(map,marker);
			});

		});
		
	});

	

})(jQuery, window, document);