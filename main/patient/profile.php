<?php
    include_once 'header.php';
?>

<div class="container-fluid">
	<?php include('navbar.php'); ?>
    
    <!-- edit 
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
			<br />
            <div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
							Edit Profile Details
						</div>
						<div class="col-md-6 text-right">
							<a href="profile.php" class="btn btn-secondary btn-sm">View</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form method="post" id="edit_profile_form">
						<div class="form-group">
							<label>Patient Email Address<span class="text-danger">*</span></label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" readonly />
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
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Gender<span class="text-danger">*</span></label>
									<select name="patient_gender" id="patient_gender" class="form-control">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Patient Contact No.<span class="text-danger">*</span></label>
									<input type="text" name="patient_phone_no" id="patient_phone_no" class="form-control" required  data-parsley-trigger="keyup" />
								</div>
							</div>
							
						</div>
						<div class="form-group">
							<label>Patient Complete Address<span class="text-danger">*</span></label>
							<textarea name="patient_address" id="patient_address" class="form-control" required data-parsley-trigger="keyup"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="edit_profile" />
							<input type="submit" name="edit_profile_button" id="edit_profile_button" class="btn btn-primary" value="Edit" />
						</div>
					</form>
				</div>
			</div>

			<br />
			<br />
             
-->
        <div class="row justify-content-md-center mt-4">
        <div class="col col-md-6">
            <div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6">
                            <h5 class="card-title "> User Information </h5>
						</div>
						
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<tr >
							<th class="text-right" width="40%">Patient Name :</th>
							<td></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Email Address : </th>
							<td></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Password : </th>
							<td></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Address : </th>
							<td></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Contact No. :</th>
							<td></td>
						</tr>
						<tr>
							<th class="text-right" width="40%">Gender :</th>
							<td></td>
						</tr>
						
					</table>
					<div class="col-12 text-right">
							<a href="profile.php?action=edit" class="btn btn-secondary btn-sm ">Edit</a>
						</div>					
				</div>
			</div>
        </div>
        </div>
			<br />
			<br />




