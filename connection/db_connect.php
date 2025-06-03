<?php
    $conn = new mysqli('localhost', 'root', '', 'weather');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connection Successfully"
?>