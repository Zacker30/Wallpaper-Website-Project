<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: home.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: home.php");
                            
                        }
                    }

                }

    }
}    


}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
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
	        <a class="nav-link" href="about-us.php">About Us <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="contact-us.php">Contact Us <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	  </div>
	  <a href="login.php" class="fa fa-shopping-cart" style="font-size:36px">&nbsp;</a>
	  <div class="d-flex">
	  	<a href="login.php"><button type="button" class="btn btn-outline-primary mr-2">Login</button></a>
	  	<a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>
	  </div>
	</nav>
	<!-- navbar end -->

	<!-- Login Form Starts -->
<div class="container mt-4">
<h3>Please Login Here:</h3>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



</div>
	<!-- Login Form Ends -->

	<!-- AOS Script -->
	<script>
  		AOS.init();
	</script>
</div>
</body>
</html>