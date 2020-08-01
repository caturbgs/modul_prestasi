	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard Modul Prestasi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>prestasi">Modul Prestasi</a></li>
						<li class="breadcrumb-item active">Admin Approval</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->

	<!-- <php foreach ($main['data'][0] as $key => $mhs) { ?> -->
	<!-- <php print_r($mhs);?> -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- Panel kiri -->
				<div class="col-sm-3">
					<div class="card text-center card-primary card-outline">
						<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png"
							alt="Card image">
						<div class="card-body mt-n2">
							<h6 class="text-muted mt-n1">Data Mahasiswa</p>
								<h5 class="text-dark mt-n3"><?php echo $main['data'][0]->nama_mhs ?></h4>
									<p class="text-info mt-n2 mb-n2"><?php echo $main['data'][0]->nim ?></p>
						</div>
					</div>
					<div class="card text-left card-primary">
						<div class="card-header">
							<h3 class="card-title">Info</h3>					
						</div>
						<div class="card-body mt-n2">
							<div class="baris">
								<h6 class="text-muted">Kelas</p>
									<h5 class="text-info mt-n3"><?php echo $main['data'][0]->namaklas; ?></h4>
							</div>
							<div class="baris">
								<h6 class="text-muted">Prodi</p>
									<h5 class="text-info mt-n3"><?php echo $main['data'][0]->namaprod; ?></h4>
							</div>
							<div class="baris">
								<h6 class="text-muted">Angkatan</p>
									<h5 class="text-info mt-n3 mb-n2">
										<?php echo $main['data'][0]->thn_akad_thn_akad_id; ?></h4>
							</div>
						</div>
					</div>
					<div class="card text-left">
						<div class="card-body mt-n2">
							<div class="baris">
								<h6 class="text-muted">Dikumpulkan saat</p>
									<h5 class="text-info mt-n3 mb-n2"><?php echo $main['data'][0]->created_at ?></h4>
							</div>
						</div>
					</div>

				</div>
				<!-- End panel kiri -->

				<!-- Panel kanan -->
				<div class="col-sm-9 pl-4">
					<div class="card card-primary h-95">
						
						<div class="card-header">
							<div class="card-title pt-2">
								<h2>Silahkan Periksa Prestasi Mahasiswa</h2>
							</div>	
						</div>
						<div class="card-body">
							<form method="POST" enctype="multipart/form-data"
								action="<?php echo site_url('Prestasi/storeApproval') ?>">
								<input type="hidden" name="id" value="<?php echo $main['data'][0]->id_prestasi; ?>">
								<div class="form-group">
									<label for="nama_lomba"><span>Nama Lomba</span></label>
									<input type="text" name="nama_lomba" class="form-control" placeholder="Nama Lomba"
										id="nama_lomba" value="<?php echo $main['data'][0]->nama_prestasi; ?>" disabled>
								</div>
								<div class="form-group">
									<label for="tingkat_lomba"><span>Tingkat Lomba</span></label>

									<input type="text" name="tingkat_lomba" class="form-control"
										placeholder="Tingkat Lomba" id="tingkat_lomba"
										value="<?php echo $main['data'][0]->tingkat; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Capaian di Lomba</span></label>

									<input type="text" name="capaian" class="form-control"
										placeholder="Pencapaian di lomba, contoh: Juara 1, Juara Favorit" id=""
										value="<?php echo $main['data'][0]->capaian; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Nomor Sertifikat</span></label>

									<input type="number" name="no_sertifikat" class="form-control"
										placeholder="Nomor Sertifikat" id=""
										value="<?php echo $main['data'][0]->nomor_sertifikat; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Tahun Perolehan</span></label>

									<input type="number" name="tahun_perolehan" class="form-control"
										placeholder="Tahun Perolehan" id=""
										value="<?php echo $main['data'][0]->tahun_perolehan; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Lembaga Pemberi</span></label>

									<input type="text" name="lembaga_pemberi" class="form-control"
										placeholder="Lembaga Pemberi" id=""
										value="<?php echo $main['data'][0]->lembaga_pemberi; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Jumlah Penghargaan</span></label>

									<input type="number" name="jumlah_penghargaan" class="form-control"
										placeholder="Jumlah Penghargaan" id=""
										value="<?php echo $main['data'][0]->jumlah_penghargaan; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Individu atau Kelompok</span></label>

									<input type="text" name="individu_kelompok" class="form-control"
										placeholder="Individu atau Kelompok" id=""
										value="<?php echo $main['data'][0]->individu_kelompok; ?>" disabled>
								</div>
								<div class="form-group">
									<label for=""><span>Jumlah Peserta</span></label>

									<input type="number" name="jumlah_peserta" class="form-control"
										placeholder="Jumlah jumlah_peserta" id=""
										value="<?php echo $main['data'][0]->jumlah_peserta; ?>" disabled>
								</div>

								<div class="form-group">
									<a href="#" class="btn btn-block btn-primary">Lihat File</a>
								</div>
								<div class="row">
									<div class="col-md-8">

										<input type="submit" name="submitForm" value="Terima"
											class="btn btn-block btn-success">

									</div>
									<div class="col-md-4">
										<input type="submit" name="submitForm" value="Tolak"
											class="btn btn-block btn-danger"></input>

									</div>
								</div>
							</form>
							<!-- <div class="form-group">
										<input type="text" name="" class="form-control" placeholder="Nama Lomba" id="" value="<?php echo $main['data'][0]->nama_prestasi; ?>" disabled style="text-transform: capitalize;">
									</div>
									<div class="form-group">
										<input type="text" name="" class="form-control" placeholder="Tingkat Lomba" id="" value="<?php echo $main['data'][0]->tingkat; ?>" disabled style="text-transform: capitalize;">
									</div>
									<div class="form-group">
										<input type="text" name="" class="form-control" placeholder="Pencapaian di lomba" id="" value="<?php echo $main['data'][0]->capaian; ?>" disabled style="text-transform: capitalize;">
									</div>
									<div class="form-group">
										<a href="#" class="btn btn-block btn-primary">Lihat File</a>
									</div>
									<div class="row">
										<div class="col-md-8">
											<input type="submit" value="Terima" class="btn btn-block btn-success">
										</div>
										<div class="col-md-4">
											<a href="#" class="btn btn-block btn-danger">Tolak</a>
										</div>
									</div> -->
						</div>
					</div>
				</div>
				<!-- End panel kanan -->

			</div>
		</div>
		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
	<!-- <php } ?> -->
