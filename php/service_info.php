<?php
//SESSION_start();
include_once('database.php');
if(isset($_POST['search'])){
    $valuetosearch=$_POST['valueTosearch'];
    $query="SELECT * FROM service_book where CustomerName LIKE '%$valuetosearch%'";
    $result=mysqli_query($connect,$query);
    $sqltotalservice="SELECT count(CustomerID) as TotalService from service_book where CustomerName LIKE '%$valuetosearch%'" ;
    $restotalservice=mysqli_query($connect,$sqltotalservice);
}
else{
    $query="SELECT * FROM service_book";
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
    input {
        margin-left: 100px;
        border: 2px solid;
        padding: 10px 10px;
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
                    <button type="button" class="btn btn-warning text-uppercase font-weight-bold rounded-pill">Company
                        Information</button>
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
    <h1 CLASS="text-warning font-weight-bold mt-3 text-center">SERVICE BOOK INFORMATION</h1>
    <form action="service_info.php" method="POST">
        <input type="text" name="valueTosearch" placeholder="Value To Search"
            value="<?php echo $valuetosearch;?>"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>
        <table class="table table-striped table-hover table-bordered ">
            <thead class="bg-dark text-warning text-center">
                <th>CustomerName</th>
                <th>Required_Service_name</th>
                <th>Preferred_schedule</th>
                <th>Payment Method</th>
            </thead>
            <?php while($row=mysqli_fetch_array($result)):?>
            <tr class="text-center">
                <th><?php echo $row['CustomerName'];?></th>
                <th><?php echo $row['Required_Service_name'];?></th>
                <th><?php echo $row['Preferred_schedule'];?></th>
                <th><?php echo $row['Payment_Method'];?></th>
            </tr>
            <?php endwhile ?>
        </table>
    </form>

    <?php
    if(isset($_POST['search'])){
       if($restotalservice){
           while($rowtotalservice=mysqli_fetch_array($restotalservice)){
               ?>
                    <table class="table table-striped table-hover table-bordered mt-5">
                        <tr class="bg-dark text-warning text-center">
                            <th>Total Service Taken</th>
                        </tr>
                        <tr class="text-center">
                            <th><?php echo $rowtotalservice['TotalService'];?></th>
                        </tr>
                    </table>
                    <?php
           }
       }
    }
 ?>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
</body>

</html>