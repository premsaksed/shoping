<?php
session_start();

include_once '../connect.php';

  $Total = 0;
  $SumTotal = 0;
  $id = $_SESSION["UserID"];
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

$_SESSION["strProductID"]= "";
		$_SESSION["strQty"]= "";

header("location:index.php");
?>

<?php /* This code download from www.ThaiCreate.Com */ ?>