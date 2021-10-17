<?php 
include_once '../con.php';

$id = $_POST['OrderID'];
echo $id;

$sql = "UPDATE money SET Status='1' WHERE OrderID=$id";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:money.php');
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();

?>