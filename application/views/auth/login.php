<div class="col">
	<form method="POST" action="" class="form-signin">
		<div class="mb-2 text-center">
			<span class="badge badge-primary">
				<a class="text-decoration-none text-white" href="<?= site_url('home'); ?>">
					<li class="fas fa-angle-double-right"></li>SIPASPRO
				</a>
			</span>
			<h2 class="mb-3 mt-3 font-weight-bold">Login Akun</h2>
			<p class="text-muted">Masuk untuk melanjutkan aktivitas.</p>
		</div>
		<?php echo $this->session->flashdata('message'); ?>
		<div class="form-label-group">
			<input type="text" id="inputEmail" class="form-control" placeholder="Alamat email" name="email" autofocus>
			<label for="inputEmail">Alamat email</label>
			<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>

		<div class="form-label-group">
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
			<label for="inputPassword">Password</label>
			<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>
		<button class="btn btn-primary btn-block shadow" type="submit">Masuk Akun Saya</button>
		<hr />

		<a href="<?= site_url('auth/register'); ?>" class="btn btn-light btn-block shadow">Daftar Akun Baru</a>
