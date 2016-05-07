@extends('layouts.master')

@section('content')

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="Images/Maps_Shop_Front.png" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="Images/Maps_Shop_Side.png" alt="Second slide">
        </div>
        <div class="item">
          <img class="third-slide" src="Images/Maps_Shop_Diagonal.png" alt="Third slide">
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="Images/TowingServices_icon2.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Towing Services</h2>
          <p>Superior towing services and road side assistance available to Northern New Jersey and the surrouding areas 24/7. We have been proudly offering these services for 25+ years and look forward to  more years.</p>
          <p><a class="btn btn-primary" href="towing-services" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="Images/Auto_Repair.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Auto Body Repairs</h2>
          <p>Family owned and operated for over 50 years, Hackensack Auto Body brings you top of the line auto body services at a shop you can trust. We have state of the art equipment and staff to server all your needs.</p>
          <p><a class="btn btn-primary" href="auto-body-repair" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="Images/Mechanical_repair_icon.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Mechanical Repairs</h2>
          <p>Equipped with all certifications and the latest is software and hardware for mechanical repairs, Hackensack Auto Body, with its talented staff, is the premium location for all your vehicles mechanical woes.</p>
          <p><a class="btn btn-primary" href="mechanical-repair" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div><!-- /.container -->

@endsection
