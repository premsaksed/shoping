<?php 
include_once '../con.php';
$ProductID = $_GET['ProductID'];

// sql to delete a record
$sql = "DELETE FROM product WHERE ProductID=$ProductID";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
 header('location:Product.php');
} else {
  echo "Error deleting record: " . $con->error;
}
$con->close();
?>


