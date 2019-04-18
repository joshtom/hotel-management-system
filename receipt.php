<?php include "include/config.php"; ?>
<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>

</head>
<body>
	<?php 
	$getClient = mysqli_query($con,"SELECT * from receipt where status='used' order by receipt_id DESC LIMIT 1");
	$getCLient_Info = mysqli_fetch_assoc($getClient);
	$receiptid = $getCLient_Info["receipt_id"];
	$pinno = $getCLient_Info["pin"];
	$serial_no = $getCLient_Info["serial_no"];
	$pinstatus = $getCLient_Info["status"];
	 ?>
<br><br>	
<img src="images/0de41a3c5953fba1755ebd416ec109dd.gif" width="50">
<h3  style="margin-left: 20px;">Your Generated Receipt is: <span class="alert alert-success"><?php echo $pinno; ?></span></h3>
<p  style="margin-left: 20px;">Please keep the receipt diligently, because it is what will be used as your recognition when you come for the reserved room</p>
<a  style="margin-left: 20px;" href="index.php">Go to Home</a>
</body>
</html>