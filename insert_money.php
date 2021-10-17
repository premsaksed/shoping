
<mate charset ="utf-8" />
<?php include ('con.php');
//สร้างตัวแปร

$OrderID = $_POST['OrderID'];
$ID_user = $_POST['ID_user'];
$date = $_POST['date'];
$time = $_POST['time'];
$money = $_POST['money'];

//เพิ่มข้อมูล teble1
$sql1 = " INSERT INTO money
(OrderID,ID_user,date,time,money)
VALUES('$OrderID','$ID_user','$date','$time','$money')";
$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error($con));
//เพิ่มข้อมูล teble1
$sql2 = " UPDATE orders SET money = '1' WHERE OrderID= $OrderID";
$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error($con));
//ปิดการเชื่อมต่อ database
mysqli_close($con);
//ถ้าสำเร็จให้ขึ้นอะไร
if ($result1 && $result2){
echo "<script type='text/javascript'>";
echo"window.location = 'myorder.php';";
echo "</script>";
}
else {
//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม
echo "<script type='text/javascript'>";
echo "alert('error!');";
echo"window.location = 'myorder.php'; ";
echo"</script>";
}
?>