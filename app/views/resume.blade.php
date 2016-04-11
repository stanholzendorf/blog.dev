@extends('layout.master')

@section('top-script')
	<title>My Resume</title>
@stop

@section('content')
<h1>This will be my Resume!</h1>
<a href="{{{action('HomeController@showPortfolio')}}}">Portfolio Page</a>
@stop

