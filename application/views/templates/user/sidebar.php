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
		<a class="nav-link" href="<?= site_url('user/dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Informasi
	</div>

	<!-- Nav Item - Schedule Info -->
	<li class="nav-item <?= $title == 'Jadwal Saya' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('user/myjadwal'); ?>">
			<i class="fas fa-fw fa-info"></i>
			<span>Jadwal Saya</span>
		</a>
	</li>

	<!-- Nav Item - Print Out Card -->
	<li class="nav-item <?= $title == 'Cetak Kartu' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('user/cetak_kartu'); ?>">
			<i class="fas fa-fw fa-file"></i>
			<span>Cetak Kartu</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Pengaturan Akun
	</div>

	<!-- Nav Item - Change Profil -->
	<li class="nav-item <?= $title == 'Ubah Profil' || $title == 'Ubah Password' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('user/ubah_profil'); ?>">
			<i class="fas fa-fw fa-id-card"></i>
			<span>Ubah Profil</span></a>
	</li>

	<!-- Nav Item - Petunjuk -->
	<li class="nav-item <?= $title == 'Petunjuk Aplikasi' ? 'active' : ''; ?>">
		<a class="nav-link" href="<?= site_url('user/petunjuk'); ?>">
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
