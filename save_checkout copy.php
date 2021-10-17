<?php session_start(); ?>
<?php
include_once 'con.php';
include_once 'connect.php';
$id = $_SESSION["UserID"];
  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO orders (OrderDate,Name,Address,Tel,Email,Status,User_ID)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."' ,'".$_POST["txtTel"]."','".$_POST["txtEmail"]."','0','".$id."') 
  ";
  $objQuery = mysqli_query($objCon,$strSQL);
  if(!$objQuery)
  {
	echo $objCon->error;
	exit();
  }

  $strOrderID = mysqli_insert_id($objCon);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO orders_detail (OrderID,ProductID,Qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";
			  mysqli_query($objCon,$strSQL);
	  }
  }

mysqli_close($objCon);

session_destroy();

header("location:finish_order.php?OrderID=".$strOrderID);
?>

<?php /* This code download from www.ThaiCreate.Com */ ?>