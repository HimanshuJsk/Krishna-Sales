<?php
    include 'connect.php';
    $id = $_GET['updateid'];
    // Fetch existing data
    $sql = "SELECT * FROM `signup` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result); // Fetch the result as an associative array

    $name = $row['name'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $mobileno = $row['mobileno'];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobileno = $_POST['mobileno'];

        $sql = "UPDATE `signup` SET name='$name', username='$username', email='$email', password='$password', mobileno='$mobileno' WHERE id=$id";

        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: user.php");
        } else {
            die(mysqli_error($con));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update Information</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="img/nav/kss2.png">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            color: black;
            font-size: 15px;
            background: #f8f9fa;
            padding: 30px 0;
        }

        .update-form {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .form-control {
            margin-bottom: 15px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .btn-block {
            width: 100%;
        }

        label {
            font-weight: 500;
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
            } else if (username == null || username == "") {
                alert("Username can't be blank");
                return false;
            } else if (email == null || email == "") {
                alert("E-mail can't be blank");
                return false;
            } else if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                return false;
            } else if (mobileno.length != 10) {
                alert("Mobile number should be of 10 digits!");
                return false;
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('togglePassword').addEventListener('change', function () {
                var passwordField = document.getElementById('password');
                passwordField.type = this.checked ? 'text' : 'password';
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="update-form">
            <form name="signupform" method="post" onsubmit="return validateform()">
            <h2><u>Update User Information</u></h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
                <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" id="togglePassword">
                <label class="form-check-label" for="togglePassword">Show Password</label>
                </div>
            </div>

            <div class="form-group">
                <label for="mobileno">Mobile No:</label>
                <input type="tel" class="form-control" name="mobileno" id="mobileno" value="<?php echo $mobileno; ?>" required>
            </div>

            <button class="btn btn-primary btn-block" type="submit" name="submit">Update</button>
            <button class="btn btn-danger btn-block" type="reset" name="reset">Reset</button>
            </form>
        </div>
    </div>
</body>
</html>
