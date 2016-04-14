@extends('layout.master')

@section('top-script')
<title>Sorry but you did something wrong</title>
<style type="text/css" media="screen">

body {

	background-color: grey;
}

a {
	color: white;
}

p {
	color: white;
}
	
</style>
@stop

@section('content')


<div class="container">
<!-- <center><img src="/img/troll.png" alt="404 Image" allign="middle"></center> -->
<center><iframe width="854" height="480" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&controls=0" frameborder="0" allowfullscreen></iframe></center>
<hr>
<center><p>You have found the Bonus Page. Congratulation!</p></center>
<center><a href="{{{ action('PostsController@index') }}}">Go back to the Index</a></center>	
</div>



@stop


@section('bottom-script')


@stop



