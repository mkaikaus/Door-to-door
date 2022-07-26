<?php
include_once('database.php');
if(isset($_POST['search'])){
$valuetosearch=$_POST['valueTosearch'];
$query="SELECT * from company_info inner join service using(C_ID) where CONCAT(`C_Name`,`Types_Of_Service`,`Address`,`Cost`) LIKE '%$valuetosearch%'";
$result=mysqli_query($connect,$query);
}
else{
    $query="SELECT   * from company_info inner join service using(C_ID)";
    $result=mysqli_query($connect,$query);
    $valuetosearch="";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company info</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
<style>
input{
    margin-left:100px;
    border:2px solid;
    padding:10px 40px;
   
}

</style>
    
</head>
<body>
<nav class="navbar navbar-light bg-light">
        <div class="container">
            <img src="../media/logo2.png" width="180px" height="70px" class="align-top" alt="" loading="lazy">
            <form class="form-inline">
                <a class="nav-link" href="index.php">
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
                    <button type="button" class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Make a
                        reservation</button>
                </a>

            </form>
        </div>
    </nav>


<h1 CLASS="text-warning font-weight-bolder mt-5 text-center"> COMPANY INFORMATION</h1>
  <form  action="" method="POST">
   <input type="text" name="valueTosearch" placeholder="Value To Search" value="<?php echo $valuetosearch;?>"><br><br>
   <input type="submit" name="search" value="Filter"><br><br>
   <table class="table table-striped table-hover table-bordered ">
   <thead class="bg-dark text-warning text-center">
        <th>C_ID</th>
        <th>C_Name</th>
        <th>Types_Of_Service</th>
        <th>Cost</th>
        <th>Address</th>
        <th>Email</th>
        <th>PhoneNumber</th>

    </thead>
    <?php while( $row=mysqli_fetch_array($result)):?>
     <tr class="text-center">
         <th><?php echo $row['C_ID'];?></th>
         <th><?php echo $row['C_Name'];?></th>
         <th><?php echo $row['Types_Of_Service'];?></th>
         <th><?php echo $row['Cost'];?></th>
         <th><?php echo $row['Address'];?></th>
         <th><?php echo $row['Email'];?></th>
         <th><?php echo $row['PhoneNumber'];?></th>

     </tr>
     <?php endwhile ?>

   </table>


  </form>


     









 <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
</body>
</html>