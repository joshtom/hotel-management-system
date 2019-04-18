<?php include "include/config.php"; ?>
<?php include 'header.php';?>

<?php 
  $id = $_GET['id'];
  $query = mysqli_query($con, "SELECT * FROM rooms WHERE rooms_id = '$id'");
  $count = mysqli_num_rows($query);
  $fetch = mysqli_fetch_array($query)
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
      <div class="size-price">Price <span> &#8358;<?php echo $fetch['room_price']; ?></span></div>
    </div>
  </div> 
</div>
<div class="row">
  <div class="col-sm-6 col-md-6">
<h3>Do you like the room above? Reserve Below</h3>
   <form method="post" enctype="multipart/form-data" action="checkout.php" style="margin-bottom: 20px;">
        <div class="form-group">
            <input type="text" class="form-control" id="name"  placeholder="Name" name="name" required="">
            <p id="help-name">Please enter a valid name above</p>
        </div>
        <div class="form-group">
            <input type="email" id="email" class="form-control email"  placeholder="Email" name="email" required="">
            <p id="help-email">Please enter a valid email above</p>
        </div>
        <div class="form-group">
            <input type="number" id="phone" class="form-control phone"  placeholder="Phone" name="phone" required="">
            <p id="help-phone">Please enter a valid phone number above</p>
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">

            <select class="form-control" name="room" id="no_room" required=""> 
              <option value="0">No. of Rooms</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="no_adult" id="adult" required="">
              <option value="0">No. of Adult</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div></div>
        </div>
        <div class="form-group ">
          <div class="row">
                     <div class="col-xs-6">
                   <input type="text" name="add" placeholder="Enter address" class="form-control">
                  </div>
                    <div class="col-xs-6">
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
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" readonly="" name="roomID" class="form-control" value="<?php echo $id;  ?>">
                  <input type="hidden" name="no_night" id="no_night" value="">
                </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
              <input type="text" name="strt_date" id="strt_date" class="form-control" placeholder="Arrival date" required="">
            </div>
            <div class="col-xs-6">
              <input type="text" name="end_date" id="end_date" class="form-control" placeholder="Departure Date" required="">
            </div>
            
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  name="message" placeholder="Purpose of this reservation" rows="4" id="message" required=""></textarea>
        <span id="error-message"></span>

        </div>
       
        <button type="submit" name="submit" id="submit" class="btn btn-default form-control">
            Proceed 
        </button>
        <!-- <button class="btn btn-default"  name="submit" id="submit">Submit</button> -->
        </form>
</div>
</div>

</div>
<?php include 'footer.php';?>
<script type="text/javascript">
  var start = new Date( $('#strt_date').val() ).getTime(),
        end = new Date( $('#end_date').val() ).getTime();
       var result = ((end - start) / 86400000); 
    //1000 * 60 * 60 * 24 = 1 day = 86400000
    // alert(result);
    $("#no_night").val(result);
</script>