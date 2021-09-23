<?php
    include_once 'header.php';
?>

<div class="container-fluid">
	<?php include('navbar.php'); ?>

    <br />

	<div class="card">
		<span id="message"></span>
		<div class="card-header"><h4>My Appointment List</h4></div>
			<div class="card-body">
				<div class="table-responsive">
		      		<table class="table table-striped table-bordered" id="appointment_list_table">
		      			<thead>
			      			<tr>
			      				<th>Appointment No.</th>
								<th>Branch</th>
			      				<th>Doctor Name</th>
			      				<th>Appointment Date</th>
			      				<th>Appointment Time</th>
			      				<th>Appointment Day</th>
			      				<th>Appointment Status</th>
			      				<th>Download</th>
			      				<th>Cancel</th>
			      			</tr>
			      		</thead>
			      		<tbody></tbody>
			      	</table>
			    </div>
			</div>
		</div>
	</div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
    $('#appointment_list_table').DataTable();
} );
</script>