<?php 
    include_once 'user.con.php'; 
 
?>
<!DOCTYPE html>
<html>

<head>
	

  <title>  Page </title>
</head>
<body>

    <div class="page-con">
     <div class="con1">
        <div class="title">
         <h1> sign up </h1>
        </div>
    <?php 
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if(strpos($fullUrl, "error=emptyfields&user") == true) {
          echo "<p class='error'> you did not fill in all the information </p>";
         
      } else if(strpos($fullUrl, "error=emvalidemail/username") == true) {
         echo "<p class='error'> username or email are invalid </p>";
       
      }  else if(strpos($fullUrl, "error=invalidemail") == true) {
        echo "<p class='error'> incorrect email </p>";
      
     }  else if(strpos($fullUrl, "error=passs&user") == true) {
        echo "<p class='error'> username or password charectors are incorrect </p>";
       
     } else if(strpos($fullUrl, "error=passs") == true) {
        echo "<p class='error'> password and password varify do not match </p>";
      
    } else if(strpos($fullUrl, "error=usertaken") == true) {
        echo "<p class='error'> user or email in taken </p>";
      
     } else if(strpos($fullUrl, "workssql=success") == true) {
        echo "<p class='success'> success! you are now signed up! </p>";
       
     }
    ?>
        <div class="form-div">
        <form class="signup" action="sub.input.php" method="POST">
        <input name="uername" type="text" placeholder="username">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <input name="passwordch" type="password" placeholder="password resubmit">
        <input class="btn" name="submit" type="submit" value="signup">
    </form>
        </div>
     </div>
    </div>
</body>
</html>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    .page-con{
        width: 100vw;
        height: 100vh;
        background-color: rgb(0, 0, 0, .6);
        justify-content: center;
        align-items: center;
        display: flex;
        position: fixed;  
        z-index: 3;
    }
  
    .con1{
        width: 40vw;
        height: 80vh;
        background-color: white;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        border-radius: 10px;
    }
    .title h1{
      text-transform: uppercase;
      font-size: 70px;
      margin-top: 10px;
      margin-right: 40px;
      margin-left: 40px;
      margin-bottom: 30px;
    }
    .title{
        border-bottom: 2px black solid;
    }
    .signup{
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
       
    }
  .signup  input{
        margin: 10px;
        padding: 0 5px;
        width: 300px;
        height: 30px;
        font-size: 20px;
        border: none;
        border-bottom: 1px solid black;
        background-color: transparent;
    }
  .signup  input.btn {
        background-color: white;
      
    }
    input.btn:hover{
        background-color: gray;
    }
    .error{
        margin-top: 40px;
        width: 20vw;
        color:  rgb(54, 0, 0);
        background-color: rgb(129, 0, 0, .8);
        justify-content: center;
        align-items: center;
        display: flex;
        padding: 5px;
    }
    .success{
        margin-top: 40px;
        width: 20vw;
        color: rgb(0, 33, 0);
        background-color: rgb(0, 79, 0, .7);
        justify-content: center;
        align-items: center;
        display: flex;
        padding: 5px;
    }
</style>