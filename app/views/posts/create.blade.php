@extends('layout.master')

@section('top-script')
<title>Posts</title>

@stop

@section('content')
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{{ action('PostsController@store') }}}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Title</label>
    <div class="col-sm-10">
      <input name="title" type="text" class="form-control" placeholder="Title" id="post" value="{{{ Input::old('title') }}}">
      @if ($errors->has('title'))
          <p> {{{ $errors->first('title') }}}</p>
       @endif 
    </div>
   </div> 
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Body</label>
    <div class="col-sm-10">
      <input name="body" type="text" class="form-control" placeholder="Body" id="post2" value="{{{ Input::old('body') }}}">
      @if ($errors->has('body'))
          <p> {{{ $errors->first('body') }}}</p>
      @endif 
    </div>
  </div>
 
 <div class="form-group">
    <label class="control-label col-sm-2" for="name">Descr</label>
    <div class="col-sm-10">
      <input name="description" type="text" class="form-control" placeholder="Descr" id="post3" value="{{{ Input::old('description') }}}">
    </div>
  </div>   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button> 
    </div>
  </div>
</form>

<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>
@stop

@section('bottom-script')

@stop

