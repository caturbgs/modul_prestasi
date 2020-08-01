<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Laporan</title>
		<link rel="stylesheet" href="">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style>
			.line-title {
				border: 0;
				border-style: inset;
				border-top: 1px solid #000;
			}

		</style>
	</head>

	<body>
		<div class="row">
			<div class="col">
				<img src="assets/img/logo_PNJ.png" style="position: absolute; width: 150px; height: auto;">
			</div>

			<div class="col">
				<table style="width: 100%;">
					<tr>
						<td align="center">
							<span style="line-height: 1.6; font-size:16px; font-family:Cambria Math">
								HIMPUNAN MAHASISWA
								<br>TEKNIK INFORMATIKA DAN KOMPUTER
							</span>
							<span style="line-height: 1.6; font-size:21px; font-weight:bold; font-family:Cambria Math">
								<br>POLITEKNIK NEGERI JAKARTA
							</span>
							<span style="line-height: 1.6; font-size:12px; font-family:Cambria Math ">
								<br>Gedung AA Politeknik Negeri Jakarta
								<br>Kampus Baru UI Depok 16424 Telepon 089676778760
								<br>Email: himatik.pnj@gmail.com
							</span>
						</td>
					</tr>
				</table>
			</div>

			<div class="col">
				<img src="assets/img/himatik_trans.png"
					style="position:absolute; left: 850px; width: 180px; height: auto;">
			</div>

		</div>

		<hr class="line-title">
		<p align="center">
			LAPORAN PRESTASI MAHASISWA <br>
			<b>Dibuat Tahun 2020</b>
		</p>


		<table class="table table-bordered table-sm table-responsible">
			<thead class="thead-light">
				<tr>
					<th class="align-middle">#</th>
					<th class="align-middle">Kegiatan/Organisasi</th>
					<th class="align-middle">Capaian/Penghargaan/Pengakuan</th>
					<th class="align-middle">Tahun Perolehan</th>
					<th class="align-middle">Nama & Laman Lembaga Pemberi/Event</th>
					<th class="align-middle">Individu/Kelompok</th>
					<th class="align-middle">Jumlah Perserta</th>
					<th class="align-middle">Jumlah Penghargaan yang Diberikan Penyelenggara</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($main['data'] as $index => $key){ ?>
				<tr>
					<td><?= $index + 1 ?></td>
					<td><?= $key->nama_prestasi ?></td>
					<td><?= $key->capaian ?></td>
					<td><?= $key->tahun_perolehan ?></td>
					<td><?= $key->lembaga_pemberi ?></td>
					<td><?= $key->individu_kelompok ?></td>
					<td><?= $key->jumlah_peserta ?></td>
					<td><?= $key->jumlah_penghargaan ?></td>
				</tr>
			<?php } ?>
			<tbody>
		</table>

	</body>

</html>
