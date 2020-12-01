
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
</div>
</div>
        </body>
</html>
        <style>
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
	
        </style>
        <script>
              const text = document.querySelector(".text-div")
        const card = document.querySelector(".flip1")
        const text1 = document.querySelector(".flip2")
        
            	window.onscroll = function() {
    		if(window.scrollY >= 100) {
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
        </script>