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
            <h1 class="m-0">จัดผู้ใช้งาน</h1>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <?php
              $sql = "SELECT * FROM user ";
              $result = $con->query($sql);
              
              if ($result->num_rows > 0) {
                // output data of each row
                
              ?>
               <a class="btn btn-success mx-3 mt-3" href="inserform_user.php"> เพิ่มสินค้า </a>
             
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Username</th>
                      <th style="width: 200px">ชื่อ</th>
                      <th >สถานะผู้ใช้</th>
                      <th >ที่อยู่</th>
                      <th >แก้ไข</th>
                      <th >ลบ</th>
                    </tr>
                  </thead>
                  <?php while($row = $result->fetch_assoc()) {
                //   echo "id: " . $row["OrderID"]. " - Name: " . $row["OrderDate"]. " " . $row["Name"]. "<br>";
                
                ?>
                  <tbody>
                    <tr>
                      <td><?php $num = $num+1; echo $num ?></td>
                      <td><?php echo $row["Username"]; ?></td>
                      <td><?php echo $row["Firstname"].' '.$row["Lastname"]; ?></td>
                      <td><?php echo $row["Userlevel"]; ?></td>
                      <td><?php echo $row["Address"]; ?></td>
                      <td><a href="updateform_user.php?ID=<?php echo $row["ID"];?>" ><button class="btn  btn-info btn-sm">แก้ไข</button></a></td> 
                      <td><a href="del_user.php?ID=<?php echo $row["ID"];?>" ><button class="btn  btn-danger btn-sm">ลบ</button></a></td> 
                 
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