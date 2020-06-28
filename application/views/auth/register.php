<div class="col mt-5">
	<form method="POST" action="" class="form-signin">
		<div class="mb-2 text-center">
			<span class="badge badge-primary">
				<a class="text-decoration-none text-white" href="<?= site_url('home'); ?>">
					<li class="fas fa-angle-double-right"></li>SIPASPRO
				</a>
			</span>
			<h2 class="mb-3 mt-3 font-weight-bold">Akun Baru</h2>
			<p class="text-muted">Ayo bergabung bersama kami.</p>
		</div>

		<div class="form-label-group">
			<input type="text" name="nama" id="inputName" class="form-control" placeholder="Nama Lengkap" autofocus>
			<label for="inputName">Nama lengkap</label>
			<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>

		<div class="form-label-group">
			<input type="number" name="nim" id="inputNim" class="form-control" placeholder="Nomor Induk Mahasiswa (NIM)">
			<label for="inputEmail">Nomor Induk Mahasiswa (NIM)</label>
			<?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>

		<div class="form-label-group">
			<input type="text" name="email" id="inputEmail" class="form-control" placeholder="Alamat email">
			<label for="inputEmail">Alamat email</label>
			<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>

		<div class="form-label-group">
			<input type="password" name="password1" id="inputPassword" class="form-control" placeholder="Password">
			<label for="inputPassword">Password</label>
			<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>

		<div class="form-label-group">
			<input type="password" name="password2" id="inputConfirmPassword" class="form-control" placeholder="Konfirmasi Password">
			<label for="inputConfirmPassword">Konfirmasi Password</label>
			<?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
		</div>

		<button class="btn btn-primary btn-block shadow" type="submit">Buat akun</button>
		<hr />

		<a href="<?= site_url('auth'); ?>" class="btn btn-light btn-block shadow">Login dengan akun lama</a>
