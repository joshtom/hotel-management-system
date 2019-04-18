<?php include "include/config.php"; ?>
<div class="col-xl-12">
                                    <div class="card m-b-30">
<div class="card-body" >
                                            <h4 class="mt-0 m-b-15 header-title">ALL OUR CUSTOMERS</h4>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0" id="mydata">
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
                                                       $query = mysqli_query($con, "SELECT * FROM complete_reserve ORDER BY complete_reserve_id ASC");
                                                       $count = mysqli_num_rows($query);
                                                       while ($fetch = mysqli_fetch_array($query)) {
                                                           ?>
                                                           <tr>
                                                               <td style="display: inline-flex;">
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
                                                                     <td><?php echo $fetch['date']; ?> </td>
                                                                      
                                                              
                                                           </tr>

                                                           <?php
                                                       }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                        </div>

 <script type="text/javascript">
    
    // Working with the data table
    $("#mydata").DataTable();

</script>
