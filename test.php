<?php 
	include("include/config.php");

	if ($_POST['name']) {
		$name = $_POST['name'];
		$email = $_POST['email'];

		$query = mysqli_query($con, "INSERT INTO register VALUES('$name', '$email')");
		if ($query) {
			echo "Record inserted successfully'";
		}
		else {
			echo "Unable to insert Record successfully";

		}
	}
	 ?>