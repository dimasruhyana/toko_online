<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="total-belanja">
				<div class="alert alert-success">
					<?php $grand_total = 0;

					if ($keranjang = $this->cart->contents()) {
						foreach ($keranjang as $item) {
							$grand_total = $grand_total + $item['subtotal'];
						}
						echo "<h5 align='middle'>TOTAL Belanja anda : Rp." . number_format($grand_total, 0, ',', '.');


					?>
				</div>
			</div>
			<div class="bayar">
				<div class="card">
					<div class="card-header">
						<h3 class="text-dark">Metode Pembayaran</h3>
					</div>

					<div class="card-body">
						<form action="<?= base_url(); ?>Dashboard/proses_pesan" method="post">

							<input type="hidden" name="email" value="<?= $user['email']; ?>">

							<div class="form-group">
								<label for="nama" class="text-dark">Nama Lengkap</label>
								<input type="text" name="nama" id="nama" placeholder="Masukkan Nama ..." class="form-control" autocomplete="off" value="<?= set_value('nama'); ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>

							<div class="form-group">
								<label for="alamat" class="text-dark">Alamat Lengkap</label>
								<input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat ..." class="form-control" autocomplete="off" value="<?= $user['alamat']; ?>">
								<small class="form-text text-danger"><?= form_error('alamat'); ?></small>

							</div>

							<div class="form-group">
								<label for="telepon" class="text-dark">No.Telepon</label>
								<input type="text" name="telepon" id="telepon" placeholder="Masukkan No.Telepon ..." class="form-control" autocomplete="off" value="<?= $user['no_telepon']; ?>">
								<small class="form-text text-danger"><?= form_error('telepon'); ?></small>

							</div>

							<div class="form-group">
								<label for="jasa_pengiriman" class="text-dark">Jasa Pengiriman</label>
								<select name="jasa_pengiriman" id="jasa_pengiriman" class="form-control" value="<?= set_value('jasa_pengiriman'); ?>">
									<option value="JNE">JNE</option>
									<option value="JNT">JNT</option>
									<option value="TIKI">TIKI</option>
									<option value="GRAB">GRAB</option>
									<option value="GOJEK">GOJEK</option>
								</select>
								<small class="form-text text-danger"><?= form_error('jasa_pengiriman'); ?></small>

							</div>

							<div class="form-group">
								<label for="metode_bayar" class="text-dark">Pilih Metode Pembayaran</label>
								<select name="metode_bayar" id="metode_bayar" class="form-control" value="<?= set_value('metode_bayar'); ?>">
									<option value="BNI">BNI</option>
									<option value="BRI">BRI</option>
									<option value="BCA">BCA</option>
									<option value="MANDIRI">MANDIRI</option>
									<option value="Alfamart">Alfamart</option>
									<option value="Indomart">Indomart</option>

								</select>
								<small class="form-text text-danger"><?= form_error('metode_bayar'); ?></small>

							</div>





							<button type="submit" class="btn btn-success float-right mt-2">PESAN</button>
						</form>

					</div>
				</div>
			</div>

		<?php

					} else {
						echo '<a align="middle" href="http://localhost/toko_online/welcome/index"><h5>Keranjang anda masih kosong</h5><a>';
					}

		?>

		</div>
		<div class="col-md-2"></div>
	</div>
</div>