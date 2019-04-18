<?php include "include/config.php" ?>
<?php include 'header.php';?>

<div class="container">

<h2>Rooms & Tariff / Complete Your Reservation Below</h2>


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
    <p><h3>Price:</h3> &#8358;<?php echo $fetch['room_price']; ?></p>
    <a href="room-details.php?id=<?php echo $fetch['rooms_id']; ?>" class="btn btn-default">Check Details <?php echo $session_id; ?> </a></div></div></div>
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