<?php 
include_once 'con.php';


$Username = $_POST['Username'];
$Password = $_POST['Password'];
$pass=md5($Password);
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Userlevel = $_POST['Userlevel'];
$Address = $_POST['Address'];
$Tel = $_POST['Tel'];
$Email = $_POST['Email'];

$sql = "INSERT INTO user( Username,Password,Firstname,Lastname,Userlevel,Address,Tel,Email )
VALUES ('$Username','$pass','$Firstname','$Lastname','$Userlevel','$Address',$Tel,'$Email')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location:login.php');
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close();
?>