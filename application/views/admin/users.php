<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Kelola Users</h1>
	<p class="mb-4">Pada tabel halaman ini anda dapat mengelola data-data user.</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Data User</h6>
			<button type="button" class="btn btn-success btn-sm" style="font-size: 14px;" data-toggle="modal" data-target="#userTambah"><i class="fas fa-xs fa-plus"></i>
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
				<table class="table table-striped table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th style="font-size: 14px">No</th>
							<th style="font-size: 14px">Nama Lengkap</th>
							<th style="font-size: 14px">NIM</th>
							<th style="font-size: 14px">Email</th>
							<th style="font-size: 14px">Role</th>
							<th style="font-size: 14px">Foto</th>
							<th style="font-size: 14px">Tanggal</th>
							<th style="font-size: 14px">Status</th>
							<th style="font-size: 14px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($duser as $key => $d) :
						?>
							<tr>
								<td class="text-center" style="font-size: 14px"><?= $i; ?></td>
								<td style="font-size: 14px"><?= $d['nama']; ?></td>
								<td style="font-size: 14px"><?= $d['nim']; ?></td>
								<td style="font-size: 14px"><?= $d['email']; ?></td>
								<?= $d['role_id'] == 1 ? '<td style="font-size: 14px">Admin</td>' : '<td style="font-size: 14px">Mahasiswa</td>'; ?>
								<td class="text-center"><img class="rounded" src="<?= base_url('assets/img/profil/') . $d['image']; ?>" alt="foto" width="50px" height="50px">
								</td>
								<td style="font-size: 14px"><?= date('d-m-Y H:i:s', strtotime($d['date'])); ?></td>
								<td style="font-size: 14px"><?= $d['is_active'] == 1 ? 'Aktif' : 'Tidak Aktif'; ?></td>
								<td class="d-flex justify-content-between">
									<?php if ($d['is_active'] == 1) { ?>
										<a class="btn btn-info btn-sm <?= $d['id'] == $user['id'] ? 'disabled' : ''; ?>" href="<?= site_url('admin/status_off/') . $d['id']; ?>" onclick="return confirm('Apakah anda ingin menonaktifkan akun ini?')"><i class="fas fa-toggle-on"></i></a>
									<?php } else { ?>
										<a class="btn btn-secondary btn-sm <?= $d['id'] == $user['id'] ? 'disabled' : ''; ?>" href="<?= site_url('admin/status_aktif/') . $d['id']; ?>" onclick="return confirm('Apakah anda ingin mengaktifkan akun ini?')"><i class="fas fa-toggle-off"></i></a>
									<?php }; ?>
									<a class="btn btn-danger btn-sm <?= $d['id'] == $user['id'] ? 'disabled' : ''; ?>" href="<?= site_url('admin/hapus_user/') . $d['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-xs fa-trash"></i></a>
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
