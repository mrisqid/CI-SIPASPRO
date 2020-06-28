<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Ubah Profil</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mengubah profil akun anda.</p>

	<!-- Edit Profile Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Ubah Data Profil</h6>
			<a href="<?= site_url('user/ubah_password'); ?>" class="btn btn-info btn-sm" style="font-size: 14px;"><i class="fas fa-xs fa-key"></i>
				Ganti Password</a>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('message'); ?>
			<?= form_open_multipart('user/ubah_profil'); ?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="eemail">Alamat Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="eemail" value="<?= $user['email']; ?>" readonly>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="enama">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="enama" name="enama" value="<?= $user['nama']; ?>">
					<?= form_error('enama', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Foto</label>
				<div class="col-sm-10">
					<div class="row">
						<div class="col-sm-3">
							<img class="img-thumbnail" src="<?= base_url('assets/img/profil/') . $user['image']; ?>" alt="foto-profil">
						</div>
						<div class="col-sm-5">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="image" name="image">
								<label class="custom-file-label" for="image">Choose file</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-center pt-3">
				<button type="submit" class="btn btn-primary rounded">Simpan Perubahan</button>
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
