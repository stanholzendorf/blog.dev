@extends('layout.master')

@section('top-script')
<title>Posts</title>

@stop

@include('layout.navbarAuth')
<hr>
<hr>

@section('content')

{{ Form::open(array('action' => 'PostsController@store', 'files'=> true)) }}
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Title</label> -->
    {{ Form::label('title', 'Title', array('class' => 'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::text('title', null, array('class'=>'form-control', 'placeholder' => 'Title')) }}
      @if ($errors->has('title'))
          <p> {{{ $errors->first('title') }}}</p>
       @endif 
    </div>
   </div> 
  
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Body</label> -->
    {{ Form::label('body', 'Body', array('class' => 'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::textarea('body', null, array('class'=>'form-control', 'placeholder' => 'Body')) }}
      @if ($errors->has('body'))
          <p> {{{ $errors->first('body') }}}</p>
      @endif 
    </div>
  </div>
 
 <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Descr</label> -->
    {{ Form::label('description', 'Descr', array('class' => 'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::text('description', null, array('class'=>'form-control', 'placeholder' => 'Descr')) }}
    </div>
  </div>
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Descr</label> -->
    {{ Form::label('image', 'Image', array('class' => 'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::file('image') }}
     @if ($errors->has('image'))
          <p> {{{ $errors->first('image') }}}</p>
      @endif 
    </div>
  </div>     
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button> 
    </div>
  </div>
  {{ Form::close() }}
<!-- </form> -->



<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>
@include('layout.footer')
@stop

@section('bottom-script')

@stop

