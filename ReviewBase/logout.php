<?php 
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
?>
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
						<!-- ============================ COMPONENT LOGGED OUT  ================================= -->
						<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
						  <div class="col-md-5 p-lg-5 mx-auto my-5">
							<h1 class="display-4 font-weight-normal">You have logged out</h1>
						  </div>
						  <div class="product-device box-shadow d-none d-md-block"></div>
						  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
						</div>
						<!-- ============================ COMPONENT LOGGED OUT END.// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
