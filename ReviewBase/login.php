<!DOCTYPE html>
<?php include('conn.php')?>
<?php
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['isloggedin'] == true) {
    header('location: myreviews.php');
}
?>

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
		// define variables and set to empty values

		$usernameErr = $passwordErr = "";
		$username = $password = "";
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			$username = trim($_POST["username"]);
			$password = $_POST["password"];
			
			$sql_login_authentication = "SELECT * FROM user_accounts WHERE username='".$username."' AND password = '".$password."'";
			$result_check_account = mysqli_query($conn,$sql_login_authentication );
			
			$success = True;
			

			if (empty($username)) {
				$usernameErr = "<div class=\"errorstyle\">Please enter a username</div>";
				$success = False;
			}
			
			if (empty($password)) {
				$passwordErr = "<div class=\"errorstyle\">Please enter a password</div>";
				$success = False;
			}
			
			if(mysqli_num_rows($result_check_account) == 1) {
				$row = mysqli_fetch_array($result_check_account);
				$_SESSION['user_id'] = trim($row["user_id"]);
				$_SESSION['isloggedin'] = true;
				header("location: myreviews.php");                                                                                                                                                                                                                  
			}
			else{
				$result_check_account_Err = "Your Login Name or Password is invalid";
				$success = False;
			}
		}

		?>

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
						  <form action="#" method="post">
							  <div class="form-group">
								 <label>Username</label>
								 <input type="text" class="form-control" placeholder="Username" name = "username">
								 <?php echo $usernameErr;?>
							  </div> <!-- form-group// -->
							  <div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control"  placeholder="Password" name = "password">
                    			<?php echo $passwordErr;
								if (!empty($result_check_account_Err)) {
									echo $result_check_account_Err;
								}
								?>
								<a class="float-right" href="#">Forget password?</a>
							  </div> <!-- form-group// -->
							  <div class="form-group"> 
								<label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
							  </div> <!-- form-group form-check .// -->
							  <div class="form-group">
								  <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block"> Login  </button>
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