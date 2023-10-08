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
                  <h3 class="font-weight-bold">API Keys Settings</h3>
                  <h6 class="font-weight-normal mb-0">Edit everything pertaining to <?php echo $settings['site_name']; ?></h6>
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
                  <h4 class="card-title"><?php echo $settings['site_name']; ?> API Keys Settings</h4>
                  <p class="card-description">
                    <?php echo $settings['site_name']; ?> API Keys Settings
                  </p>
                  <?php
                  $result = $conn->prepare("SELECT * FROM settings WHERE id = 1");
                  $result->execute();
                  for($i=0; $row = $result->fetch(); $i++){
                  ?>
                  <form class="forms-sample"  action="settings_edit2" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="1">
                    <h2>Flutterwave <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://app.flutterwave.com');">Flutterwave</a> </small></h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Public Key</label>
                            <input type="text" name="public_key" class="form-control" placeholder="Enter public_key" value="<?php echo $row['public_key'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Secret Key</label>
                            <input type="text" name="secret_key" class="form-control" placeholder="Enter secret_key" value="<?php echo $row['secret_key'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Encryption Key</label>
                            <input type="text" name="encryption_key" class="form-control" placeholder="Enter encryption_key" value="<?php echo $row['encryption_key'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>BVN</label>
                            <input type="number" name="bvn" class="form-control" placeholder="Enter bvn" value="<?php echo $row['bvn'];?>">
                        </div>
                    </div>
                    
                    <h2>Monnify <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://app.monnify.com/');">Monnify</a> </small></h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Secret Key</label>
                            <input type="text" name="monnify_sk" class="form-control" placeholder="Enter monnify_sk" value="<?php echo $row['monnify_sk'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Contract No.</label>
                            <input type="text" name="monnify_cn" class="form-control" placeholder="Enter monnify_cn" value="<?php echo $row['monnify_cn'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Monnify API</label>
                            <input type="text" name="monnify_api" class="form-control" placeholder="Enter monnify_api" value="<?php echo $row['monnify_api'];?>">
                        </div>
                    </div>
                    
                    <h2>Other Payment Settings</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Transaction charge in % per payment [ATM Funding]</label>
                            <input type="number" name="percentage" step="any" min="0" max="100" class="form-control" placeholder="Enter percentage to be deducted via payment" value="<?php echo $row['percentage'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Transaction charge in % per payment [Auto Bank Transfer]</label>
                            <input type="number" name="auto_percentage" step="any" min="0" max="100" class="form-control" placeholder="Enter percentage to be deducted via payment" value="<?php echo $row['auto_percentage'];?>">
                        </div>
                    </div>
                    
                    <h2>VTU API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://vtu.ng/dashboard/');">VTU.ng</a> </small> </h2>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Username</label>
                          <input type="text" name="api_username" class="form-control" placeholder="Enter username" value="<?php echo $row['api_username'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Password</label>
                          <input type="password" name="api_password" class="form-control" placeholder="Enter password" value="<?php echo $row['api_password'];?>">
                      </div>
                      <div class="m-3">
                        <?php
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => "https://vtu.ng/wp-json/api/v1/balance?username={$settings['api_username']}&password={$settings['api_password']}",
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "GET",
                          ));
                          $response = curl_exec($curl);
                          curl_close($curl);
                          // echo "$response";
                          $res = json_decode($response);
                          if($res->code)
                          {
                            $code = $res->code;
                            $balance = $res->data->balance;
                            if ($code == 'success') {
                              if ($balance < 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-danger'>".$settings['currency']."$balance</span> <a target='_blank' href='https://vtu.ng/dashboard/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-danger'>".$settings['currency']."$balance</span> ";
                              }
                              if ($balance > 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://vtu.ng/dashboard/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-info'>".$settings['currency']."$balance</span> ";
                              }
                              // echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                              // echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://vtu.ng/dashboard/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                            }elseif ($code == 'invalid_username') {
                              echo "API Status - <span class='badge badge-danger'>Invalid Username</span>";
                            }elseif ($code == 'incorrect_password') {
                              echo "API Status - <span class='badge badge-danger'>Incorrect Password</span>";
                            }elseif ($code == 'empty_username') {
                              echo "API Status - <span class='badge badge-danger'>Empty Username</span>";
                            }elseif ($code == 'empty_password') {
                              echo "API Status - <span class='badge badge-danger'>Empty Password</span>";
                            }
                          }
                         ?>
                      </div>
                    </div>
                    
                    <h2>VTU API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://clubkonnect.com/');">Clubkonnect</a> </small> </h2>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Userid</label>
                          <input type="text" name="clubkonnect_userid" class="form-control" placeholder="Enter userid" value="<?php echo $row['clubkonnect_userid'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>API Key</label>
                          <input type="text" name="clubkonnect_apikey" class="form-control" placeholder="Enter apikey" value="<?php echo $row['clubkonnect_apikey'];?>">
                      </div>
                      <div class="m-3">
                        <?php
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => "https://www.nellobytesystems.com/APIWalletBalanceV1.asp?UserID={$settings['clubkonnect_userid']}&APIKey={$settings['clubkonnect_apikey']}",
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => "",
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => "GET",
                          ));
                          $response = curl_exec($curl);
                          curl_close($curl);
                          // echo "$response";
                          $res = json_decode($response);
                          $res->code = true;
                          if(true)
                          {
                            $code = $res->code;
                            $balance = $res->balance;
                            if ($code == 'success') {
                              if ($balance < 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-danger'>".$settings['currency']."$balance</span> <a target='_blank' href='https://clubkonnect.com/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-danger'>".$settings['currency']."$balance</span> ";
                              }
                              if ($balance > 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://clubkonnect.com/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-info'>".$settings['currency']."$balance</span> ";
                              }
                              // echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                              // echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://clubkonnect.com/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                            }
                          }
                         ?>
                      </div>
                    </div>
                    
                    <h2>VTU API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://dataway.ng/login/');">Dataway.ng</a> </small> </h2>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Public Key</label>
                          <input type="text" name="dataway_public" class="form-control" placeholder="Enter you Public Key from Dataway.ng" value="<?php echo $row['dataway_public'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Private Key</label>
                          <input type="text" name="dataway_private" class="form-control" placeholder="Enter you Private Key from Dataway.ng" value="<?php echo $row['dataway_private'];?>">
                      </div>
                      <div class="m-3">
                        <?php
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'https://datawayapp.com/vendor/balance',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'POST',
                          CURLOPT_POSTFIELDS => array(
                            'api_public_key' => $row['dataway_public'],
                            'api_private_key' => $row['dataway_private']
                          ),
                        ));
                          $response = curl_exec($curl);
                          curl_close($curl);
                          // echo "$response";
                          $res = json_decode($response);
                          if($res->response_code)
                          {
                            $response_code = $res->response_code;
                            $balance = $res->data;
                            if ($response_code == '000') {
                              if ($balance < 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-danger'>".$settings['currency']."$balance</span> <a target='_blank' href='https://dataway.ng/login/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-danger'>".$settings['currency']."$balance</span> ";
                              }
                              if ($balance > 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://dataway.ng/login/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-info'>".$settings['currency']."$balance</span> ";
                              }
                            }else {
                              echo "API Status - <span class='badge badge-danger'>Could not fetch balance</span>";
                            }
                          }else {
                              echo "API Status - <span class='badge badge-danger'>Could not fetch balance</span>";
                            }
                         ?>
                      </div>
                    </div>
                    
                    <h2>VTU API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://www.easyaccess.com.ng/pages/login.php');">Easyaccess</a> </small> </h2>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>API Key</label>
                          <input type="text" name="easyaccess" class="form-control" placeholder="Enter you API Key from Easyaccess" value="<?php echo $row['easyaccess'];?>">
                      </div><br>
                      <div class="m-3">
                        <?php
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'https://easyaccessapi.com.ng/api/wallet_balance.php',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'GET',
                          CURLOPT_HTTPHEADER => array(
                             "AuthorizationToken: {$row['easyaccess']}"
                          ),
                        ));
                          $response = curl_exec($curl);
                          curl_close($curl);
                          // echo "$response";
                          $res = json_decode($response);
                          if($res->success)
                          {
                            $response_code = $res->success;
                            $balance = $res->balance;
                            if ($response_code) {
                              if ($balance < 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-danger'>".$settings['currency']."$balance</span> <a target='_blank' href='https://www.easyaccess.com.ng/pages/login.php'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-danger'>".$settings['currency']."$balance</span> ";
                              }
                              if ($balance > 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://www.easyaccess.com.ng/pages/login.php'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-info'>".$settings['currency']."$balance</span> ";
                              }
                            }else {
                              echo "API Status - <span class='badge badge-danger'>Could not fetch balance</span>";
                            }
                          }else {
                              echo "API Status - <span class='badge badge-danger'>Could not fetch balance</span>";
                            }
                         ?>
                      </div>
                    </div>
                    
                    <h2>VTU API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://ncwallet.ng/dashboard/');">NCWallet</a> </small> </h2>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>NC Wallet Username</label>
                          <input type="text" name="nc_username" class="form-control" placeholder="Enter you username from NCWallet" value="<?php echo $row['nc_username'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>NC Wallet Password</label>
                          <input type="password" name="nc_password" class="form-control" placeholder="Enter you password from NCWallet" value="<?php echo $row['nc_password'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>NC Token [Auto]</label>
                          <input type="text" class="form-control" value="<?php echo $row['ncuser'];?>" readonly>
                      </div>
                      <div class="form-group col-md-6">
                        <label>NC API Key [Auto]</label>
                          <input type="text" class="form-control" value="<?php echo $row['nc_apikey'];?>" readonly>
                      </div>
                      <div class="form-group col-md-6">
                        <label>NC User [Auto]</label>
                          <input type="text" class="form-control" value="<?php echo $row['ncwallet'];?>" readonly>
                      </div>
                      <div class="m-3">
                        <?php
                        $curl = curl_init();
                        $nc_username = $row['nc_username'];
                        $nc_password = $row['nc_password'];
                        $nctoken = base64_encode($nc_username.':'.$nc_password);
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'https://ncwallet.ng/api/user/',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'GET',
                          CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache",
                            "Content-Type: application/json",
                            "Authorization: Basic {$nctoken}"
                          ),
                        ));
                          $response = curl_exec($curl);
                          curl_close($curl);
                          // echo "$response";
                          $res = json_decode($response);
                          if($res->status)
                          {
                            $response_code = $res->status;
                            $balance = $res->balance;
                            // $balance = "1,435";
                            $b = str_replace( ',', '', $balance );
                            
                            if( is_numeric( $b ) ) {
                                $balance = $b;
                            }
                            if ($response_code) {
                              if ($balance < 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-danger'>".$settings['currency']."$balance</span> <a target='_blank' href='https://ncwallet.ng/dashboard/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-danger'>".$settings['currency']."$balance</span> ";
                              }
                              if ($balance > 1000) {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://ncwallet.ng/dashboard/'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                                // echo "<span class='text-info'>".$settings['currency']."$balance</span> ";
                              }
                            }else {
                              echo "API Status - <span class='badge badge-danger'>Could not fetch balance</span>";
                            }
                          }else {
                              echo "API Status - <span class='badge badge-danger'>Could not fetch balance</span>";
                            }
                         ?>
                      </div>
                    </div>
                    
                    <h2>SMS API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://www.bulksmsnigeria.com/my-accounts');">BulksmsNigeria</a> </small></h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Sender ID</label>
                            <input type="text" name="text_api_sender_id" class="form-control" placeholder="Enter Sending ID" value="<?php echo $row['text_api_sender_id'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>API Key</label>
                            <input type="text" name="text_api_key" class="form-control" placeholder="Enter API Key" value="<?php echo $row['text_api_key'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Amount per unit</label>
                            <input type="number" name="text_api_amount" class="form-control" placeholder="Enter API Amount Unit" value="<?php echo $row['text_api_amount'];?>">
                        </div>
                        <div class="m-3">
                          <?php
                          $curl = curl_init();
                          curl_setopt_array($curl, array(
                              CURLOPT_URL => "https://www.bulksmsnigeria.com/api/v2/balance/get?api_token={$settings['text_api_key']}",
                              CURLOPT_RETURNTRANSFER => true,
                              CURLOPT_ENCODING => "",
                              CURLOPT_MAXREDIRS => 10,
                              CURLOPT_TIMEOUT => 0,
                              CURLOPT_FOLLOWLOCATION => true,
                              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                              CURLOPT_CUSTOMREQUEST => "GET",
                            ));
                            $response = curl_exec($curl);
                            curl_close($curl);
                            $res = json_decode($response);
    
                            if($res->data->status)
                            {
                              $code = $res->data->status;
                              $balance = $res->balance->total_balance;
                              if ($code == 'success') {
                                echo "API Status - <span class='badge badge-success'>Success</span> <br>";
                                echo "Balance - <span class='text-success'>".$settings['currency']."$balance</span> <a target='_blank' href='https://www.bulksmsnigeria.com/my-accounts'>Fund <i class='mdi mdi-pencil-box-outline'></i></a>";
                              }
                            }
                           ?>
                        </div>
                    </div>
                    
                    <h2>Weather API <small style="font-size:20px;">from <a href="JavaScript:newPopup('https://openweathermap.org');">Openweather</a></small></h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>App ID</label>
                            <input type="text" name="open_weather_api" class="form-control" placeholder="Enter APPID" value="<?php echo $row['open_weather_api'];?>">
                        </div>
                    </div>
                    
                    <h2>Airtime2Cash Parameters</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Phone Number to receive airtime</label>
                            <input type="number" name="airtime_phoneno" class="form-control" placeholder="Enter Phone Number to receive airtime" value="<?php echo $row['airtime_phoneno'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Transaction charge in % per payment</label>
                            <input type="number" name="airtime_percentage" step="any" min="0" max="100" class="form-control" placeholder="Enter airtime_percentage to be deducted via payment" value="<?php echo $row['airtime_percentage'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Max. Amount per payment</label>
                            <input type="number" name="airtime_max" step="any" class="form-control" placeholder="Enter airtime_max to be deducted via payment" value="<?php echo $row['airtime_max'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Min. Amount per payment</label>
                            <input type="number" name="airtime_min" step="any" class="form-control" placeholder="Enter airtime_min to be deducted via payment" value="<?php echo $row['airtime_min'];?>">
                        </div>
                    </div>
                    
                    <!--<h2>Bulk Email</h2>-->
                    <!--<div class="row">-->
                        <!--<div class="form-group col-md-6">-->
                          <!--<label>Bulk Email Transaction charge per unit</label>-->
                            <!--<input type="number" name="email_amount" step="any" min="0" max="100" class="form-control" placeholder="Enter email_amount to be deducted via payment" value="<?php echo $row['email_amount'];?>">-->
                        <!--</div>-->
                    <!--</div>-->
                    
                    
                    <h2>Referal Commission</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label>Referral Commission (<?php echo $row['currency']; ?>)</label>
                            <input type="number" name="ref_bonus" step="any" min="0" class="form-control" placeholder="Enter email_amount to be deducted via payment" value="<?php echo $row['ref_bonus'];?>">
                        </div>
                        <div class="form-group col-md-6">
                          <label>Referral Min. Withdrawal Amount (<?php echo $row['currency']; ?>)</label>
                            <input type="number" name="ref_min" step="any" min="0" class="form-control" placeholder="Enter email_amount to be deducted via payment" value="<?php echo $row['ref_min'];?>">
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
  <script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
  <script>
  $(function(){
  $(document).on('click', '.edit3', function(e){
    e.preventDefault();
    $('#edit3').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
  });
  </script>
</body>
</html>
