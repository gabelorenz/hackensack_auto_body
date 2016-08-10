<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Family owned and operated for over 50 years, Hackensack Auto Body brings you top of the line auto body services at a shop you can trust.">
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
              <a class="navbar-brand" style="padding:0" href="{{ url('/') }}"><img src="Images/hackensack-wordmark.png" id="wordmark" alt="Hackensack Auto Body" /><div id="wordmark_txt">Hackensack Auto Body</div></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="{{ url()->current() == url('/')? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="{{ url()->current() == url('about')? 'active' : '' }}"><a href="{{ url('about') }}">About Us</a></li>
                <li class="{{ url()->current() == url('auto-body-repair')? 'active' : '' }}"><a href="{{ url('auto-body-repair') }}">Auto Body Repairs</a></li>
                <li class="{{ url()->current() == url('towing-services')? 'active' : '' }}"><a href="{{ url('towing-services') }}">Towing Services</a></li>
                <li class="{{ url()->current() == url('mechanical-repair')? 'active' : '' }}"><a href="{{ url('mechanical-repair') }}">Mechanical Repairs</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    @yield('content')

    @include('shared.footer')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82315603-1', 'auto');
  ga('send', 'pageview');

</script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/scripts.js"></script>
  </body>
</html>
