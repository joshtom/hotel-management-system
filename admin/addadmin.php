<!-- Modal for generating pin for every user -->
<div class="modal fade" id="addadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Admin Below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <label>Username</label>
            <input type="text" name="user" class="form-control" placeholder="Enter Username" required=""> <br>
            <label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Enter Password" required=""> <br>
            <label>Add Image</label>
            <input type="file" name="file" class="form-control"  required="">
            <button type="submit" class="form-control btn btn-primary" name="addadmin">ADD ADMIN</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- End of modal for generating pin for every user -->

<?php 
    include "include/config.php";

    if (isset($_POST['addadmin'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $filename = $_FILES['file']['tmp_name'];
        $file = $_FILES['file']['name'];
        $join = $filename.$file;
        $filedir = "images/";
        $joinfile = $filedir.$file;
        $save = move_uploaded_file($filename, $joinfile);



  //       $filename=$_FILES['file']['tmp_name'];
  // $file=$_FILES['file']['name'];
  // $me=$filename.$file;
  // $filedir="image/";
  // $joinfile=$filedir.$file;
  // $save=move_uploaded_file($filename, $joinfile);

        
        $query = mysqli_query($con, "INSERT INTO admin (name,pass,image,date) VALUES('$user', '$pass','$joinfile', CURRENT_TIMESTAMP) ");

        if ($query) {
            echo "<script> alert('You have successfully added a new admin'); </script>";
          }
          else{
            echo "<script> alert('Unable to add a new admin'); </script>";
          }
    }
 ?>