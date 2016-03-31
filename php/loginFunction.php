
<?php
require 'phpFunctions.php';
$email = $_POST['email'];
$password = $_POST['password'];

$conn = getConnection();

$querry = "select 'x'from user where email = \"".$email."\" and password = \"".$password."\"";
$result = $conn->query($querry);
  if ($result->num_rows > 0) {    
    while($row = $result->fetch_assoc()) {
    	startSession($email);
      echo "Successfully loged in !";
    	header("Location: ../index.php");
    }
  }else echo "No user Registerd !";
?>