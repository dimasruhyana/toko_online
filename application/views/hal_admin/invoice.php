<div class="container-fluid">
	<h3 class="text-dark mb-3">Invoice Pemesanan</h3>

	<?php if (empty($invoice)) { ?>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<div class="alert alert-danger text-center" role="alert">
					<h5 class="text-danger "><strong>Pemesan Masih Kosong !</strong></h5>
				</div>
			</div>
			<div class="col-3"></div>
		</div>
	<?php } else { ?>



		<table class="table table-bordered table-striped table-hover mt-3">
			<tr>
				<th>No. Invoice</th>
				<th>Nama Pemesan</th>
				<th>Alamat Pengiriman</th>
				<th>Tanggal Pemesanan</th>
				<th>Batas Pembayaran</th>
				<th>Aksi</th>
			</tr>
			<?php foreach ($invoice as $inv) : ?>

				<?php if (time() - $inv->tgl_created < (60)) { ?>

					<tr>
						<td align="middle"><?= $inv->id;  ?></td>
						<td><?= $inv->nama;  ?></td>
						<td><?= $inv->alamat; ?></td>
						<td><?= $inv->tgl_pesan; ?></td>
						<td><?= $inv->batas_bayar;  ?></td>
						<td><a href="<?= base_url(); ?>admin/Invoice/detail_invoice/<?= $inv->id; ?>" class="btn btn-sm btn-primary">Detail</a></td>
					</tr>

				<?php } else { ?>

					<tr>
						<td colspan="2" class="text-center"><i class="fas fa-trash text-primary"><strong class="text-dark"> Hapus !</strong></td>
						<td colspan="3" class="text-center">
							<form action="<?= base_url('admin/Invoice/index'); ?>" method="post">
								<input type="text" name="id" readonly value="<?= $inv->id; ?>"></<input>
								<button type="submit" class="btn btn-primary btn-sm">Kirim</button>
							</form>
						</td>
						<td class="text-center"><a href="<?= base_url(); ?>admin/Invoice/detail_invoice/<?= $inv->id; ?>" class="btn btn-sm btn-primary">Detail</a></td>
					</tr>
				<?php } ?>


			<?php endforeach; ?>

		</table>
	<?php } ?>

</div>