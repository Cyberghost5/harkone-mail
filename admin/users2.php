<?php include 'include/session.php'; ?>
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
                  <h3 class="font-weight-bold">Users</h3>
                  <h6 class="font-weight-normal mb-0">Check out all users who are on this platform.</h6>
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users</h4>
                  <p class="card-description">
                    List of all users
                  </p>

                  <?php
                  $stmt_check_dub = $conn->prepare("SELECT email, COUNT(*) AS numrows FROM users WHERE type = 0 GROUP BY email HAVING COUNT(*) > 1");
                  $stmt_check_dub->execute();

                  $total_dub = 0;
                  foreach ($stmt_check_dub as $ruf) {
                    $subtotal_dub = $ruf['numrows'];
                    $total_dub += $subtotal_dub;
                    echo ', '.$ruf['email'].' - '.$ruf['numrows'].' times';
                  }

                  // $dub_user = $stmt_check_dub->fetch();

                  if ($total_dub > 1) {
                    echo '<p class="text-danger">You have '.$total_dub.' dublicate emails in your users DB <form action="delete-dub" method="post"><button type="submit" name="delete" class="btn btn-sm btn-warning">Remove Dublicates</button></form><br></p>';
                  }
                  ?>
                  

                  <div class="table-responsive">
                    <a href="#addnew1" data-toggle="modal" class="btn btn-primary btn-sm btn-flat mb-3"><i class="mdi mdi-plus"></i> New</a>
                    <a href="#export" data-toggle="modal" class="btn btn-primary btn-sm btn-flat mb-3"><i class="mdi mdi-upload"></i> Export all as CSV</a>
                    <a href="#verifyall" data-toggle="modal" class="btn btn-success btn-sm btn-flat mb-3 float-right"><i class="mdi mdi-check"></i> Verify all users</a>
                    <table class="table table-striped" id="example3">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Date Added</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $conn = $pdo->open();
                        try{
                          $stmt = $conn->prepare("SELECT * FROM users");
                          $stmt->execute();
                          $users = $stmt->fetchAll();
                          $i = 0;

                          $totalUsers = count($users);
                          $usersPerPage = 1000;

                          // Get the current page from the URL, default to 1 if not set
                          $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                          // Calculate the offset to retrieve the correct chunk of users
                          $offset = ($current_page - 1) * $usersPerPage;

                          // Get the users for the current page
                          $currentPageUsers = array_slice($users, $offset, $usersPerPage);
                          // var_dump($currentPageUsers);
                          foreach($currentPageUsers as $row){
                            $i++;
                            if ($row['status'] == 0) {
                              $status = '<span class="badge badge-warning">Not Verified</span>';
                              $active = '<span class="pull-right"><a href="#activate1" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="mdi mdi-check"></i></a></span>';
                              // echo '<span class="badge badge-warning">Pending</span>';
                            }
                            if ($row['status'] == 1) {
                              $status = '<span class="badge badge-success">Active</span>';
                              $active = '<span class="pull-right"><a href="#block" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="mdi mdi-block-helper"></i></a></span>';
                              // echo '<span class="badge badge-success">Successfull</span>';
                            }
                            if ($row['status'] == 2) {
                              $status = '<span class="badge badge-danger">Blocked</span>';
                              $active = '<span class="pull-right"><a href="#unblock" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="mdi mdi-block-helper"></i></a></span>';
                              // echo '<span class="badge badge-danger">Rejected</span>';
                            }
                            if ($row['firstname'] == '' && $row['lastname'] == '') {
                              $fullname = '<span class="text-info">'.$row['username'].'</span>';
                            }else{
                              $fullname = $row['firstname'].' '.$row['lastname'];
                            }
                            // $status = ($row['status']) ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Not Verified</span>';
                            // $active = (!$row['status']) ? '<span class="pull-right"><a href="#activate1" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="mdi mdi-check"></i></a></span>' : '';
                            echo "
                            <tr data-widget='expandable-table' aria-expanded='false'>
                              <td>".$i."</td>
                              <td>".$fullname."</td>
                              <td>".$row['email']."</td>
                              <td>".$status." ".$active."</td>
                              <td>".date('M d, Y', strtotime($row['created_on']))."</td>
                              <td>
                                <a href='users-details?userid=".$row['id']."' target='_blank' class='btn btn-info btn-sm btn-flat mr-3'><i class='mdi mdi-eye'></i> View Logs</a>
                                <button class='btn btn-danger btn-sm delete btn-rounded' data-id='".$row['id']."'><i class='mdi mdi-delete'></i> Delete</button>
                              </td>
                            </tr>
                        ";
                            }
                          }
                          catch(PDOException $e){
                            echo $e->getMessage();
                          }

                          $pdo->close();
                        ?>
                      </tbody>
                    </table>
                    <?php
                    $totalPages = ceil($totalUsers / $usersPerPage);
                    // echo 'Showing '.$totalPages.' to '.$usersPerPage.' of '.$totalUsers;
                    for ($i = 1; $i <= $totalPages; $i++) {
                        // echo '<a href="?page=' . $i . '">' . $i . '</a> ';
                    }
                    ?>
                    <!-- <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                      <div class="row">
                        <div class="col-sm-12 col-md-5">
                          <div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 51 to 60 of 1,000 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                          <div class="dataTables_paginate paging_simple_numbers" id="example3_paginate">
                            <ul class="pagination">
                              <li class="paginate_button page-item previous" id="example3_previous"><a href="#" aria-controls="example3" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="1" tabindex="0" class="page-link">1</a></li> 
                              <li class="paginate_button page-item disabled" id="example3_ellipsis"><a href="#" aria-controls="example3" data-dt-idx="2" tabindex="0" class="page-link">…</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="3" tabindex="0" class="page-link">5</a></li>
                              <li class="paginate_button page-item active"><a href="#" aria-controls="example3" data-dt-idx="4" tabindex="0" class="page-link">6</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="5" tabindex="0" class="page-link">7</a></li>
                              <li class="paginate_button page-item disabled" id="example3_ellipsis"><a href="#" aria-controls="example3" data-dt-idx="6" tabindex="0" class="page-link">…</a></li>
                              <li class="paginate_button page-item "><a href="#" aria-controls="example3" data-dt-idx="7" tabindex="0" class="page-link">100</a></li>
                              <li class="paginate_button page-item next" id="example3_next"><a href="#" aria-controls="example3" data-dt-idx="8" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/users_modal.php'; ?>
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

    $(document).on('click', '.delete', function(e){
      e.preventDefault();
      $('#delete1').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.status', function(e){
      e.preventDefault();
      var id = $(this).data('id');
      getRow(id);
    });

  });

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: 'user_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.userid').val(response.id);
        $('#edit_email').val(response.email);
        $('#edit_balance').val(response.balance);
        $('#edit_password').val(response.password);
        $('#edit_firstname').val(response.firstname);
        $('#edit_lastname').val(response.lastname);
        $('#edit_address').val(response.address);
        $('#edit_contact').val(response.contact_info);
        $('.fullname').html(response.firstname+' '+response.lastname);
      }
    });
  }
  </script>
  <script>
    $(function () {
      $('#example3').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
