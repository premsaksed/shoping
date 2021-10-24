<?php
include_once 'head.php';
$OrderID = $_GET['OrderID'];
$iduser = $_SESSION['UserID'];
?>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-12">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <br><br><br>
              <h3 class="login-heading mb-4">ยืนยันการชำระเงิน</h3>

              <!-- Sign In Form -->
              <form action="insert_money.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" name="OrderID" value="<?php echo $OrderID; ?>" class="form-control" id="floatingInput" placeholder="">
                  <input type="hidden" name="ID_user" value="<?php echo $iduser; ?>" class="form-control" id="floatingInput" placeholder="">
                  <label for="floatingInput">รหัสใบเสร็จ</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="date" name="date"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">วันที่โอน</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="time"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">เวลาโอน</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" name="money"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">จำนวนเงิน</label>
                </div>
                
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">ส่ง</button>
                 
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include_once 'footer.php';
?>