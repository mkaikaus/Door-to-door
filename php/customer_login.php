<?php
session_start();
include_once('database.php');

if($connect){
   if(isset($_POST['login'])){
       $Email=$_POST['Email'];
       $Password=$_POST['Password'];
       $sql="SELECT * FROM customer_info where Email='$Email' AND Password='$Password'";
       $res=mysqli_query($connect,$sql);
       if(mysqli_num_rows($res)>0){
           $_SESSION['Email']=$Email;
           header('location:customer_profile.php');
       }
       else{
        header('location:customer_form.php');
       }
   } 
}

else{
    echo"not connected";
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer_log_in</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customer_login.css">
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
                <a class="nav-link" href="#">
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
            <div class="col-sm-4 col-md-6 col-lg-6">
                <div class="jumbotron box">
                     <h1 class="sign text-center">SIGN IN</h1>
                <form method="POST" class="mt-5" action="">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control ic" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp">
                      <small id="emailHelp" class="form-text text-muted text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control ic"  name="Password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary btn-1 mb-3 mt-2" name="login">LOGIN</button><br>
                    <a class="account"href="../php/customer_form.php">CREATE YOUR ACCOUNT<i class="fas fa-arrow-right"></i></a>
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
            <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                  var fileName = $(this).val().split("\\").pop();
                  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
                </script>
</body>
</html>