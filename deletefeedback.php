<?php
    include 'connect.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `feedback` WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if($result){
            echo "<script> alert('Data Deleted Successfully')</script>";
            header('location:userfeedback.php');
        } else {
            die(mysqli_error($con));
        }
    }
?>
