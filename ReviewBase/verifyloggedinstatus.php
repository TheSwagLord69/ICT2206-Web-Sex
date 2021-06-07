<?php
session_start();
if (isset($_SESSION['user_id']) && $_SESSION['isloggedin'] == true) {
    // echo $_SESSION['user_id'];
	// echo $_SESSION['isloggedin'];
	$user_id = $_SESSION['user_id'];
    $sql = " SELECT username FROM user_accounts WHERE user_id= '$user_id' ";
    $result_name = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result_name);
    $name = $row["username"];
    
}
else{
    header('location: login2.php');
}
?>
