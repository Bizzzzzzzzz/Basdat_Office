<?php
    include '../config/database.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysqli_query($conn,"SELECT * FROM administrator WHERE AdminName = '$username' AND AdminPassword = '$password'");
    $check_data = mysqli_num_rows($data);
    if ($check_data > 0) {
        header("Location: ../views/content/home.php");
        exit;
    }
    else {
        echo "Username atau Password Salah";
    }
?>