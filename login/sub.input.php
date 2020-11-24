<?php

if(isset($_POST["submit"])) {
  require 'user.con.php';
  $user =  $_POST['username'];
  $email =  $_POST['email'];
  $pass =  $_POST['password'];
  $passch =  $_POST['passworch'];

  if(empty($user) || empty($email) || empty($pass) || empty($passch)) {
    header("location: signin.php?error=emptyfields&user=".$user . "&email=" . $email); 
    exit();
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $user)){
    header("location: signin.php?error=emvalidemail/username");
    exit();
  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location: signin.php?error=invalidemails&user=".$user); 
    exit(); 
  } else if(!preg_match("/^[a-zA-Z0-9]*$/",$user)) {
    header("location: signin.php?error=passs&user=".$user . "&email=" . $email);  
    exit();
  } else if($pass !== $passch) {
    header("location: signin.php?error=passs&user=".$user . "&email=" . $email);  
    exit();
  } else {
    $sql = "SELECT urs_name FROM login_ur WHERE urs_name=?";
    $stmt = mysqli_stmt_init($conn); 
     if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: signin.php?errorsql="); 
    exit();
     } else {
       $sql = "INSERT INTO login (email_id, user_name, pass_w) 
    VALUES ('$user', '$email', '$pass');";
    //mysqli_query($conn, $sql);
     
                  if(!mysqli_stmt_prepare($stmt, $sqli)) {
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


