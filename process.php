
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>JAY JAY HOTEL REGISTRATION PORTAL</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styler2.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
      <script language="javascript">
						function printDiv(divID) {
						//Get the HTML of div 
						var divElements = document.getElementById(divID).innerHTML; 
						//Get the HTML of whole page 
						var oldPage = document.body.innerHTML;
						//Reset the page's HTML with div's HTML only 
						document.body.innerHTML = "<html><head><link href='styler2.css' rel='stylesheet' type='text/css' media='print' /><title></title></head><body>" + divElements + "</body>"; 
						//Print Page 
						window.print(); 
						//Restore orignal HTML 
						document.body.innerHTML = oldPage; location.reload(); 
						}

						function back(){
										var retval =  confirm("Are you sure you want to go back");
										if(retval == true){
											window.location = "index.php";
											return true;
										}
										
						}

						
   
		</script>
		
    </head>
    
    <body>
	
<?php
include('includes/config.php');
if(isset($_POST['transaction_id']))
{
	
	// $_POST['transaction_id'] = '59dc2bba07e83';
	$json = file_get_contents('https://voguepay.com/?v_transaction_id='.$_POST['transaction_id'].'&type=json');
	// create new array to store our transaction detail
	$transaction = json_decode($json, true);
	$json_addslashes = addslashes($json);
	// print_r($transaction);
	$our_ownTransID = $transaction["merchant_ref"]; 
	$transaction_id = strtoupper($transaction["transaction_id"]);
	$trans_status = $transaction["status"];
	$transactiondate = $transaction["date"];
	
	
	$getClient = mysqli_query($con,"SELECT * from receipt where status='unused' order by receipt_id ASC LIMIT 1");
	$getCLient_Info = mysqli_fetch_assoc($getClient);
	$jambid = $getCLient_Info["receipt_id"];
	$pinno = $getCLient_Info["pin"];
	$serial_no = $getCLient_Info["serial_no"];
	$pinstatus = $getCLient_Info["status"];
	/*$seatnum = $getCLient_Info["seat"];
	$seat_reserve = $getCLient_Info["seat_reserve"];
	$movieid = $getCLient_Info["bus"]; //Movie ID
	$fullname = $fname . ' ' . $lname;*/
	// echo $movieid;

?>
    	<div id="wrap">
    	
			
				
			<div id="top_padding"></div>
			
				<div id="container">
					<div id="container_2" align="center">

						
		<?php
	if($trans_status != "Approved")
	{
			/*mysql_query("delete from reserve WHERE transactionnum = '$our_ownTransID' and status = 'Pending' ");
			mysql_query("delete from transaction WHERE tx_id = '$our_ownTransID' and status = 'Pending' ");
		*//*if(mysql_query("update reserve set status='Failed', seat_reserve='0' where transactionnum='$our_ownTransID' and status='Pending'"))
		{
			mysql_query("update transaction set status='Failed', gatewayresponse='$json_addslashes', realid='$transaction_id' where tx_id='$our_ownTransID' and status='Pending'");
		}*/
		echo "<script 'text/javascript'>

				alert('Your payment was not successful, please try again');

				window.location = 'index.php';
			  </script>";
	?>
		
		<div class="header">
			<h2>JAMB REGISTRATION DETAILS</h2>
		</div>
		<div style="border:1px solid;border-color: #ddd;height:520px; padding: 3px;">
		<table width="900px">
			<tr>
				<td><p align="left">TRANSACTION NO : <?php echo $transaction_id; ?></p></td>
				<td><p align="right">ISSUE DATE :  <?php echo $transactiondate; ?></p></td>
				<td><p align="right">JAMB PIN :  <?php echo $pinno; ?></p></td>
				<td><p align="right">JAMB SERIAL NO :  <?php echo $serial_no; ?></p></td>

			</tr>
		</table>
		
			<!--<div>
			<div class="left"><p style="margin-left: 150px;">Your payment was not successful, please try again</p></div>
				<a href='index.php'>RESERVE YOUR SEAT</a>
			</div>-->
		</div>
	<?php
	}
	else if($trans_status == "Approved")
	{
		/*if(mysql_query("update reserve set seat='$seatNumber', status='approved' where transactionnum='$our_ownTransID' and status='Pending'"))
		{
			mysql_query("update transaction set status='approved', gatewayresponse='$json_addslashes', realid='$transaction_id' where tx_id='$our_ownTransID' and status='Pending'");
		}

		$issuedate = date("Y-m-d");*/

		$select = mysqli_query($con,"SELECT * from receipt where status='unused' order by receipt_id ASC LIMIT 1");
							$count = mysqli_num_rows($select);
							$fetchpin = mysqli_fetch_array($select);
							$pinid = $fetchpin['receipt_id'];
							$ourpinno = $fetchpin['pin'];
							$ourserial_no = $fetchpin['serial_no'];
							$pinstatus = $fetchpin['status']; 
							if ($count>0) {
											$insert = mysqli_query($con,"UPDATE receipt SET status = 'used' WHERE receipt_id = '$pinid'");	
										  }
							else {
											$insert = mysqli_query($con,"UPDATE receipt SET status = 'used' WHERE receipt_id = '$pinid'");

								}

	?>
		
		<div class="header">
			<h2>JAY JAY PAYMENT DETAILS</h2>
		</div>
		<div style="border:1px solid;border-color: #ddd;height:600px; padding: 3px;">
		<table width="900px">
			<tr>
				<td><p align="left">TRANSACTION NO : <?php echo $transaction_id; ?></p></td>
				<td><p align="right">ISSUE DATE :  <?php echo $transactiondate; ?></p></td>

				<td><p align="right">JAY JAY PIN :  <?php echo $ourpinno; ?></p></td>
				<td><p align="right">JAY JAY SERIAL NO :  <?php echo $ourserial_no; ?></p></td>

			</tr>
		</table>
		<center><a href="javascript:void();" onclick="window.print();"><button>PRINT</button></a></center>
<?php 
?>
		
		
		<br>
	
		<!-- <div>
			<div class="left"><p>FULL NAME :</p></div>
			<div class="right"><p><?php /*echo*/ $fullname; ?></p></div>
		</div><br><br>
		<div>
			<div class="left"><p>ADDRESS :</p></div> 
			<div class="right"><p><?php /*echo*/ $address; ?></p></div>
		</div><br><br>
		<div>
			<div class="left"><p>CONTACT :</p></div> 
			<div class="right"><p><?php /*echo*/ $contact; ?></p></div>
		</div><br><br>
		<div>
			<div class="left"><p>MOVIE NAME :</p></div> 
			<div class="right"><p><?php /*echo*/ $movie_name; ?></p></div>
		</div><br><br>

		<div>
			<div class="left"><p>BOOKING INFO :</p></div> 
			<div class="right"><p><?php /*echo*/ $seat_reserve //.'seats at NGN' . number_format($price,2); ?> each</p></div>
		</div><br><br>
		
		<div>
			<div class="left"><p>SEAT NUMBER :</p></div> 
			<div class="right"><p><?php /*echo*/ $seatNumber;?></p></div>
		</div><br><br>
		<div>
			<div class="left"><p>SCHEDULED DATE & TIME  :</p></div> 
			<div class="right"><p><?php /*echo*/ $date; ?></p></div>
		</div><br><br>
		<div>
			<div class="left"><p>TOTAL AMOUNT :</p></div> 
			<div class="right"> <p>&#8358 <?php /*echo*/// number_format($amount,2);?></p></div>
		</div><br><br>
		<div>
			<div class="left"><p>TRANSACTION:</p></div> 
			<div class="right"> <p><?php //if($trans_status == 'Approved'){ /*echo*/ "<b>APPROVED</b>"; }?></p></div>
		</div><br><br>
		
		</div> --><br>
		 
		
	<?php
	}
	?>
					</div>
					<h2 style="float: left; width:150px; margin-left: 50px;"> <a href="javascript:void();" title="Click here to print" onclick="window.print();">Print</a></h2><br><br><br>
				<h2 style=" width:150px; margin-left: 50px;" > <a href="index.php" title="Click here to go back" >Home</a></h2> 
					<br><br>
				</div>
			</div>
		<?php
}
?>
		</body>