<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Ubah Password</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mengubah password akun anda.</p>

	<!-- Ubah password Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= site_url('admin/ubah_profil'); ?>" class="btn btn-secondary btn-sm" style="font-size: 14px;"><i class="fas fa-xs fa-angle-left"></i>
				Kembali</a>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('message'); ?>
			<?= form_open('admin/ubah_password'); ?>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label" for="cpassword">Password Lama</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="cpassword" name="cpassword">
					<?= form_error('cpassword', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label" for="upassword1">Password Baru</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="upassword1" name="upassword1">
					<?= form_error('upassword1', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label" for="upassword2">Konfirmasi Password
					Baru</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" id="upassword2" name="upassword2">
					<?= form_error('upassword2', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row justify-content-center pt-3">
				<button type="submit" class="btn btn-primary rounded">Ubah Password</button>
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
