@extends('layout.master')

@section('top-script')

<title>Profile Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="/css/modal.css" rel="stylesheet">
<link href="/css/clean-blog.min.css" rel="stylesheet">

<style>

.navbar-brand {

	color: black;
}

#black, #black1, #black2, #black3, #black4 {

	color: black;
}



div {

	align-content: center;
}

</style>



@stop



@section('content')

<nav id="noborder"class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="black"class="navbar-brand" href="{{{ action('PostsController@index') }}}">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            @if(Auth::check())
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="black1"href="#">{{{Auth::user()->first_name}}} is logged in!!</a>
                    </li>
                    <li>
                        <a id="black2"href={{{ action('UserController@testprofile') }}}>My Profile</a>
                    </li>
                    <li>
                        <a id="black3"href={{{ action('UserController@logout') }}}>Logout</a>
                    </li>
                    <li>
                        <a id="black4"href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            @else
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>       
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
           @endif 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<hr>
<hr>
<div align="center"id="centerProfile"class="container">
        
         <!-- USER PROFILE ROW STARTS-->
            <div align="center" class="row text-center">
                <!-- <div class="col-md-3 col-sm-3">
                                       
                    <div class="user-wrapper">
                        <img src="assets/img/1.jpg" class="img-responsive" /> 
                    <div class="description">
                       <h4> Ramolin Leomarid</h4>
                        <h5> <strong> Website Designer </strong></h5>
                        <p>
                            Pellentesque elementum dapibus convallis. 
                        </p>
                        <hr />
                        <a href="#" class="btn btn-danger btn-sm"> <i class="fa fa-user-plus" ></i> &nbsp;Profile + </a> 
                    </div>
                     </div>
                </div> -->
                
                <div align="center" class="col-md-12 col-sm-12  user-wrapper">
                    <div align"center"class="description">
                         <h3> Profile Information : </h3>
                    <hr />
                     <p><strong>FIRST NAME - </strong> {{{$user->first_name}}}</p>
                     <p><strong>LAST NAME - </strong> {{{$user->last_name}}}</p>
                     <p><strong>EMAIL - </strong> {{{$user->email}}}</p>
                     <p><strong>MEMBER SINCE - </strong> {{{$user->created_at->diffForHumans()}}}</p>


                    <h3> Social Links: </h3>
                    <hr />                
                   <a href="#" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook </a>

                        <a href="#" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                        <a href="#" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <a href="#" class="btn btn-social btn-linkedin">
                            <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a>
                    </div>
                 
                </div>
            </div>
           <!-- USER PROFILE ROW END-->
           <hr>
           <article>
        	<div class="container">
             <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>{{{$posts->first()->image}}}</p>
                    <h2 class="post-title">{{{$posts->first()->title}}}</h2>
                    <p>{{{$posts->first()->body}}}</p>
                </div>
                <hr>
                <a class="editPost"href="{{{ action('PostsController@edit', $post->id) }}}">EDIT THIS POST!</a>
            </div>
          </div>
    	 </article>
    </div>
    <!-- CONATINER END -->
@stop

<!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/js/clean-blog.min.js"></script>


@section('bottom-script')

@stop