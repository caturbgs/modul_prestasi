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
						<li class="breadcrumb-item active">Modul Prestasi</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card px-3 pt-3 pb-n2" style="">
				<div class="card-title pl-3 pt-3">
					<h2>Daftar Prestasi Mahasiswa TI-6A</h2>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<table id="tabelBerprestasi" class="table table-bordered table-striped text-center">
								<thead class="thead-dark">
									<th style="width:0.5em">No</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Kelas</th>
									<th>Status</th>
									<th>Aksi</th>
								</thead>
								<tbody>
									<?php $no=0; 
									foreach($main as $key){ 
									$no++; ?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $key->mahasiswa_nim ?></td>
										<td><?php echo $key->nama_mhs ?></td>
										<td><?php echo $key->namaklas ?></td>
										<td><?php 
													if($key->status == 'waiting') {
													echo '<span class="text-primary"><i class="fa fa-question"></i> Menunggu Konfirmasi';
													}
													if($key->status == 'accept') {
														echo '<span class="text-success"><i class="fa fa-check-circle"></i> Disetujui';
													}
													if($key->status == 'refuse') {
														echo '<span class="text-danger"><i class="fa fa-times-circle"></i> Ditolak';
													}
												?>
										</td>

										<td>
											<a href="<?php echo site_url('Prestasi/approval/'. $key->id_prestasi) ?>"
												class="btn btn-primary" title="Periksa">Periksa</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
