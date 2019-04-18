<?php 
    include "include/session.php";
    include "include/config.php";
     ?>

     <?php 
     $session_id = $_SESSION['id'];
     $query = mysqli_query($con, "SELECT * FROM admin WHERE id = '$session_id' ");
     $count = mysqli_num_rows($query);
     $fetch = mysqli_fetch_array($query);
         ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>JayJay - Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.png">

        
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <!-- jquery datatables link below -->
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo">Admiry</a>-->
                        <a href="index-2.html" class="logo"><img src="image/jayj.png" height="24" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="<?php echo $fetch['image']; ?>" alt="" class="rounded-circle">
                        </div>
                        <div class="user-info">
                            <h4 class="font-16"><?php echo $fetch['name']; ?></h4>
                            <span class="text-muted user-status"><i class="fa fa-dot-circle-o text-success"></i> Online</span>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="ti-home"></i>
                                    <span> Dashboard <span class="badge badge-primary pull-right"></span></span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user"></i> <span>ADMIN</span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void()" id="adadmin">View all Admin</a></li>
                                    <li><a href="javascript:void()" id="receipt_gen">View all Generated Receipts</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#addadmin">Add Admin</a></li>
                                    <li><a href="" data-toggle="modal" data-target="#pin">Generate Pin & Serial</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-crown"></i> <span> Customers </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void()" id="view_customers">View all customers</a></li>
                                    <li><a href="">Check Reservation status</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-layout"></i> <span> More </span> <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-home"></i>Add Rooms </a></li>
                                    <li><a href="logout.php"> <i class="fa fa-sign-out"></i> Log out </a></li>
                                   
                                </ul>
                            </li>

                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                               
                               

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="<?php echo $fetch['image']; ?>" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="addadmin.php"><i class="fa fa-user-plus text-muted"></i> Add Admin</a>
                                        <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Dashboard</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-light">
                                            <i class="mdi mdi-cart-outline text-danger"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter text-danger">15852</span>
                                            Total Reservations
                                        </div>
                                        <p class="mb-0 m-t-20 text-muted">Total Reservations<span class="pull-right"></span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <a href="addrooms.php" data-toggle="modal" data-target="#exampleModal">
                                    <div class="mini-stat clearfix bg-success">
                                        <span class="mini-stat-icon bg-light"><i class="fa fa-home text-success"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                             <?php 
                                        $query = mysqli_query($con, "SELECT * FROM rooms");
                                        $count = mysqli_num_rows($query);
                                         ?>
                                            <span class="counter text-white"><?php echo $count; ?> </span>
                                            Add Rooms for user
                                        </div>
                                        
                                        <p class="mb-0 m-t-20 text-light">Rooms: <?php echo $count; ?> <span class="pull-right"></p>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-light"><i class="fa fa-home text-warning"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter text-warning">5210</span>
                                            Available rooms
                                        </div>
                                        <?php 
                                        // $roomquery = mysqli_query($con, "SELECT room_price FROM rooms");
                                        // $countquery = mysqli_num_rows($roomquery);
                                        // $fetchquery = mysqli_fetch_array($roomquery);
                                        // foreach ($fetchquery as $roomquery) {
                                        //   echo$fetchquery;
                                            ?>
                                              <p class="mb-0 m-t-20 text-muted">Available Rooms: &#8358; 20,500 <span class="pull-right"></p>
                                        
                                              

                                           
                                       
                                        
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-info">
                                        <span class="mini-stat-icon bg-light"><i class="fa fa-user text-info"></i></span>
                                        <div class="mini-stat-info text-right text-light">
                                            <?php 
                                        $customerquery = mysqli_query($con, "SELECT * FROM complete_reserve");
                                        $cquery = mysqli_num_rows($customerquery);
                                        $fquery = mysqli_fetch_array($customerquery);
                                        
                                            ?>
                                            <span class="counter text-white"><?php echo $cquery; ?></span>
                                            Active customers
                                        </div>
                                        <p class="mb-0 m-t-20 text-light">Active customers: <?php echo $cquery; ?> <span class="pull-right"></p>
                                    </div>
                                </div>
                            </div>


                            <div class="row" id="recent-customer">

                                <div class="col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body" id="card-body">
                                            <h4 class="mt-0 m-b-15 header-title">Recent Customers</h4>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0" id="recent">
                                                    <thead>
                                                    <tr>
                                                        <th>ACTIONS</th>
                                                        <th>SERIAL NO</th>
                                                        <th>RECEIPT NO</th>
                                                        <th>NAME</th>
                                                        <th>EMAIL</th>
                                                        <th>ADDRESS</th>
                                                        <th>PHONE</th>
                                                        <th>NO OF ROOM</th>
                                                        <th>NO OF ADULT</th>
                                                        <th>COUNTRY</th>
                                                        <th>START DATE</th>
                                                        <th>END DATE</th>
                                                        <th>DAYS TO USE</th>
                                                        <th>PRICE TAG</th>
                                                        <th>MESSAGE</th>
                                                        <th>STATUS</th>
                                                        <th>DATE</th>

                                                    </tr>
    
                                                    </thead>
                                                    <tbody>
                                                       <?php 
                                                       $query = mysqli_query($con, "SELECT * FROM complete_reserve ORDER BY complete_reserve_id ASC LIMIT 3");
                                                       $count = mysqli_num_rows($query);
                                                       while ($fetch = mysqli_fetch_array($query)) {
                                                           ?>
                                                           <tr>
                                                               <td style="display: inline-flex;"><a href="edit.php?id=<?php echo $fetch['complete_reserve_id'] ?>" class="btn btn-warning" style="margin-right: 5px;"><i class="fa fa-pencil"></i></a>
                                                                <a href="delete.php?id=<?php echo $fetch['complete_reserve_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                               </td>
                                                               <td><?php echo $fetch['complete_reserve_id']; ?></td>
                                                                <td><?php echo $fetch['receipt']; ?></td>
                                                              <td><?php echo $fetch['name']; ?></td>
                                                            <td><?php echo $fetch['email']; ?> </td>
                                                          <td><?php echo $fetch['address']; ?> </td>
                                                         <td><?php echo $fetch['phone']; ?> </td>
                                                           <td><?php echo $fetch['no_room']; ?> </td>
                                                             <td><?php echo $fetch['no_adult']; ?> </td>
                                                               <td><?php echo $fetch['country']; ?> </td>
                                                               <td><?php echo $fetch['strt_date']; ?> </td>
                                                                <td><?php echo $fetch['end_date']; ?> </td>
                                                                 <td><?php echo $fetch['days']; ?> </td>
                                                                  <td><?php echo $fetch['price']; ?> </td>
                                                                   <td><?php echo $fetch['msg']; ?> </td>
                                                                    <td><?php echo $fetch['status']; ?> </td>
                                                                     <td><?php echo $fetch['date']; ?> </td>>
                                                           </tr>

                                                           <?php
                                                       }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-xl-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                            <ul class="list-inline widget-chart m-t-20 text-center">
                                                <li>
                                                    <h4 class=""><b>3654</b></h4>
                                                    <p class="text-muted m-b-0">Marketplace</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>954</b></h4>
                                                    <p class="text-muted m-b-0">Last week</p>
                                                </li>
                                                <li>
                                                    <h4 class=""><b>8462</b></h4>
                                                    <p class="text-muted m-b-0">Last Month</p>
                                                </li>
                                            </ul>

                                            <div id="morris-donut-example" style="height: 265px"></div>
                                        </div>
                                    </div>
                                </div>
 -->
                            </div>
                            <!-- end row -->


                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">&copy; <?php $date =  date('Y'); echo $date; ?> JAY JAY HOTEL</footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
       <!-- <script src="assets/js/jquery.min1.js"></script> -->
       <script src="assets/js/jquery-3.2.1.min.js"></script>
        <!-- <script src="assets/js/popper.min.js"></script> -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- <script src="assets/js/modernizr.min.js"></script> -->
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <script src="assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script type="text/javascript" src="js/datatables.min.js"></script>
       


    </body>
</html>
<script type="text/javascript">
    $("#adadmin").click(function(){
        $("#card-body").fadeOut(2000);
        setTimeout(function(){
            $("#recent-customer").load("alladmin.php");
        }, 2000)
    });

    $("#receipt_gen").click(function(){
        $("#card-body").fadeOut(2000);
        setTimeout(function(){
            $("#recent-customer").load("receipt_gen.php");
        }, 2000);
        
    });
    $("#view_customers").click(function(){
        $("#card-body").fadeOut(2000);
        setTimeout(function(){
            $("#recent-customer").load("view_customers.php");
        }, 2000);
    });

</script>

<script type="text/javascript">
    
    // Working with the data table
    $("#recent").DataTable();

</script>







<!-- Modal for adding room information for the user-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Room Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Room Name</label>
            <input type="text" class="form-control" id="" name="room_name" placeholder="Example @ single, double, etc" required="">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Room Description</label>
            <textarea class="form-control" id="" name="room_desc" placeholder="Enter detailed description" required=""></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Price #</label>
            <input type="text" class="form-control" id="" name="price" placeholder="Enter the amount" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Size</label>
            <input type="text" class="form-control" id="" name="size" placeholder="Specify the size of the room" required="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Room Image</label>
            <input type="file" class="form-control" id="" name="file" placeholder="" required="">
          </div>
          <button type="submit" class="btn btn-primary" name="addroom">Add Room</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal for adding room information for the user-->
<?php 
    if (isset($_POST['addroom'])) {
        $room_name = $_POST['room_name'];
        $room_desc = addslashes($_POST['room_desc']);
        $price = $_POST['price'];
        $size = $_POST['size'];
        $filename = $_FILES['file']['tmp_name'];
        $file = $_FILES['file']['name'];
        $join = $filename.$file;
        $filedir = "../images/";
        $joinfile = $filedir.$file;
        $save = move_uploaded_file($filename, $joinfile);

        $query = mysqli_query($con, "INSERT INTO rooms (room_name,room_slug,room_price,room_size,room_image,room_description,room_date) VALUES('$room_name', '$room_name','$price', '$size', '$joinfile', '$room_desc', CURRENT_TIMESTAMP) ");

        if ($query) {
            echo "<script> alert('You have successfully added a new room to the database'); </script>";
          }
          else{
            echo "<script> alert('Unable to add a new room to the database'); </script>";
          }
        
    }
 ?>
<?php include "include/pingenerate.php" ?>
<?php include "addadmin.php" ?>
