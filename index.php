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
<!--	<div class="signup-page">
	<?php// include "login/signin.php";?>
	</div> -->
	<section>
  <div class="sign-con"> 
  <div class="signin-div">
	
  <?php 
   if(isset($_SESSION['user'])) {
	  echo "<form action='login/logout.php' method'POST'>
	  <input type='submit' name='submit' value='logout'>
	  </form>";
   } else {
	echo " <form class='signin' action='login/login.input.php' method='POST'>
	<h2>username: </h2><input  type='text' name='user' placeholder='username'>
	<h2>password: </h2><input  type='text' name='pass' placeholder='password'>
	<input type='submit' name='submit' value='login'>
	</form>";
   }
?>
  </div> 
  <?php //include 'login/login.mess.php'; ?> 
 
<!--  <h1 class="btn-sign-in"> sign in </h1>  -->
  </div>
  
		 <a href="login/signin.php"><h1> signup </h1></a>
	  <!--  <button class="sign"> signup </button>  --->
		<div class="nav">
			<ul>
				<a href="index.php"><li class="home"> home </li></a>	
				<a href="#contact"><li class="contact"> contect </li></a>
				<div class="intro">
					<img class="logo" src="2x/logo1.jpg" alt="">
					<h1><span> S</span>kylar Beese</h1>
				</div>
					<li class="about"> about </li>
				<a href="gallery.html"><li class="gallery"> gallery </li></a>	
			</ul>
	
		</div>
		<div class="landing-con">
			<div class="landing">
				<div class="slider-con">
					<div class="left"><i class="fas fa-caret-left"></i> </div>
					<div class="right"> <i class="fas fa-caret-right"></i> </div>
					
					</div>
				    <div class="gradient"></div>
			</div>
		
	
		</div>
		<div class="banner-3">
		<div class="text-con3">

		<h1> this is a new header line </h1>
		<p>Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus </p>
		
		</div>
	<div class="img-div">

	 <div class="img-wrapper">
		<div class="ban3 ban-img1">
	
		<div class="image-grid " style=" background-image: url(img/img5.jpg);"></div>
		 <div class="grad grad1"></div>
		   
	  <h1 class="text-img text1">img one</h1>  
	  
	
		</div>
</div>
<div class="img-wrapper">
        <div class="ban3 ban-img2">
		
		 <div class="image-grid " style=" background-image: url(img/IMG_9751.jpg);"></div>
		 <div class="grad grad2"></div>  
		 <h1 class="text-img text2">img one</h1>
		
		</div>
</div>
<div class="img-wrapper">
		<div class="ban3 ban-img3">
		
		<div class="image-grid " style=" background-image: url(img/img1.jpg);"></div>
			 <div class="grad grad3"></div>  
		<h1 class="text-img text3">img one</h1>
	
		</div>
</div>
<div class="img-wrapper">
		<div class="ban3 ban-img4">
		
		<div class="image-grid " style=" background-image: url(img/img1.jpg);"></div>
		 <div class="grad grad4"></div>  
	    <h1 class="text-img text4">img one</h1>
	   
		</div>
</div>
	</div>
		</div> 
		
<!-------------------------------------------------------------------------------------------------------------------------------------->		
		<div class="banner">
			<div class="img">
		
			</div>
			<div class="linear-gradient"></div>
            		<div class="img-text">
					<h1>this is some more info </h1>
		<p>Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus utroque est in, pro pertinacia liberavisse accommodare at, ea per nusquam concludaturque. Qui incorrupte argumentum ex, ea pro mazim fabulas, vix ea graece dissentiunt. Sed odio tation in, illum graece convenire ea usu. In omnes sanctus his, ea choro commodo ius, quodsi malorum usu at. Vis dolore regione in, ex quo error partiendo. Qui ne aliquip denique, est ut corrumpit philosophia. Duo ei omnis everti efficiantur.</p>
		</div>
		     </div> 
		</div>
		<div class="box1">
			<div class="text-div">
			<h1>this is some more info </h1>
		<p>Lorem ipsum dolor sit amet, alia agam quot cu usu, ea nec utinam ubique accusam. Sanctus utroque est in, pro pertinacia liberavisse accommodare at, ea per nusquam concludaturque. Qui incorrupte argumentum ex, ea pro mazim fabulas, vix ea graece dissentiunt. Sed odio tation in, illum graece convenire ea usu. In omnes sanctus his, ea choro commodo ius, quodsi malorum usu at. Vis dolore regione in, ex quo error partiendo. Qui ne aliquip denique, est ut corrumpit philosophia. Duo ei omnis everti efficiantur.</p>
		  </div>
		  <div class="con">
		  <div class="icon-con"> 

            
			 <div class="flip flip1">
			  <div class="front">
				 <i class="fab fa-facebook"></i>
			  </div>
			  <div class="back">
				<i class="fab fa-facebook"></i>
				<div class="box-hide"></div>
				<div class="text">
				<a href=""><h2> facebook </h2></a>  
				</div>
			 </div>
				</div>
		  </div>
		  <div class="icon-con">
				<div class="flip flip2">
					<div class="front">
						<i class="fab fa-instagram"></i>
					</div>
					<div class="back">
						<i class="fab fa-instagram"></i>
					  <div class="box-hide"></div>
					  <div class="text">
						<a href=""><h2> instagram </h2></a>
					  </div>
				   </div>
					  </div>
					</div>

        
	
      
			</div>
		</div>
		<div class="banner2" id="contact">
		   <div class="img2">
		</div>
			<div class="linear-gradient2"></div>
	<!---	  <form   class="message-form" action="photoSite/insert.php" method="post">  -->
			<form class="message-form" action="" method="POST">

			 <h3>contact me!</h3> 
			<h5>first name: </h5><input class="first-name form-control" type="text" name="first" placeholder="first name"><br>
			<h5>last name: </h5><input class="last-name form-control" type="text" name="last" placeholder="last name"><br>
			<h5>email: </h5><input class="email form-control" type="email" name="email" placeholder="johnDoe@gmsil.com"><br>
			<h5>type your questions here! </h5><textarea class="message form-control" type="text" name="text" row="5" placeholder="message..."></textarea><br>
		
			<button class="form-control submit" type="submit" name="submit"> submit message!</button>
		  </form>
		</div>
	
	</section>

</body>
</html>
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			
		}
	
		.sign-con{
			justify-content: center;
	        align-items: center;
	        display: flex;
		}
		.sign-con h1{
			width: 70px;
			height: 40px;
		
		}
		.signup-page{
			visibility: hidden;

		}
		.vis{
			visibility: visible;
       }
	  .hid{
		visibility: hidden;
	  }
		section {
			
		
			width: 100%;
			height: 100vh;
		}
	
/*-----------------------------------------------------------------------------*/
/*
  .signin-div{
	  width:50%;
	  height: 10%; 
	  transform: translateY(-40px); 
	  justify-content: center;
	  align-items: center;
	  display: flex;
	 
	  transition: .6s;
  }
  .sig{
	transform: translateY(0);
  } */
/*----------------------------------------------------------------------------------------------------*/
.signin{
	
			float: left;
			display: flex;
			margin: 10px;
}
.signin h2{
	font-size: 20px;
}
.btn-sign-in{
	width:100px;
	  height: 70px;
 
	  justify-content: center;
	  align-items: center;
	  display: flex;
}
/*-------------------------------------------------------------------------------------------------------*/
    .landing-con {
		width: 100%;
	}
	
	.landing {
		position: relative;
		justify-content: center;
			align-items: center;
			display: flex;
	}
	.img-landing {
			background-size: cover;
			width: 100%;
			height: 100vh;
		    z-index: -3;
			justify-content: center;
			align-items: center;
			display: flex;
	}
	.logo{
		width: 34px;
		
	}
	.img-landing {
		animation: imgTrns 1s;
	}
	.landing{
		animation: img 1s;
	}
	@keyframes img {
		from {
           transform: rotateX(20deg);
		}
	to	{
         transform: rotateX(0deg);
		}
	}
	@keyframes imgTrns {
		from {
            opacity: 0;
			 
		}
	to	{
		 opacity: 1;
		 
		}
	}
	.gradient {
		     justify-content: center;
			 align-items: center;
			 display: flex;
			 position: absolute;
			 width: 100%;
			 height: 100%;
			 background-image: linear-gradient(rgb(0, 0, 0, 0.2), rgb(0, 0, 0, 0.2));
			 z-index: -2;
	}
    .slider-con {
		    position: absolute;
		    font-size: 70px;
			color: white;
			justify-content: space-between;
			align-items: center;
			display: flex;
			padding: 12px;
			width: 95%;
			height: 100%;
	}
	
	.left i , .right i {
		font-size: 50px;
		opacity: .2;
	}
	
/*------------------------------------------------------------------------------------------*/
	/*-----------------------------------------------------------------------------------------------------------------------------------*/
	
	.img-cover {
			background-size: cover;
			width: 100%;
			height: 100vh;
		}
		.banner-3 {
			width: 100vw;
			height: 100vh;
			justify-content: space-around;
			align-items: center;
			display: flex;
		}
		.text-con3{
			width: 35vw;
			height: 70vh;
            justify-content: center;
			align-items: left;
			display: flex;
			flex-direction: column;
            
		}
/*-----------------------------------------------------------------------------------------------------------------------------------------*/	
		.text-con3 h1{
			letter-spacing: 5px;
			font-size: 30px;
			border-bottom: 1px black solid;
			padding: 10px;
	/*		transform: translateY(-200px);
			transition: .6s;  */
		}
		.text-con3 p{
			width: 300px;
			padding-top: 20px;
	/*		transform: translateY(-100px);
			transform: .6s;  */
		}
		
		.active-con3{
			transform: translateY(0);
		}

/*-------------------------------------------------------------------------------------------------------*/
     	/*	.grad2{
			
			filter: blur(3px);
			
		}  */
/*------------------------------------------------------------------------------------------------------------------------------*/	

		.img-div{
			width: 33vw;
			height: 90vh;
            justify-content: center;
			align-items: center;
	    	display: grid;
		    grid-template-columns: auto auto;
		    grid-template-rows: auto;
	     
			padding: 20px;
		}
/*		.img-wrapper{
			width: 270px;
			height: 270px;
		    margin:5px;
            justify-content: center;
			align-items: center;
			display: flex;
			position: relative;
			border: 2px red solid;
		} */
		.ban3 {
			width: 270px;
			height: 270px;
		    margin:5px;
            justify-content: center;
			align-items: center;
			display: flex;
			position: relative;
			
			overflow: hidden;
		}
	
	    .image-grid{
			width: 100%;
			height: 100%;
			border: 2px white solid;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			justify-content: center;
			align-items: center;
			display: flex;
			transition: 1s;
		
		}
		.img-landing{
			background-position: center;
			justify-content: center;
			align-items: center;
			display: flex;
		}
      /*  .box-text{
			background-position: center;
			justify-content: center;
			align-items: center;
			display: flex;
			width: 100px;
			height: 100px;
			border: 2px white solid;
		} */
/*-------------------------------------------------------------------------------------------------------*/		
		.text-img{
			color: black;
		    position: absolute;
		    color: white;
			transition: .6s;
			display: flex;
		}
     .text-img{
		transform: translateX(200px);
	  }
	/*    .ban3:hover h1.text-img{
			transform: translateX(0);
		}  */
		.active1{
			transform: translateX(0);
		} 
       
/*---------------------------------------------------------------------------------------------------------------------------------*/
     
 	 
  
	.grad{
			justify-content: center;
			 align-items: center;
			 display: flex;
			 position: absolute;
			 width: 268px;
			height: 200px; 
			 background-image: linear-gradient(rgb(0, 0, 0, 0), rgb(0, 0, 0, 0.9));
			 transform: translateY(300px);
			transition: .6s;
			bottom: 0;
		} 

/*	.ban3:hover .grad{
      transform: translateY(0);
	}   */
    .active2{
      transform: translateY(0);
	}  
/*----------------------------------------------------------------------------------------------------------*/
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
		h3 {
			font-size: 60px;
			color: beige;
			padding-bottom: 30px;
		}
/*--------------------------------------------------------------------------------------------------------*/
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
		.home, .contact {
			border-right: 2px rgb(33, 33, 34) solid;
			animation: nav-c 2s;
		}
		.about, .gallery {
			border-left: 2px  rgb(33, 33, 34) solid;
			animation: nav-c 2s;
		}
	    a .contact {
			scroll-behavior: smooth;
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
	
 /*--------------------------------------------------------------------------------------------------*/      

        .banner {
        	width: 100vw;
        	height: 100vh;
        	justify-content: center;
        	align-items: center;
        	display: flex;
        } 
         .banner2 {
        	width: 100vw;
        	height: 90vh;
        	justify-content: center;
        	align-items: center;
        	display: flex;
        } 
   .img {
			 height: 300px;
			 background-attachment: fixed;
			 background-image: url("img/img1.jpg");
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
         .img2-div {
         	 width: 100vw;
            height: 10030vh;
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
		
        .box1 {
           height: 60vh;
           width: 100%;
           justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            font-size: 20px;
            
            padding: 10px;
		} 
		.box1 .text-div {
			
			width: 75%;

		}
      .linear-gradient {
			
			 position: absolute;
			 width: 105%;
			 height: 104%;
			 background-image: linear-gradient(rgb(0, 0, 0, 0.4), rgb(0, 0, 0, 0.4));
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
		.img-text {
			width: 70vw;
			height: 100%;
			justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            position: absolute;
            color: white;
            padding: 20px;

		}
		.message-form {
		    
			justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            position: absolute;
            padding: 20px;
			background-image: linear-gradient(rgb(0, 0, 0, 0.5), rgb(0, 0, 0, 0.5));
			border-radius: 10px;
			
		}
		.img-text {
			animation: 1.4s textFade;
		}
        .text-div {
        	justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            transform: translateX(-1500px);
            transition: 1s;
        }
        .text-animation {
        	 transform: translateX(0px);
        }
		@keyframes textFade {
		from	{
                  transform: scale(1.6);
                  filter: blur(10px);
			}
			to {
				transform: scale(1);
				filter: blur(0);
			}
		}
	.message-form input, textarea{
		background-color: rgb(0, 0, 0, .3);
		padding: 2px;
		border-radius: 5px 5px 30px 5px;
        border: 0;
        border-bottom: 2px solid black;
        color: white;
	    margin: 5px;
		}
		h5 {
			color: white;
		}
		button {
			border: none;
			padding: 5px 10px 5px 10px;
			margin: 10px;
			border-radius: 30px 5px 30px 5px;
		}
/*-------------------------------------------------------------------------------------------------*/
        .icon-con {
			justify-content: space-around;
			align-items: center;
			display: flex;
		
			width: 100%;
			height: 100%;
		}
		.con {
			justify-content: space-around;
			align-items: center;
			display: flex;
			width: 100vw;
			height: 5vh;
			padding-top: 50px;
		
		}
		.flip {
			justify-content: center;
			align-items: center;
			display: flex;
			flex-direction: row;
			width: 100%;
			height: 100%;
			position: absolute;
			transform-style: preserve-3d;
			transition: 1s;
			cursor: pointer;
			
		}
		
		
	
        .flip  {
			width: 30px;
			height: 60px;
			
		}
       .front {
		width: 100%;
		height: 100%;
	
		backface-visibility: hidden;
		position:absolute;
	   }
	   .back {
		width: 100%;
			height: 100%;
			position:absolute;	
			backface-visibility: hidden;
		}
		.front i, .back i {
			color: #ABC;
			font-size: 30px;
		}
	   .logo-trans {
		   transform: rotateY(180deg);
	   }
	 
	   .box-hide {
		   width: 200px;
		   height: 36px;
		   background-color: white;
		   backface-visibility: hidden;
		position: absolute;
	   }
	  .text {
		position: absolute;
		z-index: -2;
		transform: rotateY(180deg);
		
	  } 
	  .text a {
		  color: #ABC;
		  text-decoration: none;
		 
	  }
	
/*-------------------------------------------------------------------------------------------------------*/
</style>
    <script type="text/javascript">
  
        const text = document.querySelector(".text-div")
        const card = document.querySelector(".flip1")
	    const text1 = document.querySelector(".flip2")
        const land = document.querySelector(".landing")
		const left = document.querySelector(".left")
		const right = document.querySelector(".right")
	   const text2 = document.querySelector('.text-con3')
        const signBtn = document.querySelector('.sign')
		const signPage = document.querySelector('.signup-page')
	
	let images = [
		  {
           image: './img/img1.jpg'
		  },
		  {
			image: './img/img4.jpg'
		  },
		  {
			image: './img/img1.jpg'
		  }
	  ]
	 
       images.forEach(({image}, i) => {
		const con = document.createElement('div')
	
			 const btnCon = document.createElement('div')
			 const box = document.createElement('div')
	         const text = document.createElement('h1')
			 text.setAttribute("class", "text-box")
			 box.setAttribute('class', 'box-text')
			 land.appendChild(con)
			 btnCon.setAttribute('class', 'btn-arrow')
			 con.setAttribute("class", "img-landing")
			 
			 con.style.backgroundImage = "url('"+ image + "')";	
			 con.appendChild(box)
			 box.appendChild(text)	
			 
	   }) 


	   const landing = document.querySelectorAll(".img-landing")
	   let current = 0;
	   
        function reset() {
	   for (let i = 0; i < landing.length; i++) {
		      landing[i].style.display = 'none';
				console.log(landing[i])
          }
	           //console.log(landing.length)
	      }
	      function start() {
	     	reset();
	      landing[0].style.display = 'block';
	    }
         function slideLeft() {
	         reset()
	         landing[current - 1].style.display = 'block';
	        current--;
         }
			
			 
			 left.addEventListener('click', function() {
	          if(current === 0) {
              current = landing.length;
	       }
	          slideLeft()
          })
            function slideRight() {
            	reset()
         	landing[current + 1].style.display = 'block';
	        current++;
          }
          right.addEventListener('click', function() {
	        //alert("working")
	        if(current === landing.length - 1) {
		       current = -1;
		
	        } 
                 slideRight();
		}) 
		
		
            start()
    	window.onscroll = function() {
    		if(window.scrollY >= 1700) {
    		//	console.log(scrollY)
    			text.classList.add("text-animation")
			
    		} else {
    			text.classList.remove("text-animation")
				

    		}
    	}
     
		
	    card.addEventListener('click', function() {
			if(!this.classList.contains('logo-trans')) {
				this.classList.add('logo-trans')
				
			} else {
				this.classList.remove('logo-trans')
				
			}
		})

		text1.addEventListener('click', function() {
			if(!this.classList.contains('logo-trans')) {
				this.classList.add('logo-trans')
				
			} else {
				this.classList.remove('logo-trans')
				
			}
		})
  


		const textImg1 = document.querySelector(".text1")
        const textImg2 = document.querySelector(".text2")
        const textImg3 = document.querySelector(".text3")
        const textImg4 = document.querySelector(".text4")
	//	const imgCover = document.querySelectorAll(".grad")
		const ban1 = document.querySelector(".ban-img1")
		const ban2 = document.querySelector(".ban-img2")
		const ban3 = document.querySelector(".ban-img3")
		const ban4 = document.querySelector(".ban-img4")


//	ban3.forEach(ban3s => {
	//	console.log(childNodes[1])
	
		ban1.addEventListener('click', () => {
			
			if(!textImg1.classList.contains('active1')) {
				textImg1.classList.add('active1')
			} else {
				textImg1.classList.remove('active1')
			} 
		})
//	}) 

ban2.addEventListener('click', () => {
			
			if(!textImg2.classList.contains('active1')) {
				textImg2.classList.add('active1')
			} else {
				textImg2.classList.remove('active1')
			} 
		})

		ban3.addEventListener('click', () => {
			
			if(!textImg3.classList.contains('active1')) {
				textImg3.classList.add('active1')
			} else {
				textImg3.classList.remove('active1')
			} 
		})
		ban4.addEventListener('click', () => {
			
			if(!textImg4.classList.contains('active1')) {
				textImg4.classList.add('active1')
			} else {
				textImg4.classList.remove('active1')
			} 
		})
const grad1 = document.querySelector('.grad1')
const grad2 = document.querySelector('.grad2')
const grad3 = document.querySelector('.grad3')
const grad4 = document.querySelector('.grad4')

ban1.addEventListener('click', () => {
			
			if(!grad1.classList.contains('active2')) {
				grad1.classList.add('active2')
			} else {
				grad1.classList.remove('active2')
			} 
		})
//	}) 

ban2.addEventListener('click', () => {
			
			if(!grad2.classList.contains('active2')) {
				grad2.classList.add('active2')
			} else {
				grad2.classList.remove('active2')
			} 
		})

		ban3.addEventListener('click', () => {
			
			if(!grad3.classList.contains('active2')) {
				grad3.classList.add('active2')
			} else {
				grad3.classList.remove('active2')
			} 
		})
		ban4.addEventListener('click', () => {
			
			if(!grad4.classList.contains('active2')) {
				grad4.classList.add('active2')
			} else {
				grad4.classList.remove('active2')
			} 
		})

	//------------------------------------------------------------------------------------------------//
    const page = document.querySelector('.page-con')

	
/*
	signBtn.addEventListener('click', () => {
		//alert('working')
      signPage.classList.toggle('vis')
	})
*/
  //  const btnSign = document.querySelector('.btn-sign-in')
  //  const signDiv1 = document.querySelector('.signin-div')

//	btnSign.addEventListener('click', () => {
//		
	//	alert('working')
	    signDiv1.classList.toggle('sig')
//	})

    </script>


 

