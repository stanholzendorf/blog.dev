(function() {
	
'use strict';
var markerglobal;
var latCo = $('#lat').val();
var lngCo = $('#lng').val();

	function buildContent(weatherData) {
		console.log(weatherData);

		$('#day1').html("");
		$('#day2').html("");
		$('#day3').html("");
		$('#cityName').html("");

		weatherData.list.forEach(function(element, index, array) {

			var dataInput = "";
			dataInput += "<div>";
				dataInput += "<h4>" + element.temp.day + " / " + element.temp.eve + "</h4>"
				dataInput += "<img src ='http://openweathermap.org/img/w/" + element.weather[0].icon + ".png'>";
				dataInput += "<p>" + element.weather[0].description + "</p>";
				dataInput += "<p>" + "Humidity: " + element.humidity + "</p>";
				dataInput += "<p>" + "Wind Speed: " + element.speed + "</p>";
				dataInput += "<p>" + "Pressure: " + element.pressure + "</p>";
			dataInput +="</div>";	
			$('#day' + (index + 1)).append(dataInput);
			$('#cityName').text(weatherData.city.name);
		});
		
	};

	$.get("http://api.openweathermap.org/data/2.5/forecast/daily?", {
	    APPID: "1382b75d19430a5439132b94779f885d",
	    id:     2947444,
	    cnt: 3,
	    units: "imperial"

    }).done(buildContent);

   $('#SubmitCoor').click(function(event){
    	latCo = $('#lat').val();
    	lngCo = $('#lng').val();
    	$('#lat').val(""); 
    	$('#lng').val("");

    	$.get("http://api.openweathermap.org/data/2.5/forecast/daily?", {
		    APPID: "1382b75d19430a5439132b94779f885d",
		    lat: latCo,
		    lon: lngCo,
		    cnt: 3,
		    units: "imperial"

    	}).done(buildContent);	
    	adjustLocation();
    });

   	function adjustLocation() {

   		markerglobal.setMap(null);
    	var getLocation = new google.maps.Geocoder();
    	var location = {lat: parseFloat(latCo), lng: parseFloat(lngCo)}
    	console.log(location);
    		
    	getLocation.geocode({"location": location }, function(results, status) {
    		if (status == google.maps.GeocoderStatus.OK) {
    			map.setCenter(results[0].geometry.location);
    		} else {
    			alert("Geocoding was not successful - STATUS: " + status);
    		};
    	});

    	var original = { lat : parseFloat(latCo), lng : parseFloat(lngCo)};

        markerglobal = new google.maps.Marker({
         	position: original,
            map: map,
            draggable: true

        });

        markerglobal.addListener('dragend', function(event) {

         	var lat = event.latLng.lat();
         	var lng = event.latLng.lng();
         	console.log(lat);
         	console.log(lng);
            
            $('#lat').val(lat); 
            $('#lng').val(lng);
         	
            $.get("http://api.openweathermap.org/data/2.5/forecast/daily?", {
		    	APPID: "1382b75d19430a5439132b94779f885d",
		    	lat: lat,
		    	lon: lng,
		    	cnt: 3,
		    	units: "imperial"

    		}).done(buildContent);

    		var point = markerglobal.getPosition();
    		map.setCenter(point);	


        });	

            		

    }
 // ---------------------Adding the MAP--------------------
    

    var getLocation = new google.maps.Geocoder();

        // The address for the map

    var address = "Enge G. 9, 71032 Böblingen, Germany"

        // Invoking the method

        getLocation.geocode({"address": address }, function(results, status) {

            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                console.log(results[0].geometry.location.lat());
                console.log(results[0].geometry.location.lng());
            } else {
                alert("Geocoding was not successful - STATUS: " + status)
            }
        } );


        // Set our map options
        var mapOptions = {
            // Set the zoom level
            zoom: 12,

            // This sets the center of the map at our location
            center: {
                
                lat:  12345678,
                lng: -9.8765431
            },

            // Map Type

            mapTypeId: google.maps.MapTypeId.DEFAULT
        	};

        // Render the map
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

         // Create LAT / LONG Variable
        var original = { lat : 48.6844319, lng : 9.015014199999996};

        markerglobal = new google.maps.Marker({
            position: original,
            map: map,
            draggable: true

        });

       


         markerglobal.addListener('dragend', function(event) {

         	var lat = event.latLng.lat();
         	var lng = event.latLng.lng();
         	console.log(lat);
         	console.log(lng);

            $('#lat').val(lat); 
            $('#lng').val(lng);

         	$.get("http://api.openweathermap.org/data/2.5/forecast/daily?", {
	    		APPID: "1382b75d19430a5439132b94779f885d",
	    		lat: lat,
	    		lon: lng,
	    		cnt: 3,
	    		units: "imperial"

    		}).done(buildContent);

    		
    		var point = markerglobal.getPosition();
    		map.setCenter(point);
    		
            
        });

        

    

})();