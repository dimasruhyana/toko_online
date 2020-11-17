<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DIMS STORE</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/profile'); ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>My Profile</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/ubah_profile'); ?>">
          <i class="fas fa-fw fa-user-edit"></i>
          <span>Edit Profile</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/ubah_password'); ?>">
          <i class="fas fa-fw fa-user-lock"></i>
          <span>Ubah Password</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Belanja
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Pesanan_user/pesanan'); ?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Dipesan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-truck"></i>
          <span>Dikirim</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-history"></i>
          <span>History Belanja</span></a>
      </li>






      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/') ?><?= $user['gambar']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('Auth/index'); ?>">
                  <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Login
                </a>
                <a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->