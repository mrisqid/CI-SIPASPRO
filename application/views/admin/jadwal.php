<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Kelola Jadwal</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mengelola data-data yang berkaitan dengan jadwal
		seminar proposal.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Data Jadwal</h6>
			<button type="button" class="btn btn-success btn-sm" style="font-size: 14px;" data-toggle="modal" data-target="#jadwalTambah"><i class="fas fa-xs fa-plus"></i>
				Tambah</button>
		</div>
		<div class="card-body">
			<?php
			if (validation_errors()) {
				echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>";
				echo validation_errors();
				echo "
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
					</button>
			  		</div>";
			};
			?>
			<?php echo $this->session->flashdata('message'); ?>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered" id="dataTable" width="100%">
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
						foreach ($jadwal as $key => $j) : ?>
							<tr>
								<td class="text-center" style="font-size: 14px"><?= $i; ?></td>
								<td style="font-size: 14px"><?= $j['judul']; ?></td>
								<td style="font-size: 14px"><?= $j['mhs']; ?></td>
								<td style="font-size: 14px">
									<?php setlocale(LC_ALL, 'id-ID', 'id_ID'); ?>
									<?= strftime('%A, %d %B %Y', strtotime($j['tgl'])); ?>
								</td>
								<td style="font-size: 14px"><?= date('H:i', strtotime($j['waktua'])); ?>-<?= date('H:i', strtotime($j['waktub'])); ?></td>
								<td style="font-size: 14px"><?= $j['lokasi']; ?></td>
								<td style="font-size: 14px"><?= $j['kuota']; ?></td>
								<td class="d-flex justify-content-around">
									<a class="btn btn-primary btn-sm" href="<?= site_url('admin/edit_jadwal/') . $j['id']; ?>"><i class="fas fa-xs fa-edit"></i></a>
									<a class="btn btn-danger btn-sm" href="<?= site_url('admin/hapus_jadwal/') . $j['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-xs fa-trash"></i></a>
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
