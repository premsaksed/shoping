<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "root";
$userPassword = "root";
$dbName = "mydatabase";

$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if (!$objCon) {
    echo $objCon->connect_error;
    exit();
}

$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($objCon,$strSQL);
if(!$objQuery)
{
	echo $objCon->error;
	exit();
}
?>
<table width="450"  border="1">
  <tr>
    <td width="101">Picture</td>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="50">Price</td>
    <td width="100">Cart</td>
  </tr>
  <?php
  while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
  {
  ?>
  <tr>
  <form action="order.php" method="post">
	<td><img src="img/<?php echo $objResult["Picture"];?>"></td>
    <td><?php echo $objResult["ProductID"];?></td>
    <td><?php echo $objResult["ProductName"];?></td>
    <td><?php echo $objResult["Price"];?></td>
    <td><input type="hidden" name="txtProductID" value="<?php echo $objResult["ProductID"];?>" size="2">
	<select name="txtQty">
		<?php for($qty=1;$qty<=20;$qty++)
	  {
	  ?>
		<option value="<?php echo $qty;?>"><?php echo $qty;?></option>
		<?php
	  }
	  ?>
	</select>
	<input type="submit" value="Add">
	</td>
	</form>
  </tr>
  <?php
  }
  ?>
</table>
<br><br><a href="show.php">View Cart</a> | <a href="clear.php">Clear Cart</a>
<?php
mysqli_close($objCon);
?>
</body>
</html>

<?php /* This code download from www.ThaiCreate.Com */ ?>