<div class="container-fluid">
	
	<?php if($this->session->flashdata('flasher')): ?>
	<div class="row mt-2">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
  			Data Produk<strong> Berhasil </strong> <?= $this->session->flashdata('flasher'); ?>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
 			</button>
			</div>
		</div>
	</div>
<?php endif; ?>
	
	<button class="btn btn-primary mb-4" type="submit" name="tambah" data-toggle="modal" data-target="#formTambah"><i class="fas fa-plus"></i> Tambah Produk</button>
	

	<h3 class="text-dark">Daftar Produk</h3>

	<table class="table table-bordered ">
		<tr class="text-dark">
			<th>No</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3" class="text-center">Aksi</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach($barang as $brg):?>
		<tr>
			<td><?= $i++?></td>
			<td><?= $brg['nama_brg']; ?></td>
			<td><?= $brg['keterangan_brg']; ?></td>
			<td><?= $brg['kategori_brg']; ?></td>
			<td>Rp. <?= number_format($brg['harga_brg'], 0,',','.') ?></td>
			<td><?= $brg['stok_brg']; ?></td>
			<td><a href="<?= base_url(); ?>admin/Data_brg/search/<?= $brg['id']; ?>" class="btn btn-success"><i class="fas fa-search-plus"></i></a></td>
			<td><a href="<?= base_url(); ?>admin/Data_brg/ubah/<?= $brg['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></a></td>
			<td><a href="<?= base_url(); ?>admin/Data_brg/hapus/<?= $brg['id']; ?>" class="btn btn-danger" onclick="return confirm('YAKIN?');"><i class="fas fa-trash"></a></td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title text-dark" id="judulModal">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>

      <div class="modal-body">



     <form action="<?= base_url(); ?>admin/Data_brg/tambah" method="post" enctype="multipart/form-data">
	   <div class="form-group">
	    <label for="nama_brg" class="text-dark">Nama</label>
	    <input type="text" class="form-control" id="nama_brg" name="nama_brg" placeholder="Masukkan nama ..." autocomplete="off" autofocus="on" required>
	  </div>
	   <div class="form-group">
	    <label for="keterangan_brg" class="text-dark">Keterangan</label>
	    <input type="text" class="form-control" id="keterangan_brg" name="keterangan_brg" placeholder="Masukkan keterangan ... " autocomplete="off"
	    required>
	  </div>
	   <div class="form-group">
		<label for="kategori_brg" class="text-dark">Kategori</label>
			<select class="form-control" name="kategori_brg" id="kategori_brg" >
				<option value="Pakaian Pria">Pakaian Pria</option>
				<option value="Pakaian Wanita">Pakaian Wanita</option>
				<option value="Pakaian Anak-anak">Pakaian Anak-anak</option>
				<option value="Tv">Tv</option>
				<option value="Kulkas">Kulkas</option>
				<option value="Mesin Suci">Mesin Suci</option>
				<option value="Handphone">Handphone</option>
				<option value="Tablet">Laptop</option>
				<option value="Laptop">Aksesoris Gadgets</option>
				<option value="Bola">Bola</option>
				<option value="Pakaian Olahraga">Pakaian Olahraga</option>
				<option value="Sepatu Olahraga">Sepatu Olahraga</option>

				</select>
		</div>
	   <div class="form-group">
	    <label for="harga_brg" class="text-dark">Harga</label>
	    <input type="number" class="form-control" id="harga_brg" name="harga_brg" placeholder="Masukkan harga ..." required>
	  </div>
	  <div class="form-group">
	    <label for="stok_brg" class="text-dark">Stok</label>
	    <input type="number" class="form-control" id="stok_brg" name="stok_brg" placeholder="Masukkan stok barang ..." required>
	  </div>
	  <div class="form-group">
	    <label for="gambar_brg" class="text-dark">Gambar</label>
	    <input type="file" class="form-control" id="gambar_brg" name="gambar_brg"
	    required>
	  </div>

	   


	      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
		</div>
		</form>
    </div>
	</div>
</div>
</div>


