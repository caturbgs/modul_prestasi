<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url();?>/assets/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url();?>/assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>/assets/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url();?>/assets/dist/js/pages/dashboard2.js"></script>
<script type="application/javascript" src="<?php echo base_url();?>/assets/js/repeater.js"></script>

<script>
		$(document).ready(function() {
			$('#tabelBerprestasi').DataTable();
		} );	
</script>

<!-- Modal Penilaian Juri -->
<script>
	$(document).ready(function () {
		var table = $('#tabelBerprestasi').DataTable();

		$('#tabelBerprestasi tbody').on('click', 'tr', function () {
			var data = table.row(this).data();
			$('#modal-prestasi').modal('show')
			// alert( 'You clicked on '+data[0]+'\'s row' );
		});
	});

</script>
<!-- Modal -->

<!-- Repeater page -->
<script>           
	$("#repeater").createRepeater({
		showFirstItemToDefault: false,
	});
</script>
<!-- end repeater -->
