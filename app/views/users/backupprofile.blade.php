@extends('layout.master')


@section('top-script')
<title>Profile Page</title>
@end
@include('layout.navbarAuth')



@section('content')
<div>
<h1>Profile Information</h1>
<h5>Name: {{{$user->first_name}}} {{{$user->last_name}}}</h5>
<h5>Email: {{{$user->email}}}</h5>
<h5>Member since: {{{$user->created_at->format('l, F jS Y @ h:i:s A')}}}</h5>
</div>
<br>
<br>
<h4>Posts created!</h4>
@foreach($posts as $post)
	<p><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></p>
@endforeach

<a href="{{{ action('UserController@edit', $user->id) }}}">Edit Profile Information</a>
<hr>
<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>


@include('layout.footer')
@stop




@section('bottom-script')

@end