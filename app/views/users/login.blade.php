@extends('layout.master')
@extends('layout.navbar')


@section('top-script')
<title>Login</title>

@stop

@section('navbar')
<hr>
<hr>
@stop

@section('content')

{{ Form::open(array('action' => 'UserController@login')) }}
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Title</label> -->
    {{ Form::label('email', 'Email', array('class' => 'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::text('email', null, array('class'=>'form-control', 'placeholder' => 'Email')) }}
      @if ($errors->has('email'))
          <p> {{{ $errors->first('email') }}}</p>
       @endif 
    </div>
   </div>
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Title</label> -->
    {{ Form::label('password', 'Password', array('class' => 'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::password('password', null, array('class'=>'form-control', 'placeholder' => 'Password')) }}
      @if ($errors->has('email'))
          <p> {{{ $errors->first('password') }}}</p>
       @endif 
    </div>
   </div>    
	<div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Submit</button> 
	    </div>
	  </div>
	{{ Form::close() }}
	
<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>	  

@stop

@include('layout.footer') 

@section('bottom-script')


@stop