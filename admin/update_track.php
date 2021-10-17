<?php 
include_once '../con.php';

$id = $_POST['OrderID'];
$track = $_POST['track'];
echo $track.$id;

$sql = "UPDATE orders SET Status ='1', track = $track WHERE OrderID=$id";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:oder.php');
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();

?>