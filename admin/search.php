<?php 
include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
  <?php $search = $_POST['search']; ?>
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
                  <h3 class="font-weight-bold">Search</h3>
                  <h6 class="font-weight-normal mb-0">View users relating to "<?php echo $search; ?>"</h6>
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
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <h3>Search Results</h3>
                    <table class="table table-striped table-borderless" id="example3">
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
                          $stmt = $conn->prepare
                          ("SELECT * FROM users WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC");
                          $stmt->execute();
                          $i = 0;
                          foreach($stmt as $row){
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
    $(function () {
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
