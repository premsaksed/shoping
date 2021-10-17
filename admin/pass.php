<?php session_start();?>
<?php 
$ID = $_GET['ID'];

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
            <h1 class="m-0">เปลี่ยนรหัสผ่าน</h1>
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
  
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ใส่รหัสผ่าน </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="uppass.php" method="post" id="quickForm">
             
              <div class="card-body">
                  <div class="form-group">
                  
                  <label >รหัสผ่านใหม่</label>
                    <input type="password" name="Password" class="form-control" placeholder="Enter Password">
                    <input type="hidden" name="ID" class="form-control" value="<?php echo $_SESSION["UserID"]; ?>">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        
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