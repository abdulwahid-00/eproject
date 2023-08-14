<?php
include "../header1.php";

$fetch = "SELECT * FROM `addlaywer`";
$res = mysqli_query($conn , $fetch);

?>

        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bordered table</h4>
                    <p class="card-description"> Add class <code>.table-bordered</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>lawyer id</th>
                                <th>profile image</th>
                                <th>lawyer name</th>
                                <th>case</th>
                                <th>city</th>
                          
                                
                            </tr>
                            <?php 
                            while ($f = mysqli_fetch_assoc($res)){

                            
                            ?>
                          <tr>
                            <th><?php echo $f['lawyer_id'] ?> </th>
                            <th><?php echo $f['l_image'] ?></th>
                            <th><?php echo $f['laywer_name'] ?></th>
                            <th><?php echo $f['cases'] ?></th>
                            <th><?php echo $f['city'] ?></th>
                        
                            
                         
                          </tr>
                          <?php 
                            }
                          ?>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>








              

   <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/settings.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->