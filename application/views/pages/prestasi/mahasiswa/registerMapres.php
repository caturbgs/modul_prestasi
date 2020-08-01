<script src="https://code.jquery.com/jquery-3.5.1.slim.js"
	integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>

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
		<div class="row ">
			<!-- Panel kiri -->
			<div class="col-sm-3">
				<div class="card text-center card-primary card-outline">
					<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png"
						alt="Card image">
					<div class="card-body mt-n2">
						<h6 class="text-muted mt-n1">Welcome!</p>
							<h5 class="text-dark mt-n3"><?php echo $main['datamhs'][0]->nama_mhs ?></h4>
								<p class="text-info mt-n2 mb-n2"><?php echo $main['datamhs'][0]->nim ?></p>
					</div>
				</div>
				<div class="card text-left card-primary">
					<div class="card-header">
						<h3 class="card-title">Info</h3>
					</div>
					<div class="card-body mt-n2">
						<div class="baris">
							<h6 class="text-muted">Kelas</p>
								<h5 class="text-info mt-n3"><?php echo $main['datamhs'][0]->namaklas ?></h4>
						</div>
						<div class="baris">
							<h6 class="text-muted">Prodi</p>
								<h5 class="text-info mt-n3"><?php echo $main['datamhs'][0]->namaprod ?></h4>
						</div>
						<div class="baris">
							<h6 class="text-muted">Angkatan</p>
								<h5 class="text-info mt-n3 mb-n2"><?php echo $main['datamhs'][0]->thn_akad_thn_akad_id ?>
									</h4>
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
							<h2>Pendaftaran Mahasiswa Berprestasi TIK</h2>
						</div>
					</div>
					<div class="card-body p-4">
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
							<?php foreach($main['data_mps'] as $key){ ?>
								<div class="col-sm-6">
									<div class="card text-center">
										<div class="card-header bg-success">
											<h3>File KTI/Sertifikat</h3>
										</div>
										<div class="card-body">
											<h5 class="text-muted"><a href="#" class="btn btn-primary">Lihat File</a></h5>
										</div>
									</div>
								</div>
							<?php echo !empty($key->skor_toefl) 
								? 
									'<div class="col-sm-6">
										<div class="card text-center">
											<div
											class="card-header bg-success">
											<h3>Skor TOEFL</h3>
										</div>
										<div class="card-body">
											<h5 class="text-muted">'. $key->skor_toefl .'</h5>
										</div>
									</div>'
								:
									' ' //isi file sertifikat dll
								?>
							<?php } ?>
						</div>

						<div class="col-sm-12">
							<form method="POST" enctype="multipart/form-data"
								action="<?php echo site_url('Prestasi_Mahasiswa/storeMapres') ?>">
								<input type="hidden" name="nim" value="<?php echo $main['datamhs'][0]->nim?>">
								<?php echo empty($key->skor_toefl) 
								?  
								'<div class="form-group">
									<input type="text" name="skor_toefl" class="form-control" placeholder="Nilai TOEFL" id="">
								</div>'
								:
								''
								?>
								<!-- <div class="form-group">
									<input type="text" name="skor_toefl" class="form-control" placeholder="Nilai TOEFL" id="">
								</div> -->
								<div class="custom-file mb-3">
									<input type="file" name="file_kti" class="custom-file-input" id="">
									<label for="" class="custom-file-label">File Sertifikat/Karya Tulis Ilmiah..</label>
								</div>
								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-block btn-success">
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- End panel kanan -->

		</div>
	</div>
	<!--/. container-fluid -->
</section>

<!-- script reapeater nanti gua rapihin jangan dihapus cokkkk -->
<script>
	$(document).ready(function () {

		$("#addButton").click(function () {
			// if( ($('.form-horizontal .control-group').length+1) > 2) {
			// 	alert("Only 2 control-group allowed");
			// 	return false;
			// }
			var id = ($('.parent-prestasi .prestasi').length + 1).toString();
			alert(id);

			$('.parent-prestasi').append('<div class="col-4 prestasi count' + id + '">' +
				'<div class="card text-center">' +
				'<div class="card-header container-fluid bg-success" id="newsHeading">' +
				'<div class="row">' +
				'			<div class="col-10">' +
				'				<span>News Items</span>' +
				'			</div>' +
				'			<div class="col-2">' +
				'				<button type="btn btn-danger" id="removeButton"' + id +
				' class="close" aria-label="Close">' +
				'					<span aria-hidden="true">&times;</span>' +
				'				</button>' +
				'			</div>' +
				'		</div>' +
				'	</div>' +
				'	<div class="card-body">' +
				'		<span class="text-muted">Capaian: </span>' +
				'		<span class="text-muted">Tingkat: </span>' +
				'		<span class="text-muted">Tahun: </span>' +
				'	</div>' +
				'</div>' +
				'</div>');

		});

		$("#removeButton").click(function () {
			$(".parent-prestasi .prestasi .count" + id).remove();
		});
	});

</script>
<!-- /.content -->
