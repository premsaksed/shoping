<?php session_start(); ?>
<?php 
include_once 'head.php';
include_once 'con.php';
?>
<body>

<div class="mt-3" align="center">
    ซื้อสินค้าเสร็จสิ้น <br><br>
<a class="btn btn-success" href="myorder.php">ดูคำสั่งซื้อ</a>
<!-- <a class="btn btn-success" href="View_order.php?OrderID=<?php echo $_GET["OrderID"];?>">ดูคำสั่งซื้อ</a> -->
</div>
<br><br>
</body>
</html>

<?php 
include_once 'footer.php';
 ?>