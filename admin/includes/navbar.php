<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="home"><img src="<?php echo $settings['site_url']; ?>assets/images/<?php echo $settings['logo_line'];?>" class="mr-2" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="home"><img src="<?php echo $settings['site_url']; ?>assets/images/<?php echo $settings['logo'];?>" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <form action="search" method="post">
          <div class="input-group">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              <span class="input-group-text" id="search">
                <i class="icon-search"></i>
              </span>
            </div>
            <input type="text" name="search" class="form-control" id="navbar-search-input" placeholder="Search User" aria-label="search" aria-describedby="search">
          </div>
        </form>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item">
          <?php if(isset($_COOKIE['mode']) == 'dark'): ?>
          <a class="nav-link" onclick="lightMode()">
            <i class="icon-sun mx-0"></i>
          </a>
          <?php else: ?>
          <a class="nav-link" onclick="darkMode()">
            <i class="icon-moon mx-0"></i>
          </a>
          <?php endif; ?>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <?php

            $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM error_logs WHERE status = 0");
            $stmt->execute();
            $urowp =  $stmt->fetch();

            $allNot = $urowp['numrows'];

            if ($allNot == 0) {
              echo "";
            }else {
              echo "<span class='count'></span>";
            }
          ?>
          <!-- <span class="count"></span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <?php echo "<p class='mb-0 font-weight-normal float-left dropdown-header'>".number_format_short($allNot)." Notification(s)</p>"; ?>
          <!-- <p class='mb-0 font-weight-normal float-left dropdown-header'>Notifications</p> -->
          <a class="dropdown-item preview-item" href="error-logs">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-danger">
                <i class="ti-server mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <?php echo "<h6 class='preview-subject font-weight-normal'>".number_format_short($urowp['numrows'])." Error Log(s)</h6>"; ?>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?php echo (!empty($admin['photo'])) ? 'images/'.$admin['photo'] : 'images/profile.jpg'; ?>" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#profile" data-toggle="modal">
            <i class="ti-user text-danger"></i>
            <?php echo $admin['username'];?><i class="mdi mdi-checkbox-marked-circle-outline text-success" style="font-size:10px;"></i>
          </a>
          <a class="dropdown-item" href="#profile" data-toggle="modal">
            <i class="ti-settings text-primary"></i>
            Settings
          </a>
          <a class="dropdown-item" href="logout">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
<?php include 'includes/profile_modal.php'; ?>
