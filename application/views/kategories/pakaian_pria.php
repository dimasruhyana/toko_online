<div class="container-fluid">

   <!-- judul -->

   <div class="judul">
      <h1 class="text-center text-dark">Pakaian Pria</h1>
   </div>

   <?php if (empty($pakaian_pria)) : ?>
      <div class="row">
         <div class="col-md-2"></div>

         <div class="col-md-8">
            <div class="alert alert-danger mt-3" role="alert">
               <h5 align="middle"><i class="fas fa-search text-primary mr-3"></i> Produk tidak ditemukan !</h5>
            </div>
         </div>

         <div class="col-md-2"></div>
      <?php endif; ?>


      <div class="row">

         <!-- card produk -->
         <?php foreach ($pakaian_pria as $brg) : ?>
            <div class="content">
               <div class="card text-center ml-3 mt-2">

                  <img src="<?= base_url(); ?>uploads/<?= $brg['gambar_brg']; ?>" class="card-img-top" alt="produk">

                  <div class="card-body bg-light">
                     <h5 class="card-title mb-1 text-dark"><?= $brg['nama_brg']; ?></h5>
                     <small class="text-muted"><?= $brg['keterangan_brg']; ?></small><br>
                     <span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg['harga_brg'], 0, ',', '.'); ?></span>
                     <div class="aksi">
                        <a href="#" class="btn btn-primary btn-sm">Tambah ke keranjang</a>
                        <a href="<?= base_url(); ?>Dashboard/detail/<?= $brg['id']; ?>" class="btn btn-success btn-sm">Detail</a>
                     </div>
                  </div>
               </div>
            </div>

         <?php endforeach; ?>

      </div>

      </div>