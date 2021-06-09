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
		.reviewimage {
			max-height:500px;
			max-width:500px;
			height:auto;
			width:auto;
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
				<?php
				include('conn.php');
				$sql = "SELECT product_image FROM product_data WHERE product_name = '$name'";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo '<div class="aside"><img src="data:image/png;base64,' . base64_encode($row['product_image']) . '" class="border img-sm reviewimage"></div>';
					}
				}
				?>
				<h3>Description</h3>
				<?php
				include('conn.php');
				$sql = " SELECT product_description FROM product_data WHERE product_name = '$name' ";
				if ($result = $conn->query($sql)) {
					while ($row = $result->fetch_assoc()) {
						$proddesc = $row["product_description"];
					}
				}
				echo
					'
					<p>'.$proddesc.'</p>
					';
				?>
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
														
														<figcaption class="info align-self-center">
															<!--<a href="#" class="btn btn-light text-primary btn-sm"> Review </a>-->
															<form action="doing_review.php" method="post">
																<?php echo '<input type="hidden" name="item_name" value="' . $name . '" />'; ?>
																<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm"><h5>Add your review!</h5></button>
															</form>
														</figcaption>
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
									<?php
									include('conn.php');
									$sql = "SELECT product_id FROM product_data WHERE product_name = '$name'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$productid = $row["product_id"];
										}
									}
									$sql = "SELECT * FROM review_data WHERE r_product_id = '$productid'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$review_id = $row["review_id"];
											$userid = $row["r_user_id"];
											$userreview = $row["user_review"];
											
											//To get username, will delete this later
											$sql1 = "SELECT username FROM user_accounts WHERE user_id = '$userid'";
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
												while($row = $result1->fetch_assoc()) {
													$username = $row["username"];
												}
											}
											
											echo 
												'
												<div class="card p-3 mt-2">
													<div class="d-flex justify-content-between align-items-center">
														<div class="user d-flex flex-row align-items-center"> 
															<span><small class="font-weight-bold text-primary">'.$username.'</small> 
															<!--<span><small class="font-weight-bold text-primary">Anonymous</small> -->
														</div> 
														<div class="user d-flex flex-row align-items-center" style="width:500px;"> 
															<small class="font-weight-bold">'.$userreview.'</small></span> 
														</div> 
													</div>
													<div class="action d-flex justify-content-between mt-2 align-items-center">
														<div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
													</div>
												</div>
												';
											
										}
									} else {
										echo 
										'
										<div class="card p-3 mt-2">
											<div class="d-flex justify-content-between align-items-center">
												<small class="font-weight-bold">No reviews written yet...</small></span> <br/>
												<small class="font-weight-bold">Be the first!</small></span> 
											</div>
										</div>
										';
									}
									?>
									<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
