<?php

class WeatherController extends BaseController {


	public function showWeather()
	{
		return View::make('weather_map');
	}




}
