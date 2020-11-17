<div class="container-fluid">

  <!-- corousel -->

  <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/slide1.jpg'); ?>" class="d-block w-100" alt="shoping">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-warning">Hot Seller</h3>
            <p class="text-light">Dapatkan diskon hingga 75%</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/slide2.jpg'); ?>" class="d-block w-100" alt="pakaian">
        <div class="carousel-caption d-none d-md-block text-warning">
          <h1>Gratis Ongkir</h3>
            <p class="text-light">Dapatkan Voucher Gratis Ongkir</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="Bayar">
        <div class="carousel-caption d-none d-md-block text-warning">
          <h1>Cashback 100%</h3>
            <p class="text-light">Khusus User baru</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- judul -->
  <div class="judul">
    <h1 class="text-center text-dark">Produk Baru</h1>
  </div>


  <?php if (empty($barang)) : ?>
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-8">
        <div class="alert alert-danger mt-3" role="alert">
          <h5 align="middle"> <i class="fas fa-search text-primary mr-3"></i>Produk tidak ditemukan !</h5>
        </div>
      </div>

      <div class="col-md-2"></div>
    <?php endif; ?>

    <div class="row barang">

      <!-- card produk -->
      <?php foreach ($barang as $brg) : ?>
        <div class="content">
          <div class="card text-center ml-3 mt-2 mb-3">

            <img src="<?= base_url(); ?>uploads/<?= $brg['gambar_brg']; ?>" class="card-img-top" alt="produk">

            <div class="card-body bg-light">
              <h5 class="card-title mb-1 text-dark"><?= $brg['nama_brg']; ?></h5>
              <small class="text-muted"><?= $brg['keterangan_brg']; ?></small><br>
              <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg['harga_brg'], 0, ',', '.'); ?> </span>
              <div class="aksi">
                <a href="<?= base_url(); ?>Dashboard/tambah_ke_keranjang/<?= $brg['id']; ?>" class="btn btn-primary btn-sm tambah">Tambah ke keranjang</a>
                <a href="<?= base_url(); ?>Dashboard/detail/<?= $brg['id']; ?>" class="btn btn-success btn-sm detail">Detail</a>
              </div>
            </div>
          </div>
        </div>



      <?php endforeach; ?>

    </div>

    <br>

    </div>