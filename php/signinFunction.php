<?php
require 'phpFunctions.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = getConnection();


$sql = "INSERT INTO user (first_name,email,password)
 VALUES (\"$username\",\"$email\",\"$password\")";
 $conn = getConnection();
 
 if ($conn->query($sql) === TRUE) {
 	startSession($email);
 	echo "User was created!";
   return true;
 } else {
 	echo "Something went wrong!";
   return false;
 }

?>