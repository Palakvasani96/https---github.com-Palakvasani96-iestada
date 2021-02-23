@extends('website.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Collection</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Collection</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<section id="portfolio" class="portfolio">
    <div class="container">
{{-- 
      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter=" X " class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> --}}

      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="{{ asset('assets\img\SPICE(12x12,12x18,12x24)\464-F.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>SPICE</h4>
            <p>1200 X 2400</p>
            <a href="{{ asset('assets\img\SPICE(12x12,12x18,12x24)\464-F.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="{{ asset('assets\img\SPICE(12x12,12x18,12x24)\7013_F.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>SPICE</h4>
            <p>1200 X 2400</p>
            <a href="{{ asset('assets\img\SPICE(12x12,12x18,12x24)\7013_F.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Portfolio Section -->
</main>
@endsection
