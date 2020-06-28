<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Absensi - <?= $djadwal['judul']; ?></title>

	<style type="text/css">
		* {
			box-sizing: border-box;
		}

		body {
			font-family: 'Times New Roman', Times, serif;
			font-size: 12px;
		}

		.center {
			text-align: center;
		}

		.left {
			text-align: left;
		}

		.noborder {
			margin: 10px 0;
		}

		.noborder tr {
			line-height: 15px;
		}

		h1 {
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			text-transform: uppercase;
			line-height: 5px;
		}

		.datatable {
			border-collapse: collapse;
		}

		.datatable,
		.datatable th,
		.datatable td {
			border: 1px solid black;
		}

		.datatable thead th {
			text-align: center;
		}

		.ttd {
			margin-top: 20px;
			margin-right: 10px;
			float: right;
			line-height: 5px;
		}
	</style>
</head>

<body>
	<table width="90%">
		<tr>
			<td class="center" width="10%">
				<img src="<?= base_url('assets/img/iain2.png'); ?>" alt="Foto-iain" width="70px">
			</td>
			<td width="80%">
				<div class="head">
					<h1>Absensi Audiens Seminar Proposal</h1>
					<h1>Pendidikan Teknik Informatika dan Komputer</h1>
					<h1>Institut Agama Islam Negeri Bukittinggi</h1>
				</div>
			</td>
		</tr>
	</table>
	<hr>
	<table class="noborder">
		<tr>
			<td>Judul Seminar Proposal</td>
			<td>:</td>
			<td><?= $djadwal['judul']; ?></td>
		</tr>
		<tr>
			<td>Pemateri</td>
			<td>:</td>
			<td><?= $djadwal['mhs']; ?> (<?= $djadwal['nim']; ?>)</td>
		</tr>
		<tr>
			<td>Dosen Pembimbing</td>
			<td>:</td>
			<td><?= $djadwal['dospem']; ?></td>
		</tr>
		<tr>
			<td>Dosen Penguji 1</td>
			<td>:</td>
			<td><?= $djadwal['penguji1']; ?></td>
		</tr>
		<tr>
			<td>Dosen Penguji 2</td>
			<td>:</td>
			<td><?= $djadwal['penguji2']; ?></td>
		</tr>
		<tr>
			<td>Hari/Tanggal</td>
			<td>:</td>
			<td><?= $tgl; ?></td>
		</tr>
		<tr>
			<td>Waktu</td>
			<td>:</td>
			<td><?= date('H:i', strtotime($djadwal['waktua'])); ?> - <?= date('H:i', strtotime($djadwal['waktub'])); ?></td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td>:</td>
			<td><?= $djadwal['lokasi']; ?></td>
		</tr>
	</table>
	<table class="datatable" cellpadding="2" width="100%">
		<thead>
			<tr>
				<th width="5%">No</th>
				<th width="30%">Nama Mahasiswa</th>
				<th width="25%">Nomor Induk Mahasiswa</th>
				<th width="30%">Tanggal/Waktu Mendaftar</th>
				<th width="10%">Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ($jadwal as $key => $j) :
			?>
				<tr>
					<td class="center"><?= $i; ?></td>
					<td class="left"><?= $j['nama']; ?></td>
					<td class="center"><?= $j['nim']; ?></td>
					<td class="center"><?= date('d-m-Y H:i:s', strtotime($j['date_created'])); ?></td>
					<?php if ($j['status'] == 0) { ?>
						<td class="center">Terdaftar</td>
					<?php } else if ($j['status'] == 1) { ?>
						<td class="center">Hadir</td>
					<?php } else { ?>
						<td class="center">Tidak Hadir</td>
					<?php }; ?>
				</tr>
			<?php
				$i++;
			endforeach;
			?>
		</tbody>
	</table>
	<div class="ttd">
		<p>Bukittinggi, .................... 20</p>
		<p>Ketua Seminar</p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p>( .......................................... )</p>
	</div>



</body>

</html>
