<?php
include_once 'head.php';
include_once 'con.php';
?>
 <?php
  $id = $_SESSION["UserID"];
              $sql = "SELECT * FROM orders Where User_ID = $id ";
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
                      <th>ชื่อผู้สั่งซื้อ</th>
                      <th style="width: 200px">วันที่</th>
                      <th >สถานะการส่ง</th>
                      <th >หมายเลขพัสดุ</th>
                      <th >ยืนยันการชำระเงิน</th>
                    </tr>
                  </thead>
                  <?php while($row = $result->fetch_assoc()) {
                //   echo "id: " . $row["OrderID"]. " - Name: " . $row["OrderDate"]. " " . $row["Name"]. "<br>";
                
                ?>
                  <tbody>
                    <tr>
                      <td><a href="View.php?OrderID=<?php echo $row["OrderID"];?>"><?php echo $row["OrderID"]; ?></a></td>
                      <td><?php echo $row["Name"]; ?></td>
                      <td><?php echo $row["OrderDate"]; ?></td>
                      <td><?php $Status=$row["Status"]; if($Status==0){echo 'ยังไม่ส่ง';}else{echo'จัดส่งแล้ว';} ?> </td>
                      <td><?php echo $row["track"]; ?></td>
                      <td><?php $money=$row["money"]; if($money==1){echo 'ชำระเงินแล้ว';}else{?> <a href="money.php?OrderID=<?php echo $row["OrderID"];?>">ยืนยันการชำระเงิน</a> <?php } ?></td>
                     
                    </tr>
                   <?php }
              } else {
                echo "0 results";
              }
              $con->close(); ?>
                  </tbody>
                </table>

<?php
include_once 'footer.php';
?>
