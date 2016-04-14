@extends('layout.master')

@section('top-script')
<title>Edit Posts</title>

@stop

@section('content')

{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Title</label> -->
    {{ Form::label('title', 'Title', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
     {{ Form::text('title', null, array('class'=>'form-control')) }} 
      @if ($errors->has('title'))
          <p> {{{ $errors->first('title') }}}</p>
       @endif 
    </div>
   </div> 
  
  <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Body</label> -->
    {{ Form::label('body', 'Body', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
      {{ Form::textarea('body', null, array('class'=>'form-control')) }} 
      @if ($errors->has('body'))
          <p> {{{ $errors->first('body') }}}</p>
      @endif 
    </div>
  </div>
 
 <div class="form-group">
    <!-- <label class="control-label col-sm-2" for="name">Descr</label> -->
    {{ Form::label('description', 'Description', array('class'=>'control-label col-sm-2')) }}
    <div class="col-sm-10">
    {{ Form::text('description', null, array('class'=>'form-control')) }}
   </div>
  </div>   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button> 
    </div>
  </div>
  {{ Form::close() }}
<!-- </form> -->
{{ Form::model($post, array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}  <button type="submit">Delete this Post!</button>
</form>

<hr>
<a href="{{{ action('PostsController@index') }}}">Go back to the Index</a>
@stop

@section('bottom-script')

@stop