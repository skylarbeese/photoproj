
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
    <?php 
   
       if(isset($_SESSION['user'])) {
       echo '<h1> logout </h1>';
        
       } else {
       echo ' <h1> login </h1>';
       }
    ?>
    
   
</body>
</html>