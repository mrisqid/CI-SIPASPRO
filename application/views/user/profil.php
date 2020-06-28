<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Profil</h1>

	<!-- Profile Example -->
	<div class="card shadow mb-4 col-lg-8">
		<div class="card-body">
			<div class="row">
				<div class="col-md-5">
					<img class="card-img" src="<?= base_url('assets/img/profil/') . $user['image']; ?>" alt="gambar profil">
				</div>
				<div class="col-md-7 my-auto pt-3">
					<h5 class="card-title"><?= $user['nama']; ?></h5>
					<p class="card-text"><?= $user['nim']; ?></p>
					<p class="card-text"><?= $user['email']; ?></p>
					<p class="card-text">Terdaftar pada: <?= date('d-m-Y H:i:s', strtotime($user['date'])); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
