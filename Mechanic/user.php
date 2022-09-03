<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mechanic</title>
	<link rel="shortcut icon" type="image/png" href="tire.png">
	<link rel="stylesheet" type="text/css" href="css2/style1.css">
</head>
<body >
<header>
	<div class = "main">
		<div class ="logo" >
			<img src="mec_logo.png">
			</div>
	    
	    <ul>
			<li><a style="font-size: 30px;" href="logout.php">Logout</a></li>
			
			
			
		</ul>
        </div>

	<div class="title">
		<h1> User Mechanic Portal </h1>
	</div>

	
        

	<div class="button">
		<a href="user1.php"  class="btn">Book a Mechanic</a>
		<a href="user12.php" class="btn">Mechanic Details</a>
		
	</div>

</header>


</body>
<footer>© Shihab Rumee Chowdhury 2022 

</footer>
</html>