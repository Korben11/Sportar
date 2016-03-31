<?php
	require 'phpFunctions.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$conn = getConnection();

	$sql = "INSERT INTO contact (name, email, comment)
	VALUES (\"$name\", \"$email\", \"$comment\")";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}


?>