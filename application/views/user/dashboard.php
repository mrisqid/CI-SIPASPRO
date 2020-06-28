<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>

	<!-- Content Row -->
	<div class="row d-flex justify-content-center">

		<!-- Total Jadwal Card -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Jumlah Jadwal (Total)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- New Jadwal Card -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Jadwal Aktif (Baru)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jaktif;; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar-check fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Student Card -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
								Hadir dalam seminar
							</div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
								<?php
								$id = $user['id'];
								$jumlahHadir = $this->User_model->jumlah_hadir($id);
								?>
								<?= $jumlahHadir; ?> / 10
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-tasks fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl col-lg">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div class="card-header py-3 d-md-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Jadwal Seminar Proposal</h6>
					<form class="form-inline" action="<?= site_url('user/dashboard'); ?>">
						<div class="input-group">
							<input class="form-control" type="search" placeholder="Cari" name="find">
							<div class="input-group-append">
								<button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
							</div>
						</div>
					</form>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<?php echo $this->session->flashdata('message'); ?>
					<div class="row d-flex flex-wrap mb-3">
						<?php foreach ($jadwal as $key => $j) : ?>
							<div class="col-sm-3 mb-5">
								<div class="card bg-white shadow rounded mb-3 h-100">
									<a href="<?= site_url('user/jadwal_detail/') . $j['id']; ?>">
										<img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img-fluid card-img-top" alt="...">
									</a>
									<div class="m-4">
										<?php
										$id = $j['id'];
										$jumlahPendaftar = $this->User_model->jumlah_pendaftar($id);
										if ($j['is_active'] == 1) {
											if ($jumlahPendaftar < $j['kuota']) {
										?>
												<span class="badge badge-success mb-3">Tersedia</span>
											<?php
											} else {
											?>
												<span class="badge badge-warning mb-3">Penuh</span>
											<?php
											}
										} else {
											?>
											<span class="badge badge-secondary mb-3">Selesai</span>
										<?php
										}; ?>
										<a class="text-decoration-none" href="<?= site_url('user/jadwal_detail/') . $j['id']; ?>">
											<h6>
												<?php
												$num_char = 50;
												$text = $j['judul'];
												echo substr($text, 0, $num_char) . '...';
												?>
											</h6>
										</a>
										<small class="text-muted"><?= $j['mhs']; ?></small>
										<span style="font-size: 12px" class="text-muted d-flex align-items-center justify-content-between mb-2 mt-3">
											<i class="fas fa-xs fa-calendar-alt"></i>
											<?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
											<?= strftime('%A, %d %B %Y', strtotime($j['tgl'])); ?>
										</span>
										<span style="font-size: 12px" class="text-muted d-flex align-items-center justify-content-between mb-2">
											<i class="fas fa-xs fa-clock"></i>
											<?= date('H:i', strtotime($j['waktua'])); ?> - <?= date('H:i', strtotime($j['waktub'])); ?>
										</span>
										<span style="font-size: 12px" class="text text-capitalize text-muted d-flex align-items-center justify-content-between mb-2">
											<i class="fas fa-xs fa-map-marker-alt"></i>
											<?= $j['lokasi']; ?>
										</span>
										<span style="font-size: 12px" class="text-muted d-flex align-items-center justify-content-between mb-2">
											<i class="fas fa-xs fa-user-plus"></i>
											<?= $jumlahPendaftar; ?> / <?= $j['kuota']; ?>
										</span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<?= $pagination; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
