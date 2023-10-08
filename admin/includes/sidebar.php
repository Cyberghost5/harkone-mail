<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="list active">
      <div class="profile"><img src="<?php echo (!empty($admin['photo'])) ? 'images/'.$admin['photo'] : 'images/profile.jpg'; ?>" class="img-circle elevation-2" height="60" width="60" alt="image" style="border-radius:50%;"><span class="online"></span></div>
      <div class="info mb-3 mt-3">
        <h5><?php echo $admin['username']; ?></h5>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="home">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="users">
        <i class="mdi mdi-account-multiple menu-icon"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="import">
        <i class="mdi mdi-upload menu-icon"></i>
        <span class="menu-title">Import Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="admins">
        <i class="mdi mdi-account-star menu-icon"></i>
        <span class="menu-title">Admins</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="email">
        <i class="mdi mdi-email menu-icon"></i>
        <span class="menu-title">Email</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#profile" data-toggle="modal">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">Account</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="error-logs">
        <i class="mdi mdi-alert-octagon menu-icon"></i>
        <span class="menu-title">Error Logs</span>
        <?php
          $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM error_logs WHERE status = 0");
          $stmt->execute();
          $urowp =  $stmt->fetch();

          if ($urowp['numrows'] == 0) {
            echo "";
          }else {
            echo "<span class='badge badge-danger right'>".number_format_short($urowp['numrows'])."</span>";
          }
        ?>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="mdi mdi-settings menu-icon"></i>
        <span class="menu-title">Settings</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="gen-settings">General Settings</a></li>
          <!--<li class="nav-item"><a class="nav-link" href="system-settings">System Settings</a></li>-->
          <li class="nav-item"><a class="nav-link" href="email-settings">Email Settings</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="logout">
        <i class="mdi mdi-logout menu-icon"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>
