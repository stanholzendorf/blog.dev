<?php
class UserController extends \BaseController {

	

	public function loginpage()
	{
		return View::make('users.login');
	}



	public function login()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {

			// return Redirect::intended('/profile');
			return Response::json(['success' => true]);
		} else {

			// Session::flash('errorMessage', 'Your login information was incorrect!');
			// return Redirect::back()->withInput();

			return Response::json(['error' => 'Your username and/or password was incorrect!']);
		}
	} 

	public function logout()
	{
		Auth::logout();
        return Redirect::action('PostsController@index');
	}


	public function profile()
	{
		

		// $user = User::with('posts')->find(Auth::id());
		$user = Auth::user();
		if(!$user) {
			App::abort(404);
		}
		$posts = $user->posts;
		return View::make('users.profile')->with(['user' => $user, 'posts' => $posts]);


	}

	public function testprofile()
	{
		

		// $user = User::with('posts')->find(Auth::id());
		$user = Auth::user();
		if(!$user) {
			App::abort(404);
		}
		$posts = $user->posts;
		return View::make('users.testprofile')->with(['user' => $user, 'posts' => $posts]);


	}


	public function edit()
	{
		
		$user = Auth::user();

		return View::make('users.useredit')->with('user', $user);

		
	}

	public function update()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		// attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'User could not be updated!!');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post

	    $user = Auth::user();
	    $user->first_name=Input::get('first_name');
		$user->last_name=Input::get('last_name');
		$user->email=Input::get('email');
		$user->password=Input::get('password');
		$user->save();
		
		return Redirect::action('PostsController@index');
	    }
	  }  









}