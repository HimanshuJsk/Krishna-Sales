<?php
	include 'connect.php';
	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobileno=$_POST['mobileno'];
		
		$sql="insert into `signup` (name,username,email,password,mobileno) 
		values('$name','$username','$email','$password','$mobileno')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "<script>
				alert('Sign-Up Successfully');
				window.location.href='login.php';
				window.open('smtp.php', '_blank');  // Opens smtp.php in a new tab
			</script>";
			// echo"<script> alert('Sign-Up Successfully')</script>";
			// window.location.href='login.php';
			//header('location:admin.php');
		}else{
			die(mysqli_error($con));
		}
		
	}
?>
<html>
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign-up form</title>
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom.css">
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/KLOGO.png">
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		function validateform() {
			var name = document.signupform.name.value;
			var username = document.signupform.username.value;
			var email = document.signupform.email.value;
			var password = document.signupform.password.value;
			var mobileno = document.signupform.mobileno.value;
			if (name == null || name == "") {
				alert("Name can't be blank");
				return false;
			}
			else if (username == null || username == "") {
				alert("Username can't be blank");
				return false;
			}
			else if (email == null || email == "") {
				alert("E-mail can't be blank");
				return false;
			}
			else if (password.length < 6) {
				alert("Password must be at least 6 characters long.");
				return false;
			}
			else if (mobileno.length != 10) {
				alert("mobile number should be of 10 digits!");
				return false;
			}
		}  
		document.addEventListener('DOMContentLoaded', function() {
			var togglePassword = document.getElementById('togglePassword');
			var passwordField = document.getElementById('password');
			togglePassword.addEventListener('change', function() {
				if (togglePassword.checked) {
					passwordField.type = 'text';
				} else {
					passwordField.type = 'password';
				}
			});
		});
	</script>
</head>
<style>
	body {
		color: black;
		font-size: 15px;
		font-family: 'Poppins', sans-serif;
    	background-color: #f8f9fa;
	}

	a.login-link {
		text-decoration: none;
		color: inherit;
		transition: color 0.3s ease;
	}

	a.login-link:hover {
		color: #007bff; /* Bootstrap primary blue */
		text-decoration: none;
	}

	@media(max-width: 576px) {
		form {
			padding: 20px !important;
		}
		h2 {
			font-size: 24px !important;
		}
	}
</style>

<body>
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6">
				<form name="signupform" method="post" onsubmit="return validateform()" class="p-4 shadow rounded bg-light">
					<h2 class="text-center mb-4"><u>Sign-up Form</u></h2>

					<div class="form-group mb-3">
						<label for="name">Name</label>
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>

					<div class="form-group mb-3">
						<label for="username">Username</label>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>

					<div class="form-group mb-3">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" placeholder="abc@gmail.com" name="email">
					</div>

					<div class="form-group mb-3">
						<label for="password">Password</label>
						<input type="password" class="form-control" placeholder="******" name="password" id="password">
						<div class="form-check mt-2">
							<input type="checkbox" class="form-check-input" id="togglePassword">
							<label class="form-check-label" for="togglePassword">Show Password</label>
						</div>
					</div>

					<div class="form-group mb-3">
						<label for="mobileno">Mobile No</label>
						<input type="tel" class="form-control" placeholder="00000 00000" name="mobileno">
					</div>

					<div class="d-flex justify-content-between">
						<button class="btn btn-danger" type="reset" name="reset">Reset</button>
						<button class="btn btn-primary" type="submit" name="submit" value="submit">Sign up</button>
					</div>

					<p class="mt-3 text-center">Already a member? <a href="login.php" class="login-link">Login</a></p>
				</form>
			</div>
		</div>
	</div>
</body>

</html>