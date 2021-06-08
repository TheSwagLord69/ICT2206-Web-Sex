<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<!-- Font Awesome -->
		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		
		<!-- Custom styling -->
		<link href="assets/css/style.css?v=2.0" rel="stylesheet" />
		
		<style>
		.user-img {
			margin-top: 4px
		}
		.check-icon {
			font-size: 17px;
			color: #c3bfbf;
			top: 1px;
			position: relative;
			margin-left: 3px
		}
		.icons i {
			margin-left: 8px
		}
		</style>

	</head>
	<body>
	
	<?php
	include 'navbar.php';
	?>

	<section class="section-content padding-y bg">
			<div class="container">
				<h1>
				<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					// collect value of input field
					$name = $_POST['item_name'];
					if (empty($name)) {
						echo "Error: Item is empty";
					} else {
						echo "<label>$name</label>";
					}
				}
				?>
				</h1>
				<div class="row">
					<aside class="col-md-10">
						<!-- ============================ COMPONENT VIEW REVIEW  ================================= -->
						<div class="card">
						  <div class="card-body">
						  <h4 class="card-title mb-4">What people think about this</h4>
						  
								<div class="card p-3 mt-2">
									<div class="d-flex justify-content-between align-items-center">
										<div class="user d-flex flex-row align-items-center"> 
											<figure class="itemside mb-4">
												<figcaption class="info align-self-center">
													<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
													<form action="doing_review.php" method="post">
														<input type='hidden' name='item_name' value='
														<?php
														if ($_SERVER["REQUEST_METHOD"] == "POST") {
															// collect value of input field
															$name = $_POST['item_name'];
															if (empty($name)) {
																echo "Error: Item is empty";
															} else {
																echo $name;
															}
														}
														?>
														' />
														<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm"><h5>Add your review!</h5></button>
													</form>
												</figcaption>
											</figure>
										</div>
									</div>
									<div class="action d-flex justify-content-between mt-2 align-items-center">
										<div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
									</div>
								</div>

								<div class="col-md-8">
									<div class="card p-3 mt-2">
										<div class="d-flex justify-content-between align-items-center">
											<div class="user d-flex flex-row align-items-center"> 
												<!--<img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2"> -->
												<span><small class="font-weight-bold text-primary">james_olesenn</small> 
											</div> 
											<div class="user d-flex flex-row align-items-center" style="width:500px;"> 
												<small class="font-weight-bold">Hmm, This poster looks cool.</small></span> 
											</div> 
											<small>2 days ago</small>
										</div>
										<div class="action d-flex justify-content-between mt-2 align-items-center">
											<div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
										</div>
									</div>
									<div class="card p-3 mt-2">
										<div class="d-flex justify-content-between align-items-center">
											<div class="user d-flex flex-row align-items-center"> 
												<!--<img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2"> -->
												<span><small class="font-weight-bold text-primary">olan_sams</small> 
											</div> 
											<div class="user d-flex flex-row align-items-center"> 
												<small class="font-weight-bold">Loving your work and profile! </small></span> 
											</div> 
											<small>3 days ago</small>
										</div>
										<div class="action d-flex justify-content-between mt-2 align-items-center">
											<div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
										</div>
									</div>
									<div class="card p-3 mt-2">
										<div class="d-flex justify-content-between align-items-center">
											<div class="user d-flex flex-row align-items-center"> 
												<!--<img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2"> -->
												<span><small class="font-weight-bold text-primary">rashida_jones</small> 
											</div> 
											<div class="user d-flex flex-row align-items-center">
												<small class="font-weight-bold">Really cool Which filter are you using? </small></span> 
											</div> 
											<small>3 days ago</small>
										</div>
										<div class="action d-flex justify-content-between mt-2 align-items-center">
											<div class="icons align-items-center"> <i class="fa fa-user-plus text-muted"></i> <i class="fa fa-star-o text-muted"></i> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
										</div>
									</div>
									<div class="card p-3 mt-2">
										<div class="d-flex justify-content-between align-items-center">
											<div class="user d-flex flex-row align-items-center"> 
												<!--<img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2"> -->
												<span><small class="font-weight-bold text-primary">skrit_skritt68</small> 
											</div> 
											<div class="user d-flex flex-row align-items-center">
												<small class="font-weight-bold">ESGETTIT asdasd asd asd asd asd as dwe a ds daw e ad w ad asd wad  32 33r wrf3w  3w w3we dxr ert e wwe we 3ew derw p </small></span> 
											</div> 
											<small>4 days ago</small>
										</div>
										<div class="action d-flex justify-content-between mt-2 align-items-center">
											<div class="icons align-items-center"> <i class="fa fa-user-plus text-muted"></i> <i class="fa fa-star-o text-muted"></i> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
										</div>
									</div>
								</div>
							
						  </div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT VIEW REVIEW END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
