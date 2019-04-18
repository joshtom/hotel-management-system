<?php include "include/session.php"; ?>
<?php include "include/config.php"; ?>
<?php include "header.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<?php 
	$session_id = $_SESSION['id'];
	$query = mysqli_query($con, "SELECT * FROM complete_reserve WHERE complete_reserve_id = '$session_id'");
	$num = mysqli_num_rows($query);
	$row = mysqli_fetch_array($query);
	 ?>

	 <!-- css code to remove the input type border -->
	 <style type="text/css">
	 	input{
	 		border: none;
	 	}
	 </style>
</head>
<body>
	<center>
		
	<img src="images/checkmarksuccess.gif" width="50">
<h3  class="alert alert-info">CHECK YOUR RESERVATION DETAILS BELOW</h3>

</center>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-7">
	 			
	 			<section>
	 			<header><center><h3>CUSTOMER RESERVATION DETAILS </h3> </center></header>
	 			<form method="post" enctype="multipart/form-data" >
	 				<!-- We need to create a hidden field in order to access the id -->
	 				<input style="border: none;" type="hidden" name="id" value="<?php echo $session_id; ?>">
	 				
 					<table class="table">
 						<tr>
 							<td><h5>NAME</h5></td>
 							<td><input style="border: none;" type="text" name="udept" class="form-control" style="border: none;" value="<?php echo $row['name']; ?>" ></td>
 						</tr>
 						<tr>
 							<td><h5>EMAIL</h5></td>
 							<td><input style="border: none;" type="text" name="ufirst" class="form-control" value="<?php echo $row['email']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>RECEIPT NO </h5></td>
 							<td><input style="border: none;" type="text" name="umiddle" class="form-control" value="<?php echo $row['receipt']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>ADDRESS</h5></td>
 							<td><input style="border: none;" type="text" name="ulast" class="form-control" value="<?php echo $row['address']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>PHONE NO</h5></td>
 							<td><input style="border: none;" type="text" name="umatric" class="form-control" value="<?php echo $row['phone']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5> COUNTRY </h5></td>
 							<td>
 								<input style="border: none;" type="text" name="" class="form-control" value="<?php echo $row['country'] ?>">
 							</td>
 						</tr>
 						<tr>
 							<td><h5> ARRIVAL DAY</h5></td>
 							<td><input style="border: none;" type="text" name="udob" class="form-control" value="<?php echo $row['strt_date']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>DEPARTURE DAY</h5></td>
 							<td><input style="border: none;" type="text" name="uphone" class="form-control" value="<?php echo $row['end_date'];  ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>DAYS TO USE</h5></td>
 							<td><input style="border: none;" type="text" name="ubname" class="form-control" value="<?php echo $row['days']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>PRICE</h5></td>
 							<td><input style="border: none;" type="text" name="uest" class="form-control" value="&#8358;<?php echo $row['price']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>AMOUNT PAID</h5></td>
 							<td><input style="border: none;" type="text" name="uoff" class="form-control" value="&#8358;<?php echo $row['paid']; ?>"></td>
 						</tr>
 						<tr>
 							<td><h5>PURPOSE OF RESERVATION</h5></td>
 							<td><input style="border: none;" type="text" name="uemail" class="form-control" value="<?php echo $row['msg']; ?>"></td>
 						</tr>
 						
 						<tr>
 							<td></td>
 							<td>
 								<input style="border: none;" type="hidden" name="roomID" class="form-control" value="<?php echo $row['rooms_id'] ?>">
 							<br> <br>

 								</td>
 								
 						</tr>
 					</table>
 						<!-- <a href="itletter.php?id=<?php  $session_id; ?>"><h4>Print your siwes letter here</h4></a> -->
				
	 			</section>

	 			
	 		</div>
	 	</form>
	 	<div class="col-lg-5">
	 		<center><h3>ROOM INFORMATION</h3></center>
	 		<?php  $id = $row['rooms_id'];
	 		$selectquery = mysqli_query($con, "SELECT * FROM rooms where rooms_id= '$id' ");
	 		$countquery = mysqli_num_rows($selectquery);
	 		$fetchquery = mysqli_fetch_array($selectquery);
	 		 ?>
	 		<table class="table">
 						<tr>
 							<td><h5>ROOM TYPE</h5></td>
 							<td><input style="border: none;" type="text" name="udept" class="form-control" value="<?php echo $fetchquery['room_name']; ?>" ></td>

 						</tr>
 						<tr>
 							<td><h5>ROOM PRICE</h5></td>
 							<td><input style="border: none;" type="text" name="udept" class="form-control" value="&#8358;<?php echo $fetchquery['room_price']; ?>" ></td>

 						</tr>
 						<tr>
 							<td><h5>ROOM SIZE</h5></td>
 							<td><input style="border: none;" type="text" name="udept" class="form-control" value="<?php echo $fetchquery['room_size']; ?>" ></td>

 						</tr>
 						<tr>
 							<td><h5>ROOM IMAGE</h5></td>
 							<td><img src="<?php echo str_replace("../", " ", $fetchquery['room_image']); ?>" style="border-radius:10px;" width="200"></td>

 						</tr>

 						<tr>
 							<td><h5>ROOM DESCRIPTION</h5></td>
 							<td><?php echo $fetchquery['room_description']; ?></td>

 						</tr>
 						
 						
 					</table>
 					
	 	</div>
	</div>
</div>
</body>
</html>