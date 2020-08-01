	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard Modul Prestasi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo site_url() ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo site_url('Prestasi_Mahasiswa'); ?>">Modul
								Prestasi</a></li>
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
											<h6 class="text-muted">Dikumpulkan</p>
												<h5 class="text-info mt-n3 mb-n2"><?php echo $main['data'][0]->created_at ?></h4>
										</div>
									</div>
								</div>
								<div class="card text-left">
									<div class="card-body mt-n2">
										<div class="baris">
											<h6 class="text-muted">Dikumpulkan saat</p>
												<h5 class="text-info mt-n3 mb-n2"><?php echo $main['data'][0]->updated_at ?></h4>
										</div>
									</div>
								</div>
							</div>
							<!-- End panel kiri -->
							<!-- Panel kanan -->
							<div class="col-md-8 ml-4">
								<h2 class="text-dark mb-2">Daftar Prestasi</h2>
								<a href="<?php echo site_url('Prestasi_Mahasiswa/registerPrestasi') ?>"
									class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambah
									Prestasi</a>
								<a href="<?php echo site_url('Prestasi_Mahasiswa/testPDF') ?>"
								class="btn btn-warning mb-3 ml-2"><i class="fa fa-print" aria-hidden="true"></i> Cetak PDF</a>
								<!-- Panel dalem kiri -->
								<div class="row">
									<?php foreach($main['data'] as $key){ ?>
									<div class="col-sm-6">
										<div class="card text-center">
											<div
												class="card-header <?php echo $key->status == 'waiting' ? 'bg-warning' : 'bg-success' ?>">
												<h3><?php echo $key->nama_prestasi ?></h3>
											</div>
											<div class="card-body">
												<h5 class="text-muted">Capaian: <?php echo $key->capaian ?></h5>
												<h5 class="text-muted">Tingkat: <?php echo $key->tingkat ?></h5>
												<h5 class="text-muted">Tahun: <?php echo $key->tahun_perolehan ?></h5>
											</div>
										</div>
									</div>
									<?php } ?>
									<!-- <div class="col-md-6">
										<div class="card text-center">
											<div class="card-header bg-danger">
												<h3>TOEFL</h3>
											</div>
											<div class="card-body">
												<h4 class="text-muted">SKOR: 144</h4>
											</div>
										</div>
										<div class="card text-center">
											<div class="card-header bg-success">
												<h3>ITECHNO CUP 2019</h3>
											</div>
											<div class="card-body">
												<h5 class="text-muted">Keikutsertaan: Panitia</h5>
												<h5 class="text-muted">Tingkat: Nasional</h5>
											</div>
										</div>
										<div class="card text-center">
											<div class="card-header bg-primary">
												<h3>ADSE 2020</h3>
											</div>
											<div class="card-body">
												<h5 class="text-muted">Keikutsertaan: Participant</h5>
												<h5 class="text-muted">Tingkat: ASEAN</h5>
											</div>
										</div>
									</div> -->
									<!-- End Panel dalem kiri -->

									<!-- Panel dalem kanan -->
									<!-- <div class="col-md-6">
										<div class="card text-center">
											<div class="card-header bg-primary">
												<h3>KMIPN</h3>
											</div>
											<div class="card-body">
												<h5 class="text-muted">Keikutsertaan: Finalis</h5>
												<h5 class="text-muted">Tingkat: Nasional</h5>
											</div>
										</div>
										<div class="card text-center">
											<div class="card-header bg-success">
												<h3>DIGITALENT 2019</h3>
											</div>
											<div class="card-body">
												<h5 class="text-muted">Keikutsertaan: Peserta</h5>
												<h5 class="text-muted">Tingkat: Jurusan</h5>
											</div>
										</div>
									</div> -->
								</div>
								<!-- End Panel dalem kanan -->
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
