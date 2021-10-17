<?php session_start();?>
<?php 
include_once '../con.php';
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
            <h1 class="m-0">จัดจัดส่งแล้ว</h1>
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
    <div>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <?php
              $sql = "SELECT money.OrderID,user.Firstname,user.Lastname ,money.date ,money.time,money.money,money.Status
              FROM money INNER JOIN user ON money.ID_user = user.ID";
              $result = $con->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                
              ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <th style="width: 30px">#</th>
                    <th >เลขที่คำสั่งซื้อ</th>
                      <th>ชื่อผู้สั่งซื้อ</th>
                      <th style="width: 200px">วันที่โอน</th>
                      <th >เวลาโอน</th>
                      <th >จำนวนเงิน</th>
                      <th >สถานะ</th>
                    </tr>
                  </thead>
                  <?php while($row = $result->fetch_assoc()) {
                //   echo "id: " . $row["OrderID"]. " - Name: " . $row["OrderDate"]. " " . $row["Name"]. "<br>";
                
                ?>
                  <tbody>
                    <tr>
                    <td><?php $run = $run+1;  echo $run; ?></td>
                    <td><?php echo $row["OrderID"]; ?></td>
                      <td><?php echo $row["Firstname"].' '.$row["Lastname"]; ?></td>
                      <td><?php echo $row["date"]; ?></td>
                      <td><?php echo $row["time"]; ?></td>
                      <td><?php echo $row["money"]; ?></td>
                      <td><?php $Status=$row["Status"]; 
                      if ($Status==0){
                        echo 'ยังไม่อนุมัติ';
                      ?>  <form action="approve.php" method="post">
                          <input type="hidden" name="OrderID" value="<?php echo $row["OrderID"]; ?>">
                          <button type="submit">อนุมัติ</button>
                      </form>
                      <?php
                       
                      }else {
                        echo 'อนุมัติแล้ว';
                      }
                       ?></td>
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
</div>
<?php include_once 'footer.php'; }
?>