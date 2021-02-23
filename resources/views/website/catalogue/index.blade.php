@extends('website.layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Catalogue</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Catalogue</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        {{-- <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>Sattin Matt</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
             </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>3D Design</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
             </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>BM Design</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
             </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>Export Designs</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>Interior</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>Glossy Series</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>High Glossy Series</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
             </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>Morocon</h4>
              <a href="{{ asset('assets/img/pdf.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
             </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item" style="text-align: center;height: 220px;">
            <img src="{{ asset('assets/img/pdf.png')}}" style="filter:blur(1px)" width="150" height="150">
            <div class="portfolio-info">
              <h4>Rustic Matt</h4>
              <a href="{{ asset('assets/img/file/9.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" target="_blank" class="preview-link"><i class="bx bx-plus"></i></a>
             </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->