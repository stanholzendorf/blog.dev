

@extends('layout.master')

@section('top-script')
	<title>Roll Dice</title>
@stop	

@section('content')
	<h1>Guess a number from 1 to 6!</h1>
	
	<!-- // Using Blade -->
 	<h1>Guess: {{{$guess}}}</h1>
 	<h1>Rolled: {{{$roll}}}</h1>
@stop 	

