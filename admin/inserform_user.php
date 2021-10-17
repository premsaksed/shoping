<?php session_start(); ?>
<?php
$OrderID = $_GET['OrderID'];

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
                        <h1 class="m-0">เพิ่มผู้ใช้งาน</h1>
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
                                <h3 class="card-title"> เพิ่มผู้ใช้งาน </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="insert_user.php" method="post" id="quickForm">
                                <!-- ID
Username 
Password 
Firstname 
Lastname 
Userlevel 
Address 
Tel
Email -->

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>ชื่อผู้ใช้</label>
                                        <input type="text" name="Username" class="form-control" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label>รหัสผ่าน</label>
                                        <input type="Password" name="Password" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label>ชื่อ</label>
                                        <input type="text" name="Firstname" class="form-control" placeholder="Enter Firstname">
                                    </div>
                                    <div class="form-group">
                                        <label>นามสกุล</label>
                                        <input type="text" name="Lastname" class="form-control" placeholder="Enter Lastname">
                                    </div>
                                    <div class="form-group">
                                        <label  for="disabledSelect" class="form-label">Status</label>
                                        <select name="Userlevel" id="disabledSelect" class="form-control">
                                            <option value="A">ADMIN</option>
                                            <option value="M">MEMBER</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>ที่อยู่</label>
                                        <input type="text" name="Address" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label>เบอร์</label>
                                        <input type="text" name="Tel" class="form-control" placeholder="Enter Tel">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="Email" class="form-control" placeholder="Enter Email">
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