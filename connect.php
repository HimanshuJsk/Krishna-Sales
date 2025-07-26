<?php
    $con=new mysqli('localhost','root','','ksales');

    if(!$con){
        die(mysqli_error($con));
    }else{
        // echo"Connected Successfully";
    }
?>