@extends('layout.master')

@section('top-script')
<title>Show all Posts</title>
@stop


@section('content')
<h1>ALL POSTS ARE BELOW</h1>
	@foreach ($posts as $post)
	<p>{{{$post->title}}}</p>
	<p>{{{$post->body}}}</p>
	<p>{{{$post->description}}}</p>
	<a href="{{{ action('PostsController@show', $post->id) }}}">Show Post</a>


	@endforeach
<hr>	
<a href="{{{ action('PostsController@create') }}}">Create a new Post!</a>	

@stop



@section('bottom-scropt')

@stop