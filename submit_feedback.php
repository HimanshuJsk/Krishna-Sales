<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = mysqli_real_escape_string($con, $_POST['name']);
    $email   = mysqli_real_escape_string($con, $_POST['email']);
    $rating  = intval($_POST['rating']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "INSERT INTO feedback (name, email, rating, message, created_at)
            VALUES ('$name', '$email', '$rating', '$message', NOW())";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Thank you for your feedback!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>