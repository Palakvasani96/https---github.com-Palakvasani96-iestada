@extends('website.layouts.app')
@section('content')
<style>
	/* Center website */
	/* Create three equal columns that floats next to each other */
	.column {
	float: left;
	width: 33.33%;
	display: none; /* Hide all elements by default */
	}
	/* Clear floats after rows */ 
	.row:after {
	content: "";
	display: table;
	clear: both;
	}
	/* The "show" class is added to the filtered elements */
	.show {
	display: block;
	}
	.img {
	width:100px;
	height:100px;
	}
	.btn.active {
	background-color:blue;
	color: white;
	}
	.panel-heading  a:before {
	font-family: 'Glyphicons Halflings';
	content: "\e114";
	float: right;
	transition: all 0.5s;
	}
	.panel-heading.active a:before {
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	transform: rotate(180deg);
	} 
	.content {
	background-color: white;
	padding: 20px;
	height:240px;
	weight:120px;
	box-sizing: border-box;
	}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function()
	{   	var finalArr=[],cat1,cat2;
	       $(':checkbox[name=t1]').on('change', function() 
	       {
	           var assignedTo1 = $(':checkbox[name=t1]:checked').map(function() 
	           {
	               return this.id;
	           })
	           .get();
	           cat1=JSON.stringify( assignedTo1 ); 
			   var cat1Object = JSON.parse(cat1);			   
			   var i;
			   
			   for (i = 0; i < cat1Object.length; i++) 
				{
					console.log(cat1Object[i]);							
				}
			  		
	
	       });
	       $(':checkbox[name=t2]').on('change', function() 
	       {
	           var assignedTo2 = $(':checkbox[name=t2]:checked').map(function() 
	           {
	               return this.id;
	           })
	           .get();
	           cat2=JSON.stringify( assignedTo2 ); 
			   var cat2Object = JSON.parse(cat2);			   
			   var i;
			   
			   for (i = 0; i < cat2Object.length; i++) 
				{
					console.log(cat2Object[i]);							
				}
			   	
	       });     
	       
		
	 // var arr=[];
	       // $('.chk_filter1').on('change',function()
	       // {
	       //     if ($(this).is(":checked"))
	       //     {                
	       //         $('.chk_filter1:checked').each(function(i,val)
	       //         {
	       //             if ($(this).is(":checked"))
	       //             {                        
	       //                 arr.push($(this).attr('data-value'));
	       //                 arr = arr.filter( function( item, index, inputArray ) 
	       //                 {
	       //                     return inputArray.indexOf(item) == index;
	       //                 });
	       //                 // if ($(this).is(":unchecked"))
	       //                 // {
	
	       //                 // }
	       //             }
	       //         });
	       //         //console.log(arr)
	       //         $(this).prop('checked',true);
	       //         filterSelection($(this).attr('data-value'));
	       //     }
	       // });
	
		   var x, i;
	    c="all";
	    x = document.getElementsByClassName("column");
	    if (c == "all") c = "";
	    for (i = 0; i < x.length; i++) 
	    {
	        w3RemoveClass(x[i], "show");
	        if (x[i].className.indexOf(c) > -1) 
	           {
	               w3AddClass(x[i], "show");
	           }
	    }
	});
	
	// filterSelection("all")
	function filterSelection(c) 
	{
	    var x, i;
	    x = document.getElementsByClassName("column");
	    //if (c == "all") c = "";
	    for (i = 0; i < x.length; i++) 
	    {
	           //alert(x[i].className.indexOf(c));
	        w3RemoveClass(x[i], "show");
	        if (x[i].className.indexOf(c) > -1) 
	           {
	               w3AddClass(x[i], "show");
	           }
	    }
	}
	
	
	function w3AddClass(element, name) 
	{
	       
	    var i, arr1, arr2;
	    arr1 = element.className.split(" ");
	    arr2 = name.split(" ");
		console.log(arr1,arr2);
	    for (i = 0; i < arr2.length; i++) 
	    {
	        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	    }
	}
	
	function w3RemoveClass(element, name) {
	       
	    var i, arr1, arr2;
	    arr1 = element.className.split(" ");
	    arr2 = name.split(" ");
	       
	    for (i = 0; i < arr2.length; i++) 
	    {
	            while (arr1.indexOf(arr2[i]) > -1) 
	            {
	                arr1.splice(arr1.indexOf(arr2[i]), 1);     
	            }
	    }
	    element.className = arr1.join(" ");
	}
</script>
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
			<div class="row ">
				<div class="col-lg-8" id="myBtnContainer">
					<div class="row">
						<div class="column filter01">
							<div class="content">
								<img id="columnImg c1" class="img" src="{{ asset('assets\img\category\f (1).jpg') }}" alt="Bedroom" >
								<h4>Bedroom</h4>
							</div>
						</div>
						<div class="column filter01">
							<div class="content">
								<img id="columnImg c1" class="img" src="{{ asset('assets\img\category\f (2).jpg') }}" alt="Bedroom">
								<h4>Bedroom</h4>
							</div>
						</div>
						<div class="column filter02">
							<div class="content">
								<img id="columnImg c2" class="img" src="{{ asset('assets\img\category\f (3).jpg') }}" alt="Living Room">
								<h4>Living Room</h4>
							</div>
						</div>
						<div class="column filter02">
							<div class="content">
								<img id="columnImg c2" class="img" src="{{ asset('assets\img\category\f (4).jpg') }}" alt="Living Room">
								<h4>Living Room</h4>
							</div>
						</div>
						<div class="column filter03">
							<div class="content">
								<img id="columnImg c3" class="img" src="{{ asset('assets\img\category\f (5).jpg') }}" alt="Kitchen">
								<h4>Kitchen</h4>
							</div>
						</div>
						<div class="column filter03">
							<div class="content">
								<img id="columnImg c3" class="img" src="{{ asset('assets\img\category\f (6).jpg') }}" alt="Kitchen">
								<h4>Kitchen</h4>
							</div>
						</div>
						<div class="column filter04">
							<div class="content">
								<img id="columnImg c4" class="img" src="{{ asset('assets\img\category\f (7).jpg') }}" alt="Bathroom">
								<h4>Bathroom</h4>
							</div>
						</div>
						<div class="column filter04">
							<div class="content">
								<img id="columnImg c4" class="img" src="{{ asset('assets\img\category\f (8).jpg') }}" alt="Bathroom">
								<h4>Bathroom</h4>
							</div>
						</div>
						<div class="column filter05">
							<div class="content">
								<img id="columnImg c5" class="img" src="{{ asset('assets\img\category\f (9).jpg') }}" alt="Kids Room">
								<h4>Kids Room</h4>
							</div>
						</div>
						<div class="column filter05">
							<div class="content">
								<img id="columnImg c5" class="img" src="{{ asset('assets\img\category\f (10).jpg') }}" alt="Kids Room">
								<h4>Kids Room</h4>
							</div>
						</div>
						<div class="column filter06">
							<div class="content">
								<img id="columnImg c6" class="img" src="{{ asset('assets\img\category\f (11).jpg') }}" alt="Outdoor">
								<h4>Outdoor</h4>
							</div>
						</div>
						<div class="column filter06">
							<div class="content">
								<img id="columnImg c6" class="img" src="{{ asset('assets\img\category\f (12).jpg') }}" alt="Outdoor">
								<h4>Outdoor</h4>
							</div>
						</div>
						<div class="column filter07">
							<div class="content">
								<img id="columnImg c7" class="img" src="{{ asset('assets\img\category\f (13).jpg') }}" alt="Terrace Wall Cladding">
								<h4>Terrace Wall Cladding</h4>
							</div>
						</div>
						<div class="column filter07">
							<div class="content">
								<img id="columnImg c7" class="img" src="{{ asset('assets\img\category\f (14).jpg') }}" alt="Terrace Wall Cladding">
								<h4>Terrace Wall Cladding</h4>
							</div>
						</div>
						<div class="column filter08">
							<div class="content">
								<img id="columnImg c8" class="img" src="{{ asset('assets\img\category\f (15).jpg') }}" alt="2x2mm">
								<h4>2x2mm</h4>
							</div>
						</div>
						<div class="column filter08">
							<div class="content">
								<img id="columnImg c8" class="img" src="{{ asset('assets\img\category\f (16).jpg') }}" alt="2x2mm">
								<h4>2x2mm</h4>
							</div>
						</div>
						<div class="column filter9">
							<div class="content">
								<img id="columnImg c9" class="img" src="{{ asset('assets\img\category\f (17).jpg') }}" alt="2x4mm">
								<h4>2x4mm</h4>
							</div>
						</div>
						<div class="column filter09">
							<div class="content">
								<img id="columnImg c9" class="img" src="{{ asset('assets\img\category\f (18).jpg') }}" alt="2x4mm">
								<h4>2x4mm</h4>
							</div>
						</div>
						<div class="column filter10">
							<div class="content">
								<img id="columnImg c10" class="img" src="{{ asset('assets\img\category\f (19).jpg') }}" alt="12x12mm">
								<h4>12x12mm</h4>
							</div>
						</div>
						<div class="column filter10">
							<div class="content">
								<img id="columnImg c10" class="img" src="{{ asset('assets\img\category\f (20).jpg') }}" alt="12x12mm">
								<h4>12x12mm</h4>
							</div>
						</div>
						<div class="column filter11">
							<div class="content">
								<img id="columnImg c11" class="img" src="{{ asset('assets\img\category\f (21).jpg') }}" alt="12x18mm">
								<h4>12x18mm</h4>
							</div>
						</div>
						<div class="column filter11">
							<div class="content">
								<img id="columnImg c11" class="img" src="{{ asset('assets\img\category\f (22).jpg') }}" alt="12x18mm">
								<h4>12x18mm</h4>
							</div>
						</div>
						<div class="column filter12">
							<div class="content">
								<img id="columnImg c12" class="img" src="{{ asset('assets\img\category\f (23).jpg') }}" alt="12x24mm">
								<h4>12x24mm</h4>
							</div>
						</div>
						<div class="column filter12">
							<div class="content">
								<img id="columnImg c12" class="img" src="{{ asset('assets\img\category\f (24).jpg') }}" alt="12x24mm">
								<h4>12x24mm</h4>
							</div>
						</div>
						<!-- END GRID -->
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-block-top">
						<h2>Filter By</h2>
					</div>
					<div class="sidebar-block collapsed  open" id="cat">
						<div class="block-title">
							<span>Category</span>
							<div class="toggle-arrow"></div>
						</div>
						<div class="block-content" style="display: block;">
							<ul class="category-list" style="list-style-type: none;">
								<li><input type="checkbox" name="t1" id="c1" class="btn checkbox chk_filter1" data-value="filter01"> Bedroom</li>
								<li><input type="checkbox" name="t1" id="c2" class="btn checkbox chk_filter1" data-value="filter02"> Living Room</li>
								<li><input type="checkbox" name="t1" id="c3" class="btn checkbox chk_filter1" data-value="filter03"> Kitchen</li>
								<li><input type="checkbox" name="t1" id="c4" class="btn checkbox chk_filter1" data-value="filter04"> Bathroom</li>
								<li><input type="checkbox" name="t1" id="c5" class="btn checkbox chk_filter1" data-value="filter05"> Kids Room</li>
								<li><input type="checkbox" name="t1" id="c6" class="btn checkbox chk_filter1" data-value="filter06"> Outdoor</li>
								<li><input type="checkbox" name="t1" id="c7" class="btn checkbox chk_filter1" data-value="filter07"> Terrace Wall Cladding</li>
							</ul>
						</div>
					</div>
					<div class="sidebar-block collapsed open" id="tile_size">
						<div class="block-title">
							<span>Tile Size</span>
							<div class="toggle-arrow"></div>
						</div>
						<div class="block-content" style="display: block;">
							<ul class="category-list" style="list-style-type: none;">
								<li><input type="checkbox" name="t2" id="c8" class="btn checkbox chk_filter1" data-value="filter08"> 2x2mm</li>
								<li><input type="checkbox" name="t2" id="c9" class="btn checkbox chk_filter1" data-value="filter09"> 2x4mm</li>
								<li><input type="checkbox" name="t2" id="c10" class="btn checkbox chk_filter1" data-value="filter10"> 12x12mm</li>
								<li><input type="checkbox" name="t2" id="c11" class="btn checkbox chk_filter1" data-value="filter11"> 12x18mm</li>
								<li><input type="checkbox" name="t2" id="c12" class="btn checkbox chk_filter1" data-value="filter12"> 12x24mm</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</main>
@endsection