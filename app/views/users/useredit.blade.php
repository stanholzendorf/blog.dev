@extends('layout.master')


@section('top-script')
<title>Edit Profile</title>
@end
@include('layout.navbarAuth')
<hr>

@section('content')
{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'PUT')) }}
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Title</label> -->
    {{ Form::label('first_name', 'First_name', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::text('first_name', null, array('class'=>'form-control')) }} 
      @if ($errors->has('first_name'))
          <p> {{{ $errors->first('first_name') }}}</p>
       @endif 
    </div>
   </div>
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Body</label> -->
    {{ Form::label('last_name', 'Last_name', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
      {{ Form::text('last_name', null, array('class'=>'form-control')) }} 
      @if ($errors->has('last_name'))
          <p> {{{ $errors->first('last_name') }}}</p>
      @endif 
    </div>
  </div>
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Body</label> -->
    {{ Form::label('email', 'Email', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
      {{ Form::email('email', null, array('class'=>'form-control')) }} 
      @if ($errors->has('email'))
          <p> {{{ $errors->first('email') }}}</p>
      @endif 
    </div>
  </div>
  <div class="form-group">
    {{ Form::label('password', 'Password', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
      {{ Form::password('password', null, array('class'=>'form-control')) }} 
      @if ($errors->has('password'))
          <p> {{{ $errors->first('password') }}}</p>
      @endif 
    </div>
  <div class="form-group">
    {{ Form::label('password', 'Re-Enter Password', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
      {{ Form::password('password_confirmation', null, array('class'=>'form-control')) }} 
      @if ($errors->has('password_confirmation'))
          <p> {{{ $errors->first('password_confirmation') }}}</p>
      @endif 
    </div> 

   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button> 
    </div>
  </div> 
  </div>  


<hr>
<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>


@include('layout.footer')
@stop