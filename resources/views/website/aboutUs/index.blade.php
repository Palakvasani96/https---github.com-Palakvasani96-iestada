@extends('website.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
        <img src="{{ asset('assets/img/blog-1.jpg') }}"" style="width: 100%;"> 
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <h3><center>About Us</center></h3>
            <hr>
            <p>
            <b>IESTADA CORPORATION</b> is the export company of ceramic
            products. We’re the team proffesionals who understand what
            customer needs is and trying to fulfill those requirements in
            appropriate span of time with suitable price.
            <p>
            <b>“WE believe in supply quality products in the best prices.”</b>
            <div>Our customers belongs from any Project companies.
            Products at a glance : we have a complete range of wall tiles,
            vitrified tiles, floor tiles, porceline slabs, sanitery ware as per
            customers requirements.</div>
            <br>
            <div>
            We would like to have business relationship with you and
            work for your venture, one of our company adults would like to
            personally meet you and discuss how we would help to you.
            If you are interested please dont hesitate to contact us and
            get your fulfillment.</div>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

 
   <!-- ======= Our Clients Section ======= -->
   {{-- <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Clients</h2>
      </div>

      <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-6">
          <div class="client-logo">
            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Our Clients Section --> --}}

</main><!-- End #main -->
@endsection