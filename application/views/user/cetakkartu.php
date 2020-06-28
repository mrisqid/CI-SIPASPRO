<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Cetak Kartu</h1>
	</div>

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl col-lg">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Kartu Tanda Menghadiri Seminar
						Proposal</h6>
					<a class="btn btn-success btn-sm" href="<?= site_url('user/kartu'); ?>"><i class="fas fa-xs fa-file-pdf"></i>
						Unduh</a>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="text-center mt-3">
						<h5 class="text-uppercase font-weight-bold">Kartu Tanda
							Menghadiri Seminar
							Proposal</h5>
						<h5 class="text-uppercase font-weight-bold">Fakultas Tarbiyah Dan Ilmu
							Keguruan (FTIK)
							IAIN Bukittinggi</h5>
					</div>
					<div class="my-4">
						<div class="row">
							<div class="col-sm-1">
								<p class="text-muted">Nama</p>
							</div>
							<div class="col">
								<p class="text-muted">: <?= $user['nama']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-1">
								<p class="text-muted">NIM</p>
							</div>
							<div class="col">
								<p class="text-muted">: <?= $user['nim']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-1">
								<p class="text-muted">Prodi</p>
							</div>
							<div class="col">
								<p class="text-muted float-left">: Pendidikan Teknik Informatika dan
									Komputer</p>
							</div>
						</div>
						<table class="table table-bordered table-responsive">
							<thead>
								<tr class="text-center">
									<th class="text-center" style="font-size: 14px;">NO</th>
									<th style="font-size: 14px;">NAMA & NIM MHS YG SEMINAR</th>
									<th style="font-size: 14px;">HARI & TGL SEMINAR</th>
									<th style="font-size: 14px;">JUDUL PROPOSAL</th>
									<th style="font-size: 14px;">PEMBIMBING & NARASUMBER SEMINAR</th>
									<th style="font-size: 14px;">NAMA & TANDA TANGAN SEKRETARIS</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if ($jadwal) {
									$i = 1;
									setlocale(LC_ALL, 'id-ID', 'id_ID');
									foreach ($jadwal as $key => $j) :
								?>
										<tr>
											<td class="text-center" style="font-size: 14px;"><?= $i; ?></td>
											<td style="font-size: 14px;"><?= $j['mhs']; ?> <br>(<?= $j['nim']; ?>)</td>
											<td style="font-size: 14px;"><?= strftime('%A', strtotime($j['tgl'])); ?> <br><?= strftime('%d %B %Y', strtotime($j['tgl'])); ?></td>
											<td style="font-size: 14px;"><?= $j['judul']; ?></td>
											<td style="font-size: 14px;"><?= $j['dospem']; ?> <br>
												<?= $j['penguji1']; ?> <br>
												<?= $j['penguji2']; ?>
											</td>
											<td class="text-center" style="font-size: 14px;"><span class="badge badge-success rounded-circle"><i class="fas fa-check"></i></span></td>
										</tr>
								<?php
										$i++;
									endforeach;
								} else {
									echo '<tr>
									<td class="text-center" colspan="6"><small class="text-danger">Anda belum pernah menghadiri seminar proposal</small></td>
								</tr>';
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
