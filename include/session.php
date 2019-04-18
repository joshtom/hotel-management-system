<?php 
	session_start();
	if (!isset($_SESSION['id'])) {
		echo "<script> alert('You have to enter your reservation details first');
		window.location='./index.php';
		 </script>";
		 header("location:./index.php");
	}
 ?>