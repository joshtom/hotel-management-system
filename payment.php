
<?php 
  include "include/config.php";
 ?>

 <?php 
  if (isset($_POST['paybtn'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $no_adult=$_POST['no_adult'];
    $no_room=$_POST['no_room'];
    $countries=$_POST['countries'];
    $strt_date=$_POST['strt_date'];
    $end_date=$_POST['end_date'];
    //Getting the number of days between the interval in the timestamp date
    $strt = strtotime($strt_date) - time();
    $end = strtotime($end_date) - time();
    $total = ($end - $strt)/86400;
    //End of getting the days
    $roomID = $_POST['roomID'];
    $no_night = $_POST['no_days'];
    $message = $_POST['message'];
    $amt_payable = $_POST['amt_payable'];
    $rm_price = $_POST['rm_price'];

    // echo 'Name '.$name;
    // echo 'Email '.$email;
    // echo 'Address '.$add;
    // echo 'Phone No '.$phone;
    // echo 'No of rooms'.$no_room;
    // echo 'countries'.$countries;
    // echo 'Arrival'.$strt_date;
    // echo 'Deparature'.$end_date.'<br/>';
    // echo 'No of nights to use'.$total.'<br/>';
    // echo 'Romm identity'.$roomID;
    // echo "Arrival begins on".$strt.'<br/>';
    // echo "Departure begins on".$end.'<br/>';
    // echo "This is the present time".time();
    // echo "Message = ".$message;

     // selecting from the pin/receipt status
    $getClient = mysqli_query($con,"SELECT * from receipt where status='unused' order by receipt_id ASC LIMIT 1");
	$getCLient_Info = mysqli_fetch_assoc($getClient);
	$receiptid = $getCLient_Info["receipt_id"];
	$pinno = $getCLient_Info["pin"];
	$serial_no = $getCLient_Info["serial_no"];
	$pinstatus = $getCLient_Info["status"];
	// End of selecting from the status

	$query = mysqli_query($con, "INSERT INTO complete_reserve (rooms_id,receipt,name,email,address,phone,no_room,no_adult,country,strt_date,end_date,days,price,paid,msg,status,date) VALUES('$roomID','$pinno','$name','$email','$add','$phone','$no_room','$no_adult','$countries','$strt_date','$end_date','$no_night','$rm_price','$amt_payable','$message','PAID',CURRENT_TIMESTAMP)");
	if ($query) {
		 $getClient = mysqli_query($con,"SELECT * from receipt where status='unused' order by receipt_id ASC LIMIT 1");
	$getCLient_Info = mysqli_fetch_assoc($getClient);
	$receiptid = $getCLient_Info["receipt_id"];
	$pinno = $getCLient_Info["pin"];
	$serial_no = $getCLient_Info["serial_no"];
	$pinstatus = $getCLient_Info["status"];

		$insert = mysqli_query($con,"UPDATE receipt SET status='used' WHERE receipt_id = '$receiptid'");	
		// echo "<script> 
		// alert('Payment is successful');
		//  </script>";
	}
	else{
		// echo "<script> 
		// alert('Payment is not successful');
		//  </script>";
	}
    
}
?>
<?php 
  
  $query = mysqli_query($con, "SELECT * FROM rooms WHERE rooms_id = '$roomID'");
  $count = mysqli_num_rows($query);
  $fetch = mysqli_fetch_array($query);
  // echo $fetch['room_name'];
  // echo $pinno;
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Pay Room Bill| JAY JAY HOTEL </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<a href=""><div class="main">
		
		<div class="content"></a>
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form method="post" enctype="multipart/form-data">


                  					<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" value="">
													<h5>FIRST NAME</h5>													
														<input type="text" value="">
												</div>			
											</form>
											<h3 class="pay-title">Credit Card Info</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Allahabad Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IDBI Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Icici Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Punjab National Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>South Indian Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>City Union Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>HDFC Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>IndusInd Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Syndicate Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Deutsche Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Corporation Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>UCO Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Indian Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Federal Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>ING Vysya Bank</label> </div></div>	
												</div>
												<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form>
														<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
														<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form method="post">  <!-- Beginning of debit card info -->
												<!-- hide files below -->
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="<?php echo $name; ?>">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT" name="submit">
											</form> <!-- End of debit card info -->
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<p class="footer">Copyright © <?php echo date("Y"); ?>  All Rights Reserved |</p>
	</div>
</body>
</html>

<?php  
if (isset($_POST['submit'])) {
	// $name=$_POST['name'];
 //    $email=$_POST['email'];
 //    $add=$_POST['add'];
 //    $phone=$_POST['phone'];
 //    $no_adult=$_POST['no_adult'];
 //    $no_room=$_POST['no_room'];
 //    $countries=$_POST['countries'];
 //    $strt_date=$_POST['strt_date'];
 //    $end_date=$_POST['end_date'];
 //    //Getting the number of days between the interval in the timestamp date
 //    $strt = strtotime($strt_date) - time();
 //    $end = strtotime($end_date) - time();
 //    $total = ($end - $strt)/86400;
 //    //End of getting the days
 //    $roomID = $_POST['roomID'];
 //    $no_night = $_POST['no_days'];
 //    $rm_price = $_POST['rm_price'];
 //    $amt_payable = $_POST['amt_payable'];


   

	echo "<script> alert('Payment is successful');
	window.location='receipt.php';
	 </script>";


	
}

?>