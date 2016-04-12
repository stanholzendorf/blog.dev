@extends('layout.master')

@section('top-script')
<title>Posts</title>

@stop

@section('content')
<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="{{{ action('PostsController@store') }}}">
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Post</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" placeholder="Post" id="post" value="{{{ Input::old('name') }}}">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
@stop

@section('bottom-script')

@stop

