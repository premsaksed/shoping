<?php
session_start();
include_once 'head.php';
?>

<?php

if (!isset($_SESSION["intLine"])) {
	echo "Cart Empty";
	exit();
}

include_once 'connect.php';
?>
<form action="update.php" method="post">
	<div class="mx-5">


		<table class="table mt-5 " width="10%" border="0">
			<thead>
				<tr>
					<td width="10%">ProductID</td>
					<td width="10%">ProductName</td>
					<td width="10%">Price</td>
					<td width="10%">Qty</td>
					<td width="10%">Total</td>
					<td width="10%">Del</td>
				</tr>
			</thead>
			<?php
			$Total = 0;
			$SumTotal = 0;

			for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
				if ($_SESSION["strProductID"][$i] != "") {
					$strSQL = "SELECT * FROM product WHERE ProductID = '" . $_SESSION["strProductID"][$i] . "' ";
					$objQuery = mysqli_query($objCon, $strSQL);
					$objResult = $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
					$Total = $_SESSION["strQty"][$i] * $objResult["Price"];
					$SumTotal = $SumTotal + $Total;
			?>
					<tr>
						<td><?= $_SESSION["strProductID"][$i]; ?></td>
						<td><?= $objResult["ProductName"]; ?></td>
						<td><?= $objResult["Price"]; ?></td>
						<td><input type="text" name="txtQty<?php echo $i; ?>" value="<?php echo $_SESSION["strQty"][$i]; ?>" size="2"></td>
						<td><?= number_format($Total, 2); ?></td>
						<td><a href="delete.php?Line=<?= $i; ?>"><i class="fa fa-window-close" style="font-size:30px;color:red"></i></a></td>
					</tr>
			<?php
				}
			}
			?>
		</table>
		<br>
		<table width="40%" border="0">
			<tr>
				<td><input type="submit" class="btn btn-info" value="Update"></td>
				<td align="right">Sum Total <?php echo number_format($SumTotal, 2); ?></td>
			</tr>
		</table>
</form>
</div>
<br><a href="product.php">Go to Product</a>
<?php
if ($SumTotal > 0) {
?>
	| <a href="checkout.php">CheckOut</a>
<?php
}
?>
<?php
mysqli_close($objCon);
?>
<?php
include_once 'footer.php';
?>