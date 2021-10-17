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
              <h3 class="login-heading mb-4">เปลี่ยนรหัสผ่าน</h3>

              <!-- Sign In Form -->
              <form action="uppass.php" method="post">
                
                <div class="form-floating mb-3">
                  <input type="hidden" name="ID"class="form-control" value="<?php echo $_SESSION['UserID']; ?>" >
                  <input type="password" name="Password"class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">รหัสผ่าน</label>
                </div>
            

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">เปลี่ยนรหัสผ่าน</button>
                 
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