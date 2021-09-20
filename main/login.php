<?php
    include_once 'header.php';
?>

<div class="container mt-5 ">
	<div class="row justify-content-md-center">
		<div class="col col-md-4">
			
			<span id="message"></span>
			<div class="card">
				<div class="card-header">Login</div>
				<div class="card-body">
					<form method="post" id="patient_login_form" action="includes/login.inc.php">
						<div class="form-group">
							<label>Patient Email Address</label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" />
						</div>
						<div class="form-group">
							<label>Patien Password</label>
							<input type="password" name="patient_password" id="patient_password" class="form-control" required  data-parsley-trigger="keyup" />
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="patient_login" />
							<input type="submit" name="patient_login_button" id="patient_login_button" class="btn btn-primary" value="Login" />
						</div>

						<div class="form-group text-center">
							<p><a href="signup.php">Sign up</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    include_once 'footer.php';    
?>