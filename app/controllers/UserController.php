<?php
class UserController extends \BaseController {

	

	public function loginpage()
	{
		return View::make('users.login');
	}



	public function login()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {

			return Redirect::intended('/posts');
		} else {

			Session::flash('errorMessage', 'Your login information was incorrect!');
			return Redirect::back()->withInput();
		}
	} 

	public function logout()
	{
		Auth::logout();
        return Redirect::action('PostsController@index');
	}










}