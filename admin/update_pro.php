<?php 
include_once '../con.php';
$ProductID = $_POST['ProductID'];
$ProductName = $_POST['ProductName'];
$detailed = $_POST['detailed'];
$Price= $_POST['Price'];

$sql = "UPDATE product SET ProductName = $ProductName, detailed=$detailed, Price=$Price
WHERE ProductID=$ProductID";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:Product.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
