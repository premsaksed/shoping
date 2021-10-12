<?php
session_start();
include_once 'head.php';
?>

<?php

if(!isset($_SESSION["intLine"]))
{
	echo "Cart Empty";
	exit();
}

include_once 'connect.php';
?>
<div class="mt-5 mx-5">


<table class="table" width="400"  border="0">
<thead> <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
  </tr></thead>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product WHERE ProductID = '".$_SESSION["strProductID"][$i]."' ";
		$objQuery = mysqli_query($objCon,$strSQL);
		$objResult = $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
		$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?=$_SESSION["strProductID"][$i];?></td>
		<td><?=$objResult["ProductName"];?></td>
		<td><?=$objResult["Price"];?></td>
		<td><?=$_SESSION["strQty"][$i];?></td>
		<td><?=number_format($Total,2);?></td>
	  </tr>
	  <?php
	  }
  }
  ?>
</table>
</div>
<div class="mt-2 mx-5" align="right"> Sum Total <?php echo number_format($SumTotal,2);?></div>

<div class="form-group mt-5 mx-5">
<form name="form1" method="post" action="save_checkout.php">
  <table  width="20%" border="0">
    <tr>
      <td >ชื่อ</td>
      <td ><input class="form-control" type="text" name="txtName" required></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><textarea  class="form-control" name="txtAddress" required></textarea></td>
    </tr>
    <tr>
      <td>เบอร์โทร์</td>
      <td><input class="form-control" type="text" name="txtTel" required></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input class="form-control" type="text" name="txtEmail" required></td>
    </tr>
  </table>
  <br>
    <input class="btn btn-success" type="submit" name="Submit" value="Submit">
</form>
</div>
<p> </p>
<?php
mysqli_close($objCon);
?>
</body>
</html>

<?php include_once 'footer.php';
/* This code download from www.ThaiCreate.Com */ ?>