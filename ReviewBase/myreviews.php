<!DOCTYPE html>
<?php include('conn.php')?>
<?php include('verifyloggedinstatus.php')?>

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
						<!-- ============================ COMPONENT MY REVIEWS ================================= -->
						<div class="card">
						<article class="card-body">
						<header class="mb-4">
							<h4 class="card-title mb-4"><?php echo $name; ?>'s Reviews</h4>
							<a class="float-right" href="logout.php">Logout</a>
							<?php
							$user_id = $_SESSION['user_id'];
							$sql = " SELECT * FROM review_data WHERE r_user_id= '$user_id' ";
							if ($result = $conn->query($sql)) {
								while ($row = $result->fetch_assoc()) {
									$reviewid = $row["review_id"];
									$userid = $row["r_user_id"];
									$productid = $row["r_product_id"];
									$userreview = $row["user_review"];
									echo 
										'<br/><tr>
											<td>reviewid: '.$reviewid.'</td>
											<td>userid: '.$userid.'</td>
											<td>productid: '.$productid.'</td>
											<td>userreview: '.$userreview.'</td>
										</tr><br/>';
								}
							}
							?>
						</header>
						<hr>
						</article> <!-- card-body end .// -->
						</div> <!-- card.// -->
						<!-- ============================ COMPONENT MY REVIEWS  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>