<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Images/H.ico">

    <title>Hackensack Auto Body</title>

    <!-- Bootstrap core CSS -->
    <link href="Stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Stylesheets/carousel.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Hackensack Auto Body</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                @if (url()->current() == url('/'))
                  <li class="active">
                 @else
                  <li>
                @endif
                <a href="/">Home</a></li>
                @if (url()->current() == url('about'))
                  <li class="active">
                 @else
                  <li>
                @endif
                <a href="about">About Us</a></li>
                @if (url()->current() == url('towing-services'))
                  <li class="active">
                 @else
                  <li>
                @endif
                <a href="towing-services">Towing Services</a></li>
                @if (url()->current() == url('auto-body-repair'))
                  <li class="active">
                 @else
                  <li>
                @endif
                <a href="auto-body-repair">Auto Body Repairs</a></li>
                @if (url()->current() == url('mechanical-repair'))
                  <li class="active">
                 @else
                  <li>
                @endif
                <a href="mechanical-repair">Mechanical Repairs</a></li>
                @if (url()->current() == url('contact'))
                  <li class="active">
                 @else
                  <li>
                @endif
                <a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    @yield('content')

    @include('shared.footer')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/scripts.js"></script>
  </body>
</html>
