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

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\BOTOCHINO CREMA1.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BOTOCHINO CREMA</h4>
            <p>200 X 200</p>
            <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\BOTOCHINO CREMA1.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\BOTOCHINO CREMA2.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BOTOCHINO CREMA</h4>
            <p>200 X 200</p>
            <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\BOTOCHINO CREMA2.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\BOTOCHINO CREMA3.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>BOTOCHINO CREMA</h4>
            <p>200 X 200</p>
            <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\BOTOCHINO CREMA3.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\CASTLE STATUARIO-01.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CASTLE STATUARIO</h4>
            <p>200 X 200</p>
            <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\CASTLE STATUARIO-01.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\CASTLE STATUARIO-02.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CASTLE STATUARIO</h4>
            <p>200 X 200</p>
            <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\CASTLE STATUARIO-02.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\CASTLE STATUARIO-03.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>CASTLE STATUARIO</h4>
            <p>200 X 200</p>
            <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\CASTLE STATUARIO-03.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\DAYNA GOLD1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>DAYNA GOLD</h4>
              <p>200 X 200</p>
              <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\DAYNA GOLD-01.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>
      
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\DAYNA GOLD2.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>DAYNA GOLD</h4>
          <p>200 X 200</p>
          <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\DAYNA GOLD2.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
        </div>
      </div>
 

    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="{{ asset('assets\img\SKAJEN(2x2,2x4)\DAYNA GOLD3.jpg') }}" class="img-fluid" alt="">
        <div class="portfolio-info">
        <h4>DAYNA GOLD</h4>
        <p>200 X 200</p>
        <a href="{{ asset('assets\img\SKAJEN(2x2,2x4)\DAYNA GOLD3.jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
        {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
        </div>
    </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
</main>
@endsection