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
						<li class="breadcrumb-item"><a href="<?php echo site_url('Prestasi_Mahasiswa'); ?>">Modul Prestasi</a></li>
						<li class="breadcrumb-item active">Admin Approval</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card px-3 pt-3 pb-n2" style="background-color: #008797;">
				<div class="card" style="background-color: rgba(188, 225, 229, 1);">
					<div class="card-body">
						<div class="row justify-content-center">
							<!-- Panel kiri -->
							<div class="col-md-3">
								<div class="card text-center">
									<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png"
										alt="Card image">
									<div class="card-body mt-n2">
										<h6 class="text-muted mt-n1">Welcome!</p>
											<h5 class="text-dark mt-n3"><?php echo $main['data'][0]->nama_mhs ?></h4>
												<p class="text-info mt-n2 mb-n2"><?php echo $main['data'][0]->nim ?></p>
									</div>
								</div>
								<div class="card text-left">
									<div class="card-body mt-n2">
										<div class="baris">
											<h6 class="text-muted">Kelas</p>
												<h5 class="text-info mt-n3"><?php echo $main['data'][0]->namaklas ?></h4>
										</div>
										<div class="baris">
											<h6 class="text-muted">Prodi</p>
												<h5 class="text-info mt-n3"><?php echo $main['data'][0]->namaprod ?></h4>
										</div>
										<div class="baris">
											<h6 class="text-muted">Angkatan</p>
												<h5 class="text-info mt-n3 mb-n2"><?php echo $main['data'][0]->thn_akad_thn_akad_id ?></h4>
										</div>
									</div>
								</div>
								<div class="card text-left">
									<div class="card-body mt-n2">
										<div class="baris">
											<h6 class="text-muted">Waktu Tersisa</p>
												<h5 class="text-info mt-n3 mb-n2">20d 12h 33m</h4>
										</div>
									</div>
								</div>
							</div>
							<!-- End panel kiri -->
							<!-- Panel kanan -->
							<div class="col-md-7 ml-4">
								<h2 class="text-dark text-bold mb-3">Silahkan Daftarkan Prestasi anda</h2>
								<form method="POST" enctype="multipart/form-data"
									action="<?php echo site_url('Prestasi_Mahasiswa/storePrestasi') ?>">
									<div class="form-group">
										<input type="text" name="nama_prestasi" class="form-control" placeholder="Nama Prestasi"
											id="">
									</div>
									<!-- <div class="form-group">
										<input type="text" name="tempat_pelaksanaan" class="form-control"
											placeholder="Tempat Pelaksanaan" id="">
									</div> -->
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect01">Tingkat
													Lomba</label>
											</div>
											<select name="tingkat" class="form-control" placeholder="Tingkat Lomba" >
												<option selected>Pilih...</option>
												<option value="Intenasional">Internasional</option>
												<option value="Nasional">Nasional</option>
												<option value="Provinsi">Provinsi</option>
												<option value="Kota">Kota</option>
											</select>			
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="capaian" class="form-control"
											placeholder="Pencapaian di lomba" id="">
									</div>
									<div class="form-group">
										<input type="number" name="nomor_sertifikat" class="form-control"
											placeholder="Nomor Sertifikat" id="">
									</div>
									<div class="form-group">
										<input type="number" name="tahun_perolehan" class="form-control"
											placeholder="Tahun Perolehan" id="">
									</div>
									<div class="form-group">
										<input type="number" name="jumlah_penghargaan" class="form-control"
											placeholder="Jumlah Penghargaan" id="">
									</div>
									<div class="form-group">
										<input type="tet" name="lembaga_pemberi" class="form-control"
											placeholder="Lembaga Pemberi" id="">
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect01">Keanggotaan
													Juara</label>
											</div>
											<select class="custom-select" id="inputGroupSelect01" name="individu_kelompok">
												<option selected>Pilih...</option>
												<option value="Individu">Individu</option>
												<option value="Kelompok">Kelompok</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<input type="number" name="jumlah_peserta" class="form-control"
											placeholder="Jumlah Peserta" id="">
									</div>
									<div class="custom-file mb-3">
										<label for="file_sertifikat" class="custom-file-label">File Sertifikat (.png .jpg .jpeg .pdf) Max. 2 MB</label>
										<input type="file" name="file_sertifikat" class="custom-file-input" accept=".pdf, .jpg, .jpeg, .png" id="fileInput" />
									</div>
									<div class="form-group">
										<input type="hidden" name="mahasiswa_nim" value="<?php echo $main['data'][0]->nim ?>">
										<input type="submit" value="Submit" class="btn btn-block btn-success">
									</div>
								</form>
							</div>
							<!-- End panel kanan -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
