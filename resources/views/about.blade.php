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
     <div class="container marketing">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Hackensack Auto Body. <span class="text-muted">A brief history.</span></h2>
          <p class="lead">Hackensack Auto Body was established in 1922 and has been a family owned and operated business since 1962. We have been serving the residents and visitors of Hackensack faithfully for over 50 years and are conveniently located in one of the busiest areas in Hackensack.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="Images/logo1.png" alt="Generic placeholder image">
        </div>
      </div>

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">State of the art facilities. <span class="text-muted">Up to date and ready to go.</span></h2>
          <p class="lead">Our facility is fully insured with security cameras and fenced storage areas. Our experienced office staff utilizes the latest estimating systems in the industry. In our 12,000 sq ft, 17 bay facility, we have 8 full time auto technicians, and an ASE certified mechanic. Some of our equipment includes 2 chief EZ liner frame machines with laser measuring, 2 rotary lifts, mig welders, and a/c equipment. In our paint department we have a Devilibiss concept downdraft heated spray booth as well as a downdraft prep station. We use a computerized paint mixing system ensuring a perfect color match.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="Images/employee_working2.png" alt="Generic placeholder image">
        </div>
      </div>

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Towing Services. <span class="text-muted">Stuck? We'll come get you!</span></h2>
          <p class="lead">We have full time tow truck operators, 6 tow trucks including wreckers, flatbeds and heavy duty trucks. We provide 24 hour / 7 days a week towing for numerous municipalities. We provide pick up and delivery of vehicles for our customers.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="Images/tow_trucks.png" alt="Generic placeholder image">
        </div>
      </div>

</div>

@endsection
