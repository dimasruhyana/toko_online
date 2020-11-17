<div class="container-fluid">
	<div class="detail-produk">
		<div class="card">
			<div class="card-header">
				<h4><strong>Detail Produk</strong></h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<img src="<?= base_url(); ?>uploads/<?= $barang['gambar_brg']; ?>" alt="produk" class="card-img-top">
					</div>
					<div class="col-md-8">
						<table class="table table-hover mt-3 table-borderless">

							<tr>
								<th>Nama Produk</th>
								<td><?= $barang['nama_brg']; ?></td>
							</tr>
							<tr>
								<th>Keterangan Produk</th>
								<td><?= $barang['keterangan_brg']; ?></td>
							</tr>
							<tr>
								<th>Kategori Produk</th>
								<td><?= $barang['kategori_brg']; ?></td>
							</tr>
							<tr>
								<th>Harga Produk</th>
								<td><?= $barang['harga_brg']; ?></td>
							</tr>
							<tr>
								<th>Stok Produk</th>
								<td><?= $barang['stok_brg']; ?></td>
							</tr>


						</table>
						<a href="<?= base_url(); ?>Dashboard/chat_user/<?= $barang['id']; ?>"><i class="fas fa-comment-dots text-warning mr-4"></i></a>
						<a href="<?= base_url(); ?>Dashboard/tambah_ke_keranjang/<?= $barang['id']; ?>" class="btn btn-primary btn-sm">Tambahkan ke Keranjang</a>
						<a href="<?= base_url(); ?>welcome/index" class="btn btn-danger btn-sm">Kembali</a>
					</div>
				</div>
			</div>
		</div>





	</div>