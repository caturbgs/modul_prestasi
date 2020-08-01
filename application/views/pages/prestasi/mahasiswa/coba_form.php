<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Test</title>
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
		<!-- overlayScrollbars -->
		<link rel="stylesheet"
			href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		<link rel="stylesheet"
			href="<?php echo base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
		<!-- css buatan sendiri -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/main.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>

	<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<!-- Repeater Html Start -->
					<div id="repeater">
						<!-- Repeater Heading -->
						<div class="repeater-heading">
							<h5 class="pull-left">Cara Mengulang Form Inputan dengan jQuery</h5>
							<button class="btn btn-primary pt-5 pull-right repeater-add-btn">
								Add
							</button>
						</div>
						<div class="clearfix"></div>
                        <!-- Repeater Items -->
                        
						<div class="items" data-group="prestasi">
                            <input type="text" hidden data-name="id"">
                            <div class="row item-content">
                                <div class="col-4 prestasi count">
                                    <div class="card text-center">
                                        <div class="card-header container-fluid bg-success" id="newsHeading">
                                            <div class="row">
                                                <div class="col-10">
                                                    <span>News Items</span>
                                                </div>
                                                
                                                <div class="col-2 repeater-remove-btn">                                                
                                                    <button type="btn btn-danger remove-btn" class="close" aria-label="Close" onclick="$(this).parents('.items').remove()">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <span class="text-muted">Capaian: </span>
                                            <span class="text-muted">Tingkat: </span>
                                            <span class="text-muted">Tahun: </span>
                                        </div>
                                    </div>
                                </div>
                            </div>			
							<div class="clearfix"></div>
                        </div>
					</div>
                    <!-- Repeater End -->
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?php echo base_url();?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
		</script>
		<script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
        <script type="application/javascript" src="<?php echo base_url();?>/assets/js/repeater.js"></script>

		<script>           
			$("#repeater").createRepeater({
				showFirstItemToDefault: false,
			});
		</script>

		
	</body>

</html>
