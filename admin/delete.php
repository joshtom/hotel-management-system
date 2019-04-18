<?php 
	include ('include/config.php');

	// getting the receipt id below
	$did = $_GET['id'];
	$deletequery = mysqli_query($con, "DELETE FROM receipt WHERE receipt_id = '$did' ");
	header("location: index.php");
 ?>	