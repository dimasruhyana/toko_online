<div class="container-fluid">

	<div class="row">
		<div class="col-sm-6">

			<?php if ($this->session->flashdata('flasher')) : ?>

				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Profile <strong>Berhasil </strong><?= $this->session->flashdata('flasher');  ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

			<?php endif; ?>

		</div>

	</div>

	<div class="edit-profile">
		<h1 class="text-dark"><?= $judul; ?></h1>
	</div>

	<div class="profile">

		<div class="card mb-3 mt-3">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img src="<?= base_url('assets/img/') ?><?= $user['gambar']; ?>" class=" card-img rounded-circle mt-3" alt="profile.user" style="border:1px solid #ccc;">
				</div>
				<div class="col-md-8">
					<div class="card-body bg-light">
						<h5 class="card-title text-dark"><?= $user['nama']; ?></h5>
						<p class="card-text text-dark"><?= $user['email']; ?></p>
						<p class="card-text text-muted"><?= $user['no_telepon']; ?></p>
						<p class="card-text text-dark"><?= $user['alamat']; ?></p>
						<span class="card-text float-right"><small class="text-muted ">Member since <?= date('d F Y', $user['tgl_buat']) ?></small></span>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>