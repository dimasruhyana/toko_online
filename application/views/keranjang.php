<div class="container-fluid">
	<div class="edit-profile">
		<h1 class="text-dark">Keranjang Belanja</h1>
	</div>

	<table class="table table-bordered table-striped table-hover mt-3">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>

		<?php $no = 1; ?>
		<?php foreach ($this->cart->contents() as $item) : ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $item['name']; ?></td>
				<td><?= $item['qty']; ?></td>
				<td align="right">Rp. <?= number_format($item['price'], 0, ',', '.') ?></td>
				<td align="right">Rp. <?= number_format($item['subtotal'], 0, ',', '.') ?></td>

			</tr>

		<?php endforeach; ?>
		<tr>
			<td colspan="4"></td>
			<td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
		</tr>


	</table><br>

	<div class="aksi-keranjang text-center">

		<a href="<?= base_url(); ?>Dashboard/pembayaran" class="btn btn-success btn-sm float-right">Pembayaran</a>


		<a href="<?= base_url(); ?>welcome/index" class="btn btn-primary btn-sm float-right mr-3">Lanjutkan Belanja</a>

		<a href="<?= base_url(); ?>Dashboard/hapus_keranjang" class="btn btn-danger btn-sm float-right mr-3" onclick="confirm('YAKIN');">Hapus Keranjang</a>
	</div>


</div>