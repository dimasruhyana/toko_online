<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">


    <style>
        .chat-box .header {
            height: 85px;

        }

        .chat-box .header img {
            width: 60px;
            margin-left: 30px;
            margin-top: 9px;
            float: left;
            overflow: hidden;
            padding-right: 10px;

        }

        .chat-box .header .data-admin span {
            margin-left: 15px;
            font-size: 12px;
        }

        .chat-box .header .fitur-pesan {
            display: inline-block;
            transform: translate(825px, -60px);

        }


        .chat-box .body {
            height: 450px;
            background-color: white;
            overflow: scroll;
        }

        .chat-box .footer {
            height: 70px;
        }

        .chat-box .footer form {
            margin-top: 17px;
            margin-bottom: 10px;
        }

        .chat-box .body .pesan-user {
            margin-bottom: -20px;
        }

        .chat-box .body .pesan-user .img-user img {
            width: 50px;
            margin-left: 20px;
            margin-top: 5px;
            float: left;
            padding-right: 15px;
            padding-bottom: 5px;
        }

        .chat-box .body .pesan-user .data-user small {
            display: block;
            padding: 3px;
        }

        .chat-box .body .pesan-user.data-user.clear {
            clear: both;
        }

        .chat-box .body .pesan-user.data-user span {
            transform: translate(-20px, 0);
            margin-left: 20px;
        }

        .chat-box .body .pesan-user #pesan {
            transform: translate(240px, -40px);
            width: 400px;
            background-color: #ccc;
            border-radius: 10px;
            padding: 10px;

        }

        .chat-box .body .pesan-admin {
            margin-bottom: -20px;
            transform: translate(-270px, 30px);
        }

        .chat-box .body .pesan-admin .img-admin img {
            width: 50px;
            margin-left: 20px;
            margin-top: 5px;
            float: left;
            padding-right: 15px;
            padding-bottom: 5px;
        }

        .chat-box .body .pesan-admin .data-admin small {
            display: block;
            padding: 3px;
        }

        .chat-box .body .pesan-admin .data-admin .clear {
            clear: both;
        }

        .chat-box .body .pesan-admin .data-admin span {
            transform: translate(20px, 0);
            margin-left: 20px;
        }

        .chat-box .body .pesan-admin #pesan {

            width: 400px;
            background-color: skyblue;
            border-radius: 10px;
            padding: 10px;

        }

        .chat-box .body .pesan-admin .content-admin {
            transform: translate(230px, -80px);
        }
    </style>

</head>

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

                                    <?= $user['nama']; ?></span>

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




                <div class="container-fluid">

                    <div class="chat-box">
                        <div class="header bg-success" style="border:none;">

                            <div class="img-admin">
                                <img src="<?= base_url('assets/img/') ?><?= $admin['gambar']; ?>" alt="gambar-admin">
                            </div>

                            <div class="data-admin">
                                <small class="text-white mt-1" style="font-size:20px;"><?= $admin['nama']; ?></small><br>
                                <small class="text-white"><?= $admin['email']; ?></small><br>
                                <span class="text-white"><?= date('d-m-Y | H:i:s'); ?></span>
                            </div>

                            <div class="fitur-pesan">
                                <i class="fas fa-phone-alt p-3 text-light" title="telephone" data-toggle="tooltip"></i>
                                <i class="fas fa-video-phone p-3 text-white" title="Video Call" data-toggle="tooltip"></i>
                                <i class=" fas fa-info-circle text-light" title="User" data-toggle="tooltip"></i>
                            </div>

                        </div>

                        <div class="body">
                            <br>


                            <?php foreach ($message_user as $msg) : ?>

                                <div class="pesan-user">


                                    <div class="img-user">
                                        <img src="<?= base_url('assets/img/') ?><?= $user['gambar']; ?>" alt="gambar-user">
                                    </div>

                                    <div class="data-user">
                                        <small class="text-dark mt-1" style="font-size:13px; font-weight:bold;"><?= $msg['from_nama']; ?></small>
                                        <small class="text-dark" style="font-size:11px;"><?= $msg['from_email']; ?></small>
                                        <div class="clear"></div>
                                        <span class="text-dark" style="font-size:10px;"><?= $msg['tgl_kirim_pesan']; ?></span>
                                    </div>

                                    <div id="pesan">
                                        <small><?= $msg['message']; ?></small>
                                    </div>


                                </div>

                            <?php endforeach; ?>

                            <?php foreach ($message_admin as $msg_admin) : ?>

                                <?php if ($message_admin) { ?>

                                    <!-- message_admin -->
                                    <div class="pesan-admin float-right">

                                        <div id="pesan">
                                            <small><?= $msg_admin['message']; ?></small>
                                        </div>
                                        <div class="content-admin">
                                            <div class="img-admin float-right">
                                                <img src="<?= $user_admin['gambar']; ?>" alt="gambar-admin">
                                            </div>
                                            <div class="data-admin float-right">
                                                <small class="text-dark mt-1" style="font-size:13px; font-weight:bold;"><?= $msg_admin['from_nama']; ?></small>
                                                <small class="text-dark" style="font-size:11px;">dimsKiww10@gmail.com</small>
                                                <div class="clear"></div>
                                                <span class="text-dark" style="font-size:10px;"><?php $msg_admin['tgl_kirim_pesan']; ?></span>
                                            </div>
                                        </div>





                                    </div>

                                    <br><br><br><br><br>


                                <?php } ?>


                            <?php endforeach; ?>





                        </div>


                        <div class="footer bg-success">

                            <div class="form-inline float-right mr-5 mt-3">

                                <input type="hidden" name="id_barang" id="id_barang" value="<?= $barang['id']; ?>">

                                <div class="input-group ">
                                    <input class="form-control" type="text" placeholder="Ketik Pesan ..." aria-label="Search" size="40" autofocus="on" autocomplete="off" name="msg_user" id="msg_user">

                                    <div class="input-group-append">
                                        <input type="button" class="btn btn-primary" onclick="pes();" value="Kirim">
                                    </div>
                                </div>

                            </div>

                        </div>


                        <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

                        <script>
                            function pes() {

                                var id = $('#id_barang');

                                var value = {
                                    msg_user: $('#msg_user').val()
                                }

                                $.ajax({
                                    url: '<?= site_url(); ?>Dashboard/chat_user/'.id,
                                    type: 'POST',
                                    data: value,
                                    dataType: 'JSON'
                                });
                            }
                        </script>

                        <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                        <!-- Core plugin JavaScript-->
                        <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                        <!-- Custom scripts for all pages-->
                        <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

                        <!-- Page level plugins -->
                        <script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

                        <!-- Page level custom scripts -->
                        <script src="<?= base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
                        <script src="<?= base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>