<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

<style type="text/css">
	
	

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px ;
		height: 35px;
		width: 80px;
		color: white;
		background-color: black;
		border: none;
		border-radius: 30px;
	}

	#box{

		
		background-color:  #FFB268 ;
		margin: auto;
		width: 400px;
		padding: 20px;
		border-radius: 30px;
	    box-shadow: 0 0 7px 1px rgb(150,150,150);
	    border:0px solid black ;
	}

    body{
    margin-top: 250px;

    }

    a{
    	padding: 10px;
    	margin-left: 220px;
		color: white;
		background-color: black;
		border: none;
		border-radius: 30px;
		text-decoration: none;
    }

    a:hover{
	 background-color: #fff;
	color: #000;
}

#button:hover{
	background-color: #fff;
	color: #000;
}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;margin: 10px;color: black;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup">

			<a href="login.php">Login</a><br><br>
		</form>
	</div>
</body>
</html>