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
                  <h3 class="font-weight-bold">Error Logs</h3>
                  <h6 class="font-weight-normal mb-0">List of all Error Logs.</h6>
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
                  <h4 class="card-title">Error Logs</h4>
                  <p class="card-description">
                    All active Error Logs on <?php echo $settings['site_name']; ?>
                  </p>
                  <a href="#deleteall" data-toggle="modal" class="btn btn-danger btn-sm btn-rounded mb-3 deleteall float-right m-2"><i class="mdi mdi-delete"></i> Delete All</a>
                  <a href="#readall" data-toggle="modal" class="btn btn-info btn-sm btn-rounded mb-3 readall float-left m-2"><i class="mdi mdi-check"></i> Mark All as Read</a><br>
                  <div class="table-responsive">
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Type</th>
                          <th>Trx. ID</th>
                          <th>User</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $conn = $pdo->open();

                        try{
                          $stmt = $conn->prepare("SELECT * FROM error_logs ORDER BY id DESC");
                          $stmt->execute();
                          $i = 0;
                          foreach($stmt as $row){
                            if ($row['status'] == 0) {
                              $status = '<div class="badge badge-warning">Inactive</div>';
                              // echo '<div class="badge badge-warning">Pending</div>';
                            }
                            if ($row['status'] == 1) {
                              $status = '<div class="badge badge-success">Active</div>';
                              // echo '<div class="badge badge-success">Successfull</div>';
                            }
                            $i++;
                            $image = (!empty($row['image'])) ? 'assets/images/ecards/'.$row['image'] : 'assets/images/ecards/profile.jpg';
                            echo "
                            <tr>
                              <td>".$i."</td>
                              <td>".$row['type']."</td>
                              <td>".$row['order_id']."</td>
                              <td><a href='users-details?userid=".$row['userid']."' class='btn btn-info btn-sm btn-flat' target='_blank' data-id='".$row['id']."'><i class='mdi mdi-eye'></i> View</a></td>
                              <td><a href='#details' data-toggle='modal' class='btn btn-secondary btn-sm btn-flat details' data-id='".$row['id']."'><i class='mdi mdi-eye'></i> View</a></td>
                              <td>
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
        <?php include 'includes/error_modal.php'; ?>
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

    $(document).on('click', '.deleteall', function(e){
      e.preventDefault();
      $('#deleteall').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.readall', function(e){
      e.preventDefault();
      $('#readall').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.delete', function(e){
      e.preventDefault();
      $('#delete1').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.details', function(e){
      e.preventDefault();
      var id = $(this).data('id');
      getRow(id);
    });


  });

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: 'error_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.userid').val(response.id);
        $('#type').html(response.type);
        $('#order_id').html(response.order_id);
        $('#useridi').html(response.userid);
        $('#datetime').html(response.datetime);
        $('#amount').html(response.amount);
        $('#desc').html(response.status_message);
        $('.fullname').html(response.type);
        var link = "users-details?userid="+response.userid;
        $('#speak').attr('href', link);
      }
    });
  }
  </script>
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
