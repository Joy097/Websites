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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:user.php");
						die;
					}
				}
			}
            

            $query1 = "select * from admin where user_name = '$user_name' limit 1";
			$result1 = mysqli_query($con, $query1);

			if($result1)
			{
				if($result1 && mysqli_num_rows($result1) > 0)
				{

					$user_data = mysqli_fetch_assoc($result1);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:admin.php");
						die;
					}
				}
			}
			
			
			echo "wrong username or password!";
		}
		else
		{
			echo "wrong username or password!";
		}
	}
	

 ?>


<!DOCTYPE html>
<html>
<head>
	<title >Login</title>
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
			<div style="font-size: 30px;margin: 10px;color: black;">Login</div>

			<input id="text" type="text"     name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login">

			<a  href="signup.php">Signup</a><br><br>
		</form>
	</div>
</body>
</html>