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
                  <h3 class="font-weight-bold">Accounts</h3>
                  <h6 class="font-weight-normal mb-0">List of all Accounts.</h6>
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
                  <h4 class="card-title">Accounts</h4>
                  <p class="card-description">
                    All active Accounts on <?php echo $settings['site_name']; ?>
                  </p>
                  <div class="table-responsive">
                    <a href="#addnew1" data-toggle="modal" class="btn btn-rounded btn-primary btn-sm mb-3"><i class="mdi mdi-library-plus"></i> New</a>
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Bank Name</th>
                          <th>Account Number</th>
                          <th>Name of Account</th>
                          <th>Short Code</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $conn = $pdo->open();

                        try{
                          $stmt = $conn->prepare("SELECT * FROM bank_accounts ORDER BY id DESC");
                          $stmt->execute();
                          $i = 0;
                          foreach($stmt as $row){
                            $i++;
                            echo "
                            <tr>
                              <td>".$i."</td>
                              <td>".$row['bank_name']."</td>
                              <td>".$row['account_number']."</td>
                              <td>".$row['name_of_account']."</td>
                              <td>".$row['short_code']."</td>
                              <td>
                                <button class='btn btn-success btn-sm edit btn-rounded' data-id='".$row['id']."'><i class='mdi mdi-pencil'></i> Edit</button>
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
        <?php include 'includes/account_modal.php'; ?>
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
      $('#edit1').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.delete', function(e){
      e.preventDefault();
      $('#delete1').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

  });

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: 'account_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.userid').val(response.id);
        $('#edit_bank_name').val(response.bank_name);
        $('#edit_account_number').val(response.account_number);
        $('#edit_name_of_account').val(response.name_of_account);
        $('#edit_short_code').val(response.short_code);
        $('.fullname').html(response.account_number);
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
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
