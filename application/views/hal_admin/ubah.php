<div class="container mt-4">
	
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				 <div class="card-header">Form Ubah Produk</div>
				  <div class="card-body">
				     <form action="" method="post">
				    	<input type="hidden" name="id" value="<?= $barang['id']; ?>">
				    	<div class="form-group">
				    	<label for="nama_brg">Nama Produk</label>
				    	<input type="text" class="form-control" id="nama_brg" name="nama_brg" autofocus="on" value="<?= $barang['nama_brg']; ?>">
				    	<small class="form-text text-danger"><?= form_error('nama_brg'); ?></small>
				    	</div>
				 
				    	<div class="form-group">
				    	<label for="keterangan_brg">Keterangan Produk</label>
				    	<input type="" class="form-control" id="keterangan_brg" name="keterangan_brg" value="<?= $barang['keterangan_brg']; ?>">
				    	<small class="form-text text-danger"><?= form_error('keterangan_brg'); ?></small>
				    	</div>
				    	
				    	<div class="form-group">
				    		<label for="kategori_brg">Kategori</label>
				    		<select class="form-control" name="kategori_brg" id="kategori_brg">

				    		<?php foreach ($kategori as $ktg): ?>
				    		<?php if($ktg == $barang['kategori_brg']) : ?>

				    		<option value="<?= $ktg; ?>" selected><?= $ktg; ?></option>
				    		<?php else: ?>
				    		<option value="<?= $ktg; ?>"><?= $ktg; ?></option>

							<?php endif; ?>
				    		<?php endforeach; ?>
				    						    	
				    		</select>
				    	</div>

				    	<div class="form-group">
				    	<label for="harga_brg">Harga Produk</label>
				    	<input type="" class="form-control" id="harga_brg" name="harga_brg"  value="<?= $barang['harga_brg']; ?>">
				    	<small class="form-text text-danger"><?= form_error('harga_brg'); ?></small>
				    	</div>
				    	
				    		<div class="form-group">
				    	<label for="stok_brg">Stok Produk</label>
				    	<input type="" class="form-control" id="stok_brg" name="stok_brg"  value="<?= $barang['stok_brg']; ?>">
				    	<small class="form-text text-danger"><?= form_error('stok_brg'); ?></small>
				    	</div>

				    	<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

						<a href="<?= base_url(); ?>admin/Data_brg/index" class="btn btn-danger float-right mr-3">Kembali</a>

				     </form>
				     </div>
				  </div>
				</div>
		</div>
	</div>

</div>