<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Kelola Jadwal</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mengelola data-data yang berkaitan dengan jadwal
		seminar proposal.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= site_url('admin/jadwal'); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-xs fa-angle-left"></i> Kembali</a>
		</div>
		<div class="card-body">
			<?= form_open_multipart(); ?>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="ejudul">Judul Proposal</label>
						<textarea name="ejudul" id="ejudul" rows="3" class="form-control"><?= $jadwal['judul']; ?></textarea>
						<?= form_error('ejudul', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="emhs">Nama Mahasiswa</label>
						<input type="text" id="emhs" name="emhs" class="form-control" value="<?= $jadwal['mhs']; ?>">
						<?= form_error('emhs', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="enim">NIM Mahasiswa</label>
						<input type="number" id="enim" name="enim" class="form-control" value="<?= $jadwal['nim']; ?>">
						<?= form_error('enim', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="edospem">Dosen Pembimbing</label>
						<input type="text" id="edospem" name="edospem" class="form-control" value="<?= $jadwal['dospem']; ?>">
						<?= form_error('edospem', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="epenguji1">Dosen Penguji 1</label>
						<input type="text" id="epenguji1" name="epenguji1" class="form-control" value="<?= $jadwal['penguji1']; ?>">
						<?= form_error('epenguji1', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="epenguji2">Dosen Penguji 2</label>
						<input type="text" id="epenguji2" name="epenguji2" class="form-control" value="<?= $jadwal['penguji2']; ?>">
						<?= form_error('epenguji2', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="etgl">Tanggal Seminar</label>
						<input type="date" id="etgl" name="etgl" class="form-control" value="<?= $jadwal['tgl']; ?>">
						<?= form_error('etgl', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="ewaktua">Waktu Mulai</label>
								<input type="time" id="ewaktua" name="ewaktua" class="form-control" value="<?= $jadwal['waktua']; ?>">
								<?= form_error('ewaktua', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="ewaktub">Waktu Akhir</label>
								<input type="time" id="ewaktub" name="ewaktub" class="form-control" value="<?= $jadwal['waktub']; ?>">
								<?= form_error('ewaktub', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="elokasi">Lokasi Seminar</label>
						<input type="text" id="elokasi" name="elokasi" class="form-control" value="<?= $jadwal['lokasi']; ?>">
						<?= form_error('elokasi', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="ekuota">Kuota Audiens</label>
						<input type="number" id="ekuota" name="ekuota" class="form-control" value="<?= $jadwal['kuota']; ?>">
						<?= form_error('ekuota', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="efile">File Seminar</label>
						<input type="file" id="efile" name="efile" class="form-control-file">
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-center mt-3">
				<button type="submit" class="btn btn-primary">Edit Jadwal</button>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
