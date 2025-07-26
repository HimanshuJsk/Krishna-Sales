<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define your admin credentials
        $admin_username = "kss";
        $admin_password = "kss123";

        // Get the form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Check if the entered credentials match the admin credentials
        if ($username == $admin_username && $password == $admin_password) {
            // Redirect to the admin dashboard or perform other actions
            header("Location: admin.php");
            exit();
        } else {
            $error_message = "Invalid username or password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
	<!-- <link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
	<!-- font-awesome -->
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
	<!--Script-->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<!--Angular js-->
	<script src="ang.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var togglePassword = document.getElementById('togglePassword');
            var passwordField = document.querySelector('input[name="password"]');
            togglePassword.addEventListener('change', function () {
                passwordField.type = togglePassword.checked ? 'text' : 'password';
            });
        });
    </script>
</head>
<style>
        body{
            overflow-x:hidden;
        }
        .nav-pills li a:hover{
            background-color:white;
            color:black;
        }
        .nav-link{
            color:white;
        }
        body{
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            background-image: url("Image/cta-bg.jpg");
            color:white;
            background-repeat:no-repeat;
            background-size:cover;
        }
        .form-container {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        form{
            border:black solid;
            border-radius:10px;
            padding-top: 50px;
            padding-right: 70px;
            padding-bottom: 50px;
            padding-left: 70px;
            background-color: white;
            color:black;
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
<body style="background-color: lightgreen;">
    <script>alert("login first to access Admin Panel")</script>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style=" color:white;">
        <a class="navbar-brand pl-2" href="alogin.php">
            <img src="img/nav/kss2.png" width="60" height="40" class="d-inline-block align-top" alt="">
        </a>
    </nav>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form name="adminlogin" method="post" onsubmit="return validateform()" class="p-4 shadow rounded bg-light">
                    <h2 class="text-center mb-4"><u>Admin Login</u></h2>

                    <?php
                        if (isset($error_message)) {
                            echo "<p class='text-danger text-center'>$error_message</p>";
                        }
                    ?>

                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="******" name="password" id="password" required>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="form-check-input" id="togglePassword">
                            <label class="form-check-label" for="togglePassword">Show Password</label>
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>