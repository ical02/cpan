<!-- DATA TABES SCRIPT -->
<script src="<?php echo config_item('assets'); ?>plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo config_item('assets'); ?>plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function () {
		$("#example1").dataTable();
		$('#example2').dataTable({
		  "bPaginate": true,
		  "bLengthChange": false,
		  "bFilter": false,
		  "bSort": true,
		  "bInfo": true,
		  "bAutoWidth": false
		});
	});
</script>