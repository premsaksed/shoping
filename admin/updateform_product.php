<?php session_start(); ?>
<?php
$ProductID = $_GET['ProductID'];

if (!$_SESSION["UserID"]) {  //check session

    Header("Location: ../index.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

} else {
    include_once 'head.php';
?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">เพิ่มสินค้า</h1>
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
                                <h3 class="card-title"> เพิ่มสินค้า </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="update_pro.php" method="post" id="quickForm">

                                <?php $result = $con->query("SELECT * FROM product where ProductID = $ProductID");
                                $row1 = $result->fetch_row();

                                ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>ชื่อสินค้า</label>
                                        <input type="hidden" name="ProductID" value="<?php echo $row1[0]; ?>" class="form-control" placeholder="Enter ProductName">
                                        <input type="text" name="ProductName" value="<?php echo $row1[1]; ?>" class="form-control" placeholder="Enter ProductName">
                                    
                                    </div>
                                    <div class="form-group">
                                        <label>รายละเอียด</label>
                                        <input type="text" name="detailed" value="<?php echo $row1[4]; ?>" class="form-control" placeholder="Enter detailed">
                                    </div>
                                    <div class="form-group">
                                        <label>ราคา</label>
                                        <input type="text" name="Price" value="<?php echo $row1[2]; ?>" class="form-control" placeholder="Enter Price">
                                    </div>
                                    <div class="form-group">
                                        <label>รูป</label>
                                        <!-- <input type="file" name="Picture" class="form-control" placeholder="Enter track"> -->
                                        <!-- <input type="file" name="filUpload" id="filUpload"> -->
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
<?php include_once 'footer.php';
}
?>