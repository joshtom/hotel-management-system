<?php 
		include "config.php";
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['room']) && isset($_POST['adult']) && isset($_POST['message']) && isset($_POST['strt_date']) && isset($_POST['end_date']) ) {
    	
    	$name = $_POST['name'];
    	$email = $_POST['email'];
    	$phone = $_POST['phone'];
    	$room = $_POST['room'];
    	$adult = $_POST['adult'];
    	$message = $_POST['message'];
    	$strt_date = $_POST['strt_date'];
    	$end_date = $_POST['end_date'];

    	// selecting and checking if the email of a user already exist
    	$selectingquery = mysqli_query($con, "SELECT * FROM reserve WHERE email = '$email' ");
    	$countselect = mysqli_num_rows($selectingquery);
    	$fetch = mysqli_fetch_assoc($selectingquery);
    	if ($countselect > 0) {
    		echo "exist";
    	}
    	else{

    	// inserting data into the database
    	$query = mysqli_query($con, "INSERT INTO reserve (name,email,phone,no_room,no_adult,strt_date,end_date,msg,reserve_date) VALUES ('$name', '$email', '$phone', '$room', '$adult', '$strt_date', '$end_date', '$message', CURRENT_TIMESTAMP)");
    	if ($query) {
    		echo "success";
    	}
    	else{
    		echo "failed";
    	}
    	}
    }
    
    
 ?>
