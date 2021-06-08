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
		
		<!-- Custom styling -->
		<link href="assets/css/style.css?v=2.0" rel="stylesheet" />

	</head>
	<body>
	
	<?php
	include 'navbar.php';
	?>

	<section class="section-content padding-y bg">
			<div class="container">
				<h1>Review</h1>
				<div class="row">
					<aside class="col-md-10">
						<!-- ============================ COMPONENT DO REVIEW  ================================= -->
						<div class="card">
						  <div class="card-body">
						  <h4 class="card-title mb-4">Your review has been posted successfully or unsuccessfully</h4>
							<?php

							$itemNameErr = $reviewDataErr = "";

							if ($_SERVER["REQUEST_METHOD"] == "POST") {

								if (empty($_POST["item_name"])) {
									$itemNameErr = '<div class="alert alert-danger" role="alert">Item cannot be nothing.</div>';
								} else {
									$product_name = $_POST["item_name"];
									echo '<p>'.$product_name.'</p>';
								}

								if (empty($_POST["user_review_data"])) {
									$reviewDataErr = '<div class="alert alert-warning" role="alert">Review cannot be empty.</div>';
								} else {
									$review_data = $_POST["user_review_data"];
									echo '<p>'.$review_data.'</p>';
								}
								
								if ($itemNameErr == "" && $reviewDataErr == ""){
									include('conn.php');
									
									//get product id
									$sql = "SELECT `product_id` FROM `product_data` WHERE `product_name` = '$product_name' ";
									$result = $conn->query($sql);
									while ($row = $result->fetch_assoc()) {
										$product_id = $row["product_id"];
									}
									
									//get user id
									$user_id = $_SESSION['user_id'];

									$review_data = $conn->real_escape_string($_POST["user_review_data"]);			
									
									$sql = "INSERT INTO `review_data` (`r_user_id`, `r_product_id`, `user_review`)
											VALUES ('$user_id', '$product_id', '$review_data')";  
									//INSERT INTO `review_data` (`review_id`, `r_user_id`, `r_product_id`, `user_review`) VALUES (NULL, '6', '4', 'anotehter test');
									
									$conn->query($sql);
									$conn->close();
								}

							}

							?>
							<?php echo $itemNameErr; ?>
							<?php echo $reviewDataErr; ?>
						  </div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT DO REVIEW END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
