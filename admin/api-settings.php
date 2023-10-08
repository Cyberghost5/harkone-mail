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
                  <h3 class="font-weight-bold">API Settings</h3>
                  <h6 class="font-weight-normal mb-0">Edit everything technical pertaining to <?php echo $settings['site_name']; ?></h6>
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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $settings['site_name']; ?> API Settings</h4>
                  <p class="card-description">
                    <?php echo $settings['site_name']; ?> API Settings
                  </p>
                  <?php
                  $result = $conn->prepare("SELECT * FROM settings WHERE id = 1");
                  $result->execute();
                  for($i=0; $row = $result->fetch(); $i++){
                  ?>
                  <form class="forms-sample"  action="settings_edit3" method="post">
                    <input type="hidden" name="id" value="1">
                    <h2>Data API</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <span>API for MTN Data</span> <br>
                          <select name="mtn_data_api" class="form-control">
                            <option value="0" <?php if($row['mtn_data_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['mtn_data_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['mtn_data_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['mtn_data_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for Glo Data</span> <br>
                          <select name="glo_data_api" class="form-control">
                            <option value="0" <?php if($row['glo_data_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['glo_data_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['glo_data_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['glo_data_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for Airtel Data</span> <br>
                          <select name="airtel_data_api" class="form-control">
                            <option value="0" <?php if($row['airtel_data_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['airtel_data_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['airtel_data_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['airtel_data_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for 9Mobile Data</span> <br>
                          <select name="9mobile_data_api" class="form-control">
                            <option value="0" <?php if($row['9mobile_data_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['9mobile_data_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['9mobile_data_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['9mobile_data_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for All Network Data</span> <br>
                          <select name="all_data_api" class="form-control">
                            <option value="0" <?php if($row['all_data_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['all_data_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['all_data_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['all_data_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                    </div>
                    
                    <h2>Data Network Settings</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <span>MTN SME</span> <br>
                          <select name="mtnsme_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 1");
                                $result1->execute();
                                $mtnsme_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($mtnsme_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($mtnsme_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>MTN Gifting</span> <br>
                          <select name="mtngifting_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 2");
                                $result1->execute();
                                $mtngifting_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($mtngifting_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($mtngifting_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>MTN Datacard</span> <br>
                          <select name="mtndatacard_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 10");
                                $result1->execute();
                                $mtndatacard_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($mtndatacard_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($mtndatacard_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>MTN Coporate Gifting</span> <br>
                          <select name="mtncg_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 3");
                                $result1->execute();
                                $mtncg_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($mtncg_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($mtncg_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>Airtel Gifting</span> <br>
                          <select name="airtelgifting_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 5");
                                $result1->execute();
                                $airtelgifting_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($airtelgifting_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($airtelgifting_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>Airtel Coporate Gifting</span> <br>
                          <select name="airtelcg_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 4");
                                $result1->execute();
                                $airtelcg_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($airtelcg_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($airtelcg_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>Glo Gifting</span> <br>
                          <select name="glogifting_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 7");
                                $result1->execute();
                                $glogifting_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($glogifting_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($glogifting_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>Glo Coporate Gifting</span> <br>
                          <select name="glocg_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 6");
                                $result1->execute();
                                $glocg_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($glocg_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($glocg_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>9Mobile SME</span> <br>
                          <select name="o9mobilesme_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 8");
                                $result1->execute();
                                $o9mobilesme_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($o9mobilesme_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($o9mobilesme_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>9Mobile Gifting</span> <br>
                          <select name="o9mobilegifting_network_type" class="form-control">
                              <?php
                                $result1 = $conn->prepare("SELECT * FROM data_type WHERE id = 9");
                                $result1->execute();
                                $o9mobilegifting_network_type = $result1->fetch();
                              ?>
                            <option value="0" <?php if($o9mobilegifting_network_type['status'] == 0){echo "selected";} ?>>Disable</option>
                            <option value="1" <?php if($o9mobilegifting_network_type['status'] == 1){echo "selected";} ?>>Enable</option>
                          </select>
                        </div>
                    </div>
                    
                    <h2>Other API</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <span>API for Airtime Services</span> <br>
                          <select name="airtime_api" class="form-control">
                            <option value="0" <?php if($row['airtime_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['airtime_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['airtime_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['airtime_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for DataCard Services</span> <br>
                          <select name="datacard_api" class="form-control">
                            <option value="1" <?php if($row['datacard_api'] == 1){echo "selected";} ?>>Easyaccess</option>
                            <option value="0" <?php if($row['datacard_api'] == 0){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for Airtime PIN Services</span> <br>
                          <select name="airtimepin_api" class="form-control">
                            <option value="1" <?php if($row['airtimepin_api'] == 1){echo "selected";} ?>>Clubkonnect</option>
                            <option value="0" <?php if($row['airtimepin_api'] == 0){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for Electricity Services</span> <br>
                          <select name="electricity_api" class="form-control">
                            <option value="0" <?php if($row['electricity_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['electricity_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['electricity_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['electricity_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>API for Cable Sub Services</span> <br>
                          <select name="cabletv_api" class="form-control">
                            <option value="0" <?php if($row['cabletv_api'] == 0){echo "selected";} ?>>VTU.ng</option>
                            <option value="1" <?php if($row['cabletv_api'] == 1){echo "selected";} ?>>Dataway</option>
                            <option value="2" <?php if($row['cabletv_api'] == 2){echo "selected";} ?>>Easyaccess</option>
                            <option value="3" <?php if($row['cabletv_api'] == 3){echo "selected";} ?>>NCWallet</option>
                          </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>Airtime % charge off</span> <br>
                          <input class="form-control" name="airtime_off_percentage" step="any" min="0" max="100" type="number" value="<?php echo $row['airtime_off_percentage']; ?>">
                        </div>
                        
                        <div class="form-group col-md-6">
                          <span>Airtime PIN % charge off</span> <br>
                          <input class="form-control" name="airtimepin_off_percentage" step="any" min="0" max="100" type="number" value="<?php echo $row['airtimepin_off_percentage']; ?>">
                        </div>
                    </div>
                    
                    <button type="submit" name="edit" class="btn btn-primary btn-rounded mr-2 btn-icon-text">
                      <i class="ti-save btn-icon-prepend"></i>
                      Save
                    </button>
                  </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/settings_modal.php'; ?>
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
  $(document).on('click', '.edit3', function(e){
    e.preventDefault();
    $('#edit3').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  $(document).on('click', '.edit4', function(e){
    e.preventDefault();
    $('#edit4').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  });
  </script>
</body>

</html>
