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
				<h1>Delete Review</h1>
				<div class="row">
					<aside class="col-md-10">
						<!-- ============================ COMPONENT DO REVIEW  ================================= -->
						<div class="card">
						  <div class="card-body">
							<?php
							
							$itemNameErr = $reviewIdErr = "";

							if ($_SERVER["REQUEST_METHOD"] == "POST") {

								if (empty($_POST["item_name"])) {
									$itemNameErr = '<div class="alert alert-danger" role="alert">Item cannot be nothing.</div>';
								} else {
									$product_name = $_POST["item_name"];
									echo '<p>'.$product_name.'</p>';
								}
								
								if (empty($_POST["review_id"])) {
									$reviewIdErr = '<div class="alert alert-warning" role="alert">Review id cannot be empty.</div>';
								} else {
									$review_id = $_POST["review_id"];
								}
								
								if ($itemNameErr == "" && $reviewIdErr == ""){
									include('conn.php');
									
									//get product id
									$sql = "SELECT `product_id` FROM `product_data` WHERE `product_name` = '$product_name' ";
									$result = $conn->query($sql);
									while ($row = $result->fetch_assoc()) {
										$product_id = $row["product_id"];
									}
									
									//get user id
									$user_id = $_SESSION['user_id'];		
									
									$sql = "DELETE FROM `review_data` WHERE review_id = '$review_id'";
									
									$conn->query($sql);
									$conn->close();
									
									echo '<h4 class="card-title mb-4">Your review has been deleted forever!</h4>';
								} else {
									echo '<h4 class="card-title mb-4">Your delete is unsuccessful</h4>';
								}

							}

							?>
							<?php echo $itemNameErr; ?>
							<?php echo $reviewIdErr; ?>
							<?php
							echo '<div class="col-md-3">';
								echo '<figure class="itemside mb-4">';
										echo '<figcaption class="info align-self-center">';
											echo '<form action="viewing_review.php" method="post">';
												echo '<input type="hidden" name="item_name" value="' . $product_name . '" />';
												echo '<button name="review" value="review" type="submit" class="btn btn-link title">' . $product_name . '</button>';
											echo '</form>';
										echo '</figcaption>';
								echo '</figure>';
							echo '</div>';
							?>
							<a href="#"></a>
						  </div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT DO REVIEW END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
