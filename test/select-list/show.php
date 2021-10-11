<?php
session_start();
?>
<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php

if(!isset($_SESSION["intLine"]))
{
	echo "Cart Empty";
	exit();
}

include_once '../connect.php';
?>
  <form action="update.php" method="post">
<table width="400"  border="1">
  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
    <td width="10">Del</td>
  </tr>
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
		<td>
			<select name="txtQty<?php echo $i;?>">
				<?php 
			
				for($qty=1;$qty<=20;$qty++)
			  {
					$sel = "";
					if($_SESSION["strQty"][$i] == $qty)
				  {
						$sel = "selected";
				  }
			  ?>
				<option value="<?php echo $qty;?>" <?php echo $sel;?>><?php echo $qty;?></option>
				<?php
			  }
			  ?>
			</select>
		</td>
		<td><?=number_format($Total,2);?></td>
		<td><a href="delete.php?Line=<?=$i;?>">x</a></td>
	  </tr>
	  <?php
	  }
  }
  ?>
</table>
<br>
<table width="400"  border="0">
  <tr>
  <td><input type="submit" value="Update"></td>
  <td align="right">Sum Total <?php echo number_format($SumTotal,2);?></td>
  </tr>
  </table>
</form>
<br><a href="product.php">Go to Product</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php">CheckOut</a>
<?php
	}
?>
<?php
mysqli_close($objCon);
?>
</body>
</html>

<?php /* This code download from www.ThaiCreate.Com */ ?>