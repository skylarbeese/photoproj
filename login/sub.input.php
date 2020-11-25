<?php

if(isset($_POST["submit"])) {
  require 'user.con.php';
  $user =  $_POST['uername'];
  $email =  $_POST['email'];
  $pass =  $_POST['password'];
  $passch =  $_POST['passwordch'];

  if(empty($user) || empty($email) || empty($pass) || empty($passch)) {
    header("location: signin.php?error=emptyfields&user"); 
    exit();
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user)){
    header("location: signin.php?error=emvalidemail/username");
    exit();
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location: signin.php?error=invalidemails&user"); 
    exit(); 
  } else if(!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
    header("location: signin.php?error=passs&user");  
    exit();
  } else if($pass !== $passch) {
    header("location: signin.php?error=passs");  
    exit();
  } else {
    $sql = "SELECT us_na FROM login_ta WHERE us_na=?";
    $stmt = mysqli_stmt_init($conn); 
     if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: signin.php?errorsql="); 
    exit();
     } else {
       $sql = "INSERT INTO login_ta (email_id, us_na, pass_w) 
    VALUES ('$user', '$email', '$pass');";
    //mysqli_query($conn, $sql);
     
                  if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: signin.php?errorsqli"); 
                    exit();
                  } else {
                       mysqli_stmt_bind_param($stmt, "sss", $user, $email, $pass);
                    mysqli_stmt_execute($stmt);
                 
                    header("location: signin.php?workssql=success");
                    exit(); 
                  }
                }
  } 
       
}


