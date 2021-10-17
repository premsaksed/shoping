<?php 
include_once '../con.php';
$ID = $_POST['ID'];
$Username = $_POST['Username'];
$Username = $_POST['Username'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Userlevel = $_POST['Userlevel'];
$Address = $_POST['Address'];
$Tel = $_POST['Tel'];
$Email = $_POST['Email'];

$sql = "UPDATE user SET Username='$Username',Firstname='$Firstname',
Lastname='$Lastname',Userlevel='$Userlevel',Address= '$Address',Tel='$Tel',Email='$Email' WHERE ID=$ID";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:User.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
