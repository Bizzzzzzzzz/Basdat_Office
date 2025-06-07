<?php
    $conn = new mysqli('localhost', 'root', '', 'office');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>