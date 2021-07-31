<!DOCTYPE html>
<?php include('conn.php')?>
<?php include('verifyloggedinstatus.php')?>

<html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase Profile</title>

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
						<!-- ============================ COMPONENT MY PROFILE ================================= -->
						<div class="card">
						<article class="card-body">
						<header class="mb-4">
							<h4 class="card-title mb-4">Change Password for <?php echo $name; ?></h4>
							<?php
							$user_id = $_SESSION['user_id'];
							$sql = " SELECT * FROM user_accounts WHERE user_id='$user_id' ";
							if ($result = $conn->query($sql)) {
								while ($row = $result->fetch_assoc()) {
									$userid = $row["user_id"];
									$username = $row["username"];
									$password = $row["password"];
									
									echo
										'
										<div class="card p-3 mt-2">
											<h3>Change Password</h3>
											<div class="d-flex justify-content-between align-items-center">
												<form action="handle_change_password.php" method="post">
													<label for="currentpassword">Current Password:</label><br>
													<input type="text" id="cpassword" name="cpassword" value=""><br>
													<label for="newpassword">New Password:</label><br>
													<input type="text" id="npassword" name="npassword" value=""><br><br>
													<label for="confirmpassword">Confirm New Password:</label><br>
													<input type="text" id="cnpassword" name="cnpassword" value=""><br><br>
													<!--<input type="submit" value="Submit">-->
													<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm" style="color:#0B6623;"><small class="font-weight-bold">Submit</small></button>
												</form> 
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
						<!-- ============================ COMPONENT MY PROFILE  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
