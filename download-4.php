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
	<title>Download</title>
	<script type="text/javascript" src="js/jq.js"></script>
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="contactme.css">
	<!-- MDB Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


	<style type="text/css">
		#grid1{
			height: 1500px;
			background-image: radial-gradient(ellipse at top,#04619f,#000000);
		}
		.dotted {
    		border: 1px dotted #ffffff; border-style: none none dotted; color: #fff; background-color: #fff; max-width: 80%;
    	}
    </style>
</head>
<body id="overflow">
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

	<!-- Image Starts -->
	<div class="container-fluid mt-5 pt-2">
		<div class="row">
			<div class="col-md-8">
				<img src="img/4.png" class="img-fluid ml-4" data-aos="fade-right" alt="..." style="max-width: 100%;">
			</div>
			<div class="col-md-4 my-auto" align="center">
				<h1 class="text-white mb-3"  data-aos="fade-down"> Wallpaper Info:</h1>
				<hr class="dotted" data-aos="fade-left">
				<p class="text-white"  data-aos="fade-up"> Dimensions: 1920x1080</p>
				<p class="text-white"  data-aos="fade-up"> Rs 499</p>
				<button type="button" class="btn btn-outline-warning mr-2" data-aos="fade-up">Add to Cart</button>
				<button type="button" class="btn btn-outline-warning" data-aos="fade-up"><i class="bi-suit-heart-fill"></i></button>
				<button type="button" class="btn btn-outline-warning" data-aos="fade-up"><i class="bi-plus-lg"></i></button>
			</div>
		</div>
	</div>
	<!-- Image Ends -->

	<div class="container"  data-aos="fade-up">
	<h1 class="text-warning mt-5 pt-5" align="center"> Popular Wallpapers</h1>
	<hr class='dotted'/ >
	</div>

	<!-- Wallpaper Cards Starts -->
	<div class="container-fluid mt-4" >
		<div class="row"  data-aos="zoom-in">
			<div class="card ml-4 bg-dark" style="width: 30rem;">
			  <img src="img/7.png" class="card-img-top " alt="..." >
            	<div class="image-overlay image-overlay--blur">
                <a class="link-overlay" href="download-1.html"></a>
                <div class="card-text">
	                    <a href="login.php"><button type="button" class="btn btn-outline-danger mr-2"><i class="bi-suit-heart-fill"></i></button></a>
	                    <a href="register.php"><button type="button" class="btn btn-outline-light mr-2"><i class="bi-plus-lg"></i></button></a>
                	</div>
                </div>
			</div>
			<div class="card mx-auto bg-dark" style="width: 30rem;">
			  <img src="img/8.png" class="card-img-top " alt="..." >
            	<div class="image-overlay image-overlay--blur">
                <a class="link-overlay" href="download-1.html"></a>
                <div class="card-text">
	                    <a href="login.php"><button type="button" class="btn btn-outline-danger mr-2"><i class="bi-suit-heart-fill"></i></button></a>
	                    <a href="register.php"><button type="button" class="btn btn-outline-light mr-2"><i class="bi-plus-lg"></i></button></a>
                	</div>
                </div>
			</div>
			<div class="card mr-4 bg-dark" style="width: 30rem;">
			  <img src="img/9.png" class="card-img-top " alt="..." >
            	<div class="image-overlay image-overlay--blur">
                <a class="link-overlay" href="download-1.html"></a>
                <div class="card-text">
	                    <a href="login.php"><button type="button" class="btn btn-outline-danger mr-2"><i class="bi-suit-heart-fill"></i></button></a>
	                    <a href="register.php"><button type="button" class="btn btn-outline-light mr-2"><i class="bi-plus-lg"></i></button></a>
                	</div>
                </div>
			</div>
		</div>
		<div class="row mt-4" data-aos="zoom-in">
			<div class="card ml-4 bg-dark" style="width: 30rem;">
			  <img src="img/10.png" class="card-img-top " alt="..." >
            	<div class="image-overlay image-overlay--blur">
                <a class="link-overlay" href="download-1.html"></a>
                <div class="card-text">
	                    <a href="login.php"><button type="button" class="btn btn-outline-danger mr-2"><i class="bi-suit-heart-fill"></i></button></a>
	                    <a href="register.php"><button type="button" class="btn btn-outline-light mr-2"><i class="bi-plus-lg"></i></button></a>
                	</div>
                </div>
			</div>
			<div class="card mx-auto bg-dark" style="width: 30rem;">
			  <img src="img/11.png" class="card-img-top " alt="..." >
            	<div class="image-overlay image-overlay--blur">
                <a class="link-overlay" href="download-1.html"></a>
                <div class="card-text">
	                    <a href="login.php"><button type="button" class="btn btn-outline-danger mr-2"><i class="bi-suit-heart-fill"></i></button></a>
	                    <a href="register.php"><button type="button" class="btn btn-outline-light mr-2"><i class="bi-plus-lg"></i></button></a>
                	</div>
                </div>
			</div>
			<div class="card mr-4 bg-dark" style="width: 30rem;">
			  <img src="img/12.png" class="card-img-top " alt="..." >
            	<div class="image-overlay image-overlay--blur">
                <a class="link-overlay" href="download-1.html"></a>
                <div class="card-text">
	                    <a href="login.php"><button type="button" class="btn btn-outline-danger mr-2"><i class="bi-suit-heart-fill"></i></button></a>
	                    <a href="register.php"><button type="button" class="btn btn-outline-light mr-2"><i class="bi-plus-lg"></i></button></a>
                	</div>
                </div>
			</div>
		</div>
	</div>
	<!-- Wallpaper Cards Ends -->
	
	<!-- AOS Script -->
	<script>
  		AOS.init();
	</script>
</div>
</body>
</html>