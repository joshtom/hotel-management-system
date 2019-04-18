<?php 
	session_start();
	// $_SESSION['id'] = array();
	unset($_SESSION['id']);
	// session_destroy($_SESSION['id']);
	// session_decode($_SESSION['id']);
	header("Location: login.php");
 ?>
