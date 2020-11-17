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
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>admin/Dashboard_admin/index">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>admin/Data_brg/index">
          <i class="fas fa-database"></i>
          <span>Data Barang</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>admin/Invoice/index">
          <i class="fas fa-file-invoice"></i>
          <span>Invoice</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>welcome">
          <i class="fas fa-sign-out-alt"></i>
          <span>Home</span></a>
      </li>

      <!-- Sidebar Toggler/ (Sidebar) -->
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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search ..." aria-label="Search" aria-describedby="basic-addon2" name="keyword" id="keyword" autocomplete="off" autofocus="on">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="submit">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="keyword" id="keyword" autocomplete="off" autofocus="on">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="navbar">


              <ul class="nav navbar-nav navbar-right mr-3">
                <?php if ($this->session->userdata('email')) { ?>
                  <li><?= anchor('Auth/logout', 'LOG OUT'); ?></li>

                <?php } else { ?>

                  <li class="ml-5"><?= anchor('Auth/index', 'LOGIN'); ?></li>

                <?php } ?>

              </ul>




              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?= $user['nama']; ?>
                  </span>
                  <?php if (!$this->session->userdata('email')) { ?>

                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/'); ?>kosong.webp">

                  <?php } else { ?>

                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/'); ?><?= $user['gambar']; ?>">

                  <?php } ?>
                </a>

                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url(); ?>Auth/index">
                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Login
                  </a>

                  <a class="dropdown-item" href="<?= base_url(); ?>Auth/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>

          </ul>

        </nav>
        <!-- End of Topbar -->