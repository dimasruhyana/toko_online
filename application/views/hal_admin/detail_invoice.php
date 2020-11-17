<div class="container-fluid">
	<h3>Detail Pesanan <div class="btn btn-sm btn-success ml-3">No. Invoice : <?= $invoice->id; ?></div>
	</h3>

	<table class="table table-bordered table-striped table-hover mt-3">
		<tr align="middle">
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Harga Satuan</th>
			<th>Sub-Total</th>

		</tr>



		<?php

		$total = 0;

		foreach ($pesanan as $psn) : ?>

			<?php

			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;

			?>

			<?php if (time() - $psn->tgl_pesan < (60)) { ?>



				<tr>
					<td align="middle"><?= $psn->id_brg; ?></td>
					<td align="middle"><?= $psn->nama_brg; ?></td>
					<td align="middle"><?= $psn->jumlah; ?></td>
					<td>Rp. <?= number_format($psn->harga, 0, ',', '.'); ?></td>
					<td>Rp. <?= number_format($subtotal, 0, ',', '.'); ?></td>

				</tr>

			<?php } else { ?>

				<tr>
					<td colspan="3" class="text-danger text-center"><i class="fas fa-trash text-primary"></i><strong class="text-dark"> Hapus !</strong></td>
					<td colspan="3" class="text-center">
						<form action="<?= base_url('admin/Invoice/hapus_pesanan'); ?>" method="post">
							<input type="text" name="id_pesan" readonly value="<?= $psn->id; ?>"></input>
							<button type="submit" class="btn btn-primary btn-sm">Kirim</button>
						</form>
					</td>
				</tr>
			<?php } ?>

		<?php endforeach; ?>
		<tr>
			<td colspan="4" align="right" class="text-dark"><strong>Grand Total</strong></td>
			<td>Rp. <?= number_format($total, 0, ',', '.'); ?></</td> </tr> </table> <a href="<?= base_url(); ?>admin/Invoice/index" class="btn btn-danger float-right mr-5 mt-4">Kembali</a>
</div>