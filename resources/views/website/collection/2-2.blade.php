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
	</section>
	<!-- End Breadcrumbs -->
	<section id="portfolio blog" class="portfolio blog">
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
			</div>
			--}}
			<div class="row">
				<div class="col-lg-8 col-md-8 portfolio-container aos-init aos-animate" data-aos="fade-up">
					<div class="col-lg-6 col-md-6 portfolio-item filter-app">
						<img src="{{ asset('assets\img\category\f (1).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>BAZEL BEIGE</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (1).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 portfolio-item">
						<img src="{{ asset('assets\img\category\f (2).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>BAZEL BEIGE</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (2).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-6 col-md-6 portfolio-item filter-app">
						<img src="{{ asset('assets\img\category\f (3).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>BAZEL BEIGE</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (3).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-6 col-md-6 portfolio-item filter-card">
						<img src="{{ asset('assets\img\category\f (4).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>BOTOCHINO CREMA</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (4).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (5).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>BOTOCHINO CREMA</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (5).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="{{ asset('assets\img\category\f (6).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>BOTOCHINO CREMA</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (6).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<img src="{{ asset('assets\img\category\f (7).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>CALACATTA STATUARIO</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (7).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<img src="{{ asset('assets\img\category\f (8).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>CALACATTA STATUARIO</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (8).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (9).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>CALACATTA STATUARIO</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (9).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (10).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (10).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (11).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (11).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (12).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (12).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (13).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (13).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (14).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (14).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (15).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (15).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (16).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (16).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (17).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (17).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (18).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (18).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (19).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (19).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (20).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (20).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (21).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (21).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (22).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (22).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (23).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (23).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="{{ asset('assets\img\category\f (24).jpg') }}" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>DAYNA GOLD</h4>
							<p>200 X 200</p>
							<a href="{{ asset('assets\img\category\f (24).jpg') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							{{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar" data-aos="fade-left">
						<h3 class="sidebar-title">Search</h3>
						<div class="sidebar-item search-form">
							<form action="">
								<input type="text">
								<button type="submit"><i class="icofont-search"></i></button>
							</form>
						</div>
						<!-- End sidebar search formn-->
						<div class="sidebar-block-top">
							<h2>Filter By</h2>
						</div>
						<div class="sidebar-block collapsed  open" id="cat">
							<div class="block-title">
								<span>
								Category														</span>
								<div class="toggle-arrow"></div>
							</div>
							<div class="block-content" style="display: block;">
								<ul class="category-list" id="">
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f1" data="Bedroom" value="Bedroom" >
										<a href="#">Bedroom</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f2" data="Living Room" value="Living Room" >
										<a href="#">Living Room</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f3" data="Kitchen" value="Kitchen" >
										<a href="#">Kitchen</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f4" data="Bathroom" value="Bathroom" >
										<a href="#">Bathroom</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f5" data="Kids Room" value="Kids Room" >
										<a href="#">Kids Room</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f6" data="Outdoor" value="Outdoor" >
										<a href="#">Outdoor</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter1[]" id="f7" data="Terrace Wall Cladding" value="Terrace Wall Cladding" >
										<a href="#">Terrace Wall Cladding</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="sidebar-block collapsed open" id="tile_size">
							<div class="block-title">
								<span>
								Tile Size														</span>
								<div class="toggle-arrow"></div>
							</div>
							<div class="block-content" style="display: block;">
								<ul class="category-list" id="">
									<li>
										<input type="checkbox" class="checkbox" name="filter2[]" id="f8" data="2x2mm" value="2x2mm" >
										<a href="#">2x2mm</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter2[]" id="f9" data="2x4mm" value="2x4mm" >
										<a href="#">2x4mm</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter2[]" id="f10" data="12x12mm" value="12x12mm" >
										<a href="#">12x12mm</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter2[]" id="f11" data="12x18mm" value="12x18mm" >
										<a href="#">12x18mm</a>
									</li>
									<li>
										<input type="checkbox" class="checkbox" name="filter2[]" id="f12" data="12x24mm" value="12x24mm" >
										<a href="#">12x24mm</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End sidebar categories-->
				</div>
				<!-- End sidebar tags-->
			</div>
			<!-- End sidebar -->
		</div>
		<!-- End blog sidebar -->
		</div>
		</div>
	</section>
	<!-- End Portfolio Section -->
</main>
@endsection