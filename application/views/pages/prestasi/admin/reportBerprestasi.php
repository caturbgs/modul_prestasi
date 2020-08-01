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
			<div class="card px-3 pt-3 pb-n2" style="background-color: #008797;">
				<div class="card" style="background-color: rgba(188, 225, 229, 1);">
					<div class="card-title pl-3 pt-3">
						<h2>Report Even Berprestasi Mahasiswa </h2>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form id="myform" method="post" action="<?= base_url('/kelola/delete/') ?>">
									<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
									<table id="mytable" class="table table-hover text-center" style="border-radius : 100px">
										<thead class="text-white" style="background-color: #008797">
											<tr>
												<th scope="col" class="align-middle">No</th>
												<th class="align-middle">Nim</th>
												<th class="align-middle">Nama Mahasiswa</th>
												<th class="align-middle">Status</th>
												<th class="align-middle">Action</th>
											</tr>
										</thead>
										<tbody class="" style="background-color: white; ">
											<tr>
												<td scope="col" class="align-middle">1</td>
												<td class="align-middle">4617010000</td>
												<td class="align-middle">Joni Herdiansyah</td>
												<td class="align-middle"><span class="btn btn-success btn-block">Diterima</span></td>
												<td class="align-middle"><button class="btn btn-primary">Detail</button></td>
											</tr>
											<tr>
												<td scope="col" class="align-middle">2</td>
												<td class="align-middle">4617010099</td>
												<td class="align-middle">Ferguso Toyiban</td>
												<td class="align-middle"><span class="btn btn-danger btn-block">Ditolak</span></td>
												<td class="align-middle"><button class="btn btn-primary">Detail</button></td>
											</tr>
										</tbody>
									</table>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/. container-fluid -->
	</section>
	<!-- /.content -->
