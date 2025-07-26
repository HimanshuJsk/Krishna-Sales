<?php
	include 'connect.php';
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$result=mysqli_query($con, "SELECT * FROM signup WHERE username='$username'");
		$row=mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) > 0){
			if($password == $row["password"]){
				$_SESSION["login"]=true;
				$_SESSION["id"]=$row["id"];
				echo"<script> alert('Login Successfully')</script>";
				header("Location: index.php");
				// echo"<script> alert('Login Successfully')</script>";
			}
			else{
				echo"<script> alert('Wrong Password'); </script>";
			}
		}
		else{
			echo"<script> alert('User Not Registered'); </script>";
		}
		// if(mysqli_num_rows($result) > 1){
		// 	if($result){
		// 		echo"<script> alert('Login Successfully')</script>";
		// 		//header('location:admin.php');
		// 	}else{
		// 		die(mysqli_error($con));
		// 	}
		// }
		
	}
?>
<html>

<head>
	<title>Login form</title>
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!--Favicon-->
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
			}
			else if (password.length < 6) {
				alert("Password must be at least 6 characters long.");
				return false;
			}
		}
	</script>
</head>
<style>
	body {
		color: black;
		font-size: 15px;
	}

	.formerror {
		color: red;
	}
</style>

<body>
	<script>alert("login first to access all pages")</script>
	<div class="container">
		<div class="form-area">
			<form method="post" name="loginform" onsubmit="return validateform()">
				<h2><u>Login form</u></h2>
				<br>
				Username:
				<input type="text" placeholder="Username" name="username">
				<br>
				<br>
				Password:
				<input type="password" placeholder="* * * * * *" name="password">
				<br>
				<br>
				<a class="text-dark" href="#">Forget password?</a>
				<br>
				<br>
				<button class="btn btn-primary" type="submit" value="submit" name="submit">
					Login</button>
				<button class="btn btn-danger" type="reset" value="reset">Reset</button><br><br>
				<p>Not registred yet ?<a href="s1.php"> Register Here.</a></p>
			</form>
		</div>
	</div>
</body>

</html>