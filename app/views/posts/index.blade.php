@extends('layout.master')

@section('top-script')
<title>Show all Posts</title>
@stop


@section('content')
<h1>ALL POSTS ARE BELOW</h1>
	@foreach ($posts as $post)
	<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h3>
	<p>{{{$post->body}}}</p>
	<p>{{{$post->description}}}</p>
	<p>Created on {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
	<p>Updated {{{$post->updated_at->diffForHumans()}}}</p>
	


	@endforeach
<hr>	
<a href="{{{ action('PostsController@create') }}}">Create a new Post!</a> 
{{ $posts->links() }}


@stop



@section('bottom-scropt')

@stop