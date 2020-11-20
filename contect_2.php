<?php

include_once 'contect.inc.php'; 

$first = $_POST["first"];
$last = $_POST["last"];
$mail = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO contact_form (name_first, name_last, email, password_form) VALUES ('$first', '$last', '$mail', '$password');";
mysqli_query($conn, $sql);

header("location: contect.html?signup=success");