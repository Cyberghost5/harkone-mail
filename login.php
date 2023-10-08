<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
$conn = $pdo->open();
try{
  $stmt = $conn->prepare("SELECT * FROM settings WHERE id = 1");
  $stmt->execute();
  $settings = $stmt->fetch();
}
catch(PDOException $e){
  echo "There is some problem in connection: " . $e->getMessage();
}
$pdo->close();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $settings['site_name']; ?> | Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo $settings['site_url']; ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo $settings['site_url']; ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo $settings['site_url']; ?>vendors/css/vendor.bundle.base.css">
  <link rel="manifest" href="<?php echo $settings['site_url']; ?>assets/img/favicons/manifest.php">
  <meta name="theme-color" content="<?php echo $settings['theme']; ?>">
  <meta name="msapplication-navbutton-color" content="<?php echo $settings['theme']; ?>">
  <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $settings['theme']; ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <?php if(isset($_COOKIE['mode']) == 'dark'): ?>
  <link rel="stylesheet" href="<?php echo $settings['site_url']; ?>css/vertical-layout-dark/style.php" type="text/css">
  <?php else: ?>
  <link rel="stylesheet" href="<?php echo $settings['site_url']; ?>css/vertical-layout-light/style.php" type="text/css">
  <?php endif; ?>
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo $settings['site_url']; ?>assets/images/<?php echo $settings['favicon']; ?>" />
</head>

<body>
<?php
	if(isset($_SESSION['user'])){
// 		header('location: user/home');
		echo "<script>window.location.assign('admin/home')</script>";
	}
 ?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <a href="<?php echo $settings['site_url']; ?>"><img src="<?php echo $settings['site_url'];?>assets/images/<?php echo $settings['logo_line'];?>" alt="logo"></a>
              </div>
              <h4>Hello! let's get started,</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php
                if(isset($_SESSION['error'])){
                  echo "
                    <div class='alert alert-danger fade show'>
                      <strong>Oops! 😕</strong> <br>".$_SESSION['error']."
                    </div>
                  ";
                  unset($_SESSION['error']);
                }
                if(isset($_SESSION['block'])){
                  echo "
                    <div class='alert alert-warning fade show'>
                      <strong>Oh-Uh! 😒</strong> <br>".$_SESSION['block']."
                    </div>
                  ";
                  unset($_SESSION['block']);
                }
                if(isset($_SESSION['warning'])){
                  echo "
                    <div class='alert alert-warning fade show'>
                      <strong>Hugh 😒</strong><br>".$_SESSION['warning']."
                    </div>
                  ";
                  unset($_SESSION['warning']);
                }
                if(isset($_SESSION['success'])){
                  echo "
                    <div class='alert alert-success fade show'>
                      <strong>Hurray 🥳</strong><br>".$_SESSION['success']."
                    </div>
                  ";
                  unset($_SESSION['success']);
                }
              ?>
              <form class="pt-3" action="verify" method="post" onsubmit="showProcess()">
                <?php

                if(isset($_SESSION['username'])){
                  echo "
                    <div class='form-group'>
                      <input type='text' value='".$_SESSION['username']."' class='form-control form-control-lg' name='username' id='exampleInputUsername1' placeholder='Username' required>
                    </div>
                  ";
                  unset($_SESSION['username']);
                }else {
                  echo "
                    <div class='form-group'>
                      <input type='text' class='form-control form-control-lg' name='username' id='exampleInputUsername1' placeholder='Username' required>
                    </div>
                  ";
                }
                 ?>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="mt-3" id="non_process">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login </button>
                </div>
                <div class="mt-3" style="display:none" id="process">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"><div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div></button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="forgot-password" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo $settings['site_url']; ?>vendors/js/vendor.bundle.base.js"></script>
  <script>
      function showProcess(){
        //   alert('Logining in');
          var foo = document.getElementById('process');
          var boo = document.getElementById('non_process');
          boo.style.display = 'none';
          foo.style.display = 'block';
      }
  </script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo $settings['site_url']; ?>js/off-canvas.js"></script>
  <script src="<?php echo $settings['site_url']; ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo $settings['site_url']; ?>js/template.js"></script>
  <script src="<?php echo $settings['site_url']; ?>js/settings.js"></script>
  <script src="<?php echo $settings['site_url']; ?>js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
