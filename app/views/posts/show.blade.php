@extends('layout.master')

@section('top-script')
<title>Show Post</title>
@stop


@section('content')
<h1>Post Details</h1>
<h5>{{{$post->title}}}</h5>
<h5>{{{$post->body}}}</h5>
<h5>{{{$post->description}}}</h5>
<h5>{{{$post->created_at->format('l, F jS Y @ h:i:s A')}}}</h5>
<h5>{{{$post->updated_at->diffForHumans()}}}</h5>

<a href="{{{ action('PostsController@edit', $post->id) }}}">Edit Posts</a>
<hr>
<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>



@stop



@section('bottom-script')


@stop