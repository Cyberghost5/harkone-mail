<?php 
include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'includes/navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include 'includes/settings.php'; ?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'includes/sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?php echo $admin['username'];?>,</h3>
                  <h6 class="font-weight-normal mb-0">This is the Admin Panel, You're the boss! 😎🙌</h6>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <?php
                if(isset($_SESSION['error'])){
                  echo "
                    <div class='alert alert-danger alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4><i class='icon mdi mdi-close'></i>Error!</h4>
                      ".$_SESSION['error']."
                    </div>
                  ";
                  unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                  echo "
                    <div class='alert alert-success alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4><i class='icon mdi mdi-check'></i> Success!</h4>
                      ".$_SESSION['success']."
                    </div>
                  ";
                  unset($_SESSION['success']);
                }
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="<?php echo $settings['site_url']; ?>images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <img src="images/cloud.png" class="img-fluid mb-0" alt="img" height="10" width="10">
                      <div>
                        <h2 class="mb-0 font-weight-normal">31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Lagos</h4>
                        <h6 class="font-weight-normal">NG</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="card-title text-white">Website Visitors</p>
                      <div class="row">
                        <div class="col-8 text-white">
                          <?php
                            echo "<h3>".number_format_short(1500)."</h3>";
                          ?>
                        </div>
                        <div class="col-4">
                          <i class="icon-lg mdi mdi-eye"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="card-title text-white">API Balance</p>
                      <div class="row">
                        <div class="col-8 text-white">
                          <?php
                          echo "<h3>" . $settings['currency'] . number_format(334334) . "</h3>";
                          ?>
                        </div>
                        <div class="col-4">
                          <i class="icon-lg mdi mdi-wallet"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="card-title text-white">Users</p>
                      <div class="row">
                        <div class="col-8 text-white">
                          <?php
                            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE type=0");
                            $stmt->execute();
                            $urow =  $stmt->fetch();

                            echo "<h3>".number_format_short($urow['numrows'])."</h3>";
                          ?>
                        </div>
                        <div class="col-4">
                          <i class="icon-lg mdi mdi-account-multiple"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="card-title text-white">Admins</p>
                      <div class="row">
                        <div class="col-8 text-white">
                          <?php
                            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE type=1");
                            $stmt->execute();
                            $urow =  $stmt->fetch();

                            echo "<h3>".number_format_short($urow['numrows'])."</h3>";
                          ?>
                        </div>
                        <div class="col-4">
                          <i class="icon-lg mdi mdi mdi-account-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Latest Members</p>
                  <ul class="icon-data-list">
                    <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM users WHERE type = 0 ORDER BY id DESC LIMIT 5");
                      $stmt->execute();
                      $i = 0;
                      foreach($stmt as $row){
                        $i++;
                        $image = 'admin/images/profile.jpg';
                        $status = ($row['status']) ? '<span class="text-success">Verified</span>' : '<span class="text-danger">Not Verified</span>';
                        echo "
                        <li>
                          <div class='d-flex'>
                            <img src='".$settings['site_url']."".$image."' alt='user'>
                            <div>
                              <p class='text-info mb-1'><a class='users-list-name' href='users-details?userid=".$row['id']."'>".$row['firstname']." ".$row['lastname']."</a></p>
                              <p class='mb-0'>User joined ".date('d M, Y', strtotime($row['created_on']))."</p>
                              <small>Status - ".$status."</small>
                            </div>
                          </div>
                        </li>
                        ";
                        }
                      }
                      catch(PDOException $e){
                        echo $e->getMessage();
                      }

                      $pdo->close();
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'includes/footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include 'includes/scripts.php'; ?>
  <script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
