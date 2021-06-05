<!DOCTYPE html>
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
						<!-- ============================ COMPONENT SIGNUP ================================= -->
						<div class="card">
						<article class="card-body">
						<header class="mb-4">
							<h4 class="card-title">Sign up</h4>
						</header>
						<form>
							<div class="form-row">
								<div class="col form-group">
									<label>First name</label>
									<input type="text" class="form-control" placeholder="">
								</div> <!-- form-group end.// -->
								<div class="col form-group">
									<label>Last name</label>
									<input type="text" class="form-control" placeholder="">
								</div> <!-- form-group end.// -->
							</div> <!-- form-row end.// -->
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="">
								<small class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div> <!-- form-group end.// -->
							<div class="form-group">
								<label class="custom-control custom-radio custom-control-inline">
								  <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
								  <span class="custom-control-label"> Male </span>
								</label>
								<label class="custom-control custom-radio custom-control-inline">
								  <input class="custom-control-input" type="radio" name="gender" value="option2">
								  <span class="custom-control-label"> Female </span>
								</label>
							</div> <!-- form-group end.// -->
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label>City</label>
								  <input type="text" class="form-control">
								</div> <!-- form-group end.// -->
								<div class="form-group col-md-6">
								  <label>Country</label>
								  <select id="inputState" class="form-control">
									<option> Choose...</option>
									  <option>Uzbekistan</option>
									  <option>Russia</option>
									  <option selected="">United States</option>
									  <option>India</option>
									  <option>Afganistan</option>
								  </select>
								</div> <!-- form-group end.// -->
							</div> <!-- form-row.// -->
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Create password</label>
									<input class="form-control" type="password">
								</div> <!-- form-group end.// --> 
								<div class="form-group col-md-6">
									<label>Repeat password</label>
									<input class="form-control" type="password">
								</div> <!-- form-group end.// -->  
							</div>
							<div class="form-group mt-3">
								<button type="submit" class="btn btn-primary btn-block"> Register  </button>
							</div> <!-- form-group// -->      
							<p class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our Terms of use and Privacy Policy.</p>                                          
						</form>
						<hr>
						<p class="text-center">Have an account? <a href="login.php">Log In</a></p>
						</article> <!-- card-body end .// -->
						</div> <!-- card.// -->
						<!-- ============================ COMPONENT SIGNUP  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>