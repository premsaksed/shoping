<?php session_start();?>
<?php 
$OrderID = $_GET['OrderID'];

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
            <h1 class="m-0">รับออเดอร์</h1>
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
    <?php 
    $sql = "SELECT * FROM orders WHERE OrderID =$OrderID";
    $result = $con->query($sql);
    ?>
    
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
             <?php
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["orders"]. " - Name: " . $row["Name"]. " " . $row["Address"]. "<br>";
      ?>
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ใส่ track <small>หมายเลขพัสดุของคุณ <?php echo $row["Name"]; ?></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="update_track.php" method="post" id="quickForm">
             
              <div class="card-body">
                  <div class="form-group">
                  <label>หมายเลขคำสั่งซื้อ <?php echo $row["OrderID"]; ?></label> 
                  <br>
                  <label >หมายเลขพัสดุ</label>
                    <input type="text" name="track" class="form-control" placeholder="Enter track">
                    <input type="hidden" name="OrderID" class="form-control" value="<?php echo $row["OrderID"]; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
           <?php    }
    } else {
      echo "0 results";
    }
    $con->close();

   ?>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    </div>
<?php include_once 'footer.php'; }
?>