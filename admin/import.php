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
                  <h3 class="font-weight-bold">Import Emails</h3>
                  <h6 class="font-weight-normal mb-0">Import emails from a SQL file.</h6>
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
                  <h4 class="card-title">Import Users</h4>
                  <p class="card-description">
                    Import users from sql file.
                  </p>
                  <p class="text-danger">
                    The format of the SQL should be in:
                  </p>
                    <pre>INSERT INTO `users` (`username`, `email`, `firstname`, `lastname`, `contact_info`) VALUES <br>('username_value', 'email_value', 'firstname_value', 'lastname_value', 'phonenumber_value');</pre>
                  <p class="text-danger">
                    This format is to be followed for smooth importing. Download a sample of the SQL file <a href="sample/sample.sql" download>here</a>.
                  </p>
                  <form class="forms-sample" action="import-action" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-md-12">
                          <label>Select File</label>
                            <input type="file" name="database" class="form-control" accept="" required>
                        </div>
                    </div>
                    <button type="submit" name="import" class="btn btn-primary btn-rounded mr-2 btn-icon-text">
                      <i class="ti-upload btn-icon-prepend"></i>
                      Import
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/admins_modal.php'; ?>
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

    $(document).on('click', '.photo', function(e){
      e.preventDefault();
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
      url: 'admin_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.userid').val(response.id);
        $('#edit_email').val(response.email);
        $('#edit_password').val(response.password);
        $('#edit_firstname').val(response.firstname);
        $('#edit_lastname').val(response.lastname);
        $('#edit_username').val(response.username);
        $('#edit_address').val(response.address);
        $('#edit_contact').val(response.contact_info);
        $('.fullname').html(response.firstname+' '+response.lastname);
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
    });
  </script>
</body>

</html>
