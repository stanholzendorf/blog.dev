@extends('layout.master')


@section('content')

<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ action('HomeController@welcomePage') }}}">Company X</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{{ action('HomeController@welcomePage') }}}">Home</a></li>
            <li><a href="{{{ action('HomeController@presentPage') }}}">Presentation</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
      <br>
      <br>
      <br>
      <br>
        <h2>Real Estate Company X</h2>@if (Session::has('successMessage'))
	    	<div class="alert alert-success alert-dismissible col-md-12" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    	{{{ Session::get('successMessage') }}}</div>
		@endif
        <p class="lead">Company X is a new Real Estate company specializing in the TX market.<br> We pride ourselves with having active content. In order to best serve our customers with the latest information and leads we invite all interested visitors to share some basic information with us. This will enable us to provide you with customized details of properties, based on your profile.</p>
      </div>
      <hr>
      <a href="{{{ action('HomeController@homePage') }}}" role="button" class="btn btn-lg btn-success">Please share your information here.</a>

    </div><!-- /.container -->
@stop

@section('bottom-script')
    
@stop