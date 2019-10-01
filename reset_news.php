<?php
   $conn = mysqli_connect("localhost", "root", "", "dalal");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE news SET taken = '0' WHERE 1";
    $conn -> query($sql);
?>