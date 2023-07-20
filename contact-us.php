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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Contact-Us</title>
	<script type="text/javascript" src="js/jq.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="contactme.css">

	<style type="text/css">
		#grid1{
			height: 725px;
			background-image: radial-gradient(ellipse at top,#04619f,#000000);
		}
	</style>
</head>
<body>
<div id="grid1">
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

	<!-- Card Starts -->
	<h3>Request Quote or Submit feedback</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="messages" id="messages" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
	<!-- Card Ends -->

	<!-- AOS Script -->
	<script>
  		AOS.init();
	</script>
</div>
</body>
</html>