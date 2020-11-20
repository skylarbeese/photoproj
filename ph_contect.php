<?php
 // $conn = mysqli_connect("localhost", "root", "");
 // $db = mysqli_select_db($conn, "photocontect");

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "photo_data";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);