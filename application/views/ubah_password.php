<div class="container-fluid">

	<div class="row">
		<div class="col-sm-6">

			<?php if ($this->session->flashdata('psn_slh')) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Password <?= $this->session->flashdata('psn_slh'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

			<?php if ($this->session->flashdata('psn_bnr')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Password <strong>Berhasil </strong><?= $this->session->flashdata('psn_bnr'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>

		</div>
	</div>

	<div class="edit-profile">
		<h1 class="mb-4 text-dark"><?= $judul; ?></h1>
	</div>

	<div class="row">

		<div class="col-sm-6">

			<form action="<?= base_url('user/ubah_password'); ?>" method="post">

				<div class="form-group">
					<label for="password_lama">Password saat ini</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-lock"></i></div>

						</div>
						<input type="password" name="password_lama" id="password_lama" class="form-control">

					</div>
					<?= form_error('password_lama', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="password_1">Password Baru</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-lock"></i></div>

						</div>
						<input type="password" name="password1" id="password1" class="form-control">

					</div>
					<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="password2">Ulangi Password</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fas fa-lock"></i></div>

						</div>
						<input type="password" name="password2" id="password2" class="form-control">

					</div>
					<?= form_error('password2', '<small class="text-danger">', '</small>'); ?>

				</div>

				<button type="suubmit" class="btn btn-primary">Ubah</button>

			</form>

		</div>
	</div>

</div>