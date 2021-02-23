@extends('website.layouts.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function()
	{   	
		$(function() 
		{
			var $gallery1 = $("#gallery1");
			var $gallery2 = $("#gallery2");
			$inputs = $gallery1.find("input");
			//$inputs.attr("checked", "checked");
			$inputs.on("change", function() {
				$inputs.each(function(i, cb) 
				{
					if (!cb.checked) $gallery2.find("." + this.value).css("display", "none");
				});
				$inputs.each(function(i, cb) 
				{
					if (cb.checked) $gallery2.find("." + this.value).css("display", "inline");
				});
			});
		});
	});
</script>
<main id="main">
	<!-- ======= Breadcrumbs ======= -->
	<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h2>Collection</h2>
				<ol>
					<li><a href="../">Home</a></li>
					<li>Collection</li>
				</ol>
			</div>
		</div>
	</section>
	<!-- End Breadcrumbs -->
	<section id="portfolio blog" class="portfolio blog">
		<div class="container">
			<div class="row ">
				<div class="col-lg-8" id="gallery2">
					<div class="row portfolio-container">
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t1 t8">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Bedroom</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t2">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Living Room</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t3">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Kitchen</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t4">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Bathroom</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t5">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Kids Room</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t6">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Outdoor</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t7">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>Terrace Wall Cladding</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t8">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>2x2mm</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t9">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>2x4mm</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t10">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>12x12mm</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t11">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>12x18mm</h4>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 portfolio-item filter-app t12">
							<img src="{{ asset('assets/img/pdf.png')}}" class="img-fluid" >
							<div class="portfolio-info">
								<h4>12x24mm</h4>
							</div>
						</div>
					</div>
					<!-- END GRID -->
				</div>
				<div class="col-lg-4" id="gallery1">
				<div class="sidebar" data-aos="fade-left">
					<h2>Filter By</h2>
					<span><b>Category</b></span><br />
					<input type="checkbox" class="filter1" value="t1"> Bedroom<br />
					<input type="checkbox" class="filter1" value="t2"> Living Room<br />
					<input type="checkbox" class="filter1" value="t3"> Kitchen<br />
					<input type="checkbox" class="filter1" value="t4"> Bathroom<br />
					<input type="checkbox" class="filter1" value="t5"> Kids Room<br />
					<input type="checkbox" class="filter1" value="t6"> Outdoor<br />
					<input type="checkbox" class="filter1" value="t7"> Terrace Wall Cladding<br /><br />
					<span><b>Tile Size</b></span><br />
					<input type="checkbox" class="filter2" value="t8"> 2x2mm<br />
					<input type="checkbox" class="filter2" value="t9"> 2x4mm<br />
					<input type="checkbox" class="filter2" value="t10"> 12x12mm<br />
					<input type="checkbox" class="filter2" value="t11"> 12x18mm<br />
					<input type="checkbox" class="filter2" value="t12"> 12x24mm<br />
				</div></div>
			</div>
		</div>
	</section>
</main>
@endsection