@extends('layout.master')

@section('top-script')
	<title>My Portfolio</title>
@stop

@section('content')
<h1>This will be my Portfolio!</h1>
<a href="{{{action('HomeController@showResume')}}}">Resume Page</a>
@stop