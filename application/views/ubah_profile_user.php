<div class="container-fluid">
	<div class="edit-profile">
		<h1 class="mb-4 text-dark "><?= $judul; ?></h1>
	</div>

	<div class="row">
		<div class="col-sm-8">

			<div class="ubah-profile">

				<?= form_open_multipart('user/ubah_profile'); ?>

				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label text-dark">Email</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
					</div>

				</div>

				<div class="form-group row">
					<label for="nama" class="col-sm-2 col-form-label text-dark">Nama</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
						<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
					</div>

				</div>

				<div class="form-group row">
					<label for="text" class="col-sm-2 col-form-label text-dark">No.Telepon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $user['no_telepon']; ?>">
						<?= form_error('no_telepon', '<small class="text-danger">', '</small>'); ?>
					</div>

				</div>

				<div class="form-group row">
					<label for="text" class="col-sm-2 col-form-label text-dark">Alamat</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat']; ?>">
						<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
					</div>

				</div>


				<div class="form-group row">
					<div class="col-sm-2 text-dark">Picture</div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?= base_url('assets/img/') . $user['gambar']; ?>" class="img-thumbnail">
							</div>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="gambar" name="gambar">
									<label class="custom-file-label text-dark" for="gambar">Choose file</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" onclick="return confirm('YAKIN?');">Ubah</button>
					</div>
				</div>




				</form>

			</div>

		</div>
	</div>
</div>