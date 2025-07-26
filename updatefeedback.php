<?php
    include 'connect.php';
    $id = $_GET['updateid'];

    // Fetch existing data
    $sql = "SELECT * FROM `feedback` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $message = $row['message'];
    $rating = $row['rating'];

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $rating = $_POST['rating'];

        $sql = "UPDATE `feedback` SET name='$name', email='$email', message='$message', rating='$rating' WHERE id=$id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Location: userfeedback.php");
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
    <title>User Update</title>
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
        .card{
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

        .star-rating i {
            font-size: 25px;
            color: #ccc;
            cursor: pointer;
        }
        .star-rating i.filled {
            color: gold;
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
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4"><u>Update Feedback</u></h3>
                        <form method="post" name="feedbackform" onsubmit="return validateform()">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>">
                </div>
                <div class="form-group mb-3">
                    <label>Rating</label>
                    <div class="star-rating">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <i class="fa fa-star <?= ($i <= $rating) ? 'filled' : '' ?>" data-value="<?= $i ?>"></i>
                        <?php endfor; ?>
                    </div>
                    <input type="hidden" name="rating" id="ratingInput" value="<?= $rating ?>">
                </div>
                <div class="form-group mb-3">
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="3" placeholder="Write your feedback..."><?= $message ?></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>
                <button type="reset" class="btn btn-danger btn-block">Reset</button>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const stars = document.querySelectorAll('.star-rating i');
        const ratingInput = document.getElementById('ratingInput');

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                const rating = index + 1;
                ratingInput.value = rating;

                stars.forEach((s, i) => {
                    if (i < rating) {
                        s.classList.add('filled');
                    } else {
                        s.classList.remove('filled');
                    }
                });
            });
        });

        function validateform() {
            var name = document.feedbackform.name.value;
            var email = document.feedbackform.email.value;
            var message = document.feedbackform.message.value;
            var rating = document.feedbackform.rating.value;

            if (name == "") {
                alert("Please Enter Your Name.");
                return false;
            }
            if (email == "") {
                alert("Please Enter Your Email.");
                return false;
            }
            if (message == "") {
                alert("Please Enter Your Message.");
                return false;
            }
            if (rating == "") {
                alert("Please Select a Rating.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
