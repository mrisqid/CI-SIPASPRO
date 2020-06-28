<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Kelola Audiens</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mengelola kehadiran audiens pada masing-masing
		jadwal seminar.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Jadwal</h6>
		</div>
		<div class="card-body">
			<?php echo $this->session->flashdata('message'); ?>
			<div class="table-responsive">
				<table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th style="font-size: 14px">No</th>
							<th style="font-size: 14px">Judul</th>
							<th style="font-size: 14px">Mahasiswa</th>
							<th style="font-size: 14px">Tanggal</th>
							<th style="font-size: 14px">Waktu</th>
							<th style="font-size: 14px">Lokasi</th>
							<th style="font-size: 14px">Kuota</th>
							<th style="font-size: 14px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($jadwal as $key => $j) :
							$id = $j['id'];
							$jumlahPendaftar = $this->Admin_model->jumlah_pendaftar($id);
						?>
							<tr>
								<td style="font-size: 14px" class="text-center"><?= $i; ?></td>
								<td style="font-size: 14px"><?= $j['judul']; ?></td>
								<td style="font-size: 14px"><?= $j['mhs']; ?> (<?= $j['nim']; ?>)</td>
								<td style="font-size: 14px">
									<?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
									<?= strftime('%A, %d %B %Y', strtotime($j['tgl'])); ?>
								</td>
								<td style="font-size: 14px"><?= date('H:i', strtotime($j['waktua'])); ?>-<?= date('H:i', strtotime($j['waktub'])); ?></td>
								<td style="font-size: 14px"><?= $j['lokasi']; ?></td>
								<td style="font-size: 14px"><?= $jumlahPendaftar; ?> / <?= $j['kuota']; ?></td>
								<td style="font-size: 14px" class="d-flex justify-content-around">
									<a class="btn btn-primary btn-sm" href="<?= site_url('admin/daftar_audiens/') . $j['id']; ?>"><i class="fas fa-xs fa-users"></i></a>
									<?php if ($j['is_active'] == 1) { ?>
										<a class="btn btn-info btn-sm" href="<?= site_url('admin/jadwal_off/') . $j['id']; ?>" onclick="return confirm('Apakah anda ingin mengunci jadwal ini?')"><i class="fas fa-xs fa-lock-open"></i></a>
									<?php } else { ?>
										<a class="btn btn-warning btn-sm" href="<?= site_url('admin/jadwal_aktif/') . $j['id']; ?>" onclick="return confirm('Apakah anda ingin membuka kembali jadwal ini?')"><i class="fas fa-xs fa-lock"></i></a>
									<?php }; ?>
								</td>
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
