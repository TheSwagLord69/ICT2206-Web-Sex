<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="index.html">ICT2206 ReviewBase</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">
		<li><a href="category.php">Category of products</a></li>
		<li><a href="aboutus.php">About us</a></li>
		<li><a href="usersearch.php">User search</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<?php
		include('conn.php');
		if (session_status() === PHP_SESSION_NONE) { //check if php session has not yet started
			session_start();
		}
		if (isset($_SESSION['user_id']) && $_SESSION['isloggedin'] == true) {
			
			$user_id = $_SESSION['user_id'];
			$sql = " SELECT username FROM user_accounts WHERE user_id= '$user_id' ";
			$result_name = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result_name);
			$name = $row["username"];
			
			echo '<li><p class="navbar-text">Hello, ' . $name . '</p></li>';
			echo '
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="myprofile.php">My Profile</a></li>
					<li><a href="myreviews.php">My Reviews</a></li>
					<li class="divider"></li>
					<li><a href="changepassword.php">Change Password</a></li>
					<li><a href="logout.php">Log out</a></li>
				  </ul>
				</li>
			';
		} else {
			echo '
				<li>
					<p class="navbar-text">Already have an account?</p>
				</li>
				<li class="dropdown">
					<a href="login.php"><b>Login</b></a>
				</li>
			';
		}
		?>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
