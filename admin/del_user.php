<?php 
include_once '../con.php';
$ID = $_GET['ID'];

// sql to delete a record
$sql = "DELETE FROM user WHERE ID=$ID";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
 header('location:User.php');
} else {
  echo "Error deleting record: " . $con->error;
}
$con->close();
?>