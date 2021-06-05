<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase Login</title>

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
						<!-- ============================ COMPONENT LOGIN 1  ================================= -->
						<div class="card">
						  <div class="card-body">
						  <h4 class="card-title mb-4">Sign in</h4>
						  <form>
							  <div class="form-group">
								 <label>Email</label>
								 <input name="" class="form-control" placeholder="ex. name@gmail.com" type="email">
							  </div> <!-- form-group// -->
							  <div class="form-group">
								<a class="float-right" href="#">Forgot</a>
								<label>Password</label>
								<input class="form-control" placeholder="******" type="password">
							  </div> <!-- form-group// --> 
							  <div class="form-group"> 
								<label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
							  </div> <!-- form-group form-check .// -->
							  <div class="form-group">
								  <button type="submit" class="btn btn-primary btn-block"> Login  </button>
							  </div> <!-- form-group// -->    
						  </form>
						  </div> <!-- card-body.// -->
						  <div class="card-footer text-center">Don't have an account? <a href="register.php">Sign up</a></div>
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT LOGIN 1  END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>