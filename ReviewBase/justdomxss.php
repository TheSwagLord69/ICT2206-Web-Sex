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
						<!-- ============================ COMPONENT justdomxss  ================================= -->
						<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
							<div class="col-md-5 p-lg-5 mx-auto my-5">
								<h1 class="display-4 font-weight-normal">Submit your name.</h1>
								<p>And we'll say hi. :)</p>
								<form action="justdomxss.php" method="GET">
									<div class="form-group">
										<textarea name="name" class="form-control" placeholder="Enter username here"></textarea>
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
								if ($_SERVER["REQUEST_METHOD"] == "GET") {
									if( isset($_GET['name'])){
										$name = $_GET['name'];
										echo 'Hi, '.$name;
									}
								}
							?>
							</div>
						</div>
						<!-- ============================ COMPONENT justdomxss END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
