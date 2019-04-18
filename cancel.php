<?php 
	include "include/config.php";
	include "include/session.php";
	if (isset($_POST['cancel_reserve'])) {
		session_destroy($_SESSION['id']);
		$_SESSION['id'] = array();
		echo "cancel";
	}
	
 ?>