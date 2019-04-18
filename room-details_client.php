<?php error_reporting(); ?>
<?php include "include/config.php"; ?>
<?php include 'header.php';?>

<?php 
  $id = $_GET['id'];
  $query = mysqli_query($con, "SELECT * FROM rooms WHERE rooms_id = '$id'");
  $count = mysqli_num_rows($query);
  $fetch = mysqli_fetch_array($query);
 ?>

<div class="container">

<h1 class="title">JAY JAY / <?php echo $fetch['room_name']; ?> </h1>



 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="<?php echo str_replace("../", "", $fetch['room_image']); ?>" class="img-responsive" alt="slide"></div>
                <!-- <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div> -->
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p> <?php echo $fetch['room_description']; ?> </p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Amenitites</h3>    
    <ul>
      <li>One of the greatest barriers to making the sale is your prospect.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Unlucky people. Don't stubbornly.</li>
      <li>Principle to work to make more money while having more fun.</li>
      <li>Space in your house How to sell faster than your neighbors</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size<span><?php echo $fetch['room_size']; ?></span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span><?php echo '#'.$fetch['room_price']; ?></span></div>
    </div>
  </div> <br>
  <div class="row" style="display: none;">
    <div class="col-lg-6 col-md-6 col-sm-6">
       <div class="custom">
                <center><h3>Personal details / CONFIRM YOUR RESERVATION DETAILS BELOW</h3></center>
                <!-- php code to echo user reservation details -->
                <?php 
                // $query = mysqli_query($con, "SELECT * FROM reserve ORDER BY reserve_id DESC");
                // $count = mysqli_num_rows($query);
                // $fetch = mysqli_fetch_array($query);
                // $name = $fetch['name'];
                // $email = $fetch['email'];
                // $phone = $fetch['phone'];
                // $no_room = $fetch['no_room'];
                // $no_adult = $fetch['no_adult'];
                // $strt_date = $fetch['strt_date'];
                // $end_date = $fetch['end_date'];
                // $msg = $fetch['msg'];
                if (isset($_POST['check'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $no_room = $_POST['no_room'];
                $no_adult = $_POST['no_adult'];
                $strt_date = $_POST['strt_date'];
                $end_date = $_POST['end_date'];
                $msg = $_POST['msg'];
                  
                }
              
                 ?>
                <form method="post" enctype="multipart/form-data" action="checkout.php">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="name"   aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo $name; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="email"  placeholder="Email" value="<?php echo $email ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="add" class="form-control" id="exampleInputPassword1" placeholder="Address" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Contact No</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1"  placeholder="Contact No"  value="<?php echo $phone; ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Adult</label>
                    <input type="text" name="no_adult"  class="form-control" id="exampleInputPassword1"  placeholder="No of Adult" value="<?php echo $no_adult; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Rooms</label>
                    <input type="text" name="no_room" class="form-control" id="exampleInputPassword1"  placeholder="No of Rooms" value="<?php echo $no_room; ?>" >
                  </div>
                  
                  <div class="form-group">
                    <select class="form-control" name="countries">
                        <option>Select Country</option>
                        <?php 
                        // Fetching the from the database
                        $query = mysqli_query($con, "SELECT * FROM countries");
                        $count = mysqli_num_rows($query);
                        while ($fetch = mysqli_fetch_array($query)) {
                          ?>
                          <option value="<?php echo $fetch['name']; ?>"><?php echo $fetch['name']; ?></option>
                          <?php
                        }
                         ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Start Date</label>
                    <input type="text" name="strt_date" class="form-control" id="start"   placeholder="Start date" value="<?php echo $strt_date; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">End Date</label>
                    <input type="text" name="end_date" class="form-control" id="end"  placeholder="End date" value="<?php echo $end_date; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Number Of Nights to Use</label>
                    <input type="text" name="no_night"  class="form-control" id="no_night"  placeholder="number_night" value="" >
                  </div>
                  <button type="submit" class="btn btn-primary form-control" name="checkout">CHECKOUT</button>
                </form> 
            </div>
    </div>
  </div>
</div>

                     

</div>
<?php include 'footer.php';?>
<script type="text/javascript">
  var start = new Date( $('#start').val() ).getTime(),
        end = new Date( $('#end').val() ).getTime();
       var result = ((end - start) / 86400000); 
    //1000 * 60 * 60 * 24 = 1 day = 86400000
    // alert(result);
    $("#no_night").val(result);
    alert(result);
</script>

<!-- php code to insert into the complete reservation table after user clicks on the checkout -->
<?php 
  if (isset($_POST['checkout'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $no_adult=$_POST['no_adult'];
    $no_room=$_POST['no_room'];
    $countries=$_POST['countries'];
    $strt_date=$_POST['strt_date'];
    $end_date=$_POST['end_date'];
    $no_night=$_POST['no_night'];
    
    $insertquery = mysqli_query($con, "INSERT INTO complete_reserve (rooms_id,name,email,address,phone,no_room,no_adult,country,strt_date,end_date,days,date) VALUES ('$id','$name','$email','$add','$phone','$no_room','$no_adult','$countries','$strt_date','$end_date','$no_night',CURRENT_TIMESTAMP) ");
    if ($insertquery) {
      // echo "<script> alert('You have successfully added into complete reservation table'); </script>";
      // echo "You have successfully added into complete reservation table";
      // header("location:checkout.php");
      echo "<script> window.location='checkout.php';  </script>";

    }
    else{
      echo "Unable to add into a complete reservation table";
    }
  }
 ?>