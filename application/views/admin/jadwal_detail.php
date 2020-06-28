<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Detail Jadwal</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat melihat keterangan jadwal.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a href="<?= site_url('admin/dashboard'); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-xs fa-angle-left"></i> Kembali</a>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6">
					<div class="pb-2">
						<h5 class="text font-weight-bold">Judul :</h5>
						<p><?= $jadwal['judul']; ?></p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Nama Mahasiswa :</h5>
						<p><?= $jadwal['mhs']; ?> (<?= $jadwal['nim']; ?>)</p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Dosen Pembimbing :</h5>
						<p><?= $jadwal['dospem']; ?></p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Dosen Penguji 1 :</h5>
						<p><?= $jadwal['penguji1']; ?></p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Dosen Penguji 2 :</h5>
						<p><?= $jadwal['penguji2']; ?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="pb-2">
						<h5 class="text font-weight-bold">Tanggal Seminar :</h5>
						<p>
							<?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
							<?= strftime('%A, %d %B %Y', strtotime($jadwal['tgl'])); ?>
						</p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Waktu Seminar :</h5>
						<p><?= date('H:i', strtotime($jadwal['waktua'])); ?> - <?= date('H:i', strtotime($jadwal['waktub'])); ?></p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Lokasi Seminar :</h5>
						<p><?= $jadwal['lokasi']; ?></p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">Kuota Audiens :</h5>
						<p><?= $jadwal['kuota']; ?> Orang</p>
					</div>
					<div class="pb-2">
						<h5 class="text font-weight-bold">File Seminar :</h5>
						<?php if (!empty($jadwal['file'])) { ?>
							<a class="btn btn-sm btn-success" href="<?= base_url('uploads/') . $jadwal['file']; ?>">Unduh</a>
						<?php } else { ?>
							<a class="btn btn-sm btn-success disabled float-left" href="#">Unduh</a>
							<p class="text-danger float-left ml-2">Maaf file belum tersedia!</p>
						<?php }; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
