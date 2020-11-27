<?php

if(isset($_POST['submit'])) {
    require 'user.con.php';
    
    $userid =  $_POST['user'];
    $passC =  $_POST['pass'];

    if(empty($userid) || empty($pass)) {
        header("location: ../index.php?workssql=emppty");
        exit(); 
    } else {
       $sql = "SELECT * FROM WHERE us_na=? OR email_id=?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?workssql=failed");
        exit();    
       } else {
           mysqli_stmt_bind_param($stmt, "ss", $userid, $userid);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
       }
        if($row = mysqli_fetch_assoc($result)) {
          $passC = password_verify($pass, $row['pass_w']); // get password column name //
        
        if($passC == false) {
            header("location: ../index.php?workssql=passincorrrect");
                    exit(); 
        } else if($passC == true) {
           session_start();
         $_SESSION[] = $row['id'];  // get id column name //
          $_SESSION[] = $row['us_na'];// get user column name

          header("location: ../index.php?login=success");
            exit();
        }  else {
            header("location: ../index.php?workssql=successpwfail");
            exit();
        }
        
        }
    }       
     } else {
    header("location: ../index.php?workssql=success");
                    exit(); 
}