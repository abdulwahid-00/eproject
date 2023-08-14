<?php
include "../header1.php";
$lawyername = "SELECT laywer_name FROM `addlaywer`";
$lawyernameres = mysqli_query($conn , $lawyername );
$cityname = "SELECT city FROM `addlaywer`";
$citynameres = mysqli_query($conn , $cityname );
$casename = "SELECT cases FROM `addlaywer`";
$casenameres = mysqli_query($conn , $casename );

if(isset($_POST['detail_add'])){
  $d_name = $_POST['d_name'];
  $email = $_POST['email'];
  $d_city= $_POST['d_city'];
  $d_cases = $_POST['d_cases'];
  $education = $_POST['edu'];
  $textarea = $_POST['desc'];
 

  $query = "INSERT INTO `addlaywers_details` ( `d_name`, `email`, `d_city`, `d_cases`, `education`, `textarea`,`addlawyer_fk`) VALUES ( '$d_name', '$email', '$d_city', '$d_cases', '$education', '$textarea')";

  $res = mysqli_query($conn , $query);
  if($res){
     $succues = "success";
  }else{
    $error = "error";
  }
  
}

?>



<div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add information </h3>
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
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleSelectGender">Name</label>
                        <select class="form-control" id="exampleSelectGender" >
                          <?php
                          while($N = mysqli_fetch_assoc($lawyernameres)){

                          
                          ?>
                          <option value="name"><?php echo $N ['laywer_name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">case</label>
                        <select class="form-control" id="exampleSelectGender" >
                          <?php
                          while($case = mysqli_fetch_assoc($casenameres)){

                          
                          ?>
                          <option value="cases"><?php echo $case ['cases'] ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">city</label>
                        <select class="form-control" id="exampleSelectGender" >
                          <?php
                          while($c = mysqli_fetch_assoc($citynameres)){

                          
                          ?>
                          <option value="city" ><?php echo $c ['city'] ?></option>
                          <?php } ?>
                        </select>
                      </div>

                     
                      <div class="form-group">
                        <label for="exampleInputCity1">Education</label>
                        <input type="text" class="form-control" name="edu" id="exampleInputCity1" placeholder="Education">
                      </div>


                      
                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->
               
                     
                      
                     <p><?php echo @$succues; ?></p>
                     <p><?php echo @$error; ?></p>
                     

                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" name="desc" rows="4"></textarea>
                      </div>
                      <button type="submit" name="detail_add" class="btn btn-primary mr-2">Submit</button>
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
        



