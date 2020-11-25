<?php 
    include_once 'user.con.php'; 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
	

  <title>  Page </title>
</head>
<body>

    <section>
     <div class="con">
        <div class="title">
         <h1> sign up </h1>
        </div>
    <?php 
      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if(strpos($fullUrl, "error=emptyfields") == true) {
          echo "<p class='error'> you did not fill in all the information </p>";
         
      } else if(strpos($fullUrl, "error=emvalidemail/username") == true) {
         echo "<p class='error'> username or email are invalid </p>";
       
      }  else if(strpos($fullUrl, "error=invalidemail") == true) {
        echo "<p class='error'> incorrect email </p>";
      
     }  else if(strpos($fullUrl, "error=passs&user") == true) {
        echo "<p class='error'> username or password charectors are incorrect </p>";
       
     } else if(strpos($fullUrl, "error=passs") == true) {
        echo "<p class='error'> password and password varify do not match </p>";
      
     } else if(strpos($fullUrl, "error=passs") == true) {
        echo "<p class='error'> password and password varify do not match </p>";
        
     } else if(strpos($fullUrl, "workssql=success") == true) {
        echo "<p class='success'> success! you are now signed up! </p>";
       
     }
    ?>
        <div class="form-div">
        <form class="signup" action="sub.input.php" method="POST">
        <input name="uername" type="text" placeholder="username">
        <input name="email" type="email" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <input name="passwordch" type="password" placeholder="password resubmit">
        <input name="submit" type="submit" value="signup">
    </form>
        </div>
     </div>
    </section>
</body>
</html>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    section{
        width: 100vw;
        height: 100vh;
        background-color: black;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        
    }
    .con{
        width: 40vw;
        height: 80vh;
        background-color: red;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        border-radius: 10px;
    }
    .title h1{
      color: white;
      font-size: 40px;
      margin-top: 60px;
      margin-right: 40px;
      margin-left: 40px;
      margin-bottom: 30px;
    }
    .title{
        border-bottom: 2px black solid;
    }
    form{
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
       
    }
    input{
        margin: 20px;
    }
    .error{
        margin-top: 40px;
        width: 20vw;
        color:brown;
        background-color: burlywood;
        justify-content: center;
        align-items: center;
        display: flex;
     
    }
    .success{
        margin-top: 40px;
        width: 20vw;
        color: green;
        background-color: yellow;
        justify-content: center;
        align-items: center;
        display: flex;
   
    }
</style>