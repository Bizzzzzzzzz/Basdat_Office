<?php
    include 'connection/db_connect.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysqli_query($conn,"SELECT * FROM admin WHERE AdminName = '$username' AND AdminPassword = '$password'");
    $check_data = mysqli_num_rows($data);
    if ($check_data > 0) {
        header("location:content.php");
    }
?>