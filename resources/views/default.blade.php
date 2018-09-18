
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>

    <title>Blog Template for Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    {{-- <link href="../../public/css/blog.css" rel="stylesheet"> --}}

    <!-- Custom styles for this template -->
    <link href="../../../css/blog.css" rel="stylesheet" rel="stylesheet">
  </head>

  <body>
@include('layout.head1')
<div class="container">

        <div class="row">
  
          <div class="col-sm-8 blog-main">
   
@yield('content')
<nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>
          </div>
          <div> @include('layout.sidebar')</div>
        </div>
        <div class="row container-fluid">
          @yield('post')
        </div>
</div>
@include ('flashy::message')
<script src="//code.jquery.com/jquery.js"></script>
   @include('layout.footer')
  </body>
</html>