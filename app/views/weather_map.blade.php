@extends('layout.master')

@section('top-script')
	<title>Weather Map</title>
	<link rel="stylesheet" href="/css/weather.css">
@stop

@section('content')
<div class="center">
	<div id="mainContainer" class="horizontal">
	

		<h3>Weather Application</h3>
		<h5 id="cityName"></h5>
		<div id="day1" class="dayBox"></div>
		<div id="day2" class="dayBox"></div>
		<div id="day3" class="dayBox"></div>

	</div>
	<div id="inputSubmit">
			<input type="text" id="lat" placeholder="Type in Latitude">
			<input type="text" id="lng" placeholder="Type in Longitude">
		<button id="SubmitCoor" class="btn btn-info btn-lg">Submit new coordiantes</button>
	</div>
	<h4>Alternatively use the map and maker to adjust the location!!</h4>
	<div id="map-canvas"></div>
</div>
@stop

@section('bottom-script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOTu-B8lvFSgXab5owUPbaSJ_LOsDY2WU"></script>
<script src="/js/weather.js" type="text/javascript"></script>

@stop

