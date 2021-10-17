<?php
include_once 'head.php';
?>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-12">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">สมัครสมาชิก</h3>

              <!-- Sign In Form -->
              <form action="insert_user.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" name="Username" class="form-control" id="floatingInput" placeholder="">
                  <label for="floatingInput">ชื่อผู้ใช้งาน</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="Password"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">รหัสผ่าน</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="Firstname"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">ชื่อ</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="Lastname"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">นามสกุล</label>
                </div>
                
                  <input type="hidden" name="Userlevel" value="M" class="form-control" id="floatingPassword" placeholder="Password">
                 
                
                <div class="form-floating mb-3">
                  <input type="text" name="Address"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">ที่อยู่</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="Tel"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">เบอร์</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="Email"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Email</label>
                </div>
                <a href="rg.php"></a>

              

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Register</button>
                 
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