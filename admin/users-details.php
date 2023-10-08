<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<?php
  $conn = $pdo->open();

//   $userid = $_GET['userid'] || $_GET['id'];
  if(isset($_GET['userid'])){
      $userid = $_GET['userid'];
  }elseif(isset($_GET['id'])){
      $userid = $_GET['id'];
  }

  try{

      $stmt = $conn->prepare("SELECT * FROM users WHERE id = :userid");
      $stmt->execute(['userid' => $userid]);
      $user = $stmt->fetch();

  }
  catch(PDOException $e){
    echo "There is some problem in connection: " . $e->getMessage();
  }
  $pdo->close();
?>
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
                  <h3 class="font-weight-bold">Users</h3>
                  <h6 class="font-weight-normal mb-0">User Profile for ID: <?php echo $user['id']; ?></h6>
                  <p>Date joined: <?php echo $user['created_on']; ?></p>
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

                if ($user['status'] == 0) {
                  $mark = 'mdi mdi-checkbox-marked-circle-outline text-warning';
                  $status = '<span class="badge badge-warning">Not Verified</span>';
                  $active = '<span class="float-right"><a href="#activate1" class="status" data-toggle="modal" data-id="'.$user['id'].'"><i class="mdi mdi-check"></i></a></span>';
                  $block = '<a href="#activate1" data-toggle="modal" data-id="'.$user['id'].'" class="btn btn-success btn-rounded btn-block"><b><i class="mdi mdi-check"></i> Verify User</b></a>';
                  // echo '<span class="badge badge-warning">Pending</span>';
                }
                if ($user['status'] == 1) {
                  $mark = 'mdi mdi-checkbox-marked-circle-outline text-success';
                  $status = '<span class="badge badge-success">Active</span>';
                  $block = '<a href="#block" data-toggle="modal" data-id="'.$user['id'].'" class="btn btn-danger btn-rounded btn-block"><b><i class="mdi mdi-block-helper"></i> Block User</b></a>';
                  // echo '<span class="badge badge-success">Successfull</span>';
                }
                if ($user['status'] == 2) {
                  $mark = 'mdi mdi-checkbox-marked-circle-outline text-danger';
                  $status = '<span class="badge badge-danger">Blocked</span>';
                  $active = '<span class="float-right"><a href="#unblock" class="status" data-toggle="modal" data-id="'.$user['id'].'"><i class="mdi mdi-check"></i></a></span>';
                  $block = '<a href="#unblock" data-toggle="modal" data-id="'.$user['id'].'" class="btn btn-warning btn-rounded btn-block"><b><i class="mdi mdi-block-helper"></i> Unblock User</b></a>';
                  // echo '<span class="badge badge-danger">Rejected</span>';
                }
              ?>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle mb-4" src="<?php echo $settings['site_url']; echo 'admin/images/profile.jpg'; ?>" alt="User profile picture">
                  </div>

                  <h3 class="profile-username text-center"><?php echo $user['username'];?><sup><i class="<?php echo $mark; ?>" style="font-size:10px;"></i></sup> </h3>

                  <p class="text-muted text-center"><?php echo $user['firstname'].' '.$user['lastname']; ?></p>

                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Status</b> <span class="float-right"> <?php echo $status; ?></span>
                    </li>
                  </ul>
                  <?php echo $block; ?>
                </div>
              </div>
            </div>
            <div class="col-md-9 grid-margin transparent">
              <div class="demo-tabs">

                <div data-pws-tab="profile" data-pws-tab-name="Profile">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" value="<?php echo $user['username']; ?>" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                      <div class="col-sm-5">
                        <input type="text" value="<?php echo $user['firstname']; ?>" class="form-control" id="inputName" placeholder="Name">
                      </div>
                      <div class="col-sm-5">
                        <input type="text" value="<?php echo $user['lastname']; ?>" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" value="<?php echo $user['email']; ?>" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Phone No.</label>
                      <div class="col-sm-10">
                        <input type="tel" value="<?php echo $user['contact_info']; ?>" class="form-control" id="inputName2" placeholder="Name">
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'includes/footer.php'; ?>

          <div class="modal fade" id="activate1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title"><b>Verifing...</b></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="user_activate">
                      <input type="hidden" value="<?php echo $user['id']; ?>"  name="id">
                      <div class="text-center">
                        <p>VERIFY USER</p>
                        <h2 class="bold"><?php echo $user['username']; ?></h2>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                      <button type="submit" class="btn btn-warning btn-rounded" name="activate"><i class="mdi mdi-check"></i> Activate</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Unblock -->
            <div class="modal fade" id="unblock">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title"><b>Unblocking...</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method="POST" action="user_unblock">
                        <input type="hidden" value="<?php echo $user['id']; ?>"  name="id">
                        <div class="text-center">
                          <p>UNBLOCK USER</p>
                          <h2 class="bold"><?php echo $user['username']; ?></h2>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                        <button type="submit" class="btn btn-warning btn-rounded" name="unblock"><i class="mdi mdi-block-helper"></i> Unblock</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Block -->
              <div class="modal fade" id="block">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title"><b>Blocking...</b></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="user_block">
                          <input type="hidden" value="<?php echo $user['id']; ?>"  name="id">
                          <div class="text-center">
                            <p>BLOCK USER</p>
                            <h2 class="bold"><?php echo $user['username']; ?></h2>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default btn-rounded pull-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Close</button>
                          <button type="submit" class="btn btn-warning btn-rounded" name="block"><i class="mdi mdi-block-helper"></i> Block</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php include 'includes/scripts.php'; ?>
  <script>
  $(function(){

    $(document).on('click', '.edit', function(e){
      e.preventDefault();
      $('#edit').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

  });
  </script>
  <script>
    $(function () {
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
      $('#example3').DataTable({
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
