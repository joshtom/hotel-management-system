<?php include "include/config.php"; ?>
<div class="card-body" >
                                            <h4 class="mt-0 m-b-15 header-title">ADMINS OF JAYJAY</h4>

                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>ACTIONS</th>
                                                        <th>SERIAL NO</th>
                                                        <th>NAME</th>
                                                        <th>PASSWORD </th>
                                                        <th>IMAGES</th>
                                                        

                                                    </tr>
    
                                                    </thead>
                                                    <tbody>
                                                       <?php 
                                                       $query = mysqli_query($con, "SELECT * FROM admin ORDER BY id ASC");
                                                       $count = mysqli_num_rows($query);
                                                       while ($fetch = mysqli_fetch_array($query)) {
                                                           ?>
                                                           <tr>
                                                               <td style="display: inline-flex;"><a href="edit.php?id=<?php echo $fetch['id'] ?>" class="btn btn-warning" style="margin-right: 5px;"><i class="fa fa-pencil"></i></a>
                                                                <a href="delete.php?id=<?php echo $fetch['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                               </td>
                                                               <td><?php echo $fetch['id']; ?></td>
                                                               <td><?php echo $fetch['name']; ?></td>
                                                               <td><?php echo $fetch['pass']; ?></td>
                                                               <td><img src="<?php echo $fetch['image']; ?>" width="50" height="50" style="border-radius: 100%;"></td>
                                                              
                                                           </tr>

                                                           <?php
                                                       }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
