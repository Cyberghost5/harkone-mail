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
                  <h3 class="font-weight-bold">Sent Mails</h3>
                  <h6 class="font-weight-normal mb-0">Emails that were sent.</h6>
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
                  <h4 class="card-title">Sent Mails</h4>
                  <p class="card-description">
                    All mails that was sent.
                  </p>
                  

                  <div class="table-responsive">
                    <a href="email" class="btn btn-primary btn-sm btn-flat mb-3"><i class="mdi mdi-plus"></i> New</a>
                    <table class="table table-striped" id="example3">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Subject</th>
                          <th>Details</th>
                          <th>Date Sent</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $conn = $pdo->open();
                        try{
                          $stmt = $conn->prepare("SELECT * FROM emails WHERE userid=:userid ORDER BY id DESC");
                          $stmt->execute(['userid'=>$admin['id']]);
                          $i = 0;
                          foreach($stmt as $row){
                            $i++;
                            // $status = ($row['status']) ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Not Verified</span>';
                            // $active = (!$row['status']) ? '<span class="pull-right"><a href="#activate1" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="mdi mdi-check"></i></a></span>' : '';
                            echo "
                            <tr data-widget='expandable-table' aria-expanded='false'>
                              <td>".$i."</td>
                              <td>".$row['subject']."</td>
                              <td><button class='btn btn-info btn-sm viewmessage btn-rounded' data-id='".$row['id']."'><i class='mdi mdi-eye'></i> View</button></td>
                              <td>".date('M d, Y - h:i:a', strtotime($row['date_sent']))."</td>
                              <td><button class='btn btn-success btn-sm resendmsg btn-rounded' data-id='".$row['id']."'><i class='mdi mdi-reload'></i> Resend</button></td>
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
        <?php include 'includes/email_modal.php'; ?>
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

    $(document).on('click', '.viewmessage', function(e){
      e.preventDefault();
      $('#viewmessage').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.resendmsg', function(e){
      e.preventDefault();
      $('#resendmsg').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

  });

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: 'email_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.userid').val(response.id);
        $('#edit_total_no').html(response.total_no);
        $('#edit_subject').html(response.subject);
        $('.subjectfa').html(response.subject);
        $('#edit_message').html(response.message);
        $('#edit_to_receipent').html(response.to_receipent);
        $('.fullname').html(response.from_sender+' - '+response.from_email);
        $('#fromname').html(response.from_sender+' - '+response.from_email);
        
        $('#send_subject').val(response.subject);
        $('#send_receipent').val(response.to_receipent);
        $('#send_message').val(response.message);
        $('#send_from_sender').val(response.from_sender);
        $('#send_from_email').val(response.from_email);
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
