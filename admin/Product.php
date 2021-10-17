<?php session_start();?>
<?php 

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{
include_once 'head.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">จัดการสินค้า</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <a class="btn btn-success mx-3 mt-3" href="inserform_product.php"> เพิ่มสินค้า </a>
              <!-- /.card-header -->
              <?php
              $sql = "SELECT * FROM product ";
              $result = $con->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                
              ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>ชื่อสินค้า</th>
                      <th style="width: 200px">ราคา</th>
                      <th >รูป</th>
                      <th >แก้ไข</th>
                      <th >ลบ</th>
                    </tr>
                  </thead>
                  <?php while($row = $result->fetch_assoc()) {
                //   echo "id: " . $row["OrderID"]. " - Name: " . $row["OrderDate"]. " " . $row["Name"]. "<br>";
                
                ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row["ProductID"]; ?></td>
                      <td><?php echo $row["ProductName"]; ?></td>
                      <td><?php echo $row["Price"]; ?></td>
                      <td align="center"><img height="100" src="../img/<?php echo $row["Picture"]; ?>" alt=""></td>
                      <td><a href="updateform_product.php?ProductID=<?php echo $row["ProductID"];?>" ><button class="btn  btn-info btn-sm">แก้ไข</button></a></td> 
                      <td><a href="del_product.php?ProductID=<?php echo $row["ProductID"];?>" ><button class="btn  btn-danger btn-sm">ลบ</button></a></td> 
                    </tr>
                   <?php }
              } else {
                echo "0 results";
              }
              $con->close(); ?>
                  </tbody>
                </table>
              </div>
    </div>
<?php include_once 'footer.php'; }
?>