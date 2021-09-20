<?php
    include_once 'header.php';
?>

<div class="container mt-4 ">
	<div class="row content d-flex justify-content-center">
		<div class="col col-md-6">
			<span id="message"></span>
			<div class="card">
				<div class="card-header">Register</div>
				<div class="card-body">
					<form method="post" id="patient_register_form" action="includes/signup.inc.php">
						<div class="form-group">
							<label>Patient Email Address<span class="text-danger">*</span></label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
							<label>Patient Password<span class="text-danger">*</span></label>
							<input type="password" name="patient_password" id="patient_password" class="form-control" required  data-parsley-trigger="keyup" />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient First Name<span class="text-danger">*</span></label>
									<input type="text" name="patient_first_name" id="patient_first_name" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Last Name<span class="text-danger">*</span></label>
									<input type="text" name="patient_last_name" id="patient_last_name" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Patient Gender<span class="text-danger">*</span></label>
								<select name="patient_gender" id="patient_gender" class="form-control">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
								</select>
						</div>
						<div class="form-group">
							<label>Patient Contact No.<span class="text-danger">*</span></label>
							<input type="text" name="patient_phone_no" id="patient_phone_no" class="form-control" required  data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
							<label>Patient Complete Address<span class="text-danger">*</span></label>
							<textarea name="patient_address" id="patient_address" class="form-control" required data-parsley-trigger="keyup"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="patient_register" />
							<input type="submit" name="patient_register_button" id="patient_register_button" class="btn btn-primary" value="Register" />
						</div>

						<div class="form-group text-center">
							<p><a href="login.php">Login</a></p>
						</div>
					</form>
				</div>
			</div>
			<br />
			<br />
		</div>
	</div>
</div>    

<?php
    include_once 'footer.php';    
?>