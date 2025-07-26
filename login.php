<?php
	include 'connect.php';
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$result=mysqli_query($con, "SELECT * FROM signup WHERE username='$username'");
		$row=mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0){
			if ($password == $row["password"]) {
				$_SESSION["login"] = true;
				$_SESSION["id"] = $row["id"];
				echo "<script>
						alert('Login Successfully');
						window.location.href = 'index.php';
						
					  </script>";
			}
			else{
				echo"<script> alert('Wrong Password'); </script>";
			}
		}
		else{
			echo"<script> alert('User Not Registered'); </script>";
		}
	}
?>
<html>

<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login form</title>
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="img/nav/KLOGO.png">
	<!-- Script -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script>
		function validateform() {
			var username = document.loginform.username.value;
			var password = document.loginform.password.value;
			if (username == null || username == "") {
				alert("Username can't be blank");
				return false;
			} else if (password.length < 6) {
				alert("Password must be at least 6 characters long.");
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

	.login-link {
		text-decoration: none;
		color: inherit;
		transition: color 0.3s ease;
	}

	.login-link:hover {
		color: #007bff;
		text-decoration: none;
	}

	.formerror {
		color: red;
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
				<form method="post" name="loginform" onsubmit="return validateform()" class="p-4 shadow rounded bg-light">
					<h2 class="text-center mb-4"><u>Login Form</u></h2>

					<div class="form-group mb-3">
						<label for="username">Username</label>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>

					<div class="form-group mb-3">
						<label for="password">Password</label>
						<input type="password" class="form-control" placeholder="******" name="password" id="password">
						<div class="form-check mt-2">
							<input type="checkbox" class="form-check-input" id="togglePassword">
							<label class="form-check-label" for="togglePassword">Show Password</label>
						</div>
					</div>

					<div class="mb-3">
						<a class="text-dark" href="#">Forget password?</a>
					</div>

					<div class="d-flex justify-content-between">
						<button class="btn btn-danger" type="reset">Reset</button>
						<button class="btn btn-primary" type="submit" name="submit">Login</button>
					</div>

					<p class="mt-3 text-center">
						Not registered yet? 
						<a href="s1.php" class="login-link">Register Here</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
