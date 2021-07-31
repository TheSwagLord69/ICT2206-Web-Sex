<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase About us</title>

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
					<aside class="col-md-10">
						<!-- ============================ COMPONENT USERSEARCH  ================================= -->
						<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
							<div class="col-md-5 p-lg-5 mx-auto my-5">
								<h1 class="display-4 font-weight-normal">Search for an existing user!</h1>
								<form action="usersearch.php" method="POST">
									<div class="form-group">
										<textarea name="user" class="form-control" placeholder="Enter username here"></textarea>
									</div>
									<br/>
									<aside class="col-md-4">
										<button class="btn btn-primary btn-block">Submit</button>
									</aside>
								</form>
							</div>
							
							<div class="product-device box-shadow d-none d-md-block"></div>
							<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
						</div>
						<div>
							<div class="col-md-5 p-lg-5 mx-auto my-5">
							<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
									include('conn.php');
									// Get product name from products page
									$name = $_POST['user'];
									
									if ($name != ""){
										echo '<p>Searching for:'.$name.'</p>';
									} else {
										echo '<p>Searching for:</p>';
									}
									
									$sql = "SELECT username FROM user_accounts WHERE username = '$name' ";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										echo '<p>user exists!</p>';
										while($row = mysqli_fetch_array($result)) {
											//Display all results from the query at once:
											//print_r($row);
											echo '<pre>'; print_r($row); echo '</pre>';
										}
									} else {
									  echo "<p>0 results</p>";
									}
									$conn->close();
									
								} 
							?>
							</div>
						</div>
						<!-- ============================ COMPONENT USERSEARCH END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
