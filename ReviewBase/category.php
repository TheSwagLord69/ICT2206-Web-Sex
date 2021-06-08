<!DOCTYPE html>
<html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase Category</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<!-- Custom styling -->
		<link href="assets/css/style.css?v=2.0" rel="stylesheet" />
		
		<style>
		.aside img {
			min-width:200px;
			max-width:201px;
			min-height:200px;
			max-height:201px;
			border-radius: 10%;
			padding-bottom:5px;
		}
		.info a {
			text-overflow:hidden;
		}
		</style>
		
	</head>
	<body>
	
		<?php
		include 'navbar.php';
		?>
		
		<section class="section-content padding-y bg">
			<div class="container">
				<h1>Our products for review</h1>
				<br/>
				<div class="row">
					<aside class="col-md-12">
						<!-- ============================ COMPONENTS CATEGORY ITEMS  ================================= -->
						<div class="card card-body">
							<div class="row">
								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/1.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Hipster Polaroid Camera</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Hipster Polaroid Camera' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Hipster Polaroid Camera</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Hipster Polaroid Camera' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/2.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">BLM Axe Deodorant</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='BLM Axe Deodorant' />
												<button name="review" value="review" type="submit" class="btn btn-link title">BLM Axe Deodorant</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='BLM Axe Deodorant' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/3.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">White Supremacy Apple Airpods</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='White Supremacy Apple Airpods' />
												<button name="review" value="review" type="submit" class="btn btn-link title">White Supremacy Apple Airpods</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='White Supremacy Apple Airpods' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/4.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Big Black Ray Bans</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Big Black Ray Bans' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Big Black Ray Bans</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Big Black Ray Bans' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->
							</div> <!-- row.// -->
						</div> <!-- card // -->
						<br/>
						<div class="card card-body">
							<div class="row">
								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/5.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Chocolate Wireless Mouse</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Chocolate Wireless Mouse' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Chocolate Wireless Mouse</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Chocolate Wireless Mouse' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/6.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Virgin Potted Plant</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Virgin Potted Plant' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Virgin Potted Plant</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Virgin Potted Plant' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/7.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Brown Leather Fossil Watch</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Brown Leather Fossil Watch' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Brown Leather Fossil Watch</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Brown Leather Fossil Watch' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/8.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Black Leather Seiko Watch</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Black Leather Seiko Watch' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Black Leather Seiko Watch</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Black Leather Seiko Watch' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->
							</div> <!-- row.// -->
						</div> <!-- card // -->
						<br/>
						<div class="card card-body">
							<div class="row">
								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/9.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Homeless Perfume</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Homeless Perfume' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Homeless Perfume</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Homeless Perfume' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/10.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Petite Potted Cacti</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Petite Potted Cacti' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Petite Potted Cacti</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Petite Potted Cacti' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/11.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Abused Nike Shoes</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Abused Nike Shoes' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Abused Nike Shoes</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Abused Nike Shoes' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/12.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Dirty Vans Shoes</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Dirty Vans Shoes' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Dirty Vans Shoes</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Dirty Vans Shoes' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->
							</div> <!-- row.// -->
						</div> <!-- card // -->
						<br/>
						<div class="card card-body">
							<div class="row">
								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/13.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Abused Olympus Camera</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Abused Olympus Camera' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Abused Olympus Camera</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Abused Olympus Camera' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/14.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Switch Controllers</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Switch Controllers' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Switch Controllers</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Switch Controllers' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/15.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Black Casio Watch</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Black Casio Watch' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Black Casio Watch</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Black Casio Watch' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->

								<div class="col-md-3">
									<figure class="itemside mb-4">
										<div class="aside"><img src="images/items/16.jpg" class="border img-sm"></div>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="title">Virgin Beats Headphones</a>-->
											<form action="viewing_review.php" method="post">
												<input type='hidden' name='item_name' value='Nude Beats Headphones' />
												<button name="review" value="review" type="submit" class="btn btn-link title">Nude Beats Headphones</button>
											</form>
										</figcaption>
										<figcaption class="info align-self-center">
											<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
											<form action="doing_review.php" method="post">
												<input type='hidden' name='item_name' value='Dirty Vans Shoes' />
												<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>
											</form>
										</figcaption>
									</figure>
								</div> <!-- col.// -->
							</div> <!-- row.// -->
						</div> <!-- card // -->
						<br/>
						<!-- ============================ COMPONENTS CATEGORY ITEMS  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
