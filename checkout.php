<?php 
  include "include/config.php";
 ?>
 <?php 
  if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $no_adult=$_POST['no_adult'];
    $no_room=$_POST['room'];
    $countries=$_POST['countries'];
    $strt_date=$_POST['strt_date'];
    $end_date=$_POST['end_date'];
    //Getting the number of days between the interval in the timestamp date
    $strt = strtotime($strt_date) - time();
    $end = strtotime($end_date) - time();
    $total = ($end - $strt)/86400;
    //End of getting the days
    $roomID = $_POST['roomID'];
    $no_night = $_POST['no_night'];
    $message = $_POST['message'];

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
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Jay Jay | Home away from home</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">



<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="assets/style.css">
<!-- linking with the jquery ui to be able to use the jquery special widjets -->
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.structure.css">
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.theme.css">

</head>

<body>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h2 style="font-weight: bolder;" class="alert alert-success">CHECKOUT</h2>
    </div>
    <div class="row">
        <div class="col-lg-6 alert alert-danger">
        <!-- Selecting the last customer from the complete_reserve table -->
        <?php 
        $selectquery = mysqli_query($con, "SELECT * FROM complete_reserve ORDER BY complete_reserve_id DESC LIMIT 1");
        $countselectquery = mysqli_num_rows($selectquery);
        $fetchselectquery = mysqli_fetch_array($selectquery);
        $userid = $fetchselectquery['complete_reserve_id'];
        // echo $userid;
        if ($countselectquery < 0) {
            echo "No customer reservation record found";
        }
        else{
            ?>
             <h3>PERSONAL DETAILS / RESERVATION DETAILS</h3>
            <form method="post" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text"    class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo $name; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $email; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address" ="" value="<?php echo $add; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Contact No</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Contact No" ="" value="<?php echo $phone; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Adult</label>
                    <input type="text"    class="form-control" id="exampleInputPassword1" placeholder="No of Adult" value="<?php echo$no_adult; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Rooms</label>
                    <input type="text"    class="form-control" id="exampleInputPassword1" placeholder="No of Rooms" value="<?php echo$no_room; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                   <input type="text" name="country" class="form-control" ="" value="<?php echo $countries; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Start Date</label>
                    <input type="text"    class="form-control" id="exampleInputPassword1" placeholder="Start date" value="<?php echo $strt_date; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">End Date</label>
                    <input type="text"    class="form-control" id="exampleInputPassword1" placeholder="End date" value="<?php echo $end_date; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of days to spend</label>
                    <input type="text"    class="form-control" id="no_days" placeholder="End date" value="<?php echo $total; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Room Price &#8358;</label>
                    <?php 
                    $roomquery = mysqli_query($con, "SELECT * FROM rooms WHERE rooms_id='$roomID' ");
                    $roomcount = mysqli_num_rows($roomquery);
                    $roomfetch = mysqli_fetch_array($roomquery);
                     ?>
                    <input type="text"    class="form-control" id="rm_price" placeholder="End date" value="<?php echo $roomfetch['room_price']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Amount Payable &#8358;</label>
                    <?php 
                    // SELECT * FROM complete_reserve,rooms ORDER BY complete_reserve.complete_reserve_id DESC
                    // SELECT complete_reserve.days,rooms.room_price FROM complete_reserve, rooms ORDER BY complete_reserve.complete_reserve_id ASC
                    // SELECT complete_reserve.days,rooms.room_price FROM complete_reserve, rooms WHERE complete_reserve.rooms_id = rooms.rooms_id ORDER BY complete_reserve.complete_reserve_
                    include_once "include/config.php";
                    $queryselect = mysqli_query($con, "SELECT room_price FROM rooms WHERE rooms_id='$roomID' ");
                    $querycount = mysqli_num_rows($queryselect);
                    $queryfetch = mysqli_fetch_array($queryselect);
                    // $days = $queryfetch['days'];
                    $price = $queryfetch['room_price'];
                    $amount = $total * $price;
                    // echo $days.'  ';
                    // echo $price;
                     ?>
                    <input type="text" class="form-control" id="amt_payable" placeholder="End date" value="<?php echo $amount; ?>">
                  </div>
                 </form> 
            <?php
        }
         ?>
           
        </div>
        <div class="col-lg-6 alert alert-success">
            <h3>CLICK THE BUTTON BELOW TO COMPLETE YOUR RESERVATION</h3>
            <strong>Before you proceed please read carefully the instructions below</strong>
            <p><ul>
                <li>Please check and re-check your reservation details to avoid any error</li>
                <li>Make sure you make any corrections before proceeding with the payment</li>
                <li>Note that money paid are not refundable</li>
                <li>You must not exceed the number of days you have promised in order to avoid embarrasment</li>
                <li>We believe you must have provided your original details for security reasons</li>
                <li>Do not use expired atm card for transaction in order to avoid being blocked</li>
            </ul></p>
            <p>Amount Payable: <strong id="payable">&#8358;<?php echo $amount; ?></strong></p>
            <a href=""></a>
            <?php 
            $payable = 5;
            $price = 5;
             ?>
             <form action="payment.php" method="post">
                        
                        <!-- User reservation / Personal details below -->
                        <div class="form-group">
                    
                    <input type="hidden" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo $name; ?>" >
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email; ?>" >
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden" name="add" class="form-control" id="exampleInputPassword1" placeholder="Address" ="" value="<?php echo $add; ?>">
                  </div>
                   <div class="form-group">
                    
                    <input type="hidden" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Contact No"  value="<?php echo $phone; ?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden"  name="no_adult"  class="form-control" id="exampleInputPassword1" placeholder="No of Adult" value="<?php echo$no_adult; ?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden"  name="no_room"  class="form-control" id="exampleInputPassword1" placeholder="No of Rooms" value="<?php echo$no_room; ?>">
                  </div>
                  
                  <div class="form-group">
                    
                   <input type="hidden" name="countries" class="form-control" ="" value="<?php echo $countries; ?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden"  name="strt_date"  class="form-control" id="exampleInputPassword1" placeholder="Start date" value="<?php echo $strt_date; ?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden"  name="end_date"  class="form-control" id="exampleInputPassword1" placeholder="End date" value="<?php echo $end_date; ?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden" name="no_days" class="form-control" id="no_days" placeholder="No of days" value="<?php echo $total; ?>">
                  </div>
                  <div class="form-group">
                    
                    <input type="hidden" name="message" class="form-control" id="message" placeholder="No of days" value="<?php echo $message; ?>">
                  </div>
                  <div class="form-group">
                    
                    <?php 
                    $roomquery = mysqli_query($con, "SELECT * FROM rooms WHERE rooms_id='$roomID' ");
                    $roomcount = mysqli_num_rows($roomquery);
                    $roomfetch = mysqli_fetch_array($roomquery);
                     ?>
                    <input type="hidden" name="rm_price" class="form-control" id="rm_price" placeholder="Price of room" value="<?php echo $roomfetch['room_price']; ?>">
                    <input type="hidden" name="roomID" class="form-control" id="roomID" placeholder="Room ID" value="<?php echo $roomID; ?>">
                  </div>
                  <div class="form-group">
                    
                    <?php 
                    // SELECT * FROM complete_reserve,rooms ORDER BY complete_reserve.complete_reserve_id DESC
                    // SELECT complete_reserve.days,rooms.room_price FROM complete_reserve, rooms ORDER BY complete_reserve.complete_reserve_id ASC
                    // SELECT complete_reserve.days,rooms.room_price FROM complete_reserve, rooms WHERE complete_reserve.rooms_id = rooms.rooms_id ORDER BY complete_reserve.complete_reserve_
                    include_once "include/config.php";
                    $queryselect = mysqli_query($con, "SELECT room_price FROM rooms WHERE rooms_id='$roomID' ");
                    $querycount = mysqli_num_rows($queryselect);
                    $queryfetch = mysqli_fetch_array($queryselect);
                    // $days = $queryfetch['days'];
                    $price = $queryfetch['room_price'];
                    $amount = $total * $price;
                    // echo $days.'  ';
                    // echo $price;
                     ?>
                    <input type="hidden"  name="amt_payable"  class="form-control" id="amt_payable" placeholder="End date" value="<?php echo $amount; ?>">
                  </div>
                        <!-- PAYMENT PROCESSOR-->

                            <input name="item_1" type="hidden" value="JAY JAY HOTEL PIN PAYMENT"/>
                            <input name="description_1" type="hidden" value="<?php echo'JAMB 2018/2019 UTME PIN Purchase';?>"/> 
                            <input name="price_1" type="hidden" value="JAMB UTME PIN @ # 5"/>
                            <input name="memo" type="hidden" value="JAY JAY ROOM PAYMENT"/>
                            <input name="merchant_ref" type="hidden" value="<?php echo 2;?>"/>
                            <input type='hidden' name='notify_url' value='http://localhost/HotelManagement/process.php' />
                            <input type='hidden' name='success_url' value='http://localhost/HotelManagement/process.php' />
                            <input type='hidden' name='fail_url' value='http://localhost/HotelManagement/process.php' />
                            <input type='hidden' name='total' value='5' />
                            <input type='hidden' name='v_merchant_id' value='13347-14907' />

                        <!-- PAYMENT PROCESSOR-->
                        <button type="submit" class="btn btn-success" name="paybtn" id="paybtn"><img src="images/paypal_button.png"></button>
                    </form>
            <br> <br>
            <hr>
            <strong>You can also cancel your reservation by clicking on the button below</strong> <br> <br>
            <!-- <form method="post"> -->
              <button type="submit" name="cancel_reserve" id="cancel_reserve" class="btn btn-danger form-control"> <i class="fa fa-sign-out" id="cancel_reserve"></i> CANCEL RESERVATION</button> 
            <!-- </form> -->
        </div>
    </div>
    </div>
</div>




<div class="text-center copyright"> &copy; copyright Jay jay Hotel <?php  $date = date("Y"); echo $date; ?><a href=""></a></div>










<script src="assets/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="script.js"></script>




<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $("#strt_date").datepicker();
    $("#end_date").datepicker();
</script>
<script type="text/javascript">
    // var no_days = $("#no_days").val();
    // var rm_price = $("#rm_price").val();
    // var result = (no_days * rm_price);
    // alert(result);
    $("#cancel_reserve").click(function(){
        $(this).html('CANCELLING RESERVATION <img src="images/load.gif">');
        var cancel_reserve = $("#cancel_reserve");
        var timeout = setTimeout(function() {
                        swal('Success','You have successfully cancel the reservation','success');
                        $("#name").val('');

                        window.location='index.php';
                   
    },2000);
    });
</script>


<!-- custom script -->
<script src="assets/script.js"></script>
<script type="text/javascript" src="assets/sweetalert2.all.min.js"></script>











</body>
</html>