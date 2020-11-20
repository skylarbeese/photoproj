<!DOCTYPE html>
<html>
<head>
	   
  <meta charset="utf-8" />

  <title> Page </title>
</head>
<body>	
    <div class="nav">
    <ul>
        <a href="project home index.html"><li> home </li></a>	
        <a href="project contect.html"><li> contect </li></a>
            <li> about </li>
        <a href="gallery.html"><li> gallery </li></a>	
    </ul>

<section>
    <div class="box1">
<form  action="contect_2.php" method="post">

<p class="title"> First Name: </p>   <input class="text-form" name="first" type="text" placeholder="john"><br>
<p class="title">Last Name: </p>   <input class="text-form" name="last" type="text" placeholder="doe"><br>
<p class="title"> email: </p>  <input class="text-form" name="email" type="email" placeholder="john@gmail.com"><br>
<p class="title"> password: </p>  <input class="text-form" name="password" type="password"><br>
    <button type="submit" name="submit"> sign up now!</button>
</form>
</div>
</section>
</body>
<style>
    * {
       padding: 0;
       margin: 0; 
       
    }
    .nav ul {
			justify-content: space-around;
			align-items: center;
			display: flex;
			width: 100%;
			height: 20px;
			padding: 40px
            font-size: 40px;
            padding-top: 20px;
            text-transform: uppercase;
            padding-bottom: 20px;
            border-bottom: 2px solid black;
            
		}
		.nav {
			transform: translateY(0px);
         
		}
    section {
        justify-content: center;
        align-items: center;
        display: flex;
        width: 100vw;
        height: 100vh;
       flex-direction: column;
       background-image: linear-gradient(0deg,	rgb(51, 51, 51),rgb(0, 0, 0));-image: ;
    }
    .box1 {
        justify-content: center;
        align-items: center;
        display: flex;
        width: 40vw;
        height: 60vh;
        border: 3px solid black;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 2px 2px 15px;
        background-color: rgb(255, 255, 255, .9);
    }
    .text-form {
        margin: 20px;
    }
    input {
        width: 300px;
        height: 30px;
        font-size: 20px;
        padding-left: 6px;
        background-color: rgb(0, 0, 0, .3);
        border-radius: 5px 5px 30px 5px;
        border: 0;
        border-bottom: 2px solid black;
        color: rgb(0, 0, 0, .5);
    }
    button {
        border: none;
        border-bottom: gray;
        background-color: rgb(255, 255, 255, .5);
        border-radius: 5px 5px 30px 5px;
        border-bottom: 2px solid black;
    }
    button:hover {
        background-color:rgb(51, 51, 51, .8);
    }
    .title {
        justify-content: center;
			align-items: center;
			display: flex;
    }
    button {
        justify-content: center;
			align-items: center;
			display: flex; 
            padding-right: 15px;
            padding-left: 15px;

    }
    
</style>
</html>
