<?php 
include_once '../con.php';

$ID = $_POST['ID'];
$Password = $_POST['Password'];
$Pass=md5($Password);
echo $id;

$sql = "UPDATE user SET Password='$Pass' WHERE ID=$ID";

if ($con->query($sql) === TRUE) {
  echo "Record updated successfully";
  header('location:index.php');
} else {
  echo "Error updating record: " . $con->error;
}

$con->close();

?>