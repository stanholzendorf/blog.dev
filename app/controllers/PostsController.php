<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(3);



		// return 'The index method is called by /posts. Index shows a list of all posts!';
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//return 'The create method is called by /posts/create. Create shows a form for creating a post!';
		return View::make('posts.create');
		// $inputs = Input::all();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
			// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'This post was not created successfully!!');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
	    $post = new Post;
		$post->title=Input::get('title');
		$post->body=Input::get('body');
		$post->description=Input::get('description');
		$post->save();
		Log::info($post);
		Session::flash('successMessage', 'This post was created successfully!!');
		return Redirect::action('PostsController@index');
	    }

		// return Redirect::action('PostsController@create')->withInput();

	
			    
	
		//
		// return 'The store method is called by /posts, however it has a POST request instead of the GET request from the method index which also is called by /posts. Store stores the new post';

		// return Redirect::back()->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		

		$post = Post::find($id);
		if(!$post) {
			App::abort(404);
		}

		return View::make('posts.show')->with('post', $post);

		//
		// return 'The show method is called by /posts/{post} with {posts} being the single variable of the post in question. Show shows a specific post!';


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		$post = Post::find($id);
		// $post = Post::get($id);
		return View::make('posts.edit')->with('post', $post);

		// return 'The edit method is called by /posts/{post}/edit. Edit shows a form for editing a specific post!';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$validator = Validator::make(Input::all(), Post::$rules);

		// attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'This post was not edited successfully!!');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post

	    $post = Post::find($id);
	    $post->title=Input::get('title');
		$post->body=Input::get('body');
		$post->description=Input::get('description');
		$post->save();
		Session::flash('successMessage', 'This post was updated successfully!!');
		return Redirect::action('PostsController@index');
	    }

	    // return Redirect::action('PostsController@create')->withInput();

		

		// return 'The update method is called by /posts/{post}, however it has a POST request instead of the GET request from the method show which also is called by /posts/{post}. Update updates a specific post';
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$post = Post::find($id);
		
		if(!$post) {
			return Redirect::action('PostsController@index');
		}

		$post->delete();
		Session::flash('successMessage', 'This post was deleted successfully!!');
		return Redirect::action('PostsController@index');
		
		// return 'The destroy method is called by /posts/{post}, however it has a DELETE request. Destroy deletes a specific post!';
	}





}
