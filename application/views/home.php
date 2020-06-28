<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIPASPRO</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="https://img.icons8.com/metro/26/000000/monitor.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/bootstrap/css/bootstrap.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/libs/fontawesome/css/all.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

</head>

<body>
	<header>
		<!-- navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#"><i class="fas fa-angle-double-right"></i>SIPASPRO</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto text-uppercase">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tentang">Tentang</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#jadwal">Jadwal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#profil">Profil</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<a href="<?= site_url('auth'); ?>" class="btn btn-sm btn-primary my-2 my-sm-0 mr-2">Masuk</a>
						<a href="<?= site_url('auth/register'); ?>" class="btn btn-sm btn-primary my-2 my-sm-0">Daftar</a>
					</form>
				</div>
			</div>
		</nav>
		<!-- end navbar -->
	</header>

	<main role="main">
		<!-- Jumbotron -->
		<div class="jumbotron" id="home">
			<div class="container text-center">
				<h1 class="display-4 text-uppercase font-weight-bold">Sistem Pendaftaran Audiens Seminar Proposal
				</h1>
				<p class="lead pb-3">Memberikan solusi untuk mahasiswa!</p>
				<a class="btn btn-primary" href="<?= site_url('auth'); ?>" role="button">Masuk</a>
			</div>
		</div>
		<!-- end jumbotron -->

		<!-- Brands -->
		<section class="brands">
			<div class="container">
				<div class="row p-2 text-center">
					<div class="col-md">
						<img src="<?= base_url(); ?>assets/img/brand/Logo iain 260x80.png" class="img-fluid">
					</div>
					<div class="col-md">
						<img src="<?= base_url(); ?>assets/img/brand/Logo ptik 260x80.png" class="img-fluid">
					</div>
					<div class="col-md">
						<img src="<?= base_url(); ?>assets/img/brand/Logo mrd 260x80.png" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
		<!-- End Brands -->

		<!-- About -->
		<div class="container">
			<hr class="featurette-divider" id="tentang">

			<div class="row featurette">
				<div class="col-md-7 my-auto">
					<h2 class="featurette-heading mb-3">Media pilihan baru</h2>
					<p class="lead">Sistem ini menjadi pilihan baru yang bertujuan untuk membantu anda sebagai mahasiswa
						dalam berpartisipasi di
						dalam kegiatan seminar proposal sebagai audiens</p>
				</div>
				<div class="col-md-5">
					<img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/about/1.jpg" height="100%" width="100%">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 order-md-2 my-auto">
					<h2 class="featurette-heading mb-3">Akses lebih mudah dan dimana saja.</h2>
					<p class="lead">Dapat akses dimana saja dan kapan pun, dengan jadwal dan info terupdate, anda tidak
						perlu khawatir lagi ketinggalan informasi.</p>
				</div>
				<div class="col-md-5 order-md-1">
					<img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/about/2.jpg" alt="" height="100%" width="100%">
				</div>
			</div>

			<hr class="featurette-divider">

			<div class="row featurette">
				<div class="col-md-7 my-auto">
					<h2 class="featurette-heading mb-3">Melengkapi persyaratan sempro jauh lebih gampang.</h2>
					<p class="lead">Anda tidak perlu takut lagi kehilangan kartu tanda menghadiri sempro, semua sudah di
						lengkapi di dalam sistem ini.</p>
				</div>
				<div class="col-md-5">
					<img class="img-fluid rounded" src="<?= base_url(); ?>assets/img/about/3.jpg" alt="" height="100%" width="100%">
				</div>
			</div>

			<hr class="featurette-divider" id="jadwal">
		</div>
		<!-- End About -->

		<!-- Jadwal -->
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-5">
					<h2 class="mb-3">Jadwal Terdekat</h2>
					<p class="lead pb-5 mb-3">Informasi terbaru dari jadwal seminar proposal.</p>
					<div class="d-none d-lg-block">
						<a href="<?= site_url('auth'); ?>" class="btn btn-primary shadow">Lihat List Jadwal</a>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="row">
						<?php foreach ($jadwal as $key => $j) : ?>
							<div class="col-md-6 mb-5">
								<div class="card bg-white shadow rounded mb-3 h-100">
									<a href="<?= site_url('admin/jadwal_detail/') . $j['id']; ?>">
										<img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img-fluid card-img-top" alt="...">
									</a>
									<div class="m-4">
										<?php
										$id = $j['id'];
										$jumlahPendaftar = $this->Admin_model->jumlah_pendaftar($id);
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
										<a class="text-decoration-none" href="<?= site_url('admin/jadwal_detail/') . $j['id']; ?>">
											<h5>
												<?php
												$num_char = 50;
												$text = $j['judul'];
												echo substr($text, 0, $num_char) . '...';
												?>
											</h5>
										</a>
										<small class="text-muted"><?= $j['mhs']; ?></small>
										<span class="text-muted d-flex align-items-center justify-content-between mb-2 mt-3">
											<i class="fas fa-calendar-alt"></i>
											<?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
											<?= strftime('%A, %d %B %Y', strtotime($j['tgl'])); ?>
										</span>
										<span class="text-muted d-flex align-items-center justify-content-between mb-2">
											<i class="fas fa-clock"></i>
											<?= $j['waktua']; ?> - <?= $j['waktub']; ?>
										</span>
										<span class="text text-capitalize text-muted d-flex align-items-center justify-content-between mb-2">
											<i class="fas fa-map-marker-alt"></i>
											<?= $j['lokasi']; ?>
										</span>
										<span class="text-muted d-flex align-items-center justify-content-between mb-2">
											<i class="fas fa-user-plus"></i>
											<?= $jumlahPendaftar; ?> / <?= $j['kuota']; ?>
										</span>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="d-lg-none mt-3 mb-5 mx-auto">
					<a href="<?= site_url('auth'); ?>" class="btn btn-primary shadow">Lihat List Jadwal</a>
				</div>
			</div>

			<hr class="featurette-divider" id="profil">
		</div>
		<!-- End Jadwal -->

		<!-- Profil -->
		<section class="designer p-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col">
						<h3>Profil Kami</h3>
						<p class="lead">Kenali kami lebih dekat.</p>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-6 col-sm-4 text-center">
						<figure class="figure">
							<img src="https://image.flaticon.com/icons/svg/149/149071.svg" width="130px" class="figure-img img-fluid rounded-circle">
							<figcaption class="figure-caption text-center">
								<h6>Hari Antoni Musril, S.Kom., M.Kom</h6>
								<p>Dosen Pembimbing</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-6 col-sm-4 text-center">
						<figure class="figure">
							<img src="https://image.flaticon.com/icons/svg/149/149071.svg" width="130px" class="figure-img img-fluid rounded-circle">
							<figcaption class="figure-caption text-center">
								<h6>Muhammad Risqi Darmawan</h6>
								<p>Mahasiswa</p>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>

		</section>
		<!-- End Profil -->

		<!-- Footer -->
		<footer class="border-top p-5 bg-dark">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-1">
						<a class="navbar-brand text-white" href="#"><i class="fas fa-angle-double-right"></i>SIPASPRO</a>
					</div>
					<div class="col-4 text-right">
						<a href="https://web.facebook.com/muhammad.darmawan.520">
							<img src="assets/img/social/fb.png">
						</a>
						<a href="https://telegram.me/mrisqid">
							<img src="assets/img/social/telegram.png">
						</a>
						<a href="https://api.whatsapp.com/send?phone=085235364181">
							<img src="assets/img/social/wa.png">
						</a>
					</div>
				</div>
				<div class="row mt-3 justify-content-between">
					<p class="text-white mx-auto">All Rights Reserved by MRD &COPY; 2020.</p>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

	</main>
	<!-- Javascript -->
	<!-- JQuery -->
	<script src="<?= base_url(); ?>assets/libs/jquery/jquery-3.4.1.min.js"></script>

	<!-- Bootstrap -->
	<script src="<?= base_url(); ?>assets/libs/bootstrap/js/bootstrap.js"></script>
	<script src="<?= base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
