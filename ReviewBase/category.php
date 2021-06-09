<!DOCTYPE html>
<html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>ICT2206 ReviewBase Category</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<!-- Custom styling -->
		<link href="assets/css/style.css?v=2.0" rel="stylesheet" />
		
		<style>
		.aside img {
			min-width:200px;
			max-width:201px;
			min-height:200px;
			max-height:201px;
			border-radius: 10%;
			padding-bottom:5px;
		}
		.info a {
			text-overflow:hidden;
		}
		</style>
		
	</head>
	<body>
	
		<?php
		include 'navbar.php';
		?>
		
		<section class="section-content padding-y bg">
			<div class="container">
				<h1>Our products for review</h1>
				<br/>
				<div class="row">
					<aside class="col-md-12">
						<!-- ============================ COMPONENTS CATEGORY ITEMS  ================================= -->
						<?php
						include('conn.php');
						$sql = "SELECT * FROM product_data";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							$counter = 0;
							//var_dump($counter);
							while($row = $result->fetch_assoc()) {
								
								if ($counter < 3){
									if ($counter == 0){
										echo '<div class="card card-body">';
										echo '<div class="row">';
									}
									$counter++;
									echo '<div class="col-md-3">';
										echo '<figure class="itemside mb-4">';
											$image = $row["product_image"];
											echo '<div class="aside"><img src="data:image/png;base64,' . base64_encode($row['product_image']) . '" width = "50px" height = "50px" class="border img-sm"></div>';
												echo '<figcaption class="info align-self-center">';
													echo '<form action="viewing_review.php" method="post">';
														echo '<input type="hidden" name="item_name" value="' . $row["product_name"] . '" />';
														echo '<button name="review" value="review" type="submit" class="btn btn-link title">' . $row["product_name"] . '</button>';
													echo '</form>';
												echo '</figcaption>';
													echo '<form action="doing_review.php" method="post">';
														echo '<input type="hidden" name="item_name" value="' . $row["product_name"] . '" />';
														echo '<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>';
													echo '</form>';
												echo '<figcaption class="info align-self-center">';
												echo '</figcaption>';
										echo '</figure>';
									echo '</div>';
								}
								else{
									$counter++;
									echo '<div class="col-md-3">';
										echo '<figure class="itemside mb-4">';
											$image = $row["product_image"];
											echo '<div class="aside"><img src="data:image/png;base64,' . base64_encode($row['product_image']) . '" width = "50px" height = "50px" class="border img-sm"></div>';
												echo '<figcaption class="info align-self-center">';
													echo '<form action="viewing_review.php" method="post">';
														echo '<input type="hidden" name="item_name" value="' . $row["product_name"] . '" />';
														echo '<button name="review" value="review" type="submit" class="btn btn-link title">' . $row["product_name"] . '</button>';
													echo '</form>';
												echo '</figcaption>';
													echo '<form action="doing_review.php" method="post">';
														echo '<input type="hidden" name="item_name" value="' . $row["product_name"] . '" />';
														echo '<button name="review" value="review" type="submit" class="btn btn-link text-primary btn-sm">Review</button>';
													echo '</form>';
												echo '<figcaption class="info align-self-center">';
												echo '</figcaption>';
										echo '</figure>';
									echo '</div>';
									$counter = 0;
									echo '</div> <!-- row.// -->';
									echo '</div> <!-- card // -->';
									echo '<br/>';
								}
							}
						}
						?>
						<!-- ============================ COMPONENTS CATEGORY ITEMS  END .// ================================= -->
					</aside>
				</div>
			</div>
		</section>
	</body>
</html>
