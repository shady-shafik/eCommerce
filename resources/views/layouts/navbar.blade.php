<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>eCommerce</title>

  {{-- fontawsome cdn --}}

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/blog-post.css')}} " rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/app.css')}} ">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary  border border-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/ ">eCommerce</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container my-4">

    <div class="col-12 mx-auto">

      <!-- Post Content Column -->

        @yield('content')

    </div>

  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/jquery.min.js')}} "></script>
  <script src=" {{asset('js/bootstrap.min.js')}} "></script>
  <script src="{{asset('js/app.js')}} "></script>

</body>

</html>
