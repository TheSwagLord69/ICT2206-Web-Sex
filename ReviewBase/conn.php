<?php

$server='localhost';
$user='ict2206-user';
$password='j7qO2VewltWwlEJj';
$database='ict2206-db';

$conn = mysqli_connect($server, $user, $password,$database);

// Check connection
if ($conn) {
    //echo 'Connected successfully';
}
else{
    die("Connection failed: " . mysqli_connect_error());
}
    
?>
