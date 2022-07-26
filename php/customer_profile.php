<?php
include_once('database.php');
session_start();
if(isset($_SESSION['Email'])){
   $sqlfetch="SELECT * FROM customer_info where Email='$_SESSION[Email]'";
   $res=mysqli_query($connect,$sqlfetch);  
   $row = mysqli_fetch_assoc($res);
}

else{
    header('location:customer_form.php');
}
?>
<?php 

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $query="DELETE FROM customer_info WHERE CustomerID=$id";
    $deletequery=mysqli_query($connect,$query);
    if($deletequery){
        header('location:customer_profile.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer_profile</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customer_profile.css">
    <link rel="stylesheet" href="../css/animate.min.css">
</head>
<body>
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
                <a class="nav-link" href="../php/customer_form.php">
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
     <div class="bg">
         <div class="container">
             <div class="row">
                <div class="col-sm-4 col-md-6 col-lg-4">
                </div>
                 <div class="col-sm-4 col-md-6 col-lg-8">
                     <div class="jumbotron box">
                      <h1 class="header">PERSONAL INFORMATION OF THE CUSTOMER</h1>
                      <p class="text-1 mt-5">Customer ID:  <span class="ans"><?php echo $row["CustomerID"];?></span></p>
                      <p class="text-1">Customer Name: <span class="ans"><?php echo $row["CustomerName"];?></span></p>
                      <p class="text-1">Email Address: <span class="ans"><?php echo $row["Email"];?></span></p>
                      <p class="text-1">Address: <span class="ans"><?php echo $row["Address"];?></span></p>
                      <p class="text-1">Area Code: <span class="ans"><?php echo $row["AreaCode"];?></span></p>
                      <p class="text-1">Phone Number: <span class="ans"><?php echo $row["PhoneNumber"];?></span></p>
                      <br><br>
                      <h2 class="header text-danger">If You Want To Delete Your Information From Your Account</h2>
                       
                       <a href="customer_profile.php?delete=<?php echo  $row["CustomerID"];?>" class="btn  btn-lg active  btn-1 px-5 mt-3" role="button" aria-pressed="true">DELETE <i class="fas fa-trash"></i></a> 
                       
                       
                       <h2 class="header mt-5 text-dark">If You Want To Edit Your Information In Your Account</h2>
                       <a href="update.php" class="btn  btn-lg active  btn-1 px-5 mt-3">EDIT <i class="fas fa-edit"></i></a>
                       <h2 class="header mt-5">If You Want To  Book Our Service</h2>
                       
                       <a href="service.php" class="btn  btn-lg active  btn-1 px-5 mt-3" role="button" aria-pressed="true">Make A Reservation</a>
                      <hr class="mt-5">
                      <a class="log" href="logout.php">LOG OUT <i class="fas fa-sign-out-alt"></i></a>
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