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
							<h4 class="card-title mb-4"><?php echo $name; ?>'s Profile</h4>
							<a class="float-right" href="myreviews.php">My Reviews</a><br/>
							<a class="float-right" href="changepassword.php">Change Password</a><br/>
							<a class="float-right" href="logout.php">Logout</a>
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
