<?php
	session_start();
	session_unset($_SESSION['loggedin'] = false);
	header("Location: index.php");
?>