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
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>prestasi">Modul Prestasi</a></li>
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
		<div class="row">

			<div class="col-3">
				<div class="callout callout-info">
					<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png"
						alt="Card image">
				</div>
			</div>

			<div class="col-9 pl-1">
				<!-- /.card-header -->
				<div class="card " style="height:92%">
					<div class="card-header p-2">
						<ul class="nav nav-pills">
							<li class="nav-item"><a class="nav-link active" href="#profil" data-toggle="tab">Profil</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="#detail" data-toggle="tab">Detail</a>
							</li>
						</ul>
					</div>
					<!-- /.card-header -->

					<div class="card-body">
						<div class="tab-content">
							<div class="active tab-pane" id="profil">
								<div clas="row">
									<p class="text-muted mt-n1">Nama :</p>
									<h5 class="text-dark mt-n3">Joni Herdiansyah</h5>

									<p class="text-muted mt-n1">NIM :</p>
									<h5 class="text-info mt-n3 ">4617010044</h5>


									<h5>
										<p class="badge badge-success mt-2">Dikumpulkan saat</p>
									</h5>
									<p class="text-info mt-n3 mb-n2"><?php echo $main['data'][0]->created_at ?></p>
								</div>

							</div>

							<div class="tab-pane" id="detail">

								<p class="text-muted mt-n1">Kelas :</p>
								<h5 class="text-info mt-n3">TI 6A</h4>

									<h6 class="text-muted">Prodi :</p>
										<h5 class="text-info mt-n3">Teknik Informatika</h4>

											<h6 class="text-muted">Angkatan :</p>
												<h5 class="text-info mt-n3 mb-n2">2017</h4>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Panel Main -->
			<div class="col-sm-12 ">
				<div class="card p-4">
					<div class="card-header">
						<span class="d-flex">
							<i class="fa fa-info-circle" aria-hidden="true"></i>
							<h6 class=" ml-2">Klik Baris untuk Melihat Detail Prestasi.</h6>
						</span>

					</div>
					<div class="card-body">
						<table id="tabelBerprestasi" class="table table-bordered table-striped table-hover">
							<thead class="thead-light">
								<tr>
									<th class="align-middl text-center">No</th>
									<th class="align-middle">Capaian/Penghargaan/Pengakuan</th>
									<th class="align-middle">Nilai</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td>Trident</td>
									<td>Internet
										Explorer 4.0
									</td>
								</tr>
								<tr>
									<td class="text-center">1</td>
									<td>Trident</td>
									<td>Internet
										Explorer 4.0
									</td>
								</tr>
							</tbody>
						</table>
						<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-prestasi">
							Launch Extra Large Modal
						</button>
					</div>
				</div>
			</div>
			<!-- End panel kanan -->

		</div>
	</div>
	<!--/. container-fluid -->
</section>

<!-- /.modal -->
<div class="modal fade" id="modal-prestasi">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Prestasi Mahasiswa</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="">
					<h2 class="text-dark text-bold mb-3">Judul Prestasi / Capaian</h2>
					<div class="form-group">
						<input type="text" name="nama_lomba" class="form-control" placeholder="Nama Lomba" id="">
					</div>
					<div class="form-group">
						<input type="text" name="tempat_pelaksanaan" class="form-control"
							placeholder="Tempat Pelaksanaan" id="">
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="inputGroupSelect01">Tingkat Lomba</label>
							</div>
							<select class="custom-select" id="inputGroupSelect01" name="tingkat_lomba">
								<option selected>Pilih...</option>
								<option value="1">Individu</option>
								<option value="2">Kelompok</option>
							</select>
						</div>
						<!-- <select name="tingkat_lomba" class="form-control" placeholder="Tingkat Lomba" >
										<option value="internasional">Internasional</option>
										<option value="internasional">Nasional</option>
										<option value="Provinsi">Provinsi</option>
									</select>			 -->
					</div>
					<div class="form-group">
						<input type="text" name="capaian" class="form-control" placeholder="Pencapaian di lomba" id="">
					</div>
					<div class="form-group">
						<input type="number" name="no_sertifikat" class="form-control" placeholder="Nomor Sertifikat"
							id="">
					</div>
					<div class="form-group">
						<input type="number" name="tahun_perolehan" class="form-control" placeholder="Tahun Perolehan"
							id="">
					</div>
					<div class="form-group">
						<input type="text" name="lembaga_pemberi" class="form-control" placeholder="Lembaga Pemberi"
							id="">
					</div>
					<div class="form-group">
						<input type="number" name="jumlah_penghargaan" class="form-control"
							placeholder="Jumlah Penghargaan" id="">
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="inputGroupSelect01">Keanggotaan Juara</label>
							</div>
							<select class="custom-select" id="inputGroupSelect01" name="individu_kelompok">
								<option selected>Pilih...</option>
								<option value="1">Individu</option>
								<option value="2">Kelompok</option>
							</select>
						</div>

					</div>
					<div class="form-group">
						<input type="number" name="jumlah_peserta" class="form-control"
							placeholder="Jumlah jumlah_peserta" id="">
					</div>
					<div class="custom-file mb-3">
						<input type="file" name="" class="custom-file-input" id="">
						<label for="" class="custom-file-label">File Sertifikat..</label>
					</div>

				</div>
			</div>
			<div class="modal-footer justify-right">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
	var editor;

	$(document).ready(function () {
		// alert('halo')
		editor = new $.fn.dataTable.Editor({
			ajax: "../php/staff.php",
			table: "#tabelBerprestasi",
			fields: [{
				label: "Nilai :",
				name: "nilai"
			}]
		});

		// Activate an inline edit on click of a table cell
		$('#tabelBerprestasi').on('click', 'tbody td:not(:first-child)', function (e) {
			editor.inline(this);
		});

		$('#tabelBerprestasi').DataTable({
			dom: "Bfrtip",
			ajax: "../php/staff.php",
			order: [
				[1, 'asc']
			],
			columns: [{
					data: null,
					defaultContent: '',
					className: 'select-checkbox',
					orderable: false
				},
				{
					data: "nilai"
				},

			],
			select: {
				style: 'os',
				selector: 'td:first-child'
			},
			buttons: [{
					extend: "create",
					editor: editor
				},
				{
					extend: "edit",
					editor: editor
				},
				{
					extend: "remove",
					editor: editor
				}
			]
		});
	});

</script>
<!-- /.content -->
