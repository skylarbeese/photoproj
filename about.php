<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Sacramento&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
  <title>  Page </title>
</head>
<body>
  <section>
  <div class="sign-con"> 
  <div class="signin-div">
	
  <?php 
   if(isset($_SESSION['user'])) {
	  echo "<div class='logout-btn'><form class='logout' action='login/logout.php' method'POST'>
	  
	  <button class='submit logout' type='submit' name='submit'> logout </button>
	  </form></div>";
   } else {
	echo " <form class='signin' action='login/login.input.php' method='POST'>
	<input  type='text' name='user' placeholder='username'>
	<input  type='text' name='pass' placeholder='password'>
	<button class='submit' type='submit' name='submit'> login </button>
	</form>";

	echo " <a href='login/signin.php'><button class='submit signup-btn'> signup </button></a>";
   }
?>
  </div> 
 
 

  </div>
  <div class="nav">
			<ul>
				<a href="index.php"><li class="home"> home </li></a>	
				<a href="#contact"><li class="contact"> contect </li></a>
				<div class="intro">
					<img class="logo" src="2x/logo1.jpg" alt="" >
					<h1><span> S</span>kylar Beese</h1>
				</div>
					<a href="about.php"><li class="about"> about </li></a>
				<a href="gallery.html"><li class="gallery1"> gallery </li></a>	
			</ul>
	
		</div>
      <div class="landing">
     
        <div class="header-con">
        <div class="header">
        <h1> this is a new header line </h1>
		<p>Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus 
        Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus
        Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus
        Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus
        </p>
        </div>
        </div>
        <div class="line-con">
        <div class="line"></div>
        </div>
        <div class="main-con">
        <div class="para1 para">
        <h1> this is a new header line </h1>
		<p>Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus 
        Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus
      
        </p>
        </div> 
        <img class="por" src="img/img14.jpg" alt="">
       <div class="para2 para">
        <h1> this is a new header line </h1>
		<p>Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus 
        Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus
      
        </p>
        </div> 
        </div>
      </div>
      <div class="banner2" id="contact">
		   <div class="img2">
		</div>
			<div class="linear-gradient2"></div>
<?php
   if(isset($_SESSION['user'])) {
		echo	'<form class="message-form" action="" method="POST">

			 <h3>contact me!</h3> 
			<h5>first name: </h5><input class="first-name form-control" type="text" name="first" placeholder="first name"><br>
			<h5>last name: </h5><input class="last-name form-control" type="text" name="last" placeholder="last name"><br>
			<h5>email: </h5><input class="email form-control" type="email" name="email" placeholder="johnDoe@gmsil.com"><br>
			<h5>type your questions here! </h5><textarea class="message form-control" type="text" name="text" row="5" placeholder="message..."></textarea><br>
		
			<button class="form-control submit" type="submit" name="submit"> submit message!</button>
   
			   </form>';
   } else {
	   echo '<h3 class="mess"> signup to contact me!</h3>';
   }
?>
        </div>
        <?php include 'footer.php'; ?>
  </section>
</body>
</html>
<style>
 *{
     margin: 0;
     padding: 0;
 }
 .img-cover {
			background-size: cover;
			width: 100%;
			height: 100vh;
		}
		
		.intro {
			justify-content: center;
			align-items: center;
			display: flex;
			flex-direction: column;
		    font-size: 30px;
		/*	font-family: 'Dosis', sans-serif; */
		text-transform: capitalize;
		/*font-family: 'Parisienne', cursive;*/
		font-family: 'Great Vibes', cursive;
		font-weight: 2;
		
		}
        h1 span {
			font-size: 80px;
			font-weight: 2;
		}
	
 .nav ul {
			justify-content: space-around;
			align-items: center;
			display: flex;
			width: 100%;
			height: 20vh;
			padding: 20px;
            font-size: 20px;
            padding-top: 20px;
            text-transform: uppercase;
            padding-bottom: 20px;
            border-bottom: 2px solid black;
			
        }
		ul li {
			justify-content: space-around;
			align-items: center;
			display: flex;
			width: 10vw;
			height: 10vh;
			
		}
		ul  a {
			text-decoration: none;
			list-style: none;
			color: #ABC;

		}
		ul a:hover {
			color:brown;
		}
	
	   
		@keyframes nav-c {
		from	{
			opacity: .5;
				transform: rotateY(-100deg);
			}
		to	{
			opacity: 1;
				transform: rotateY(0deg);
			}
		}
		
		.nav {
			transform: translateY(0px);
         
		}
        ul a:hover {
			color:brown;
		}
		.home, .contact {
			border-right: 2px rgb(33, 33, 34) solid;
			animation: nav-c 2s;
		}
		.about, .gallery1 {
			border-left: 2px  rgb(33, 33, 34) solid;
			animation: nav-c 2s;
		}
	   
		
		
		.nav {
			transform: translateY(0px);
         
		}
		.logo{
			width: 34px;
		}

/*---------------------------------------------------------------------------------------------------------*/

 .landing{
     width: 100vw;
     height: 120vh;
 
 }

 .sign-con{
     width: 100vw;
  
     justify-content: right;
     align-items: center;
     display: flex;
     
 }
.signin-div{
    width: 50%;
  
    justify-content: center;
     align-items: center;
     display: flex;
  
}
form.signin{
    justify-content: center;
     align-items: center;
     display: flex;
     flex-direction: row;
}
form.signin input{
   
            margin: 10px;
        padding: 0 5px;
        width: 120px;
        height: 30px;
        font-size: 15px;
        border: none;
        border-bottom: 1px solid black;
        border-left: 1px solid black;
        background-color: transparent;
}
form.signin button{
    margin-top: 10px;
            background-color: gray;
            padding: 5px 15px;
            border: none;
            border-radius: 40px;
            margin-left: 12px;
}
.logout-btn {
    justify-content: right;
     align-items: center;
     display: flex;
     right: 0;
     width: 80%;
   
}
.logout button{
    margin-top: 10px;
            background-color: gray;
            padding: 5px 15px;
            border: none;
            border-radius: 40px;
            margin-left: 12px;
}
.signup-btn{
    margin-top: 10px;
            background-color: gray;
            padding: 5px 15px;
            border: none;
            border-radius: 40px;
            margin-left: 12px;
}
.header-con{
    padding-top: 40px;
    width: 100vw;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}
.header-con{
    animation: textS 1.5s;
}
@keyframes textS{
    from{
        transform: translateY(70px);
        opacity: .5;
    }
 to    {
        transform: translateY(0);
        opacity: 1;
     }
}
.header{
    width: 70vw;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}
/*--------------------------------------------------------------------------------------------------------*/
 .main-con{
     height: 110vh;
    justify-content: space-around;
    align-items: center;
    display: flex;
    
 }
img.por{
    width: 370px;
    height: 500px;
    border-radius: 70%;
    animation: textS 1.4s;
}
.para{
    height: 30vh;
    width: 15vw;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}
.para1{
 animation: textSi 1.4s;
}
.para2{
    animation: textSi1 1.4s;
}
@keyframes textSi1{
    from{
        transform: translateX(-70px);
        opacity: .5;
    }
 to    {
        transform: translateX(0);
        opacity: 1;
     }
}
@keyframes textSi{
    from{
        transform: translateX(70px);
        opacity: .5;
    }
 to    {
        transform: translateX(0);
        opacity: 1;
     }
}
/*-------------------------------------------------------------------------------------------------------*/
.banner2 {
        	width: 100vw;
        	height: 90vh;
        	justify-content: center;
        	align-items: center;
        	display: flex;
        } 
    	.img2 {
			 
             background-attachment: fixed;
             background-image: url("img/img4.jpg");
             background-size: cover;
             width: 100%;
             height: 100%;
             position: relative;
             color: white;
             justify-content: center;
             align-items: center;
             display: flex;
             flex-direction: column;
         } 
         .linear-gradient2 {
			 justify-content: center;
			 align-items: center;
			 display: flex;
			 position: absolute;
			 width: 105%;
			 height: 92%;
			 background-image: linear-gradient(rgb(0, 0, 0, 0.4), rgb(0, 0, 0, 0.4));
		}
        h3.mess{
			justify-content: center;
			 align-items: center;
			 display: flex;
			 position: absolute;
		}
        .message-form {
		    
			justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            position: absolute;
            
            width: 80vw;
            height: 80vh;
			
		}
        .message-form h5, h3{
            color: white;
            font-size: 20px;
            letter-spacing: 2px;
        }
        .message-form h3{
           font-size: 50px;
           letter-spacing: 10px;
           padding-bottom: 20px;
        }
        .message-form input{
            color: white;
            margin: 10px;
        padding: 0 5px;
        width: 300px;
        height: 30px;
        font-size: 15px;
        border: none;
        border-bottom: 1px solid white;
        background-color: transparent;
            
        }
        textarea {
            color: white;
            margin: 10px;
        padding: 0 5px;
        width: 300px;
        height: 30px;
        font-size: 20px;
        border: none;
        border-bottom: 1px solid white;
        background-color: transparent;
        }
        .message-form button{
            margin-top: 10px;
            background-color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 40px;
        }
        .message-form button:hover{
            background-color: brown;
            color: white;
        }
</style>