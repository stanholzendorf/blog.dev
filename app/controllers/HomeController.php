<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function rolldice($guess = 1)
	{
		$roll = mt_rand(1, 6);
		$data = array(
			'guess' => $guess,
			'roll' => $roll
			);
		if ($guess > 6 || $guess < 1) {
			return "Your guess was invalid!" ;
		} else {

			return View::make('roll-dice')->with($data);
		}

	}

	public function randomGuess()
	{
		$guess = mt_rand(1, 6);
		return Redirect::Action('HomeController@rolldice', $guess);
	}
}		
