<?php

include_once 'ph_contect.php'; 

if(isset($_POST['submit'])) {
    
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$text = $_POST['text'];


$sql = "INSERT INTO contect (first_name, last_name, email_add, text_qu) 
VALUES ('$first', '$last', '$email', '$text');";
mysqli_query($conn, $sql);
    
 
     
}

header("location: index.php?signup=success");


