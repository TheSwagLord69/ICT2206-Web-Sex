<!DOCTYPE html>
<?php include('conn.php')?>
<?php include('verifyloggedinstatus.php')?>

<html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase Register</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<!-- Custom styling -->
		<link href="assets/css/style.css?v=2.0" rel="stylesheet" />
	</head>
	<body>
		<?php
		include 'navbar.php';
		?>

		<section class="section-content padding-y bg">
			<div class="container">
				<div class="row">
					<aside class="col-md-6">
						<!-- ============================ COMPONENT MY REVIEWS ================================= -->
						<div class="card">
						<article class="card-body">
						<header class="mb-4">
							<h4 class="card-title mb-4"><?php echo $name; ?>'s Reviews</h4>
							<a class="float-right" href="logout.php">Logout</a>
							<?php
							$user_id = $_SESSION['user_id'];
							$sql = " SELECT * FROM review_data WHERE r_user_id= '$user_id' ";
							if ($result = $conn->query($sql)) {
								while ($row = $result->fetch_assoc()) {
									$reviewid = $row["review_id"];
									$userid = $row["r_user_id"];
									$productid = $row["r_product_id"];
									$userreview = $row["user_review"];
										
										$sql1 = " SELECT `product_name` FROM `product_data` WHERE `product_id` = '$productid' ";
										if ($result1 = $conn->query($sql1)) {
											while ($row = $result1->fetch_assoc()) {
												$productname = $row["product_name"];
											}
										}
										
									echo
										'
										<div class="card p-3 mt-2">
											<div class="d-flex justify-content-between align-items-center">
												<div class="user d-flex flex-row align-items-center">
													<h3><span><small class="font-weight-bold text-primary" style="color: #53565B;">'.$productname.'</small></h3>
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
							}
							?>
						</header>
						<hr>
						</article> <!-- card-body end .// -->
						</div> <!-- card.// -->
						<!-- ============================ COMPONENT MY REVIEWS  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
