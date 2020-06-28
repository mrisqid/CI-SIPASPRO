<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="jadwalTambah" tabindex="-1" role="dialog" aria-labelledby="jadwalTambahLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="jadwalTambahLabel">Tambah Jadwal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?= form_open_multipart('admin/jadwal'); ?>
				<div class="form-group">
					<label for="judul">Judul Proposal</label>
					<input type="text" class="form-control" id="judul" name="judul">
				</div>
				<div class="form-group">
					<label for="mhs">Nama Mahasiswa</label>
					<input type="text" class="form-control" id="mhs" name="mhs">
				</div>
				<div class="form-group">
					<label for="nimm">NIM Mahasiswa</label>
					<input type="number" class="form-control" id="nimm" name="nimm">
				</div>
				<div class="form-group">
					<label for="dospem">Dosen Pembimbing</label>
					<input type="text" class="form-control" id="dospem" name="dospem">
				</div>
				<div class="form-group">
					<label for="penguji1">Dosen Penguji 1</label>
					<input type="text" class="form-control" id="penguji1" name="penguji1">
				</div>
				<div class="form-group">
					<label for="penguji2">Dosen Penguji 2</label>
					<input type="text" class="form-control" id="penguji2" name="penguji2">
				</div>
				<div class="form-group">
					<label for="tgl">Tanggal</label>
					<input type="date" class="form-control" id="tgl" name="tgl">
				</div>
				<div class="row">
					<div class="form-group col-md-6">
						<label for="waktua">Waktu Mulai</label>
						<input type="time" name="waktua" class="form-control" id="waktua" />
					</div>
					<div class="form-group col-md-6">
						<label for="waktub">Waktu Akhir</label>
						<input type="time" name="waktub" class="form-control" id="waktub" />
					</div>
				</div>
				<div class="form-group">
					<label for="lokasi">Lokasi</label>
					<input type="text" class="form-control" id="lokasi" name="lokasi">
				</div>
				<div class="form-group">
					<label for="kuota">Kuota Audiens</label>
					<input type="number" class="form-control" id="kuota" name="kuota">
				</div>
				<div class="form-group">
					<label for="file">File Jadwal</label>
					<input type="file" class="form-control-file" id="file" name="file">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>

<!-- Modal Tambah User -->
<div class="modal fade" id="userTambah" tabindex="-1" role="dialog" aria-labelledby="userTambahLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="userTambahLabel">Tambah User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?= form_open('admin/users'); ?>
				<div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="nim">Nomor Induk Mahasiswa (NIM)</label>
					<input type="number" class="form-control" id="nim" name="nim">
				</div>
				<div class="form-group">
					<label for="email">Alamat Email</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="password1">Password</label>
					<input type="password" class="form-control" id="password1" name="password1">
				</div>
				<div class="form-group">
					<label for="password2">Konfirmasi Password</label>
					<input type="password" class="form-control" id="password2" name="password2">
				</div>
				<div class="form-group">
					<label for="role">Role</label>
					<select class="form-control" name="role" id="role">
						<option value="1">Admin</option>
						<option value="2">Mahasiswa</option>
					</select>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih "Keluar" jika anda mau mengakhiri session anda.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-primary" href="<?= site_url('auth/logout'); ?>">Keluar</a>
			</div>
		</div>
	</div>
</div>
