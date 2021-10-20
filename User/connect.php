<?php 
$serverName = "localhost";
$userName = "root";
$userPassword = "root";
$dbName = "ecom1";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
    echo $objCon->connect_error;
    exit();
}
?>