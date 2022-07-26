<?php
   SESSION_start();
   include_once('database.php');
   $msg="";
  if($connect){
        if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Address=$_POST['Address'];
        $Areacode=$_POST['area'];
        $Phone=$_POST['phone'];
        $sqlfind="SELECT * FROM customer_info where Email='$Email'";
        $resfind=mysqli_query($connect,$sqlfind);
        if(mysqli_num_rows($resfind)>0){
            $msg= "This Email is already existed";
        }
        else{
            $sql="INSERT INTO customer_info (CustomerName,Email,Password,Address,AreaCode,PhoneNumber)
           VALUES ('$name','$Email','$Password','$Address','$Areacode','+88".$Phone."')"; 
           $res=mysqli_query($connect,$sql);
           if($res){
               $_SESSION['Email']=$Email;
             header('location:customer_profile.php');

           }
           else{
               echo"not added";
           }
        }      
    }
  }
  else{
      echo"not added";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer_form</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/customer_form.css">
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
    <div class="bg">
        <?php if(strcmp($msg, 'This Email is already existed') == 0){?>
            <div class="alert alert-danger">
    <strong>Wrong!</strong> This Email is already existed.
  </div>
        <?php
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="jumbotron box">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <h1 class="header text-center">SIGN UP AS A CUSTOMER</h1>

                            <div class="form-group mb-0">
                                <label for="inputName">Customer Name</label>
                                <input type="text" class="form-control form-box" id="inputName" name="name">
                            </div>
                            <br>
                            <div class="form-row mt=0">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control form-box" id="inputEmail4" name="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control form-box" id="inputPassword4"
                                        name="Password">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control form-box" id="inputAddress" name="Address">
                            </div>
                            <div class="form-row mt-0">
                                <div class="form-group col-md-6 pt-5">
                                    <label for="inputName">AreaCode</label>
                                    <input type="text" class="form-control form-box" id="inputName" name="area">
                                </div>
                                <div class="form-group col-md-6 pt-5">
                                    <label for="inputphonenumber">PhoneNumber</label>
                                    <input type="text" class="form-control form-box" id="inputCity" name="phone" pattern="[0-9]{11}">
                                </div>
                            </div>
                            <button type="submit" class="btn  px-5 mt-5 mybtn" name="submit">SUBMIT</button>
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