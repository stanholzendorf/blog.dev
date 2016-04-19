@extends('layout.master')

<!-- <html class="no-js" lang="en"> -->

@section('top-script')
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
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
<!-- <body> -->

<!-- <div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Yeti Agency</li>
</ul>
</div>
<div class="top-bar-right">
<ul class="menu">
<li><a href="#">One</a></li>
<li><a href="#">Two</a></li>
<li><a href="#">Three</a></li>
<li><a href="#">Four</a></li>
</ul>
</div>
</div> -->

<div class="callout large primary">
<div class="row column text-center">
<h1>My Blog</h1>
</div>
</div>
@foreach ($posts as $post)
<div class="row" id="content">
<div class="medium-8 columns">
<div class="blog-post">
<h3><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a><small>{{{$post->created_at->format('l, F jS Y @ h:i:s A')}}}</small></h3>
<img class="thumbnail" src="http://placehold.it/850x350">
<p>{{{$post->body}}}</p>
<div class="callout">
<ul class="menu simple">
<li><a href="#">{{{$post->user->first_name . " " . $post->user->last_name}}}</a></li>
<li><p>{{{$post->description}}}</p></li>
</ul>
</div>
</div>
</div>
@endforeach
<!-- <div class="medium-3 columns" data-sticky-container>
<div class="sticky" data-sticky data-anchor="content">
<h4>Categories</h4>
<ul>
<li><a href="#">Skyler</a></li>
<li><a href="#">Jesse</a></li>
<li><a href="#">Mike</a></li>
<li><a href="#">Holly</a></li>
</ul>
<h4>Authors</h4>
<ul>
<li><a href="#">Skyler</a></li>
<li><a href="#">Jesse</a></li>
<li><a href="#">Mike</a></li>
<li><a href="#">Holly</a></li>
</ul>
</div>
</div>
</div> -->

{{ $posts->appends(['search' => Input::get('search')])->links() }}
@stop
@include('layout.footer')
@section('bottom-script')


@stop
