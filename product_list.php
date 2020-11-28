<?php

include_once "lib/php/functions.php";

session_start();

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>
	
</head>
<body>

	<?php include "parts/navbar.php"; ?>

	<section class="container">
	<!--	<div class="form-control">
				<form class="hotdog light" id="product-search">
					<input type="search" class="hotdog" placeholder="Search">
				</form>				
			</div>-->
		
		<div class="motto">
			<h1>FURNITURE</h1>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, odit eveniet neque voluptate aperiam natus dolorem saepe itaque iste perferendis nihil, minima. Numquam ullam enim, cupiditate veritatis aperiam quos.</p>
		</div>

		<div class="form-control">
			<div class="display-flex">
				<div class="flex-stretch display-flex">
					<div class="flex-none filter-item">
						<button data-filter="category" data-value="chair" type="button" class="filter-btn">Chair<!--	<span class="dropdown-icon svg-icon">
								<svg width="14" height="14" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="dropdown-icon svg-icon">
									<g transform="rotate(90, 12, 12)" class="jsx-1586763759">
										<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" class="jsx-1586763759">
										</path>
									</g>
								</svg>
							</span>-->
						</button>
					</div>
					<div class="flex-none filter-item">
						<button data-filter="category" data-value="sofa" type="button" class="filter-btn">Sofa</button>
					</div>
					<div class="flex-none filter-item">
						<button data-filter="category" data-value="table" type="button" class="filter-btn">Table</button>
					</div>
					<div class="flex-none filter-item">
						<button data-filter="category" data-value="lighting" type="button" class="filter-btn">Lighting</button>
					</div>
				</div>
				<div class="flex-none">
					<div class="form-select-2 filter-btn">
						<select class="js-sort">
							<option value="1">Newest First</option>
							<option value="2">Oldest First</option>
							<option value="3">Price high to low</option>
							<option value="4">Price low to high</option>
						</select>
					</div>	
				</div>
			</div>
		</div>

	
	</section>

	<div class="container-2">
		<div class="productlist grid gap"></div>
	</div>
	<?php include "parts/footer.php"; ?>

</body>
</html>


<!--<div class="form-control display-flex">
			<div class="flex-none">
				<button data-filter="category" data-value="chair" type="button" class="form-button">Chair</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="sofa" type="button" class="form-button">Sofa</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="table" type="button" class="form-button">Table</button>
			</div>
			<div class="flex-none">
				<button data-filter="category" data-value="lighting" type="button" class="form-button">Lighting</button>
			</div>
		</div>-->