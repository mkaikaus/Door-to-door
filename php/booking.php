<?php
include_once('database.php');
session_start();
if(isset($_SESSION['Email'])){
  
 }
 else{
     header('location:customer_login.php');
 }




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO OUR COMAPNY</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/booking.css">
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
                 <div class="col-sm-4">
                    <div class="jumbotron box">
                     <h1 class="header">WELCOME <?php echo   $_SESSION['customername'];?></h1>
                     <p class="lead text">You have made a booking in our service system.Thank you for choosing our service.We let you know further information through your Email. </p>
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