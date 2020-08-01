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
						<li class="breadcrumb-item active">Sertifikat</li>
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
									<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image">
									<div class="card-body mt-n2">
										<h6 class="text-muted mt-n1">Welcome!</p>
											<h5 class="text-dark mt-n3">Joni Herdiansyah</h4>
												<p class="text-info mt-n2 mb-n2">4617010044</p>
									</div>
								</div>
								<div class="card text-left">
									<div class="card-body mt-n2">
										<div class="baris">
											<h6 class="text-muted">Kelas</p>
												<h5 class="text-info mt-n3">TI 6A</h4>
										</div>
										<div class="baris">
											<h6 class="text-muted">Prodi</p>
												<h5 class="text-info mt-n3">Teknik Informatika</h4>
										</div>
										<div class="baris">
											<h6 class="text-muted">Dikumpulkan</p>
												<h5 class="text-info mt-n3 mb-n2"><?php echo $main['data'][0]->created_at ?></h4>
										</div>
									</div>
								</div>
							</div>
							<!-- End panel kiri -->
							<!-- Panel kanan -->
							<div class="col-md-8 ml-4">
								<h2 class="text-dark mb-2">Daftar Sertifikat Mahasiswa</h2>
								<!-- Panel dalem kiri -->
								<div class="row">
									<div class="col-md-12">
									<?php foreach($prestasi as $sertif)
									{?>
										<div class="card text-center">
											<div class="card-header bg-success">
												<h3><?= $sertif['nama_prestasi'] ?></h3>
											</div>
											<div class="row card-body align-items-center">
												<img class="col-md-6" src="<?= $sertif['file_sertifikat'] ?>" alt="sans" />
												<div class="col-md-6 ">
													<h4 class="text-dark">Tingkat: <?= $sertif['tingkat'] ?></h4>
													<h4 class="text-dark">Capaian: <?= $sertif['capaian'] ?></h4>
													<a href="#" class="btn btn-primary">Lihat</a>
												</div>
											</div>
										</div>
									<?php }?>
										<!-- <div class="card text-center">
											<div class="card-header bg-success">
												<h3>KMIPN</h3>
											</div>
											<div class="row card-body align-items-center">
												<img class="col-md-6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRvi6HdQPodwChQh94Q4JR7NHpUpYySQlqG5CQ4R2KLDO45iC-L&usqp=CAU" alt="sans" />
												<div class="col-md-6 ">
													<h4 class="text-dark">Berlaku sampai</h4>
													<h4 class="text-dark">2020</h4>
													<a href="#" class="btn btn-primary">Lihat</a>
												</div>
											</div>
										</div> -->
									</div>
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
