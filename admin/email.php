<?php include 'include/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="<?php echo $settings['site_url']; ?>vendors/tagify/tagify.css" />
<link rel="stylesheet" href="<?php echo $settings['site_url']; ?>vendors/quill/quill.snow.css">
<link rel="stylesheet" href="<?php echo $settings['site_url']; ?>vendors/simplemde/simplemde.min.css">
<body>
  <?php
  // if(isset($_POST['resend_email'])){echo $_POST['from_sender'];}else{echo $settings['site_name'];} // From name
  // if(isset($_POST['resend_email'])){echo $_POST['from_email'];}else{echo $settings['admin_email'];} // From email
  // if(isset($_POST['resend_email'])){echo $_POST['subject'];}else{echo '';} // Subject
  // if(isset($_POST['resend_email'])){echo $_POST['receipent'];}else{echo '';} // Receipent
  // if(isset($_POST['resend_email'])){echo $_POST['message'];}else{echo $settings['email_sample'];} // Message
  ?>
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
                  <h3 class="font-weight-bold">Email</h3>
                  <h6 class="font-weight-normal mb-0">Send Emails to your users.</h6>
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
                if(isset($_SESSION['cancelled'])){
                  echo "
                    <div class='alert alert-secondary alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4><i class='icon mdi mdi-delete-forever'></i> Cancelled!</h4>
                      ".$_SESSION['cancelled']."
                    </div>
                  ";
                  unset($_SESSION['cancelled']);
                }
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
								<div class="card-body">
									<h4 class="card-title">Email</h4>
                  <?php
                  //var_dump($_POST);
                  ?>
                  <form class="form" action="email-action" method="POST">
                    <h3>Send email to users</h3>
                    <div class="form-group">
                      <label>From [Sender Name]</label>
                      <input type="text" name="sender_name" class="form-control" value="<?php if(isset($_POST['resend_email'])){echo $_POST['from_sender'];}else{echo $settings['site_name'];}; ?>" placeholder="Enter Sender Name" required>
                    </div>
                    <div class="form-group">
                      <label>From Email [Sender Email]</label>
                      <input type="email" name="sender_email" class="form-control" placeholder="Enter Sender Email" value="<?php if(isset($_POST['resend_email'])){echo $_POST['from_email'];}else{echo $settings['admin_email'];}; ?>" required>
                      <small>This would also be the email they can reply to.</small>
                    </div>
                    <div class="form-group">
                      <label>To [Recipients]:</label>
                      <!--<input name="receipient" data-role="tagsinput" class="form-control" placeholder="Enter the receipient Email" required>-->
                      <small class="form-text text-muted">This list only contains users who are active and not blocked or not verified.</small>
                      <input id="TagifyUserList" name="TagifyUserList" placeholder="Select users" value="<?php if(isset($_POST['resend_email'])){echo $_POST['receipent'];}else{echo '';}; ?>" />
                      <small class="form-text text-muted">Type or Paste up to 10,000 emails here (xx@gmail.com, xx@domainname.com etc) separate with comma, NO SPACES!</small>
                    </div>
                    <div class="form-group">
                      <label>Subject</label>
                      <input type="text" name="subject" class="form-control" placeholder="Enter Subject of Email" value='<?php if(isset($_POST['resend_email'])){echo $_POST['subject'];}else{echo '';}; ?>' required>
                    </div>
                    <div class="form-group">
                      <label>Message</label>
                      <textarea name="message" id='tinyMceExample' class="form-control" style="height: 700px" placeholder="Enter Message"><?php if(isset($_POST['resend_email'])){echo $_POST['message'];}else{echo $settings['email_sample'];}; ?></textarea>
                    </div>

                    <button type="submit" name="send" class="btn btn-primary btn-rounded btn-icon-text mb-4 mt-4">
                      <i class="ti-upload btn-icon-prepend"></i>
                      Send
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include 'includes/scripts.php'; ?>
<script src="<?php echo $settings['site_url']; ?>vendors/tagify/tagify.js"></script>
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
    <script>
<?php include 'includes/tagify.js'; ?>
</script>
</body>

</html>