<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Cetak Kartu Mahasiswa</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mencetak kartu tanda menghadiri seminar proposal mahasiswa yang sudah melengkapi data.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th style="font-size: 14px">No</th>
							<th style="font-size: 14px">Nama Mahasiswa</th>
							<th style="font-size: 14px">Nomor Induk Mahasiswa (NIM)</th>
							<th style="font-size: 14px">Foto</th>
							<th style="font-size: 14px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($mhs as $key => $m) :
						?>
							<tr>
								<td style="font-size: 14px" class="text-center"><?= $i; ?></td>
								<td style="font-size: 14px"><?= $m['nama']; ?></td>
								<td style="font-size: 14px" class="text-center"><?= $m['nim']; ?></td>
								<td class="text-center">
									<img class="rounded" src="<?= base_url('assets/img/profil/') . $m['image']; ?>" alt="foto" width="50px" height="50px">
								</td>
								<td class="text-center">
									<a class="btn btn-info" href="<?= site_url('admin/kartu/') . $m['id']; ?>"><i class="fas fa-eye"></i></a>
								</td>
							</tr>
						<?php
							$i++;
						endforeach;
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
