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
<br>
<br>
<br>
<h2>Visitor Information</h2>@if (Session::has('errorMessage'))<div class="alert alert-danger alert-dismissible col-md-12" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{{ Session::get('errorMessage') }}}</div>
        <div class="col-md-1"></div>
        @endif

        <div class="row">
            <div class="col-md-6 col-md-offset-4">                         
                  {{ Form::open(array('action' => 'HomeController@getContact')) }}                
                <div class="form-group">
                   
                   {{Form::hidden('subject', 'Visitor Informtion', array('class' => 'name', 'placeholder' => 'Subject', 'class'=>'form-control'))}}
                </div>  
                <div class="form-group">
                   {{ $errors->first('from', '<span class="help-block">:message</span>') }} 
                   {{Form::label('from', 'Full name')}}
                   {{Form::text('from', null, array('class' => 'name', 'placeholder' => 'Name', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                  {{ $errors->first('email', '<span class="help-block">:message</span>') }} 
                   {{Form::label('email', 'Email Address')}}
                   {{Form::text('email', null, array('class' => 'name', 'placeholder' => 'Email', 'class'=>'form-control'))}}
                </div>
            
                <div class="form-group">
                   {{ $errors->first('phonenumber', '<span class="help-block">:message</span>') }}  
                   {{Form::label('phonenumber', 'Phone Number')}}
                   {{Form::text('phonenumber', null, array('class' => 'name', 'placeholder' => 'Phone Number', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                  {{ $errors->first('budget', '<span class="help-block">:message</span>') }}            
                   {{Form::label('budget', 'Budget in Dollars')}}
                   {{Form::text('budget', null, array('class' => 'name', 'placeholder' => 'Budget', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{ $errors->first('address', '<span class="help-block">:message</span>') }}  
                   {{Form::label('address', 'Address')}}
                   {{Form::textarea('address', null, array('class' => 'name', 'rows' => '4', 'placeholder' => 'Address', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{ $errors->first('body', '<span class="help-block">:message</span>') }}  
                   {{Form::label('body', 'How did you find us?')}}
                   {{Form::textarea('body', null, array('class' => 'name', 'rows' => '4', 'placeholder' => 'Message', 'class'=>'form-control'))}}
                </div>                 
                <div id="success align-right">
                    {{Form::submit('Send email', array('class'=> 'btn btn-email'))}}
                    
                </div>
            {{Form::close()}}

            </div> <!--for column-->
        </div> <!-- for row-->
</div><!-- container -->
<br>

@stop

@section('bottom-script')
    
@stop