<?php 
    include "include/config.php";
 ?>
 <?php 
    $query = mysqli_query($con, "SELECT * FROM reserve ORDER BY reserve_id ASC");
    $count = mysqli_num_rows($query);
    $fetch = mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Complete your reservation here</title>
    <!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/complete.css">
<!-- <link rel="stylesheet" type="text/css" href="assets/style.css"> -->
<!-- linking with the jquery ui to be able to use the jquery special widjets -->
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.structure.css">
<link rel="stylesheet" type="text/css" href="jquery-ui-1.12.1/jquery-ui.theme.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
           <center> <h1>Complete your Reservation Below</h1></center>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-6">
            <div class="custom">

                <center><h1>Available Rooms</h1>
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div>
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div>  
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div>  
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div>  
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div>  
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div> 
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div> 
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div> 
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div> 
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div> 
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div> 
                <div class="draggable">
                <img src="images/photos/10.jpg" height="80">
                </div>   
                </center>             

                
                
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="custom2" id="droppable">
                <center><h4>Drop your selected room here</h4>
                <img src="images/Shoppingcart_128x128.png" alt="img-cart">
                </center>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="custom">
                <center><h3>Personal details</h3></center>
                <!-- <form> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" readonly   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo $fetch['name']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" value="<?php echo $fetch['email']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Adult</label>
                    <input type="text" readonly   class="form-control" id="exampleInputPassword1" placeholder="No of Adult" value="<?php echo$fetch['no_adult'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Rooms</label>
                    <input type="text" readonly   class="form-control" id="exampleInputPassword1" placeholder="No of Rooms" value="<?php echo$fetch['no_room'] ?>">
                  </div>
                  <div class="form-group">
                    <select class="form-control">
                        
                        <option>Select Country</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Start Date</label>
                    <input type="text" readonly   class="form-control" id="exampleInputPassword1" placeholder="Start date" value="<?php echo $fetch['strt_date'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">End Date</label>
                    <input type="text" readonly   class="form-control" id="exampleInputPassword1" placeholder="End date" value="<?php echo $fetch['end_date']; ?>">
                  </div>
                  <button type="submit" class="btn btn-primary form-control">CHECKOUT</button>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(".draggable").draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          // .addClass( "ui-state-highlight" )
          .find( "h4" )
             .html("Room selected has been dropped here");
            
      }
    });
</script>
</body>
</html>