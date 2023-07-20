<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jq.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- Style.css -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="thank.css">
	<link rel="stylesheet" href="contactme.css">
	<!-- MDB -->
	<!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
	<!-- MDB Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		

</head>
<body id="overflow"> 
<div id="bg">	
	<!-- navbar start -->
	
	<nav class="navbar navbar-expand-lg navbar-dark darkcol" >
	  <a class="navbar-brand text-warning" href="home.php">Wallpaper Bazzar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link" href="home.php" >Wallpapers <span class="sr-only">(current)</span></a>
	      </li>
		  <li class="nav-item active">
	        <a class="nav-link" href="decorations.php" >Decorations <span class="sr-only">(current)</span></a>
	      </li>
		
	      <li class="nav-item active">
	        <a class="nav-link" href="about-us.php">About Us <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="contact-us.php">Contact Us <span class="sr-only">(current)</span></a>
	      </li>
		  <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
	    </ul>
	  </div>
	  <a href="addtocart.php" class="fa fa-shopping-cart" style="font-size:36px">&nbsp;</a>
	  <div class="d-flex">
	  <a class="nav-link" href="#"> <img src="img/user.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
	  </div>
	  
	</nav>
	<!-- navbar end -->
	<!---thank you--->
	<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>Thanks for ordering.  </p>
      <p>You should receive a confirmation email soon  </p>
      <a class="nav-link" href="home.php" button class="go-home" >
      GO HOME
      </button>
	  </a>
    </div>
   
</div>
</div>



<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
    
    <!-- AOS Script -->
	<script>
  		AOS.init();
	</script>
</div>
</body>
</html>