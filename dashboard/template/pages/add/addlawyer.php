<?php
include "../header1.php";


if(isset($_POST['addlaywer'])){
  $name = $_POST['laywername'];
  $case = $_POST['cases'];
  $city = $_POST['city'];
  $img = $_FILES['file'];
  $image = $img['name'];

  
  

  
  $insert= "INSERT INTO `addlaywer` ( `laywer_name`, `l_image`, `cases`, `city`) VALUES ( '$name','$image' ,'$case', '$city')
  ";
  $result = mysqli_query($conn , $insert);
  
};





?>




<div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Laywer </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">add</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add information </li>
                </ol>
              </nav>
            </div>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Information</h4>
                    
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="laywername" id="exampleInputName1" placeholder="Name">
                      </div>

                     
                      <div class="form-group">
                        <label for="exampleInputName1">case</label>
                        <input type="text" class="form-control" name="cases" id="exampleInputName1" placeholder="Name">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputName1">city</label>
                        <input type="text" class="form-control" name="city" id="exampleInputName1" placeholder="Name">
                      </div>

                      
                     
                      
                  
                      <!-- <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                      </div> -->
                      
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="file" id="">
                        
                      </div>
                   
                      <button type="submit" name="addlaywer" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
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
        



