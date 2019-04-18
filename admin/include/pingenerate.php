<!-- Modal for generating pin for every user -->
<div class="modal fade" id="pin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate Pin Below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <label>Enter the numbers of pins to generate</label>
            <input type="text" name="pin_generate" class="form-control" placeholder="Enter Number"> <br>
            <button type="submit" class="form-control btn btn-primary" name="generate">GENERATE PIN</button>
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

    if (isset($_POST['generate'])) {
        $pin_generate = $_POST['pin_generate'];
       

        for ($i=1; $i <= $pin_generate; $i++) { 
           $hotelname = 'JAYJAY-';
            $pin = $hotelname.rand(10000000000,999999999999);
            $serial = $hotelname.rand(111111111,555555555555555);
          $query = mysqli_query($con, "INSERT INTO receipt (pin,serial_no,receipt_date) VALUES('$pin', '$serial', CURRENT_TIMESTAMP) ");
          
        }
        if ($query) {
            echo "<script> alert('Pin has been successfully generated'); </script>";
          }
          else{
            echo "<script> alert('Unable to genetate pin'); </script>";
          }
    }
 ?>