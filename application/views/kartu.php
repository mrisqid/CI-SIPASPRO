<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kartu - <?= $user['nama']; ?></title>

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

		.right {
			text-align: right;
		}

		.noborder tr {
			line-height: 15px;
		}

		.head {
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
			text-align: center;
			line-height: 2px;
		}

		.head h2 {
			font-size: 20px;
			font-weight: normal;
			text-transform: uppercase;
		}

		.head h1 {
			font-size: 22px;
			font-weight: bold;
			text-transform: uppercase;
		}

		.head p {
			font-size: 10px;
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
			margin-top: 5px;
			margin-right: 10px;
			float: right;
			line-height: 5px;
		}

		.jdl h2 {
			font-size: 14px;
			font-weight: bold;
			text-transform: uppercase;
			line-height: 3px;
			text-align: center;
		}
	</style>
</head>

<body>
	<table width="100%">
		<tr>
			<td class="center" width="10%">
				<img src="<?= base_url('assets/img/iain2.png'); ?>" alt="Foto-iain" width="70px">
			</td>
			<td width="90%">
				<div class="head">
					<h2>Kementrian Agama RI</h2>
					<h1>Institut Agama Islam Negeri (IAIN) Bukittinggi</h1>
					<p>Kampus I : Jl. Paninjauan Garegeh Bukittinggi | Kampus II : Jl. Gurun Aur Kubang Putih Kabupaten Agam, Sumatera Barat</p>
					<p>Telp. (0752) 33136. 34320 Fax. (0752) 22875 | Website : http://iainbukittinggi.ac.id e-mail : info@iainbukittinggi.ac.id</p>
				</div>
			</td>
		</tr>
	</table>
	<hr>
	<div class="jdl">
		<h2>Kartu Tanda Menghadiri Seminar Proposal</h2>
		<h2>Fakultas Tarbiyah dan Ilmu Keguruan (FTIK) IAIN Bukittinggi</h2>
	</div>
	<table class="noborder">
		<tr>
			<td width="100px">Nama</td>
			<td>:</td>
			<td><?= $user['nama']; ?></td>
		</tr>
		<tr>
			<td width="100px">NIM</td>
			<td>:</td>
			<td><?= $user['nim']; ?></td>
		</tr>
		<tr>
			<td width="100px">Prodi</td>
			<td>:</td>
			<td>Pendidikan Teknik Informatika dan Komputer</td>
		</tr>
	</table>
	<table class="datatable" cellpadding="3" width="100%">
		<thead>
			<tr>
				<th width="5%">NO</th>
				<th width="20%">NAMA & NIM MHS YG SEMINAR</th>
				<th width="10%">HARI & TGL SEMINAR</th>
				<th width="25%">JUDUL PROPOSAL</th>
				<th width="30%">PEMBIMBING & NARASUMBER SEMINAR</th>
				<th width="10%">NAMA & TANDA TANGAN SEKRETARIS</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ($jadwal as $key => $j) :
			?>
				<tr>
					<td class="center"><?= $i; ?></td>
					<td class="left"><?= $j['mhs']; ?> (<?= $j['nim']; ?>)</td>
					<td class="center"><?= strftime('%A', strtotime($j['tgl'])); ?>, <br><?= strftime('%d-%m-%Y', strtotime($j['tgl'])); ?></td>
					<td class="left"><?= $j['judul']; ?></td>
					<td class="left">
						<?= $j['dospem']; ?> <br>
						<?= $j['penguji1']; ?> <br>
						<?= $j['penguji2']; ?>
					</td>
					<td></td>
				</tr>
			<?php
				$i++;
			endforeach;
			?>
		</tbody>
	</table>
	<div class="ttd">
		<p>Bukittinggi, .................... 20</p>
		<p>Ketua Prodi PTIK</p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p style="font-weight:bold; text-decoration:underline;">Riri Okra M.Kom</p>
		<p style="font-weight:bold;">NIP. 19791017 201101 1 010</p>
	</div>



</body>

</html>
