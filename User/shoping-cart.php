<?php
session_start();
include_once 'head.php';
?>

<?php

if (!isset($_SESSION["intLine"])) {
	echo "<script>alert('".$ID."ไม่พบสินค้าในรายการ !'); location.href='index.php';</script>";
  
	
	
	exit();
	
}

include_once 'connect.php';
?>

<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">

			<!-- <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i> -->
		</a>

		<span class="stext-109 cl4">

		</span>
	</div>
</div>

<div class="bg0 p-t-75 p-b-85"></div>
<!-- Shoping Cart -->
<form action="update.php" method="post" >
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
				<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tr class="table_head">
								<th class="column-1">Product</th>
								
								<th class="column-2">name</th>
								<th class="column-3">Price</th>
								<th class="column-4">Quantity</th>
								<th class="column-5">Total</th>
								<th class="column-5">ลบ</th>
							</tr>
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
				<tr class="table_row">
										<td class="column-1">
											<div class="how-itemcart1">
												<img src="images/<?= $objResult["Picture"]; ?>" alt="IMG">
											</div>
										</td>
										
										<td class="column-2"><?= $objResult["ProductName"]; ?></td>
										<td class="column-3"><?= $objResult["Price"]; ?></td>
										<td class="column-4">
											<div class="wrap-num-product flex-w m-l-auto m-r-0">
												<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-minus"></i>
												</div>

												<input class="mtext-104 cl3 txt-center num-product" type="number" name="txtQty<?php echo $i; ?>" value="<?php echo $_SESSION["strQty"][$i]; ?>">

												<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
													<i class="fs-16 zmdi zmdi-plus"></i>
												</div>
											</div>
										</td>
										<td class="column-5"> ฿ <?= number_format($Total, 2); ?></td>
										<td class="column-5"><a href="delete.php?Line=<?= $i; ?>"><i class="fa fa-window-close" style="font-size:30px;color:red"></i></a></td>
									</tr>
							<?php
								}
							}
							?>

						</table>
					</div>

					<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						<div class="flex-w flex-m m-r-20 m-tb-5">

							<input class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5" type="submit" value="Update">

						</div>
						</form>
						<a class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5"  href="index.php">ซื้อสินค้าต่อ</a>
						<?php
						if ($SumTotal > 0) {
						?>
							 <a class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5"  href="checkout.php">สั่งซื้อ</a>
					
				<?php
						}
				?>
				<?php
				mysqli_close($objCon);
				?>

				</div>
			</div>
		</div>

		<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
			<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
				<h4 class="mtext-109 cl2 p-b-30">
					Cart Totals
				</h4>

				<div class="flex-w flex-t bor12 p-b-13">
					<div class="size-208">
						<span class="stext-110 cl2">
							ค่าส่ง :
						</span>
					</div>

					<div class="size-209">
						<span class="mtext-110 cl2">
							฿50
						</span>
					</div>
				</div>

				

				<div class="flex-w flex-t p-t-27 p-b-33">
					<div class="size-208">
						<span class="mtext-101 cl2">
							Total:
						</span>
					</div>

					<div class="size-209 p-t-1">
						<span class="mtext-110 cl2">
							<?php echo number_format($SumTotal+50, 2); ?>
						</span>
					</div>
				</div>

				<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
					Proceed to Checkout
				</button>
			</div>
		</div>
	</div>
	</div>


	<?php include_once 'footer.php'; ?>