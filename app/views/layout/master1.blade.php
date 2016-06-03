<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- <link href="/css/simple-sidebar.css" rel="stylesheet" type="text/css" /> -->
    <link href="/css/footer-distributed.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/customOne.css">
    @yield('top-script')
</head>
<body>
	@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
		</button>
    </div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}
     	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
    @yield('content')
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

    <script>$(".alert").alert();</script>
    <script>

$('#lgin').on('click', function(e){

     e.preventDefault();
     $.ajax('{{{action('UserController@login')}}}' , {

       method: 'POST',
       data: {
            'email': $('#email').val(),
            'password': $('#password').val(),
            '_token': $('input[name="_token"]').val()
       },

       success: function(response) {console.log(response);
        if (response.success) {
           window.location = '{{{action('PostsController@index')}}}' ;
        } else {
            $('#errors').text(response.error)
        }
       
       },

       error: function (a,b,c) {
          //console.log(a,b,c);
       }


     });
});

</script>
    @yield('bottom-script')
</body>
</html>