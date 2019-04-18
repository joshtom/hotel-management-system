<?php include "include/config.php"; ?>
<div class="card-body" >
                                            <h4 class="mt-0 m-b-15 header-title">RECEIPT GENERATED</h4>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0" id="receipt">
                                                    <thead>
                                                    <tr>
                                                        <th>ACTION</th>
                                                        <th>ID</th>
                                                        <th>GENERATED PIN</th>
                                                        <th>SERIAL NO</th>
                                                        <th>STATUS</th>
                                                        <th>GENERATED DATE</th>
                                                        

                                                    </tr>
    
                                                    </thead>
                                                    <tbody>
                                                       <?php 
                                                       $query = mysqli_query($con, "SELECT * FROM receipt ORDER BY receipt_id ASC");
                                                       $count = mysqli_num_rows($query);
                                                       while ($fetch = mysqli_fetch_array($query)) {
                                                           ?>
                                                           <tr>
                                                               <td style="display: inline-flex;">
                                                                <a href="delete.php?id=<?php echo $fetch['receipt_id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                               </td>
                                                               <td><?php echo $fetch['receipt_id']; ?></td>
                                                               <td><?php echo $fetch['pin']; ?></td>
                                                               <td><?php echo $fetch['serial_no']; ?></td>
                                                               <td><?php echo $fetch['status']; ?> </td>
                                                               <td><?php echo $fetch['receipt_date']; ?> </td>
                                                              
                                                           </tr>

                                                           <?php
                                                       }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>

<script type="text/javascript">
    
    // Working with the data table
    $("#receipt").DataTable();

</script>
