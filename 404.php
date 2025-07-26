<?php
    http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
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
            font-family: sans-serif;
            text-align: center;
            padding: 50px;
            background: #ffffffff;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        img {
            width: 350px;      
            height: auto;     
            display: block;
            margin: 0 auto;
        }

        h1 {
            font-size: 48px;
            color: #e74c3c;
            margin-top: 30px;
        }

        p {
            font-size: 20px;
            margin: 20px 0;
        }

        a {
            color: #fff;
            background-color: #3498db;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            text-decoration:none;
            color:#fff;
        }

        @media (max-width: 768px) {
            body {
                padding: 30px 15px;
            }

            img {
                width: 100%;
                max-width: 300px;
            }

            h1 {
                font-size: 32px;
            }

            p {
                font-size: 18px;
            }

            a {
                display: inline-block;
                padding: 10px 25px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/error/404.png" alt="404 Image">
        <h1>Oops! Page Not Found</h1>
        <p>The page you are looking for doesn’t exist.</p>
        <a href="krishnasales.php">Go Back Home</a>
    </div>
</body>
</html>
