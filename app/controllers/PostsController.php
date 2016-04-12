<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return 'The index method is called by /posts. Index shows a list of all posts!';
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
		return View::make('/posts/create');
		// $inputs = Input::all();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Input::has('name')) {
			    // name is not empty
			$inputs = Input::all();
			} else {
			    return Redirect::action('PostsController@create')->withInput();
			}
		//
		return 'The store method is called by /posts, however it has a POST request instead of the GET request from the method index which also is called by /posts. Store stores the new post';

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
		//
		return 'The show method is called by /posts/{post} with {posts} being the single variable of the post in question. Show shows a specific post!';
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		return 'The edit method is called by /posts/{post}/edit. Edit shows a form for editing a specific post!';
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
		return 'The update method is called by /posts/{post}, however it has a POST request instead of the GET request from the method show which also is called by /posts/{post}. Update updates a specific post';
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
		return 'The destroy method is called by /posts/{post}, however it has a DELETE request. Destroy deletes a specific post!';
	}


}
