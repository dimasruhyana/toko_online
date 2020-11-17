<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background:linear-gradient(to right, #1E90FF, #aaa);">

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
        Kategori
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pakaian" aria-expanded="true" aria-controls="pakaian">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian</span>
        </a>
        <div id="pakaian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pakaian</h6>
            <a class="collapse-item" href="<?= base_url(); ?>Kategori/pakaian_pria">Pria</a>
            <a class="collapse-item" href="cards.html">Wanita</a>
            <a class="collapse-item" href="cards.html">Anak-anak</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#elektronik" aria-expanded="true" aria-controls="elektronik">
          <i class="fas fa-fw fa-tv"></i>
          <span>Elektronik </span>
        </a>
        <div id="elektronik" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Elektronik</h6>
            <a class="collapse-item" href="utilities-color.html">Tv</a>
            <a class="collapse-item" href="utilities-border.html">Kulkas</a>
            <a class="collapse-item" href="utilities-animation.html">Mesin Cuci</a>

          </div>
        </div>
      </li>



      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#gadgets" aria-expanded="true" aria-controls="gadgets">
          <i class="fas fa-fw fa-mobile-alt"></i>
          <span>gadgets</span>
        </a>
        <div id="gadgets" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">gadgets</h6>
            <a class="collapse-item" href="utilities-color.html">Handphone</a>
            <a class="collapse-item" href="<?= base_url(); ?>kategori/laptop">Laptop</a>
            <a class="collapse-item" href="<?= base_url(); ?>Kategori/aksesoris_gadgets">Aksesoris Gadgets</a>

          </div>
        </div>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sports" aria-expanded="true" aria-controls="sports">
          <i class="fas fa-fw fa-futbol"></i>
          <span>Sports</span>
        </a>
        <div id="sports" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sports</h6>
            <a class="collapse-item" href="utilities-color.html">Bola</a>
            <a class="collapse-item" href="utilities-border.html">Pakaian Olahraga</a>
            <a class="collapse-item" href="<?= base_url(); ?>Kategori/sepatu_sport">Sepatu Olahraga</a>

          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small aa" placeholder="Search ..." aria-label="Search" aria-describedby="basic-addon2" name="kword" id="kword1" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="submit">
                  <i class="fas fa-search fa-sm" data-toggle="tooltip" title="Search Produk"></i>
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
                <form class="form-inline mr-auto w-100 navbar-search" action="" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search ..." aria-label="Search" aria-describedby="basic-addon2" name="kword" id="kword2" autocomplete="off">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Notifikasi -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw text-warning mr-4" data-toggle="tooltip" title="Notifikasi"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter mr-4">0+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifikasi
                </h6>
                <?php if (empty($notifikasi)) { ?>
                  <br>
                  <h6 class="text-danger text-center"><strong>Tidak ada Notifikasi !</strong></h6>
                  <br>
                <?php } else { ?>

                  <?php foreach ($notifikasi as $notif) : ?>

                    <?php if (time() - $notif->tgl_pesan < (60)) { ?>

                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-success">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500"><?= date('F d, Y'); ?></div>
                          <span class="font-weight-bold">Produk <?= $notif->nama_produk; ?> <strong class="text-success">Berhasil</strong> dipesan Silahkan bayar!</span>
                        </div>
                      </a>

                    <?php } else { ?>

                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500"><?= date('F d, Y'); ?></div>
                          <span class="font-weight-bold">Produk <?= $notif->nama_produk; ?> <strong class="text-danger">Gagal</strong> dipesan karena telah melampaui batas bayar</span>
                        </div>
                      </a>



                    <?php } ?>
                  <?php endforeach; ?>


                <?php } ?>
                <a class="dropdown-item text-center small text-dark-500 bg-light" href="#">Show All Notifikasi</a>
              </div>
            </li>

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li>


                  <i class="fas fa-cart-plus text-primary mr-2" id="jang" data-toggle="tooltip" title="Keranjang Belanja"></i>

                  <?php $keranjangs = '<span>Keranjang Belanja : ' . $this->cart->total_items() . ' item</span>' ?>

                  <?= anchor('Dashboard/detail_keranjang', $keranjangs); ?>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right ml-5 akses">
                <?php if ($this->session->userdata('email')) { ?>
                  <li><?= anchor('Auth/logout', '<span>LOG OUT</span>'); ?></li>

                <?php } else { ?>

                  <li class="ml-5"><?= anchor('Auth/index', '<span>LOGIN</span>'); ?></li>

                <?php } ?>






              </ul>
            </div>



            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="topbar-divider d-none d-sm-block"></div>


                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                   <?php if ($this->session->userdata('email')){?>
                <?= $user['nama']; ?>
                <?php } else { ?>
                <?php }?>
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