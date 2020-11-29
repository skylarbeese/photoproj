<?php

/*if(isset($_POST['submit'])) {
    require 'user.con.php';
    
    $userid =  $_POST['user'];
    $pass =  $_POST['pass'];

    if(empty($userid) || empty($pass)) {
        header("location: ../index.php?workssql=emppty");
    //    exit(); 
    } else {
       $sql = "SELECT * FROM login_ta WHERE us_na=? OR email_id=?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?workssql=failed");
    //   exit();    
       } else {
           mysqli_stmt_bind_param($stmt, "ss", $userid, $userid);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);

           header("location: ../index.php?workssql=passincorrrect11");
       }
        if($row = mysqli_fetch_assoc($result)) {
          $passCk = password_verify($pass, $row['pass_w']); // get password column name //
        
        //  header("location: ../index.php?workssql=passincorrrect22");
        if($passCk == false) {
            header("location: ../index.php?workssql=passincorrrect");
             //       exit(); 
        } else if($passCk == true) {
           session_start();
         $_SESSION['iduser'] = $row['id'];  // get id column name //
          $_SESSION['userus'] = $row['us_na'];// get user column name

          header("location: ../index.php?login=success");
       //     exit();
        }  else {
            header("location: ../index.php?workssql=successpwfail");
       //     exit();
        }
        
        }
    }       
     } else {
    header("location: ../index.php?workssql=success");
               //    exit(); 
} */
include 'user.con.php';
if(isset($_POST['user']) &&  isset($_POST['pass'])) {
    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $username = validate($_POST['user']);
    $password = validate($_POST['pass']);
    if(empty($username) && empty($password)){
        header("location: ../index.php?error=user password");
        exit();
    
}else if(empty($username)) {
        header("location: ../index.php?error=user");
    exit();
    } else if(empty($password)){
        header("location: ../index.php?error=pass");
        exit();
    } else {
        $sql = "SELECT * FROM login_ta WHERE us_na='$username' OR email_id='$username' AND pass_w='$password';";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >= 1) {
            $row = mysqli_fetch_assoc($result);
          if($row['us_na'] === $username || $row['email_id'] === $username && $row['pass_w'] === $password) {
            session_start();
            $_SESSION['id'] = $row['id'];

              $_SESSION['user'] = $row['us_na'];
              $_SESSION['user'] = $row['email_id'];
              $_SESSION['pass'] = $row['pass_w'];
              header("location: ../index.php?error=loggedin");
            exit();
            
          } else {
            header("location: ../index.php?error=notloggedin");
            exit();
          }
          
        } else {
            header("location: ../index.php?error=norow");
            exit();
        }
        header("location: ../index.php?error=good");
        exit();
    }
} else {
    header("location: ../index.php");
    exit();
}