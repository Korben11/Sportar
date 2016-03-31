<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
if(session_status() == PHP_SESSION_ACTIVE){
	if($_SESSION['loggedin'] == true){
		//echo "User " .$_SESSION['email'] ." is loggedin";
	}
}
?>