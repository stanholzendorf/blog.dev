@extends('layout.master')



@section('top-script')
<title>Show all Posts</title>
@stop

@if (Auth::check())

      @include('layout.navbarAuth')
       <hr>
       <hr>
       <hr>


  @else

    @include('layout.navbar')

    <hr>
    <hr>
    <hr>
 @endif



@section('content')
<h1>ALL POSTS ARE BELOW</h1>
	@foreach ($posts as $post)
	<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h3>
	<p>{{{$post->body}}}</p>
	<p>{{{$post->description}}}</p>
	<p>Created on {{{$post->created_at->format('l, F jS Y @ h:i:s A')}}}</p>
	<p>Updated {{{$post->updated_at->diffForHumans()}}}</p>
	


	@endforeach
<hr> 	
<a href="{{{ action('PostsController@create') }}}">Create a new Post!</a>
<a href="{{{ action('PostsController@index') }}}">Return to the Index Page!</a>  
{{ $posts->appends(['search' => Input::get('search')])->links() }}

@stop


@include('layout.footer')


@section('bottom-script')

@stop

 