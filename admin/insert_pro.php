<?php 
include_once '../con.php';
$ProductName = $_POST['ProductName'];
$detailed = $_POST['detailed'];
$Price= $_POST['Price'];

$sql = "INSERT INTO product (ProductName, detailed, Price)
VALUES ('$ProductName', '$detailed', '$Price')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:Product.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>