<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Jadwal yang pernah diikuti</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat melihat info jadwal yang pernah diikuti.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Jadwal</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th style="font-size: 14px">No</th>
							<th style="font-size: 14px">Judul</th>
							<th style="font-size: 14px">Pemateri</th>
							<th style="font-size: 14px">Tanggal</th>
							<th style="font-size: 14px">Waktu</th>
							<th style="font-size: 14px">Lokasi</th>
							<th style="font-size: 14px">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($jadwal as $key => $j) : ?>
							<tr>
								<td class="text-center" style="font-size: 14px"><?= $i; ?></td>
								<td style="font-size: 14px"><?= $j['judul']; ?></td>
								<td style="font-size: 14px"><?= $j['mhs']; ?> (<?= $j['nim']; ?>)</td>
								<td style="font-size: 14px">
									<?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
									<?= strftime('%A, %d %B %Y', strtotime($j['tgl'])); ?>
								</td>
								<td style="font-size: 14px"><?= date('H:i', strtotime($j['waktua'])); ?>-<?= date('H:i', strtotime($j['waktub'])); ?></td>
								<td style="font-size: 14px"><?= $j['lokasi']; ?></td>
								<?php if ($j['status'] == 0) { ?>
									<td style="font-size: 14px">
										<span class="badge badge-primary">
											<i class="fas fa-xs fa-circle"></i>
											Terdaftar</span></td>
								<?php } else if ($j['status'] == 1) { ?>
									<td style="font-size: 14px">
										<span class="badge badge-success">
											<i class="fas fa-xs fa-check"></i>
											Hadir</span></td>
								<?php } else { ?>
									<td style="font-size: 14px">
										<span class="badge badge-danger">
											<i class="fas fa-xs fa-times"></i>
											Tidak hadir</span></td>
								<?php }; ?>
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
