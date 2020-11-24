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
        <div class="form-div">
        <form class="signup" action="sub.input.php" method="POST">
        <input name="uername" type="text" placeholder="username">
        <input name="email" type="email" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <input name="passwordch" type="password" placeholder="password resubmit">
        <input name="submit" type="submit" value="signup">
    </form>
        </div>
    </section>
</body>
</html>
<style>
    section{
        width: 100vw;
        height: 100vh;
        background-color: black;
        justify-content: center;
        align-items: center;
        display: flex;
    }
</style>