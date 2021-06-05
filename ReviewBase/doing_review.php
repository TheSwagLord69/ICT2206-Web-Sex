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
				<h1>Reviewing some item</h1>
				<div class="row">
					<aside class="col-md-10">
						<!-- ============================ COMPONENT FEEDBACK  ================================= -->
						<div class="card">
						  <div class="card-body">
						  <h4 class="card-title mb-4">*insert item name here using php*</h4>
						  <form>
							<div class="form-group">
								<label>Your Review</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label  for="exampleFormControlFile1">
									<input type="file" class="form-control-file">
								</label>
							</div>
							<button class="btn btn-primary btn-block">Submit</button>
						  </form>
						  </div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT FEEDBACK END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>