<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Daftar Audiens</h1>
	<p class="mb-4">Pada tabel halaman ini merupakan audiens yang sudah terdaftar ke dalam jadwal
		seminar proposal.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex align-items-center justify-content-between">
			<a href="<?= site_url('admin/audiens'); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-xs fa-angle-left"></i> Kembali</a>
			<a href="<?= site_url('admin/cetak_absen/') . $djadwal['id']; ?>" class="btn btn-success btn-sm" style="font-size: 14px;"><i class="fas fa-xs fa-file-pdf"></i>
				Unduh Absensi</a>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('message'); ?>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Nama Mahasiswa</th>
							<th>NIM</th>
							<th>Tanggal Daftar</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($jadwal as $key => $j) : ?>
							<tr>
								<td class="text-center"><?= $i; ?></td>
								<td><?= $j['nama']; ?></td>
								<td class="text-center"><?= $j['nim']; ?></td>
								<td class="text-center"><?= date('d-m-Y H:i:s', strtotime($j['date_created'])); ?></td>
								<?php if ($j['status'] == 0) { ?>
									<td class="text-center text-info">Terdaftar</td>
								<?php } else if ($j['status'] == 1) { ?>
									<td class="text-center text-success">Hadir</td>
								<?php } else { ?>
									<td class="text-center text-danger">Tidak Hadir</td>
								<?php }; ?>
								<?php
								$hadir = $this->Admin_model->jumlah_kehadiran($j['id']);
								if ($hadir < 10) { ?>
									<td class="d-flex justify-content-around">
										<form method="POST" action="<?= site_url('admin/absen_hadir'); ?>">
											<input type="hidden" name="ids" value="<?= $j['id'] ?>">
											<input type="hidden" name="idj" value="<?= $j['id_jadwal'] ?>">
											<button type="submit" class="btn btn-success btn-sm" <?= $j['status'] == 1 || $djadwal['is_active'] == 1 ? 'disabled' : ''; ?>><i class="fas fa-xs fa-check"></i> Hadir</button>
										</form>
										<form method="POST" action="<?= site_url('admin/absen_alfa'); ?>">
											<input type="hidden" name="iids" value="<?= $j['id'] ?>">
											<input type="hidden" name="iidj" value="<?= $j['id_jadwal'] ?>">
											<button type="submit" class="btn btn-danger btn-sm" <?= $j['status'] == 2 || $djadwal['is_active'] == 1 ? 'disabled' : ''; ?>><i class="fas fa-xs fa-times"></i> Tidak Hadir</button>
										</form>
									</td>
								<?php } else {
									echo '<td class="text-center">
									<small class="text-danger">Mahasiswa sudah 10 kali menghadiri seminar proposal</small>
									</td>
								';
								}; ?>
							</tr>
						<?php
							$i++;
						endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
