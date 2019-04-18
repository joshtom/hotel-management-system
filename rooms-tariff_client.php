
<?php include "include/config.php"; ?>
<?php include 'header.php';?>

<div class="container">

<h2>Rooms & Tariff / Complete Your Reservation Below <button type="submit" class="btn btn-info" id="book" style="padding: 25px;">BOOK YOUR ROOM</button></h2>
<style type="text/css">
  #book:hover{
    transform: rotateX(30deg);
    transition: 300ms ease-in-out;
  }
</style>

<!-- form -->
  <?php 
  $query = mysqli_query($con, "SELECT * FROM rooms");
  $count = mysqli_num_rows($query);
  while ($fetch = mysqli_fetch_array($query)) {
    $_SESSION['id'] = $fetch['rooms_id'];
    $session_id = $_SESSION['id'];
    ?>
  <!-- <div class="row"> -->
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="<?php echo str_replace("../", "", $fetch['room_image']); ?>" class="img-responsive"><div class="info"><h3>Type : <?php echo $fetch['room_name']; ?></h3><h3>Description:</h3><p><?php echo $fetch['room_description']; ?></p>
    <p><h3>Price:</h3> <?php echo $fetch['room_price']; ?></p>
    
    <a href="room-details_client.php?id=<?php echo $fetch['rooms_id']; ?>" name="check" class="btn btn-default">Check Details <?php echo $session_id; ?> </a><br>
    <form method="post" action="checkout.php" enctype="multipart/form-data" id="form_book">
                <center><h3>Personal details / CONFIRM YOUR RESERVATION DETAILS BELOW</h3></center>
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
                    <label for="exampleInputPassword1">ROOM ID</label>
                    <input type="text" name="roomID" class="form-control" id="exampleInputPassword1" value="<?php echo $fetch['rooms_id']; ?>" >
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
  </div></div></div>
  <!-- </div> -->

    <?php
  }
   ?>
</div>  
</div>

                     <div class="text-center">
                     <ul class="pagination">
                     <li class="disabled"><a href="#">«</a></li>
                     <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                     </ul>
                     </div>


</div>
<?php include 'footer.php';?>
<script type="text/javascript">
  $("#book").click(function(){
    $("#form_book").fadeOut(2000);
  });
</script>
<?php 
   if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $no_room = $_POST['room'];
                $no_adult = $_POST['adult'];
                $strt_date = $_POST['strt_date'];
                $end_date = $_POST['end_date'];
                $msg = $_POST['message'];
                  
                  echo $name;
                  echo $email;
                  echo $phone;
                }
 ?>


