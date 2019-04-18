<?php
    session_start();
 include "include/config.php"; ?>
<?php include 'header.php';?>




<!-- banner -->
<div class="banner">    	   
    <img src="images/64.jpg"  class="img-responsive" alt="slide" style="height: 600px;">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown" style="color: #fff; font-weight: bolder;">Home Away from Home</h1>
                <p class="animated fadeInUp" style="color: #fff; font-size: 30px;">Most luxurious hotel in Ibadan with the royal treatments and excellent customer service.</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
        <!-- <img src="images/photos/9.jpg"> -->
         <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/01.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/02.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/03.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/12.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                <br>
            </div>
            <form method="post" enctype="multipart/form-data">
                    <input type="text" name="reserve_status" class="form-control" placeholder="Enter Receipt Number to check for your reservation status" style="margin-bottom: 10px;" required="">
                    <button type="submit" id="" class="btn btn-success" name="status">CONFIRM</button>
                </form>
    </div>
</div>
<div class="col-sm-5 col-md-4">
<h3>At Jay Jay Hotel, We offer Services Like</h3>
   <ul class="list">
       <li class="alert alert-success"><p>Check In and Check Out</p></li>
       <li class="alert alert-success"><p>Rooms Facilities</p></li>
       <li class="alert alert-success"><p>Parking</p></li>
       <li class="alert alert-success"><p>Food and Beverages</p></li>
       <li class="alert alert-success"><p>Gym and relaxation center</p></li>
       <!-- <li class="alert alert-success"><p>Fitness</p></li>
       <li class="alert alert-success"><p>Swimming Pool</p></li>
       <li class="alert alert-success"><p>Gym and relaxation center</p></li> -->
   </ul>
</div>
</div>  
</div>
</div>
<!-- reservation-information -->



<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <?php 
        //     $selectquery = mysqli_query($con,"SELECT * FROM complete_reserve");
        // $countquery = mysqli_num_rows($selectquery);
        // while($fetchquery = mysqli_fetch_array($selectquery)){
        // echo $fetchquery['complete_reserve_id'];

        // }
             ?>
            <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->

<!-- Checking the reservation status below -->
<?php 
    // if (isset($_POST['reserve_status'])) {
    //     echo "<script> alert('Checking the reservation status'); </script>";
    // }
 ?>


<?php include 'footer.php';?>
 <script type="text/javascript">
     $("#reserve_status").click(function(){
        $(this).html("CONFIRMING RECEIPT  <img src='images/ajax-loader (1).gif'>");
     });
 </script>

<!-- The button that will trigger the resservation button is included in btn_reserve.php below-->
<?php 
    include 'include/btn_reserve.php';
 ?>
 <?php 
    if (isset($_POST['status'])) {

        $reserve_status = $_POST['reserve_status'];

        $selectquery = mysqli_query($con,"SELECT * FROM complete_reserve WHERE receipt='$reserve_status' ");
        $countquery = mysqli_num_rows($selectquery);
        $fetchquery = mysqli_fetch_array($selectquery);

        if ($countquery == 1) {
            $_SESSION['id'] = $fetchquery['complete_reserve_id'];
            echo "<script> alert('Success');
            window.location='receiptcheck.php';
             </script>";
        }
        else{
            echo "<script> alert('Please check your receipt details'); </script>";
        }
    }
  ?>
