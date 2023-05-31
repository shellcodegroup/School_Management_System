<!DOCTYPE html>
<html lang="en">

<head>

	<title></title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="#" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="#">
	
	


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="#" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<form action = "" method = "POST">
						<div class="form-group mb-3">
							<label class="floating-label" for="Username">Username</label>
							<input type="text" class="form-control" id="Username" name = "username" placeholder="Input Your Username">
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email address</label>
							<input type="text" class="form-control" id="Email" name = "email"placeholder="Input Your Email Address">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" id="Password"  name = "password"placeholder="Input Your Password">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Confirm Password</label>
							<input type="password" class="form-control" id="Password"  name = "cpassword"placeholder="Input Your Password">
						</div>
						<div class="custom-control custom-checkbox  text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Send me the <a href="#!"> Newsletter</a> weekly.</label>
						</div>
						<button class="btn btn-primary btn-block mb-4" name ="submit">Sign up</button>
						<p class="mb-2">Already have an account? <a href="auth-signin.html" class="f-w-400">Signin</a></p>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
