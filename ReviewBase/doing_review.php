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
						  <h4 class="card-title mb-4">You are currently reviewing</h4>
						  <form>
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
								}
								?>
								<br/><br/>
								<textarea class="form-control" rows="10" cols="50" placeholder="What are your thoughts?"></textarea>
							</div>
							<br/>
							<aside class="col-md-2">
								<button class="btn btn-primary btn-block">Submit</button>
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
