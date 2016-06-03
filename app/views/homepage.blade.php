@extends('layout.master')

@section('title')
  <h2 class="text-center">Homepage</h2>
@stop

@section('content')

<div class="container">  
        <div class="row">
            <div class="col-md-6 col-md-offset-4">                         
                <h2>Visitor Information</h2>
                  {{ Form::open(array('action' => 'HomeController@getContact')) }}                
                <div class="form-group">
                   
                   {{Form::hidden('subject', 'Visitor Informtion', array('class' => 'name', 'placeholder' => 'Subject', 'class'=>'form-control'))}}
                </div>  
                <div class="form-group">
                   {{Form::label('from', 'Full name')}}
                   {{Form::text('from', null, array('class' => 'name', 'placeholder' => 'Name', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{Form::label('email', 'Email Address')}}
                   {{Form::text('email', null, array('class' => 'name', 'placeholder' => 'Email', 'class'=>'form-control'))}}
                </div>
            
                <div class="form-group">
                   {{Form::label('phonenumber', 'Phone Number')}}
                   {{Form::text('phonenumber', null, array('class' => 'name', 'placeholder' => 'Phone Number', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{Form::label('budget', 'Budget in Dollars')}}
                   {{Form::text('budget', null, array('class' => 'name', 'placeholder' => 'Budget', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
                   {{Form::label('address', 'Address')}}
                   {{Form::textarea('address', null, array('class' => 'name', 'rows' => '4', 'placeholder' => 'Address', 'class'=>'form-control'))}}
                </div>
                <div class="form-group">
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