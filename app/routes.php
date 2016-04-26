<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/sayhello/{name?}', function($name = 'Codeup')
{
	$data = array('name' => $name);
	return View::make('my-first-view')->with($data);
});


Route::get('/rolldice/{guess?}', 'HomeController@rolldice');

Route::get('/random-guess', 'HomeController@randomGuess');

Route::get('/weatherapp', 'WeatherController@showWeather');

Route::resource('posts', 'PostsController');

Route::get('/login', 'UserController@loginpage');

Route::post('authlogin', 'UserController@login');

Route::get('logout', 'UserController@logout');

Route::get('profile', 'UserController@profile');

Route::get('useredit', 'UserController@edit');

Route::put('update', 'UserController@update');

Route::get('testindex', 'PostsController@testindex');

Route::get('testshow/{id}', 'PostsController@testshow');

Route::get('testprofile', 'UserController@testprofile');
// Route::get('query-test', function() {
// 	$posts = Post::where('title', '=', 'Seeded Post 2')->get();
// 	foreach($posts as $post) {
// 		echo $post->title;
// 	}
// });






