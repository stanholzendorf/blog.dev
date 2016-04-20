
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    {{ Form::open(array('method' => 'GET', 'action' => 'PostsController@index', 'class' => 'navbar-form navbar-left')) }}
      <!-- <form class="navbar-form navbar-left" role="search"> -->
            <div class="form-group">
              <!-- <input type="text" class="form-control" id="forcedInputSize" placeholder="Search"> -->
              {{ Form::text('search',null, array('class'=>'form-control', 'placeholder' => 'Search'))}}
            </div>
              <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {{ Form::close() }}
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">{{{Auth::user()->first_name}}} is logged in!!</p></li> 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>My Options</b> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          <li><a href={{{ action('WeatherController@showWeather') }}}>Test</a></li>
            <li><a href={{{ action('PostsController@index') }}}>See Posts Home</a></li>
            <li><a href={{{ action('UserController@profile') }}}>My Profile</a></li>
            <li><a href={{{ action('UserController@logout') }}}>Logout</a></li>
          </ul>  
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@yield('navbarAuth')