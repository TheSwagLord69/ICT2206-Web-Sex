<!DOCTYPE html>
<?php include('conn.php')?>
<?php
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['isloggedin'] == true) {
    header('location: myreviews.php');
}
?>

<?php
// define variables and set to empty values

$usernameErr = $passwordErr = $confirm_passwordErr = "";
$username = $password = $confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$username = trim($_POST["username"]);
	$password = $_POST["password"];
	$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
	$confirm_password = $_POST["confirm_password"];
	
	$sql_check_username = "SELECT * FROM user_accounts WHERE username = '" . $username . "'";
	$result_check_username = mysqli_query($conn, $sql_check_username);
	
	$success = True;

	if (empty($username)) {
		$usernameErr = "<div class=\"errorstyle\">Please enter a username</div>";
		$success = False;
	} else {
		if (mysqli_num_rows($result_check_username) > 0) {
			$usernameErr = "<div class=\"errorstyle\">The username is taken</div>";
			$success = False;
		}
	}

	if (empty($password)) {
		$passwordErr = "<div class=\"errorstyle\">Please enter a password</div>";
		$success = False;
	} else {
		if (!preg_match($pattern, $password)) {
			$passwordErr = "<div class=\"errorstyle\">Password must contain at least 8 characters at least one uppercase letter, one lowercase letter and one number</div>";
			$success = False;
		}
	}

	if (empty($confirm_password)) {
		$confirm_passwordErr = "<div class=\"errorstyle\">Please enter the confirmed password</div>";
		$success = False;
	} else {
		if ($confirm_password != $password) {
			$confirm_passwordErr = "<div class=\"errorstyle\">Confirm password not same as password</div>";
			$success = False;
		}
	}

	if ($success == True) {
		$sql = "INSERT INTO user_accounts (username, password) VALUES ('$username' , '$password')";
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		header("Location: login.php");
	}
}
?>



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
						<form action="#" method="post">
							<div class="form-row">
								<div class="col form-group">
									<label>Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username">
									<?php echo $usernameErr; ?>
								</div> <!-- form-group end.// -->
							<div class="form-row">
								<div class="form-group col-md-6">
									<label>Create password</label>
									<input type="password" class="form-control" placeholder="Password" name="password">
									<?php echo $passwordErr; ?>
								</div> <!-- form-group end.// --> 
								<div class="form-group col-md-6">
									<label>Repeat password</label>
									<input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
									<?php echo $confirm_passwordErr; ?>
								</div> <!-- form-group end.// -->  
							</div>
							<div class="form-group mt-3">
								<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Register</button>
							</div> <!-- form-group// -->      
							<p class="text-muted">By clicking the 'Register' button, you confirm that you accept our Terms of use and Privacy Policy.</p>                                          
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
