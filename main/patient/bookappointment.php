<?php
    include_once 'header.php';
?>

<div class="container-fluid">
	<?php include('navbar.php'); ?>

    <div class="container mt-4 " id="content">
	<div class="row content d-flex justify-content-center">
		<div class="col col-md-6">
			<span id="message"></span>
			<div class="card">
				<div class="card-header"><h5>BOOK APPOINTMENT<h5></div>
				<div class="card-body">
					<form method="post" id="book_form" action="">

                        <!--
						<div class="form-group">
							<label> Patient Email Address <span class="text-danger">*</span></label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Patient Password<span class="text-danger">*</span></label>
							<input type="password" name="patient_password" id="patient_password" class="form-control" required  />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient First Name<span class="text-danger">*</span></label>
									<input type="text" name="patient_first_name" id="patient_first_name" class="form-control" required   />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Last Name<span class="text-danger">*</span></label>
									<input type="text" name="patient_last_name" id="patient_last_name" class="form-control" required   />
								</div>
							</div>
						</div>
-->
						<div class="form-group">
							<label>Branch<span class="text-danger">*</span></label>
								<select name="patient_gender" id="patient_gender" class="form-control">
									<option value="Male"> Waltermart, Lotus Mall, Imus City, Cavite </option>
									<option value="Female"> Waltermart, Carmona Cavite </option>
									<option value="Other"> Trece Marites City, Cavite </option>
                                    <option value="Male"> Zapote (Centre, Bacoor) Cavite </option>
									<option value="Female"> 54 Balsahan Binakayan, Kawit Cavite </option>
									<option value="Other"> The District, Ayala Mall, Dasmariñas Cavite </option>
                                    <option value="Other"> KingHome Shopping mall, Bucandala 2, Imus Cavites </option>
								</select>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Date<span class="text-danger">*</span></label>
                                       
										<div class="input-group date" id="datepicker">
                                            <input type="text" name="book_date" id="book_date" class="form-control" placeholder="MM/DD/YYYY" required readonly />
                                            <div class="input-group-addon input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                </div>									
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Time<span class="text-danger">*</span></label>
										<div class="input-group date" id="datepicker1">
											<input type="text" name="book_time" id="book_time" class="form-control"  required readonly  />
											<div class="input-group-addon input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-clock"></i>
                                                </span>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Category<span class="text-danger">*</span></label>
								<select name="patient_gender" id="patient_gender" class="form-control">
									<option value="Male"> Eye Check up </option>
								</select>
						</div>
						
						<div class="form-group d-grid gap-2 col-6 mx-auto">
							<input type="hidden" name="" value="book_register" />
							<input type="submit" name="book_button" id="book_button" class="btn btn-primary " value="Book" />
						</div>

					</form>
				</div>
			</div>
			<br />
			<br />
		</div>
	</div>
</div> 
</div>
</div>

</div>
</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
	<script src="bootstrap-datetimepicker.min.js"></script>

	<script>
        $(function () {
            $.extend(true, $.fn.datetimepicker.defaults, {
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                }
            });
        });
        </script>
	<script type="text/javascript">
    $(function(){
        
        $('#datepicker').datetimepicker({
        	format: 'YYYY-MM-DD',
        	ignoreReadonly: true
        });

    $(function () {
        $('#datepicker1').datetimepicker({
            format: 'hh:mm a',
            ignoreReadonly: true
        });
});
}
);
</script>