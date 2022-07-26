<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer_form</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/service.css">
    <link rel="stylesheet" href="../css/animate.min.css">
</head>
<body>
 <!---start of a navbar--->
 <div>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <img src="../media/logo2.png" width="180px" height="70px" class="align-top" alt="" loading="lazy">
            <form class="form-inline">
                <a class="nav-link" href="../php/index.php">
                    <button type="button"
                        class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Home</button>
                </a>
                <a class="nav-link" href="../php/alltable.php">
                    <button type="button" class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Company Information</button>
                </a>
                <a class="nav-link" href="../php/customer_login.php">
                    <button type="button" class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Sign
                        in</button>
                </a>
                <a class="nav-link" href="#">
                    <button type="button" class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Sign
                        Up</button>
                </a>
                <a class="nav-link" href="../php/customer_login.php">
                    <button type="button" class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Make a reservation</button>
                </a>
            </form>
        </div>
    </nav>
    </div>




 <!---start of a navbar--->




    <!---start of background image-->
   
  <div class="bg">

   <div class="container">
       <div class="row">
           <div class="col-sm-8">
            <div class="jumbotron box">
                
            <form method="POST" action="service.php" enctype="multipart/form-data">
                    <h1 class="header text-center">Book Our Service</h1>
                    <div class="form-group mb-0">
                        <label for="inputAddress">AreaCode</label>
                        <input type="text" class="form-control form-box" id="inputarea" name="areacode">
                      </div>
                      <button type="submit" class="btn  px-5 mt-5 mybtn" name="enter">Enter AreaCode</button>
                      <?php

include_once('database.php');
session_start();
if($connect){
     if(isset($_POST['enter'])){
        $Areacode=$_POST['areacode'];
         $sqlcol="SELECT Worker_ID,WorkerName,Expertise_service_name from worker_info  where AreaCode='$Areacode'";
         $rescol=mysqli_query($connect,$sqlcol);

         ?>
                     
         <?php
        if($rescol){
            while($row=mysqli_fetch_array($rescol))
            {
                ?>

        <div class="form-check mt-1">
        <input class="form-check-input position-static" type="radio" name="worker" id="blankRadio1" value="WorkerID: <?php echo $row['Worker_ID'];?> , WorkerName: <?php echo $row['WorkerName'];?> , Expertise_service_name:  
            <?php echo $row['Expertise_service_name'];?>" aria-label="...">
        <label class="form-check-label" for="gridRadios1">
        WorkerID: <span class="text-white"><?php echo $row['Worker_ID'];?></span> , WorkerName:  <span class="text-white"><?php echo $row['WorkerName'];?></span> , Expertise_service_name:  <span class="text-white"> 
            <?php echo $row['Expertise_service_name'];?></span> </label>
        </div>

                <?php
                
            }
        }
     } 
     if(isset($_SESSION['Email'])){
      $sqlfetch="SELECT * FROM customer_info where Email='$_SESSION[Email]'";
      $res=mysqli_query($connect,$sqlfetch);
      $row = mysqli_fetch_assoc($res);

     if(isset($_POST['book'])){
      $workerinfo=$_POST['worker'];
      $customerid=$_POST['id'];
      $customername=$_POST['name'];
      $email=$_POST['Email'];
      $Password=$_POST['Password'];
      $area=$_POST['area'];
      $schedule=$_POST['schedule'];
      $servicename=$_POST['servicename'];
      $payment=$_POST['payment'];
      $sqlfind="SELECT*FROM customer_info where Email='$email' AND Password='$Password'";
      $resfind=mysqli_query($connect,$sqlfind);
      if(mysqli_num_rows($resfind)>0){
      $sql="INSERT INTO service_book(Worker_information,CustomerID,CustomerName,Email,Password,AreaCode,Payment_Method,Preferred_schedule,Required_Service_name)
      Values('$workerinfo','$customerid','$customername','$email','$Password','$area','$payment',' $schedule','$servicename')";
      $res=mysqli_query($connect,$sql);
      if($res){
        $_SESSION['customername']=$customername;
        header('location:booking.php');    
       }
        else{
          echo"not added";
        } 


      }
      else{
        header('location:customer_profile.php');
      }

    }
  }
}
else{
  echo"not connected";
}
?>


                    <div class="form-row">
                        <div class="form-group col-md-6 pt-5">
                        <label for="inputName">CustomerID</label>
                        <input type="text" class="form-control form-box" id="inputName" name="id" value="<?php echo $row["CustomerID"];?>">
                      </div>
                      <div class="form-group col-md-6 pt-5">
                        <label for="inputName">CustomerName</label>
                        <input type="text" class="form-control form-box" id="inputName" name="name" value="<?php echo $row["CustomerName"];?>">
                      </div>
                    </div>
                    <div class="form-row mt-2">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control  form-box" id="inputEmail4"  name="Email"  value="<?php echo $row["Email"];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control  form-box" id="inputPassword4"  name="Password"  value="<?php echo $row["Password"];?>">
                      </div>
                    </div>
                    
                      <div class="form-row mt-2">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">AreaCode</label>
                        <input type="text" class="form-control form-box" id="inputarea" name="area"  value="<?php echo $row["AreaCode"];?>" >
                     </div>
                      <div class="form-group col-md-6">
                      <label for="inputdepartment">Payment_Method</label>
                        <select id="inputState" class="form-control form-box" name="payment">
                            <option selected></option>
                            <option>BKASH </option>
                            <option>ROCKET</option>
                            <option>CASH ON DELIVERY</option>
                            <option>BANK</option>
                           
                           </select>
                      </div>
                    </div>
                    <div class="form-row mt-2">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Preferred_schedule</label>
                        <input type="text" class="form-control form-box" id="inputName" name="schedule">
                     </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Required_Service_name</label>
                        <input type="text" class="form-control form-box" id="inputname" name="servicename">
                      </div>
                    </div>
                    
                   
                 
                   
    
                          
    
                    <button type="book" class="btn  px-5 mt-5 mybtn" name="book">Confirm</button>
                  </form>
            </div>
           </div>
       </div>
   </div>


  </div>

 <!--end of a background image-->











    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
        </script>
        
</body>
</html>