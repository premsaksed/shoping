
<?php
include_once 'connect.php';
include_once 'con.php';
include_once 'head.php';

$strSQL = "SELECT * FROM orders WHERE OrderID = '" . $_GET["OrderID"] . "' ";
$objQuery = mysqli_query($con, $strSQL);
$objResult = $objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>
<div class="mt-5 mx-5" align="center">

  <table   width="50%" border="0">
    <tr>
      <td width="40%">รหัสใบเสร็จ</td>
      <td >
        <?= $objResult["OrderID"]; ?></td>
    </tr>
    <tr>
      <td width="40%">ชื่อ</td>
      <td >
        <?= $objResult["Name"]; ?></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><?= $objResult["Address"]; ?></td>
    </tr>
    <tr>
      <td>เบอร์โทร์</td>
      <td><?= $objResult["Tel"]; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?= $objResult["Email"]; ?></td>
    </tr>
  </table>
</div>
<br>
<div class="mt-5 mx-5" align="center">
  <table class="table" width="400" border="0">
    <tr>
      <td width="101">รหัสสินค้า</td>
      <td width="82">ชื่อสินค้า</td>
      <td width="82">ราคา</td>
      <td width="79">จำนวน</td>
      <td width="79">ราคารวม</td>
    </tr>
    <?php

    $Total = 0;
    $SumTotal = 0;

    $strSQL2 = "SELECT * FROM orders_detail WHERE OrderID = '" . $_GET["OrderID"] . "' ";
    $objQuery2 = mysqli_query($con, $strSQL2);

    while ($objResult2 = mysqli_fetch_array($objQuery2, MYSQLI_ASSOC)) {
      $strSQL3 = "SELECT * FROM product WHERE ProductID = '" . $objResult2["ProductID"] . "' ";
      $objQuery3 = mysqli_query($con, $strSQL3);
      $objResult3 = $objResult = mysqli_fetch_array($objQuery3, MYSQLI_ASSOC);
      $Total = $objResult2["Qty"] * $objResult3["Price"];
      $SumTotal = $SumTotal + $Total;
    ?>
      <tr>
        <td><?= $objResult2["ProductID"]; ?></td>
        <td><?= $objResult3["ProductName"]; ?></td>
        <td><?= $objResult3["Price"]; ?></td>
        <td><?= $objResult2["Qty"]; ?></td>
        <td><?= number_format($Total, 2); ?></td>
      </tr>
    <?php
    }
    ?>
  </table>

  <div align="right">
    ราคาสุทธิ <?php echo number_format($SumTotal, 2); ?>
  <br>
  <br>
  </div>
</div>
<?php
mysqli_close($con);
?>
</body>

</html>

<?php include_once 'footer.php';
?>

