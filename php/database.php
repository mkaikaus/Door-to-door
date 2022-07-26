<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="doortodoor";
$connect=mysqli_connect($hostname,$username,$password,$dbname);
if($connect){
    // echo "connected";

}
else{
    echo"not connected";
}




?>