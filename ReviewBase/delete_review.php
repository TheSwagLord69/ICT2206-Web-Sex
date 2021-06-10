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
	
	if ($_SESSION['isloggedin'] == false){ //check for no login
		header('location: login.php'); //redirect to login page
	}
	?>

	<section class="section-content padding-y bg">
			<div class="container">
				<h1>Review</h1>
				<div class="row">
					<aside class="col-md-10">
						<!-- ============================ COMPONENT DO REVIEW  ================================= -->
						<div class="card">
						  <div class="card-body">
							<?php
							if ($_SERVER["REQUEST_METHOD"] != "POST") {
								echo '
									<div class="alert alert-warning" role="alert">
										<a href="category.php">Please select item to review</a>
									</div>
									';
							}
							?>
						  <h4 class="card-title mb-4">Delete Review</h4>
						  <form action="handle_review_delete.php" method="post">
							<div class="form-group">
								<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									// Get product name from products page
									$name = $_POST['item_name'];
									if (empty($name)) {
										echo "Error: Item is empty";
									} else {
										echo "<label>$name</label>";
									}
								} else {
									echo "<label>No item selected</label>";
								}
								?>
								<br/><br/>
								<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									// Get product name from prev page
									$name = $_POST['item_name'];
									$reviewid = $_POST["review_id"];
									if (empty($name)) {
										echo '<input type="hidden" name="item_name" value="" />';
									} else {
										echo '<input type="hidden" name="item_name" value="'. $name .'" />';
									}
									// Get review id from prev page
									if (empty($_POST["review_id"])) {
										echo '<input type="hidden" name="review_id" value="" />';
									} else {
										echo '<input type="hidden" name="review_id" value="'. $reviewid .'" />';
									}
								} else {
									echo '<input type="hidden" name="review_id" value="" />';
									echo '<input type="hidden" name="item_name" value="" />';
								}
								?>
								
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
									$sql = "SELECT * FROM review_data WHERE r_product_id = '$productid' AND review_id = '$reviewid'";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$reviewid = $row["review_id"];
											$userid = $row["r_user_id"];
											$userreview = $row["user_review"];
											
											echo 
												'
												<div class="card p-3 mt-2">
													<div class="d-flex justify-content-between align-items-center">
														<div class="user d-flex flex-row align-items-center" style="width:400px;"> 
															<small class="font-weight-bold">'.$userreview.'</small></span> 
														</div> 
													</div>
												</div>
												';
										}
									}
									?>
									<br/>
								</div>
							</div>
							<br/>
							<aside class="col-md-2">
								<button class="btn btn-primary btn-block" style="background-color:red;">Remove</button>
							</aside>
						  </form>
						  </div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT DO REVIEW END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
