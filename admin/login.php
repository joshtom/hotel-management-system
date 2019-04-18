  <?php 
    session_start();
    include "include/config.php";
   
   ?>

   <?php 
   if (isset($_SESSION['msg'])) {
    ?>
      <div class="alert alert-<?php echo $_SESSION['msg_type']; ?>">
     
     <?php
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
   }
    ?>
    </div>
   

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Olajide tomiwa joshua">
	<link rel="stylesheet" href="assets/css/styl.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Roboto" rel="stylesheet">
    <!-- Favicon below -->
    <link rel="shortcut icon"  href="img/logo.png">
	<title>Login | Admin</title>
</head>
  
<body id="login_bg" style="background: #eee;">

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 offset-lg-4 offset-md-4 offset-sm-4">

        <div class="customlogin">

           <form method="post" enctype="multipart/form-data">
  <div class="form-group">
            <center><h2>ADMIN LOGIN</h2></center> <br>
    <span style="margin-top: 20px;"></span>
    <label for="exampleInputEmail1">Username</label>
    <input required="required" type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" style="width: 100%;">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input required="required" type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" style="width: 100%;">
  </div>
  <button type="submit" name="login" class="btn btn-primary" style="width: 100%;">LOGIN</button>
  


</form>
        </div>
      </div>
    </div>
  </div>
  <form action="" method="post">
    
    

  </form>



<script src="js/bootsrap.min.js"> </script>
</body>
</html>

<!-- Php code to login into user account -->
<?php 
    if (isset($_POST['login'])) {
      $username = $_POST['user'];
      $password = $_POST['pass'];

      $loginquery = mysqli_query($con, "SELECT * FROM admin WHERE name='$username' && pass='$password' ");
      $num = mysqli_num_rows($loginquery); // counting the number of rows
      $fetch = mysqli_fetch_array($loginquery);
      if ($num == 1) {
        $_SESSION['id'] = $fetch['id'];
        echo "<script> 
        alert('You have successfully log in');
        window.location='index.php';
        </script>";
      }
      else {
        $_SESSION['msg'] = 'Incorrect Username or Password';
        $_SESSION['msg_type'] = 'danger';
      }
    }
   ?>