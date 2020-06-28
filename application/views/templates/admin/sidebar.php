<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
		<div class="sidebar-brand-icon">
			<i class="fas fa-angle-double-right"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SIPASPRO</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?= $title == 'Dashboard' || $title == 'Detail Jadwal' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Pengelolaan Sempro
	</div>

	<!-- Nav Item - Schedule -->
	<li class="nav-item <?= $title == 'Kelola Jadwal' || $title == 'Edit Jadwal' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/jadwal'); ?>">
			<i class="fas fa-fw fa-calendar-alt"></i>
			<span>Kelola Jadwal</span>
		</a>
	</li>

	<!-- Nav Item - Audiens -->
	<li class="nav-item <?= $title == 'Kelola Audiens' || $title == 'Daftar Audiens' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/audiens'); ?>">
			<i class="fas fa-fw fa-user-check"></i>
			<span>Kelola Audiens</span>
		</a>
	</li>

	<!-- Nav Item - Laporan -->
	<li class="nav-item <?= $title == 'Cetak Kartu Mahasiswa' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/laporan'); ?>">
			<i class="fas fa-fw fa-file-alt"></i>
			<span>Cetak Kartu Mahasiswa</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Pengelolaan Lainnya
	</div>

	<!-- Nav Item - Users -->
	<li class="nav-item <?= $title == 'Kelola User' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/users'); ?>">
			<i class="fas fa-fw fa-users-cog"></i>
			<span>Kelola User</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Pengaturan Akun
	</div>

	<!-- Nav Item - Change Profil -->
	<li class="nav-item <?= $title == 'Ubah Profil' || $title == 'Ubah Password' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/ubah_profil'); ?>">
			<i class="fas fa-fw fa-id-card"></i>
			<span>Ubah Profil</span></a>
	</li>

	<!-- Nav Item - Petunjuk -->
	<li class="nav-item <?= $title == 'Petunjuk Aplikasi' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('admin/petunjuk'); ?>">
			<i class="fas fa-fw fa-question-circle"></i>
			<span>Petunjuk Aplikasi</span></a>
	</li>

	<!-- Nav Item - Log out -->
	<li class="nav-item">
		<a class="nav-link" href="<?= site_url('auth/logout'); ?>">
			<i class="fas fa-fw fa-sign-out-alt"></i>
			<span>Keluar</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
