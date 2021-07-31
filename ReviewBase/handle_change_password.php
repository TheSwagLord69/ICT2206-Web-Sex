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
						<!-- ============================ COMPONENT DO PASSWORD CHANGE  ================================= -->
						<div class="card">
						  <div class="card-body">
							<?php
							
							$cpasswordErr = $npasswordErr = $cnpasswordErr = $notsameErr = $wrongcurrentpassErr ="";

							if ($_SERVER["REQUEST_METHOD"] == "POST") {

								//Check if submitted fields are empty
								if (empty($_POST["cpassword"])) {
									$cpasswordErr = '<div class="alert alert-danger" role="alert">Current password cannot be nothing.</div>';
								} else {
									$current_password = $_POST["cpassword"];
									echo '<p>current password:'.$current_password.'</p>';
								}

								if (empty($_POST["npassword"])) {
									$npasswordErr = '<div class="alert alert-warning" role="alert">New password cannot be empty.</div>';
								} else {
									$new_password = $_POST["npassword"];
									echo '<p>new password:'.$new_password.'</p>';
								}
								
								if (empty($_POST["cnpassword"])) {
									$cnpasswordErr = '<div class="alert alert-warning" role="alert">Confirm new password cannot be empty.</div>';
								} else {
									$confirm_new_password = $_POST["cnpassword"];
									echo '<p>confirm new password:'.$confirm_new_password.'</p>';
								}
								
								//Check if new password and confirm new password are the same
								if (($_POST["cnpassword"])!=($_POST["npassword"])) {
									$notsameErr = '<div class="alert alert-warning" role="alert">New password and confirm new password must be the same.</div>';
								} else {
									echo '<p>New Passwords match each other</p>';
								}
								
								//Check if password entered is the same as current password in the db
								include('conn.php');
								$user_id = $_SESSION['user_id'];
								$sql = " SELECT password FROM user_accounts WHERE user_id='$user_id' ";
								if ($result = $conn->query($sql)) {
									while ($row = $result->fetch_assoc()) {
										$dbpassword = $row["password"];
									}
								}
								if (($_POST["cpassword"])!=($dbpassword)) {
									$wrongcurrentpassErr = '<div class="alert alert-warning" role="alert">Current password is incorrect.</div>';
								} else {
									echo '<p>Current password is correct</p>';
								}
								
								//Update new password in db
								if ($cpasswordErr == "" && $npasswordErr == "" && $cnpasswordErr == "" && $notsameErr == "" && $wrongcurrentpassErr == ""){
									include('conn.php');
									$user_id = $_SESSION['user_id'];
									$currpassword = $_POST["cpassword"];
									$newpassword = $_POST['cnpassword'];
									$sql = "UPDATE user_accounts SET password='$newpassword' WHERE user_id='$user_id' AND password='$currpassword'";
									
									if ($conn->query($sql) === TRUE) {
										echo '<h4 class="card-title mb-4">Your password has been updated successfully!</h4>';
									} else {
										echo "Error updating record: " . $conn->error;
									}
								} else {
									echo '<h4 class="card-title mb-4">Your password change is unsuccessful. Read Errors for details.</h4>';
								}

							}

							?>
							<?php echo $cpasswordErr; ?>
							<?php echo $npasswordErr; ?>
							<?php echo $cnpasswordErr; ?>
							<?php echo $notsameErr; ?>
							<?php echo $wrongcurrentpassErr; ?>
							<?php
							echo '<div class="col-md-3">';
								echo '<figure class="itemside mb-4">';
										echo '<figcaption class="info align-self-center">';
											echo '<a href="myprofile.php">Go back to My Profile</a>';
										echo '</figcaption>';
								echo '</figure>';
							echo '</div>';
							?>
							<a href="#"></a>
						  </div> <!-- card-body.// -->
						</div> <!-- card .// -->
						<!-- ============================ COMPONENT DO PASSWORD CHANGE END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
